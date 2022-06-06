@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>{{$class['ClassName']}} Class</b></div>
  
              <!--************************************************************-->
                <table id="editableTable" class="table table-bordered">
                    <thead  class="thead-dark">
                        <tr>
                            <th scope="col">Student Name</th>
                            <th scope="col">First Mark</th>
                            <th scope="col">Mid Mark</th>
                            <th scope="col">Final Mark</th>
                          </tr>
                    </thead>
                    <tbody>
                        <tbody
                      @foreach($students as $std)
                      <tr>
                        <th scope="row"><a href="student/{{$std['studentid']}}"> {{$std['name']}}</a></th>
                        <td>
                          <a href="" class="update" data-name="first" data-type="text" data-pk="{{ $std['First'] }}" data-title="Enter name">{{ $std['First'] }}</a>
                        </td>
                        <td>
                          <a href="" class="update" data-name="mid" data-type="text" data-pk="{{$std['Mid'] }}" data-title="Enter email">{{ $std['Mid'] }}</a>
                        </td>
                        <td>
                          <a href="" class="update" data-name="final" data-type="text" data-pk="{{ $std['Final'] }}" data-title="Enter email">{{ $std['Final'] }}</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    </tbody>
                </table>

                <!--************************************************************-->

                
                <div class="card-body">
                    <h6>Files: </h6>
                    @foreach($file as $f)
                    <h6> - <b>{{$f['FileName']}}</b> at: <b>{{$f['created_at']}}</b></a></h6>
                     @endforeach
                </div>

                <div class="card-body">
                <h6> Upload file to this class</h6>
                <form method="post" action="{{url('upladfile')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                      <div class="input-group" >
                        <input type="hidden" name="classid"" value="{{$class['id']}}">
                        <input type="file" accept=".pdf,.ppt,.pptx,.pptm" name="filenames[]" class="myfrm form-control">
                      </div>
                      <button type="submit" class="btn btn-info btn-block" style="margin-top:10px">Submit</button>
                </form>
                <div class="card-body">

            </div>
        </div>
    </div>
</div>
@endsection
