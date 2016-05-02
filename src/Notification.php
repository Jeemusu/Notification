<?php 

namespace Jeemusu\Notification;

class Notification
{
    /**
     * The session store.
     *
     * @var SessionStore
     */
    private $session;

    /**
     * Create a new notificiation instsance
     *
     * @param SessionStore $session
     */
    function __construct(SessionStore $session)
    {
        $this->session = $session;
    }

    /**
     * Create an info notification.
     *
     * @param string $message
     * @return $this
     */
    public function info($message)
    {
        $this->message($message, 'info');

        return $this;
    }

    /**
     * Create a success notification.
     *
     * @param  string $message
     * @return $this
     */
    public function success($message)
    {
        $this->message($message, 'success');

        return $this;
    }

    /**
     * Create a warning notification.
     *
     * @param  string $message
     * @return $this
     */
    public function warning($message)
    {
        $this->message($message, 'warning');

        return $this;
    }

    /**
     * Return a message body
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->session->get('notification.message');
    }

    /**
     * Return a message type
     *
     * @return string
     */
    public function getType()
    {
        return $this->session->get('notification.type');
    }

    /**
     * Create a general notification.
     *
     * @param  string $message
     * @param  string $type
     * @return $this
     */
    public function message($message, $type = 'info')
    {
        $this->session->flash('notification.message', $message);
        $this->session->flash('notification.type', $type);

        return $this;
    }
}