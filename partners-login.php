<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Partner Portal | Login</title>
    <!--    <base href="/">-->
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <link rel="icon" type="image/png" href="partners-portal/favicon.png">
    <link rel="stylesheet" type="text/css" href="partners-portal/css/bootstrap.min.css?vmay02" />
    <link rel="stylesheet" type="text/css" href="partners-portal/fontawesome/css/all.css?vmay02" />
    <link rel="stylesheet" type="text/css" href="partners-portal/inteltelinputs/build/css/intlTelInput.min.css?vmay02" />
    <link rel="stylesheet" type="text/css" href="partners-portal/css/styles.css?vmay02" />

    <style>
        body {
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('partners-portal/banner-g.png');
            background-repeat: no-repeat;
            background-size: 100% auto;
            color: #696969;
        }

        .mobile_view_crd {
            display: none;
            position: fixed;
            left: -52px;
            top: 50px;
            top: 58%;
            margin: -300px auto;
            bottom: 0;
            height: 595px;
            z-index: 3;
            user-select: none;
            animation: mb_crda_slidin 1s linear;
        }

        @keyframes mb_crda_slidin {
            0% {
                left: -100%;
            }

            100% {
                left: -52px;
            }
        }

        .mobile_view_crd img {
            height: 100%;
            width: auto;
        }

        @media screen and (max-width:768px) {
            .lft_crd {
                display: none;
            }

            .mobile_view_crd {
                display: block;
                top: 65%;
                left: -10px;
                position: absolute;
            }

            .mobile_view_crd img {
                height: 75%;
            }

            .card {
                top: 291px;
                right: -50px;
                width: 162%;
                margin: 0 !important;
                animation: card-right 1s linear;
            }

            @keyframes card-right {
                0% {
                    right: -450px;
                }

                100% {
                    right: -300px;
                }
            }
        }

        @media screen and (max-width:599px) {
            .lft_crd {
                display: none;
            }

            .mobile_view_crd {
                display: block;
                top: 69%;
                left: -10px;
                position: absolute;
            }

            .mobile_view_crd img {
                height: 60%;
            }

            .card {
                top: 367px;
                right: 0px;
                width: 105%;
                margin: -8px !important;
                animation: card-right 1s linear;
            }

            @keyframes card-right {
                0% {
                    right: -400px;
                }

                100% {
                    right: -300px;
                }
            }
        }
    </style>

</head>

<body>

    <div id="loader">
        <div class="loader"></div>
    </div>

    <div class="VertiMidwerty">
        <p style="float:right;padding:4px"><a href="https://pidatacenters.com/" target="_blank"><img src="partners-portal/logo3.png"></a></p>
        <div class="container-fluid">

            <div class="lft_crd">
                <img src="partners-portal/cntr-wtcrd-2-1.png" class="image-responsive">
            </div>

            <div class="mobile_view_crd">
                <img src="partners-portal/cntr-wtcrd-2-1.png" class="image-responsive">
            </div>


            <div _ngcontent-c1="" class="col-lg-4 col-md-4 col-12" style="float:right;margin-top:120px;">
                <!-- <div _ngcontent-c1="" class="lg_logo"></div> -->
                <div _ngcontent-c1="" class="lg-form">
                    <div _ngcontent-c1="" class="card" style="margin:0px -138px 0px 225px">
                        <div _ngcontent-c1="" class="card-header card_header" style="background-color:#273b96;color:white;">Login With Email</div>
                        <div _ngcontent-c1="" class="card-body">
                            <div _ngcontent-c1="" class="form-group"><label _ngcontent-c1="">Username / Email ID</label><input _ngcontent-c1="" class="form-control ng-valid ng-dirty ng-touched" placeholder="Enter email" type="text" ng-reflect-model="umnmg@ni.com" field_signature="1318412689" form_signature="8076526245328979752" pm_parser_annotation="username_element"></div>
                            <div _ngcontent-c1="" class="form-group"><label _ngcontent-c1="">Password</label><input _ngcontent-c1="" class="form-control ng-valid ng-dirty ng-touched" placeholder="Enter password" type="password" ng-reflect-model="pi_partner_42398" field_signature="475301429" form_signature="8076526245328979752" pm_parser_annotation="password_element"></div>
                            <div _ngcontent-c1="" class="row">
                                <div _ngcontent-c1="" class="col-lg-4 col-md-4 col-4">
                                    <div _ngcontent-c1="" class="form-group mgtop-25"><button _ngcontent-c1="" class="btn btn-primary" style="background-color: #273b96;border: 1px solid #273b96;">Sign in</button></div>
                                </div>
                                <div _ngcontent-c1="" class="col-lg-8 col-md-8 col-8">
                                    <div _ngcontent-c1="" class="form-group mgtop-25 pull-right"><a _ngcontent-c1="" class="pointer">Login With Mobile Number</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div _ngcontent-c1="" hidden="">
                    <div _ngcontent-c1="" class="card">
                        <div _ngcontent-c1="" class="card-header card_header">Login With Mobile Number</div>
                        <div _ngcontent-c1="" class="card-body">
                            <form _ngcontent-c1="" novalidate="" class="ng-untouched ng-pristine ng-invalid" form_signature="17909402576007786954">
                                <div _ngcontent-c1="" class="col no-padding form-content-section"><label _ngcontent-c1="">Enter Mobile Number</label><input _ngcontent-c1="" class="form-control mat-input-element mat-form-field-autofill-control cdk-text-field-autofill-monitored ng-untouched ng-pristine ng-invalid" id="phoneNo" matinput="" maxlength="10" minlength="10" name="phoneNo" pattern="[5-9][0-9]*" placeholder="Mobile Number" required="" ng-reflect-required="" ng-reflect-minlength="10" ng-reflect-maxlength="10" ng-reflect-pattern="[5-9][0-9]*" ng-reflect-name="phoneNo" ng-reflect-id="phoneNo" ng-reflect-placeholder="Mobile Number" aria-invalid="false" aria-required="true" field_signature="2049804743" form_signature="17909402576007786954">
                                    <div _ngcontent-c1="" class="row mt-4">
                                        <div _ngcontent-c1="" class="col-lg-6"><button _ngcontent-c1="" class="steam-btn-red btn btn-sm" disabled="">Send Verfication Code</button></div><a _ngcontent-c1="" class="col-lg-6 text-right pointer">Login With Email</a>
                                    </div>
                                </div>
                            </form>
                            <form _ngcontent-c1="" class="text-center ng-untouched ng-pristine ng-valid" novalidate=""></form>
                        </div>
                    </div>
                </div>
            </div>



            <div class="" id="cntr_crd_fin"></div>
            <div class="cntr_txt_fin" id="cntr_txt_fin"></div>

        </div>

        <!--    snackbar division-->
        <div id="snackbar">All fields are mandatory</div>

        <!-- Button trigger modal -->

        <div class="modal fade" id="compydes_Dialog" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Company Description</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <textarea rows="5" class="form-control" id="comp_descr" maxlength="500" autofocus></textarea>
                        <h5 id="errorTxt" class="text-danger mgtop-10"><i class="fa fa-warning"></i> Please enter the field
                        </h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="btnSaveText">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="partners-portal/js/jquery.min.js?v4"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="partners-portal/js/bootstrap.min.js?v4"></script>
    <script src="partners-portal/inteltelinputs/build/js/intlTelInput-jquery.min.js?v5"></script>
    <script src="partners-portal/js/scripts.js?v2525"></script>
    <script>
        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("lob");
            filter = input.value.toUpperCase();
            div = document.getElementById("lob_dropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                if (a[i].innerHTML.toUpperCase().indexOf(filter) == 0) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }



        function usafilterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("o_cspr_susa");
            filter = input.value.toUpperCase();
            div = document.getElementById("usastate_dropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                if (a[i].innerHTML.toUpperCase().indexOf(filter) == 0) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }


        function indiafilterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("o_cspr_sind");
            filter = input.value.toUpperCase();
            div = document.getElementById("indiastate_dropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                if (a[i].innerHTML.toUpperCase().indexOf(filter) == 0) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }


        function cityfilterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("o_city");
            filter = input.value.toUpperCase();
            div = document.getElementById("city_dropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                if (a[i].innerHTML.toUpperCase().indexOf(filter) == 0) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }

        function rofilterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("o_relowner");
            filter = input.value.toUpperCase();
            div = document.getElementById("relowner_dropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                if (a[i].innerHTML.toUpperCase().indexOf(filter) == 0) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }




        function indverfilterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("o_indvertical");
            filter = input.value.toUpperCase();
            div = document.getElementById("indver_dropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                if (a[i].innerHTML.toUpperCase().indexOf(filter) == 0) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }


        function countriesfilterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("countrydd");
            filter = input.value.toUpperCase();
            div = document.getElementById("countries_dropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                if (a[i].innerHTML.toUpperCase().indexOf(filter) == 0) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }

        }


        function locofb_filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("loc_o_b");
            filter = input.value.toUpperCase();
            div = document.getElementById("locofbusinees_dropdown");
            $('#locofbusinees_dropdown li a').each(function() {
                if ($(this).text().toUpperCase().indexOf(filter) == 0) {
                    $(this).parent().show();
                } else {
                    $(this).parent().hide();
                }
            })
        }

        //tooltips
        $(document).ready(function() {
            $('#com').tooltip();
            $('#tp').tooltip();
            $('#rb').tooltip();
        });
    </script>


</body>

</html>