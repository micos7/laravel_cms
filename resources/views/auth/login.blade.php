@extends('layouts.app')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
    <form action="{{route('login')}}" method="POST" role="form">
    {{csrf_field()}}
    <div class="card">
    <div class="card-content">
    <h1 class="title">
    Log in
    </h1>
    <div class="field">
    <label for="email" class="label">Email Address</label>
    <p class="control">
    <input class="input {{$errors->has('email') ? 'is-danger' : '' }}" type="text" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}" >
    </p>
    @if($errors->has('email'))
    <p class="help is-danger">{{$errors->first('email')}}</p>
    @endif
    </div>
    <div class="field">
    <label for="password" class="label">Password</label>
    <p class="control">
    <input class="input {{$errors->has('password') ? 'is-danger' : '' }}" type="text" name="password" id="password" >
    </p>
    @if($errors->has('password'))
    <p class="help is-danger">{{$errors->first('password')}}</p>
    @endif
    </div>
    <b-checkbox name="remember m-t-20">Remember Me</b-checkbox>
    <button class="button is-primary is-outlined is-fullwidth m-t-30">
    Log in
    </button>
    </form>
    </div>
    {{--  end of card  --}}
    </div>
    <h5 class="has-text-centered m-t-20"><a href="{{route('password.request')}}" class="is-muted" >Forgot your password?</a></h5>
    </div>
</div>


@endsection
