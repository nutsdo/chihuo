<!-- BEGIN SIDEBAR MENU -->
<ul class="sidebar-menu">
	@foreach($permissions as $pk=>$per)
	  @foreach($per as $k=>$p)
	   @if(!empty($has_permisssions))
	    @if(array_get($has_permissions,$k))
		<li class="has-sub">
			<a href="javascript:;" class="">
			    <span class="icon-box"> <i class="icon-user"></i></span> {{Lang::get('permission.'.$k)}}
                <span class="arrow"></span>
            </a>
            <ul class="sub">
               @foreach($p as $v)
                    <li class="active"><a href="{{URL::route($v)}}">{{Lang::get('permission.'.$v)}}</a></li>
               @endforeach
            </ul>
		</li>
		@endif
	   @else
	     <li class="has-sub">
			<a href="javascript:;" class="">
			    <span class="icon-box"> <i class="icon-user"></i></span> {{Lang::get('permission.'.$k)}}
                <span class="arrow"></span>
            </a>
            <ul class="sub">
               @foreach($p as $v)
                    <li class="active"><a href="{{URL::route($v)}}">{{Lang::get('permission.'.$v)}}</a></li>
               @endforeach
            </ul>
		 </li>
	   @endif
	  @endforeach
	@endforeach
</ul>
<!-- END SIDEBAR MENU -->