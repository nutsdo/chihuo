<?php
/** 
 * @function：Lottery.php
 * @description：微信转盘主表模型
 * @date：2014-12-17
 * @author：by Administrator
 * @interpreter
 * @param 
 * @param 
 */ 
class Lottery extends Eloquent{
	
	protected $table = 'lottery';
	
	public function prize(){
		return $this->belongsToMany('LotteryPrize','lottery_option','lottery_id','prize_id');
	}
	
}