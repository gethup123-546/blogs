@extends('layouts/App')

@section('title','dashbord')

@section('content')
<div class='container d-flex justify-content-center'>

<table class="table border table-dark text-center"style='background: #686567;margin-top:6%;border:#fff'>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
@foreach($post as $posts)
   <tr>
      <td>{{$posts->id}}</td>
      <td>{{$posts->title}}</td>
      <td> <a class='btn btn-success'href="{{url('/show/'.$posts->id)}}">edit</a> </td>
    </tr>
@endforeach
  </tbody>
</table>
</div>


@endsection