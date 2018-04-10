@extends('layouts.adminapp')

@section('title', 'Wystawione aukcje')

@section('content')

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   archiwum - wystawionych
               
@endsection
