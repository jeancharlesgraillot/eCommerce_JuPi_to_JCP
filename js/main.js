$('.product').click(function() {
   var index = $(this).attr('data-id');
   window.location.href = "index.php?id="+index+"&action=descriptionProduct";
});
$('.mobile-menu').click(function() {
   $(this).toggle();
   $('header nav').toggle();
});
$('header nav').click(function() {
    if($(window).width() < 768) {
        $(this).toggle();
        $('.mobile-menu').toggle();
    }
})
