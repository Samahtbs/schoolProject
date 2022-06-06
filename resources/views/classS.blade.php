@extends('layout')
  
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Class Details Page') }}</div>
  
                <div class="card-body">
                    <h6>Class ID : <b>{{$class['id']}}</b></h6>
                    <h6>Class Name : <b>{{$class['ClassName']}}</b></h6>
                    <h6>Class Teacher : <a href="teacher/{{$class['teacherId']}}"><b>{{$class['tname']}}</b></a></h6>
                </div>

                @foreach($file as $f)
                <div class="card-body">
                    <h6>File name: <b>{{$f['FileName']}}</b></h6>
                    <!--<h6>File : <b>{{$f['FileDecoded']}}</b></h6>-->
                    
                    <h6>Uploaded time : <b>{{$f['created_at']}}</b></a></h6>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection