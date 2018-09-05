function Countdown(){
	setTimeout(function(){
		$.post('../alat/countdown.php',function(data){
		    $('#waktu').html(data);
		});
		Countdown();
	}, 1000);
}

$(document).ready(function(){
	Countdown();
});