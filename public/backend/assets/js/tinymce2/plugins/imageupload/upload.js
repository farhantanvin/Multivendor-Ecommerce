var ImageUpload = {
	inProgress : function() {
		document.getElementById("upload_form").innerHTML = '<br><p>Uploading Image...</p>';
	},
	uploadSuccess : function(result) {
		document.getElementById("image_preview").style.display = 'block';
		document.getElementById("upload_form").innerHTML = '<br><p>Upload Success!</p>';
		parent.tinymce.EditorManager.activeEditor.insertContent('<img src="' + result.code +'">');
	}

};