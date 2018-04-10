@extends('layouts.adminapp')

@section('title', 'Home')

@section('content')

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                 archiwum zamkniętych
               
@endsection
