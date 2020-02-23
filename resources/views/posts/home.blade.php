@extends('layouts.app')
@section('title','posts')
    
@section('content')



<body id='top'>
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
      

<div class="site-wrap">



  <section class="site-section">
    <div class="container">
      <div class="row mb-5">
        @forelse ($post as $posts)
        <div class="col-md-6 col-lg-4 mb-5">
            <a href="{{route('show',$posts->id)}}"><img src="{{asset('uploade_image/'.$posts->image)}}" alt="Image" style='width:100%;height:400px;'class="img-fluid rounded mb-4"></a>
            <img src="{{asset('uploade_image/'.$posts->user->image)}}" style="width:15%;border-radius:50%;" alt="">
            <h6><a href="{{route('profile',$posts->user->id)}}">{{$posts->user->name}}</a> <br> <small>{{$posts->created_at}}</small></h6>
            
            <h3>{{$posts->title}}</h3>
            <div> <span class="mx-2">|</span> <a style='text-decoration:none'href="#">Comments {{count($posts->comments)}}</a></div>
           @if(auth()->user()->id == $posts->user->id)

           <div class='text-left'>
            <a style='color:#fff;'href="{{route('edit_post',$posts->id)}}"class='btn btn-success btn-sm'>Update</a>
            <form class='float-left mr-3'action="{{route('delete',$posts->id)}}"method='POST'>
              @csrf
              @method('delete')
              <button style='height:31px;'type='submit'class='btn btn-danger btn-sm form-control'>Delete</button>
            </form>
          </div>

           @else

           @endif
          </div>
          @empty
          <h4 class='alert alert-info w-100 text-center'>no posts yet !!</h4>
        @endforelse

      </div>

      <div class='row'>
        <div class='col-md-3 mx-auto'>
          <p>{{$post->links()}}</p>
        </div>
      </div>


    </div>
  </section>
  

@endsection

