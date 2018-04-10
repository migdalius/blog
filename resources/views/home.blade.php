@extends('layouts.adminapp')

@section('title', 'Główny panel')

@section('content')

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   Witamy w pakowalnie.pl
               
@endsection
