$(document).ready(function () {
    $('#register').on('click', function(e){
        e.preventDefault();
        var data = $('form').serialize();
        console.log(data);

        //register
        $.post("event/submit.php", data,
            function (event, textStatus, jqXHR) {
                console.log('success');
                $('#registerStatus').addClass('show');
                $('input').val('');
                setTimeout(function(){
                    $('#registerStatus').removeClass('show');
                }, 5000);
            }
        ).fail(function (jqXHR, textStatus, errorThrown) {
            console.log('error');
            $('#errorStatus').text(jqXHR.responseText);
            $('#errorStatus').addClass('show');
            setTimeout(function(){
                $('#errorStatus').removeClass('show');
            }, 5000);
        });
    });   
    
    $('#login').on('click', function(e) {
        e.preventDefault();
        var data = $('form').serialize();
        //login
        $.post("event/login.php", data,
            function (event, textStatus, jqXHR) {
                $(location).attr('href', 'memberPage.php'); // passing parameters to new page
            }
        ).fail(function (jqXHR, textStatus, errorThrown) {
            console.log('error');
            $('#errorStatus').text(jqXHR.responseText);
            $('#errorStatus').addClass('show');
            setTimeout(function(){
                $('#errorStatus').removeClass('show');
            }, 5000);
        });
    });
});