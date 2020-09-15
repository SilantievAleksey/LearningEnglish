$(document).ready(function(){
    $(".login").click(function () {
        document.getElementById('window_login').style.display = 'block';
        document.body.style.overflow = 'hidden';
    });
    $(".close_log").click(function () {
        document.getElementById('window_login').style.display='none';
        document.body.style.overflow = 'initial';
    });
});