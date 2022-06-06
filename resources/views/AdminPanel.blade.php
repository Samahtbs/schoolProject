@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Panel') }}</div>
  
                <div class="card-body">
                    <a href="/get/students">Students</a>
                    <a href="/get/teahers">Teachers</a>
                    <a href="/get/classes">Clasess</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection