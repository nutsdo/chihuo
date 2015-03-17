<?php namespace admin;
use View;
use Input;
use Validator;
use Response;
use Redirect;
use Merchant;
class MerchantController extends \Controller{
	
	protected $layout = "layouts.main";
	
	public function index(){
		//查询数据库
		$merchants = Merchant::orderBy('created_at')->Paginate(15);
		return View::make('admin.wechat.merchant.index')->withMerchants($merchants);
	}
	
	public function create(){
		return View::make('admin.wechat.merchant.create');
	}
	
	public function store(){
		//check if its our form
		if ( Session::token() !== Input::get( '_token' ) ) {
			return Response::json( array(
					'msg' => 'Unauthorized attempt to create setting'
			) );
		}
		$rules = array(
			'name' => 'required|min:3|max:128',
			'title' => 'required|min:3'
		);
		$cover = '';
		$name = Input::get( 'name' );
		$title = Input::get( 'title' );
		$url = Input::get('url');
		$sort = Input::get('sort');
		$is_top = Input::get('is_top');

		if (Input::hasFile('cover')) {
			$file = Input::file('cover');
			$ext = $file->guessClientExtension();
			$filename = $file->getClientOriginalName();
			$file->move(public_path().'/uploads/images/cover', md5(date('YmdHis').$filename).'.'.$ext);
			$cover = '/uploads/images/cover/'.md5(date('YmdHis').$filename).'.'.$ext;
		}
		//.....
		//validate data
		//and then store it in DB
		$new_post = array(
				'name' => $name,
				'title' => $title,
				'url' => $url,
				'sort' => $sort,
				'cover' => $cover,
				'is_top' => $is_top,
		);

		$v = Validator::make($new_post, $rules);
		if ($v->fails()) {
			return Redirect::to('admin/wechat/merchant/create')->withErrors($v);
		}else {
			$merchant = new Merchant;
			$merchant->name = $name;
			$merchant->title = $title; 			
			$merchant->url = $url;
			$merchant->cover = $cover;
 			$merchant->sort = $sort;
 			$merchant->is_top = $is_top;
 			$merchant->save();
			if ($merchant->id) {
				return Redirect::to('admin/wechat/merchant');
			}
		}
		
		//return Response::json( $response );
	}
	
	public function show($id){	
		$post = Merchant::find($id);
		$views = $post->views+1;
		$post->views=$views;
		$post->save();
		$pre = Merchant::where('id','>',$id)->orderBy('id','DESC')->first();
		$next = Merchant::where('id','<',$id)->orderBy('id','ACE')->first();

		return View::make('template.default.show')->withPost($post)
												->withPre($pre)
												->withNext($next);
	}
	
	public function edit($id){
		//查询数据库
		$post = Post::find($id);
		$tags = Post::find($id)->tag;
		$tag = '';
		foreach ($tags as $k=>$t){
			if ($k>0) {
				$tag .= ','.$t->name;
			}else {
				$tag = $t->name;
			}	
		}
		return View::make('admin.post_edit')->withPost($post)
											->withTag($tag);
	}
	
	public function update(){
		if ( Session::token() !== Input::get( '_token' ) ) {
			return Response::json( array(
					'msg' => 'Unauthorized attempt to create setting'
			) );
		}
		$rules = array(
				'title' => 'required|min:3|max:128'
		);
		$cover = '';
		$title = Input::get( 'title' );
		$author = Input::get( 'author' );
		$post_time = Input::get('post_time');
		$content = Input::get('content');
		$tags = Input::get('tags');
		$tag = explode(',',$tags);
		$post_id = Input::get('post_id');
		if (Input::hasFile('cover')) {
			$file = Input::file('cover');
			$ext = $file->guessClientExtension();
			$filename = $file->getClientOriginalName();
			if ($filename) {
				$r = Post::find($post_id);
				if ($r->cover) {
					$r->cover = '';
					$r->save();
					unlink($r->cover);
				}
			}
			$file->move(public_path().'/uploads/images/cover', md5(date('YmdHis').$filename).'.'.$ext);
			$cover = '/uploads/images/cover/'.md5(date('YmdHis').$filename).'.'.$ext;
		}else {
			$r = Post::find($post_id);
			$cover = $r->cover;
		}
		//.....
		//validate data
		//and then store it in DB
		$new_post = array(
				'title' => $title,
				'author' => $author,
				'post_time' => $post_time,
				'cover' => $cover,
				'content' => $content,
		);
		
		$v = Validator::make($new_post, $rules);
		if ($v->fails()) {
			return Redirect::to('admin/post/add');
		}else {
			$post = Post::find($post_id);
			$post->title = $title;
			$post->author = $author;
			$post->post_time = $post_time;
			$post->cover = $cover;
			$post->content = $content;
			$post->views = rand(800,1200);
			$post->user_id = Sentry::getUser()->id;
			$post->save();
			if ($post->id) {
				DB::table('tag_item')->where('post_id', '=', $post_id)->delete();	
				foreach ($tag as $v){
					//查询标签数据库
					//判断是否存在标签
					$t = new Tag;
					$res = Tag::where('name','=',$v)->first();
					if ($res) {
						Post::find($post->id)->tag()->save($res);
					}else{				
						$t->name = $v;
						$t->save();
						Post::find($post->id)->tag()->save($t);
					}	
				}
				return Redirect::to('admin/post');
			}
		}
	}
	
	public function delete($id){
		$merchant = Merchant::find($id);		
		$merchant->delete();
		return Redirect::to('admin/wechat/merchant');
	}
}