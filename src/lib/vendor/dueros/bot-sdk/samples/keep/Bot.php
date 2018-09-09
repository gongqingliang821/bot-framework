<?php
/**
 * Copyright (c) 2017 Baidu, Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @desc tax个税服务
 * @author tianlong02
 * */
require '/home/work/gongqingliang/vendor/autoload.php';
use \Baidu\Duer\Botsdk\Card\TextCard;
use \Baidu\Duer\Botsdk\Card\StandardCard;
use \Baidu\Duer\Botsdk\Card\ListCard;
use \Baidu\Duer\Botsdk\Card\ListCardItem;
use \Baidu\Duer\Botsdk\Directive\AudioPlayer\Play;
use \Baidu\Duer\Botsdk\Directive\AudioPlayer\Stop;

class Bot extends \Baidu\Duer\Botsdk\Bot {
    
    // 支持的个税查询种类
	private static $keepType = array(
			'腹部' => 'http://static1.keepcdn.com/course/public/elementary_ab_ripper.mp3',
			'腿部' => 'http://static1.keepcdn.com/course/public/legs_shaping.mp3',
			'臀部' => 'http://static1.keepcdn.com/course/public/raised_buttocks_cultivating.mp3',
			'马甲线' => 'http://static1.keepcdn.com/course/public/raised_buttocks_cultivating.mp3',
			'俯卧撑' => 'http://static1.keepcdn.com/course/public/raised_buttocks_cultivating.mp3',
	);
    
    /**
	 * @param null
	 * @return null
	 * */
	public function __construct($postData = []) {
		//parent::__construct($postData, file_get_contents(dirname(__file__).'/../../src/privkey.pem'));
		//parent::__construct(file_get_contents(dirname(__file__).'/../../src/privkey.pem'));
		parent::__construct();
		$this->log = new \Baidu\Duer\Botsdk\Log([
			// 日志存储路径
			'path' => 'log/',
			// 日志打印最低输出级别
			'level' => \Baidu\Duer\Botsdk\Log::NOTICE,
		]);

		// 记录这次请求的query
		//$this->log->setField('getdata', json_encode($this->request->getData()));
        $this->log->setField('query', $this->request->getQuery());
        $this->addLaunchHandler(function(){
            $this->waitAnswer();
            return [
            	//'card' => $card,
				'outputSpeech' => '欢迎来到keep健身，你可以对我说锻炼腹肌，开始健身',
			];

        });

        $this->addSessionEndedHandler(function(){
            return null; 
        });

		// 在匹配到intent的情况下，首先询问月薪
        $this->addIntentHandler('keep', function() {
            $action = $this->getSlot('action');
		    $this->log->setField('action', $action);
            $position = $this->getSlot('position');
            if($action || $position) {
                $keepType = self::$keepType;
		        $this->log->setField('keepType', json_encode($keepType));
                $url = $keepType[$position];
                if(! $url){
                    $url = 'http://static1.keepcdn.com/course/public/elementary_ab_ripper.mp3';
                    $directive = new Play($url);
                    $outputSpeech = '抱歉，未找到相关课程，推荐您练习腹肌撕裂者';
                } else {
                    $directive = new Play($url); 
                    $outputSpeech = '为您推荐' . $position . '相关练习课程，准备开始';
                }
                $this->log->setField('url', $url);
                return [
                    'directives' => [$directive],
                    'outputSpeech' => $outputSpeech,
                ];
            } else {
                return [
                    'outputSpeech' => '对不起，我不明白你说的是什么',
                ];
            }
        });
        
        $this->addIntentHandler('keep_pause', function(){
            $this->waitAnswer();
            $directive = new Stop();
            return [
                'outputSpeech' => '已暂停',
                'directives' => [$directive],
            ];
        });
        
        $this->addIntentHandler('keep_stop', function(){
            $directive = new Stop();
            return [
                'outputSpeech' => '好的，已退出keep健身',
                'directives' => [$directive],
            ];
        });
        
         
        $this->addEventListener('AudioPlayer.PlaybackStopped', function($event){
            $offset = $event['offsetInMilliSeconds'];
            $directive = new Play('http://www', Play::ENQUEUE);
            return [
                'directives' => [$directive],
            ];
        });
	}

}
