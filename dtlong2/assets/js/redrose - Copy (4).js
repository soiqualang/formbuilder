function switch_map_event(id,state){
	//alert(state);
	//document.getElementById(div).style.display = "block";
	if(id=='switch_loc_input'){
		switch(state){
			case true:
				document.getElementById('getlocdiv').style.display = "block";
				break;
			case false:
				document.getElementById('getlocdiv').style.display = "none";
				break;
			default:
				document.getElementById('getlocdiv').style.display = "block";
		}
	}
	if(id=='switch_map'){
		switch(state){
			case true:
				document.getElementById('mapdiv').style.display = "block";
				break;
			case false:
				document.getElementById('mapdiv').style.display = "none";
				break;
			default:
				document.getElementById('mapdiv').style.display = "block";
		}
	}	
}


var gettxtCallback = function(html) {
	var frm=document.getElementsByTagName("FORM")[0];
	frm.innerHTML+=html;
	var div_preview=document.getElementById('div_preview');
	document.getElementById('txtfrm').value=div_preview.innerHTML;
	document.frm_preview.submit();
};
var gettxt = function(url) {
   $.get(url, gettxtCallback);
};
function previewForm(){
	var fromrendered=document.getElementById('render').value;
	var div_preview=document.getElementById('div_preview');
	div_preview.innerHTML=fromrendered;
	var form = document.getElementsByTagName( "form" )[0];
	gettxt('map_element.html');
	form = document.getElementsByTagName( "form" )[0];
	//console.log(form);
	
	//console.log(document.getElementById('div_preview').innerHTML);
	//document.getElementById('txtfrm').value=fromrendered;
	
	//document.frm_preview.submit();
	//call back o ham gettxtCallback
}

function saveForm(){
	(function() {
		function toJSONString( form ) {
			var obj = {};
			var elements = form.querySelectorAll( "input, select, textarea" );
			for( var i = 0; i < elements.length; ++i ) {
				var element = elements[i];
				var name = element.name;
				var value = element.value;

				if( name ) {
					obj[ name ] = value;
				}
			}

			return JSON.stringify( obj );
		}

		document.addEventListener( "DOMContentLoaded", function() {
			var form = document.getElementById( "test" );
			var output = document.getElementById( "output" );
			form.addEventListener( "submit", function( e ) {
				e.preventDefault();
				var json = toJSONString( this );
				output.innerHTML = json;

			}, false);

		});

	})();
}
/*----------------
base64 form upload
-----------------*/
function readURL(input,oput) 
{
    input.style.display = "block";

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            input.src =  e.target.result;
			//console.log(document.getElementById('hinh3upload').src);
			var src=e.target.result;
			document.getElementById(oput).value=src;
			document.getElementById('imgshow'+oput).innerHTML='<img src="'+src+'" width="300px">';
        }

        reader.readAsDataURL(input.files[0]);
    }
}
/*----------------
   Creat element
-----------------*/
function createInput(id,type){
	var input = document.createElement("input");
	input.type = type;
	input.name = id;
	input.id = id;
	return input;
}
function createDiv(id,html){
	var div = document.createElement("div");
	div.id = id;
	div.innerHTML=html;
	return div;
}

