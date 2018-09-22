<?php
namespace Bot\Framework\lib;
class Utils {
    public static function toUTF8($str) {
		if (is_array($str)) {
			return array_map('Utils::toUTF8', $str);
		} else {
			return mb_convert_encoding($str, 'UTF-8', 'GBK');
		}
	}

	public static function toGBK($str) {
		if (is_array($str)) {
			return array_map('Utils::toGBK', $str);
		} else {
			return mb_convert_encoding($str, 'GBK', 'UTF-8');
		}
	}

	public static function curlGet($url, $timeout = 3, $headerAry = '') {
		if (is_array($timeout)) {
			$headerAry = $timeout;
			$timeout = 3;
		}
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
		//output时忽略http响应头
		curl_setopt($ch, CURLOPT_HEADER, false);
		//设置http请求的头部信息 每行是数组中的一项
		//当url中用ip访问时，允许用host指定具体域名
		if ($headerAry != '') {
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headerAry);
		}

		$res = curl_exec($ch);

		return $res;
	}

	/**
	 * @param $opts
	 * @return mixed
	 */
	public static function curl($opts) {
		$default_opts = [
			'url' => '',
			'method' => 'get',
			'timeout' => 1000,
			'cookies' => '',
			'headers' => '',
		];
		$opts = array_merge($default_opts, $opts);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $opts['url']);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($opts['method']));
		//curl_setopt($ch, CURLOPT_POST, true);
		if ($opts['data']) {
			curl_setopt($ch, CURLOPT_POSTFIELDS, $opts['data']);
		}
		if ($opts['cookies']) {
			if (is_array($opts['cookies'])) {
				$opts['cookies'] = implode("; ", array_map(function ($cookie) {
					if (is_array($cookie)) {
						return urlencode($cookie[0]) . "=" . urlencode($cookie[1]);
					} else {
						return $cookie;
					}
				}, $opts['cookies']));
			}
			curl_setopt($ch, CURLOPT_COOKIE, $opts['cookies']);
		}
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT_MS, $opts['timeout']);
		curl_setopt($ch, CURLOPT_TIMEOUT_MS, $opts['timeout']);
		curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		if ($opts['headers'] != '') {
			curl_setopt($ch, CURLOPT_HTTPHEADER, $opts['headers']);
		}
		$res = curl_exec($ch);
		return $res;
	}
    
    public static function array2Simple($pArray, $pField = null) {
        $tRet = array();
        foreach ($pArray as $index => $item) {
            if ($pField == null) {
                $tRet[] = current($item);
            } else {
                $tRet[] = $item[$pField];
            }
        }
        return $tRet;
    }

	public static function curlPost($url, $data, $timeout = 3, $headerAry = '') {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);

		curl_setopt($ch, CURLOPT_HEADER, false);
		if ($headerAry != '') {
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headerAry);
		}
		$res = curl_exec($ch);
		//var_dump($url);
		return $res;
	}

    public static function getClientIP() {
		if ($_SERVER['HTTP_CLIENTIP']) {
            $ip = $_SERVER['HTTP_CLIENTIP'];
        } elseif ($_SERVER["HTTP_CLIENT_IP"]){
            $ip = $_SERVER["HTTP_CLIENT_IP"];   
		} elseif ($_SERVER['HTTP_X_REAL_IP']) {
			$ip = $_SERVER['HTTP_X_REAL_IP'];
		} elseif ($_SERVER["HTTP_X_FORWARDED_FOR"]) {
			$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
		} elseif ($_SERVER["REMOTE_ADDR"]) {
            $ip = $_SERVER["REMOTE_ADDR"];
        } elseif (getenv("HTTP_CLIENT_IP")){
            $ip = getenv("HTTP_CLIENT_IP");
		} elseif (getenv("HTTP_X_FORWARDED_FOR")) {
			$ip = getenv("HTTP_X_FORWARDED_FOR");
		} elseif (getenv("REMOTE_ADDR")) {
			$ip = getenv("REMOTE_ADDR");
		} else {
			$ip = false;
		}
		$ip = explode(",", $ip, 2);
        $ip = trim($ip[0]);
		return $ip;
	}

}
