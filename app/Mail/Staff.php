<?php

namespace App\Mail;

use App\Models\AdminModel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Staff extends Mailable
{
    use Queueable, SerializesModels;

    public $admin;
    public $password;
    /**
     * Create a new message instance.
     */
    public function __construct(AdminModel $admin, $password)
    {
        $this->admin = $admin;
        $this->password = $password;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: 'madusha.dev001@gmail.com',
            subject: 'Staff Member Registration',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            text: "mail.staffEmail-text",  // Reference the plain-text view
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
