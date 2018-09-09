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
use \Baidu\Duer\Botsdk\Directive\AudioPlayer\Play;
class KaishuController extends BaseBotController{
     public function indexAction(){
         $botId = '83acc798-6ea1-3ec4-5bf9-16cda42f0743';
         //$botInfo = new Bot_Info();
         //$botInfo->addWhere('bot_id', $botId);
         //$botInfo = $botInfo->find();
         //$botInfo = array_map(function($t) {
         //       return $t->getData();
         //    }, $botInfo);
         Logger::warn('test warn');
         Logger::info('test info');
         $botInfo=DB::query("select * from bot_info where bot_id=?", $botId);
         $this->addLaunchHandler(function () {
             $directive = new Play('http://wwww');
             return [
                 'outputSpeech' => '所得税为你服务,告诉我月薪是多少,就可以查询个税、公积金、养老等个税类型',
                 'directives' => [$directive],
             ];
         });
     }
}

?>
