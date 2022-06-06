@extends('layout')
  
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Student Profile Page') }}</div>
  
                <div class="card-body">
                    <h6>Student Name : <b>{{$stud['name']}}</b></h6>
                    <h6>Student Phone : <b>{{$stud['phoneNumber']}}</b></h6>
                    <h6>Student Email: <b>{{$stud['email']}}</b></h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection