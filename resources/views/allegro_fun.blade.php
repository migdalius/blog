@extends('layouts.adminapp')

@section('title', 'Szmery bajery api allegro')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if(isset($auth_uri))
	    <form method="get" action="/allegro_fun/login">
	    	{{csrf_field()}}
	    	<button class="btn btn-dark btn-lg btn-block" type="submit"><a href="{{{$auth_uri}}}"> zaloguj do allegro </a> </button>
	    </form>
    @endif
    @if (isset($result))
    	<div class="container">
    		@foreach($result as $key=>$value)
    			<p> {{$key}}:{{$value}} </p>
    		@endforeach
    	</div>
    @endif

@endsection