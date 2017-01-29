$(document).ready(function() {
    $('.thumbnail').click(function(){
        $('.imageViewer').empty();
        // var title = $(this).parent('a').attr("title");
        var title = $(this).attr("data-title");
        $('.modal-title').html(title).slide;
        $($(this).parents('div').html()).appendTo('.imageViewer');
        $('.modal-body .imageViewer .thumbnail').removeClass("myThumbnailActive");
        $('.modal-body .imageViewer .thumbnail').removeClass("myThumbnail");
        var src=$(this).attr("src");
        $(".allImages .myThumbnail").removeClass("myThumbnailActive");
        $(".allImages .myThumbnail[src='"+src+"']").addClass("myThumbnailActive");
        $('.modal-body .imageViewer .thumbnail').removeClass("blur");
        $('#myModal').modal({show:true});
    });
});