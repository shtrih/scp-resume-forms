<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;

class FormEvent extends Event
{
    use SerializesModels;

    public $data;

    /**
     * Create a new event instance.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }
}
