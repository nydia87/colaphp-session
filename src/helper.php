<?php
/**
 * @contact  nydia87 <349196713@qq.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0
 */
use Colaphp\Session\Session;

if (! function_exists('getSession')) {
	/**
	 * Session 配置文件.
	 *
	 * @return array
	 */
	function getSessionKeys()
	{
		return [
			'use_trans_sid', 'auto_start', 'prefix', 'use_lock', 'var_session_id', 'id', 'name', 'path', 'domain', 'expire', 'secure', 'httponly', 'use_cookies', 'cache_limiter', 'cache_expire',
		];
	}
}

if (! function_exists('session')) {
	/**
	 * Session管理.
	 *
	 * @param array|string $name
	 * @param mixed $value
	 * @param string $prefix
	 */
	function session($name, $value = '', $prefix = null)
	{
		if (is_array($name)) { // 初始化
			Session::getInstance($name);
		} elseif (is_null($name)) { // 清除
			Session::getInstance()->clear($prefix);
		} elseif ($value === '') {// 判断或获取
			return strpos($name, '?') === 0 ? Session::getInstance()->has(substr($name, 1), $prefix) : Session::getInstance()->get($name, $prefix);
		} elseif (is_null($value)) {// 删除
			return Session::getInstance()->delete($name, $prefix);
		} else {// 设置
			return Session::getInstance()->set($name, $value, $prefix);
		}
	}
}
