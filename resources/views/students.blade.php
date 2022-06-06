@extends('AdminPanel')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Students') }}</div>
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Student Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone #</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($students as $student) 
                      <tr>
                        <th scope="row"> {{$student['name']}}</th>
                        <td>{{$student['email']}}</td>
                        <td>{{$student['phoneNumber']}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
  
            </div>
        </div>
    </div>
</div>
@endsection