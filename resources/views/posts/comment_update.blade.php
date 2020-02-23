@extends('layouts.app')

@section('title','update comment')
    
@section('content')



<h1 class='text-center'>welocm to show posts</h1>
<section class="site-section" id="next-section">
   <div class="container">
     <div class="row">
       <div style='margin:auto;'class="col-lg-10 blog-content">

         <div class="comment-form-wrap pt-5">
          <h3 class="mb-5">Update comment</h3>
          <form action="{{route('comment_update_stor',$comment->id)}}" method='post'>
            @csrf
            @method('PUT')
            <div class="form-group">
              <label>comment</label>
              <textarea style='height:250px;width:700px;' name="content" class="form-control">{{$comment->content}}</textarea>
                
            </div>
            <div class="form-group">
            </div>

            <div class="form-group">
                <button type='submit'class='btn btn-info btn-sm'>Update comment</button>
            </div>

          </form>
        </div>



@endsection
