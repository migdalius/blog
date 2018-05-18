@extends('layouts.adminapp')

@section('title', 'Szmery bajery api allegro')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form method="get" action="#">
    	<button class="btn btn-dark btn-lg btn-block" type="submit"> Get allegro categories </button>
    </form>
@endsection