function validate_form() {

    if (document.testimonial.sender_name.value == "") {

        jQuery('#sender_name').parent().find('span.red').text('Please Enter Name.')
        document.testimonial.sender_name.focus();
        return false;
    } else {

        jQuery('#sender_name').parent().find('span.red').text('')
    }



    if (document.testimonial.email_id.value == "") {

        jQuery('#email_id').parent().find('span.red').text('Please enter Email Id.')
        document.testimonial.email_id.focus();
        return false;
    } else {

        jQuery('#email_id').parent().find('span.red').text('')
    }

    var reg = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (reg.test(username) == false) {

        jQuery('#email_id').parent().find('span.red').text('Please enter valid email.');
        document.testimonial.email_id.focus();
        return false;
    } else {

        jQuery('#email_id').parent().find('span.red').text('')
    }

    if (document.testimonial.ph_number.value == "") {

        jQuery('#ph_number').parent().find('span.red').text('Please select Mobile Number.')
        document.testimonial.ph_number.focus();
        return false;
    } else {

        jQuery('#ph_number').parent().find('span.red').text('')
    }

    if (document.testimonial.rating.value == "") {

        jQuery('#rating').parent().find('span.red').text('Please select Rating.')
        document.testimonial.rating.focus();
        return false;
    } else {

        jQuery('#rating').parent().find('span.red').text('')
    }

    if (document.testimonial.description.value == "") {

        jQuery('#description').parent().find('span.red').text('Please Write Your Review.')
        document.testimonial.description.focus();
        return false;
    } else {

        jQuery('#description').parent().find('span.red').text('')
    }

    return true;
}

function Contact_No_Validtion(strString) {

    var strValidChars = "0123456789.-[],/|";

    var strChar;

    var blnResult = true;

    if (strString.length == 0) return false;

    for (i = 0; i < strString.length && blnResult == true; i++) {

        strChar = strString.charAt(i);

        if (strValidChars.indexOf(strChar) == -1) {

            jQuery('#ph_number').parent().find('span.red').text('Enter Valid Contact Number.')

            document.getElementById('ph_number').value = "";

            blnResult = false;
        }
    }

    return blnResult;
}