@extends('layout')
  
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Student') }}</div>
  
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">ClassName</th>
                            <th scope="col">First Mark</th>
                            <th scope="col">Mid Mark</th>
                            <th scope="col">Final Mark</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($list as $li) 
                          <tr>
                            <th scope="row">{{$li['name']}}</th>
                            <td>{{$li['First']}}</td>
                            <td>{{$li['Mid']}}</td>
                            <td>{{$li['Final']}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection