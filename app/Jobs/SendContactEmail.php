<?php

namespace App\Jobs;

use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Mail\Message;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendContactEmail extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    /**
     * @var array
     */
    protected $data;

    /**
     * Create a new job instance.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @param \Illuminate\Contracts\Mail\Mailer $mailer
     */
    public function handle(Mailer $mailer)
    {
        $message = function(Message $m) {
            $m->to('jbonva@gmail.com', 'Julien Bonvarlet');
            $m->subject('[Tyloo.fr] Demande de Contact');
        };

        return $mailer->send('emails.contact', ['data' => $this->data], $message);
    }
}
