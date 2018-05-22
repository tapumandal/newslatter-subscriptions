// $('#newsLatterSubsModal').modal('show');
// alert('xxsa');
// // $('#myModal').modal('hide');

// $('#newsLatterSubsModal').modal({
//     show: 'false'
// }); 

// $('#newsLatterSubsModal').dropdown();

$(document).ready(function(){
    setTimeout(function(){
    	$('#newsLatterSubsModal').modal('show');
    }, 2000);

    $('.email_subscribed').on('click', function(){

    	

		var email = $('#subscribed_email').val();
		
		if(validateEmail(email) == true){
			alert(email);
		}else{
			alert('Please enter The email correctly');

		}
	});
});



function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
