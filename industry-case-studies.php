<?php
$seo_title = "Pi Case Studies: Real-world Solutions & Successes";
$seo_description = "Explore our case studies to discover real-world examples of successful projects and solutions. Learn how our services have helped businesses overcome challenges and achieve their goals through innovative strategies and effective implementations.";
$seo_keywords = "datacenter case studies, colocation, case studies, cloud solutions, cloud strategies, cloud challenges, migration challenges";
?>
<?php #include('php/inner-header.php'); 
?>
<?php include('php/includes-techsters/header.php'); ?>

<style>
    .modal-content {
        background-color: transparent;
        border: none;
    }
</style>
<div class="about-banner">
    <div class="about-banner-blk">
        <img src="images/case-studies.jpg" alt="case-studie-banner" width="1920" height="210">
        <h1>Case Studies</h1>

    </div>
</div>
<!--board-of-directors starts here -->
<div class="case-block">
    <div class="container">
        <div class="case-block-main">
            <!--<h3>Our <span style="color: #7BBC42;font-weight: 400;">Case Studies</span></h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dui mauris, vehicula vel commodo at, sollicitudin sed magna. Quisque nec ligula ligula. Ut tincidunt molestie auctor. Morbi in lacus sit amet odio ornare tincidunt ut vitae nunc. Praesent iaculis luctus nisl, quis</p>-->
            <ul class="slider">
                <li>
                    <ul class="row">
                        <?php
                        $r = [
                            "Agro Chemical Enterprise",
                            "Biotech Enterprise",
                            "Cloud Migration",
                            "Cybersecurity @Pi",
                            "DR Solution Enabling Business Continuity During COVID-19",
                            "Enabling Advanced Banking Processes",
                            "Enabling Cloud Infrastructure for a Leading IoT Provider",
                            "Enabling Digital Banking",
                            "Globally Acclaimed Fintech Organization",
                            "Healthcare Industry",
                            "Infrastructure For Implementing & Hosting SAP HANA",
                            "Leading Cooperative Bank",
                            "Leading NBFC",
                            "Making A Bank Digitally Powerful",
                            "Manufacturing Power Unleashed",
                            "Premier Educational Institution",
                            "Premier Technology Education Institute",
                            "Small Finance Bank"
                        ];
                        foreach ($r as $each) {
                        ?>
                            <li class="col-md-4">
                                <div class="case-content">
                                    <figure>
                                        <img src="case_study_files/<?php echo $each ?>.png" alt="<?php echo $each ?>" width="450" height="248">
                                    </figure>
                                    <h2><?php echo $each ?></h2>
                                    <!-- <br> <br> -->
                                    <a href="#modal-1" onclick="document.getElementById('File_Downloaded').value = '<?php echo $each ?>';" class="download">Download case study</a>
                                </div>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php #include('php/footer.php'); 
?>
<?php include('php/includes-techsters/footer.php'); ?>
<div id="modal-1" class="modalDialog">
    <div class="fill-your-details">
        <div class="modal-content" style="margin: 5% 0%;width:100%">
            <div class="modal-container">
                <a href="#close" title="Close" class="close">x</a>
                <div class="modal-body">
                    <div class=" row">
                        <div class="fill-your-details-cnt" style="width: 100%;">
                            <h3>Fill Your Details</h3>
                            <form onsubmit="return myFunction()" id="contactForm" action="https://clientele.techsters.in/public/api/client_forms" method="post">
                                <input type="text" name="name" style="width: 100%;border-radius:5px" placeholder=" Full Name" required=""><br /><br />
                                <input type="tel" name="number" style="width: 100%;border-radius:5px" placeholder=" Phone" pattern="[0-9]{10}" required=""><br /><br />
                                <input id="email_address" type="email" name="email" style="width: 100%;border-radius:5px" placeholder=" Email Address" required=""><br /><br />
                                <input type="text" name="website" style="width: 100%;border-radius:5px" placeholder=" Company Website" required=""><br /><br />
                                <textarea name="message" style="width: 100%;border-radius:5px" rows="4" placeholder=" Message" required=""></textarea><br /><br />
                                <input class="btn" style="width: 100%;border-radius:5px" type="submit" value="Submit">
                                <input type="hidden" name="downloaded" id="File_Downloaded" value="">
                                <input type="hidden" name="techsters_subject" value="PiDataCenters - Case Studies">
                                <input type="hidden" name="form_unique_id" value="1ef13057-52fd-11ee-a4b0-525400b78afc">
                            </form>
                            <script>
                                function myFunction() {
                                    let email_address = document.getElementById('email_address').value;
                                    if (email_address.includes('gmail') || email_address.includes('yahoo') || email_address.includes('outlook') ||
                                        email_address.includes('hotmail') || email_address.includes('live') || email_address.includes('aol')) {
                                        alert('Invalid Email Address, Please use your Work Email');
                                        return false;
                                    } else {
                                        let File_Downloaded = document.getElementById('File_Downloaded').value;
                                        let URL = 'case_study_files/' + File_Downloaded + '.pdf';
                                        window.open(URL);
                                    }
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer ends-->
</div>
<!-- wrapper ends -->
<script src="js/wow.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/main-pi.js"></script>
<script>
    $(document).ready(function(e) {
        var TabBlock = {
            s: {
                animLen: 200
            },
            init: function() {
                TabBlock.bindUIActions();
                TabBlock.hideInactive();
            },
            bindUIActions: function() {
                $('.tabBlock-tabs').on('click', '.tabBlock-tab', function() {
                    TabBlock.switchTab($(this));
                });
            },
            hideInactive: function() {
                var $tabBlocks = $('.tabBlock');
                $tabBlocks.each(function(i) {
                    var
                        $tabBlock = $($tabBlocks[i]),
                        $panes = $tabBlock.find('.tabBlock-pane'),
                        $activeTab = $tabBlock.find('.tabBlock-tab.is-active');
                    $panes.hide();
                    $($panes[$activeTab.index()]).show();
                });
            },
            switchTab: function($tab) {
                var $context = $tab.closest('.tabBlock');
                if (!$tab.hasClass('is-active')) {
                    $tab.siblings().removeClass('is-active');
                    $tab.addClass('is-active');
                    TabBlock.showPane($tab.index(), $context);
                }
            },
            showPane: function(i, $context) {
                var $panes = $context.find('.tabBlock-pane');
                // Normally I'd frown at using jQuery over CSS animations, but we can't transition between unspecified variable heights, right? If you know a better way, I'd love a read it in the comments or on Twitter @johndjameson
                $panes.slideUp(TabBlock.s.animLen);
                $($panes[i]).slideDown(TabBlock.s.animLen);
            }
        };
        $(function() {
            TabBlock.init();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.slider').slick({
            slidesToShow: 1,
            dots: true,
            arrows: false,
            //adaptiveHeight: true,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        slidesToShow: 1
                    }
                }
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
    const modalBox = document.querySelector(".modal-container");
    const modalBtn = document.querySelector(".modal-btn");
    const closeBtn = document.querySelector(".close-btn");
    modalBtn.addEventListener("click", () => {
        modalBox.style = "display: block;";
    });
    closeBtn.addEventListener("click", () => {
        modalBox.style = "display: none;";
    });
    window.addEventListener("click", (e) => {
        if (e.target == modalBox) {
            modalBox.style = "display: none;";
        }
    });
</script>
</body>

</html>