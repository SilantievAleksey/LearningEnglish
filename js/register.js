$(document).ready(function(){
    $(".reg").click(function () {
        document.getElementById('window_register').style.display = 'block';
        document.body.style.overflow = 'hidden';
    });
    $(".close_reg").click(function () {
        document.getElementById('window_register').style.display='none';
        document.body.style.overflow = 'initial';
    });
});