<?php
$seo_title = "Acceptable Use Policy";
$seo_description = "";
$seo_keywords = "";
?>




<head>
    <style>
        #myBtn2,
        #reach-btn {
            display: none;
        }
    </style>
</head>

<?php include('php/includes-techsters/header.php'); ?>

<!-- main starts here -->
<div class="about-banner">
    <div class="about-banner-blk">
        <img src="images/policy.png" alt="policy" width="1920" height="210">
        <h2 class="text-center">Acceptable Use Policy</h2>

    </div>
</div>

<!--what-is-noc starts here -->
<div class="privacy-policy-blk">
    <div class="container">
        <div class="privacy-policy-main">


            <h3 style="color: #012E6A;">Acceptable Use Policy</h3>
            <p>Use of the services (“Cloud Services”) provided and/or made available by or on behalf of Pi Data Centers Private Limited and its affiliates (“Company” or “We” or “our”) is subject to this Acceptable Use Policy (“AUP”) and this AUP describes the prohibited usage of such Cloud Services. This AUP is an integrate part of any applicable customer or service agreement (the “Agreement”). The examples and restrictions described herein are not exhaustive. We may update this AUP from time to time at our discretion by posting the latest version on www.pidatacenters.com (the “website”).</p>

            <p style="color: #2680EB;">By using the Cloud Services, the customer, user, or client (as applicable) agrees not to, and not to allow third parties to access or use the Cloud Services to:</p>
            <p> &#9679; Violate any applicable local, national or international laws, regulations and rules.</p>
            <p> &#9679; Violate, or encourage the violation of, the legal rights of others, including but not limited to privacy or intellectual property rights.</p>
            <p> &#9679; Use the Cloud Services in a manner that violates applicable law or regulation, infringes on the rights of any person or entity, or violates any agreement with the Company.</p>
            <p> &#9679; License, sublicense, access, use, sell, resell, transfer, assign, distribute, or otherwise commercially exploit or make the Cloud Services available to any third party.</p>
            <p> &#9679; Modify, decompile, reverse engineer or copy the Cloud Services, or any of their components.</p>
            <p> &#9679; Access or use the Cloud Services to build or support any products or services competitive with the Cloud Services.</p>
            <p> &#9679; Conduct, promote, facilitate or allow illegal, unlawful, infringing, harmful or fraudulent activities including but not limited to any activity that promotes child sexual exploitation or any abuse for the purpose of harming or attempting to harm minors in any way, pornography, illegal gambling, network attack, phishing, or damage, surreptitiously intercept any system, program or data.</p>
            <p> &#9679; Transmit, publish, offer, upload, download, use or re-use, disseminate or distribute any unlawful, infringing, offensive, harmful contents or materials which are likely to be understood as a direct or indirect encouragement, threatening, inciting, promoting or other inducement to the commission, preparation or instigation of acts of violence, terrorism or other serious harm.</p>
            <p>&#9679; Transmit any corrupted files, hoaxes, data, send or upload any material that contains,without limitation to, viruses, worms, Trojan horses, keystroke loggers, spyware, or other items of a destructive or deceptive nature or any other harmful programs or similar computer code designed to adversely affect the operation or security of any computer software or hardware or sites or networks;</p>
            <p> &#9679; Distribute, publish, transmit, or facilitate the sending of unsolicited mass email or other messages, promotions, advertising or solicitations (“spam”) or send a massive amount of email to a specific person, site or a system in order to flood their server or in any way flood UseNet newsgroups or send junk e-mail or spam anyone who doesnâ€™t want to receive it and/or which is not permitted by applicable local, national or international laws, regulations and rules.</p>
            <p> &#9679; Access to any portion of the Cloud Services, accounts, or systems without authorization, or attempt to do so.</p>
            <p> &#9679; Violate or adversely impact the security or integrity of the Cloud Services, hardware, software, systems, sites, or networks of the Company.
            </p>
            <p> &#9679; Violate the security, integrity, or availability of any user, network, computer or
                communications system, software application, or network or computing device.</p>
            <p>Any violation or suspected violation of the terms set forth in this AUP will result in an
                immediate and indefinite suspension of Cloud Services solely at the discretion of the
                Company, without any liability.</p>


        </div>

    </div>
</div>

<?php include('php/includes-techsters/footer.php'); ?>
<!-- wrapper ends -->
<script src="js/wow.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/main-pi.js"></script>

<script>
    $(document).ready(function() {
        $('.slider1').slick({
            dots: false,
            arrows: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 4000,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]

        });
        $('.slider2').slick({
            dots: false,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]


        });


        //animation
        wow = new WOW({
            animateClass: 'animated',
            offset: 100,
            mobile: true
        });
        wow.init();
    });
</script>
<script>
    /* jQuery
================================================== */
    $(function() {
        $('.acc__title').click(function(j) {

            var dropDown = $(this).closest('.acc__card').find('.acc__panel');
            $(this).closest('.acc').find('.acc__panel').not(dropDown).slideUp();

            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            } else {
                $(this).closest('.acc').find('.acc__title.active').removeClass('active');
                $(this).addClass('active');
            }

            dropDown.stop(false, true).slideToggle();
            j.preventDefault();
        });
    });
</script>
<script>
    $(function() {
        var fx = function fx() {
            $(".stat-number").each(function(i, el) {
                var data = parseInt(this.dataset.n, 10);
                var props = {
                    "from": {
                        "count": 0
                    },
                    "to": {
                        "count": data
                    }
                };
                $(props.from).animate(props.to, {
                    duration: 3000 * 1,
                    step: function(now, fx) {
                        $(el).text(Math.ceil(now));
                    },
                    complete: function() {
                        if (el.dataset.sym !== undefined) {
                            el.textContent = el.textContent.concat(el.dataset.sym)
                        }
                    }
                });
            });
        };

        var reset = function reset() {
            //console.log($(this).scrollTop())
            if ($(this).scrollTop() > 1990) {
                $(this).off("scroll");
                fx()
            }
        };

        $(window).on("scroll", reset);
    });
</script>
<script>
    $(document).ready(function() {
        $('nav ul li a').click(function() {
            $('nav ul li a').removeClass("active");
            $(this).addClass("active");
        });
    });
</script>
<script>
    // Dropdown Menu
    var dropdown = document.querySelectorAll('.side_bar ul li a');
    var dropdownArray = Array.prototype.slice.call(dropdown, 0);
    dropdownArray.forEach(function(el) {
        var button = el.querySelector('a[data-toggle="dropdown"]'),
            menu = el.querySelector('.drop-down'),
            arrow = button.querySelector('i.icon-arrow');

        button.onclick = function(event) {
            if (!menu.hasClass('show')) {
                menu.classList.add('show');
                menu.classList.remove('hide');
                arrow.classList.add('open');
                arrow.classList.remove('close');
                event.preventDefault();
            } else {
                menu.classList.remove('show');
                menu.classList.add('hide');
                arrow.classList.remove('open');
                arrow.classList.add('close');
                event.preventDefault();
            }
        };
    })

    Element.prototype.hasClass = function(className) {
        return this.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(this.className);
    };
</script>
</body>

</html>