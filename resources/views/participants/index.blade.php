@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <div class="p-2">
                        <h2>All Participants</h2>
                    </div>
                    <div class="ml-auto p-2"><a href="{{route('participants.create')}}" class="btn btn-success">Create
                            A Participant</a></div>
                </div>
            </div>
            <div class="card-body table-responsive">
                @if (count($participants) == 0)
                <p>No Participants</p>
                @else
                <table class="table table-striped">
                    <thead>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Vjudge</th>
                        <th>Department</th>
                        <th>Academic Year</th>
                        <th>Attended</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($participants as $participant)
                        <tr>
                            <td>{{$participant->id}}</td>
                            <td>{{$participant->name}}</td>
                            <td>{{$participant->email}}</td>
                            <td>{{$participant->phone_number}}</td>
                            <td>{{$participant->vjudge}}</td>
                            <td>{{$participant->department}}</td>
                            <td>{{$participant->academic_year}}</td>
                            <td>{{$participant->attended ? 'Yes' : 'No'}}</td>
                            <td>
                                <form action="{{route('participants.destroy', $participant->id)}}" method="post">
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
                {{$participants->links()}}

                @endif
            </div>
        </div>
    </div>
</div>
@endsection