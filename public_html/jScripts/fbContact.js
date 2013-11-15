$(document).ready(function(){
	$('#fName').focus();
	$('#cForm').validate({
		rules: {
			fName: { required: true },
			lName: { required: true },
			cEmail: { required: true, email: true },
			comments: { required: true }
		},
		messages: {
			fName: { required: " <span style='color: red'>First Name is Required</span>" },
			lName: { required: " <span style='color: red'>Last Name is Required</span>" },
			cEmail: { required: " <span style='color: red'>Email is Required</span>", email: " <span style='color: red'>Valid Email is Required</span>" },
			comments: { required: "<br /><span style='color: red;'>Comments Are Required</span>" }
		},
		submitHandler: function(){
			if($('#email').val() == ""){
				var dataStr = "fName=" + $('#fName').val() + "&lName=" + $('#lName').val() + "&business=" + $('#business').val() + "&add1=" + $('#add1').val() + "&add2=" + $('#add2').val();
				dataStr += "&city=" + $('#city').val() + "&state=" + $('#state').val() + "&zip=" + $('#zipCode').val() + "&phone=" + $('#pNum').val() + "&email=" + $('#cEmail').val();
				dataStr += "&comments=" + $('#comments').val();
				$.ajax({
					type: 'post',
					url: '/cForm.php',
					data: dataStr,
					success: function(html){
						
					}
				})
			} else {
				alert("Unable to send because you are a robot.");
			}
		}
	})
})