//Date time picker

		var nowDate = new Date();
		jQuery(function() {
            jQuery( "#datepicker-13" ).datepicker();
            //jQuery( "#datepicker-13" ).datepicker("show");
			format: 'dd/MM/yyyy',
			startDate: nowDate,
			});

//name field validation
jQuery("input[name='name']").keydown(function(e) {
 if (e.shiftKey || e.ctrlKey || e.altKey) {
	   e.preventDefault();
	 } else {
	   var key = e.keyCode;
	   if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
		 e.preventDefault();
	   }
	 }
  }); 