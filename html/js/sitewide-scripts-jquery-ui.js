// jQuery Modal Popup JavaScript Document

$(function() {
	//$('.road_lnk, .cross_lnk, .mtb_lnk').button();
	$("#email_btn").button({
		icons : {
			primary : "ui-icon-mail-closed"
		}
	});

	$('a.ajaxImg').click(function(event) {
		PreviewImage($(this).children("img").attr("src"));
		imageTitle = $(this).children("img").attr("title");
		event.preventDefault();
	});
});

var PreviewImage = function(uri) {

	//Get the HTML Elements
	imageDialog = $("#dialog");
	imageTag = $('#image');

	//Set the image src
	imageTag.attr('src', uri);
	srcUrl = imageTag.attr('src');

	//$(imageDialog).prepend('<span id=\"spin\"><img src="images/animated/spinner.gif"/></span>');
	function hideLoadingImage() {
		$('#spin').remove();
	}

	function showLoadingImage() {
		$(imageDialog).html('<span id=\"spin\"><img src="images/animated/spinner.gif"/></span>');
	}

	var img = new Image();

	//When the image has loaded, display the dialog
	imageTag.load(function() {

		img.src = srcUrl;
		img.w = parseInt(img.width + 25);

		$('#dialog').dialog({
			width : img.w,
			height : 'auto',
			title : imageTitle,
			modal : true,
			resizable : false,
			draggable : false,
			zIndex : 3999,
			close : function(event, ui) {
				//$(this).destroy();
				//$(this).dialog('close');
				$("#image").attr('src', '');
			}
		});
	});
}