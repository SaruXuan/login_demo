$(document).ready(function () {
    $('#logout').on('click', function(e) {
        //delete session
        $.post("event/logout.php",
            function (data, textStatus, jqXHR) {
                console.log('logout');
            }
        );
        $(location).attr('href', 'index.php');
    });
});