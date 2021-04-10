@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <div class="p-2">
                        <h2>Create new Event</h2>
                    </div>
                    <div class="ml-auto p-2"><a href="{{route('participants.index')}}" class="btn btn-success">All
                            Participants</a></div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('events.store')}}" class="form-row" method="POST">
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
                        <label class="control-label" for="name">Description</label>
                        <div class="">
                        <textarea class="form-control" placeholder="Description" name="description" rows="3"  value="{{ old('description') }}"></textarea>

                            @error('description')
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