<?php 

namespace Jeemusu\Notification;

use Illuminate\Session\Store;

class LaravelSessionStore implements SessionStore 
{
    /**
     * @var Store
     */
    private $session;

    /**
     * @param Store $session
     */
    function __construct(Store $session)
    {
        $this->session = $session;
    }

	/**
	 * Flash a key / value pair to the session.
	 *
	 * @param  string  $key
	 * @param  mixed   $value
	 */
    public function flash($key, $value)
    {
        $this->session->flash($key, $value);
    }

    /**
     * Flash a key / value pair to the session.
     *
     * @param  string  $key
     */
    public function get($key, $default = null)
    {
        return $this->session->get($key, $default);
    }

}