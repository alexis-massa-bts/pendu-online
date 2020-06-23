$('.level').click(function(){
    if (!$(this).hasClass("locked")) {
        $(location).attr('href','jeu-solo.php');
    }
});