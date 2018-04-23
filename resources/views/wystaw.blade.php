@extends('layouts.adminapp')
@section ('table')
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="{{ asset('tabela/jquery.tabledit.js') }}"></script>
@endsection

@section('title', 'Wystaw aukcje')

@section('content')
  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif

  <div class="col-md-12 order-md-1">
    <h4 class="mb-3">1/4. Przygotuj się do wystania nowego dostawcy</h4>
      <div class="row">
        <div class="form-group">
          <div class="col-md-12 order-md-3">
            <div class="form-group">

              <label for="exampleSelect1">Dostawca:</label>
              <select class="form-control" id="exampleSelect1">
                <option>Czasnabuty</option>
                <option>Kesi</option>
                <option>Kupbuty</option>
                <option>Sporti</option>
              </select>

            </div>
          </div>
        </div>
      </div>
      
      <div class="container col-md-12"> 
        <table class="table table-striped table-bordered" id="example">
          <thead>
            <tr>
              <th>ID</th>
              <th>Kategoria</th>
              <th>Tag1</th>
              <th>Tag2</th>
              <th>Tag3</th>
              <th>Tag4</th>
              <th>Tag5</th>
              <th>Tag6</th>
              <th>Tag7</th>
              <th>Tag8</th>
              <th>Tag9</th>
              <th>Tag10</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>test1</td>
              <td>test2</td>
              <td>test3</td>
              <td>test4</td>
              <td>test5</td>
              <td>test6</td>
              <td>test7</td>
              <td>test8</td>
              <td>test9</td>
              <td>test10</td>
              <td>test11</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>test1</td>
              <td>test2</td>
              <td>test3</td>
              <td>test4</td>
              <td>test5</td>
              <td>test6</td>
              <td>test7</td>
              <td>test8</td>
              <td>test9</td>
              <td>test10</td>
              <td>test11</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>test1</td>
              <td>test2</td>
              <td>test3</td>
              <td>test4</td>
              <td>test5</td>
              <td>test6</td>
              <td>test7</td>
              <td>test8</td>
              <td>test9</td>
              <td>test10</td>
              <td>test11</td>
            </tr>
          </tbody>
        </table>
      </div>
      <hr class="mb-4">
      <div class="float-right">
        <a class="btn btn-primary" href="{{route ('wystaw_krok_2')}}" role="button">Nastęny krok</a>
      </div>
    </div>


               
@endsection


@section ('tabela')
  <script>
  $('#example').Tabledit({
          editButton: false,
                  removeButton: false,
                  columns: {
                      identifier: [0, 'id'],
                      editable: [[1, 'Kategoria'],[2, 'Tag1'],[3, 'Tag2'], [4, 'Tag3'], [5, 'Tag4'], [6, 'Tag5'], [7, 'Tag6'], 
                      [8, 'Tag7'], [9, 'Tag8'], [10, 'Tag9'], [11, 'Tag10']]
                  }
              });
  $('#example2').Tabledit({
          editButton: false,
                  removeButton: false,
                  columns: {
                      identifier: [0, 'id'],
                      editable: [[1, 'Konto'],[2, 'Marża'],[3, 'Dodatki']]
                  }
              });
        
  </script>
@endsection