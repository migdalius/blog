@extends('layouts.adminapp')

@section('title', 'Szachownica')

@section('content')

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                  tu bedzie szachownica
               
@endsection