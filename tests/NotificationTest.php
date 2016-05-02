<?php

use Jeemusu\Notification\Notification;
use Mockery as m;

class NotificationTest extends PHPUnit_Framework_TestCase {

    protected $session;

    protected $notification;

	public function setUp()
	{
        $this->session = m::mock('Jeemusu\Notification\SessionStore');
        $this->notification = new Notification($this->session);
	}

    /** @test */
    public function it_displays_info_notification_when_nothing_passed()
    {
        $this->session->shouldReceive('flash')->with('notification.message', 'Test Message');
        $this->session->shouldReceive('flash')->with('notification.type', 'info');

        $this->notification->message('Test Message');
    }

    /** @test */
    public function it_displays_info_notifications()
    {
        $this->session->shouldReceive('flash')->with('notification.message', 'Test Message');
        $this->session->shouldReceive('flash')->with('notification.type', 'info');

        $this->notification->info('Test Message');
    }

    /** @test */
    public function it_displays_success_notifications()
    {
        $this->session->shouldReceive('flash')->with('notification.message', 'Test Message');
        $this->session->shouldReceive('flash')->with('notification.type', 'success');

        $this->notification->success('Test Message');
    }

    /** @test */
    public function it_displays_warning_notifications()
    {
        $this->session->shouldReceive('flash')->with('notification.message', 'Test Message');
        $this->session->shouldReceive('flash')->with('notification.type', 'warning');

        $this->notification->warning('Test Message');
    }

    /** @test */
    public function it_displays_custom_type()
    {
        $this->session->shouldReceive('flash')->with('notification.message', 'Test Message');
        $this->session->shouldReceive('flash')->with('notification.type', 'custom-type');

        $this->notification->message('Test Message', 'custom-type');
    }

    /** @test */
    public function it_retrives_a_message()
    {
        $this->session->shouldReceive('get');

        $this->notification->getMessage();
    }

}
