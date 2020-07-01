@extends('layouts.app')

@section('content')
    @include('users.users', ['users' => $users])
    @include('favorite.favorite_button', ['user' => $user])
@endsection