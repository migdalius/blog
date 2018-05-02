@extends('layouts.adminapp')

@section('title', 'Aktualizacja kategorii')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    {!! csrf_field() !!}
    <form>
	    <div class="col-md-12 order-md-1" id="my-form">
	      <div class="column">
	        <div class="col-md-6 mb-3">
	          <input type="text" class="form-control" id="xml_path" name="xml" placeholder="/xml/czasnabuty.xml" value="" required>
	        </div>
	        
	        <div class="col-md-6 mb-3">
	          <input type="text" class="form-control" id="xml_tag" name="xml_tag" placeholder="/iof:produts/iof:product/iof:category" value="" required>
	        </div>
  	      <div class="col-md-6 mb-3">
  	        <button class="btn btn-dark btn-lg btn-block" type="button" id="myBtn" onclick="mySuperFunction()" style="font-size : 18px;" > Sprawdź które kategorie jeszcze nie są dodane </button>
  	      </div>
        </div>
		  </div>
    </form>

  <div>
    <a clas ="error"> </a>
    <a clas ="sukces"> </a>
    <div id="demo"></div>     
  </div>    
@endsection

@section('tabela')
<script>
function mySuperFunction(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          showResult(xhttp.responseXML);
      }
  };
  xhttp.open("GET", document.getElementById("xml_path").value  , true);
  xhttp.send(); 
}
function showResult(xml) {
    var categories_from_db = {!! json_encode($kategorie->toArray()) !!};
    var txt = '<table class="table"><thead class="thead-dark"><tr><th scope="col">Kategoria</th><th scope="col">Dodaj</th></tr></thead><tbody>';
    if (xml.evaluate) {
      function nsResolver(prefix) {
        var ns = {
          'iof' : 'http://www.iai-shop.com/developers/iof.phtml'
        };
        return ns[prefix] || null;
      } 
        var nodes = xml.evaluate(document.getElementById("xml_tag").value, xml, nsResolver, XPathResult.ANY_TYPE, null);
        var result = nodes.iterateNext();
        var category_array = [];
        while(result) {            
            if(!category_array.includes(result.getAttribute('name')) && 
            !categories_from_db.includes(result.getAttribute('name'))){
              var category_name = result.getAttribute('name')
              category_array.push(category_name);
              txt += "<tr><td>";
              txt += category_name;
              txt += "</td><td><button class='add btn btn-outline-dark' type='submit' value='"+category_name+"' name='add'> Dodaj Kategorie do bazy danych</button></td</tr>";
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
    document.getElementById("my-form").style.display = "none";
}


$(document).on('click', '.add', function() {
      alert ("The " + this.value + " button is click");
      $.ajax({
        method: 'post',
        url: '/aktualizacja_kategorii/update',
        dataType : 'json',
        data:{
          '_token':$('input[name=_token]').val(),
          'kategoria':this.value
        },
        success: function(data) {
          if ((data.errors)){
            $('.error').text(data.errors.name);
            console.log("asd");
          }
          alert ("Huuuuura " + data.kategoria + " button is click");
        }
      });
});

</script>

@endsection