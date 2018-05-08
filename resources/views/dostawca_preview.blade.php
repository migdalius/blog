@extends('layouts.adminapp')

@section('title', 'Preview xml od dostawcy')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
   	<div id='showProduct'></div><br>
   	<input type="button" onclick="previous()" value="<<">
	<input type="button" onclick="next()" value=">>">
	
@endsection

@section('tabela')
<script>
	var i = 0;
	var x;
	displayProducts(i);

	function displayProducts(i) {
	    var xmlhttp = new XMLHttpRequest();
	    xmlhttp.onreadystatechange = function() {
	        if (this.readyState == 4 && this.status == 200) {
	            myFunction(this, i);
	        }
	    };
	    xmlhttp.open("GET", "/xml/kupbuty.xml", true);
	    xmlhttp.send();
	}

	function myFunction(xml, i) {
	    var xmlDoc = xml.responseXML; 
	    x = xmlDoc.getElementsByTagName("product");
	    
	    document.getElementById("showProduct").innerHTML =
	    "Kategoria: " +
	    x[i].getElementsByTagName("category")[0].getAttribute('name') +
	    "<br>Long description: " +
	    x[i].getElementsByTagName("long_desc")[0].childNodes[0].nodeValue +
	    "<br>image: " + "<img src='"+
	    x[i].getElementsByTagName("image")[0].getAttribute('url')+"' alt='product image' width = '100' height='100'>";
	}

	function next() {
		if (i < x.length-1) {
		  i++;
		  displayProducts(i);
		}
	}

	function previous() {
	if (i > 0) {
	  i--;
	  displayProducts(i);
	  }
	}
</script>
@endsection