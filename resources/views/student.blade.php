@extends('layout')
  
@if (session('success'))
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
                          
                          <tr>
                            <th scope="row">{{"ddd"}}</th>
                            <td>{{"ddd"}}</td>
                            <td>{{"ddd"}}</td>
                            <td>{{"ddd"}}</td>
                          </tr>
                         
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@endif