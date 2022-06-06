@extends('layout')
  
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Class') }}</div>
  
                <div class="card-body">
                    <h6>Class ID : <b>{{$class['id']}}</b></h6>
                    <h6>Class Name : <b>{{$class['ClassName']}}</b></h6>
                    <h6>Class Teacher : <b>{{$class['tname']}}</b></h6>
                    <h6>Teacher Phone : <b>{{$class['tphone']}}</b></h6>
                    <h6>Teacher Email: <b>{{$class['temail']}}</b></h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection