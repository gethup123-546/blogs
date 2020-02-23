@extends('layouts.app')

@section('title','create post')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create posts</div>

                <div class="card-body">
                    <form action="{{'create_post_stor'}}"method="POST"enctype='multipart/form-data'>
                        @csrf


                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">title</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title">
                                @if($errors->has('title'))
                                  <div class="alert alert-danger">
                                      {{$errors->first('title')}}
                                  </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Content</label>
                            <div class="col-md-6">
                              <textarea name="content"class='form-control'></textarea>
                              @if($errors->has('content'))
                              <div class="alert alert-danger">
                                  {{$errors->first('content')}}
                              </div>
                              @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">image</label>
                            <div class="col-md-6">
                                <input  type="file" class="form-control" name="image">
                                @if($errors->has('image'))
                                <div class="alert alert-danger">
                                    {{$errors->first('image')}}
                                </div>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Create now
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

