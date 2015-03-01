function deleteme1(t) {
    alert("Note Deleted"), $("#" + t).remove()
}

function deleteme(t) {
    $("#" + t).remove()
}

function getSelected() {
    if (window.getSelection) return window.getSelection();
    if (document.getSelection) return document.getSelection();
    var t = document.selection && document.selection.createRange();
    return t.text ? t.text : !1
}
$(document).ready(function() {
    "use strict";
    $(".stype").css({
        display: "block",
        border: "1px solid #666666",
        padding: "6px 10px",
        "-webkit-border-radius": "4px",
        "-moz-border-radius": "4px",
        "border-radius": "4px",
        "text-decoration": "none"
    }), $(".stype").hover(function() {
        $(this).css({
            cursor: "pointer"
        })
    }), $(".stype").mouseover(function() {
        $(this).css({
            "background-color": "#CCCCCC"
        })
    }).mouseout(function() {
        $(this).css({
            "background-color": "#FFFFFF"
        })
    }), $(".stype").append("&nbsp;&nbsp;&nbsp;&nbsp;<i class='glyphicon glyphicon-chevron-right' ></i>");
    var t = "<img src='/img/loading.gif' alt='loading...' />",
        e = "/act/getsection";
    $.ajaxSetup({
        cache: !0
    }), $(".stype").toggle(function() {
        $("i", this).addClass("glyphicon-chevron-down").removeClass("glyphicon-chevron-right"), $(this).next().html(t);
        var i = $(this).next();
        $.get(e, {
            sid: $(this).attr("data-jid")
        }, function(t) {
            i.css("display", "none"), i.html(t), i.show("slow")
        })
    }, function() {
        var t = $(this).next();
        t.slideUp("fast"), $("i", this).addClass("glyphicon-chevron-right").removeClass("glyphicon-chevron-down")
    }), $("#JudgementName").autocomplete("/autocomplete/index", {
        delay: 10,
        minChars: 2,
        matchSubset: 1,
        matchContains: 1,
        cacheLength: 10,
        maxItemsToShow: 5,
        autoFill: !1
    })
});
var v;
$(document).ready(function() {
    $(".text").hide()
}), $(document).ready(function() {
    $(".edit").click(function() {
        v = $(this).attr("id"), $("#elm" + v).show("slow"), $(this).hide()
    })
});
var n2;
$(document).ready(function() {
    $(".delenote").click(function() {
        input = confirm("Are you sure you want to delete ?"), 1 == input && (n2 = $(this).attr("idtr"), $.post("/notes/delete", {
            id1: n2
        }, function() {
            deleteme1(n2)
        }))
    })
});
var n;
$(document).ready(function() {
    $(".delefav").click(function() {
        input = confirm("Are you sure you want to delete ?"), 1 == input && (n = $(this).attr("idtr"), $.post("/favorites/delete", {
            id1: n
        }, function() {
            deleteme(n)
        }))
    })
}), $(".text").hide();
var $aSelected = $("span.favourite").find("span");
if ($aSelected.hasClass("fimage")) {
    var num = $(".fimage")[0].getAttribute("num");
    1 == num ? $("span.fimage").css("background", "url(/img/favour1.png)") : $("span.fimage").css("background", "url(/img/favour.png)"), $(".fimage").click(function() {
        var t = $(this).attr("num");
        1 == t ? ($.post("/favorites/save_favorite", {
            loginid: $(".fimage")[0].getAttribute("id").split("_")[1],
            jid: $(".fimage")[0].getAttribute("id").split("_")[2],
            num: 2,
            set: 1
        }), $(".fimage").attr("num", "2"), $("span.fimage").css("background", "url(/img/favour.png)"), alert("Favorite Added")) : ($.post("/favorites/save_favorite", {
            loginid: $(".fimage")[0].getAttribute("id").split("_")[1],
            jid: $(".fimage")[0].getAttribute("id").split("_")[2],
            num: 1,
            set: 0
        }), $(".fimage").attr("num", "1"), $("span.fimage").css("background", "url(/img/favour1.png)"))
    })
}
$(".show").click(function() {
    $("#" + $(this).attr("id").split("_")[0] + "_div").show("slow"), $(this).hide(), $("#" + $(this).attr("id").split("_")[0] + "_hide").show("slow")
}), $(".hide").click(function() {
    $("#" + $(this).attr("id").split("_")[0] + "_div").hide("slow"), $(this).hide(), $("#" + $(this).attr("id").split("_")[0] + "_show").show("slow")
}), $(".edit_but").click(function() {
    $("#" + $(this).attr("id").split("_")[0] + "_" + $(this).attr("id").split("_")[1] + "_div").show("slow")
}), $(document).ready(function() {
    var t, e = "/cases/search/name:{term}";
    $(".omni_judgement").mouseup(function(i) {
        var n = getSelected();
        n && (n = new String(n).replace(/^\s+|\s+$/g, "")) && n.length > 4 && (t || (t = $("<a>").attr({
            href: e,
            title: "View judgements of the selected text.",
            target: "_blank",
            id: "selection-image"
        }).hide(), $(document.body).append(t)), t.attr("href", e.replace("{term}", encodeURI(n))).css({
            top: i.pageY - 30,
            left: i.pageX - 13
        }).fadeIn())
    }), $(document.body).mousedown(function() {
        t && t.fadeOut()
    })
}), $(window).height() + 100 < $(document).height() && $("#top-link-block").removeClass("hidden").affix({
    offset: {
        top: 100
    }
});


