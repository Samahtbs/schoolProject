@extends('layout')
  
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Teacher Profile Page') }}</div>
  
                <div class="card-body">
                    <h6>Class Teacher : <b>{{$tech['name']}}</b></h6>
                    <h6>Teacher Phone : <b>{{$tech['phoneNumber']}}</b></h6>
                    <h6>Teacher Email: <b>{{$tech['email']}}</b></h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection