@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                 <h2>{{$event->name}}</h2>
                 <div class="form-group col-md-4">
                        <label class="control-label" for="description">Description</label>
                        <div class="">
                            {{$event->description}}
                        </div>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection