@extends('layouts.adminapp')

@section('title', 'Rachunki')

@section('content')

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Spółka</th>
      <th scope="col">Data</th>
      <th scope="col">Pobierz</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>netrelo</td>
      <td>20.12.2017</td>
      <td><button type="button" class="btn btn-danger">
          <i class="far fa-file-pdf"></i> Pobierz
          </button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>netrelo</td>
      <td>27.12.2017</td>
      <td><button type="button" class="btn btn-danger">
          <i class="far fa-file-pdf"></i> Pobierz
          </button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>netrelo</td>
      <td>21.11.2017</td>
      <td><button type="button" class="btn btn-danger">
          <i class="far fa-file-pdf"></i> Pobierz
          </button>
    </td>
    </tr>
  </tbody>
</table>
               
@endsection