jQuery(function(){

	var note = jQuery('#note'),
		ts = new Date(2012, 0, 1),
		newYear = true;

	if((new Date()) > ts){
		// The new year is here! Count towards something else.
		// Notice the *1000 at the end - time must be in milliseconds
		var austDay = new Date();
		austDay = new Date(2014, 0, 15);
		ts = (austDay);
		newYear = false;
	}

	jQuery('#countdown').countdown({
		timestamp	: ts,
		callback	: function(days, hours, minutes, seconds){

			var message = "";

			message += days + " day" + ( days==1 ? '':'s' ) + ", ";
			message += hours + " hour" + ( hours==1 ? '':'s' ) + ", ";
			message += minutes + " minute" + ( minutes==1 ? '':'s' ) + " and ";
			message += seconds + " second" + ( seconds==1 ? '':'s' ) + " <br />";

			note.html(message);
		}
	});

});
