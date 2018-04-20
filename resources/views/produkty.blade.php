@extends('layouts.adminapp')

@section('title', 'Zamów produkty')


@section('content')

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                  
               
@endsection