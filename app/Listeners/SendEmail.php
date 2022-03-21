<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Events\Reorder;
use Mail;

class SendEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(Reorder $event)
    {
      $user = $event->user;
        //write code of send mail
        Mail::send('mail',
      		array(
         		 'name' => $user->name,
      		), function($message) use ($user)
      		{
      		   $message->from(env('MAIL_FROM_ADDRESS'),'Sondos Abdelhameed');
      		   $message->to($user->email, 'Troylab Company')->subject('Delete And Reorder');
      		});
    }

}
