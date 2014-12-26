<?php
/** 
 * @function：ZhuanpanControlle.php
 * @description：转盘
 * @date：2014-12-11
 * @author：by Administrator
 * @interpreter
 * @param 
 * @param 
 */ 
namespace admin;

use View;
use Response;
use Lottery;
use Redirect;
use Input;
use Session;
use Validator;
use LotteryPrize;
use LotteryOption;
use DB;
use LotteryUser;
use LotteryLog;
class LotteryController extends \Controller{
	protected $layout = "layouts.main";
	
	public function index(){
		//是否绑定微信号
		//查询数据库，按openid查询
		
		//对比openid
// 		if ($openid=1) {
// 			return '您已经绑定了微信号，可以抽奖！';
// 		}else{
// 			return '您未绑定微信号，请绑定后再抽奖！';
// 		}
		
// 		$prize_arr = array('one'=>1,'two'=>2,'three'=>3,'four'=>400);
// 		echo $this->get_rand($prize_arr);
		
		//按id查询转盘结束时间
		$id =1;
		$lotteries = Lottery::all();
		
		return View::make('admin.wechat.lottery.index')->with('lotteries',$lotteries);

	}
	
	//添加活动页面
	public function create(){
		return View::make('admin.wechat.lottery.create');
	}
	
	public function store(){
			//check if its our form
		if ( Session::token() !== Input::get( '_token' ) ) {
			return Response::json( array(
					'msg' => 'Unauthorized attempt to create setting'
			) );
		}
		$check = array(
				'title' => 'required|min:3|max:128'
		);
		$picurl = '';
		$title = Input::get( 'title' );
		$keyword = Input::get( 'keyword' );
		$start_time = strtotime(Input::get('start_time'));
		$end_time = strtotime(Input::get('end_time'));
		$description = Input::get('description');
		$rules = Input::get('rules');
		$numbers = Input::get('numbers');

		if (Input::hasFile('picurl')) {
			$file = Input::file('picurl');
			$ext = $file->guessClientExtension();
			$filename = $file->getClientOriginalName();
			$file->move(public_path().'/uploads/images/lottery', md5(date('YmdHis').$filename).'.'.$ext);
			$picurl = '/uploads/images/lottery/'.md5(date('YmdHis').$filename).'.'.$ext;
		}
		//.....
		//validate data
		//and then store it in DB
		$new_lottery = array(
				'title' => $title,
				'keyword' => $keyword,
				'start_time' => $start_time,
				'end_time' => $end_time,
				'description' => $description,
				'rules' => $rules,
				'numbers' => $numbers,
		);

		$v = Validator::make($new_lottery, $check);
		if ($v->fails()) {
			return Redirect::route('lottery-create');
		}else {
			if (Input::get('id')){
				$lottery = Lottery::find(Input::get('id'));
			}else {
				$lottery = new Lottery;
			}
			$lottery->title = $title;
 			$lottery->keyword = $keyword;
			$lottery->start_time = $start_time;
			$lottery->end_time = $end_time;
			$lottery->description = $description;
			if ($picurl!='') {
				$lottery->picurl = $picurl;
			}		
 			$lottery->rules = $rules;
 			$lottery->numbers = $numbers;
 			$lottery->save();
			if ($lottery->id) {
				return Redirect::route('wechat.lottery');
			}
		}
	}
	//修改活动信息
	public function edit($id){
		$lottery = Lottery::find($id);
		return View::make('admin.wechat.lottery.edit')->with('lottery',$lottery);
	}
	public function destory($id){
		$lottery = Lottery::find($id);		
		$lottery->delete();
		return Redirect::route('wechat.lottery');
	}
	//奖品列表
	public function prizeList(){
		$prizes = LotteryPrize::all();
		return View::make('admin.wechat.lottery.prize-list')->with('prizes',$prizes);
	}
	
	//设置活动奖品
	public function setPrize($id){
		$lottery = Lottery::find($id);
		//$prizes = LotteryPrize::where('id','=',$id)->get();
		//var_dump($prizes);
// 		print_r($lottery->prize);
// 		foreach ($lottery->prize as $p){
// 			echo $p->name;
// 		}
// 		exit(); 
		return View::make('admin.wechat.lottery.prize-lottery-list')->with('lottery',$lottery);
	}
	//
	public function setPrizeAdd($id){
		$prizes = LotteryPrize::all();
		return View::make('admin.wechat.lottery.prize-lottery-add')->with('id',$id)
																   ->with('prizes',$prizes);
	}
	//保存奖品设置
	public function setPrizeStore(){

		$option = new LotteryOption;
		$lottery_id = Input::get('lottery_id');
		$prize_id = Input::get('prize_id');
		$type = Input::get('type');
		$gaivl = Input::get('gailv');
		$maxnum = Input::get('maxnum');
		$jlnum = Input::get('jlnum');
		
		$option->lottery_id = $lottery_id;
		$option->prize_id = $prize_id;
		$option->type = $type;
		$option->gailv = $gaivl;
		$option->maxnum = $maxnum;
		$option->jlnum = $jlnum;
		$option->save();
		if($option->id){
			return Redirect::route('lottery-prize',$lottery_id);
		}else {
			return Redirect::route('prize-lottery-add');
		}
	}
	//添加活动奖品
	public function createPrize(){		
		return View::make('admin.wechat.lottery.prize-create');
	}
	//保存奖品信息
	public function storePrize(){
		if ( Session::token() !== Input::get( '_token' ) ) {
			return Response::json( array(
					'msg' => 'Unauthorized attempt to create setting'
			) );
		}
		
		$name = Input::get('name');
		$type = Input::get('type');
		$prize_sn = Input::get('prize_sn');
		$prize_pic = '';
		$description = Input::get('description');
		$amount = Input::get('amount');
		
		if (Input::hasFile('prize_pic')) {
			$file = Input::file('prize_pic');
			$ext = $file->guessClientExtension();
			$filename = $file->getClientOriginalName();
			$file->move(public_path().'/uploads/images/lottery', md5(date('YmdHis').$filename).'.'.$ext);
			$prize_pic = '/uploads/images/lottery/'.md5(date('YmdHis').$filename).'.'.$ext;
		}
		
		$prize = new LotteryPrize();
		$prize->name = $name;
		$prize->type = $type;
		$prize->prize_sn = $prize_sn;
		$prize->description = $description;
		$prize->prize_pic = $prize_pic;
		$prize->amount = $amount;
		$prize->save();
		if ($prize->id) {
			return Redirect::route('prize-list');
		}else {
			return Redirect::route('prize-create');
		}
	}
	
	//修改奖品信息
	public function editPrize($id){
		$prize = lotteryPrize::find($id);
		return View::make('admin.wechat.lottery.prize-edit')->with('prize',$prize);
	}
	
	/*
	 * 
	 * 微信部分
	 * 
	 * */
	
	public function show($id){
		$isend = $this->isEnd($id);
		//查询奖品列表
		$lottery = Lottery::find($id);
		$prizelist = json_encode($lottery->prize);
		$row = $this->checkNum($id,1);//抽奖次数
		//查询中奖列表
		//按用户id查询
		
		return View::make('admin.wechat.lottery.show')->with('isend',$isend)
													  ->with('lottery',$lottery)
													  ->with('prizelist',$prizelist)
													  ->with('row',$row);
	}
	
	public function join($id){
		//
		$isStart = $this->isStart($id);
		if ($isStart) {
			if (!$this->isEnd($id)) {
				$array = array("type"=>4);		
			}else {
				//查询奖品列表
// 				$lottery = Lottery::find($id);
// 				$prizelist = json_encode($lottery->prize);
// 				print_r($lottery->prize);
				$jplist = DB::table('lottery_prize')
					->leftJoin('lottery_option', 'lottery_prize.id', '=', 'lottery_option.prize_id')
					//->select('lottery_prize.title', 'lottery_option.prize_id', 'lottery_option.gailv', 'lottery_option.lottery_id', 'lottery_prize.amount', 'lottery_prize.description')
					->where('lottery_option.lottery_id','=',$id)
					->get();
				$array = $this->getResult($jplist,$id);
			}
		}else {
			$array = array('type'=>3);
		}
		
		return Response::json($array);
	}
	
	
	//
	public function getResult($jplist,$lottery_id,$openid=1){
		$row = $this->checkNum($lottery_id,$openid);//抽奖次数
		if ($row !=0) {
			$arr = array();
			//按概率计算
			//print_r($jplist);
			foreach($jplist as $key=>$value){
				//每个奖品的中奖概率
				$arr[$key] = $value->gailv;
			}
			$rid = $this->getRand($arr);
			$res = $jplist[$rid];//中奖项
			$num = $row-1;
			//是否第一次参加
			$openid=1;
			$user = LotteryUser::whereRaw("uid = $openid and lottery_id=$lottery_id")->first();
			if ($user->id) {
				//
				$user->number = $user->number+1;
				$user->save();			
			}else {
				$new = new LotteryUser;
				$new->uid = $openid;
				$new->lottery_id = $lottery_id;
				$new->number = 1;
				$new->save();
			}
			//var_dump($res);
			$result['type'] = 2;
			if ($res->amount == 0) {
				$result['type'] = 1;
			}else{
				//库存减1
				$prize = LotteryPrize::find($res->prize_id);
				$prize->amount -= 1;
				$prize->save();
				//保存用户中奖信息
				if ($res->is_thanks!=1) {
					$prize = new LotteryLog;
					$prize->uid = $openid;
					$prize->lottery_id = $lottery_id;
					$prize->prize_id = $res->prize_id;
					$prize->state = 0;
					$prize->save();
				}
			}
			//抽奖次数
			$result['num'] = $num;
			//计算中奖角度的位置
			$result['angle']      = 360 - (360 / sizeof($jplist) / 2) - (360 / sizeof($jplist) * ($rid)) - 90;
			$result['praisename'] = $res->title;
			return $result;
		}else {
			$result['type']       = 0;
			$result['num']        = 0;
			//计算中奖角度的位置
			$result['angle']      = -90;
			$result['praisename'] = "";
			return $result;
		}
	}
	
	//大转盘抽奖算法
	/*
	 * @param $proArr  预设数组  
	 * 中奖概率为$proArr 之和分之一
	 * */
	public function getRand($proArr){
		
		$result = '';
		//中奖精度 $proArr 之和
		$proSum = array_sum($proArr);
		//循环数组
		foreach($proArr as $key=> $proCur){
			//获取1-$proSum之间的一个随机数
			$randNum = mt_rand(1,$proSum);
			if($randNum <= $proCur){
				$result = $key;
				break;
			}else{
				$proSum -=$proCur;
			}
		}
		unset($proArr);
		return $result;
	}
	
	
	/*
	 * 是否结束
	 * @param @id 活动id
	 * */
	public function isEnd($id){
		
		$lottery = Lottery::find($id);
		if ($lottery->endtime < time()) {
			$isend=true;
		}else{
			$isend=false;
		}				
		return $isend;
	}
	/*
	 * 是否开始
	* @param @id 活动id
	* */
	public function isStart($id){
	
		$lottery = Lottery::find($id);
		if ($lottery->endtime < time()) {
			$isStart=true;
		}else{
			$isStart=false;
		}
		return $isStart;
	}
	
	//查看用户抽奖是否超标
	public function checkNum($lottery_id,$openid){
		//查询活动每天参与次数
		$lottery = Lottery::find($lottery_id);
		//查询
		$log = LotteryUser::whereRaw("uid = $openid and lottery_id=$lottery_id")->first();
		if ($log) {
			if ($log->number > $lottery->numbers) {
				return 0;
			}else{
				return $lottery->numbers - $log->number;
			}
		}
		return $lottery->numbers;
	}
	
}