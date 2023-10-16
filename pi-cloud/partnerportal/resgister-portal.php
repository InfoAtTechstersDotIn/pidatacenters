<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Partner Portal | Harbour1</title>
    <!--    <base href="/">-->
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css?vmay02" />
    <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css?vmay02" />
    <link rel="stylesheet" type="text/css" href="assets/inteltelinputs/build/css/intlTelInput.min.css?vmay02" />
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css?vmay02" />

</head>

<body>
    <div id="loader">
        <div class="loader"></div>
    </div>

    <div class="VertiMidwerty">
        <div class="container-fluid">
            <div class="lft_crd">
                <img src="assets/images/left_crd.svg?vmay02" class="image-responsive">
            </div>
            <div class="lft_crd_wt">
                <img src="assets/images/cntr_wtcrd.svg?vmay02" class="image-responsive">
            </div>
            <div class="cover_layer"></div>
            <div class="cntr_crd" id="cntr_crd">
                <img src="assets/images/Group148.png?vmay02">
            </div>

            <div class="m_logo" id="m_logo">
                <img src="assets/images/PiPartnerProgramlogo.svg?vmay02">
            </div>
            <div class="m_w_logo" id="m_w_logo">
                <img src="assets/images/PiPartnerProgramwhitelogo.svg?vmay02">
            </div>
            <div class="m_b_logo" id="m_b_logo">
                <img src="assets/images/PiPartnerProgramlogo.svg?vmay02">
            </div>
            <div class="mob_white_fav">
                <img src="assets/images/PiPartnerProgram%20Logo-whitelogo-02.png?vmay02">
            </div>

            <div class="letter_cont">

                <!--            removed data-toggle="tab" fromm the each anchor tab to remove the onclick functionality-->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item current">
                        <a class="nav-link active" id="home_header" data-toggle="tab" href="#home_tab" role="tab" aria-controls="home_tab" aria-selected="true">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" id="personal_header" data-toggle="tab" href="#profile_tab" role="tab" aria-controls="profile_tab" aria-selected="false">Personal Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="organisation_header" data-toggle="tab" href="#organisation_tab" role="tab" aria-controls="organisation_tab" aria-selected="false">Organisation Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="Technical_header" data-toggle="tab" href="#Technical_tab" role="tab" aria-controls="Technical_tab" aria-selected="false">Technical Information</a>
                    </li>
                    <li class="nav-item">

                        <!-- <a class="nav-link"  data-toggle="tab" id="Business_header" href="#Business_tab" role="tab"  aria-controls="Business_tab" aria-selected="false">Business Case</a> -->
                        <a class="nav-link" id="Business_header" data-toggle="tab" href="#Business_tab" role="tab" aria-controls="Business_tab" aria-selected="false">Business Case</a>
                    </li>
                </ul>
                <div class="wt_crd">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home_tab" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container-fluid">

                                <p>
                                    The <b>Pi Partner Program</b> gives you a new prospect of growth along with the
                                    ever-growing data center
                                    and cloud leader in the Indian industry.
                                </p>
                                <p>
                                    We continue to invest in the right technologies and infrastructure for our partners, to
                                    leverage and expand
                                    their horizon, add that zing to their positioning and remain industry leaders in their
                                    own space.
                                </p>
                                <p>
                                    Register with us and have the unique advantage to partner with Asia’s Largest Uptime
                                    Institute TIER IV
                                    Certified Data Center organisation with an access to scale-at-will capacity and
                                    uncompromising quality.
                                    This gives you the opportunity to build in a strong colocation and hosting service line
                                    into your own
                                    solution stack.
                                </p>
                                <p>
                                    Being a Smart and Software Defined Strategic Data Center organisation, we
                                    provide you an incredible
                                    opportunity, as a partner, to deliver the best to your customer’s ever- growing IT
                                    infrastructure
                                    innovation needs.
                                </p>
                                <p class="lht_2rem"><i><small>
                                            * Please do not click "Back" from your browser while completing this
                                            application, to avoid your progress being lost.
                                        </small></i>
                                    <a href="#" class="btn btn-success get_profile_tab flt_rt m-r-10">Next
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </p>

                            </div>

                        </div>
                        <div class="tab-pane fade" id="profile_tab" role="tabpanel" aria-labelledby="profile-info">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <div class="dropdown">
                                                <select class="form-control" id="titledrpdwn">
                                                    <option>Select</option>
                                                    <option value="Mr.">Mr.</option>
                                                    <option value="Ms.">Ms.</option>
                                                </select>

                                            </div>
                                            <div class="text-danger alrt_msg"><small>Title field is mandatory</small></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" id="p_fname" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" id="p_lname" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Job Title</label>
                                            <input type="text" class="form-control" id="p_jobtitle" placeholder="Job Title">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Business Email</label>
                                            <input type="text" class="form-control" id="p_bemail" placeholder="Business Email">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Mobile</label>
                                        <div>
                                            <input type="tel" class="form-control" id="phone" maxlength="10">
                                        </div>

                                    </div>
                                </div>

                                <div class="text-right m-r-20 m-t-10 mob_m_t_10">
                                    <a href="#" class="btn btn-primary get_home_tab"><i class="fas fa-arrow-left"></i>
                                        Back</a>
                                    <a href="#" class="btn btn-success get_organisation_tab tab_next" id="btnFirstForm">Continue
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="organisation_tab" role="tabpanel" aria-labelledby="organisation-details">



                            <div class="container-fluid">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label> Company Name</label>
                                            <input type="text" class="form-control" id="o_cname" placeholder="Company Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Company Website</label>
                                            <input type="text" class="form-control" id="o_cwebsite" placeholder="Company Website">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Company Description</label>
                                            <input type="text" class="form-control resize_none" placeholder="Company Description" id="o_cdesc" data-toggle="tooltip" data-placement="top" data-original-title="company Description" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Company Headquarters Address</label>
                                            <input type="text" class="form-control" id="o_chq" placeholder="Company Headquarters Address">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Zip/Postal Code</label>
                                            <input type="text" class="form-control" id="o_czipcode" placeholder="Zip/Postal Code">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <div class="dropdown">

                                                <input type="text" class="form-control" id="countrydd" onkeyup="countriesfilterFunction()" placeholder="Select from the list">
                                                <div class="dropdown-menu ht_200 wd-102pc" id="countries_dropdown" style="width: 105%">
                                                    <a class="dropdown-item" href="#">India</a>
                                                    <a class="dropdown-item" href="#">Singapore</a>
                                                    <a class="dropdown-item" href="#">USA</a>
                                                    <a class="dropdown-item" href="#">Afghanistan</a>
                                                    <a class="dropdown-item" href="#">Åland Islands</a>
                                                    <a class="dropdown-item" href="#">Albania</a>
                                                    <a class="dropdown-item" href="#">Algeria</a>
                                                    <a class="dropdown-item" href="#">American Samoa</a>
                                                    <a class="dropdown-item" href="#">Andorra</a>
                                                    <a class="dropdown-item" href="#">Angola</a>
                                                    <a class="dropdown-item" href="#">Anguilla</a>
                                                    <a class="dropdown-item" href="#">Antarctica</a>
                                                    <a class="dropdown-item" href="#">Antigua and Barbuda</a>
                                                    <a class="dropdown-item" href="#">Argentina</a>
                                                    <a class="dropdown-item" href="#">Armenia</a>
                                                    <a class="dropdown-item" href="#">Aruba</a>
                                                    <a class="dropdown-item" href="#">Australia</a>
                                                    <a class="dropdown-item" href="#">Austria</a>
                                                    <a class="dropdown-item" href="#">Azerbaijan</a>
                                                    <a class="dropdown-item" href="#">Bahamas</a>
                                                    <a class="dropdown-item" href="#">Bahrain</a>
                                                    <a class="dropdown-item" href="#">Bangladesh</a>
                                                    <a class="dropdown-item" href="#">Barbados</a>
                                                    <a class="dropdown-item" href="#">Belarus</a>
                                                    <a class="dropdown-item" href="#">Belgium</a>
                                                    <a class="dropdown-item" href="#">Belize</a>
                                                    <a class="dropdown-item" href="#">Benin</a>
                                                    <a class="dropdown-item" href="#">Bermuda</a>
                                                    <a class="dropdown-item" href="#">Bhutan</a>
                                                    <a class="dropdown-item" href="#">Bolivia</a>
                                                    <a class="dropdown-item" href="#">Bonaire</a>
                                                    <a class="dropdown-item" href="#">Bosnia and Herzegovina</a>
                                                    <a class="dropdown-item" href="#">Botswana</a>
                                                    <a class="dropdown-item" href="#">Bouvet Island</a>
                                                    <a class="dropdown-item" href="#">Brazil</a>
                                                    <a class="dropdown-item" href="#">British Indian Ocean Territory</a>
                                                    <a class="dropdown-item" href="#">Brunei Darussalam</a>
                                                    <a class="dropdown-item" href="#">Bulgaria</a>
                                                    <a class="dropdown-item" href="#">Burkina Faso</a>
                                                    <a class="dropdown-item" href="#">Burundi</a>
                                                    <a class="dropdown-item" href="#">Cambodia</a>
                                                    <a class="dropdown-item" href="#">Cameroon</a>
                                                    <a class="dropdown-item" href="#">Canada</a>
                                                    <a class="dropdown-item" href="#">Cape Verde</a>
                                                    <a class="dropdown-item" href="#">Cayman Islands</a>
                                                    <a class="dropdown-item" href="#">Central African Republic</a>
                                                    <a class="dropdown-item" href="#">Chad</a>
                                                    <a class="dropdown-item" href="#">Chile</a>
                                                    <a class="dropdown-item" href="#">China</a>
                                                    <a class="dropdown-item" href="#">Christmas Island</a>
                                                    <a class="dropdown-item" href="#">Cocos (Keeling) Islands</a>
                                                    <a class="dropdown-item" href="#">Colombia</a>
                                                    <a class="dropdown-item" href="#">Comoros</a>
                                                    <a class="dropdown-item" href="#">Congo</a>
                                                    <a class="dropdown-item" href="#">Congo</a>
                                                    <a class="dropdown-item" href="#">Cook Islands</a>
                                                    <a class="dropdown-item" href="#">Costa Rica</a>
                                                    <a class="dropdown-item" href="#">Côte d'Ivoire</a>
                                                    <a class="dropdown-item" href="#">Croatia</a>
                                                    <a class="dropdown-item" href="#">Cuba</a>
                                                    <a class="dropdown-item" href="#">Curaçao</a>
                                                    <a class="dropdown-item" href="#">Cyprus</a>
                                                    <a class="dropdown-item" href="#">Czech Republic</a>
                                                    <a class="dropdown-item" href="#">Denmark</a>
                                                    <a class="dropdown-item" href="#">Djibouti</a>
                                                    <a class="dropdown-item" href="#">Dominica</a>
                                                    <a class="dropdown-item" href="#">Dominican Republic</a>
                                                    <a class="dropdown-item" href="#">Ecuador</a>
                                                    <a class="dropdown-item" href="#">Egypt</a>
                                                    <a class="dropdown-item" href="#">El Salvador</a>
                                                    <a class="dropdown-item" href="#">Equatorial Guinea</a>
                                                    <a class="dropdown-item" href="#">Eritrea</a>
                                                    <a class="dropdown-item" href="#">Estonia</a>
                                                    <a class="dropdown-item" href="#">Ethiopia</a>
                                                    <a class="dropdown-item" href="#">Falkland Islands</a>
                                                    <a class="dropdown-item" href="#">Faroe Islands</a>
                                                    <a class="dropdown-item" href="#">Fiji</a>
                                                    <a class="dropdown-item" href="#">Finland</a>
                                                    <a class="dropdown-item" href="#">France</a>
                                                    <a class="dropdown-item" href="#">French Guiana</a>
                                                    <a class="dropdown-item" href="#">French Polynesia</a>
                                                    <a class="dropdown-item" href="#">French Southern Territories</a>
                                                    <a class="dropdown-item" href="#">Gabon</a>
                                                    <a class="dropdown-item" href="#">Gambia</a>
                                                    <a class="dropdown-item" href="#">Georgia</a>
                                                    <a class="dropdown-item" href="#">Germany</a>
                                                    <a class="dropdown-item" href="#">Ghana</a>
                                                    <a class="dropdown-item" href="#">Gibraltar</a>
                                                    <a class="dropdown-item" href="#">Greece</a>
                                                    <a class="dropdown-item" href="#">Greenland</a>
                                                    <a class="dropdown-item" href="#">Grenada</a>
                                                    <a class="dropdown-item" href="#">Guadeloupe</a>
                                                    <a class="dropdown-item" href="#">Guam</a>
                                                    <a class="dropdown-item" href="#">Guatemala</a>
                                                    <a class="dropdown-item" href="#">Guernsey</a>
                                                    <a class="dropdown-item" href="#">Guinea</a>
                                                    <a class="dropdown-item" href="#">Guinea-Bissau</a>
                                                    <a class="dropdown-item" href="#">Guyana</a>
                                                    <a class="dropdown-item" href="#">Haiti</a>
                                                    <a class="dropdown-item" href="#">Heard Island and McDonald Islands</a>
                                                    <a class="dropdown-item" href="#">Vatican City</a>
                                                    <a class="dropdown-item" href="#">Honduras</a>
                                                    <a class="dropdown-item" href="#">Hong Kong</a>
                                                    <a class="dropdown-item" href="#">Hungary</a>
                                                    <a class="dropdown-item" href="#">Iceland</a>
                                                    <a class="dropdown-item" href="#">Indonesia</a>
                                                    <a class="dropdown-item" href="#">Iran</a>
                                                    <a class="dropdown-item" href="#">Iraq</a>
                                                    <a class="dropdown-item" href="#">Ireland</a>
                                                    <a class="dropdown-item" href="#">Isle of Man</a>
                                                    <a class="dropdown-item" href="#">Israel</a>
                                                    <a class="dropdown-item" href="#">Italy</a>
                                                    <a class="dropdown-item" href="#">Jamaica</a>
                                                    <a class="dropdown-item" href="#">Japan</a>
                                                    <a class="dropdown-item" href="#">Jersey</a>
                                                    <a class="dropdown-item" href="#">Jordan</a>
                                                    <a class="dropdown-item" href="#">Kazakhstan</a>
                                                    <a class="dropdown-item" href="#">Kenya</a>
                                                    <a class="dropdown-item" href="#">Kiribati</a>
                                                    <a class="dropdown-item" href="#">Korea</a>
                                                    <a class="dropdown-item" href="#">Korea</a>
                                                    <a class="dropdown-item" href="#">Kuwait</a>
                                                    <a class="dropdown-item" href="#">Kyrgyzstan</a>
                                                    <a class="dropdown-item" href="#">Lao</a>
                                                    <a class="dropdown-item" href="#">Latvia</a>
                                                    <a class="dropdown-item" href="#">Lebanon</a>
                                                    <a class="dropdown-item" href="#">Lesotho</a>
                                                    <a class="dropdown-item" href="#">Liberia</a>
                                                    <a class="dropdown-item" href="#">Libya</a>
                                                    <a class="dropdown-item" href="#">Liechtenstein</a>
                                                    <a class="dropdown-item" href="#">Lithuania</a>
                                                    <a class="dropdown-item" href="#">Luxembourg</a>
                                                    <a class="dropdown-item" href="#">Macao</a>
                                                    <a class="dropdown-item" href="#">Macedonia</a>
                                                    <a class="dropdown-item" href="#">Madagascar</a>
                                                    <a class="dropdown-item" href="#">Malawi</a>
                                                    <a class="dropdown-item" href="#">Malaysia</a>
                                                    <a class="dropdown-item" href="#">Maldives</a>
                                                    <a class="dropdown-item" href="#">Mali</a>
                                                    <a class="dropdown-item" href="#">Malta</a>
                                                    <a class="dropdown-item" href="#">Marshall Islands</a>
                                                    <a class="dropdown-item" href="#">Martinique</a>
                                                    <a class="dropdown-item" href="#">Mauritania</a>
                                                    <a class="dropdown-item" href="#">Mauritius</a>
                                                    <a class="dropdown-item" href="#">Mayotte</a>
                                                    <a class="dropdown-item" href="#">Mexico</a>
                                                    <a class="dropdown-item" href="#">Micronesia</a>
                                                    <a class="dropdown-item" href="#">Moldova</a>
                                                    <a class="dropdown-item" href="#">Monaco</a>
                                                    <a class="dropdown-item" href="#">Mongolia</a>
                                                    <a class="dropdown-item" href="#">Montenegro</a>
                                                    <a class="dropdown-item" href="#">Montserrat</a>
                                                    <a class="dropdown-item" href="#">Morocco</a>
                                                    <a class="dropdown-item" href="#">Mozambique</a>
                                                    <a class="dropdown-item" href="#">Myanmar</a>
                                                    <a class="dropdown-item" href="#">Namibia</a>
                                                    <a class="dropdown-item" href="#">Nauru</a>
                                                    <a class="dropdown-item" href="#">Nepal</a>
                                                    <a class="dropdown-item" href="#">Netherlands</a>
                                                    <a class="dropdown-item" href="#">New Caledonia</a>
                                                    <a class="dropdown-item" href="#">New Zealand</a>
                                                    <a class="dropdown-item" href="#">Nicaragua</a>
                                                    <a class="dropdown-item" href="#">Niger</a>
                                                    <a class="dropdown-item" href="#">Nigeria</a>
                                                    <a class="dropdown-item" href="#">Niue</a>
                                                    <a class="dropdown-item" href="#">Norfolk Island</a>
                                                    <a class="dropdown-item" href="#">Northern Mariana Islands</a>
                                                    <a class="dropdown-item" href="#">Norway</a>
                                                    <a class="dropdown-item" href="#">Oman</a>
                                                    <a class="dropdown-item" href="#">Pakistan</a>
                                                    <a class="dropdown-item" href="#">Palau</a>
                                                    <a class="dropdown-item" href="#">Palestinian Territory</a>
                                                    <a class="dropdown-item" href="#">Panama</a>
                                                    <a class="dropdown-item" href="#">Papua New Guinea</a>
                                                    <a class="dropdown-item" href="#">Paraguay</a>
                                                    <a class="dropdown-item" href="#">Peru</a>
                                                    <a class="dropdown-item" href="#">Philippines</a>
                                                    <a class="dropdown-item" href="#">Pitcairn</a>
                                                    <a class="dropdown-item" href="#">Poland</a>
                                                    <a class="dropdown-item" href="#">Portugal</a>
                                                    <a class="dropdown-item" href="#">Puerto Rico</a>
                                                    <a class="dropdown-item" href="#">Qatar</a>
                                                    <a class="dropdown-item" href="#">Réunion</a>
                                                    <a class="dropdown-item" href="#">Romania</a>
                                                    <a class="dropdown-item" href="#">Russian Federation</a>
                                                    <a class="dropdown-item" href="#">Rwanda</a>
                                                    <a class="dropdown-item" href="#">Saint Barthélemy</a>
                                                    <a class="dropdown-item" href="#">Saint Helena</a>
                                                    <a class="dropdown-item" href="#">Saint Kitts and Nevis</a>
                                                    <a class="dropdown-item" href="#">Saint Lucia</a>
                                                    <a class="dropdown-item" href="#">Saint Martin</a>
                                                    <a class="dropdown-item" href="#">Saint Pierre and Miquelon</a>
                                                    <a class="dropdown-item" href="#">Saint Vincent and the Grenadines</a>
                                                    <a class="dropdown-item" href="#">Samoa</a>
                                                    <a class="dropdown-item" href="#">San Marino</a>
                                                    <a class="dropdown-item" href="#">Sao Tome and Principe</a>
                                                    <a class="dropdown-item" href="#">Saudi Arabia</a>
                                                    <a class="dropdown-item" href="#">Senegal</a>
                                                    <a class="dropdown-item" href="#">Serbia</a>
                                                    <a class="dropdown-item" href="#">Seychelles</a>
                                                    <a class="dropdown-item" href="#">Sierra Leone</a>
                                                    <a class="dropdown-item" href="#">Sint Maarten</a>
                                                    <a class="dropdown-item" href="#">Slovakia</a>
                                                    <a class="dropdown-item" href="#">Slovenia</a>
                                                    <a class="dropdown-item" href="#">Solomon Islands</a>
                                                    <a class="dropdown-item" href="#">Somalia</a>
                                                    <a class="dropdown-item" href="#">South Africa</a>
                                                    <a class="dropdown-item" href="#">South Georgia and the South Sandwich
                                                        Islands</a>
                                                    <a class="dropdown-item" href="#">South Sudan</a>
                                                    <a class="dropdown-item" href="#">Spain</a>
                                                    <a class="dropdown-item" href="#">Sri Lanka</a>
                                                    <a class="dropdown-item" href="#">Sudan</a>
                                                    <a class="dropdown-item" href="#">Suriname</a>
                                                    <a class="dropdown-item" href="#">Svalbard and Jan Mayen</a>
                                                    <a class="dropdown-item" href="#">Swaziland</a>
                                                    <a class="dropdown-item" href="#">Sweden</a>
                                                    <a class="dropdown-item" href="#">Switzerland</a>
                                                    <a class="dropdown-item" href="#">Syrian Arab Republic</a>
                                                    <a class="dropdown-item" href="#">Taiwan</a>
                                                    <a class="dropdown-item" href="#">Tajikistan</a>
                                                    <a class="dropdown-item" href="#">Tanzania</a>
                                                    <a class="dropdown-item" href="#">Thailand</a>
                                                    <a class="dropdown-item" href="#">Timor-Leste</a>
                                                    <a class="dropdown-item" href="#">Togo</a>
                                                    <a class="dropdown-item" href="#">Tokelau</a>
                                                    <a class="dropdown-item" href="#">Tonga</a>
                                                    <a class="dropdown-item" href="#">Trinidad and Tobago</a>
                                                    <a class="dropdown-item" href="#">Tunisia</a>
                                                    <a class="dropdown-item" href="#">Turkey</a>
                                                    <a class="dropdown-item" href="#">Turkmenistan</a>
                                                    <a class="dropdown-item" href="#">Turks and Caicos Islands</a>
                                                    <a class="dropdown-item" href="#">Tuvalu</a>
                                                    <a class="dropdown-item" href="#">Uganda</a>
                                                    <a class="dropdown-item" href="#">Ukraine</a>
                                                    <a class="dropdown-item" href="#">United Arab Emirates</a>
                                                    <a class="dropdown-item" href="#">United Kingdom</a>
                                                    <a class="dropdown-item" href="#">United States Minor Outlying
                                                        Islands</a>
                                                    <a class="dropdown-item" href="#">Uruguay</a>
                                                    <a class="dropdown-item" href="#">Uzbekistan</a>
                                                    <a class="dropdown-item" href="#">Vanuatu</a>
                                                    <a class="dropdown-item" href="#">Venezuela</a>
                                                    <a class="dropdown-item" href="#">Viet Nam</a>
                                                    <a class="dropdown-item" href="#">Virgin Islands, British</a>
                                                    <a class="dropdown-item" href="#">Virgin Islands, U.S.</a>
                                                    <a class="dropdown-item" href="#">Wallis and Futuna</a>
                                                    <a class="dropdown-item" href="#">Western Sahara</a>
                                                    <a class="dropdown-item" href="#">Yemen</a>
                                                    <a class="dropdown-item" href="#">Zambia</a>
                                                    <a class="dropdown-item" href="#">Zimbabwe</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>State</label>
                                            <input type="text" class="form-control o_csr_state" id="o_cspr" placeholder="Select from the list">
                                            <div class="dropdown dsp_none o_csr_state">
                                                <input type="text" class="form-control" id="o_cspr_sind" onkeyup="indiafilterFunction()" placeholder="Select from the list">

                                                <div class="dropdown-menu  ht_200" aria-labelledby="o_cspr_sind" id="indiastate_dropdown">

                                                    <a class="dropdown-item" href="#">Andhra Pradesh</a>
                                                    <a class="dropdown-item" href="#">Arunachal Pradesh</a>
                                                    <a class="dropdown-item" href="#">Assam</a>
                                                    <a class="dropdown-item" href="#">Bihar</a>
                                                    <a class="dropdown-item" href="#">Chhattisgarh</a>
                                                    <a class="dropdown-item" href="#">Goa</a>
                                                    <a class="dropdown-item" href="#">Gujarat</a>
                                                    <a class="dropdown-item" href="#">Haryana</a>
                                                    <a class="dropdown-item" href="#">Himachal Pradesh</a>
                                                    <a class="dropdown-item" href="#">Jammu and Kashmir</a>
                                                    <a class="dropdown-item" href="#">Jharkhand</a>
                                                    <a class="dropdown-item" href="#">Karnataka</a>
                                                    <a class="dropdown-item" href="#">Kerala</a>
                                                    <a class="dropdown-item" href="#">Madhya Pradesh</a>
                                                    <a class="dropdown-item" href="#">Maharashtra</a>
                                                    <a class="dropdown-item" href="#">Manipur</a>
                                                    <a class="dropdown-item" href="#">Meghalaya</a>
                                                    <a class="dropdown-item" href="#">Mizoram</a>
                                                    <a class="dropdown-item" href="#">Nagaland</a>
                                                    <a class="dropdown-item" href="#">Odisha</a>
                                                    <a class="dropdown-item" href="#">Punjab</a>
                                                    <a class="dropdown-item" href="#">Rajasthan</a>
                                                    <a class="dropdown-item" href="#">Sikkim</a>
                                                    <a class="dropdown-item" href="#">Tamil Nadu</a>
                                                    <a class="dropdown-item" href="#">Telangana</a>
                                                    <a class="dropdown-item" href="#">Tripura</a>
                                                    <a class="dropdown-item" href="#">Uttarakhand</a>
                                                    <a class="dropdown-item" href="#">Uttar Pradesh</a>
                                                    <a class="dropdown-item" href="#">West Bengal</a>
                                                    <a class="dropdown-item" href="#">Andaman and Nicobar Islands</a>
                                                    <a class="dropdown-item" href="#">Chandigarh</a>
                                                    <a class="dropdown-item" href="#">Dadra and Nagar Haveli</a>
                                                    <a class="dropdown-item" href="#">Daman and Diu</a>
                                                    <a class="dropdown-item" href="#">Delhi</a>
                                                    <a class="dropdown-item" href="#">Lakshadweep</a>
                                                    <a class="dropdown-item" href="#">Puducherry</a>
                                                </div>
                                            </div>
                                            <div class="dropdown dsp_none o_csr_state">
                                                <!--  <a class="btn btn-secondary dropdown-toggle btn-block" href="#" role="button" id="o_cspr_susa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="btnUsastate()">Select</a> -->
                                                <input type="text" class="form-control" id="o_cspr_susa" onkeyup="usafilterFunction()" placeholder="Select from the list">
                                                <div class="dropdown-menu menu_text_select ht_200" aria-labelledby="o_cspr_susa" id="usastate_dropdown">
                                                    <!--       <div class=" right-addon">
                                            <input type="text" placeholder="Search..." class="form-control" id="usa_userinput" onkeyup="usafilterFunction()">
                                            <i class="fa fa-search"></i>
                                        </div> -->
                                                    <a class="dropdown-item" href="#">Alabama </a>
                                                    <a class="dropdown-item" href="#">Alaska </a>
                                                    <a class="dropdown-item" href="#">Arizona </a>
                                                    <a class="dropdown-item" href="#">Arkansas </a>
                                                    <a class="dropdown-item" href="#">California </a>
                                                    <a class="dropdown-item" href="#">Colorado </a>
                                                    <a class="dropdown-item" href="#">Connecticut </a>
                                                    <a class="dropdown-item" href="#">Delaware </a>
                                                    <a class="dropdown-item" href="#">Florida </a>
                                                    <a class="dropdown-item" href="#">Georgia </a>
                                                    <a class="dropdown-item" href="#">Hawaii </a>
                                                    <a class="dropdown-item" href="#">Idaho </a>
                                                    <a class="dropdown-item" href="#">Illinois Indiana </a>
                                                    <a class="dropdown-item" href="#">Iowa </a>
                                                    <a class="dropdown-item" href="#">Kansas </a>
                                                    <a class="dropdown-item" href="#">Kentucky </a>
                                                    <a class="dropdown-item" href="#">Louisiana </a>
                                                    <a class="dropdown-item" href="#">Maine </a>
                                                    <a class="dropdown-item" href="#">Maryland </a>
                                                    <a class="dropdown-item" href="#">Massachusetts </a>
                                                    <a class="dropdown-item" href="#">Michigan </a>
                                                    <a class="dropdown-item" href="#">Minnesota </a>
                                                    <a class="dropdown-item" href="#">Mississippi </a>
                                                    <a class="dropdown-item" href="#">Missouri </a>
                                                    <a class="dropdown-item" href="#">Montana Nebraska </a>
                                                    <a class="dropdown-item" href="#">Nevada </a>
                                                    <a class="dropdown-item" href="#">New Hampshire </a>
                                                    <a class="dropdown-item" href="#">New Jersey </a>
                                                    <a class="dropdown-item" href="#">New Mexico </a>
                                                    <a class="dropdown-item" href="#">New York </a>
                                                    <a class="dropdown-item" href="#">North Carolina </a>
                                                    <a class="dropdown-item" href="#">North Dakota </a>
                                                    <a class="dropdown-item" href="#">Ohio </a>
                                                    <a class="dropdown-item" href="#">Oklahoma</a>
                                                    <a class="dropdown-item" href="#">Oregon </a>
                                                    <a class="dropdown-item" href="#">Pennsylvania Rhode Island </a>
                                                    <a class="dropdown-item" href="#">South Carolina </a>
                                                    <a class="dropdown-item" href="#">South Dakota </a>
                                                    <a class="dropdown-item" href="#">Tennessee </a>
                                                    <a class="dropdown-item" href="#">Texas </a>
                                                    <a class="dropdown-item" href="#">Utah </a>
                                                    <a class="dropdown-item" href="#">Vermont </a>
                                                    <a class="dropdown-item" href="#">Virginia </a>
                                                    <a class="dropdown-item" href="#">Washington </a>
                                                    <a class="dropdown-item" href="#">West Virginia </a>
                                                    <a class="dropdown-item" href="#">Wisconsin </a>
                                                    <a class="dropdown-item" href="#">Wyoming</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>City</label>
                                            <div class="dropdown">
                                                <!--    <a class="btn btn-secondary dropdown-toggle btn-block" href="#" role="button" id="o_city" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="btnCity()">Select</a> -->
                                                <!--                                       <div class=" right-addon">
--> <input type="text" class="form-control" id="o_city" onkeyup="cityfilterFunction()" placeholder="Select from the list">
                                                <!--      <i class="fa fa-caret-down" style="float: right;
                                           top: 10px;
                                           position: absolute;
                                           right: 10px;"></i>
                                       </div>
                                   -->
                                                <div class="dropdown-menu ht_200" aria-labelledby="" id="city_dropdown">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Employee Strength</label>
                                            <div class="dropdown">
                                                <select class="form-control" id="empstrength">
                                                    <option>Select</option>
                                                    <option value="<50">&lt; 50</option>
                                                    <option value="50 - 100">50 - 100</option>
                                                    <option value="100 - 250">100 - 250</option>
                                                    <option value="250 - 500">250 - 500</option>
                                                    <option value="500 - 1000">500 - 1000</option>
                                                    <option value="1000 - 2500">1000 - 2500</option>
                                                    <option value="2500 - 5000">2500 - 5000</option>
                                                    <option value="5000 - 10000">5000 - 10000</option>
                                                    <option value=">10000">&gt; 10000</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Annual Revenue (INR Crs)</label>
                                            <input type="text" class="form-control" id="o_arevenue" placeholder="Annual Revenue (INR Crs)">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Industry Vertical</label>
                                            <div class="dropdown">
                                                <select class="form-control" id="o_indvertical">
                                                    <option>Select</option>
                                                    <option value="Automobile">Automobile</option>
                                                    <option value="BFSI">BFSI</option>
                                                    <option value="E-Commerce">E-Commerce</option>
                                                    <option value="Education">Education</option>
                                                    <option value="Engineering">Engineering</option>
                                                    <option value="Energy">Energy</option>
                                                    <option value="Government">Government</option>
                                                    <option value="Healthcare &amp; Pharma">Healthcare &amp; Pharma</option>
                                                    <option value="Hospitality">Hospitality</option>
                                                    <option value="Insurance">Insurance</option>
                                                    <option value="IT/ITES">IT/ITES</option>
                                                    <option value="Legal">Legal</option>
                                                    <option value="Logistics">Logistics</option>
                                                    <option value="Manufacturing">Manufacturing</option>
                                                    <option value="Media &amp; Entertainment">Media &amp; Entertainment
                                                    </option>
                                                    <option value="Retail">Retail</option>
                                                    <option value="Technology">Technology</option>
                                                    <option value="Telecom">Telecom</option>
                                                    <option value="Trading">Trading</option>
                                                    <option value="Non profit">Non profit</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Line of Business</label>
                                            <div class="dropdown">
                                                <select class="form-control" id="lob">
                                                    <option>Select</option>
                                                    <option value="SI">SI</option>
                                                    <option value="ISV">ISV</option>
                                                    <option value="Technology OEM">Technology OEM</option>
                                                    <option value="Reseller">Reseller</option>
                                                    <option value="Consultancy">Consultancy</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="dvlob_other_input" class="col-md-12 m-b-20" style="display: none">
                                        <input type="text" id="lob_other_input" class="form-control" placeholder="Please mention here" />
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Relationship Owner @Pi&reg;
                                            </label>
                                            <div class="dropdown">

                                                <div class=" right-addon">
                                                    <input type="text" class="form-control" id="o_relowner" onkeyup="rofilterFunction()" placeholder="Select from the list">
                                                    <i class="fa fa-caret-down" style="float: right;
                                     top: 10px;
                                     position: absolute;
                                     right: 10px;"></i>
                                                </div>
                                                <div class="dropdown-menu " aria-labelledby="empstrength" id="relowner_dropdown">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Locations of Business</label>
                                            <div class="dropdown dropup">
                                                <input type="text" class="form-control" id="loc_o_b" onkeyup="locofb_filterFunction()" placeholder="Select from the list">
                                                <ul class="dropdown-menu dropup-content multi-level ht_300 ul_lop" id="locofbusinees_dropdown">
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item ds-selected" href="#">India</a>
                                                        <ul class="dropdown-menu" id="india_states">
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Andhra Pradesh</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Arunachal Pradesh</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Assam</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Bihar</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Chhattisgarh</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Goa</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Gujarat</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Haryana</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Himachal Pradesh</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Jammu and Kashmir</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Jharkhand</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Karnataka</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Kerala</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Madhya Pradesh</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Maharashtra</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Manipur</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Meghalaya</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Mizoram</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Nagaland</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Odisha</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Punjab</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Rajasthan</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Sikkim</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Tamil Nadu</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Telangana</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Tripura</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Uttarakhand</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Uttar Pradesh</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">West
                                                                    Bengal</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Andaman and Nicobar Islands</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Chandigarh</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Dadra and Nagar Haveli</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Daman and Diu</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Delhi</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Lakshadweep</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Puducherry</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Singapore</a>
                                                    </li>
                                                    <li class="dropdown-submenu ">
                                                        <a class="dropdown-item ds-selected" href="#">USA</a>
                                                        <ul class="dropdown-menu" id="us_states">
                                                            <li class="dropdown-item dropdown-submenu-item"> <a href="#">Alabama</a>
                                                            </li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Alaska
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Arizona
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Arkansas
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">California
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Colorado
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Connecticut
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Delaware
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Florida
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Georgia
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Hawaii
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Idaho
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Illinois Indiana </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Iowa
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Kansas
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Kentucky
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Louisiana
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Maine
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Maryland
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Massachusetts
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Michigan
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Minnesota
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Mississippi
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Missouri
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Montana Nebraska </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Nevada
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">New
                                                                    Hampshire </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">New
                                                                    Jersey </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">New
                                                                    Mexico </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">New
                                                                    York </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">North Carolina </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">North Dakota </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Ohio
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Oklahoma</a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Oregon
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Pennsylvania Rhode Island </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">South Carolina </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">South Dakota </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Tennessee
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Texas
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Utah
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Vermont
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Virginia
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Washington
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">West
                                                                    Virginia </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Wisconsin
                                                                </a></li>
                                                            <li class="dropdown-item dropdown-submenu-item"><a href="#">Wyoming</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Afghanistan</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Åland
                                                            Islands</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Albania</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Algeria</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">American
                                                            Samoa</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Andorra</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Angola</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Anguilla</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Antarctica</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Antigua and
                                                            Barbuda</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Argentina</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Armenia</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Aruba</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Australia</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Austria</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Azerbaijan</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Bahamas</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Bahrain</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Bangladesh</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Barbados</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Belarus</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Belgium</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Belize</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Benin</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Bermuda</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Bhutan</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Bolivia</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Bonaire</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Bosnia and
                                                            Herzegovina</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Botswana</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Bouvet
                                                            Island</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Brazil</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">British Indian
                                                            Ocean Territory</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Brunei
                                                            Darussalam</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Bulgaria</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Burkina
                                                            Faso</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Burundi</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Cambodia</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Cameroon</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Canada</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Cape Verde</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Cayman
                                                            Islands</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Central African
                                                            Republic</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Chad</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Chile</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">China</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Christmas
                                                            Island</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Cocos (Keeling)
                                                            Islands</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Colombia</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Comoros</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Congo</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Congo</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Cook
                                                            Islands</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Costa Rica</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Côte
                                                            d'Ivoire</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Croatia</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Cuba</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Curaçao</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Cyprus</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Czech
                                                            Republic</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Denmark</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Djibouti</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Dominica</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Dominican
                                                            Republic</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Ecuador</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Egypt</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">El Salvador</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Equatorial
                                                            Guinea</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Eritrea</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Estonia</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Ethiopia</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Falkland
                                                            Islands</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Faroe
                                                            Islands</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Fiji</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Finland</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">France</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">French
                                                            Guiana</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">French
                                                            Polynesia</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">French Southern
                                                            Territories</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Gabon</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Gambia</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Georgia</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Germany</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Ghana</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Gibraltar</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Greece</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Greenland</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Grenada</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Guadeloupe</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Guam</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Guatemala</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Guernsey</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Guinea</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Guinea-Bissau</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Guyana</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Haiti</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Heard Island
                                                            and McDonald Islands</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Vatican
                                                            City</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Honduras</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Hong Kong</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Hungary</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Iceland</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Indonesia</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Iran</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Iraq</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Ireland</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Isle of Man</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Israel</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Italy</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Jamaica</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Japan</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Jersey</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Jordan</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Kazakhstan</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Kenya</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Kiribati</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Korea</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Korea</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Kuwait</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Kyrgyzstan</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Lao</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Latvia</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Lebanon</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Lesotho</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Liberia</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Libya</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Liechtenstein</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Lithuania</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Luxembourg</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Macao</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Macedonia</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Madagascar</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Malawi</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Malaysia</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Maldives</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Mali</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Malta</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Marshall
                                                            Islands</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Martinique</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Mauritania</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Mauritius</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Mayotte</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Mexico</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Micronesia</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Moldova</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Monaco</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Mongolia</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Montenegro</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Montserrat</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Morocco</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Mozambique</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Myanmar</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Namibia</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Nauru</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Nepal</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Netherlands</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">New
                                                            Caledonia</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">New Zealand</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Nicaragua</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Niger</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Nigeria</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Niue</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Norfolk
                                                            Island</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Northern
                                                            Mariana Islands</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Norway</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Oman</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Pakistan</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Palau</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Palestinian
                                                            Territory</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Panama</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Papua New
                                                            Guinea</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Paraguay</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Peru</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Philippines</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Pitcairn</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Poland</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Portugal</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Puerto Rico</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Qatar</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Réunion</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Romania</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Russian
                                                            Federation</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Rwanda</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Saint
                                                            Barthélemy</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Saint
                                                            Helena</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Saint Kitts and
                                                            Nevis</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Saint Lucia</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Saint
                                                            Martin</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Saint Pierre
                                                            and Miquelon</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Saint Vincent
                                                            and the Grenadines</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Samoa</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">San Marino</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Sao Tome and
                                                            Principe</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Saudi
                                                            Arabia</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Senegal</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Serbia</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Seychelles</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Sierra
                                                            Leone</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Sint
                                                            Maarten</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Slovakia</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Slovenia</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Solomon
                                                            Islands</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Somalia</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">South
                                                            Africa</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">South Georgia
                                                            and the South Sandwich Islands</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">South Sudan</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Spain</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Sri Lanka</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Sudan</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Suriname</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Svalbard and
                                                            Jan Mayen</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Swaziland</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Sweden</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Switzerland</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Syrian Arab
                                                            Republic</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Taiwan</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Tajikistan</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Tanzania</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Thailand</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Timor-Leste</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Togo</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Tokelau</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Tonga</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Trinidad and
                                                            Tobago</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Tunisia</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Turkey</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Turkmenistan</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Turks and
                                                            Caicos Islands</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Tuvalu</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Uganda</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Ukraine</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">United Arab
                                                            Emirates</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">United
                                                            Kingdom</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">United States
                                                            Minor Outlying Islands</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Uruguay</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Uzbekistan</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Vanuatu</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Venezuela</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Viet Nam</a>
                                                    </li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Virgin Islands,
                                                            British</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Virgin Islands,
                                                            U.S.</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Wallis and
                                                            Futuna</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Western
                                                            Sahara</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Yemen</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Zambia</a></li>
                                                    <li class="dropdown-item dropdown-menu-item"><a href="#">Zimbabwe</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group selectValue_style">
                                            <div id="selectedValues"></div>
                                            <div id="selectedValuesforUSA"></div>
                                            <div id="selectedValuesforIndia"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label><b>Preferred Client Base <small class="text-danger"> (Please select all that
                                                    apply)</small></b></label>

                                        <div class="form-group flt_rt slctall_stls">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="tc_selall" value="Select All" id="tc_selall">
                                                <label class="form-check-label" for="tc_selall">
                                                    Select All
                                                </label>
                                            </div>
                                        </div>
                                        <table class="table table-striped tbl_fg_fx">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <label class="form-check-label" for="tc_edu">
                                                                    <input class="form-check-input" type="checkbox" name="tar_cli_base" value="Education" id="tc_edu">
                                                                    Education
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tar_cli_base" value="Enterprise" id="tc_ent">
                                                                <label class="form-check-label" for="tc_ent">
                                                                    Enterprise
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tar_cli_base" value="Government-Local" id="tc_gl">
                                                                <label class="form-check-label" for="tc_gl">
                                                                    Government-Local
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tar_cli_base" value="Government-National" id="tc_gn">
                                                                <label class="form-check-label" for="tc_gn">
                                                                    Government-National
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tar_cli_base" value="Mid-size Business" id="tc_msb">
                                                                <label class="form-check-label" for="tc_msb">
                                                                    Mid-size Business
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tar_cli_base" value="Non-Profit" id="tc_np">
                                                                <label class="form-check-label" for="tc_np">
                                                                    Non-Profit
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tar_cli_base" value="Startup" id="tc_stp">
                                                                <label class="form-check-label" for="tc_stp">
                                                                    Startup
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tar_cli_basee" value="Others" id="tc_otherr">
                                                                <label class="form-check-label" for="tc_otherr">
                                                                    Others
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td> </td>
                                                </tr>


                                            </tbody>
                                        </table>


                                    </div>


                                    <div class="col-md-12 m-b-20">
                                        <input type="text" class="form-control dsp_none" placeholder="Please mention here" id="tc_other_input">
                                    </div>

                                </div>

                                <div class="text-right m-r-20 mob_m_t_10">
                                    <a href="#" class="btn btn-primary get_profile_tab"><i class="fas fa-arrow-left"></i>
                                        Back</a>
                                    <a href="#" class="btn btn-success get_technical_tab tab_next">Continue
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>

                            </div>

                        </div>
                        <div class="tab-pane fade" id="Technical_tab" role="tabpanel" aria-labelledby="Technical-Information">

                            <div class="container-fluid">
                                <div class="row" id="Technical_tab_div">
                                    <div class="col-md-12">
                                        <label><b>Use Case Expertise</b> <small class="text-danger"> (Please select all
                                                that apply)</small></label>
                                        <div class="form-group flt_rt slctall_stls">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="" value="Select All" id="uce_selall">
                                                <label class="form-check-label" for="uce_selall">
                                                    Select All
                                                </label>
                                            </div>
                                        </div>
                                        <table class="table table-striped tbl_fg_fx m-b-10">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="u_case_expe" value="Cloud Services" id="uce_cs">
                                                                <label class="form-check-label" for="uce_cs">
                                                                    Cloud Services
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="u_case_expe" value="Data Center Services" id="uce_dcs">
                                                                <label class="form-check-label" for="uce_dcs">
                                                                    Data Center Services
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="u_case_expe" value="Disaster Recovery" id="uce_dr">
                                                                <label class="form-check-label" for="uce_dr">
                                                                    Disaster Recovery
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="u_case_expe" value="Business Applications - SAP" id="uce_bsap">
                                                                <label class="form-check-label" for="uce_bsap">
                                                                    Business Applications - SAP
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="u_case_expe" value="Business Applications - Microsoft" id="uce_bmic">
                                                                <label class="form-check-label" for="uce_bmic">
                                                                    Business Applications - Microsoft
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="u_case_expe" value="Business Applications - Oracle" id="uce_bocl">
                                                                <label class="form-check-label" for="uce_bocl">
                                                                    Business Applications - Oracle
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="u_case_expe" value="Business Applications - Other" id="uce_botr">
                                                                <label class="form-check-label" for="uce_botr">
                                                                    Business Applications - Other
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="u_case_expe" value="Big Data, Analytics, Batch Processing &amp; Business Intelligence (BI)" id="uce_bi">
                                                                <label class="form-check-label" for="uce_bi">
                                                                    Big Data, Analytics, Batch Processing &amp; Business
                                                                    Intelligence (BI)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="u_case_expe" value="Archieving" id="uce_arch">
                                                                <label class="form-check-label" for="uce_arch">
                                                                    Archiving
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="u_case_expe" value="High Availability" id="uce_havai">
                                                                <label class="form-check-label" for="uce_havai">
                                                                    High Availability
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="u_case_expe" value="Content Delivery" id="uce_contdel">
                                                                <label class="form-check-label" for="uce_contdel">
                                                                    Content Delivery
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="u_case_expe" value=" Database &amp; Data Warehouse" id="uce_dbdw">
                                                                <label class="form-check-label" for="uce_dbdw">
                                                                    Database &amp; Data Warehouse
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="u_case_expe" value=" Dev &amp; Test" id="uce_devt">
                                                                <label class="form-check-label" for="uce_devt">
                                                                    Dev &amp; Test
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="u_case_expe" value="Digital Marketing" id="uce_digimark">
                                                                <label class="form-check-label" for="uce_digimark">
                                                                    Digital Marketing
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="u_case_expe" value="High Performance Computing (HPC)" id="uce_hpc">
                                                                <label class="form-check-label" for="uce_hpc">
                                                                    High Performance Computing (HPC)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="u_case_expe" value="Internet of Things (IoT)" id="uce_IOT">
                                                                <label class="form-check-label" for="uce_IOT">
                                                                    Internet of Things (IoT)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="u_case_expe" value="Mobile" maxlength="10" id="uce_mobile">
                                                                <label class="form-check-label" for="uce_mobile">
                                                                    Mobile
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="u_case_expe" value="Security &amp; Compliance" id="uce_seccomp">
                                                                <label class="form-check-label" for="uce_seccomp">
                                                                    Security &amp; Compliance
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="u_case_expe" value="Storage (Backup, Recovery &amp; Asset Storage)" id="uce_storage">
                                                                <label class="form-check-label" for="uce_storage">
                                                                    Storage (Backup, Recovery &amp; Asset Storage)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="u_case_expe" value="Value (Cost Saving / TCO)" id="uce_value">
                                                                <label class="form-check-label" for="uce_value">
                                                                    Value (Cost Saving / TCO)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="u_case_expe" value="Web &amp; Web Apps" id="uce_webapps">
                                                                <label class="form-check-label" for="uce_webapps">
                                                                    Web &amp; Web Apps
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="u_case_expee" value="Others" id="uce_otherr">
                                                                <label class="form-check-label" for="uce_otherr">
                                                                    Others
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="col-md-12 m-b-20">
                                        <input type="text" class="form-control dsp_none" placeholder="Please mention here" id="uce_other_input">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label><b>Technology Expertise</b> <small class="text-danger">(Please select all
                                                that apply)</small></label>
                                        <div class="form-group flt_rt slctall_stls">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="" value="Select All" id="te_selall">
                                                <label class="form-check-label" for="te_selall">
                                                    Select All
                                                </label>
                                            </div>
                                        </div>
                                        <table class="table table-striped tbl_fg_fx m-b-10">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tech_expe" value="Apache" id="te_apache">
                                                                <label class="form-check-label" for="te_apache">
                                                                    Apache
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tech_expe" value=" Flash Media Server" id="te_fms">
                                                                <label class="form-check-label" for="te_fms">
                                                                    Flash Media Server
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tech_expe" value="Hadoop" id="te_hadoop">
                                                                <label class="form-check-label" for="te_hadoop">
                                                                    Hadoop
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tech_expe" value="IBM" id="te_ibm">
                                                                <label class="form-check-label" for="te_ibm">
                                                                    IBM
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tech_expe" value="JBOSS" id="te_jboss">
                                                                <label class="form-check-label" for="te_jboss">
                                                                    JBOSS
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tech_expe" value="Linux" id="te_linux">
                                                                <label class="form-check-label" for="te_linux">
                                                                    Linux
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tech_expe" value=".NET" id="te_mnet">
                                                                <label class="form-check-label" for="te_mnet">
                                                                    .NET
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tech_expe" value="MS Exchange" id="te_mexc">
                                                                <label class="form-check-label" for="te_mexc">
                                                                    MS Exchange
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tech_expe" value=" Microsoft Share Point" id="te_msp">
                                                                <label class="form-check-label" for="te_msp">
                                                                    Microsoft Share Point
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tech_expe" value="MS SQL" id="te_msql">
                                                                <label class="form-check-label" for="te_msql">
                                                                    MS SQL
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tech_expe" value="MySQL" id="te_mysql">
                                                                <label class="form-check-label" for="te_mysql">
                                                                    MySQL
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tech_expe" value="SAP" id="te_sap">
                                                                <label class="form-check-label" for="te_sap">
                                                                    SAP
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tech_expe" value="SAP" id="te_saphana">
                                                                <label class="form-check-label" for="te_sysint">
                                                                    SAP HANA<sup>®</sup>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tech_expe" value="Oracle Apps" id="te_oapps">
                                                                <label class="form-check-label" for="te_oapps">
                                                                    Oracle Apps
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tech_expe" value="Oracle DataBase" id="te_odb">
                                                                <label class="form-check-label" for="te_odb">
                                                                    Oracle DataBase
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tech_expe" value="Oracle Middleware" id="te_omidware">
                                                                <label class="form-check-label" for="te_omidware">
                                                                    Oracle Middleware
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tech_expe" value="Ruby on Rails" id="te_ruby">
                                                                <label class="form-check-label" for="te_ruby">
                                                                    Ruby on Rails
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tech_expe" value="System Management" id="te_sysmgnt">
                                                                <label class="form-check-label" for="te_sysmgnt">
                                                                    System Management
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tech_expe" value="System Integration" id="te_sysint">
                                                                <label class="form-check-label" for="te_sysint">
                                                                    System Integration
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tech_expee" value="Others" id="te_othh">
                                                                <label class="form-check-label" for="te_othh">
                                                                    Others
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-12 m-b-20">
                                        <input type="text" class="form-control dsp_none" placeholder="Please mention here" id="te_oth_input">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <label><b>Professional Services Offered</b> <small class="text-danger">(Please
                                                select all that apply)</small></label>
                                        <div class="form-group flt_rt slctall_stls">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pso_selall" value="Select All" id="pso_selall">
                                                <label class="form-check-label" for="pso_selall">
                                                    Select All
                                                </label>
                                            </div>
                                        </div>
                                        <table class="table table-striped tbl_fg_fx m-b-10">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="prof_ser_off" value="Assessments" id="pso_asses">
                                                                <label class="form-check-label" for="pso_asses">
                                                                    Assessments
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="prof_ser_off" value="ERP Consulting" id="pso_erp">
                                                                <label class="form-check-label" for="pso_erp">
                                                                    ERP Consulting
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="prof_ser_off" value="Cloud Migration Services" id="pso_cms">
                                                                <label class="form-check-label" for="pso_cms">
                                                                    Cloud Migration Services
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="prof_ser_off" value="Custom Application Development" id="pso_cad">
                                                                <label class="form-check-label" for="pso_cad">
                                                                    Custom Application Development
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="prof_ser_off" value="Digital Marketing" id="pso_dism">
                                                                <label class="form-check-label" for="pso_dism">
                                                                    Digital Marketing
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="prof_ser_off" value="Managed Service Provider" id="pso_msp">
                                                                <label class="form-check-label" for="pso_msp">
                                                                    Managed Service Provider
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="prof_ser_off" value="Strategic / IT Consulting" id="pso_sitc">
                                                                <label class="form-check-label" for="pso_sitc">
                                                                    Strategic / IT Consulting
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="prof_ser_off" value="Staff Augmentation" id="pso_stfaug">
                                                                <label class="form-check-label" for="pso_stfaug">
                                                                    Staff Augmentation
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="prof_ser_offf" value="Others" id="pso_othee">
                                                                <label class="form-check-label" for="pso_othee">
                                                                    Others
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-12 m-b-20">
                                        <input type="text" class="form-control dsp_none" placeholder="Please mention here" id="pso_othe_input">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <label><b>Interested Services/Products @Pi<sup>®</sup></b> <small class="text-danger">(Please
                                                select all that apply)</small></label>
                                        <div class="form-group flt_rt slctall_stls">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="isp_selall" value="Select All" id="isp_selall">
                                                <label class="form-check-label" for="isp_selall">
                                                    Select All
                                                </label>
                                            </div>
                                        </div>
                                        <table class="table table-striped tbl_fg_fx m-b-10">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="int_ser_prov" value="Co-Location" id="isp_colo">
                                                                <label class="form-check-label" for="isp_dcs">
                                                                    Colocation
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="int_ser_prov" value="Cloud Services" id="isp_clos">
                                                                <label class="form-check-label" for="isp_clos">
                                                                    Cloud Services
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="int_ser_prov" value="Managed Services" id="isp_mans">
                                                                <label class="form-check-label" for="isp_mans">
                                                                    Managed Services
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="int_ser_prov" value=" Data Center Build" id="isp_dcb">
                                                                <label class="form-check-label" for="isp_dcb">
                                                                    Data Center Build
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="int_ser_prov" value=" Data Center Consulting" id="isp_dcc">
                                                                <label class="form-check-label" for="isp_dcc">
                                                                    Data Center Consulting
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="int_ser_prov" value="Assessments" id="isp_asses">
                                                                <label class="form-check-label" for="isp_asses">
                                                                    Assessments
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="int_ser_provv" value="Others" id="isp_othh">
                                                                <label class="form-check-label" for="isp_othh">
                                                                    Others
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-12 m-b-20 ">
                                        <input type="text" class="form-control dsp_none" placeholder="Please mention here" id="isp_oth_input">
                                    </div>
                                </div>
                            </div>
                            <div class="text-right m-r-20 mob_m_t_10">
                                <a href="#" class="btn btn-primary get_organisation_tab"><i class="fas fa-arrow-left"></i>
                                    Back</a>
                                <a href="#" class="btn btn-success get_business_tab tab_next">Continue
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="Business_tab" role="tabpanel" aria-labelledby="organisation-details">
                            <!-- <p > Please Wait</p>-->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Briefly share your business case, for this partnership request : </label>
                                            <textarea class="form-control resize_none" id="b_brieftxt" rows="6" placeholder="Type here..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Preferred Pay Out Model</label>
                                            <div class="row">
                                                <label class="checkbox-inline col-md-4">
                                                    <input type="radio" value="Recurring Commission" name="partnership_model" class="partnership_model">Recurring Commission <b class="fa fa-info-circle" class="fa fa-info-circle" id="com" data-toggle="tooltip" data-placement="right" title="The registered business partner, in this model, is eligible for a recurring commission, payable on the revenue realized for each order from a qualified customer, through the partner. 
                                            The payout is basis the commission structure defined in Pi’s Registered Business Partner Program Agreement."></b>
                                                </label>
                                                <label class="checkbox-inline col-md-4">
                                                    <input type="radio" value="One-Time Referral Bonus" name="partnership_model" class="partnership_model"> One-Time Referral Bonus <b class="fa fa-info-circle" class="fa fa-info-circle" id="tp" data-toggle="tooltip" data-placement="right" title="The registered business partner, in this case shall get a transfer price from Pi. The partner is free to add its own margin as appropriate, over and above the transfer price and position the services to its customers, accordingly.
                                          The transfer price shall be discussed and agreed on case to case basis between Pi and the Partner."></b>
                                                </label>
                                                <label class="checkbox-inline col-md-3">
                                                    <input type="radio" value="Transfer Price" name="partnership_model" class="partnership_model"> Transfer Price <b class="fa fa-info-circle" class="fa fa-info-circle" id="tp" data-toggle="tooltip" data-placement="right" title="The registered business partner, in this case shall get a transfer price from Pi. The partner is free to add its own margin as appropriate, over and above the transfer price and position the services to its customers, accordingly.
                                          The transfer price shall be discussed and agreed on case to case basis between Pi and the Partner."></b>
                                                </label>
                                                <!-- <label class="checkbox-inline col-md-3">
                                                <input type="radio" value="Referal Bonus" name="partnership_model"
                                                    class="partnership_model"> Referal Bonus <b
                                                    class="fa fa-info-circle" class="fa fa-info-circle" id="rb"
                                                    data-toggle="tooltip" data-placement="right"
                                                    title="The registered business partner, under this model, would opt to refer a qualified customer to Pi and works with Pi’s respective teams to secure business in favor of Pi. In this scenario, 
                                          the said partner is eligible for a one-time referral bonus, as defined in Pi’s Registered Business Partner Program Agreement."></b>
                                            </label> -->
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="text-right m-r-20 mob_m_t_10">
                                    <a href="#" class="btn btn-primary get_technical_tab"><i class="fas fa-arrow-left"></i>
                                        Back</a>
                                    <a href="#" class="btn btn-success" id='send_form'>Submit
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
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


    <script src="assets/js/jquery.min.js?v4"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js?v4"></script>
    <script src="assets/inteltelinputs/build/js/intlTelInput-jquery.min.js?v5"></script>
    <script src="assets/js/scripts.js?v2525"></script>
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