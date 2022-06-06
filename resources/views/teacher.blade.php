@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Teacher') }}</div>
                <div class="card-body">
                   @foreach($list as $l)
                   <a href="classT/{{$l['id']}}">{{$l['ClassName']}}</a>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection