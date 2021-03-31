<?php

namespace App\Http\Controllers;

use App\Http\Requests\participants\CreateParticipantRequest;
use App\Mail\ParticipantQRCodeMail;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

// use LaravelQRCode\Facades\QRCode;

class ParticipantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participants = Participant::orderBy('updated_at', 'desc')->paginate(10);
        return view('participants.index', compact('participants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('participants.create');
    }

    /**
     * Store a newly created resource in storage, and send an email to it.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateParticipantRequest $request)
    {
        $participant = Participant::create($request->validated());

        Mail::to($participant)->send(new ParticipantQRCodeMail($participant));

        session()->flash('success', 'Created the participants and sent the email successfully');

        return redirect()->route('participants.index');
    }
    /**
     * returns the participant information if the hash is equal to his id
     */
    public function confirm(Participant $participant, $hash)
    {
        if (!Hash::check($participant->id, $hash)) //if the hash not equal return 404
            abort(404);

        return view('participants.confirm', compact('participant'));
    }

    public function attend(Participant $participant)
    {
        $participant->update(['attended' => true]);

        session()->flash('success', 'Updated the participant successfully');

        return redirect()->route('participants.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participant $participant)
    {
        $participant->delete();

        session()->flash('success', 'Deleted the participants successfully');

        return redirect()->route('participants.index');
    }
}
