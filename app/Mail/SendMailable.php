<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Symfony\Component\HttpFoundation\Request;

class SendMailable extends Mailable
{
    
    use Queueable, SerializesModels;
    public $request;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to('rashed@optima-solution.com')
                    //->bcc('auth@another.com')
                    ->subject('Mail From SMEBD')
                    ->view('success_mail_send')->with([
                        'request' => $this->$request->business_name,
                        'request' => $this->$request->loan_type,
                        'request' => $this->$request->business_address,
                        'request' => $this->$request->type_of_business,
                        'request' => $this->$request->monthly_sales,
                    ]);
    }
}
