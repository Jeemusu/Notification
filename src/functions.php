<?php

if ( ! function_exists('flash')) {

    /**
     * Helper method to send a flash message.
     *
     * @param  string|null $message
     * @return \Jeemusu\Notification\Notification
     */
    function flash()
    {
        $notifier = app('flash');

        return $notifier;
    }

}