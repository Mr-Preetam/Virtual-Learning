$('#homepage').click(function() {
    $.ajax({
        url: 'ajax/home.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
});
$('#courceo').click(function() {
    $.ajax({
        url: 'ajax/courceoffered.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
});
$('#courses').click(function() {
    $.ajax({
        url: 'ajax/syllabus.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
});
$('#payment').click(function() {
    $.ajax({
        url: 'ajax/payment.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
});
$('#instructor_info').click(function() {
    $.ajax({
        url: 'ajax/instructor.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
});
$('#contact').click(function() {
    $.ajax({
        url: 'ajax/contact.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
});
$('#login_signup').click(function() {
    $.ajax({
        url: 'ajax/login.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
});
$('#student_user').click(function() {
    $.ajax({
        url: 'ajax/signup.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
});
$('#parent_user').click(function() {
    $.ajax({
        url: 'ajax/login.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
});

// Professor part begins

$('#viewstu').click(function() {
    $.ajax({
        url: 'ajaxProfessor/views.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
});

$('#smails').click(function() {
    $.ajax({
        url: 'ajaxProfessor/smail.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
});

$('#smails').click(function() {
    $.ajax({
        url: 'ajaxProfessor/smail.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
});

$('#ibox').click(function() {
    $.ajax({
        url: 'ajaxProfessor/inbox.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
});

// Admin part begins
$('#viewpar').click(function() {
    $.ajax({
        url: 'ajaxAdmin/viewp.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
});

$('#acour').click(function() {
    $.ajax({
        url: 'ajaxAdmin/addc.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
});

$('#dcour').click(function() {
    $.ajax({
        url: 'ajaxAdmin/delc.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
});

// Parent part begins

$('#insa').click(function() {
    $.ajax({
        url: 'ajaxParent/insta.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
});

$('#courc').click(function() {
    $.ajax({
        url: 'ajaxParent/courc.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
});

// Student part begins
$('#mpage').click(function() {
    $.ajax({
        url: 'ajaxStudent/mpage.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
});

$('#cregister').click(function() {
    $.ajax({
        url: 'ajaxStudent/cregi.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
});

$('#ccal').click(function() {
    $.ajax({
        url: 'ajaxStudent/ccal.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
});

$('#noti').click(function() {
    $.ajax({
        url: 'ajaxStudent/cnotif.php',
        type: 'POST',

        success: function(responsedata) {
            $('#userdashboard_data').html(responsedata);
        }
    });
});