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
        $participants = Participant::paginate(10);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participant $participant)
    {
        //
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
