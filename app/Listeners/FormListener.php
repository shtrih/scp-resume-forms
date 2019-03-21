<?php

namespace App\Listeners;

use App\Events\FormEvent;
use App\Discord\WebhookClient;

class FormListener
{
    protected $hook;

    /**
     * Create the event listener.
     *
     * @param WebhookClient $hook
     */
    public function __construct(WebhookClient $hook)
    {
        $this->hook = $hook;
    }

    /**
     * Handle the event.
     *
     * @param  FormEvent  $event
     * @return void
     */
    public function handle(FormEvent $event)
    {
        $this->hook->execute($event->data);
    }
}
