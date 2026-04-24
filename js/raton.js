$(document).ready(function() {

    // Анимация картинок
    $('.box img').each(function() {
        var img = $(this);
        function moveImage() {
            img.animate({left: '+=100px', opacity: 0.3}, 1500, function() {
                img.css({left: '0px', opacity: 1});
                moveImage();
            });
        }
        moveImage();
    });

    // Логотип через animate
    $('.logo').on('mouseenter', function() {
        $(this).stop(true).animate({
            width: '260px',
            height: '260px',
            marginLeft: '-30px',
            marginTop: '-30px'
        }, 300);
    });

    $('.logo').on('mouseleave', function() {
        $(this).stop(true).animate({
            width: '200px',
            height: '200px',
            marginLeft: '0px',
            marginTop: '0px'
        }, 300);
    });

});