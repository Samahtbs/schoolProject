@extends('AdminPanel')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Teachers') }}</div>
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Teacher Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone #</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($teachers as $teacher) 
                      <tr>
                        <th scope="row"> {{$teacher['name']}}</th>
                        <td>{{$teacher['email']}}</td>
                        <td>{{$teacher['phoneNumber']}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
  
            </div>
        </div>
    </div>
</div>
@endsection