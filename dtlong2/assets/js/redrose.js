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

function check2showhidemap(switch_id,div_id){
	var state=document.getElementById(switch_id).checked;
	switch(state){
		case true:
			document.getElementById(div_id).style.display = "block";
			break;
		case false:
			document.getElementById(div_id).style.display = "none";
			break;
		default:
			document.getElementById(div_id).style.display = "block";
	}
}


var gettxtCallback = function(html) {
	var frm=document.getElementsByTagName("FORM")[0];
	//alert(frm.className);
	frm.className='form';
	frm.style.margin='15px';
	frm.innerHTML+=html;
	
	check2showhidemap('switch_loc_input','getlocdiv');
	check2showhidemap('switch_map','mapdiv');
	
	var div_preview=document.getElementById('div_preview');
	document.getElementById('txtfrm').value=div_preview.innerHTML;
	
	//btoa(unescape(encodeURIComponent(str)))
	var div_preview_encode=btoa(unescape(encodeURIComponent(div_preview.innerHTML)));
	document.getElementById('txtfrmNotinclude').value=div_preview_encode;
	
	div_preview.innerHTML='';
	document.frm_preview.submit();
};
var gettxt = function(url){
   $.get(url, gettxtCallback);
};
function previewForm(){
	var fromrendered=document.getElementById('render').value;
	var div_preview=document.getElementById('div_preview');
	div_preview.innerHTML=fromrendered;
	/*get form not include map vs button 2 base64*/
	//document.getElementById('txtfrmNotinclude').value=btoa(div_preview.innerHTML);
	/*include map vs button to form*/
	gettxt('include_elements.php');
	//var form = document.getElementsByTagName( "form" )[0];
	//form = document.getElementsByTagName( "form" )[0];
	//console.log(form);
	
	//console.log(document.getElementById('div_preview').innerHTML);
	//document.getElementById('txtfrm').value=fromrendered;
	
	//document.frm_preview.submit();
	//call back o ham gettxtCallback
}

/*----------------
Nhận dạng form
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
			document.getElementById('show'+oput).innerHTML='<img src="'+src+'" width="300px">';
        }

        reader.readAsDataURL(input.files[0]);
    }
}
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

function editform(){
	var frm=document.getElementsByTagName("FORM")[0];
	frm.setAttribute("id", "test");
	var inputs = document.getElementsByTagName('input');
	for(var i = 0; i < inputs.length; i++) {
		if(inputs[i].type.toLowerCase() == 'file') {
			//alert(inputs[i].value);
			//alert(inputs[i].id);
			var fid=inputs[i].id;
			inputs[i].setAttribute("onchange", "readURL(this,'img"+fid+"');");
			inputs[i].setAttribute("accept", "image/*");			
			
			//frm.appendChild(createInput('img'+fid,'hidden'));
			//frm.appendChild(createDiv('showimg'+fid,''));
			//$("<span>Hello world!</span>").insertAfter("p");
			$(createInput('img'+fid,'hidden')).insertAfter(inputs[i]);
			$(createDiv('showimg'+fid,'')).insertAfter(inputs[i]);
			
		}
	}
}

//https://codepen.io/anon/pen/pOjZvN
(function() {
	function toJSONString( form ) {
		var obj = {};
		var elements = form.querySelectorAll( "input, select, textarea, file" );
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
		//document.getElementsByTagName("FORM")[0].setAttribute("id", "test");
		//document.getElementsByTagName("FORM")[0].setAttribute("method", "post");
		//var form = document.getElementById( "test" );
		var form = document.getElementsByTagName( "form" )[0];
		var output = document.getElementById( "output" );
		form.addEventListener( "submit", function( e ) {
			e.preventDefault();
			//console.log(this);
			var json = toJSONString( this );
			output.innerHTML = json;

		}, false);

	});

})();

function toJSONString(form) {
	var obj = {};
	var elements = form.querySelectorAll( "input, select, textarea, file" );
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

function form2json(){
	var form = document.getElementsByTagName( "form" )[0];
	var output = document.getElementById( "output" );
	var json = toJSONString(form);
	output.innerHTML = json;
	//form.submit();
}

/*----------------
Save form 2 Database
-----------------*/
function form2db(){
	var frmbase64=document.getElementById('frmbase64');
	$('#output').html('<h2>Waiting...</h2><img src="img/car.gif" width="350px">');
	$.ajax({
		url:"xuly.php",
		type:"POST",
		data:{
			 frmbase64:frmbase64.value,
			 func:'form2db'
		},
		success:function (kq){
			$('#output').html(kq);
		}
	});
}