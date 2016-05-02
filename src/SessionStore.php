<?php 

namespace Jeemusu\Notification;

interface SessionStore 
{
	/**
	 * Flash a key / value pair to the session.
	 *
	 * @param  string  $key
	 * @param  mixed   $value
	 */
    public function flash($key, $value);

    public function get($key, $default = null);
} 