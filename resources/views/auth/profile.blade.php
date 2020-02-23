
@extends('layouts.app')

@section('title','profile')
    
@section('content')
<div class="window">
  <div class="overlay"></div>
  <div class="box header">
    <img src="{{asset('/uploade_image/'.$user->image)}}" alt="" />
    <h2>{{$user->name}}</h2>
    <h4>Email: <b>{{$user->email}}</b></h4>
    <h4>Phone: <b>{{$user->phone}}</b></h4>
    <h4>Birthdate: <b>{{$user->date}}</b></h4>

  <hr>
  </div>
  <div class="box footer">
    <ul>
      <li><a href="http://harunpehlivantebimtebitagem.business.site"><span class="ion-ios-camera-outline"></span>HP</a></li>
      <li><a href="http://harunpehlivantebimtebitagem.ml"><span class="ion-ios-heart-outline"></span> WEP</a></li>
      <li><a href="https://harunpehlivantebimtebitagem.carrd.co"><span class="ion-ios-person-outline"></span>E-CV</a></li>
    </ul>
    @if(auth()->user()->id == $user->id)
    <a href="{{route('edit_profile',$user->id)}}" class="button">Update</a>
    @endif
  </div>
</div>

@endsection
