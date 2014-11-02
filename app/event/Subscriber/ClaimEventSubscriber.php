<?php

namespace Subscriber;

use \Claim as Claim;
use \Illuminate\Mail\Mailer;

/**
 * Claim event subscriber
 */
class ClaimEventSubscriber {
    
    /**
     * The mailer instance.
     *
     * @var \Illuminate\Mail\Mailer
     */
    protected $mailer;

    /**
     * Create a new ClaimEventSubscriber instance.
     *
     * @param  \Illuminate\Mail\Mailer  $mailer
     * @return void
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
    * When a user is created
    */
    public function onCreate($event)
    {
        if($event instanceof Claim)
        {
            $this->mailer->send(['html' => 'emails.form.claim.admin'], ['claim' => $event], function($message)
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