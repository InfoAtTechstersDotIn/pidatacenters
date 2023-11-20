function darkLight() {
    "dark" != localStorage.toggled ? ($("body").toggleClass("dark", !0), localStorage.toggled = "dark") : ($("body").toggleClass("dark", !1), localStorage.toggled = "")
}

function socialWindow(e) {
    var t = (screen.width - 570) / 2,
        s = "menubar=no,toolbar=no,status=no,width=570,height=570,top=" + (screen.height - 570) / 2 + ",left=" + t;
    window.open(e, "NewWindow", s)
}

function setShareLinks() {
    var e = encodeURIComponent(document.URL),
        t = encodeURIComponent($("meta[property='og:description']").attr("content"));
    $(".facebook").on("click", function() {
        url = "https://www.facebook.com/sharer.php?u=" + e, socialWindow(url)
    }), $(".twitter").on("click", function() {
        url = "https://twitter.com/intent/tweet?url=" + e + "&text=" + t, socialWindow(url)
    }), $(".linkedin").on("click", function() {
        url = "https://www.linkedin.com/sharing/share-offsite/?url=" + e, socialWindow(url)
    })
}
$(".owl-carousel").owlCarousel({
    loop: !0,
    margin: 10,
    nav: !0,
    autoplay: false,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    autoplayHoverPause: true,
    responsiveClass: !0,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        },
        3000: {
            items: 1
        }
    }
}), $(".grid_view").click(function() {
    var e = $(this).height();
    $(this).parent().parent().toggleClass("dep-active"), $(this).parent().parent().siblings().addClass("eg-heiAuto"), $(this).parent().parent().toggleClass("eg-heiAuto"), $(this).parent().parent().siblings().removeClass("dep-active"), $(this).siblings().toggleClass("open"), $(this).parent().parent().siblings().children().children().removeClass("open");
    var t = e + $(this).siblings(".full-cont").height() + 54;
    $(this).parent().parent(".dep-active").css("height", t + "px"), $(this).parent().parent(".dept-list-group").siblings().css("height", "auto")
}), $(document).ready(function() {
    $(".hb-topss").click(function() {
        $(this).toggleClass("active"), $(".hb-slideMenuCo").toggleClass("active"), $("#overlay").toggleClass("active")
    }), $(".tab-link").click(function() {
        var e = $(this).attr("data-tab");
        $(".skltbs-tab-item").removeClass("current"), $(".skltbs-panel").removeClass("current"), $(this).parent().addClass("current"), $("#" + e).addClass("current")
    })
}), $(".hb-slideArrow").click(function() {
    $(this).siblings().slideToggle(500)
}), $(".hb_mobile-view-btn").click(function() {
    $("#overlay").toggleClass("active"), $(".hb-navmenu").toggleClass("open"), $(this).toggleClass("closeToggle"), $(".hb-megaDropdown ,  .hb-inDrpCo").removeClass("active")
}), $(".hb-navLists >li>a").click(function() {
    $(this).siblings().addClass("active")
}), $(".hb-knMob").click(function() {
    $(this).siblings().addClass("active")
}), $(".backtoMenu").click(function() {
    $(".hb-megaDropdown , .hb-inDrpCo").removeClass("active")
}), $("#overlay").click(function() {
    $(this).removeClass("active"), $(".hb-casePop").removeClass("active"), $(".hb_mobile-view-btn").removeClass("closeToggle"), $(".hb-navmenu").removeClass("open"), $(".hb-topss").removeClass("active"), $(".hb-slideMenuCo").removeClass("active"), $(".hb-megaDropdown ,  .hb-inDrpCo").removeClass("active")
}), $(document).mousedown(function(e) {
    var t = $(".dept-list-group"),
        s = $(".full-cont");
    t.is(e.target) || 0 !== t.has(e.target).length || $(".dept-list-group.dep-active").removeClass("dep-active").addClass("eg-heiAuto"), s.is(e.target) || 0 !== s.has(e.target).length || $(".full-cont.open").removeClass("open")
}), $(window).scroll(function() {
    $(window).scrollTop() > 200 ? $(".scrollbar").addClass("scroll-open") : $(".scrollbar").removeClass("scroll-open")
}), $(".scrollbar").click(function() {
    return $("html, body").animate({
        scrollTop: 0
    }, 500), !1
}), $(".hb-ourScop >li >p").click(function() {
    $(this).siblings().slideToggle(500), $(this).parent().removeClass("inActive"), $(this).toggleClass("active"), $(this).parent().siblings().addClass("inActive")
}), $(".hb-downLoadTest").on("click", function() {
    id = $(this).data("post_id"), document.getElementById("post_id").value = id, $(".hb-casePop").addClass("active"), $("#overlay").addClass("active")
}), $("#caseStudiesForm").bind("submit", function() {
    return $.ajax({
        datatype: JSON,
        type: "post",
        url: "caseStudiesFormSubmit",
        data: $("#caseStudiesForm").serialize(),
        success: function(e) {
            debugger;
            // $("#caseStudiesForm").reset();
            $('#caseStudiesForm')[0].reset();
            var t = $.parseJSON(e);
            "success" == t.status ? window.open("https://harbour1.in/dashboard/public/pdfs/" + t.data, "_blank") : alert(t.message)
        }
    }), !1
}), $("#contactForm").bind("submit", function() {
    return $.ajax({
        datatype: JSON,
        type: "post",
        url: "contactform-submit",
        data: $("#contactForm").serialize(),
        success: function(e) {
            $("#contactForm").reset, console.log(e);
            var t = $.parseJSON(e);
            t.status, alert(t.message)
        }
    }), !1
}), $("body").toggleClass(localStorage.toggled), $("body").hasClass("dark") ? $("#checkBox").prop("checked", !0) : $("#checkBox").prop("checked", !1), setShareLinks();