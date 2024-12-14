<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class BecomeRevisor extends Mailable implements HasMiddleware

{
    use Queueable, SerializesModels;
    public function becomeRevisor(Request $request)
    {
        if (!Auth::check()) {
            return redirect(route('login'))->with('error', 'Devi essere autenticato per inviare una richiesta.');
        }
    
        $user = Auth::user();
        $motivazione = $request->motivazione;
    
        Mail::to('admin@presto.it')->send(new BecomeRevisor($user, $motivazione));
    
        return redirect(route('home'))->with('message', 'Complimenti, Hai richiesto di diventare revisore');
    }
    


    static public function middleware()
    {
        return [
            new Middleware('auth'),
        ];
    }
    public $user;
    public $motivazione;
    public function __construct(User $user, $motivazione)
    {
        $this->user = $user;
        $this->motivazione = $motivazione;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "Rendi revisore l'utente" . $this->user->name,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.become-revisor',
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
