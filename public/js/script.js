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
        $("#myModal").off("click");
    });
    $(".myBtnClose").click(function () {
        $('#myModal').modal('hide');
    });


    //products Descriptor
    $('.productImg').click(function () {
        var p = $(this);
        var offset = p.offset();
        var top=offset.top;
        var elements=$(".productImg");
        var doneFlag=false;
        $.each(elements,function (i,element) {
            if(element.offsetTop > top )
            {
                var pre=$($(element).prev()[0]);
                $($(".productDescriptor")[0]).slideUp(500,function () {
                    $($(".productDescriptor")[0]).stop();
                    $($(".productDescriptor")[0]).insertAfter(pre);
                    $($(".productDescriptor")[0]).slideDown(1000);
                    console.log($(this).html());
                    $($(this).html()).appendTo('.productDescriptorImage');
                    //$(".productDescriptorImage")
                });
                doneFlag=true;
                return false;
            }
        });
        if(!doneFlag){
            var last=$(".productImg:last");
            $($(".productDescriptor")[0]).slideUp(500,function () {
                $($(".productDescriptor")[0]).stop();
                $($(".productDescriptor")[0]).insertAfter(last);
                $($(".productDescriptor")[0]).slideDown(1000);
            });

            doneFlag=true;
            return false;
        }

    });

});