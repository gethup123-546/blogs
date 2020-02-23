@extends('layouts.app')

@section('title','show')
    
@section('content')



<h1 class='text-center'>welocm to show posts</h1>
<section class="site-section" id="next-section">
   <div class="container">
     <div class="row">
       <div style='margin:auto;'class="col-lg-10 blog-content">

         <h3 class="mb-4">{{$post->title}}</h3>
         <p class="lead">{{$post->content}}</p>

         <img src="{{asset('uploade_image/'.$post->user->image)}}" style="width:6%;border-radius:50%;" alt="">
         <h6><a href="{{route('profile',$post->user->id)}}">{{$post->user->name}}</a> <br> <small>{{$post->created_at}}</small></h6>
  

         <img style='width:70%;'src="{{asset('uploade_image/'.$post->image)}}" alt="Image" class="img-fluid rounded"> 
        
         <br>

        @if(auth()->user()->id == $post->user_id)
        <div class='text-left'>
          <a style='color:#fff;'href="{{route('edit_post',$post->id)}}"class='btn btn-success btn-sm'>Update</a>
          <form class='float-left mr-3'action="{{route('delete',$post->id)}}"method='POST'>
            @csrf
            @method('delete')
            <button style='height:31px;'type='submit'class='btn btn-danger btn-sm form-control'>Delete</button>
          </form>
        </div>
        @endif

         <div class="comment-form-wrap pt-5">
          <h3 class="mb-5">Leave a comment</h3>
          <form action="{{route('comment_stor')}}" method='post'>
            @csrf

            <div class="form-group">
              <label>comment</label>
              <textarea style='height:250px;width:700px;' name="content" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <input type="hidden" name='post_id' value="{{$post->id}}" class="form-control">
            </div>

            <div class="form-group">
                <button type='submit'class='btn btn-info btn-sm'>sent comment</button>
            </div>

          </form>
        </div>

         <div class="pt-5">
           <ul class="comment-list">

            @forelse ($post->comments as $comment)
            <li class="comment">
                <div class="vcard bio">
                  <img src="{{asset('uploade_image/'.$comment->user->image)}}" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <a href="{{route('profile',$comment->user->id)}}"><h3>{{$comment->user->name}}</h3></a>
                  <div class="meta">{{$comment->created_at}}</div>
                  <p>{{$comment->content}}</p>
                  @if(auth()->user()->id == $comment->user_id)
                      
                  <a href="{{route('comment_update',$comment->id)}}"class='btn btn-success btn-sm'>update </a>
                  <form action="{{route('comment_delete',$comment->id)}}"class='float-left mr-2'method='post'>
                      @csrf
                      @method('delete')
                      <button type='submit'class='btn btn-danger btn-sm'>Delete</button>
                  </form>

                  @endif
                </div>
              </li>
            @empty
                
            @endforelse

   
           </ul>
           <!-- END comment-list -->
           

         </div>



@endsection
