@extends('layouts.adminapp')

@section('title', 'Moja sprzedaż')

@section('content')

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   sprzedaż nie wiem co to za dział ma być?
               
@endsection