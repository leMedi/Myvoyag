<?php

namespace App\Http\Controllers;

use App\JoinRequest;
use App\Demande;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
// use Illuminate\Mail\Mailer;

use Illuminate\Http\Request;

class JoinRequestController extends Controller
{
    // new request
    public function create(Demande $demande, Request $request)
    {
        $user = Auth::User();
        $joinRequest = new JoinRequest();
        $joinRequest->demande_id = $demande->id;
        $joinRequest->user_id = Auth::id();
        $joinRequest->save();

        // TODO: send mail
        Mail::send('mail.join', [
            'title'     => 'Approver Demande' . $demande->owner->fullname(),
            'content'   => 'Bonjour '.$demande->owner->firstName.', <br>C’est '.$user->fullname().'.J’ai vu que tu pars à '.$demande->destinationSite->name.' du '.$demande->departure_date.' au '.$demande->return_date.', puis je partir avec toi ? ',
            'actionMsg' => 'Accepter',
            'actionUrl' => url('/demande/request/'.$joinRequest->id.'/approve'),
        ], 
        function ($message) use ($demande)
        {
            $message->from(Auth::User()->email, Auth::User()->fullname());
            $message->to($demande->owner->email);

        });

        return view('request.msg', [
            'message' => 'Votre demande est envoyée à '.$demande->owner->fullname(),
        ]);
    }


    public function approve(JoinRequest $joinRequest, Request $request)
    {
        $user = Auth::User();
        $joinRequest->accepted = true;

        $joinRequest->demande->nbr_personnes += 1;
        $joinRequest->demande->save();

        $joinRequest->save();

        Mail::send('mail.join', [
            'title'     => 'Demande Acceptée',
            'content'   => 'Bonjour '.$joinRequest->owner->firstName.', <br>'.$user->fullname().', a accepetée votre demande'
        ], 
        function ($message)
        {

            $message->from($user->email, $user->fullname());

            $message->to($joinRequest->owner->email);

        }); 
        
        return view('request.msg', [
            'message' => 'La demande de '.$joinRequest->owner->fullname().' est Accepter.',
        ]);
    }


    public function deny(JoinRequest $joinRequest, Request $request)
    {
        $user = Auth::User();
        $joinRequest->accepted = false;
        $joinRequest->save();

        Mail::send('mail.join', [
            'title'     => 'Demande est Refusé',
            'content'   => 'Bonjour '.$joinRequest->owner->firstName.', <br>'.$user->fullname().', a acceptée votre demande'
        ], 
        function ($message)
        {

            $message->from($user->email, $user->fullname());

            $message->to($joinRequest->owner->email);   

        });
        
        return view('request.msg', [
            'message' => 'La demande de '.$joinRequest->owner->fullname().' est Refusé.',
        ]);
        
    }
}
