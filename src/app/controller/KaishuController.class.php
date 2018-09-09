<?php
/**
* @file KaishuController.class.php
* @author gongqingliang
* @mail gongqingliang@baidu.com
* @date 2018-09-09 10:24:27
* @brief
*
**/
use \Bot\Info as Bot_Info;
class KaishuController extends BaseController{
     public function indexAction(){
         $botId = '83acc798-6ea1-3ec4-5bf9-16cda42f0743';
         $botInfo=DB::query("select * from bot_info where bot_id=?", $botId);
         return $botInfo;
     }
}

?>
