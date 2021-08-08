<?php

namespace App\Mail;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisteredUser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The order instance.
     *
     * @var Order
     */
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');

        //return $this->from('admin@example.com')
        //        ->view('emails.user.registered');

        //$user = User::find($registered_user_id);
        //return $this->view('emails.user.registered')->with('user', $user);

        //return $this->view('emails.user.registered')
        //        ->attach('/path/to/file');

        //return $this->view('emails.user.registered')
        //        ->attach('/path/to/file', [
        //            'as' => 'Bigsale2017.pdf',
        //            'mime' => 'application/pdf',
        //        ]);

        return $this->view('emails.user.registered')->with('user', $this->user);
    }
}
