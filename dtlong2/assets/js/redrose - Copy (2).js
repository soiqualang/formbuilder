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
	//frm.appendChild(createInput('img'+fid,'hidden'));
	//frm.appendChild(createDiv('showimg',html));
	//frm.appendChild(html);
	//console.log(html);
	frm.innerHTML+=html;
};

var gettxt = function(url) {
	/*var service='https://dothanhlong.org/services/vungocphuongtrang/?url=';
   $.get(service+url, gettxtCallback);*/
   $.get(url, gettxtCallback);
};
function previewForm(){
	var fromrendered=document.getElementById('render').value;
	//console.log(fromrendered);
	var frm_preview=document.getElementById('frm_preview').innerHTML;
	frm_preview.innerHTML=fromrendered;
	var form = document.getElementsByTagName( "form" )[0];
	//<form name="frm_preview" id="frm_preview" action="frm_preview.php" method="POST" target="_blank">
	/* form.setAttribute("id", "frm_preview");
	form.setAttribute("name", "frm_preview");
	form.setAttribute("action", "frm_preview.php");
	form.setAttribute("method", "GET");
	form.setAttribute("target", "_blank"); */
	
	//console.log(form);
	gettxt('map_element.html');
	form = document.getElementsByTagName( "form" )[0];
	//console.log(form);
	document.getElementById('txtfrm').value=fromrendered;
	
	//document.frm_preview2.submit();
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

