<!DOCTYPE html>
<html lang="pl">
<head>

    <title>Szachownica - Beta v0.1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset ('tabela2/css/vendor/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset ('tabela2/css/vendor/font-awesome.min.css')}}" type="text/css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="{{asset ('tabela2/css/jquery.bdt.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset ('tabela2/css/style.css')}}" type="text/css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">


</head>
<body>
<div class="container">
    <div class="row">
            <div class="box clearfix">
            <h3>Szachownica</h3>
            <p>Beta v0.1</p>

            <table class="table table-hover" id="bootstrap-table">
                <thead>
                <tr>
                    <th></th>
                    <th>id</th>
                    <th>Username</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td>200</td>
                    <td>janedoe</td>
                    <td>Yane</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td></td>
                    <td>100</td>
                    <td>zanedoe</td>
                    <td>Jane</td>
                    <td>Moe</td>
                </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
<script src="{{ asset('tabela/jquery.tabledit.js') }}"></script>
<script src="{{asset ('tabela2/js/vendor/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset ('tabela2/js/vendor/jquery.sortelements.js')}}" type="text/javascript"></script>
<script src="{{asset ('tabela2/js/jquery.bdt.min.js')}}" type="text/javascript"></script>
<script>
$('#bootstrap-table').Tabledit({
        editButton: false,
                removeButton: false,
                columns: {
                    identifier: [0, 'id'],
                    editable: [[1, 'Username'],[2, 'First Name'],[3, 'Last Name']]
                }
            });
      
</script>
<script>
  $(document).ready( function () {
    $('#bootstrap-table').bdt();
});
</script>

</body>
</html>

