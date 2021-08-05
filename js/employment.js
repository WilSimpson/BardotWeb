"use strict";
(function($) {

	$(document).ready(function () {
        $("#employmentform").validate({
            submitHandler: function(form) {
                $(form).ajaxSubmit();
                $('.formSent').show();
                $(form).hide();
                setTimeout('window.close()', 5000);
            }
        });
        });     
});