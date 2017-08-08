$('.project-link').each(function(){
    $(this).on('mouseover', function(){
        $('.preview').css("background-image", "url("+$(this).attr('data-thumbnail')+")");
    });
    $(this).on('mouseout', function(){
        $('.preview').css("background-image", "none");
    });
})
