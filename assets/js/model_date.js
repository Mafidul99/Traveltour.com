jQuery('.dynFrm_arrival_date').datepicker({
    minDate: 0,
    buttonImage: 'assets/img/calbtn.gif',
    buttonText: 'Click to view calendar',
    buttonImageOnly: true,
    showOn: 'button',
    changeMonth: true,
    changeYear: true,
    onClose: function(dateText, inst) {
        var endDateTextBox = jQuery('.dynFrm_departure_date');
        if (endDateTextBox.val() != '') {
            var testStartDate = new Date(dateText);
            var testEndDate = new Date(endDateTextBox.val());
            if (testStartDate > testEndDate)
                endDateTextBox.val(dateText);
        }
    },
    onSelect: function(selectedDateTime) {
        var start = jQuery(this).datepicker('getDate');
        jQuery('.dynFrm_departure_date').datepicker('option', 'minDate', new Date(start.getTime()));
        jQuery('#dynFrm_departure_date').datepicker('option', 'minDate', new Date(start.getTime()));
    }
});
jQuery('.dynFrm_departure_date').datepicker({
    minDate: 0,
    buttonImage: 'assets/img/calbtn.gif',
    buttonText: 'Click to view calendar',
    buttonImageOnly: true,
    showOn: 'button',
    changeMonth: true,
    changeYear: true,
    onClose: function(dateText, inst) {
        var startDateTextBox = jQuery('.dynFrm_arrival_date');
        if (startDateTextBox.val() != '') {
            var testStartDate = new Date(startDateTextBox.val());
            var testEndDate = new Date(dateText);
            if (testStartDate > testEndDate)
                startDateTextBox.val(dateText);
        }
    },
    onSelect: function(selectedDateTime) {
        var end = jQuery(this).datepicker('getDate');
        jQuery('.dynFrm_arrival_date').datepicker('option', 'maxDate', new Date(end.getTime()));
        jQuery('#dynFrm_arrival_date').datepicker('option', 'maxDate', new Date(end.getTime()));
    }
});