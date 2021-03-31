@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <div class="p-2">
                        <h2>Create A Participant</h2>
                    </div>
                    <div class="ml-auto p-2"><a href="{{route('participants.index')}}" class="btn btn-success">All
                            Participants</a></div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('participants.store')}}" class="form-row" method="POST">
                    @csrf
                    <div class="form-group col-md-4 offset-md-4">
                        <label class="control-label" for="name">Name</label>
                        <div class="">
                            <input type="text" name="name" id="name" class="form-control input-md" placeholder="Name"
                                value="{{ old('name') }}">
                            @error('name')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-4 offset-md-4">
                        <label class="control-label" for="email">Email</label>
                        <div class="">
                            <input type="email" name="email" id="email" class="form-control input-md"
                                placeholder="Email" value="{{ old('email') }}">
                            @error('email')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-4 offset-md-4">
                        <label class="control-label " for="phone_number">Phone Number</label>
                        <div class="">
                            <input type="text" name="phone_number" id="phone_number" class="form-control input-md"
                                placeholder="Phone Number" value="{{ old('phone_number') }}">
                            @error('phone_number')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-4 offset-md-4">
                        <label class="control-label " for="vjudge">Vjudge</label>
                        <div class="">
                            <input type="text" name="vjudge" id="vjudge" class="form-control input-md"
                                placeholder="Vjudge" value="{{ old('vjudge') }}">
                            @error('vjudge')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-4 offset-md-4">
                        <label class="control-label" for="department">Department</label>
                        <div class="">
                            <input type="text" name="department" id="department" class="form-control input-md"
                                placeholder="Department" value="{{ old('department') }}">
                            @error('department')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-4 offset-md-4">
                        <label class="control-label " for="academic_year">Academic Year</label>
                        <div class="">
                            <input type="number" name="academic_year" id="academic_year" class="form-control input-md"
                                placeholder="Academic Year" value="{{ old('academic_year') }}">
                            @error('academic_year')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-4 offset-md-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection