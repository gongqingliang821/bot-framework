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
 * @desc 入口文件
 **/

	require "Bot.php";
	$tax = new Bot();
	if($_SERVER['REQUEST_METHOD'] == 'HEAD'){
		header('HTTP/1.1 204 No Content');
	}
	header("Content-Type: application/json");
	//记录整体执行时间
	$tax->log->markStart('all_t');
	$ret = $tax->run();
	$tax->log->markEnd('all_t');

	//打印日志
	//or 在register_shutdown_function增加一个执行函数
	$tax->log->notice($tax->log->getField('url_t'));
	$tax->log->notice();

	print $ret;
