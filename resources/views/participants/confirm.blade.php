@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <div class="p-2">
                        <h2>Hello {{$participant->name}}</h2>
                    </div>
                    @auth
                    <div class="ml-auto p-2"><a href="{{route('participants.attend', $participant->id)}}"
                            class="btn btn-success">Confirm Attendance</a>
                    </div>
                    @endauth
                </div>
            </div>
            <div class="card-body">
                <h3>Your Information</h3>
                <div class="p-4">
                    <p>Name: {{$participant->name}}</p>
                    <p>Phone Number: {{$participant->phone_number}}</p>
                    <p>Email: {{$participant->email}}</p>
                    <p>Vjudge: {{$participant->vjudge}}</p>
                    <p>Department: {{$participant->department}}</p>
                    <p>Academic Year: {{$participant->academic_year}}</p>
                </div>

                @guest
                <div class="alert alert-info">
                    <p>If there any mistake in your information please contact us via email</p>
                    <p><strong>cscampfos@gmail.com</strong></p>
                </div>
                @endguest
            </div>
        </div>
    </div>
</div>
@endsection