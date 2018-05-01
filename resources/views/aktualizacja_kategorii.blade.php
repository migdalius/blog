@extends('layouts.adminapp')

@section('title', 'Aktualizacja kategorii')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="/aktualizacja_kategorii/update">
	  	{{csrf_field()}}
	    <div class="col-md-8 order-md-1">
	        <!-- dodaj konto allegro -->
	      <div class="row">
	        <div class="col-md-4 mb-3">
	          <label for="xml">xml</label>
	          <input type="text" class="form-control" id="xml" name="xml" placeholder="" value="" required>
	        </div>
	        
	        <div class="col-md-4 mb-3">
	          <label for="xml_tag">xml_tag</label>
	          <input type="text" class="form-control" id="xml_tag" name="xml_tag" placeholder="" value="" required>
	        </div>
	      <hr class="mb-4">
	      </div>
	      <div class="col-md-3 mb-3">
	        <button class="btn btn-primary btn-lg btn-block" type="submit">Dodaj</button>
	      </div>
		</div>
  </form>
  <div id="demo"> </div>
  @if(session('recent_categories'))
    
  	<table class="table">
  		<thead class="thead-dark">
    		<tr>
      			<th scope="col">kategoria</th>
    		</tr>
  		</thead>
  		<tbody>
  			@foreach($recent_categories as $kategoria)
  				<tr>
  					<td>$kategoria</td>
  				</tr>	
  			@endforeach
  		</tbody>
	</table>
  @endif
         
@endsection

@section('tabela')
<script>
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        showResult(xhttp.responseXML);
    }
};
xhttp.open("GET", "/xml/kesi.xml", true);
xhttp.send(); 

function showResult(xml) {
    var txt = '<table class="table"><thead class="thead-dark"><tr><th scope="col">Kategoria</th></tr></thead><tbody>';
    if (xml.evaluate) {
        var nodes = xml.evaluate('/products/product/category', xml, null, XPathResult.ANY_TYPE, null);
        var result = nodes.iterateNext();
        var category_array = [];
        while(result) {            
            if(!category_array.includes(result.getAttribute('name'))){
              category_array.push(result.getAttribute('name'));
              txt += "<tr><td>";
              txt += result.getAttribute('name');
              txt += "</td></tr>";
            }

            result = nodes.iterateNext();
        } 
    // Code For Internet Explorer
    } else if (window.ActiveXObject || xhttp.responseType == "msxml-document") {
        xml.setProperty("SelectionLanguage", "XPath");
        nodes = xml.selectNodes(path);
        for (i = 0; i < nodes.length; i++) {
            txt += nodes[i].childNodes[0].nodeValue + "<br>";
        }
    }
    txt += "</tbody></table>";
    document.getElementById("demo").innerHTML = txt;
}
</script>

@endsection