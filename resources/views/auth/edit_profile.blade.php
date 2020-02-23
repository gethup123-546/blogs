@extends('layouts.app')

@section('title','create post')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit prifile</div>

                <div class="card-body">
                    <form action="{{route('edit_profile_stor',$user->id)}}"method="POST"enctype='multipart/form-data'>
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name"value='{{$user->name}}'>
                                @if($errors->has('name'))
                                  <div class="alert alert-danger">
                                      {{$errors->first('name')}}
                                  </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Email</label>
                            <div class="col-md-6">
                              <input type="text" name="email"value='{{$user->email}}'>
                              @if($errors->has('email'))
                              <div class="alert alert-danger">
                                  {{$errors->first('email')}}
                              </div>
                              @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Date</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control"value='{{$user->date}}'name="date">
                                @if($errors->has('date'))
                                  <div class="alert alert-danger">
                                      {{$errors->first('date')}}
                                  </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">phone</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" value='{{$user->phone}}'name="phone">
                                @if($errors->has('phone'))
                                  <div class="alert alert-danger">
                                      {{$errors->first('phone')}}
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
                                    Edit now
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

