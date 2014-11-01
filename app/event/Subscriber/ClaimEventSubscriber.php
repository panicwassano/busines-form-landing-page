<?php

namespace Subscriber;

use \Claim as Claim;
use \Mail as Mail;

/**
 * Claim event subscriber
 */
class ClaimEventSubscriber {
 
    /**
    * When a user is created
    */
    public function onCreate($event)
    {
        if($event instanceof Claim)
        {
            Mail::send(['html' => 'emails.form.claim.admin'], ['claim' => $event], function($message)
            {
                $message->to('testcpp@yandex.ru', 'Azat Kamalov')->subject('New claim ticket');
            });
        }
    }

    /**
    * Register the listeners for the subscriber.
    *
    * @param  Illuminate\Events\Dispatcher  $events
    * @return array
    */
    public function subscribe($events)
    {
        $events->listen('models.claim.create', 'Subscriber\ClaimEventSubscriber@onCreate');
    }
 
}