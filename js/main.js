$(document).ready(function()
{

    $(window).scroll(function(){
        if ($(this).scrollTop() > 300) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 500);
        return false;
    });

    var old_ground = 'vocabulary_words_A';
    $('li.btn_ground>button').click(function () {
        var new_ground = $(this).attr('id');
        if (old_ground == 'vocabulary_'+new_ground)
        {
            document.getElementById(old_ground).style.display = 'flex';
        }
        else
        {
            document.getElementById(old_ground).style.display = 'none';
            document.getElementById('vocabulary_'+new_ground).style.display = 'flex';
            old_ground = 'vocabulary_'+new_ground;
        }
    });

    $('.zebra li a').click(function () {
        document.getElementById('global_inf').style.display = 'block';
    });

});