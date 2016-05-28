/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 $(function() {


 });
$('.buy').on('click', function() {
    var curThis = $(this);
    var productIDValSplitter = (this.id).split("_");
    var productIDVal = productIDValSplitter[1];
    $.ajax({
        type: "POST",
        url: SITE_URL + "basket/buy/" + productIDVal,
        data: {productID: productIDVal, action: "getBasket"},
        dataType: "json",
        success: function(theResponse) {
            console.log(theResponse);
            $("#cartContainer").load(SITE_URL + "basket/getBasket" );
            if (theResponse.status) {
                var cart = $('.icon-shopping-cart');
                var imgtodrag = curThis.parent().parent().find("img").eq(0);
                console.log(curThis.parent().parent().parent());
                if (imgtodrag) {
                    var imgclone = imgtodrag.clone()
                            .offset({
                                top: imgtodrag.offset().top,
                                left: imgtodrag.offset().left
                            })
                            .css({
                                'opacity': '0.5',
                                'position': 'absolute',
                                'height': '150px',
                                'width': '150px',
                                'z-index': '1105'
                            })
                            .appendTo($('body'))
                            .animate({
                                'top': cart.offset().top + 10,
                                'left': cart.offset().left + 10,
                                'width': 75,
                                'height': 75
                            }, 1000, 'easeInOutExpo');
                    imgclone.animate({
                        'width': 0,
                        'height': 0
                    }, function() {
                        //curThis.detach();
                    });
                }

            } else {
                console.log(theResponse.msg);
            }
        }
    });

    return false;
});
$('.productViewAddToCart').on('click', function() {
    var curThis = $(this);
    var productIDValSplitter = (this.id).split("_");
    var productIDVal = productIDValSplitter[1];
    $.ajax({
        type: "POST",
        url: SITE_URL + "basket/buy/" + productIDVal,
        data: {productID: productIDVal, action: "getBasket"},
        dataType: "json",
        success: function(theResponse) {
            console.log(theResponse);
            $("#cartContainer").load(SITE_URL + "basket/getBasket" );
            if (theResponse.status) {
                var cart = $('.icon-shopping-cart');
                var imgtodrag = $("#mainPreviewImg");
                if (imgtodrag) {
                    var imgclone = imgtodrag.clone()
                            .offset({
                                top: imgtodrag.offset().top,
                                left: imgtodrag.offset().left
                            })
                            .css({
                                'opacity': '0.5',
                                'position': 'absolute',
                                'height': '150px',
                                'width': '150px',
                                'z-index': '1105'
                            })
                            .appendTo($('body'))
                            .animate({
                                'top': cart.offset().top + 10,
                                'left': cart.offset().left + 10,
                                'width': 75,
                                'height': 75
                            }, 1000, 'easeInOutExpo');
                    imgclone.animate({
                        'width': 0,
                        'height': 0
                    }, function() {
                        //curThis.detach();
                    });
                }

            } else {
                console.log(theResponse.msg);
            }
        }
    });

    return false;
});

$.ready(function() {
    // delete item from the popover cart
    $(document).on('click', '.removeRealCart', function() {
        console.log($(this));
        return false;
        var curThis = $(this);
        var href = curThis.attr("href");
        $.ajax({
            type: "POST",
            url: href,
            dataType: "json",
            success: function(theResponse) {
                console.log(theResponse);
                if (theResponse.status) {
                    curThis.parents(".item-in-cart").animate({
                        opacity: 0
                    }, "swing", function() {
                        $(this).slideUp();
                        $(".checkout-container").load(SITE_URL + "basket/getRealBasket" );
                    });
                } else {
                    console.log(theResponse.msg);
                }
            }
        });


        return false;
    });
});
/*
 * 
 * @returns {undefined}
 * $(".table-items .icon-remove-sign").click(function() {
 $(this).parents("tr").animate({
 opacity: 0
 }, "swing", function() {
 $(this).remove();
 });
 return false;
 });
 */
$(document).on('click', '.table-items .removeRealCart', function() {
    var curThis = $(this);
    var href = curThis.attr("href");
    
    $.ajax({
        type: "POST",
        url: href,
        dataType: "json",
        success: function(theResponse) {
            console.log(theResponse);
            if (theResponse.status) {
                console.log('h');
                curThis.parents("tr").animate({
                    opacity: 0
                }, "swing", function() {
                    curThis.remove();
                    $(".checkout-container").load(SITE_URL + "basket/getRealBasket" );
                });
            } else {
                console.log(theResponse.msg);
            }
        }
    });
    return false;
});

$(function() {
    $(document).on('click', '.removeSmallCart', function() {
        var curThis = $(this);
        var href = curThis.attr("href");
        $.ajax({
            type: "POST",
            url: href,
            dataType: "json",
            success: function(theResponse) {
                console.log(theResponse);
                if (theResponse.status) {
                    curThis.parents(".item-in-cart").animate({
                        opacity: 0
                    }, "swing", function() {
                        curThis.slideUp();
                        $("#cartContainer").load(SITE_URL + "basket/getBasket" );
                    });
                } else {
                    console.log(theResponse.msg);
                }
            }
        });


        return false;
    });


    $('.cartQty').keyup(function() {
        console.log("test");
        this.value = this.value.replace(/[^0-9\.]/g, '');
        var href = $(this).attr("id");
        var qty = this.value;
        $.ajax({
            type: "POST",
            url: href,
            dataType: "json",
            data:{quantity: qty},
            success: function(theResponse) {
                $("#subTotalPrice").load(SITE_URL + "basket/getTotalPrice");
            }
        });
    });
});