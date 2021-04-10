@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <div class="p-2">
                        <h2>All Events</h2>
                    </div>
                    <div class="ml-auto p-2"><a href="{{route('events.create')}}" class="btn btn-success">Create
                        new Event</a></div>
                </div>
            </div>
            <div class="card-body table-responsive">
                @if (count($events) == 0)
                <p>No Events</p>
                @else
                <table class="table table-striped">
                    <thead>
                        <th>Id</th>
                        <th>Name</th>

                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                        <tr>
                            <td>{{$event->id}}</td>
                            <td><a href="{{route('events.show',$event->id)}}"> {{$event->name}} </a></td>
                            <td>
                                <form action="{{route('events.destroy', $event->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" style="border: none; background: none">
                                        <i class="fa fa-trash fa-2x text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                @endif
            </div>
        </div>
    </div>
</div>
@endsection