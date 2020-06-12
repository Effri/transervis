jQuery(window).load(function () {
    function changeHistory(ton) {
        console.log('changeHistory '+ton);
        var to = ton
        jQuery(".history_line_item").each(function () {
            n = jQuery(this).attr("data-n");
            jQuery(this).removeClass("history_line_item"+n);
            if (to == 'plus')
                newn = parseInt(n)+1;
            else
                newn = parseInt(n)-1;
            jQuery(this).addClass("history_line_item"+newn);
            jQuery(this).attr("data-n", newn);
        })
    }

    jQuery(".history_top").click(function() {
        if (jQuery(this).hasClass("disabled"))
            return false;
        changeHistory('plus');
        if (!jQuery(".history_line_item_wrap").find(".history_line_item0").hasClass("history_line_item")) {
            jQuery(this).addClass("disabled");
        }
        jQuery(".history_bottom").removeClass("disabled");
    })

    jQuery(".history_bottom").click(function() {
        if (jQuery(this).hasClass("disabled"))
            return false;
        changeHistory('minus');
        if (!jQuery(".history_line_item_wrap").find(".history_line_item9").hasClass("history_line_item")) {
            jQuery(this).addClass("disabled");
        }
        jQuery(".history_top").removeClass("disabled");
    })

    $(".history_line_item").mouseover(function () {
        var id = $(this).data("id"),
            dop_id = $(this).data("dop-id"),
            current_item = $(".history_line_year_item[data-id='"+id+"']"),
            indx = current_item.index(),
            parent = $(".history_line_project_info");

        $(this).addClass("active").siblings().removeClass("active");

        $(".year_detail_img_wrap img").each(function () {

            $(this).removeClass("active");

            if($(this).attr("data-id") == dop_id) {
                $(this).addClass("active");
            }

        });

        $(".history_line_year_item").each(function () {
            $(this).removeAttr("id").removeClass("prev_item").removeClass("next_item");
        });

        if((indx - 2) >= 0) {
            $(".history_line_year_item").eq(indx - 2).attr("id", "history_line_year_item_1");
        }

        if((indx - 1) >= 0) {
            $(".history_line_year_item").eq(indx - 1).attr("id", "history_line_year_item_2");
        }

        current_item.attr("id", "history_line_year_item_3");

        $(".history_line_year_item").eq(indx + 1).attr("id", "history_line_year_item_4");
        $(".history_line_year_item").eq(indx + 2).attr("id", "history_line_year_item_5");

        $("#history_line_year_item_1").prevAll().addClass("prev_item");
        $("#history_line_year_item_5").nextAll().addClass("next_item");

        //parent.addClass("load");

        $.ajax({
                type: "POST",
                url: "/local/components/profitkit/history.line/ajax.php",
                data: "id="+dop_id,
                success: function(msg){
                   $(".history_line_project_info").html(msg);
                    //parent.removeClass("load");

                    if($(window).outerWidth() < 767) {

                        var currTop = $('.history_line_project_info').offset().top;
                        $('body,html').animate({"scrollTop": currTop - 110}, 1500);
                        return false;
                    }

                }
        });


    });

});