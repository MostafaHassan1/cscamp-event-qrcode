<?php

namespace App\Http\Controllers;

use App\Http\Requests\events\CreateEventRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('events.index',['events'=>$events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage, and send an email to it.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEventRequest $request)
    {
        Event::create($request->validated());


        return redirect()->route('events.index');
    }

    public function destroy(Event $event)
    {
        $event->delete();

        session()->flash('success', 'Deleted the event successfully');

        return redirect()->route('events.index');
    }

    public function show(Event $event)
    {   
        return view('events.show',['event'=>$event]);
    }

}
