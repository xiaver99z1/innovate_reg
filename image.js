//Code Image Open
function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#imagedisplay').attr('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
	}else{
		$('#imagdisplay').attr('src', "images/default_image_01.png");
	}
}
$("#imgFile").change(function(){
	readURL(this);
	
	uploadFile()
	
	
});


//upload File or Image
function _(el){
	return document.getElementById(el);
}
function uploadFile(){
	var file = _("imgFile").files[0];
	var formdata = new FormData();
	
	// formdata.append("firstname", $('#firstname').val());
	// formdata.append("middlename", $('#middlename').val());				
	// formdata.append("lastname", $('#lastname').val());			
	// formdata.append("suffix", $('#suffix').val());		
	formdata.append("file1", file);
	
	var ajax = new XMLHttpRequest();
	ajax.open("POST", "imguser.php");
	ajax.send(formdata);
	alert('Resume Successfully Saved');
	//alert(file.name+" | "+file.size+" | "+file.type);
}

//copy image name to textbox
function CopyMe(oFileInput, sTargetID) {
    var arrTemp = oFileInput.value.split('\\');
    document.getElementById(sTargetID).value = arrTemp[arrTemp.length - 1];
	
	//alert( $('#user_img').val());
}


$(document).ready(function(){
//alert();

$("#upload_butt").click(function(){
		$("#imgFile").click();
	});




	
});
