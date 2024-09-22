<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\Admin\ContactController;
use Hamcrest\Description;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Attachment;
use Symfony\Component\Console\Descriptor\Descriptor;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     * bridge= the 1st to be called out in mailing
     */
    public function __construct($data)
    {
        #contact mail data get it from $data of ContactController
        $this->data = $data; #encapsulation n5fi el data
    }

    /**
     * Get the message envelope.
     * sents msg
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->data['email'], $this->data['name']),
            subject: $this->data['msgTitle'],
            // Description: $this->data['content'],
        );
    }

    /**
     * Get the message content definition.
     * handling what's in msg
     */
    public function content(): Content
    {
        return new Content(
            view: 'Mail.contactEmail',
            with: [
                'data' => $this->data,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *pics, etc...
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    { #for the files
        return [#return [$this->photo];
            // Attachment::fromStorage('/asset/asstes/images')->as('name.pdf'),
        ];
    }

}
