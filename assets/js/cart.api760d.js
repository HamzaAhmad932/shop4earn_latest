function getItemFormatedPrice(t){return Shopify.formatMoney(t,money_format)}function onCartUpdateCustom(t){0==t.item_count&&$(".empty-cart-js").removeClass("hide"),$(".removeAfterCompleteAjax").remove(),addToCartHandler.updateGeneralInfo(t),$("body").trigger("refreshCurrency")}function getIdFromUrl(t){return(t=t.match(/id=\d+/g))[0].match(/\d+/g)}var addToCartHandler={initItemAddToCartButton:function(){$(".addtocart-item-js");$("body").on("click",".addtocart-item-js",function(t){t.preventDefault();var e=getIdFromUrl($(this).attr("href"));Shopify.addItem(e,1)})},initFormAddToCartButton:function(t,e,a){var r=e.find(".addtocart-js");if(0==r.length)return!1;r.unbind().click(function(a){a.preventDefault();var d=Math.max(1,parseInt(e.find(".input-counter").find("input").val()));Shopify.addItem(t,d),quick_view_loader.wait(r)})},addItem:function(t){var e=$("header").find(".cart"),a=$(".empty-cart-js"),r=e.find("ul:not(.item-html-js)"),d=getItemFormatedPrice(t.price),i=$(".item-html-js").children().clone();i.find(".title").find("a").attr("href",t.url).html(t.product_title),i.find(".price").html(d),i.find(".qty").find("input").val(t.quantity);var n=i.find(".img").find("a");n.attr("href",t.url).empty(),$("<img src="+t.image+' alt="Cart Image">').appendTo(n);var o=i.find(".details");null==t.variant_title?o.remove():o.html(t.variant_title.replace(/ \//g,", "));var l=i.find(".delete").find("a"),m=String(l.attr("href")).replace("id=0","id="+t.id);l.attr("href",m),i.find(".edit").find("a").attr("href",t.url),r.find('[href="'+m+'"]').length&&r.find('[href="'+m+'"]').closest("li").remove(),$(i).appendTo(r),!a.hasClass("hide")&&a.addClass("hide")},updateGeneralInfo:function(t){var e=getItemFormatedPrice(t.total_price),a=$("header").find(".cart");a.find(".badge-cart").text(t.item_count),0==t.item_count?a.find(".badge-cart").addClass("empty"):a.find(".badge-cart").removeClass("empty"),a.find(".cart-total").find("span:first-child").empty().html(e)}},addedModal={$modal:$("#modalAddToCartProduct"),initSingleItem:function(t){var e=getItemFormatedPrice(t.price*t.quantity),a=this.$modal;a.find(".title").html(t.product_title);var r=a.find(".description");null==t.variant_title?r.hide():r.show().html(t.variant_title.replace(/ \//g,", ")),a.find(".qty span").first().empty().text(t.quantity),a.find(".total-product-js span").first().empty().html(e);var d=a.find(".image-box").empty();$('<img src="'+t.image+'" alt="Added Product">').appendTo(d)},initGeneralInfo:function(t){var e=getItemFormatedPrice(t.total_price),a=this.$modal;a.find(".modal-total-quantity").text(t.item_count),a.find(".full-total-js").html(e)},showModal:function(){if(modal_qv_open)return!1;var t=this.$modal;t.modal("show"),this.$modal.find(".close-modal-added-js").click(function(e){e.preventDefault(),$(this).unbind(),t.modal("hide")})}};Shopify.onItemAdded=function(t){Shopify.getCart(),addToCartHandler.addItem(t),addedModal.initSingleItem(t)},Shopify.onCartUpdate=function(t){addToCartHandler.updateGeneralInfo(t),addedModal.initGeneralInfo(t),addedModal.showModal(),quick_view_loader.added(),$("body").trigger("refreshCurrency")},Shopify.onError=function(XMLHttpRequest,textStatus){if(modal_qv_open)return quick_view_loader.error(),!1;var data=eval("("+XMLHttpRequest.responseText+")");if(data.message)var str=data.description;else var str="Error : "+Shopify.fullMessagesFromErrors(data).join("; ")+".";$("#modalAddToCartError .error_message").text(str),$("#modalAddToCartError").modal("toggle")};var removeFromCartHandler=function(){$("body").on("click",".header_delete_cartitem_js",function(t){t.preventDefault(),$(this).closest("li").addClass("removeAfterCompleteAjax");var e=getIdFromUrl($(this).attr("href"));Shopify.removeItem(e,onCartUpdateCustom)})};addToCartHandler.initItemAddToCartButton(),removeFromCartHandler();