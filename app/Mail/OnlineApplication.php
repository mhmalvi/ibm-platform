<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;

class OnlineApplication extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $pdf;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $pdf)
    {
        $this->data = $data;
        $this->pdf = $pdf;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        /// Attachment::fromData(fn () => $this->pdf, 'Report.pdf');

        return $this->subject($this->data['title'])->view('emails.onlineApplication');
    }
}
