@extends('layouts.admin')

@section('content')

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   sprzedaż nie wiem co to za dział ma być?
               
@endsection