$(document).ready(function () {

    //scroll bar
    //$("html").niceScroll();
    //$("body").niceScroll({scrollspeed: 60, mousescrollstep: 60});
    $(".allImages").niceScroll({railalign: 'left', railpadding: {top: 10, right: 3, left: 0, bottom: 0}});


    $('.thumbnail').click(function () {
        $('.imageViewer').empty();
        // var title = $(this).parent('a').attr("title");
        var title = $(this).attr("data-title");
        $('.modal-title').html(title).slide;
        $($(this).parents('div').html()).appendTo('.imageViewer');
        $('.modal-body .imageViewer .thumbnail').removeClass("myThumbnailActive");
        $('.modal-body .imageViewer .thumbnail').removeClass("myThumbnail");
        var src = $(this).attr("src");
        $(".allImages .myThumbnail").removeClass("myThumbnailActive");
        $(".allImages .myThumbnail[src='" + src + "']").addClass("myThumbnailActive");
        $('.modal-body .imageViewer .thumbnail').removeClass("blur");
        $('#myModal').modal({show: true});
        $("#myModal").off("click");
    });
    $(".myBtnClose").click(function () {
        $('#myModal').modal('hide');
    });


    //products Descriptor
    // $('.productImg').click(function () {
    //     var p = $(this);
    //     var offset = p.offset().top;
    //     var top = offset;//.top;
    //     var elements = $(".productImg");
    //     var doneFlag = false;
    //     $.each(elements, function (i, element) {
    //         if ($(element).offset().top > top) {
    //             var pre = $($(element).prev()[0]);
    //             $($(".productDescriptor")[0]).slideUp(500, function () {
    //                 $($(".productDescriptor")[0]).stop();
    //                 $('.productDescriptorImage').empty();
    //                 $('.productDescriptorText').empty();
    //                 $($(".productDescriptor")[0]).insertAfter(pre);
    //                 $(p.html()).appendTo('.productDescriptorImage');
    //                 var linkAddress = $(".productDescriptorImage").find('a').attr("data-title");
    //                 $(".productDescriptorImage").find('a').attr("href",linkAddress);
    //                 $("<p>" + $(p.find("img")[0]).attr("data-title") + "</p>").appendTo('.productDescriptorText')
    //                 $('.productDescriptorImage').hide();
    //                 $('.productDescriptorImage').fadeIn(1000);
    //                 $($(".productDescriptor")[0]).slideDown(1000);
    //                 // $(p.html()).appendTo('.productDescriptorImage');
    //                 //$(".productDescriptorImage")
    //             });
    //             doneFlag = true;
    //             return false;
    //         }
    //     });
    //     if (!doneFlag) {
    //         var last = $(".productImg:last");
    //         $($(".productDescriptor")[0]).slideUp(500, function () {
    //             $($(".productDescriptor")[0]).stop();
    //             $('.productDescriptorImage').empty();
    //             $('.productDescriptorText').empty();
    //             $($(".productDescriptor")[0]).insertAfter(last);
    //             $(p.html()).appendTo('.productDescriptorImage');
    //             var linkAddress = $(".productDescriptorImage").find('a').attr("data-title");
    //             $(".productDescriptorImage").find('a').attr("href",linkAddress);
    //             $("<p>" + $(p.find("img")[0]).attr("data-title") + "</p>").appendTo('.productDescriptorText')
    //             $('.productDescriptorImage').hide();
    //             $('.productDescriptorImage').fadeIn(1000);
    //             $($(".productDescriptor")[0]).slideDown(1000);
    //         });
    //
    //         doneFlag = true;
    //         return false;
    //     }
    //
    // });


    //formSubmit
    $("#formSubmit").click(function () {
        //$(this).parents('form').checkValidity();
        $(this).parents('form').submit();
        //$(".callusForm").disable()
        //$(this).attr('disabled','disabled');

        $(this).parents('form').find("input[type!=hidden],textarea").attr('disabled', 'disabled');
        $(this).attr('disabled', 'disabled');
        //$(".callusForm input[type!=hidden]").attr('disabled', 'disabled');
        //$(".callusForm textarea").attr('disabled', 'disabled');
        $(".formLoading").show(500);
    });

    //fileAttachmet
    if (document.getElementById('fileAttachmet') != null) {
        document.getElementById('fileAttachmet').onchange = function () {
            var files = $("#fileAttachmet")[0].files;
            if (files.length != 0) {
                $('.chooseFileIcon').show();
            }
        };
    }

    //captcha
    $('#captcha_holder a:first').remove();

});