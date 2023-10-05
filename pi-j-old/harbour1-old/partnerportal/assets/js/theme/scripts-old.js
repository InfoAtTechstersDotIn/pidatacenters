//      *************  tabs functionality
/***********************/
/* Global vars */
/**********************/
const baseUrl = "https://harbour1.in/partnerportal/";
const baseAPIUrl =
  "https://harbour1.in/partnerportal_backend/public/api";

$(".get_profile_tab").click(function (e) {
  e.preventDefault();
  $("#personal_header").tab("show");
  $(".nav-item").removeClass("current");
  $("#personal_header").parent().addClass("current");
});

$(".get_home_tab").click(function () {
  $("#home_header").tab("show");
  $(".nav-item").removeClass("current");
  $("#home_header").parent().addClass("current");
});

var emailresult;
$(".get_organisation_tab").click(function (e) {
  e.preventDefault();
  if ($(this).hasClass("tab_next") == true) {
    if (validatepersoninfo() == true) {
      if ($("#p_bemail").val()) {
        validatepersoninfo();
        var busiEmail = $("#p_bemail").val();
        input = {
          p_bemail: busiEmail,
        };
        console.log(JSON.stringify(input));
        $.ajax({
          url: baseAPIUrl + "/registration/checkemail",
          type: "POST",
          data: input,
          crossDomain: true,
          dataType: "json",
          ContentType: "application/json; charset=utf-8",
          success: function (data) {
            //console.log("mallikarjuna aaaaaaaaaaa sucess");
            console.log(data);
            $("#personal_header").tab("show");
            emailresult = data.status;
            if (data.status == "error" && data.status_code == 401) {
              $("#personal_header").tab("show");
              snackbar("Business Email-Id already registred");
            }
            if (data.status == "success") {
              $("#organisation_header").tab("show");
              $(".nav-item").removeClass("current");
              $("#organisation_header").parent().addClass("current");
              // $('#Technical_tab').animate({ scrollTop: 0 }, "slow");
            }
          },
          error: function (data) {
            console.log(data);
            //console.log("mallikarjuna aaaaaaaaaaa error" + data);
            // alert('error');
            snackbar(data.message);
            return false;
          },
        });
      }
    }
  } else {
    $("#organisation_header").tab("show");
    $(".nav-item").removeClass("current");
    $("#organisation_header").parent().addClass("current");
  }
});

$(".get_technical_tab").click(function (e) {
  e.preventDefault();
  if ($(this).hasClass("tab_next") == true) {
    validateorganisationinfo();
    document.location.href = "#Technical_tab";
  } else {
    $("#Technical_header").tab("show");
    $(".nav-item").removeClass("current");
    $("#Technical_header").parent().addClass("current");
  }
});

$(".get_business_tab").click(function (e) {
  e.preventDefault();
  if ($(this).hasClass("tab_next") == true) {
    validatetechnicalinfo();
  } else {
    $("#Business_header").tab("show");
    $(".nav-item").removeClass("current");
    $("#Business_header").parent().addClass("current");
  }
});

//filter for india state
$(document).on("click focus keyup", "#o_cspr_sind", function () {
  $("#indiastate_dropdown").css("display", "block");
});

$("#indiastate_dropdown .dropdown-item").click(function () {
  $("#indiastate_dropdown").css("display", "none");
});

$("#indiastate_dropdown a").click(function () {
  var indiastate = $(this).text();
  document.getElementById("o_cspr_sind").value = indiastate;
  o_cspr = document.getElementById("o_cspr_sind").value;
});

// //filter for usa state

$(document).on("click", "#o_cspr_susa", function () {
  $("#usastate_dropdown").css("display", "block");
});

$("#usastate_dropdown .dropdown-item").click(function () {
  $("#usastate_dropdown").css("display", "none");
});

$("#usastate_dropdown a").click(function () {
  var textselc_usa = $(this).text();
  document.getElementById("o_cspr_susa").value = textselc_usa;
  o_cspr = document.getElementById("o_cspr_susa").value;
});

//filter for lob
$(document).on("click focus", "#countrydd", function () {
  $("#countries_dropdown").css("display", "block");
});

$("#countries_dropdown .dropdown-item").click(function () {
  $("#countries_dropdown").css("display", "none");
});

// $('#countries_dropdown a').click(function () {
// var countrydd_text= $(this).text();
// document.getElementById("countrydd").value = countrydd_text;
// countrydd=document.getElementById("countrydd").value;
// });

var countryText = "";
//      **********  common dropdown fucntion to slect the selected dropdown
$("#countries_dropdown a").click(function () {
  drpDwnTxt = $(this).text();
  document.getElementById("countrydd").value = drpDwnTxt;
  countrydd = document.getElementById("countrydd").value;
  console.log(countrydd);
  $(this).parent().prev().text(drpDwnTxt);
  $(this).parent().prev().focus();
  if ($(this).parent().prev().attr("id") == "countrydd") {
    if ($("#countrydd").text() == "India") {
      console.log("india");
      $(".o_csr_state").hide();
      $(".o_csr_state").removeClass("current");
      $("#o_cspr_sind").parent().show();
      $("#o_city").prop("disabled", false).removeClass("disabled");
      $("#o_cspr_sind").parent().addClass("current");
    } else if ($("#countrydd").text() == "USA") {
      console.log("usa");
      document.getElementById("o_city").value = "";
      document.getElementById("o_relowner").value = "";
      $(".o_csr_state").hide();
      $("#o_city").prop("disabled", true).addClass("disabled");
      $("#o_relowner").prop("disabled", true).addClass("disabled");
      $(".o_csr_state").removeClass("current");
      $("#o_cspr_susa").parent().show();
      $("#o_cspr_susa").parent().addClass("current");
    } else if ($("#countrydd").text() == "Singapore") {
      console.log("Singapore");
      $(".o_csr_state").hide();
      $(".o_csr_state").removeClass("current");
      $("#o_city").val();
      $("#o_relowner").val();
      $("#o_cspr").show();
      $("#o_city").prop("disabled", true).addClass("disabled");
      $("#o_relowner").prop("disabled", true).addClass("disabled");
      $("#o_cspr").addClass("current");
      document.getElementById("o_cspr").value = "Singapore";
    } else {
      console.log("others");
      $("#o_city").val();
      $("#o_relowner").val();
      $(".o_csr_state").hide();
      $(".o_csr_state").removeClass("current");
      $("#o_cspr").show();
      $("#o_city").prop("disabled", true).addClass("disabled");
      $("#o_relowner").prop("disabled", true).addClass("disabled");
      $("#o_cspr").attr("placeholder", "Enter State").blur();
      $("#o_cspr").addClass("current");
      document.getElementById("o_cspr").value = "";
    }
  }
});

//     *************   intel tele input for phone number dropdonw
$("#phone").intlTelInput({
  // whether or not to allow the dropdown
  allowDropdown: true,

  // if there is just a dial code in the input: remove it on blur, and re-add it on focus
  autoHideDialCode: true,

  // add a placeholder in the input with an example number for the selected country
  autoPlaceholder: "polite",

  // modify the auto placeholder
  customPlaceholder: null,

  // append menu to specified element
  dropdownContainer: null,

  // don't display these countries
  excludeCountries: [],

  // format the input value during initialisation and on setNumber
  formatOnDisplay: true,

  // geoIp lookup function
  geoIpLookup: null,

  // inject a hidden input with this name, and on submit, populate it with the result of getNumber
  hiddenInput: "",

  // initial country
  initialCountry: "",

  // localized country names e.g. { 'de': 'Deutschland' }
  localizedCountries: null,

  // don't insert international dial codes
  nationalMode: false,

  // display only these countries
  onlyCountries: [],

  // number type to use for placeholders
  placeholderNumberType: "MOBILE",

  // the countries at the top of the list. defaults to united states and united kingdom   singapore and dubai
  preferredCountries: ["in", "us", "sg"],

  // display the country dial code next to the selected flag so it's not part of the typed number
  separateDialCode: true,

  // specify the path to the libphonenumber script to enable validation/formatting
  utilsScript: "",
});

var titledrpdwn,
  p_fname,
  p_lname,
  p_jobtitle,
  p_bemail,
  phone,
  extension,
  o_cname,
  drpDwnTxt_city,
  o_cwebsite,
  o_chq,
  o_czipcode,
  o_cdesc,
  countrydd,
  o_cspr,
  empstrength,
  o_arevenue,
  o_indvertical,
  lob,
  fl_agreement_ele,
  fl_nda_ele;
var subselectedArray_usa = [];
var subselectedArray_india = [];
var myObj = {};
var selectedCities_ro = [];
var selectedCities = [];
var rol_text;
var drpDwnTxt;
var companyDesc_text;
var resultError;

function update_variables() {
  titledrpdwn = document.getElementById("titledrpdwn").value;
  p_fname = document.getElementById("p_fname").value.trim();
  p_lname = document.getElementById("p_lname").value.trim();
  p_jobtitle = document.getElementById("p_jobtitle").value.trim();
  p_bemail = document.getElementById("p_bemail").value.trim();
  phone = document.getElementById("phone").value.trim();
  extension = $(".selected-dial-code").text().trim();
  // drpDwnTxt_city = document.getElementById('city_dropdown').text();
  o_cname = document.getElementById("o_cname").value.trim();
  o_cwebsite = document.getElementById("o_cwebsite").value.trim();
  o_chq = document.getElementById("o_chq").value.trim();
  o_czipcode = document.getElementById("o_czipcode").value.trim();
  o_cdesc = document.getElementById("o_cdesc").value.trim();
  countrydd = document.getElementById("countrydd").value.trim();
  if (countrydd == "India") {
    o_cspr = document.getElementById("o_cspr_sind").value.trim();
    Ocity = document.getElementById("o_city").value.trim();
    rol_text = document.getElementById("o_relowner").value.trim();
    console.log(rol_text + "city" + Ocity);
  } else if (countrydd == "USA") {
    o_cspr = document.getElementById("o_cspr_susa").value.trim();
  } else {
    o_cspr = document.getElementById("o_cspr").value.trim();
  }

  empstrength = document.getElementById("empstrength").value;
  o_arevenue = document.getElementById("o_arevenue").value.trim();
  //      locspresent = $('#locspresent').text();
  o_indvertical = document.getElementById("o_indvertical").value.trim();
  lob = document.getElementById("lob").value.trim();
  b_brieftxt = document.getElementById("b_brieftxt").value.trim();
 // partnership_model = $('input[name="partnership_model"]:checked').val();
  uce_other_input = document.getElementById("uce_other_input").value.trim();
  te_oth_input = document.getElementById("te_oth_input").value.trim();
  pso_othe_input = document.getElementById("pso_othe_input").value.trim();
  isp_oth_input = document.getElementById("isp_oth_input").value.trim();
  tc_other_input = document.getElementById("tc_other_input").value.trim();
  lob_other_input = document.getElementById("lob_other_input").value.trim();

  fl_agreement_ele = document.getElementById("agreement_doc");
  fl_nda_ele = document.getElementById("nda");
}

function hasConsecutiveDigits(str) {
  //returns true if the 4 digits are consecutive
  for (var i = 0; i < str.length - 3; i++) {
    //alert(parseInt(str[i]) + 1);
    if (
      (parseInt(str[i]) + 1 == parseInt(str[i + 1]) &&
        parseInt(str[i + 1]) + 1 == parseInt(str[i + 2]) &&
        parseInt(str[i + 2]) + 1 == parseInt(str[i + 3]) &&
        parseInt(str[i + 3]) + 1 == parseInt(str[i + 4])) ||
      (parseInt(str[i]) - 1 == parseInt(str[i + 1]) &&
        parseInt(str[i + 1]) - 1 == parseInt(str[i + 2]) &&
        parseInt(str[i + 2]) - 1 == parseInt(str[i + 3]) &&
        parseInt(str[i + 3]) - 1 == parseInt(str[i + 4]))
    )
      return true;
  }
  return false;
}

function has4OrMoreIncOrDecDigits(str) {
  // Returns true if s has three increasing or
  // decreasing digits.

  for (var i = 0; i < str.length - 3; i++) {
    if (
      (str[i] < str[i + 1] &&
        str[i + 1] < str[i + 2] &&
        str[i + 2] < str[i + 3]) ||
      (str[i] > str[i + 1] &&
        str[i + 1] > str[i + 2] &&
        str[i + 2] > str[i + 3])
    )
      return true;
  }
  return false;
}

function startsWithZero(phone) {
  //returns true if phone number starts with zero
  if (phone[0] == "0") {
    return true;
  }

  return false;
}

function hasSameDigits(phone) {
  //returns true if 4 or more consecutive digits as same
  for (i = 0; i < phone.length - 3; i++) {
    if (
      phone[i] == phone[i + 1] &&
      phone[i] == phone[i + 2] &&
      phone[i] == phone[i + 3] &&
      phone[i] == phone[i + 4]
    ) {
      return true;
    }
  }
  return false;
}

function hasIncorrectDigitCnt(phone) {
  //returns true if phone no is not of 10 digits
  if (!phone.match(/^\d{10}$/)) {
    return true;
  }
  return false;
}

function isInvalidPhone(phone) {
  if (phone == "" || phone == null) {
    return true;
  }

  if (
    hasIncorrectDigitCnt(phone) ||
    startsWithZero(phone) ||
    hasSameDigits(phone) ||
    has4OrMoreIncOrDecDigits(phone) ||
    hasConsecutiveDigits(phone)
  ) {
    return true;
  }

  return false;
}

function validatepersoninfo() {
  //alert("validatepersoninfo called");
  update_variables();
  i = p_bemail.indexOf("@");
  var bem = "";

  if (i != -1) {
    bem = p_bemail.substring(i + 1);
  }
  if (
    titledrpdwn == "Select" ||
    p_fname == "" ||
    p_lname == "" ||
    p_jobtitle == "" ||
    p_bemail == "" ||
    phone == ""
  ) {
    snackbar("All Fields Are Mandatory");
    $("#loader").hide();
    return false;
  } else if (isInvalidPhone(phone)) {
    // } else if (!phone.match(/^\d{10}$/)) {
    snackbar("Please Enter A Valid Phone Number");
    return false;
  } else if (
    String(bem.trim()).toLowerCase() == "gmail.com" ||
    String(bem.trim()).toLowerCase() == "yahoo.com"
  ) {
    snackbar("Please Enter A Valid Corporate Email Address");
    return false;
  } else if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(p_bemail)) {
    snackbar("Please Enter A Valid Corporate Email Address");
    return false;
  } else {
    //$("#organisation_header").tab("show");
    //$(".nav-item").removeClass("current");
    //$("#organisation_header").parent().addClass("current");
    //console.log("validation is working");
    return true;
  }
}

function validatepersoninfoWONav() {
  //alert("validatepersoninfo called");
  update_variables();
  i = p_bemail.indexOf("@");
  var bem = "";

  if (i != -1) {
    bem = p_bemail.substring(i + 1);
  }
  if (
    titledrpdwn == "Select" ||
    p_fname == "" ||
    p_lname == "" ||
    p_jobtitle == "" ||
    p_bemail == "" ||
    phone == ""
  ) {
    snackbar("All Fields Are Mandatory");
    $("#loader").hide();
    return false;
  } else if (isInvalidPhone(phone)) {
    // } else if (!phone.match(/^\d{10}$/)) {
    snackbar("Please Enter A Valid Phone Number");
    return false;
  } else if (
    String(bem.trim()).toLowerCase() == "gmail.com" ||
    String(bem.trim()).toLowerCase() == "yahoo.com"
  ) {
    snackbar("Please Enter A Valid Corporate Email Address");
    return false;
  } else if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(p_bemail)) {
    snackbar("Please Enter A Valid Corporate Email Address");
    return false;
  } else {
    return true;
  }
}

function validateorganisationinfo() {
  update_variables();
  var re =
    /^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/;
  if ((countrydd == "India" && Ocity == "") || rol_text == "") {
    snackbar("All Fields Are Mandatory");
    return false;
  }
  if (document.getElementById("tc_otherr").checked && tc_other_input == "") {
    snackbar("Please Enter Other Preferred Client Base");
    return false;
  }
  if (
    document.getElementById("lob").value.trim() == "Others" &&
    lob_other_input == ""
  ) {
    snackbar("Please Enter Other Line Of Business");
    return false;
  }
  if (
    o_cname == "" ||
    o_cwebsite == "" ||
    o_chq == "" ||
    o_czipcode == "" ||
    o_cdesc == "" ||
    countrydd == "" ||
    empstrength == "Select" ||
    o_arevenue == "" ||
    o_indvertical == "Select" ||
    lob == "Select" ||
    o_cspr == "" ||
    o_cspr == ""
  ) {
    snackbar("All Fields Are Mandatory");
    return false;
  } else if (o_arevenue.replace(/^0+/, "") == "") {
    snackbar("Annual Revenue Could Never Be 0");
    return false;
  } else if (
    subselectedArray_usa.length == 0 &&
    subselectedArray_india.length == 0 &&
    selectedArray1.length == 0
  ) {
    snackbar("All Fields Are Mandatory");
    return false;
  } else if (!re.test(o_cwebsite)) {
    snackbar("Please Enter A Valid Website");
    return false;
  } else if (
    checkinputchecked("tar_cli_base") &&
    !document.getElementById("tc_otherr").checked
  ) {
    snackbar("Please Choose Atleast One Preferred Client Base");
    return false;
  } else if (!o_arevenue.match(/^\d+(?:\.{0,1}\d{0,7})$/)) {
    snackbar("Please Enter A Annual Revenue In Number");
    return false;
  } else {
    $("#Technical_header").tab("show");
    $(".nav-item").removeClass("current");
    $("#Technical_header").parent().addClass("current");
  }
  o_arevenue = o_arevenue.replace(/^0+/, "");
}

function validateorganisationinfoWONav() {
  update_variables();
  var re =
    /^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/;
  if ((countrydd == "India" && Ocity == "") || rol_text == "") {
    snackbar("All Fields Are Mandatory");
    return false;
  }
  if (document.getElementById("tc_otherr").checked && tc_other_input == "") {
    snackbar("Please Enter Other Preferred Client Base");
    return false;
  }
  if (
    document.getElementById("lob").value.trim() == "Others" &&
    lob_other_input == ""
  ) {
    snackbar("Please Enter Other Line Of Business");
    return false;
  }
  if (
    o_cname == "" ||
    o_cwebsite == "" ||
    o_chq == "" ||
    o_czipcode == "" ||
    o_cdesc == "" ||
    countrydd == "" ||
    empstrength == "Select" ||
    o_arevenue == "" ||
    o_indvertical == "Select" ||
    lob == "Select" ||
    o_cspr == "" ||
    o_cspr == ""
  ) {
    snackbar("All Fields Are Mandatory");
    return false;
  } else if (o_arevenue.replace(/^0+/, "") == "") {
    snackbar("Annual Revenue Could Never Be 0");
    return false;
  } else if (
    subselectedArray_usa.length == 0 &&
    subselectedArray_india.length == 0 &&
    selectedArray1.length == 0
  ) {
    snackbar("All Fields Are Mandatory");
    return false;
  } else if (!re.test(o_cwebsite)) {
    snackbar("Please Enter A Valid Website");
    return false;
  } else if (
    checkinputchecked("tar_cli_base") &&
    !document.getElementById("tc_otherr").checked
  ) {
    snackbar("Please Choose Atleast One Preferred Client Base");
    return false;
  } else if (!o_arevenue.match(/^\d+(?:\.{0,1}\d{0,7})$/)) {
    snackbar("Please Enter A Annual Revenue In Number");
    return false;
  } else {
    o_arevenue = o_arevenue.replace(/^0+/, "");
    return true;
  }
}

function validatetechnicalinfo() {
  update_variables();
  if (document.getElementById("uce_otherr").checked && uce_other_input == "") {
    snackbar("Please Enter Other Use Case Expertise");
    return false;
  }
  if (document.getElementById("te_othh").checked && te_oth_input == "") {
    snackbar("Please Enter Other Technology Expertise");
    return false;
  }
  if (document.getElementById("pso_othee").checked && pso_othe_input == "") {
    snackbar("Please Enter Other Professional services Offered");
    return false;
  }
  if (document.getElementById("isp_othh").checked && isp_oth_input == "") {
    snackbar("Please Enter Other Services/Products");
    return false;
  }
  if (
    checkinputchecked("u_case_expe") &&
    !document.getElementById("uce_otherr").checked
  ) {
    snackbar("Please Choose Atleast One Use Case Expertise");
    return false;
  } else if (
    checkinputchecked("tech_expe") &&
    !document.getElementById("te_othh").checked
  ) {
    snackbar("Please Choose Atleast One Technology Expertise");
    return false;
  } else if (
    checkinputchecked("prof_ser_off") &&
    !document.getElementById("pso_othee").checked
  ) {
    snackbar("Please Choose Atleast One Professional Services Offered");
    return false;
  } else if (
    checkinputchecked("int_ser_prov") &&
    !document.getElementById("isp_othh").checked
  ) {
    snackbar("Please Choose Atleast One Service/Product");
    return false;
  } else {
    $("#Business_header").tab("show");
    $(".nav-item").removeClass("current");
    $("#Business_header").parent().addClass("current");
  }
}

function validatetechnicalinfoWONav() {
  update_variables();
  if (document.getElementById("uce_otherr").checked && uce_other_input == "") {
    snackbar("Please Enter Other Use Case Expertise");
    return false;
  }
  if (document.getElementById("te_othh").checked && te_oth_input == "") {
    snackbar("Please Enter Other Technology Expertise");
    return false;
  }
  if (document.getElementById("pso_othee").checked && pso_othe_input == "") {
    snackbar("Please Enter Other Professional services Offered");
    return false;
  }
  if (document.getElementById("isp_othh").checked && isp_oth_input == "") {
    snackbar("Please Enter Other Services/Products");
    return false;
  }
  if (
    checkinputchecked("u_case_expe") &&
    !document.getElementById("uce_otherr").checked
  ) {
    snackbar("Please Choose Atleast One Use Case Expertise");
    return false;
  } else if (
    checkinputchecked("tech_expe") &&
    !document.getElementById("te_othh").checked
  ) {
    snackbar("Please Choose Atleast One Technology Expertise");
    return false;
  } else if (
    checkinputchecked("prof_ser_off") &&
    !document.getElementById("pso_othee").checked
  ) {
    snackbar("Please Choose Atleast One Professional Services Offered");
    return false;
  } else if (
    checkinputchecked("int_ser_prov") &&
    !document.getElementById("isp_othh").checked
  ) {
    snackbar("Please Choose Atleast One Service/Product");
    return false;
  } else {
    return true;
  }
}

function snackbar(snk_msg) {
  var x = document.getElementById("snackbar");
  $("#snackbar").text(snk_msg);
  x.className = "show";
  setTimeout(function () {
    x.className = x.className.replace("show", "");
  }, 5000);
}

function checkinputchecked(e) {
  var checkboxs = document.getElementsByName(e);
  var okay = false;
  for (var i = 0, l = checkboxs.length; i < l; i++) {
    if (checkboxs[i].checked) {
      okay = true;
      break;
    }
  }
  if (okay) return false;
  else return true;
}

$("#uce_otherr").click(function () {
  otherInputShowFunction("uce_otherr", "uce_other_input");
});

$("#tc_otherr").click(function () {
  otherInputShowFunction("tc_otherr", "tc_other_input");
});

$("#te_othh").click(function () {
  otherInputShowFunction("te_othh", "te_oth_input");
});

$("#pso_othee").click(function () {
  otherInputShowFunction("pso_othee", "pso_othe_input");
});

$("#isp_othh").click(function () {
  otherInputShowFunction("isp_othh", "isp_oth_input");
});

function otherInputShowFunction(a, b) {
  var checkBox = document.getElementById(a);
  if (checkBox.checked == true) {
    $("#" + b).slideDown(30);
  } else {
    $("#" + b).slideUp(30);
  }
}

function isAgreementDocValid() {
  if (fl_agreement_ele.files.length > 0) {
    file = fl_agreement_ele.files[0];
    if (file.name.split(".")[1] == "pdf") {
      if (file.size / (1024 * 1024) < 4) {
        return true;
      }
    }
  }
  return false;
}

function isNDADocValid() {
  if (fl_nda_ele.files.length > 0) {
    file = fl_nda_ele.files[0];
    if (file.name.split(".")[1] == "pdf") {
      if (file.size / (1024 * 1024) < 4) {
        return true;
      }
    }
  }
  return false;
}

$("#send_form").click(function (e) {
  $("#loader").show();

  if (
    !validatepersoninfoWONav() ||
    !validateorganisationinfoWONav() ||
    !validatetechnicalinfoWONav()
  ) {
    $("#loader").hide();
    return false;
  }

  //tar_cli_base
  var tar_cli_base = [];
  $.each($("input[name='tar_cli_base']:checked"), function () {
    tar_cli_base.push($(this).val());
  });

  if (document.getElementById("tc_otherr").checked) {
    tar_cli_base.push($("#tc_otherr").val());
  }

  var u_case_expe = [];
  $.each($("input[name='u_case_expe']:checked"), function () {
    u_case_expe.push($(this).val());
  });
  if (document.getElementById("uce_otherr").checked) {
    u_case_expe.push($("#uce_otherr").val());
  }

  //tech
  var tech_expe = [];
  $.each($("input[name='tech_expe']:checked"), function () {
    tech_expe.push($(this).val());
  });
  if (document.getElementById("te_othh").checked) {
    tech_expe.push($("#te_othh").val());
  }

  //prof
  var prof_ser_off = [];
  $.each($("input[name='prof_ser_off']:checked"), function () {
    prof_ser_off.push($(this).val());
  });
  if (document.getElementById("pso_othee").checked) {
    prof_ser_off.push($("#pso_othee").val());
  }

  //inter serv
  var int_ser_prov = [];
  $.each($("input[name='int_ser_prov']:checked"), function () {
    int_ser_prov.push($(this).val());
  });
  if (document.getElementById("isp_othh").checked) {
    int_ser_prov.push($("#isp_othh").val());
  }

  //partnership_model
  var partnership_models = [];
  $.each($("input[name='partnership_model']:checked"), function () {
    partnership_models.push($(this).val());
  });

  update_variables();
  //alert($("#agreement_doc").val());
  //if (b_brieftxt == "" || partnership_model == undefined) {
  if (b_brieftxt == "" || checkinputchecked("partnership_model")) {
    snackbar("All Fields Are Mandatory");
    $("#loader").hide();
    return false;
  } else if (b_brieftxt.length >= 500) {
    snackbar("Please Enter Business Case Less Than 500 Characters");
    return false;
  } else if (
    fl_agreement_ele.files.length == 0 ||
    fl_nda_ele.files.length == 0
  ) {
    snackbar("All Fields Are Mandatory");
    $("#loader").hide();
    return false;
  } else if (!isAgreementDocValid()) {
     snackbar("Agreement document must be a pdf file with size less than 2MB.");
     $("#loader").hide();
     return false;
  } else if (!isNDADocValid()) {
     snackbar("NDA document must a pdf file with size less than 2MB.");
     $("#loader").hide();
     return false;
  }
  else {
    locofbusinArray = [];
    locofbusinArray1 = [];
    if (drpDwnTxt_city == undefined || drpDwnTxt_city == "") {
      drpDwnTxt_city = "";
    }
    locofbusinArray11 = selectedArray11.concat(subselectedArray11_usa);
    locofbusinArray = locofbusinArray11.concat(subselectedArray11_india);

    input = {
      p_fname: p_fname,
      p_lname: p_lname,
      p_jobtitle: p_jobtitle,
      p_bemail: p_bemail,
      phone: phone,
      o_cname: o_cname,
      o_cwebsite: o_cwebsite,
      o_chq: o_chq,
      o_czipcode: o_czipcode,
      o_cdesc: o_cdesc,
      countrydd: countrydd,
      o_csr_state: o_cspr,
      empstrength: empstrength,
      o_arevenue: o_arevenue,
      lob: lob,
      lob_oth: $("#lob_other_input").val(),
      loc_o_b: locofbusinArray,
      tar_cli_base: tar_cli_base,
      tar_cli_base_oth: $("#tc_other_input").val(),
      u_case_expe: u_case_expe,
      tech_expe: tech_expe,
      prof_ser_off: prof_ser_off,
      int_ser_prov: int_ser_prov,
      b_brieftxt: b_brieftxt,
      partnership_model: partnership_models,
      u_case_expe_oth: $("#uce_other_input").val(),
      tech_expe_oth: $("#te_oth_input").val(),
      prof_ser_off_oth: $("#pso_othe_input").val(),
      int_ser_prov_oth: $("#isp_oth_input").val(),
      m_code: "+91",
      o_indvertical: o_indvertical,
      titledrpdwn: titledrpdwn,
      city: drpDwnTxt_city,
      ro_name: rol_text,
    };
    //console.log(input);
    //console.log(JSON.stringify(input));

    var formData = new FormData($("#frm-part-reg")[0]);
    formData.append("p_fname", p_fname);
    formData.append("p_bemail", p_bemail);
    formData.append("p_fname", p_fname);
    formData.append("p_lname", p_lname);
    formData.append("p_jobtitle", p_jobtitle);
    formData.append("p_bemail", p_bemail);
    formData.append("phone", phone);
    formData.append("o_cname", o_cname);
    formData.append("o_cwebsite", o_cwebsite);
    formData.append("o_chq", o_chq);
    formData.append("o_czipcode", o_czipcode);
    formData.append("o_cdesc", o_cdesc);
    formData.append("countrydd", countrydd);
    formData.append("o_csr_state", o_cspr);
    formData.append("empstrength", empstrength);
    formData.append("o_arevenue", o_arevenue);
    formData.append("lob", lob);
    formData.append("lob_oth", $("#lob_other_input").val());
    formData.append("loc_o_b", locofbusinArray);
    formData.append("tar_cli_base", tar_cli_base);
    formData.append("tar_cli_base_oth", $("#tc_other_input").val());
    formData.append("u_case_expe", u_case_expe);
    formData.append("tech_expe", tech_expe);
    formData.append("prof_ser_off", prof_ser_off);
    formData.append("int_ser_prov", int_ser_prov);
    formData.append("b_brieftxt", b_brieftxt);
    formData.append("partnership_model", partnership_models);
    formData.append("u_case_expe_oth", $("#uce_other_input").val());
    formData.append("tech_expe_oth", $("#te_oth_input").val());
    formData.append("prof_ser_off_oth", $("#pso_othe_input").val());
    formData.append("int_ser_prov_oth", $("#isp_oth_input").val());
    formData.append("m_code", "+91");
    formData.append("o_indvertical", o_indvertical);
    formData.append("titledrpdwn", titledrpdwn);
    formData.append("city", drpDwnTxt_city);
    formData.append("ro_name", rol_text);

    $.ajax({
      url: baseAPIUrl + "/register",
      type: "POST",
      crossDomain: true,
      mimeType: "multipart/form-data",
      data: formData,
      processData: false,
      contentType: false,
      dataType: "json",
      //ContentType: "application/json; charset=utf-8",
      success: function (data) {
        //console.log("send formmmmmm sucess if");
        console.log(data);
        $("#loader").hide();
        resultError = data.status;
        if (resultError == "Success" || resultError == "success") {
          e.preventDefault();
          $("#loader").hide();
          $(".letter_cont").fadeOut("100");
          $("#cntr_crd_fin").append(
            "<img src='" +
              baseUrl +
              "assets/images/partner-register/Group149.png'>"
          );
          $("#cntr_txt_fin").append(
            '<div><h2>Thank you for your interest in partnering with <br>Pi.</h2> <p>Your registration is currently being reviewed.<br>You will soon have a revert from us, on your registered Email ID.</p><a class="btn btn-success" id="ok_submit_btn" href="#">&emsp; OK &emsp;</a></div>'
          );
          $("#cntr_crd_fin").addClass("cntr_crd_fin");
          $("#cntr_txt_fin div").addClass("cntr_crd_fin_anim");
        } else {
          $("#loader").hide();
          //console.log("send formmmmmm error else");
          console.log(data.message);
          console.log(data);
          snackbar("Please try later");
          return false;
        }
      },
      error: function (data) {
        //console.log("send formmmmmm error" + data.message);
        $("#loader").hide();
        // if (checkinputchecked('u_case_expe')) {
        snackbar(data.message);
        return false;
      },
    });

    // else{
    //         $('#loader').hide();
    //     snackbar('Please check all Fields');
    //     return false;
    // }
  }
});

$(document)
  .ajaxStart(function () {
    $("#loader").show();
  })
  .ajaxStop(function () {
    $("#loader").hide();
  });

$(document).on("click", "#ok_submit_btn", function () {
  $("#loader").show();
  //      $('.m_w_logo').fadeOut('400');
  //      $('#cntr_crd_fin').fadeOut('800');
  $("#cntr_txt_fin").fadeOut("800");
  $("#cntr_crd_fin").addClass("cntr_crd_sldout");
  $("#cntr_crd").addClass("cntr_crd_sldout");
  $(".lft_crd_wt").addClass("lft_crd_wt_fdin");
  $(".mob_white_fav").hide();
  setTimeout(function () {
    $("#m_b_logo").addClass("m_b_logo_fadin");
    //do something special
  }, 600);
  setTimeout(function () {
    window.location.href = "https://harbour1.in/partnerportal/login";
    $(".loader").hide();
  }, 2000);
});

$("#loc_o_b")
  .next()
  .click(function (e) {
    e.stopPropagation();
  });

$("#tc_selall").click(function () {
  $("[name = tar_cli_base]").prop("checked", $(this).prop("checked"));
  // $('#uce_other').prop('checked', false);
  // if(!$('#uce_other')){}
  // $('#tc_other').prop('checked', false);
});

$("[name = tar_cli_base]").change(function () {
  if (!$(this).prop("checked")) {
    $("#tc_selall").prop("checked", false);
  }
});

$("#uce_selall").click(function () {
  $("[name = u_case_expe]").prop("checked", $(this).prop("checked"));
  // otherInputShowFunction('uce_other', 'uce_other_input');
  // $('#uce_other').prop('checked', false);
});

$("[name = u_case_expe]").change(function () {
  if (!$(this).prop("checked")) {
    $("#uce_selall").prop("checked", false);
  }
});

$("#te_selall").click(function () {
  $("[name = tech_expe]").prop("checked", $(this).prop("checked"));
  // otherInputShowFunction('te_oth', 'te_oth_input');
});

$("[name = tech_expe]").change(function () {
  if (!$(this).prop("checked")) {
    $("#te_selall").prop("checked", false);
  }
});

$("#pso_selall").click(function () {
  $("[name = prof_ser_off]").prop("checked", $(this).prop("checked"));
  // otherInputShowFunction('pso_othe', 'pso_othe_input');
});

$("[name = prof_ser_off]").change(function () {
  if (!$(this).prop("checked")) {
    $("#pso_selall").prop("checked", false);
  }
});

$("#isp_selall").click(function () {
  $("[name = int_ser_prov]").prop("checked", $(this).prop("checked"));
  // otherInputShowFunction('isp_oth', 'isp_oth_input');
});

$("[name = int_ser_prov]").change(function () {
  if (!$(this).prop("checked")) {
    $("#isp_selall").prop("checked", false);
  }
});

submenuselectedArray = [];
selectedArray = [];
var selectedArray11 = [];
var selectedArray1 = [];
var usaindia;
$(".multi-level .dropdown-menu-item").click(function () {
  $("#us_states").hide();
  $("#india_states").hide();
  $(this).hasClass("active").value = this.innerText;
  var selectedusaindia = this.innerText;
  console.log(selectedusaindia);
  if (selectedusaindia == "USA") {
    console.log("usa");
  } else if (selectedusaindia == "India") {
    console.log(" india");
  } else {
    $(this).toggleClass("active");
  }

  if ($(this).hasClass("active")) {
    $(this).hasClass("active").value = this.innerText;
    usaindia = this.innerText;
    let selecteditems = this.innerText;
    selectedArray11.push(selecteditems);
    selectedArray1.push(
      '<span class="selectedValues_style"><a href="#">' +
        selecteditems +
        "</a></span>"
    );
  } else {
    removeItemFunction(this);
  }
  selectedArray = selectedArray1;
  var countries_array = selectedArray.toString();
  document.getElementById("selectedValues").innerHTML = countries_array.replace(
    /\,/g,
    " "
  );
  // document.getElementById("selectedValues").innerHTML = selectedArray;
});

$("#us_states").hide();
$("#india_states").hide();
subselectedArray = [];
subselectedArray1 = [];
var selectedValue;

//dropdown-submenu
$(".dropdown-submenu .dropdown-item").click(function () {
  selectedValue = $(this).text();
  console.log(selectedValue);
  if (selectedValue == "USA") {
    $("#us_states").show();
    $("#india_states").hide();
  }
  if (selectedValue == "India") {
    $("#us_states").hide();
    $("#india_states").show();
  }
});

subselectedArray1_usa = [];
subselectedArray1_india = [];
finalselectedArray_usa = "";
finalselectedArray_india = "";
finalselectedArrays = [];
subselectedArray11_usa = [];
subselectedArray11_india = [];
$("#o_city").prop("disabled", true).addClass("disabled");
$("#o_relowner").prop("disabled", true).addClass("disabled");
// dropdown-submenu-item
$(".dropdown-submenu .dropdown-submenu-item").click(function () {
  var selectedOption = $(this).parent().parent().find(".ds-selected").text();
  $(this).toggleClass("active");
  console.log("two :" + subselectedArray);
  subselectedArray.toString();
  if (selectedOption == "USA") {
    $(this)
      .parent()
      .parent()
      .find(".ds-selected")
      .text("USA")
      .addClass("active");
    if ($(this).hasClass("active")) {
      $(this).hasClass("active").value = this.innerText;
      let selecteditems = this.innerText;
      let selecteditems11 = "USA - " + this.innerText;
      subselectedArray11_usa.push(selecteditems11);
      subselectedArray1_usa.push(
        '<span class="selectedValues_style"><a href="#">' +
          " USA" +
          " - " +
          selecteditems +
          "</a></span>"
      );
    } else {
      removeItemFunction_usa(this);
    }
    subselectedArray_usa = subselectedArray1_usa;

    if (subselectedArray_usa.length >= 1) {
      var usa_array = subselectedArray_usa.toString();
      document.getElementById("selectedValuesforUSA").innerHTML =
        usa_array.replace(/\,/g, " ");
    } else {
      document.getElementById("selectedValuesforUSA").innerHTML = "";
    }
  }

  if (selectedOption == "India") {
    $(this)
      .parent()
      .parent()
      .find(".ds-selected")
      .text("India")
      .addClass("active");
    if ($(this).hasClass("active")) {
      $(this).hasClass("active").value = this.innerText;
      let selecteditems = this.innerText;
      let selecteditems1 = "India - " + this.innerText;
      subselectedArray11_india.push(selecteditems1);
      subselectedArray1_india.push(
        '<span class="selectedValues_style"><a href="#">' +
          " India" +
          " - " +
          selecteditems +
          "</a></span>"
      );
    } else {
      removeItemFunction_india(this);
    }
    subselectedArray_india = subselectedArray1_india;

    if (subselectedArray_india.length >= 1) {
      var india_array = subselectedArray_india.toString();
      document.getElementById("selectedValuesforIndia").innerHTML =
        india_array.replace(/\,/g, " ");
    } else {
      finalselectedArray_india = "";
      document.getElementById("selectedValuesforIndia").innerHTML =
        finalselectedArray_india;
    }
  }

  if (!$(this).parent().children().hasClass("active")) {
    $(this).parent().prev().removeClass("active");
  }
});

$("body").click(function () {
  $("#us_states").hide();
  $("#india_states").hide();
  // $('#locofbusinees_dropdown').hide();
});

//remove items from countries
$(document).on("click", "#selectedValues .selectedValues_style", function () {
  var ItemTextVal = $.trim($(this).text());

  $(this).remove();
  // $('#locofbusinees_dropdown li a:contains(' + ItemTextVal + ')').parent().removeClass('active');
  // var splitNamewithx = $.trim(ItemTextVal).replace(' x', '');
  $("#locofbusinees_dropdown li a:contains(" + $.trim(ItemTextVal) + ")")
    .parent()
    .removeClass("active");

  console.log("ItemTextVal : " + ItemTextVal);
  let indexValue = selectedArray1.indexOf(
    '<span class="selectedValues_style"><a href="#">' +
      ItemTextVal +
      "</a></span>"
  );
  if (indexValue > -1) {
    selectedArray1.splice(indexValue, 1);
  }
  console.log("selectedArray1 : " + selectedArray1);
});

function removeItemFunction(e) {
  $(e).parent().prev().removeClass("active");
  $(e).hasClass("active").value = e.innerText;

  // var splitNamewithx = $.trim(e.innerText).replace(' x', '');
  // $('#locofbusinees_dropdown li a:contains(' + $.trim(splitNamewithx) + ')').parent().removeClass('active');

  console.log(
    selectedArray1.indexOf(
      '<span class="selectedValues_style"><a href="#">' +
        e.innerText +
        "</a></span>"
    )
  );
  let indexValue = selectedArray1.indexOf(
    '<span class="selectedValues_style"><a href="#">' +
      e.innerText +
      "</a></span>"
  );
  if (indexValue > -1) {
    selectedArray1.splice(indexValue, 1);
  }
  console.log("selectedValues: " + selectedArray1);
}

//remove items from usa
$(document).on(
  "click",
  "#selectedValuesforUSA .selectedValues_style",
  function () {
    var ItemTextVal1 = $.trim($(this).text());
    $(this).remove();

    var splitName = ItemTextVal1.split("-");
    // var splitNamewithx = $.trim(splitName[1]).replace(' x', '');
    $(
      "#locofbusinees_dropdown li ul li a:contains(" +
        $.trim(splitName[1]) +
        ")"
    )
      .parent()
      .removeClass("active");

    if (!$("#us_states").children().hasClass("active")) {
      $("#us_states").prev().removeClass("active");
    }

    console.log("ItemTextVal : " + ItemTextVal1);
    let indexValue_usatext = subselectedArray1_usa.indexOf(
      '<span class="selectedValues_style"><a href="#"> ' +
        ItemTextVal1 +
        "</a></span>"
    );
    if (indexValue_usatext > -1) {
      subselectedArray1_usa.splice(indexValue_usatext, 1);
    }
  }
);

function removeItemFunction_usa(e) {
  if (
    $("#locofbusinees_dropdown li a ul .dropdown-submenu-item").hasClass(
      "active"
    )
  ) {
    $(e).parent().prev().removeClass("active");
  }
  $(e).hasClass("active").value = e.innerText;
  console.log(
    '<span class="selectedValues_style"><a href="#">' +
      " USA" +
      " - " +
      e.innerText +
      "</a></span>"
  );
  var indexValue_usa = subselectedArray1_usa.indexOf(
    '<span class="selectedValues_style"><a href="#">' +
      " USA - " +
      e.innerText +
      "</a></span>"
  );
  if (indexValue_usa > -1) {
    subselectedArray1_usa.splice(indexValue_usa, 1);
  }
  console.log("selectedValuesforUSA: " + subselectedArray1_usa);
}
//remove items from india
$(document).on(
  "click",
  "#selectedValuesforIndia .selectedValues_style",
  function () {
    var ItemTextVal2 = $.trim($(this).text());
    $(this).remove();

    var splitName_india = ItemTextVal2.split("-");
    // var splitNamewithx1 = $.trim(splitName_india[1]).replace(' x', '');
    $(
      "#locofbusinees_dropdown li ul li a:contains(" +
        $.trim(splitName_india[1]) +
        ")"
    )
      .parent()
      .removeClass("active");

    if (!$("#india_states").children().hasClass("active")) {
      $("#india_states").prev().removeClass("active");
    }

    console.log("ItemTextVal : " + ItemTextVal2);
    let indexValue_indiatext = subselectedArray1_india.indexOf(
      '<span class="selectedValues_style"><a href="#"> ' +
        ItemTextVal2 +
        "</a></span>"
    );
    if (indexValue_indiatext > -1) {
      subselectedArray1_india.splice(indexValue_indiatext, 1);
    }
  }
);

function removeItemFunction_india(e) {
  if (
    $("#locofbusinees_dropdown li a ul .dropdown-submenu-item").hasClass(
      "active"
    )
  ) {
    $(e).parent().prev().removeClass("active");
  }
  $(e).hasClass("active").value = e.innerText;
  //   console.log(subselectedArray1_india.indexOf('<span class="selectedValues_style"><a href="#">' + " India" + " - " + e.innerText + '</a></span>'));
  var indexValue_india = subselectedArray1_india.indexOf(
    '<span class="selectedValues_style"><a href="#">' +
      " India - " +
      e.innerText +
      "</a></span>"
  );
  if (indexValue_india > -1) {
    subselectedArray1_india.splice(indexValue_india, 1);
  }
  console.log(subselectedArray1_india);
}

//filter search for city
// $(document).click(function (e) {
//     var container = $("#city_dropdown");
//     if (!container.is(e.target) && container.has(e.target).length === 0) {
//         container.hide();
//     }
// });

// $('#city_dropdown .dropdown-item').click(function () {
//     $("#city_dropdown").hide();
// });

// $('#o_city').click(function () {
//     $("#city_dropdown").show();
// });

//filter search for inver
// $(document).click(function (e) {
//     var container = $("#indver_dropdown");
//     if (!container.is(e.target) && container.has(e.target).length === 0) {
//         container.hide();
//     }
// });

// $('#indver_dropdown .dropdown-item').click(function () {
//     $("#indver_dropdown").hide();
// });

//filter for indver_dropdown
$(document).on("click focus", "#o_indvertical", function () {
  $("#indver_dropdown").css("display", "block");
  console.log("o_indvertical click");
});

$(document).on("click", "#indver_dropdown .dropdown-item", function () {
  // $('#indver_dropdown .dropdown-item').click(function () {
  $("#indver_dropdown").css("display", "none");
  // $('#indver_dropdown').trigger("liszt:updated");
});

$("#indver_dropdown a").click(function () {
  var textselc1 = $(this).text();
  document.getElementById("o_indvertical").value = textselc1;
  lob = document.getElementById("o_indvertical").value;
});

//filter for lob
$(document).on("click focus", "#lob", function () {
  $("#lob_dropdown").css("display", "block");
});

$("#lob_dropdown .dropdown-item").click(function () {
  $("#lob_dropdown").css("display", "none");
});

$(".letter_cont").on("click", function () {
  $("#indver_dropdown").css("display", "none");
  $("#lob_dropdown").css("display", "none");
  $("#indiastate_dropdown").css("display", "none");
  $("#usastate_dropdown").css("display", "none");
  $("#locofbusinees_dropdown").css("display", "none");
  $("#countries_dropdown").css("display", "none");
  $("#city_dropdown").css("display", "none");
  $("#relowner_dropdown").css("display", "none");
});

$("#lob_dropdown a").click(function () {
  var textselc = $(this).text();
  document.getElementById("lob").value = textselc;
  lob = document.getElementById("lob").value;
});

// var elem = document.getElementById("lob_dropdown");
// (document.body || document.documentElement).addEventListener('click', function (event) {
//   // If the element on which the click event occurs is not the dropdown, then hide it
//   if (event.target !== elem)
//     elem.style.display="none";
// }, false);

// $(document).on("click", function(event){
//        var $trigger = $(".dropdown-menu");
//        if($trigger !== event.target && !$trigger.has(event.target).length){
//            $(".dropdown-menu").show();
//        }
//    });

//filter search for lob
// $(document).click(function (e) {
//     var container = $("#lob_dropdown");
//     if (!container.is(e.target) && container.has(e.target).length === 0) {
//         container.hide();
//     }
// });

// $('#lob').click(function () {
//     $("#lob_dropdown").show();
// });

//filter search for usa states
// $(document).click(function (e) {
//     var container = $("#usastate_dropdown");
//     if (!container.is(e.target) && container.has(e.target).length === 0) {
//         container.hide();
//     }
// });

//filter search for india stats
// $(document).click(function (e) {
//     var container = $("#indiastate_dropdown");
//     if (!container.is(e.target) && container.has(e.target).length === 0) {
//         container.hide();
//     }
// });

//filter search for india stats
$("#o_city").click(function () {
  if ($("#countrydd").text() == "India") {
    $("#o_relowner").prop("disabled", false).removeClass("disabled");
  }
});

//filter for city
$(document).on("click focus", "#o_city", function () {
  $("#city_dropdown").css("display", "block");
});

$("#city_dropdown .dropdown-item").click(function () {
  $("#city_dropdown").css("display", "none");
});

//filter for ro
$(document).on("click focus", "#o_relowner", function () {
  $("#relowner_dropdown").css("display", "block");
});

//     $('#relowner_dropdown .dropdown-item').click(function () {
//     $("#relowner_dropdown").hide();
// });

// $('#city_dropdown a').click(function () {
// var textselc= $(this).text();

// });

// $('#o_city').change(function(){
//     if ($(this).val() > 0) {
//       for (i = 1; i <= $(this).val(); i++) {
//         $('#city_dropdown').append(' <div class=" right-addon"><input type="text" placeholder="Search..." class="form-control" id="city_userinput" onkeyup="cityfilterFunction()"> <i class="fa fa-search"></i></div>');
//       }
//     }
// });​

$("#indiastate_dropdown .dropdown-item").click(function () {
  document.getElementById("o_city").value = "";
  //selectedCities_ro = [];

  $("#o_relowner").val("");
  $("#o_relowner").attr("disabled", true);

  $("#indiastate_dropdown").hide();
  selectedCities = [];
  $("#city_dropdown").empty();
  drpDwnTxt = $(this).text();
  $(this).parent().prev().text(drpDwnTxt);
  $(this).parent().prev().focus();
  $.ajax({
    url: baseAPIUrl + "/getcity?state_name=" + drpDwnTxt,
    type: "get",
    crossDomain: true,
    // dataType: 'json',
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      $("#relowner_dropdown").empty();

      selectedCities.length = 0;
      console.log(data.cities_list);
      selectedCities = data.cities_list;
      $("#city_dropdown").empty();
      // $('#city_dropdown').append(' <div class=" right-addon"><input type="text" placeholder="Search..." class="form-control" id="city_userinput" onkeyup="cityfilterFunction()"> <i class="fa fa-search"></i></div>');
      for (i = 0; i < selectedCities.length; i++) {
        var all_cities =
          '<a class="dropdown-item" href="#" >' + selectedCities[i] + "</a>";
        $("#city_dropdown").append(all_cities);
      }
    },
    error: function (data) {
      // alert('error');
      snackbar("Please try again later");
      return false;
    },
  });
});

$(document).on("click", "#city_dropdown .dropdown-item", function () {
  selectedCities_ro = [];
  drpDwnTxt_state = document.getElementById("o_cspr_sind").value;
  drpDwnTxt_city = $(this).text();
  document.getElementById("o_city").value = drpDwnTxt_city;
  document.getElementById("o_relowner").value = "";
  Ocity = document.getElementById("o_city").value;
  // $(this).parent().prev().focus();
  $(this).parent().prev().text(drpDwnTxt_city);
  console.log(drpDwnTxt_city);
  $("#city_dropdown").hide();
  if (drpDwnTxt_city) {
    $.ajax({
      url: baseAPIUrl + "/getrolist?state_name=" + drpDwnTxt_state,
      type: "get",
      crossDomain: true,
      // dataType: 'json',
      ContentType: "application/json; charset=utf-8",
      success: function (data) {
        console.log(data.ro_list);
        selectedCities_ro.length = 0;
        selectedCities_ro = data.ro_list;
        $("#relowner_dropdown").empty();
        if (selectedCities_ro && selectedCities_ro.length > 0) {
          for (i = 0; i < selectedCities_ro.length; i++) {
            var all_cities =
              '<a class="dropdown-item" href="#">' +
              selectedCities_ro[i] +
              "</a>";
            $("#relowner_dropdown").append(all_cities);
          }
        } else {
          $("#o_relowner").attr("disabled", true);
        }
        // notinlist = '<a class="dropdown-item" href="#" > Not In The List </a>';
        // $("#relowner_dropdown").append(notinlist);
      },
      error: function () {
        console.log("error");
        snackbar("Please try again later");
        return false;
      },
    });
  }
});

$(document).on("click", "#relowner_dropdown .dropdown-item", function () {
  rol_text = $(this).text();
  // $(this).parent().prev().text(rol_text);
  $(this).parent().prev().focus();
  console.log(rol_text);
  $("#relowner_dropdown").hide();
  document.getElementById("o_relowner").value = rol_text;
  // rol_text=document.getElementById("lob").value;
});

// var selectedState_ind;
// $('#o_cspr_sind').click(function () {
//     $("#indiastate_dropdown").toggle();
//     selectedState_ind= $('#o_cspr_sind').text();
//     console.log(selectedState_ind);
// });

//filter search for countries
// $(document).click(function (e) {
//     var container = $("#countries_dropdown");
//     if (!container.is(e.target) && container.has(e.target).length === 0) {
//         container.hide();
//     }
// });

// $('#countries_dropdown .dropdown-item').click(function () {
//     $("#countries_dropdown").hide();
// });
// $('#countrydd').click(function () {
//     $("#countries_dropdown").toggle();
// });

//filter search for locofbusinees
// $(document).click(function (e) {
//     var container = $("#locofbusinees_dropdown");
//     if (!container.is(e.target) && container.has(e.target).length === 0) {
//         container.hide();
//     }
// });

$(document).on("click focus", "#loc_o_b", function () {
  $("#locofbusinees_dropdown").css("display", "block");
});

// $(document).click(function(){
//     $("#indver_dropdown").hide();
//     $("#city_dropdown").hide();
// });

// $(document).click(function(){
//   $(".ul_lop").css('visibility','hidden');
// });

// $(window).click(function() {
//     $('#locofbusinees_dropdown').hide();
// });
// $(document).click(function(){
//     if($("#locofbusinees_dropdown").show()){
//   $("ul#locofbusinees_dropdown").show();
// }
// });
//     $('#loc_o_b .dropdown-item').click(function () {
//     $("#locofbusinees_dropdown").hide();
// });

// $('#locofbusinees_dropdown a').click(function () {
// var textselc2= $(this).text();
// document.getElementById("loc_o_b").value = textselc2;
// // =document.getElementById("loc_o_b").value;
// });

$(document).on("focus click keypress", "#o_cdesc", function () {
  $("#compydes_Dialog").modal("show");
  $("textarea").focus();
  $("#comp_descr").focus();
});

$(function () {
  $("#lob").change(function () {
    if ($(this).val() == "Others") {
      $("#dvlob_other_input").show();
    } else {
      $("#dvlob_other_input").hide();
    }
  });
});

$(document).on("keydown", function (e) {
  if (e.keyCode === 27) {
    // ESC
    $(".dropdown-menu").hide();
  }
});

//model view
$("#errorTxt").hide();
$(document).on("click", "#btnSaveText", function () {
  $("#errorTxt").hide();
  companyDesc_text = $("#comp_descr").val();
  console.log(companyDesc_text);
  if (companyDesc_text) {
    $("#compydes_Dialog").modal("hide");
    $("#o_cdesc").focus();
    // $('#o_cdesc').tooltip();
    $("#o_cdesc").attr("data-original-title", companyDesc_text).tooltip();
    $("#o_cdesc").val(companyDesc_text);
    $("#o_chq").focus();
  } else {
    $("#errorTxt").show();
  }
});
