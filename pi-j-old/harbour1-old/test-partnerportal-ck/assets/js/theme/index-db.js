/***********************/
/* Global vars */
/**********************/
const baseUrl = "https://harbour1.in/test-partnerportal-ck/";
const baseAPIUrl =
  "https://harbour1.in/partnerportal_backend_api_ck/public/api";
const apiDomainUrl = "https://harbour1.in/partnerportal_backend_api_ck/";

const REJECTED_STATE = "rejected";
const APPROVED_STATE = "approved";
const PENDING_STATE = "pending";
const USER_ADMIN_TYPE = "admin";
const USER_PARTNER_TYPE = "partner";

/***********************/
/* Refresh documents on load */
/**********************/

$(document).ready(function () {
  /*
  localStorage.removeItem("partners");
  localStorage.removeItem("initpipelineform");
  localStorage.removeItem("pipelines");
*/
  fixHeaderForUser();
  fixSidebarForUser();
});

function fixHeaderForUser() {
  let user = localStorage.getItem("user");
  if (user != null && user != "") {
    user = JSON.parse(user);
    //console.log(user);
    //console.log(user.email);
    $(".navbar li.user-dropdown p.user-name").html(user.name);
    $(".navbar li.user-dropdown p.user-email").html(user.email);
  }
}

function fixSidebarForUser() {
  let user = localStorage.getItem("user");

  if (user != null && user != "") {
    user = JSON.parse(user);
    if (user.type != USER_ADMIN_TYPE) {
      $("#sidebar ul li.registration-nav-item").css("display", "none");
     /*$("#sidebar ul li.dashboard-nav-item a.nav-link").attr(
        "href",
        "javascript:void(0)"
      );
      $("#sidebar ul li.nav-item.dashboard-nav-item").addClass("inactive");*/
    } else {
      $("#sidebar ul li.profile-nav-item a.nav-link").attr(
        "href",
        "javascript:void(0)"
      );
      $("#sidebar ul li.profile-nav-item").addClass("inactive");
    }
  }
}

/***********************/
/* Events binding */
/**********************/

/****By Siva- start*****/
$(".calVal").on("keyup", () => {
  UpdateRcValus();
});
$(".calValSelect").on("change", () => {
  UpdateRcValus();
});

let dynamicPoteId = () => {
  let dyanamiCnUM = Math.floor(Math.random() * 1000000000);
  let potentialId = "piPartner_" + dyanamiCnUM;
  $("#ppotentialid").val(potentialId);
};

let UpdateRcValus = () => {
  let mrcs = $("#pmrc").val();
  let arcs = $("#parc").val();
  let otcs = $("#potc").val();
  let cpim = $("#cpinmonths").val();

  if (mrcs !== "" && arcs !== "" && otcs !== "") {
    if (cpim !== "") {
      let mrc = Number(mrcs);
      let arc = Number(arcs);
      let otc = Number(otcs);
      let nu = Number(cpim);

      let acv = mrc * 12 + otc + arc;
      acv = roundToTwo(acv);

      // t1 = mrc * nu;
      // t2 = t1 + otc;
      // t3 = arc * (nu / 12);
      // t4 = t2 + t3;
      let tcv = mrc * nu + otc + arc * (nu / 12);
      tcv = roundToTwo(tcv);

      $("#pacv").val(acv);
      $("#ptcv").val(tcv);
    } else {
      let mrc = Number(mrcs);
      let arc = Number(arcs);
      let otc = Number(otcs);
      let acv = mrc * 12 + otc + arc;
      acv = roundToTwo(acv);

      $("#pacv").val(acv);
    }
  } else {
    $("#pacv").val("");
    $("#ptcv").val("");
  }
};

/****By Siva- end*****/

function roundToTwo(num) {
  return +(Math.round(num + "e+2") + "e-2");
}

$("form .btn-cancel").on("click", function (e) {
  var form = $(this).closest("form")[0];
  if ($("form .clear-on-form-reset").length) {
    $("form .clear-on-form-reset").html("");
  }
  form.reset();
});
/***********************/
/* Events binding - login - logout */
/**********************/

$(".signout").click(function (e) {
  e.preventDefault();
  let user = localStorage.getItem("user");

  if (user == null || user == "" || typeof user == "undefined") {
    snackbar("You are not logged in");
    return false;
  }

  user = JSON.parse(user);
  // alert("in signout");
  // console.log("user token before sign out");
  // console.log(user.token);

  $.ajax({
    url: baseAPIUrl + "/logout",
    type: "GET",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + user.token,
    },
    dataType: "json",
    ContentType: "application/json;",
    success: function (data) {
      console.log("in success");
      console.log(data);
      //localStorage.removeItem("user");
      logout();
      location.href = baseUrl + "login";
      return;
    },
    error: function (data) {
      console.log("in failure");
      console.log(data);
      return false;
    },
  });
});

$("#frm-pwd-assist").on("submit", function (e) {
  e.preventDefault();
  $("#loader").show();

  let formData = {
    email: $("#frm-pwd-assist #txtEmail").val(),
  };

  $.ajax({
    type: "GET",
    url: baseAPIUrl + "/forgot",
    crossDomain: true,
    cache: false,
    timeout: 800000,
    data: formData,
    dataType: "json",
    success: function (data) {
      $("#frm-pwd-assist #txtEmail").val("");
      $("#loader").hide();
      //console.log(data);
      if (data.status === "success") {
        if (data.status === "success") {
          snackbar(data.message, false);
        }
      }
    },
    error: function (e) {
      $("#loader").hide();
      responseText = e.responseText;
      //console.log(responseText);
      snackbar(JSON.parse(responseText).message);
    },
  });
});

/***********************/
/* Events binding - Registration */
/**********************/
/*
$("#pending-registrtaion").on("click", ".reg-review", function (e) {
  e.preventDefault();

  let ele = $(this);
  let idx = ele.parent().data("ref");
  let partners = JSON.parse(localStorage.getItem("partners"));
  let partnerObj = partners[idx];

  fillReviewPop(partnerObj);

  //alert(partnerObj.partner_personal_info.first_name);

  $("#approvepop #partner").val(partnerObj.id);

  $("#approvepop #partnername").val(getPartnerName(partnerObj));
  $("#approvepop #partneremail").val(partnerObj.business_email);

  $("#rejectpop #partnerid").val(partnerObj.id);
  $("#rejectpop #partnername").val(getPartnerName(partnerObj));
  $("#rejectpop #partneremail").val(partnerObj.business_email);

  $("#reviewpop").removeClass("hide");
  let patnerName = $(e.currentTarget).closest();
});

$("#reviewpop").on("click", ".btn-reject", function (e) {
  e.preventDefault();
  $("#reviewpop").addClass("hide");
  //$("#rejectpop form")[0].reset();

  $("#rejectpop").removeClass("hide");
});

$("#reviewpop").on("click", ".btn-approve", function (e) {
  e.preventDefault();
  $("#reviewpop").addClass("hide");
  //$("#approvepop form")[0].reset();

  $("#approvepop").removeClass("hide");
});
*/

$("#page-single-partner").on("click", ".btn-approve", function (e) {
  e.preventDefault();

  let partnerObj = JSON.parse(localStorage.getItem("initpartnerdetails"));

  $("#approvepop #partnername").val(getPartnerName(partnerObj));
  $("#approvepop #partneremail").val(
    partnerObj.partner_personal_info.business_email
  );

  $("#approvepop #partner").val(partnerObj.id);

  $("#approvepop").removeClass("hide");
});

$("#pending-registrtaion").on("click", ".reg-approve", function (e) {
  e.preventDefault();

  let ele = $(this);
  let idx = ele.parent().data("ref");
  let partners = JSON.parse(localStorage.getItem("partners"));
  let partnerObj = partners[idx];

  $("#approvepop #partnername").val(getPartnerName(partnerObj));
  $("#approvepop #partneremail").val(
    partnerObj.partner_personal_info.business_email
  );

  $("#approvepop #partner").val(partnerObj.id);

  $("#approvepop").removeClass("hide");
});

$("#approvepop .forms-sample").on("click", ".btn-close", function (e) {
  e.preventDefault();
  $("#approvepop #certdoc").val("");
  $("#approvepop").addClass("hide");
});

$("#approvepop .forms-sample").on("submit", function (e) {
  e.preventDefault();
  $("#loader").show();

  let user = localStorage.getItem("user");

  if (user == null || user == "" || typeof user == "undefined") {
    snackbar("You are not logged in");
    return false;
  }

  user = JSON.parse(user);

  let partner = $("#approvepop #partner").val();
  var formData = new FormData($("#reg-approve-form")[0]);
  //formData.append("certdoc", $("#certdoc").val());

  $.ajax({
    type: "POST",
    url: baseAPIUrl + "/partners/" + partner + "/approve",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + user.token,
    },
    cache: false,
    timeout: 800000,
    enctype: "multipart/form-data",
    data: formData,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
      //console.log(data);
      $("#loader").hide();

      //$("#approvepop #certdoc").val("");
      $("#approvepop form")[0].reset();
      $("#approvepop").addClass("hide");
      //snackbar(JSON.parse(data).message);
      location.href = baseUrl + "registrations/approved";
      //console.log("SUCCESS : ", data);
    },
    error: function (e) {
      $("#loader").hide();
      //$("#approvepop").addClass("hide");
      responseText = e.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
    },
  });
});

$("#page-single-partner").on("click", ".btn-reject", function (e) {
  e.preventDefault();

  let partnerObj = JSON.parse(localStorage.getItem("initpartnerdetails"));

  $("#rejectpop #partnerid").val(partnerObj.id);
  $("#rejectpop #partnername").val(getPartnerName(partnerObj));
  $("#rejectpop #partneremail").val(
    partnerObj.partner_personal_info.business_email
  );

  $("#rejectpop").removeClass("hide");
});

$("#pending-registrtaion").on("click", ".reg-reject", function (e) {
  e.preventDefault();

  let ele = $(this);
  let idx = ele.parent().data("ref");
  let partners = JSON.parse(localStorage.getItem("partners"));
  let partnerObj = partners[idx];

  $("#rejectpop #partnerid").val(partnerObj.id);
  $("#rejectpop #partnername").val(getPartnerName(partnerObj));
  $("#rejectpop #partneremail").val(
    partnerObj.partner_personal_info.business_email
  );

  $("#rejectpop").removeClass("hide");
});

$("#rejectpop .forms-sample").on("submit", function (e) {
  e.preventDefault();
  $("#loader").show();

  let user = localStorage.getItem("user");

  if (user == null || user == "" || typeof user == "undefined") {
    snackbar("You are not logged in");
    return false;
  }

  user = JSON.parse(user);

  let partner = $("#rejectpop #partnerid").val();
  //let partner = 2;
  let message = $("#rejectpop #exampleTextarea1").val();
  let mailcontent = { msg: message };
  let url = baseAPIUrl + "/partners/" + partner + "/reject";
  //alert(url);

  $.ajax({
    url: url,
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    data: mailcontent,
    dataType: "json",
    ContentType: "application/json;",
    success: function (data) {
      $("#rejectpop").addClass("hide");
      $("#loader").hide();

      if (data.status == "error") {
        snackbar(data.msg);
        return false;
      }

      location.href = baseUrl + "registrations/rejected";
      return;
    },
    error: function (data) {
      console.log("in failure");
      console.log(data);
      return false;
    },
  });
});

$(".db-popup").on("click", ".btn-close", function (e) {
  e.preventDefault();
  $(".db-popup").addClass("hide");
});

$("#rejectpop .forms-sample").on("click", ".btn-close", function (e) {
  e.preventDefault();
  $("#rejectpop").addClass("hide");
});

$("#pending-registrtaion").on("click", "#btn-gen-cert", function (e) {
  e.preventDefault();
  let ele = $(this);
  let idx = ele.parents("tr").data("ref");

  let loggedUser = localStorage.getItem("user");
  if (loggedUser == null || loggedUser == "" || !loggedUser) {
    snackbar("You are not logged in");
    return false;
  }

  let user = JSON.parse(loggedUser);

  console.log(user);
  let partners = JSON.parse(localStorage.getItem("partners"));
  let partnerObj = partners[idx];

  $("#certpop #partner-idx").val(partnerObj.id);
  $("#certpop").removeClass("hide");
});

$("#page-single-partner").on("click", "#btn-gen-cert", function (e) {
  e.preventDefault();
  let ele = $(this);
  let idx = ele.parents("tr").data("ref");

  let loggedUser = localStorage.getItem("user");
  if (loggedUser == null || loggedUser == "" || !loggedUser) {
    snackbar("You are not logged in");
    return false;
  }

  let user = JSON.parse(loggedUser);

  //console.log(user);
  let partnerObj = JSON.parse(localStorage.getItem("initpartnerdetails"));

  $("#certpop #partner-idx").val(partnerObj.id);
  $("#certpop").removeClass("hide");
});

$("#certpop #frm-gen-cert").on("submit", function (e) {
  e.preventDefault();
  $("#loader").show();

  let loggedUser = localStorage.getItem("user");
  if (loggedUser == null || loggedUser == "" || !loggedUser) {
    $("#loader").hide();
    snackbar("You are not logged in");
    return false;
  }

  let user = JSON.parse(loggedUser);

  let certdata = {
    partner: $("#partner-idx").val(),
    expdate: $("#expdate").val(),
  };

  let url =
    baseAPIUrl + "/partners/" + certdata.partner + "/generatecertificate";
  console.log(url);
  $.ajax({
    url: url,
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    data: certdata,
    dataType: "json",
    ContentType: "application/json;",
    success: function (data) {
      $("#certpop").addClass("hide");
      $("#loader").hide();
      location.reload();
      //$("#pending-registrtaion .reg-cert-link a").attr("href", data);
      //console.log("in success");
      //console.log(data);
      return;
    },
    error: function (data) {
      $("#loader").hide();
      // console.log("in failure");
      // console.log(data);
      return false;
    },
  });
});

$("#certpop #frm-gen-cert").on("click", ".btn-close", function (e) {
  e.preventDefault();
  $("#certpop").addClass("hide");
});

$(".btn-back").click(function (e) {
  //alert("back clicked");
  e.preventDefault();
  goBack();
});

/***********************/
/* Events binding - Pipeline */
/**********************/

$(".calcPC").on("change", function () {
  triggerCalculatePC();
});

$("#frm-new-pipeline").on("submit", function (e) {
  e.preventDefault();
  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));

  // alert("new pipeline form submitted");
  let formData = new FormData($("#frm-new-pipeline")[0]);
  
  $.ajax({
    url: baseAPIUrl + "/pipeline/store",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    enctype: "multipart/form-data",
    data: formData,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
      $("#loader").hide();
      //console.log("data returned");
      //console.log(data);
      location.href = baseUrl + "pipeline";
      return;
    },
    error: function (data) {
      $("#loader").hide();
      //console.log("in failure");
      //console.log(data);
      //console.log("Errors");
      let errMsg = "";
      if (data.status == 422) {
        let response = JSON.parse(data.responseText);
        errMsg = printErrorObj(response.errors);
      } else {
        errMsg = data.responseText;
      }
      snackbar(errMsg);
      //console.log(errMsg);
      return false;
    },
  });
});

$("#pending-pipelines").on("click", "a.potentialid", function (e) {
  e.preventDefault();
  let pipelineIdx = $(e.target).parents("tr").data("idx");

  fillPipelinePops("pipeline-reviewpop", pipelineIdx);
  $("#pipeline-reviewpop").removeClass("hide");
});

$("#pending-pipelines").on("click", "td.pipeline-reject", function (e) {
  e.preventDefault();
  //alert("pipeline reject clicked");
  var pipeline = $(e.target).parent().parent().data("ref");

  $("#pipe-rejectpop form")[0].reset();
  $("#pipe-rejectpop form #pipelineid").val(pipeline);
  $("#pipe-rejectpop").removeClass("hide");
});

$("#pipe-rejectpop form .btn-close").on("click", function (e) {
  $("#pipe-rejectpop form")[0].reset();
  $("#pipe-rejectpop").addClass("hide");
});

$("#pipe-rejectpop form").on("submit", function (e) {
  e.preventDefault();
  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  let pipeline = $("#pipe-rejectpop form #pipelineid").val();
  let rejectMsg = $("#pipe-rejectpop form #pipe-rejection-msg").val();

  $.ajax({
    url: baseAPIUrl + "/pipelines/" + pipeline + "/reject",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    data: { adminmsg: rejectMsg },
    dataType: "json",
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      $("#loader").hide();
      console.log(data);
      location.reload();
    },
    error: function (data) {
      $("#loader").hide();
      console.log(data);
      console.log(data.status + " - " + data.statusText);
      return false;
    },
  });
});

$("#pending-pipelines").on("click", "td.pipeline-approve", function (e) {
  e.preventDefault();
  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  var pipeline = $(e.target).parent().parent().data("ref");
  $.ajax({
    url: baseAPIUrl + "/pipelines/" + pipeline + "/approve",
    type: "GET",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      $("#loader").hide();
      console.log(data);
      location.reload();
    },
    error: function (data) {
      $("#loader").hide();
      console.log(data);
      console.log(data.status + " - " + data.statusText);
      return false;
    },
  });
});

$("#pending-pipelines").on("click", ".pi-view", function (e) {
  //alert("pi-view clicked");
  e.preventDefault();

  let pipelineIdx = $(e.target).parents("tr").data("idx");

  fillPipelinePops("pipeline-reviewpop", pipelineIdx);
  $("#pipeline-reviewpop").removeClass("hide");
});

$("#pipeline-reviewpop").on("click", ".btn-close", function (e) {
  e.preventDefault();
  $("#pipeline-reviewpop").addClass("hide");
});

$("#pending-pipelines").on("click", ".pi-edit", function (e) {
  //alert("pi-view clicked");
  e.preventDefault();

  let pipelineIdx = $(e.target).parents("tr").data("idx");

  fillPipelineEditPop(pipelineIdx);

  $("#pipeline-editpop").removeClass("hide");
});

$("#pipeline-editpop").on("click", ".btn-close", function (e) {
  e.preventDefault();
  $("#pipeline-editpop").addClass("hide");
});

$("#pipeline-editpop #frm-pipeline-edit").on("submit", function (e) {
  e.preventDefault();
  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  var pipeline = $("#pipeline-editpop #pipeline_id").val();

  let files = $("#pipeline-editpop #opportunity_docs")[0].files;
  for (var i = 0; i < files.length; i++) {
    if (files[i].name.split(".")[1] != "pdf") {
      $("#loader").hide();
      snackbar("Please upload pdf files with size less than 2MB only");
      return false;
    }
  }

  var formData = new FormData($("#frm-pipeline-edit")[0]);

  $.ajax({
    url: baseAPIUrl + "/pipelines/" + pipeline + "/update",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    enctype: "multipart/form-data",
    data: formData,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
      console.log(data);
      $("#loader").hide();
      location.reload();
    },
    error: function (data) {
      console.log(data);
      console.log(data.status + " - " + data.statusText);
      $("#loader").hide();
      return false;
    },
  });
});

/****************************************/
/* Event Bindings - Change Password */
/***************************************/

$("#frm-change-pwd").on("submit", function (e) {
  e.preventDefault();
  $("#loader").show();

  //validate
  if (
    $("#oldpwd").val() == "" ||
    $("#newpwd").val() == "" ||
    $("#confpwd").val() == ""
  ) {
    snackbar("All fields are mandatory");
    $("#loader").hide();

    return false;
  }

  if ($("#oldpwd").val() == $("#newpwd").val()) {
    snackbar("New Password can not be the same as the Old Password.");
    $("#loader").hide();

    return false;
  }

  if ($("#confpwd").val() != $("#newpwd").val()) {
    snackbar("New Password and Re-enter New Password must be same.");
    $("#loader").hide();

    return false;
  }

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  $.ajax({
    url: baseAPIUrl + "/change-password",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    data: $("#frm-change-pwd").serialize(),
    dataType: "json",
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      $("#loader").hide();
      //console.log(data);
      if (data.status === "success") {
        $("#page-change-pwd .info p").html(
          "Your password was updated. Login with the new password here <a href='" +
            baseUrl +
            "login'>Login</a>"
        );
        $("#page-change-pwd .info").removeClass("hide");
      } else {
        snackbar(data.msg);
      }
      //logout();
    },
    error: function (data) {
      $("#loader").hide();
      //console.log(data);
      snackbar(data.statusText);
      console.log(data.status + " - " + data.statusText);
      return false;
    },
  });
});

/***********************/
/* Event Bindings - Dashboard */
/**********************/

$(".btn-getdashboard").click(function (e) {
  e.preventDefault();
  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }
  getDashboard(user);
});

$(".btn-export").click(function (e) {
  // alert("btn export clicked");
  e.preventDefault();
  let exportfilename = $("#page-pipeline-filter h4").html();
  $(".table2excel").table2excel({
    // exclude CSS class
    exclude: ".noExl",
    name: "Pipelines by stage",
    sheetName: exportfilename,
    filename: exportfilename + ".xlsx", //do not include extension
    preserveColors: true,
    //fileext: ".xls", // file extension
  });
});

/***********************/
/* Event Bindings - KC */
/**********************/
$("#is-ext-link").change(function (e) {
  e.preventDefault();
  if ($("#is-ext-link").prop("checked") == true) {
    $("#external-link").css("display", "block");
  } else {
    $("#external-link").css("display", "none");
  }
});

$("#frm-blog-create").submit(function (e) {
  e.preventDefault();

  $("#loader").show();

  //form validations
  //if (!isValidKCBlogCreateForm()) {
  //  return false;
  //}

  if (
    $("#is-ext-link").prop("checked") == true &&
    $("#external-link").val().trim() == ""
  ) {
    $("#loader").hide();
    snackbar("Please mention the external link");
    return false;
  }

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  var formData = new FormData($("#frm-blog-create")[0]);
  formData.append(
    "blog_short_desc",
    CKEDITOR.instances["blog-short-desc"].getData()
  );
  formData.append("blog_desc", CKEDITOR.instances["blog-desc"].getData());

  $.ajax({
    url: baseAPIUrl + "/blog/create",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    enctype: "multipart/form-data",
    data: formData,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
      console.log(data);
      $("#loader").hide();
      location.href = baseUrl + "blogs/listing";
    },
    error: function (data) {
      console.log(data);
      console.log(data.status + " - " + data.statusText);
      $("#loader").hide();
      return false;
    },
  });
});

$("#table-kc-blogs").on("click", ".pi-delete", function (e) {
  e.preventDefault();
  $rowcnt = $(e.target).parents("tr").data("rowcnt");

  if (!confirm("Are you sure you want to delete the blog?")) {
    $("#loader").hide();
    return false;
  }

  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let bloglisting = JSON.parse(localStorage.getItem("bloglisting"));
  if (bloglisting == null) {
    return false;
  }

  let dataRow = bloglisting[$rowcnt];

  $.ajax({
    url: baseAPIUrl + "/blog/" + dataRow.id + "/delete",
    type: "GET",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    success: function (data) {
      //console.log(data);
      $("#loader").hide();
      location.reload();
    },
    error: function (data) {
      //console.log(data);
      console.log(data.status + " - " + data.statusText);
      $("#loader").hide();
      return false;
    },
  });
});

$("#table-kc-blogs").on("click", ".pi-activate", function (e) {
  e.preventDefault();
  $rowcnt = $(e.target).parents("tr").data("rowcnt");

  if (!confirm("Are you sure you want to activate the blog?")) {
    $("#loader").hide();
    return false;
  }

  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let bloglisting = JSON.parse(localStorage.getItem("bloglisting"));
  if (bloglisting == null) {
    return false;
  }

  let dataRow = bloglisting[$rowcnt];

  $.ajax({
    url: baseAPIUrl + "/blog/" + dataRow.id + "/activate",
    type: "GET",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    success: function (data) {
      //console.log(data);
      $("#loader").hide();
      location.reload();
    },
    error: function (data) {
      //console.log(data);
      console.log(data.status + " - " + data.statusText);
      $("#loader").hide();
      return false;
    },
  });
});

$("#table-kc-blogs").on("click", ".pi-edit", function (e) {
  e.preventDefault();
  $rowcnt = $(e.target).parents("tr").data("rowcnt");
  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let bloglisting = JSON.parse(localStorage.getItem("bloglisting"));
  if (bloglisting == null) {
    return false;
  }

  let dataRow = bloglisting[$rowcnt];

  populateBlogEditPopup(dataRow);

  $("#editpop #blog-ref").val(dataRow.id);
  $("#editpop").removeClass("hide");
  $("#loader").hide();
});

$("#frm-blog-edit").submit(function (e) {
  e.preventDefault();
  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let blog_ref = $("#editpop #blog-ref").val();

  var formData = new FormData($("#frm-blog-edit")[0]);
  formData.append(
    "blog_short_desc",
    CKEDITOR.instances["blog-short-desc"].getData()
  );
  formData.append("blog_desc", CKEDITOR.instances["blog-desc"].getData());
  //alert(baseAPIUrl + "/blog/" + blog_ref + "/edit");
  $.ajax({
    url: baseAPIUrl + "/blog/" + blog_ref + "/edit",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    enctype: "multipart/form-data",
    data: formData,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
      console.log(data);
      $("#loader").hide();
      location.href = baseUrl + "blogs/listing";
    },
    error: function (data) {
      console.log(data);
      console.log(data.status + " - " + data.statusText);
      $("#loader").hide();
      return false;
    },
  });
});

$("#frm-kccs-create").submit(function (e) {
  e.preventDefault();

  $("#loader").show();

  //form validations
  //if (!isValidKCBlogCreateForm()) {
  //  return false;
  //}

  if (
    $("#is-ext-link").prop("checked") == true &&
    $("#external-link").val().trim() == ""
  ) {
    $("#loader").hide();
    snackbar("Please mention the external link");
    return false;
  }

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  var formData = new FormData($("#frm-kccs-create")[0]);
  formData.append(
    "kccs_short_desc",
    CKEDITOR.instances["kccs-short-desc"].getData()
  );

  $.ajax({
    url: baseAPIUrl + "/casestudy/create",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    enctype: "multipart/form-data",
    data: formData,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
      console.log(data);
      $("#loader").hide();
      location.href = baseUrl + "case-studies/listing";
    },
    error: function (e) {
/*
      console.log(data);
      console.log(data.status + " - " + data.statusText);
      $("#loader").hide();
      return false;
*/

	responseText = e.responseText;
      console.log(responseText);
      let errors = JSON.parse(responseText).errors;
      let errMsg = "";
      Object.keys(errors).forEach((key) => {
        errMsg += errors[key].join();
      });
	$("#loader").hide();

      snackbar(errMsg);
      return false;
    },
  });
});

$("#table-kc-cs").on("click", ".pi-delete", function (e) {
  e.preventDefault();
  $rowcnt = $(e.target).parents("tr").data("rowcnt");

  if (!confirm("Are you sure you want to delete the Case study?")) {
    $("#loader").hide();
    return false;
  }

  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let kccslisting = JSON.parse(localStorage.getItem("kccslisting"));
  if (kccslisting == null) {
    return false;
  }

  let dataRow = kccslisting[$rowcnt];

  $.ajax({
    url: baseAPIUrl + "/casestudy/" + dataRow.id + "/delete",
    type: "GET",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    success: function (data) {
      //console.log(data);
      $("#loader").hide();
      location.reload();
    },
    error: function (data) {
      //console.log(data);
      console.log(data.status + " - " + data.statusText);
      $("#loader").hide();
      return false;
    },
  });
});

$("#table-kc-cs").on("click", ".pi-activate", function (e) {
  e.preventDefault();
  $rowcnt = $(e.target).parents("tr").data("rowcnt");

  if (!confirm("Are you sure you want to activate the case study?")) {
    $("#loader").hide();
    return false;
  }

  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let kccslisting = JSON.parse(localStorage.getItem("kccslisting"));
  if (kccslisting == null) {
    return false;
  }

  let dataRow = kccslisting[$rowcnt];

  $.ajax({
    url: baseAPIUrl + "/casestudy/" + dataRow.id + "/activate",
    type: "GET",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    success: function (data) {
      //console.log(data);
      $("#loader").hide();
      location.reload();
    },
    error: function (data) {
      //console.log(data);
      console.log(data.status + " - " + data.statusText);
      $("#loader").hide();
      return false;
    },
  });
});

$("#table-kc-cs").on("click", ".pi-edit", function (e) {
  e.preventDefault();
  $rowcnt = $(e.target).parents("tr").data("rowcnt");
  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let kccslisting = JSON.parse(localStorage.getItem("kccslisting"));
  if (kccslisting == null) {
    return false;
  }

  let dataRow = kccslisting[$rowcnt];

  populateKCCSEditPopup(dataRow);

  $("#editpop #cs-ref").val(dataRow.id);
  $("#editpop").removeClass("hide");
  $("#loader").hide();
});

$("#frm-cs-edit").submit(function (e) {
  e.preventDefault();

  $("#loader").show();
  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }
  let cs_ref = $("#editpop #cs-ref").val();

  var formData = new FormData($("#frm-cs-edit")[0]);
  formData.append(
    "kccs-short-desc",
    CKEDITOR.instances["kccs-short-desc"].getData()
  );

  $.ajax({
    url: baseAPIUrl + "/casestudy/" + cs_ref + "/edit",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    enctype: "multipart/form-data",
    data: formData,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
      console.log(data);
      $("#loader").hide();
      location.href = baseUrl + "case-studies/listing";
    },
    error: function (data) {
      console.log(data);
      console.log(data.status + " - " + data.statusText);
      $("#loader").hide();
      return false;
    },
  });
});

$("#frm-video-create").submit(function (e) {
  e.preventDefault();

  $("#loader").show();

  //form validations
  if ($("#kccs-vid-title").val().trim() == "") {
    $("#loader").hide();
    snackbar("Please enter video title");
    return false;
  }

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  var formData = new FormData($("#frm-video-create")[0]);

  $.ajax({
    url: baseAPIUrl + "/video/create",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    enctype: "multipart/form-data",
    data: formData,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
            //console.log(data);
      $("#loader").hide();
      //data = JSON.parse(data);
      if (data.status == "error") {
        snackbar(data.msg);
      } else {
        location.href = baseUrl + "videos/listing";
      }
    },
    error: function (data) {
      // console.log(data);
      //console.log(data.status + " - " + data.statusText);
      $("#loader").hide();

      responseText = data.responseText;
      console.log("in error " + responseText);
      let errors = JSON.parse(responseText).errors;
      let errMsg = "";
      Object.keys(errors).forEach((key) => {
        errMsg += errors[key].join();
      });

      snackbar(errMsg);
      return false;
    },
  });
});

$("#frm-training-create").submit(function (e) {
  e.preventDefault();

  $("#loader").show();

  //form validations
  if ($("#training-title").val().trim() == "") {
    $("#loader").hide();
    snackbar("Please enter training title");
    return false;
  }
  if ($("#training-date").val().trim() == "") {
    $("#loader").hide();
    snackbar("Please enter training date");
    return false;
  }
  if ($("#training-st-time").val().trim() == "") {
    $("#loader").hide();
    snackbar("Please enter training start time");
    return false;
  }

  let training_content = CKEDITOR.instances["training-content"]
    .getData()
    .trim();

  if (training_content == "") {
    $("#loader").hide();
    snackbar("Please enter the training content");
    return false;
  }

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  var formData = new FormData($("#frm-training-create")[0]);
  formData.append("training_content", training_content);

  $.ajax({
    url: baseAPIUrl + "/training/create",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    enctype: "multipart/form-data",
    data: formData,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
      console.log(data);
      $("#loader").hide();
      //location.href = baseUrl + "trainings/listing";
    },
    error: function (data) {
      console.log(data);
      console.log(data.status + " - " + data.statusText);
      $("#loader").hide();
      return false;
    },
  });
});

$("#table-kc-trainings").on("click", ".pi-delete", function (e) {
  e.preventDefault();
  $rowcnt = $(e.target).parents("tr").data("rowcnt");

  if (!confirm("Are you sure you want to delete the Training item?")) {
    return false;
  }

  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let kctraininglisting = JSON.parse(localStorage.getItem("kctraininglisting"));
  if (kctraininglisting == null) {
    return false;
  }

  let dataRow = kctraininglisting[$rowcnt];

  $.ajax({
    url: baseAPIUrl + "/training/" + dataRow.id + "/delete",
    type: "GET",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    success: function (data) {
      //console.log(data);
      $("#loader").hide();
      location.reload();
    },
    error: function (data) {
      //console.log(data);
      console.log(data.status + " - " + data.statusText);
      $("#loader").hide();
      return false;
    },
  });
});

$("#table-kc-trainings").on("click", ".pi-activate", function (e) {
  e.preventDefault();
  $rowcnt = $(e.target).parents("tr").data("rowcnt");

  if (!confirm("Are you sure you want to activate the training item?")) {
    $("#loader").hide();
    return false;
  }

  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let kctraininglisting = JSON.parse(localStorage.getItem("kctraininglisting"));
  if (kctraininglisting == null) {
    return false;
  }

  let dataRow = kctraininglisting[$rowcnt];

  $.ajax({
    url: baseAPIUrl + "/training/" + dataRow.id + "/activate",
    type: "GET",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    success: function (data) {
      //console.log(data);
      $("#loader").hide();
      location.reload();
    },
    error: function (data) {
      //console.log(data);
      console.log(data.status + " - " + data.statusText);
      $("#loader").hide();
      return false;
    },
  });
});

$("#table-kc-trainings").on("click", ".pi-edit", function (e) {
  e.preventDefault();
  $rowcnt = $(e.target).parents("tr").data("rowcnt");
  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let kctraininglisting = JSON.parse(localStorage.getItem("kctraininglisting"));
  if (kctraininglisting == null) {
    return false;
  }

  let dataRow = kctraininglisting[$rowcnt];

  populateKCTrainingEditPopup(dataRow);

  $("#editpop #training-ref").val(dataRow.id);
  $("#editpop").removeClass("hide");
  $("#loader").hide();
});

$("#frm-training-edit").submit(function (e) {
  e.preventDefault();

  $("#loader").show();
  let training_ref = $("#editpop #training-ref").val();
  let training_content = CKEDITOR.instances["training-content"].getData();
  //form validations
  if ($("#frm-training-edit #training-title").val().trim() == "") {
    $("#loader").hide();
    snackbar("Please enter training title");
    return false;
  }

  if ($("#frm-training-edit #training-date").val().trim() == "") {
    $("#loader").hide();
    snackbar("Please enter training date");
    return false;
  }

  if ($("#frm-training-edit #training-st-time").val().trim() == "") {
    $("#loader").hide();
    snackbar("Please enter training start time");
    return false;
  }

  if (training_content.trim() == "") {
    $("#loader").hide();
    snackbar("Please enter training content");
    return false;
  }

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  var formData = new FormData($("#frm-training-edit")[0]);
  formData.append("training_content", training_content);

  $.ajax({
    url: baseAPIUrl + "/training/" + training_ref + "/edit",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    enctype: "multipart/form-data",
    data: formData,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
      console.log(data);
      $("#loader").hide();
      location.href = baseUrl + "trainings/listing";
    },
    error: function (data) {
      console.log(data);
      console.log(data.status + " - " + data.statusText);
      $("#loader").hide();
      return false;
    },
  });
});


$("#frm-event-create").submit(function (e) {
  e.preventDefault();

  $("#loader").show();

  //form validations
  if ($("#event-title").val().trim() == "") {
    $("#loader").hide();
    snackbar("Please enter event title");
    return false;
  }
  if ($("#event-date").val().trim() == "") {
    $("#loader").hide();
    snackbar("Please enter event date");
    return false;
  }
  if ($("#event-st-time").val().trim() == "") {
    $("#loader").hide();
    snackbar("Please enter event start time");
    return false;
  }

  let event_content = CKEDITOR.instances["event-content"].getData().trim();

  if (event_content == "") {
    $("#loader").hide();
    snackbar("Please enter the event content");
    return false;
  }

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  var formData = new FormData($("#frm-event-create")[0]);
  formData.append("event_content", event_content);

  $.ajax({
    url: baseAPIUrl + "/event/create",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    enctype: "multipart/form-data",
    data: formData,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
      console.log(data);
      $("#loader").hide();
      location.href = baseUrl + "events/listing";
    },
    error: function (data) {
      console.log(data);
      console.log(data.status + " - " + data.statusText);
      $("#loader").hide();
      return false;
    },
  });
});

$("#table-kc-events").on("click", ".pi-delete", function (e) {
  e.preventDefault();
  $rowcnt = $(e.target).parents("tr").data("rowcnt");

  if (!confirm("Are you sure you want to delete the Event item?")) {
    return false;
  }

  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let kceventlisting = JSON.parse(localStorage.getItem("kceventlisting"));
  if (kceventlisting == null) {
    return false;
  }

  let dataRow = kceventlisting[$rowcnt];

  $.ajax({
    url: baseAPIUrl + "/event/" + dataRow.id + "/delete",
    type: "GET",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    success: function (data) {
      //console.log(data);
      $("#loader").hide();
      location.reload();
    },
    error: function (data) {
      //console.log(data);
      console.log(data.status + " - " + data.statusText);
      $("#loader").hide();
      return false;
    },
  });
});

$("#table-kc-events").on("click", ".pi-activate", function (e) {
  e.preventDefault();
  $rowcnt = $(e.target).parents("tr").data("rowcnt");

  if (!confirm("Are you sure you want to activate the event item?")) {
    $("#loader").hide();
    return false;
  }

  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let kceventlisting = JSON.parse(localStorage.getItem("kceventlisting"));
  if (kceventlisting == null) {
    return false;
  }

  let dataRow = kceventlisting[$rowcnt];

  $.ajax({
    url: baseAPIUrl + "/event/" + dataRow.id + "/activate",
    type: "GET",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    success: function (data) {
      //console.log(data);
      $("#loader").hide();
      location.reload();
    },
    error: function (data) {
      //console.log(data);
      console.log(data.status + " - " + data.statusText);
      $("#loader").hide();
      return false;
    },
  });
});

$("#table-kc-events").on("click", ".pi-edit", function (e) {
  e.preventDefault();
  $rowcnt = $(e.target).parents("tr").data("rowcnt");
  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let kceventlisting = JSON.parse(localStorage.getItem("kceventlisting"));
  if (kceventlisting == null) {
    return false;
  }

  let dataRow = kceventlisting[$rowcnt];

  populateKCEventEditPopup(dataRow);

  $("#editpop #event-ref").val(dataRow.id);
  $("#editpop").removeClass("hide");
  $("#loader").hide();
});

$("#frm-event-edit").submit(function (e) {
  e.preventDefault();

  $("#loader").show();
  let event_ref = $("#editpop #event-ref").val();
  let event_content = CKEDITOR.instances["event-content"].getData();
  //form validations
  if ($("#frm-event-edit #event-title").val().trim() == "") {
    $("#loader").hide();
    snackbar("Please enter Event title");
    return false;
  }

  if ($("#frm-event-edit #event-date").val().trim() == "") {
    $("#loader").hide();
    snackbar("Please enter event date");
    return false;
  }

  if ($("#frm-event-edit #event-st-time").val().trim() == "") {
    $("#loader").hide();
    snackbar("Please enter event start time");
    return false;
  }

  if (event_content.trim() == "") {
    $("#loader").hide();
    snackbar("Please enter event content");
    return false;
  }

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  var formData = new FormData($("#frm-event-edit")[0]);
  formData.append("event_content", event_content);

  $.ajax({
    url: baseAPIUrl + "/event/" + event_ref + "/edit",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    enctype: "multipart/form-data",
    data: formData,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
      console.log(data);
      $("#loader").hide();
      location.href = baseUrl + "events/listing";
    },
    error: function (data) {
      console.log(data);
      console.log(data.status + " - " + data.statusText);
      $("#loader").hide();
      return false;
    },
  });
});

/***********************/
/* Event Bindings - GTM */
/**********************/

$("#frm-gtm-fund-req").submit(function (e) {
  e.preventDefault();
  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  var formData = new FormData($("#frm-gtm-fund-req")[0]);
  $.ajax({
    type: "POST",
    url: baseAPIUrl + "/gtmfundrequest/store",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + user.token,
    },
    cache: false,
    timeout: 800000,
    enctype: "multipart/form-data",
    data: formData,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
      //console.log(data);
      $("#loader").hide();
      location.href = baseUrl + "gtm/fund-requests/";
      console.log("SUCCESS : ", data);
    },
    error: function (e) {
      $("#loader").hide();
      //$("#approvepop").addClass("hide");
      responseText = e.responseText;
      //console.log(responseText);
      let errors = JSON.parse(responseText).errors;
      let errMsg = "";
      Object.keys(errors).forEach((key) => {
        errMsg += errors[key].join();
      });

      snackbar(errMsg);
    },
  });
});

$("#gtm-fund-requests").on("click", ".btn-view", function (e) {
  e.preventDefault();

  $rowcnt = $(e.target).parents("tr").data("rowcnt");

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let gtmfundrequests = JSON.parse(localStorage.getItem("gtmfundrequests"));
  if (gtmfundrequests == null) {
    return false;
  }

  let dataRow = gtmfundrequests[$rowcnt];

  //fillGTMFundRaiseItemPop("reviewpop", dataRow);
  fillGTMFundRequestReviewPop(dataRow);

  let cta_perm_ele = $("#page-gtm-fr #reviewpop .cta-permissions");
  let btnApprove = $("#page-gtm-fr #reviewpop .cta-permissions .btn-approve");
  let btnReject = $("#page-gtm-fr #reviewpop .cta-permissions .btn-reject");

  if (user.type == USER_ADMIN_TYPE) {
    if (cta_perm_ele.hasClass("hide")) {
      cta_perm_ele.removeClass("hide");
    }

    if (dataRow["status"] === APPROVED_STATE) {
      btnApprove.prop("disabled", true);
      btnApprove.removeClass("btn-success");
      btnApprove.addClass("btn-secondary");
    } else if (dataRow["status"] === REJECTED_STATE) {
      btnApprove.prop("disabled", true);
      btnApprove.removeClass("btn-success");
      btnApprove.addClass("btn-secondary");

      btnReject.prop("disabled", true);
      btnReject.removeClass("btn-danger");
      btnReject.addClass("btn-secondary");
    } else {
      btnApprove.prop("disabled", false);
      btnApprove.addClass("btn-success");
      btnApprove.removeClass("btn-secondary");

      btnReject.prop("disabled", false);
      btnReject.addClass("btn-danger");
      btnReject.removeClass("btn-secondary");
    }
  } else {
    if (!cta_perm_ele.hasClass("hide")) {
      cta_perm_ele.addClass("hide");
    }
  }

  $("#reviewpop").removeClass("hide");
});

$("#gtm-fund-requests").on("click", ".btn-edit", function (e) {
  e.preventDefault();

  $rowcnt = $(e.target).parents("tr").data("rowcnt");

  let gtmfundrequests = JSON.parse(localStorage.getItem("gtmfundrequests"));
  if (gtmfundrequests == null) {
    return false;
  }

  let dataRow = gtmfundrequests[$rowcnt];

  //fillGTMFundRaiseItemPop("editpop", dataRow);
  fillGTMFundRequestEditPop(dataRow);
  $("#editpop").removeClass("hide");
});

$("#gtm-fund-requests").on("click", ".btn-del", function (e) {
  e.preventDefault();

  $rowcnt = $(e.target).parents("tr").data("rowcnt");
  if (!confirm("Are you sure you want to delete the GTM Fund Request?")) {
    return false;
  }

  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let gtmfundrequests = JSON.parse(localStorage.getItem("gtmfundrequests"));
  if (gtmfundrequests == null) {
    return false;
  }

  let dataRow = gtmfundrequests[$rowcnt];

  $.ajax({
    url: baseAPIUrl + "/gtmfundrequest/" + dataRow.id + "/delete",
    type: "GET",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
      $("#loader").hide();
      console.log(data);
      if (data.status === "error") {
        snackbar(data.msg);
        return;
      } else {
        location.href = baseUrl + "gtm/fund-requests/";
      }
    },
    error: function (data) {
      $("#loader").hide();
      console.log(data);
      snackbar(data.statusText);
      console.log(data.status + " - " + data.statusText);
      return false;
    },
  });
});

$("#frm-fund-request-edit").on("submit", function (e) {
  e.preventDefault();
  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }
  let itemNo = $("#frm-fund-request-edit #fund-req-id").val();
  let formData = new FormData($("#frm-fund-request-edit")[0]);
  $.ajax({
    url: baseAPIUrl + "/gtmfundrequest/" + itemNo + "/update",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    enctype: "multipart/form-data",
    data: formData,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
      $("#loader").hide();
      console.log(data);
      if (data.status === "error") {
        snackbar(data.msg);
        return;
      } else {
        location.href = baseUrl + "gtm/fund-requests/";
      }
    },
    error: function (data) {
      $("#loader").hide();
      console.log(data);
      snackbar(data.statusText);
      console.log(data.status + " - " + data.statusText);
      return false;
    },
  });

  //alert("edit form submitted");
});

/*
$("#editpop").on("click", ".btn-view", function (e) {
  e.preventDefault();

  $rowcnt = $("#reviewpop #row-cnt").val();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }
  $.ajax({
    url: baseAPIUrl + "/gtmfundrequest/" + dataRow.id + "/approve",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      $("#loader").hide();
      //console.log(data);
      if (data.status === "error") {
        snackbar(data.msg);
        return false;
      } else {
        location.reload();
        return false;
      }
    },
    error: function (data) {
      $("#loader").hide();
      //console.log(data);
      snackbar(data.statusText);
      console.log(data.status + " - " + data.statusText);
      return false;
    },
  });
});
*/
$("#page-gtm-fr #reviewpop").on("click", ".btn-approve", function (e) {
  e.preventDefault();
  if (!confirm("Are you sure you want to approve the GTM Fund Request?")) {
    return false;
  }

  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let dataRow = {};
  dataRow.id = $("#page-gtm-fr #reviewpop #row-cnt").val();

  $.ajax({
    url: baseAPIUrl + "/gtmfundrequest/" + dataRow.id + "/approve",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      $("#loader").hide();
      //console.log(data);
      if (data.status === "error") {
        snackbar(data.msg);
        return false;
      } else {
        location.reload();
        return false;
      }
    },
    error: function (data) {
      $("#loader").hide();
      //console.log(data);
      snackbar(data.statusText);
      console.log(data.status + " - " + data.statusText);
      return false;
    },
  });
});

$("#gtm-fund-requests").on("click", ".btn-approve", function (e) {
  e.preventDefault();
  if (!confirm("Are you sure you want to approve the GTM Fund Request?")) {
    return false;
  }

  $("#loader").show();

  $rowcnt = $(e.target).parents("tr").data("rowcnt");

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let gtmfundrequests = JSON.parse(localStorage.getItem("gtmfundrequests"));
  if (gtmfundrequests == null) {
    return false;
  }

  let dataRow = gtmfundrequests[$rowcnt];

  $.ajax({
    url: baseAPIUrl + "/gtmfundrequest/" + dataRow.id + "/approve",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      $("#loader").hide();
      //console.log(data);
      if (data.status === "error") {
        snackbar(data.msg);
        return false;
      } else {
        location.reload();
        return false;
      }
    },
    error: function (data) {
      $("#loader").hide();
      //console.log(data);
      snackbar(data.statusText);
      console.log(data.status + " - " + data.statusText);
      return false;
    },
  });
});

$("#page-gtm-fr #reviewpop").on("click", ".btn-reject", function (e) {
  e.preventDefault();

  let dataRow = {};
  dataRow.id = $("#page-gtm-fr #reviewpop #row-cnt").val();

  $("#frm-fr-reject-conf")[0].reset();
  $("#frm-fr-reject-conf #frid").val(dataRow.id);
  $("#fr-rejectpop").removeClass("hide");
});

$("#gtm-fund-requests").on("click", ".btn-reject", function (e) {
  e.preventDefault();

  $rowcnt = $(e.target).parents("tr").data("rowcnt");
  let gtmfundrequests = JSON.parse(localStorage.getItem("gtmfundrequests"));
  if (gtmfundrequests == null) {
    return false;
  }
  let dataRow = gtmfundrequests[$rowcnt];

  $("#frm-fr-reject-conf")[0].reset();
  $("#frm-fr-reject-conf #frid").val(dataRow.id);
  $("#fr-rejectpop").removeClass("hide");

  /*
  $rowcnt = $(e.target).parents("tr").data("rowcnt");

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let gtmfundrequests = JSON.parse(localStorage.getItem("gtmfundrequests"));
  if (gtmfundrequests == null) {
    return false;
  }

  let dataRow = gtmfundrequests[$rowcnt];
  //alert(dataRow.id);
  $.ajax({
    url: baseAPIUrl + "/gtmfundrequest/" + dataRow.id + "/reject",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      $("#loader").hide();
      //console.log(data);
      if (data.status === "error") {
        snackbar(data.msg);
        return false;
      } else {
        location.reload();
        return false;
      }
    },
    error: function (data) {
      $("#loader").hide();
      //console.log(data);
      snackbar(data.statusText);
      console.log(data.status + " - " + data.statusText);
      return false;
    },
  });
  */
});

$("#frm-fr-reject-conf").on("submit", function (e) {
  e.preventDefault();
  $("#loader").show();
  //alert("btn-reject clicked");

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let dataRow = {};
  dataRow.id = $("#frm-fr-reject-conf #frid").val();
  //let formData = new FormData($("#frm-je-reject-conf")[0]);
  let rejectMsg = $("#frm-fr-reject-conf #fr-rejection-msg").val();
  let formData = { fr_rejection_msg: rejectMsg };

  $.ajax({
    url: baseAPIUrl + "/gtmfundrequest/" + dataRow.id + "/reject",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    data: formData,
    dataType: "json",
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      $("#loader").hide();
      // console.log(data);
      if (data.status === "error") {
        snackbar(data.msg);
        return false;
      } else {
        location.reload();
        return false;
      }
    },
    error: function (data) {
      $("#loader").hide();
      //console.log(data);
      snackbar(data.statusText);
      console.log(data.status + " - " + data.statusText);
      return false;
    },
  });
});

/************Collaterals*************** */
$("#frm-gtm-collateral-req").submit(function (e) {
  e.preventDefault();
  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  var formData = new FormData($("#frm-gtm-collateral-req")[0]);
  $.ajax({
    type: "POST",
    url: baseAPIUrl + "/gtmcollateralrequest/store",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + user.token,
    },
    cache: false,
    timeout: 800000,
    enctype: "multipart/form-data",
    data: formData,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
      console.log(data);
      $("#loader").hide();
      location.href = baseUrl + "gtm/joint-media-collateral/";
      console.log("SUCCESS : ", data);
    },
    error: function (e) {
      $("#loader").hide();
      //$("#approvepop").addClass("hide");
      responseText = e.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
    },
  });
});

$("#gtm-media-collateral-requests").on("click", ".btn-view", function (e) {
  e.preventDefault();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  $rowcnt = $(e.target).parents("tr").data("rowcnt");

  let gtmmediacollateralrequests = JSON.parse(
    localStorage.getItem("gtmmediacollateralrequests")
  );
  if (gtmmediacollateralrequests == null) {
    return false;
  }

  let dataRow = gtmmediacollateralrequests[$rowcnt];

  fillGTMCollateralReqReviewPop(dataRow);

  let cta_perm_ele = $(
    "#page-gtm-media-collateral #reviewpop .cta-permissions"
  );
  let btnApprove = $(
    "#page-gtm-media-collateral #reviewpop .cta-permissions .btn-approve"
  );
  let btnReject = $(
    "#page-gtm-media-collateral #reviewpop .cta-permissions .btn-reject"
  );

  if (user.type == USER_ADMIN_TYPE) {
    if (cta_perm_ele.hasClass("hide")) {
      cta_perm_ele.removeClass("hide");
    }

    if (dataRow["status"] === APPROVED_STATE) {
      btnApprove.prop("disabled", true);
      btnApprove.removeClass("btn-success");
      btnApprove.addClass("btn-secondary");
    } else if (dataRow["status"] === REJECTED_STATE) {
      btnApprove.prop("disabled", true);
      btnApprove.removeClass("btn-success");
      btnApprove.addClass("btn-secondary");

      btnReject.prop("disabled", true);
      btnReject.removeClass("btn-danger");
      btnReject.addClass("btn-secondary");
    } else {
      btnApprove.prop("disabled", false);
      btnApprove.addClass("btn-success");
      btnApprove.removeClass("btn-secondary");

      btnReject.prop("disabled", false);
      btnReject.addClass("btn-danger");
      btnReject.removeClass("btn-secondary");
    }
  } else {
    if (!cta_perm_ele.hasClass("hide")) {
      cta_perm_ele.addClass("hide");
    }
  }

  $("#reviewpop").removeClass("hide");
});

$("#gtm-media-collateral-requests").on("click", ".btn-edit", function (e) {
  e.preventDefault();

  $rowcnt = $(e.target).parents("tr").data("rowcnt");

  let gtmmediacollateralrequests = JSON.parse(
    localStorage.getItem("gtmmediacollateralrequests")
  );
  if (gtmmediacollateralrequests == null) {
    return false;
  }

  let dataRow = gtmmediacollateralrequests[$rowcnt];

  fillGTMCollateralReqEditPop(dataRow);
  $("#editpop").removeClass("hide");
});

$("#gtm-media-collateral-requests").on("click", ".btn-del", function (e) {
  e.preventDefault();

  $rowcnt = $(e.target).parents("tr").data("rowcnt");
  if (
    !confirm(
      "Are you sure you want to delete the Joint Media Collateral Request?"
    )
  ) {
    return false;
  }

  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let gtmfundrequests = JSON.parse(
    localStorage.getItem("gtmmediacollateralrequests")
  );
  if (gtmfundrequests == null) {
    return false;
  }

  let dataRow = gtmfundrequests[$rowcnt];

  $.ajax({
    url: baseAPIUrl + "/gtmcollateralrequest/" + dataRow.id + "/delete",
    type: "GET",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
      $("#loader").hide();
      console.log(data);
      if (data.status === "error") {
        snackbar(data.msg);
        return;
      } else {
        location.href = baseUrl + "gtm/joint-media-collateral/";
      }
    },
    error: function (data) {
      $("#loader").hide();
      console.log(data);
      snackbar(data.statusText);
      console.log(data.status + " - " + data.statusText);
      return false;
    },
  });
});

$("#frm-jm-collateral-edit").on("submit", function (e) {
  e.preventDefault();
  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let itemNo = $("#frm-jm-collateral-edit #jm-collateral-req-id").val();
  let formData = new FormData($("#frm-jm-collateral-edit")[0]);
  $.ajax({
    url: baseAPIUrl + "/gtmcollateralrequest/" + itemNo + "/update",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    enctype: "multipart/form-data",
    data: formData,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
      $("#loader").hide();
      console.log(data);
      if (data.status === "error") {
        snackbar(data.msg);
        return;
      } else {
        location.href = baseUrl + "gtm/joint-media-collateral/";
      }
    },
    error: function (data) {
      $("#loader").hide();
      console.log(data);
      snackbar(data.statusText);
      console.log(data.status + " - " + data.statusText);
      return false;
    },
  });
});

$("#page-gtm-media-collateral #reviewpop").on(
  "click",
  ".btn-approve",
  function (e) {
    e.preventDefault();
    if (!confirm("Are you sure you want to approve the Joint Media Collateral Request?")) {
      return false;
    }

    $("#loader").show();

    let user = JSON.parse(localStorage.getItem("user"));
    if (user === "undefined" || user == "") {
      $("#loader").hide();
      location.href = baseUrl + "login";
      return false;
    }

    let dataRow = {};
    dataRow.id = $("#page-gtm-media-collateral #reviewpop #row-cnt").val();

    $.ajax({
      url: baseAPIUrl + "/gtmcollateralrequest/" + dataRow.id + "/approve",
      type: "POST",
      headers: {
        Authorization: "Bearer " + user.token,
      },
      crossDomain: true,
      dataType: "json",
      ContentType: "application/json; charset=utf-8",
      success: function (data) {
        $("#loader").hide();
        //console.log(data);
        if (data.status === "error") {
          snackbar(data.msg);
          return false;
        } else {
          location.reload();
          return false;
        }
      },
      error: function (data) {
        $("#loader").hide();
        //console.log(data);
        snackbar(data.statusText);
        console.log(data.status + " - " + data.statusText);
        return false;
      },
    });
  }
);

$("#gtm-media-collateral-requests").on("click", ".btn-approve", function (e) {
  e.preventDefault();
  if (
    !confirm(
      "Are you sure you want to approve the Joint Media Collateral Request?"
    )
  ) {
    return false;
  }

  $("#loader").show();

  $rowcnt = $(e.target).parents("tr").data("rowcnt");

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let gtmmediacollateralrequests = JSON.parse(
    localStorage.getItem("gtmmediacollateralrequests")
  );
  if (gtmmediacollateralrequests == null) {
    return false;
  }

  let dataRow = gtmmediacollateralrequests[$rowcnt];

  $.ajax({
    url: baseAPIUrl + "/gtmcollateralrequest/" + dataRow.id + "/approve",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      $("#loader").hide();
      //console.log(data);
      if (data.status === "error") {
        snackbar(data.msg);
        return false;
      } else {
        location.reload();
        return false;
      }
    },
    error: function (data) {
      $("#loader").hide();
      //console.log(data);
      snackbar(data.statusText);
      console.log(data.status + " - " + data.statusText);
      return false;
    },
  });
});

$("#page-gtm-media-collateral #reviewpop").on(
  "click",
  ".btn-reject",
  function (e) {
    e.preventDefault();
    $("#loader").show();

    let user = JSON.parse(localStorage.getItem("user"));
    if (user === "undefined" || user == "") {
      $("#loader").hide();
      location.href = baseUrl + "login";
      return false;
    }

    let dataRow = {};
    dataRow.id = $("#page-gtm-media-collateral #reviewpop #row-cnt").val();

    $("#frm-collateral-reject-conf")[0].reset();
    $("#frm-collateral-reject-conf #collateralid").val(dataRow.id);
    $("#collateral-rejectpop").removeClass("hide");
    $("#loader").hide();
  }
);

$("#gtm-media-collateral-requests").on("click", ".btn-reject", function (e) {
  e.preventDefault();

  $rowcnt = $(e.target).parents("tr").data("rowcnt");
  let gtmmediacollateralrequests = JSON.parse(
    localStorage.getItem("gtmmediacollateralrequests")
  );
  if (gtmmediacollateralrequests == null) {
    return false;
  }
  let dataRow = gtmmediacollateralrequests[$rowcnt];
  $("#frm-collateral-reject-conf")[0].reset();
  $("#frm-collateral-reject-conf #collateralid").val(dataRow.id);
  $("#collateral-rejectpop").removeClass("hide");
});

$("#frm-collateral-reject-conf").on("submit", function (e) {
  e.preventDefault();
  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let dataRow = {};
  dataRow.id = $("#frm-collateral-reject-conf #collateralid").val();
  //let formData = new FormData($("#frm-je-reject-conf")[0]);
  let rejectMsg = $(
    "#frm-collateral-reject-conf #collateral-rejection-msg"
  ).val();
  let formData = { collateral_rejection_msg: rejectMsg };

  $.ajax({
    url: baseAPIUrl + "/gtmcollateralrequest/" + dataRow.id + "/reject",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    data: formData,
    dataType: "json",
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      $("#loader").hide();
      // console.log(data);
      if (data.status === "error") {
        snackbar(data.msg);
        return false;
      } else {
        location.reload();
        return false;
      }
    },
    error: function (data) {
      $("#loader").hide();
      //console.log(data);
      snackbar(data.statusText);
      console.log(data.status + " - " + data.statusText);
      return false;
    },
  });
});

/************Media Campaigns*************** */
$("#frm-gtm-media-campaign-req").submit(function (e) {
  e.preventDefault();
  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  var formData = new FormData($("#frm-gtm-media-campaign-req")[0]);
  $.ajax({
    type: "POST",
    url: baseAPIUrl + "/gtmmediacampaignrequest/store",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + user.token,
    },
    cache: false,
    timeout: 800000,
    enctype: "multipart/form-data",
    data: formData,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
      console.log(data);
      $("#loader").hide();
      location.href = baseUrl + "gtm/joint-media-campaign/";
      console.log("SUCCESS : ", data);
    },
    error: function (e) {
      $("#loader").hide();
      //$("#approvepop").addClass("hide");
      responseText = e.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
    },
  });
});

$("#gtm-media-campaign-requests").on("click", ".btn-view", function (e) {
  e.preventDefault();

  $rowcnt = $(e.target).parents("tr").data("rowcnt");

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let gtmmediacampaignrequests = JSON.parse(
    localStorage.getItem("gtmmediacampaignrequests")
  );
  if (gtmmediacampaignrequests == null) {
    return false;
  }

  let dataRow = gtmmediacampaignrequests[$rowcnt];

  fillGTMMediaCampaignReqReviewPop(dataRow);

  let cta_perm_ele = $("#page-gtm-media-campaign #reviewpop .cta-permissions");
  let btnApprove = $(
    "#page-gtm-media-campaign #reviewpop .cta-permissions .btn-approve"
  );
  let btnReject = $(
    "#page-gtm-media-campaign #reviewpop .cta-permissions .btn-reject"
  );

  if (user.type == USER_ADMIN_TYPE) {
    if (cta_perm_ele.hasClass("hide")) {
      cta_perm_ele.removeClass("hide");
    }

    if (dataRow["status"] === APPROVED_STATE) {
      btnApprove.prop("disabled", true);
      btnApprove.removeClass("btn-success");
      btnApprove.addClass("btn-secondary");
    } else if (dataRow["status"] === REJECTED_STATE) {
      btnApprove.prop("disabled", true);
      btnApprove.removeClass("btn-success");
      btnApprove.addClass("btn-secondary");

      btnReject.prop("disabled", true);
      btnReject.removeClass("btn-danger");
      btnReject.addClass("btn-secondary");
    } else {
      btnApprove.prop("disabled", false);
      btnApprove.addClass("btn-success");
      btnApprove.removeClass("btn-secondary");

      btnReject.prop("disabled", false);
      btnReject.addClass("btn-danger");
      btnReject.removeClass("btn-secondary");
    }
  } else {
    if (!cta_perm_ele.hasClass("hide")) {
      cta_perm_ele.addClass("hide");
    }
  }
  $("#reviewpop").removeClass("hide");
});

$("#gtm-media-campaign-requests").on("click", ".btn-edit", function (e) {
  e.preventDefault();

  $rowcnt = $(e.target).parents("tr").data("rowcnt");

  let gtmfundrequests = JSON.parse(
    localStorage.getItem("gtmmediacampaignrequests")
  );
  if (gtmfundrequests == null) {
    return false;
  }

  let dataRow = gtmfundrequests[$rowcnt];

  fillGTMMediaCampaignReqEditPop(dataRow);
  $("#editpop").removeClass("hide");
});

$("#gtm-media-campaign-requests").on("click", ".btn-del", function (e) {
  e.preventDefault();

  $rowcnt = $(e.target).parents("tr").data("rowcnt");
  if (
    !confirm(
      "Are you sure you want to delete the Joint Media Campaign Request?"
    )
  ) {
    return false;
  }

  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let gtmmediacampaignrequests = JSON.parse(
    localStorage.getItem("gtmmediacampaignrequests")
  );
  if (gtmmediacampaignrequests == null) {
    return false;
  }

  let dataRow = gtmmediacampaignrequests[$rowcnt];

  $.ajax({
    url: baseAPIUrl + "/gtmmediacampaignrequest/" + dataRow.id + "/delete",
    type: "GET",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
      $("#loader").hide();
      console.log(data);
      if (data.status === "error") {
        snackbar(data.msg);
        return;
      } else {
        location.href = baseUrl + "gtm/joint-media-campaign/";
      }
    },
    error: function (data) {
      $("#loader").hide();
      console.log(data);
      snackbar(data.statusText);
      console.log(data.status + " - " + data.statusText);
      return false;
    },
  });
});

$("#frm-media-campaign-edit").on("submit", function (e) {
  e.preventDefault();
  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }
  let itemNo = $("#frm-media-campaign-edit #mcampaign-req-id").val();
  var formData = new FormData($("#frm-media-campaign-edit")[0]);
  $.ajax({
    url: baseAPIUrl + "/gtmmediacampaignrequest/" + itemNo + "/update",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    enctype: "multipart/form-data",
    data: formData,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
      $("#loader").hide();
      console.log(data);
      if (data.status === "error") {
        snackbar(data.msg);
        return;
      } else {
        location.href = baseUrl + "gtm/joint-media-campaign/";
      }
    },
    error: function (data) {
      $("#loader").hide();
      console.log(data);
      snackbar(data.statusText);
      console.log(data.status + " - " + data.statusText);
      return false;
    },
  });

  //alert("edit form submitted");
});

$("#page-gtm-media-campaign #reviewpop").on(
  "click",
  ".btn-approve",
  function (e) {
    e.preventDefault();
    if (
      !confirm("Are you sure you want to approve the GTM Joint Media Campaign?")
    ) {
      return false;
    }

    $("#loader").show();

    let user = JSON.parse(localStorage.getItem("user"));
    if (user === "undefined" || user == "") {
      $("#loader").hide();
      location.href = baseUrl + "login";
      return false;
    }

    let dataRow = {};
    dataRow.id = $("#page-gtm-media-campaign #reviewpop #row-cnt").val();

    $.ajax({
      url: baseAPIUrl + "/gtmmediacampaignrequest/" + dataRow.id + "/approve",
      type: "POST",
      headers: {
        Authorization: "Bearer " + user.token,
      },
      crossDomain: true,
      dataType: "json",
      ContentType: "application/json; charset=utf-8",
      success: function (data) {
        $("#loader").hide();
        // console.log(data);
        if (data.status === "error") {
          snackbar(data.msg);
          return false;
        } else {
          location.reload();
          return false;
        }
      },
      error: function (data) {
        $("#loader").hide();
        //console.log(data);
        snackbar(data.statusText);
        console.log(data.status + " - " + data.statusText);
        return false;
      },
    });
  }
);

$("#gtm-media-campaign-requests").on("click", ".btn-approve", function (e) {
  e.preventDefault();
  if (
    !confirm(
      "Are you sure you want to approve the Joint Media Campaign Request?"
    )
  ) {
    return false;
  }

  $("#loader").show();
  $rowcnt = $(e.target).parents("tr").data("rowcnt");

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let gtmcampaignrequests = JSON.parse(
    localStorage.getItem("gtmmediacampaignrequests")
  );
  if (gtmcampaignrequests == null) {
    return false;
  }

  let dataRow = gtmcampaignrequests[$rowcnt];

  $.ajax({
    url: baseAPIUrl + "/gtmmediacampaignrequest/" + dataRow.id + "/approve",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      $("#loader").hide();
      //console.log(data);
      if (data.status === "error") {
        snackbar(data.msg);
        return false;
      } else {
        location.reload();
        return false;
      }
    },
    error: function (data) {
      $("#loader").hide();
      //console.log(data);
      snackbar(data.statusText);
      console.log(data.status + " - " + data.statusText);
      return false;
    },
  });
});

$("#page-gtm-media-campaign #reviewpop").on(
  "click",
  ".btn-reject",
  function (e) {
    e.preventDefault();
    $("#loader").show();

    let user = JSON.parse(localStorage.getItem("user"));
    if (user === "undefined" || user == "") {
      $("#loader").hide();
      location.href = baseUrl + "login";
      return false;
    }

    let dataRow = {};
    dataRow.id = $("#page-gtm-media-campaign #reviewpop #row-cnt").val();

    $("#frm-mcampaign-reject-conf")[0].reset();
    $("#frm-mcampaign-reject-conf #mcampaignid").val(dataRow.id);
    $("#mcampaign-rejectpop").removeClass("hide");
    $("#loader").hide();
  }
);

$("#gtm-media-campaign-requests").on("click", ".btn-reject", function (e) {
  e.preventDefault();
  $("#loader").show();
  //alert("btn-reject clicked");

  //need a confirm window or a comment popup
  $rowcnt = $(e.target).parents("tr").data("rowcnt");

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let gtmcampaignrequests = JSON.parse(
    localStorage.getItem("gtmmediacampaignrequests")
  );
  if (gtmcampaignrequests == null) {
    return false;
  }

  let dataRow = gtmcampaignrequests[$rowcnt];
  //alert(dataRow.id);
  $.ajax({
    url: baseAPIUrl + "/gtmmediacampaignrequest/" + dataRow.id + "/reject",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      $("#loader").hide();
      //console.log(data);
      if (data.status === "error") {
        snackbar(data.msg);
        return false;
      } else {
        location.reload();
        return false;
      }
    },
    error: function (data) {
      $("#loader").hide();
      //console.log(data);
      snackbar(data.statusText);
      console.log(data.status + " - " + data.statusText);
      return false;
    },
  });
});

$("#frm-mcampaign-reject-conf").on("submit", function (e) {
  e.preventDefault();
  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let dataRow = {};
  dataRow.id = $("#frm-mcampaign-reject-conf #mcampaignid").val();
  //let formData = new FormData($("#frm-je-reject-conf")[0]);
  let rejectMsg = $(
    "#frm-mcampaign-reject-conf #mcampaign-rejection-msg"
  ).val();
  let formData = { mcampaign_rejection_msg: rejectMsg };

  $.ajax({
    url: baseAPIUrl + "/gtmmediacampaignrequest/" + dataRow.id + "/reject",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    data: formData,
    dataType: "json",
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      $("#loader").hide();
      console.log(data);
      if (data.status === "error") {
        snackbar(data.msg);
        return false;
      } else {
        location.reload();
        return false;
      }
    },
    error: function (data) {
      $("#loader").hide();
      console.log(data);
      snackbar(data.statusText);
      console.log(data.status + " - " + data.statusText);
      return false;
    },
  });
});

/*Joint Event Request*/
$("#frm-joint-event-req").submit(function (e) {
  //alert("campaign clicked");
  e.preventDefault();
  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  var formData = new FormData($("#frm-joint-event-req")[0]);
  $.ajax({
    type: "POST",
    url: baseAPIUrl + "/gtmjointeventrequest/store",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + user.token,
    },
    cache: false,
    timeout: 800000,
    enctype: "multipart/form-data",
    data: formData,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
      console.log(data);
      $("#loader").hide();
      location.href = baseUrl + "gtm/joint-event-request/";
      console.log("SUCCESS : ", data);
    },
    error: function (e) {
      $("#loader").hide();
      //$("#approvepop").addClass("hide");
      responseText = e.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
    },
  });
});

$("#gtm-je-requests").on("click", ".btn-view", function (e) {
  e.preventDefault();

  $rowcnt = $(e.target).parents("tr").data("rowcnt");

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let gtmjointeventrequests = JSON.parse(
    localStorage.getItem("gtmjointeventrequests")
  );
  if (gtmjointeventrequests == null) {
    return false;
  }

  let dataRow = gtmjointeventrequests[$rowcnt];

  fillGTMJEReqItemPop(dataRow);
  let cta_perm_ele = $("#page-gtm-je #reviewpop .cta-permissions");
  let btnApprove = $("#page-gtm-je #reviewpop .cta-permissions .btn-approve");
  let btnReject = $("#page-gtm-je #reviewpop .cta-permissions .btn-reject");

  if (user.type == USER_ADMIN_TYPE) {
    if (cta_perm_ele.hasClass("hide")) {
      cta_perm_ele.removeClass("hide");
    }

    if (dataRow["status"] === APPROVED_STATE) {
      btnApprove.prop("disabled", true);
      btnApprove.removeClass("btn-success");
      btnApprove.addClass("btn-secondary");
    } else if (dataRow["status"] === REJECTED_STATE) {
      btnApprove.prop("disabled", true);
      btnApprove.removeClass("btn-success");
      btnApprove.addClass("btn-secondary");

      btnReject.prop("disabled", true);
      btnReject.removeClass("btn-danger");
      btnReject.addClass("btn-secondary");
    } else {
      btnApprove.prop("disabled", false);
      btnApprove.addClass("btn-success");
      btnApprove.removeClass("btn-secondary");

      btnReject.prop("disabled", false);
      btnReject.addClass("btn-danger");
      btnReject.removeClass("btn-secondary");
    }
  } else {
    if (!cta_perm_ele.hasClass("hide")) {
      cta_perm_ele.addClass("hide");
    }
  }
  $("#reviewpop").removeClass("hide");
});

$("#gtm-je-requests").on("click", ".btn-edit", function (e) {
  e.preventDefault();

  $rowcnt = $(e.target).parents("tr").data("rowcnt");

  let gtmjointeventrequests = JSON.parse(
    localStorage.getItem("gtmjointeventrequests")
  );
  if (gtmjointeventrequests == null) {
    return false;
  }

  let dataRow = gtmjointeventrequests[$rowcnt];

  fillGTMJEReqEditPop(dataRow);
  $("#editpop").removeClass("hide");
});

$("#gtm-je-requests").on("click", ".btn-del", function (e) {
  e.preventDefault();

  $rowcnt = $(e.target).parents("tr").data("rowcnt");
  if (!confirm("Are you sure you want to delete the Joint Event Request?")) {
    return false;
  }

  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let gtmjointeventrequests = JSON.parse(
    localStorage.getItem("gtmjointeventrequests")
  );
  if (gtmjointeventrequests == null) {
    return false;
  }

  let dataRow = gtmjointeventrequests[$rowcnt];

  $.ajax({
    url: baseAPIUrl + "/gtmjointeventrequest/" + dataRow.id + "/delete",
    type: "GET",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
      $("#loader").hide();
      console.log(data);
      if (data.status === "error") {
        snackbar(data.msg);
        return;
      } else {
        location.href = baseUrl + "gtm/joint-event-request/";
      }
    },
    error: function (data) {
      $("#loader").hide();
      console.log(data);
      snackbar(data.statusText);
      console.log(data.status + " - " + data.statusText);
      return false;
    },
  });
});


$("#frm-je-edit").on("submit", function (e) {
  e.preventDefault();
  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }
  let itemNo = $("#frm-je-edit #je-req-id").val();
  //let formData = new FormData($("#frm-je-edit")[0]);
  var formData = new FormData($("#frm-je-edit")[0]);
  $.ajax({
    type: "POST",
    url: baseAPIUrl + "/gtmjointeventrequest/" + itemNo + "/update",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + user.token,
    },
    cache: false,
    timeout: 800000,
    enctype: "multipart/form-data",
    data: formData,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (data) {
      console.log(data);
      $("#loader").hide();
      location.href = baseUrl + "gtm/joint-event-request/";
      console.log("SUCCESS : ", data);
    },
    error: function (e) {
      $("#loader").hide();
      //$("#approvepop").addClass("hide");
      responseText = e.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
    },
  });

  //alert("edit form submitted");
});

$("#page-gtm-je #reviewpop").on("click", ".btn-approve", function (e) {
  e.preventDefault();
  if (!confirm("Are you sure you want to approve the GTM Joint Event?")) {
    return false;
  }

  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let dataRow = {};
  dataRow.id = $("#page-gtm-je #reviewpop #row-cnt").val();

  $.ajax({
    url: baseAPIUrl + "/gtmjointeventrequest/" + dataRow.id + "/approve",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      $("#loader").hide();
      // console.log(data);
      if (data.status === "error") {
        snackbar(data.msg);
        return false;
      } else {
        location.reload();
        return false;
      }
    },
    error: function (data) {
      $("#loader").hide();
      //console.log(data);
      snackbar(data.statusText);
      console.log(data.status + " - " + data.statusText);
      return false;
    },
  });
});

$("#gtm-je-requests").on("click", ".btn-approve", function (e) {
  e.preventDefault();

  if (!confirm("Are you sure you want to approve the Joint Event Request?")) {
    return false;
  }

  $("#loader").show();
  $rowcnt = $(e.target).parents("tr").data("rowcnt");

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let gtmjointeventrequests = JSON.parse(
    localStorage.getItem("gtmjointeventrequests")
  );
  if (gtmjointeventrequests == null) {
    return false;
  }

  let dataRow = gtmjointeventrequests[$rowcnt];

  $.ajax({
    url: baseAPIUrl + "/gtmjointeventrequest/" + dataRow.id + "/approve",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      $("#loader").hide();
      console.log(data);
      if (data.status === "error") {
        snackbar(data.msg);
        return false;
      } else {
        location.reload();
        return false;
      }
    },
    error: function (data) {
      $("#loader").hide();
      console.log(data);
      snackbar(data.statusText);
      console.log(data.status + " - " + data.statusText);
      return false;
    },
  });
});

$("#page-gtm-je #reviewpop").on("click", ".btn-reject", function (e) {
  e.preventDefault();
  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let dataRow = {};
  dataRow.id = $("#page-gtm-je #reviewpop #row-cnt").val();

  $("#frm-je-reject-conf")[0].reset();
  $("#frm-je-reject-conf #jeid").val(dataRow.id);
  $("#je-rejectpop").removeClass("hide");
  $("#loader").hide();
});

$("#gtm-je-requests").on("click", ".btn-reject", function (e) {
  e.preventDefault();
  $("#loader").show();

  $rowcnt = $(e.target).parents("tr").data("rowcnt");
  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let gtmjointeventrequests = JSON.parse(
    localStorage.getItem("gtmjointeventrequests")
  );
  if (gtmjointeventrequests == null) {
    return false;
  }
  let dataRow = gtmjointeventrequests[$rowcnt];
  $("#frm-je-reject-conf")[0].reset();
  $("#frm-je-reject-conf #jeid").val(dataRow.id);
  $("#je-rejectpop").removeClass("hide");
  $("#loader").hide();
});

$("#frm-je-reject-conf").on("submit", function (e) {
  e.preventDefault();
  $("#loader").show();
  //alert("btn-reject clicked");

  let user = JSON.parse(localStorage.getItem("user"));
  if (user === "undefined" || user == "") {
    $("#loader").hide();
    location.href = baseUrl + "login";
    return false;
  }

  let dataRow = $("#frm-je-reject-conf #jeid").val();
  //let formData = new FormData($("#frm-je-reject-conf")[0]);
  let rejectMsg = $("#frm-je-reject-conf #je-rejection-msg").val();
  let formData = { je_rejection_msg: rejectMsg };

  // alert(formData.je_rejection_msg);
  // return false;

  //alert(dataRow.id);
  $.ajax({
    url: baseAPIUrl + "/gtmjointeventrequest/" + dataRow + "/reject",
    type: "POST",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    data: formData,
    dataType: "json",
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      $("#loader").hide();
      //console.log(data);
      if (data.status === "error") {
        snackbar(data.msg);
        return false;
      } else {
        location.reload();
        return false;
      }
    },
    error: function (data) {
      $("#loader").hide();
      //console.log(data);
      snackbar(data.statusText);
      console.log(data.status + " - " + data.statusText);
      return false;
    },
  });
});

/***********************/
/* Event Bindings - My Profile */
/**********************/
$(".partner-details #btnEditPI").on("click", function (e) {
  e.preventDefault();

  $(".partner-details #card-personal-info #jobtitle").prop("disabled", false);
  $(".partner-details #card-personal-info #partnermobile").prop(
    "disabled",
    false
  );

  $(".partner-details .card .sec-btn-wrap #btn-save-pi").removeClass(
    "btn-hidden"
  );
});

$(".partner-details .card .sec-btn-wrap #btn-save-pi").on(
  "click",
  function (e) {
    e.preventDefault();
    $("#loader").show();

    let user = JSON.parse(localStorage.getItem("user"));
    if (user === "undefined" || user == "") {
      $("#loader").hide();
      location.href = baseUrl + "login";
      return false;
    }

    let formData = new FormData($("#frm-personal-info")[0]);

    $.ajax({
      url: baseAPIUrl + "/profile/edit/personalinfo",
      type: "POST",
      crossDomain: true,
      headers: {
        Authorization: "Bearer " + user.token,
      },
      data: formData,
      dataType: "json",
      processData: false,
      contentType: false,
      success: function (data) {
        console.log(data);
        location.reload(true);
        //$("#loader").hide();
        return;
      },
      error: function (data) {
        if (data.status === 401) {
          location.href = baseUrl + "login";
          return false;
        }
        $("#loader").hide();
        responseText = data.responseText;
        console.log(responseText);
        snackbar(JSON.parse(responseText).message);
        return false;
      },
    });
  }
);

/***********************/
/* Init Functions - Knowledge Center */
/**********************/
function initKnowledgeCenter() {
  $("#loader").show();
  let user = JSON.parse(localStorage.getItem("user"));
  let token = user != null ? user.token : "";

  if (user == null) {
    location.href = baseUrl + "login";
    return false;
  }

  if (user.type == USER_ADMIN_TYPE) {
    $("#page-knowledge-center a.lnk-blogs").attr(
      "href",
      baseUrl + "blogs/listing"
    );

    $("#page-knowledge-center a.lnk-casestudies").attr(
      "href",
      baseUrl + "case-studies/listing"
    );

    $("#page-knowledge-center a.lnk-trainings").attr(
      "href",
      baseUrl + "trainings/listing"
    );

    $("#page-knowledge-center a.lnk-events").attr(
      "href",
      baseUrl + "events/listing"
    );
    
    $("#page-knowledge-center a.lnk-videos").attr(
      "href",
      baseUrl + "videos/listing"
    );
  }
  $("#loader").hide();
}

function initKCBlogsListing() {
  $("#loader").show();
  let user = JSON.parse(localStorage.getItem("user"));
  let token = user != null ? user.token : "";

  if (user == null) {
    location.href = baseUrl + "login";
    return false;
  }

  $.ajax({
    url: baseAPIUrl + "/blogs",
    type: "GET",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + token,
    },
    dataType: "json",
    ContentType: "application/json;",
    success: function (data) {
      //console.log("in success");
      console.log(data);

      if (data.status === "success") {
        localStorage.setItem("bloglisting", JSON.stringify(data.blogs));
      }

      appendKCBlogRow();
      $("#loader").hide();
      return;
    },
    error: function (data) {
      if (data.status === 401) {
        location.href = baseUrl + "login";
        return false;
      }
      $("#loader").hide();
      responseText = data.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
      return false;
    },
  });

  $("#loader").hide();
}

function initKCBlogs() {
  $("#loader").show();
  let user = JSON.parse(localStorage.getItem("user"));
  let token = user != null ? user.token : "";

  if (user == null) {
    location.href = baseUrl + "login";
    return false;
  }

  $.ajax({
    url: baseAPIUrl + "/blogs/active",
    type: "GET",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + token,
    },
    dataType: "json",
    ContentType: "application/json;",
    success: function (data) {
      //console.log("in success");
      console.log(data);

      if (data.status === "success") {
        localStorage.setItem("bloglisting", JSON.stringify(data.blogs));
      }

      let blogItemStr = "";
      data.blogs.forEach(function (item, index) {
        let blogUrl =
          item.is_external_link == "0"
            ? baseUrl + item.blog_slug
            : item.blog_link;

        blogItemStr +=
          '<div class="col-md-4">' +
          '<div class="blog-item mb-5" style="padding:10px 0px;">' +
          '<img src="' +
          baseUrl +
          item.blog_image_path +
          '" alt="' +
          item.blog_title +
          '" class="wp-image-3688" style="width:100%">' +
          '<h5 style="padding:5px 0px">' +
          item.blog_title +
          "</h5>" +
          '<p style="text-align:justify;word-break:break-all">' +
          item.blog_short_description +
          "</p>" +
          '<a href="' +
          blogUrl +
          '" target="_blank" class="btn btn-primary">Read More</a>' +
          "</div>" +
          "</div>";
      });
      $("#page-kc-blogs .content-wrapper .row").html(blogItemStr);
      // $("#page-kc-blogs .blog-item img").prop(
      //   "src",
      //   data.blogs.blog_image_path
      // );
      // $("#page-kc-blogs .blog-item h5").html(data.blogs.blog_title);
      // $("#page-kc-blogs .blog-item p").html(data.blogs.blog_description);
      // $("#page-kc-blogs .blog-item a").prop("href", data.blogs.blog_link);

      $("#loader").hide();
      return;
    },
    error: function (data) {
      $("#loader").hide();
      if (data.status === 401) {
        location.href = baseUrl + "login";
        return false;
      }
      responseText = data.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
      return false;
    },
  });
}

function initKCSingleBlog(blogTitle) {
  $("#loader").show();
  let user = JSON.parse(localStorage.getItem("user"));
  let token = user != null ? user.token : "";

  if (user == null) {
    location.href = baseUrl + "login";
    return false;
  }

  $.ajax({
    url: baseAPIUrl + "/blogs/view/" + blogTitle,
    type: "GET",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + token,
    },
    dataType: "json",
    ContentType: "application/json;",
    success: function (data) {
      //console.log("in success");
      console.log(data);

      $("#page-kc-single-blog .caption-row h1").html(data.blog.blog_title);
      $("#page-kc-single-blog .blog-banner").prop(
        "src",
        baseUrl + data.blog.blog_image_path
      );
      $("#page-kc-single-blog #blog-content").html(data.blog.blog_description);

      $("#loader").hide();
      return;
    },
    error: function (data) {
      $("#loader").hide();
      if (data.status === 401) {
        location.href = baseUrl + "login";
        return false;
      }
      responseText = data.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
      return false;
    },
  });
}

function initKCCSListing() {
  $("#loader").show();
  let user = JSON.parse(localStorage.getItem("user"));
  let token = user != null ? user.token : "";

  if (user == null) {
    location.href = baseUrl + "login";
    return false;
  }

  $.ajax({
    url: baseAPIUrl + "/case-studies",
    type: "GET",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + token,
    },
    dataType: "json",
    ContentType: "application/json;",
    success: function (data) {
      //console.log("in success");
      console.log(data);

      if (data.status === "success") {
        localStorage.setItem("kccslisting", JSON.stringify(data.casestudies));
      }

      appendKCCSRow();
      $("#loader").hide();
      return;
    },
    error: function (data) {
      if (data.status === 401) {
        location.href = baseUrl + "login";
        return false;
      }
      $("#loader").hide();
      responseText = data.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
      return false;
    },
  });

  $("#loader").hide();
}


function initKCCaseStudies() {
  $("#loader").show();
  let user = JSON.parse(localStorage.getItem("user"));
  let token = user != null ? user.token : "";

  if (user == null) {
    location.href = baseUrl + "login";
    return false;
  }

  $.ajax({
    url: baseAPIUrl + "/case-studies/active",
    type: "GET",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + token,
    },
    dataType: "json",
    ContentType: "application/json;",
    success: function (data) {
      //console.log("in success");
      console.log(data);

      if (data.status === "success") {
        localStorage.setItem("kccslisting", JSON.stringify(data.casestudies));
      }

      let csItemStr = "";
      data.casestudies.forEach(function (item, index) {
        item.cs_short_description =
          item.cs_short_description == null || item.cs_short_description == ""
            ? ""
            : item.cs_short_description;
        csItemStr +=
          '<div class="col-md-4">' +
          '<div class="cs-item mb-5" style="padding:10px 0px;">' +
          '<img src="' +
          baseUrl +
          item.cs_image_path +
          '" alt="' +
          item.cs_title +
          '" class="wp-image-3688" style="width:100%">' +
          '<h5 style="padding:5px 0px">' +
          item.cs_title +
          "</h5>" +
          '<p style="text-align:justify;word-break:break-all">' +
          item.cs_short_description +
          "</p>" +
          '<a href="' +
          baseUrl +
          item.cs_doc_path +
          '" target="_blank" class="btn btn-primary">Read More</a>' +
          "</div>" +
          "</div>";
      });
      $("#page-kc-cs .content-wrapper .row").html(csItemStr);

      $("#loader").hide();
      return;
    },
    error: function (data) {
      if (data.status === 401) {
        location.href = baseUrl + "login";
        return false;
      }
      $("#loader").hide();
      responseText = data.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
      return false;
    },
  });

  $("#loader").hide();
}

function initKCTrainings() {
  $("#loader").show();
  let user = JSON.parse(localStorage.getItem("user"));
  let token = user != null ? user.token : "";

  if (user == null) {
    location.href = baseUrl + "login";
    return false;
  }

  $.ajax({
    url: baseAPIUrl + "/trainings",
    type: "GET",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + token,
    },
    dataType: "json",
    ContentType: "application/json;",
    success: function (data) {
      //console.log("in success");
      //console.log(data);

      if (data.status === "success") {
        localStorage.setItem(
          "kctraininglisting",
          JSON.stringify(data.trainings)
        );
      }

      //console.log(data.trainings);

      let trainings = JSON.parse(localStorage.getItem("kctraininglisting"));
      let calendarItems = [];

      trainings.forEach(function (item, index) {
        let itemDate = new Date(item.training_date);
        let calItem = {
          title: item.training_title,
          start: new Date(
            itemDate.getFullYear(),
            itemDate.getMonth(),
            itemDate.getDate(),
            item.training_st_time.substr(0, 2),
            item.training_st_time.substr(3, 2)
          ),
          end: new Date(
            itemDate.getFullYear(),
            itemDate.getMonth(),
            itemDate.getDate(),
            item.training_end_time.substr(0, 2),
            item.training_end_time.substr(3, 2)
          ),
          url: baseUrl + "trainings/" + item.id,
          allDay: false,
          className: "important",
        };

        calendarItems.push(calItem);

        createTrainingCalendar(calendarItems);
      });

      // console.log("calendar items ");
      // console.log(calendarItems);

      $("#loader").hide();
      return;
    },
    error: function (data) {
      if (data.status === 401) {
        location.href = baseUrl + "login";
        return false;
      }
      $("#loader").hide();
      responseText = data.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
      return false;
    },
  });

  $("#loader").hide();
}

function createTrainingCalendar(items) {
  var date = new Date();
  var d = date.getDate();
  var m = date.getMonth();
  var y = date.getFullYear();

  /*  className colors
  
  className: default(transparent), important(red), chill(pink), success(green), info(blue)
  
  */

  /* initialize the external events
  -----------------------------------------------------------------*/
  // $("#external-events div.external-event").each(function () {
  //   // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
  //   // it doesn't need to have a start or end
  //   var eventObject = {
  //     title: $.trim($(this).text()), // use the element's text as the event title
  //   };

  //   // store the Event Object in the DOM element so we can get to it later
  //   $(this).data("eventObject", eventObject);

  //   // make the event draggable using jQuery UI
  //   $(this).draggable({
  //     zIndex: 999,
  //     revert: true, // will cause the event to go back to its
  //     revertDuration: 0, //  original position after the drag
  //   });
  // });

  /* initialize the calendar
		-----------------------------------------------------------------*/

  var calendar = $("#calendar").fullCalendar({
    header: {
      left: "title",
      center: "agendaDay,agendaWeek,month",
      right: "prev,next today",
    },
    editable: true,
    firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
    selectable: true,
    defaultView: "month",

    axisFormat: "h:mm",
    columnFormat: {
      month: "ddd", // Mon
      week: "ddd d", // Mon 7
      day: "dddd M/d", // Monday 9/7
      agendaDay: "dddd d",
    },
    titleFormat: {
      month: "MMMM yyyy", // September 2009
      week: "MMMM yyyy", // September 2009
      day: "MMMM yyyy", // Tuesday, Sep 8, 2009
    },
    allDaySlot: false,
    selectHelper: true,
    select: function (start, end, allDay) {
      var title = prompt("Event Title:");
      if (title) {
        calendar.fullCalendar(
          "renderEvent",
          {
            title: title,
            start: start,
            end: end,
            allDay: allDay,
          },
          true // make the event "stick"
        );
      }
      calendar.fullCalendar("unselect");
    },
    droppable: true, // this allows things to be dropped onto the calendar !!!
    drop: function (date, allDay) {
      // this function is called when something is dropped

      // retrieve the dropped element's stored Event Object
      var originalEventObject = $(this).data("eventObject");

      // we need to copy it, so that multiple events don't have a reference to the same object
      var copiedEventObject = $.extend({}, originalEventObject);

      // assign it the date that was reported
      copiedEventObject.start = date;
      copiedEventObject.allDay = allDay;

      // render the event on the calendar
      // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
      $("#calendar").fullCalendar("renderEvent", copiedEventObject, true);

      // is the "remove after drop" checkbox checked?
      if ($("#drop-remove").is(":checked")) {
        // if so, remove the element from the "Draggable Events" list
        $(this).remove();
      }
    },
    events: items,
  });
}

function initSingleTraining(training) {
  $("#loader").show();
  let user = JSON.parse(localStorage.getItem("user"));
  let token = user != null ? user.token : "";

  if (user == null) {
    location.href = baseUrl + "login";
    return false;
  }

  $.ajax({
    url: baseAPIUrl + "/trainings/" + training,
    type: "GET",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + token,
    },
    dataType: "json",
    ContentType: "application/json;",
    success: function (data) {
      //console.log("in success");
      console.log(data);

      if (data.status == "success") {
        let training = data.training;
        let training_date = new Date(training.training_date);

        $("#page-kc-single-training h5#training-title u").html(
          training.training_title
        );
        $("#page-kc-single-training div#training-content").html(
          training.training_content
        );
      }

      $("#loader").hide();
      return;
    },
    error: function (data) {
      if (data.status === 401) {
        location.href = baseUrl + "login";
        return false;
      }
      $("#loader").hide();
      responseText = data.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
      return false;
    },
  });
}


function initKCTrainingsListing() {
  $("#loader").show();
  let user = JSON.parse(localStorage.getItem("user"));
  let token = user != null ? user.token : "";

  if (user == null) {
    location.href = baseUrl + "login";
    return false;
  }

  $.ajax({
    url: baseAPIUrl + "/trainings",
    type: "GET",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + token,
    },
    dataType: "json",
    ContentType: "application/json;",
    success: function (data) {
      //console.log("in success");
      //console.log(data);

      if (data.status === "success") {
        localStorage.setItem(
          "kctraininglisting",
          JSON.stringify(data.trainings)
        );
      }

      //console.log(data.trainings);

      let trainings = JSON.parse(localStorage.getItem("kctraininglisting"));

      trainings.forEach(function (item, index) {
        let training_status = item.training_is_active ? "Active" : "Inactive";
        let trainer_name = item.trainer_name == null ? "" : item.trainer_name;
        let training_title =
          item.training_title == null ? "" : item.training_title;

        let ctaStr =
          "<button type='button' class='btn btn-icons btn-rounded btn-info pi-edit' title='EDIT' style='cursor: pointer;'>" +
          "<i class='mdi mdi-account-edit'></i>" +
          "</button>";

        if (item.training_is_active) {
          ctaStr +=
            "<button type='button' class='btn btn-icons btn-rounded btn-success pi-delete' title='DELETE' style='cursor: pointer;'>" +
            "<i class='mdi mdi-delete'></i>" +
            "</button>";
        } else {
          ctaStr +=
            "<button type='button' class='btn btn-icons btn-rounded btn-success pi-activate' title='ACTIVATE' style='cursor: pointer;'>" +
            "<i class='mdi mdi-plus'></i>" +
            "</button>";
        }

        $rowStr =
          "<tr data-rowcnt='" +
          index +
          "'>" +
          "<td>" +
          (index + 1) +
          "</td>" +
          "<td>" +
          trainer_name +
          "</td>" +
          "<td>" +
          training_title +
          "</td>" +
          "<td>" +
          item.training_date.substr(8) +
          "-" +
          item.training_date.substr(5, 2) +
          "-" +
          item.training_date.substr(0, 4) +
          "</td>" +
          "<td>" +
          ctaStr +
          "</td>" +
          "<td>" +
          training_status +
          "</td>" +
          "</tr>";

        $("#table-kc-trainings tbody").append($rowStr);
        
      });

      // console.log("calendar items ");
      // console.log(calendarItems);

      $("#loader").hide();
      return;
    },
    error: function (data) {
      if (data.status === 401) {
        location.href = baseUrl + "login";
        return false;
      }
      $("#loader").hide();
      responseText = data.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
      return false;
    },
  });

  $("#loader").hide();
}

function initKCEventsListing() {
  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  let token = user != null ? user.token : "";

  if (user == null) {
    location.href = baseUrl + "login";
    return false;
  }

  $.ajax({
    url: baseAPIUrl + "/events",
    type: "GET",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + token,
    },
    dataType: "json",
    ContentType: "application/json;",
    success: function (data) {
      //console.log("in success");
      console.log(data);

      if (data.status === "success") {
        localStorage.setItem("kceventlisting", JSON.stringify(data.events));
      }

      // console.log(localStorage.getItem("kceventlisting"));

      let events = JSON.parse(localStorage.getItem("kceventlisting"));

      events.forEach(function (item, index) {
        let event_status = item.event_is_active ? "Active" : "Inactive";
        let event_title = item.event_title == null ? "" : item.event_title;

        let ctaStr =
          "<button type='button' class='btn btn-icons btn-rounded btn-info pi-edit' title='EDIT' style='cursor: pointer;'>" +
          "<i class='mdi mdi-account-edit'></i>" +
          "</button>";

        if (item.event_is_active) {
          ctaStr +=
            "<button type='button' class='btn btn-icons btn-rounded btn-success pi-delete' title='DELETE' style='cursor: pointer;'>" +
            "<i class='mdi mdi-delete'></i>" +
            "</button>";
        } else {
          ctaStr +=
            "<button type='button' class='btn btn-icons btn-rounded btn-success pi-activate' title='ACTIVATE' style='cursor: pointer;'>" +
            "<i class='mdi mdi-plus'></i>" +
            "</button>";
        }

        $rowStr =
          "<tr data-rowcnt='" +
          index +
          "'>" +
          "<td>" +
          (index + 1) +
          "</td>" +
          "<td>" +
          event_title +
          "</td>" +
          "<td>" +
          item.event_date.substr(8) +
          "-" +
          item.event_date.substr(5, 2) +
          "-" +
          item.event_date.substr(0, 4) +
          "</td>" +
          "<td>" +
          ctaStr +
          "</td>" +
          "<td>" +
          event_status +
          "</td>" +
          "</tr>";

        $("#table-kc-events tbody").append($rowStr);
      });

      $("#loader").hide();
      return;
    },
    error: function (data) {
      if (data.status === 401) {
        location.href = baseUrl + "login";
        return false;
      }
      $("#loader").hide();
      responseText = data.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
      return false;
    },
  });

  $("#loader").hide();
}

function initKCEvents() {
  $("#loader").show();
  let user = JSON.parse(localStorage.getItem("user"));
  let token = user != null ? user.token : "";

  if (user == null) {
    location.href = baseUrl + "login";
    return false;
  }

  $.ajax({
    url: baseAPIUrl + "/events/active",
    type: "GET",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + token,
    },
    dataType: "json",
    ContentType: "application/json;",
    success: function (data) {
      //console.log("in success");
      //console.log(data);

      if (data.status === "success") {
        localStorage.setItem("kceventlisting", JSON.stringify(data.events));
      }

      //console.log(data.trainings);

      let events = JSON.parse(localStorage.getItem("kceventlisting"));
      let calendarItems = [];

      events.forEach(function (item, index) {
        let itemDate = new Date(item.event_date);
        let calItem = {
          title: item.event_title,
          start: new Date(
            itemDate.getFullYear(),
            itemDate.getMonth(),
            itemDate.getDate(),
            item.event_st_time.substr(0, 2),
            item.event_st_time.substr(3, 2)
          ),
          end: new Date(
            itemDate.getFullYear(),
            itemDate.getMonth(),
            itemDate.getDate(),
            item.event_end_time.substr(0, 2),
            item.event_end_time.substr(3, 2)
          ),
          url: baseUrl + "events/" + item.id,
          allDay: false,
          className: "important",
        };

        calendarItems.push(calItem);
      });

      // console.log("calendar items ");
      // console.log(calendarItems);
      createTrainingCalendar(calendarItems);
      $("#loader").hide();
      return;
    },
    error: function (data) {
      if (data.status === 401) {
        location.href = baseUrl + "login";
        return false;
      }
      $("#loader").hide();
      responseText = data.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
      return false;
    },
  });

  $("#loader").hide();
}

function initSingleEvent(event) {
  $("#loader").show();
  let user = JSON.parse(localStorage.getItem("user"));
  let token = user != null ? user.token : "";

  if (user == null) {
    location.href = baseUrl + "login";
    return false;
  }

  $.ajax({
    url: baseAPIUrl + "/events/" + event,
    type: "GET",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + token,
    },
    dataType: "json",
    ContentType: "application/json;",
    success: function (data) {
      //console.log("in success");
      console.log(data);

      if (data.status == "success") {
        let event = data.event;
        //let event_date = new Date(event.event_date);
        if (event.event_banner_path != "") {
          $("#page-kc-single-event img#event-banner").prop(
            "src",
            baseUrl + event.event_banner_path
          );
          $("#page-kc-single-event img#event-banner").prop(
            "alt",
            event.event_title
          );
        }

        $("#page-kc-single-event h5#event-title u").html(event.event_title);
        $("#page-kc-single-event div#event-content").html(event.event_content);
      }

      $("#loader").hide();
      return;
    },
    error: function (data) {
      if (data.status === 401) {
        location.href = baseUrl + "login";
        return false;
      }
      $("#loader").hide();
      responseText = data.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
      return false;
    },
  });
}

function initKCVideosListing() {
  $("#loader").show();

  let user = JSON.parse(localStorage.getItem("user"));
  let token = user != null ? user.token : "";

  if (user == null) {
    location.href = baseUrl + "login";
    return false;
  }

  $.ajax({
    url: baseAPIUrl + "/videos",
    type: "GET",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + token,
    },
    dataType: "json",
    ContentType: "application/json;",
    success: function (data) {
      //console.log("in success");
      console.log(data);

      if (data.status === "success") {
        localStorage.setItem("kcvideolisting", JSON.stringify(data.videos));
      }

      // console.log(localStorage.getItem("kceventlisting"));

      let vids = JSON.parse(localStorage.getItem("kcvideolisting"));

      vids.forEach(function (item, index) {
        let vid_status = item.vid_is_active ? "Active" : "Inactive";
        let vid_title = item.vid_title == null ? "" : item.vid_title;
	let vid_url = item.vid_is_ext_url ? item.vid_url : baseUrl + item.vid_url;

        let ctaStr =
          "<button type='button' class='btn btn-icons btn-rounded btn-info pi-edit' title='EDIT' style='cursor: pointer;'>" +
          "<i class='mdi mdi-account-edit'></i>" +
          "</button>";

        if (item.vid_is_active) {
          ctaStr +=
            "<button type='button' class='btn btn-icons btn-rounded btn-success pi-delete' title='DELETE' style='cursor: pointer;'>" +
            "<i class='mdi mdi-delete'></i>" +
            "</button>";
        } else {
          ctaStr +=
            "<button type='button' class='btn btn-icons btn-rounded btn-success pi-activate' title='ACTIVATE' style='cursor: pointer;'>" +
            "<i class='mdi mdi-plus'></i>" +
            "</button>";
        }

        $rowStr =
          "<tr data-rowcnt='" +
          index +
          "'>" +
          "<td>" +
          (index + 1) +
          "</td>" +
          "<td>" +
          vid_title +
          "</td>" +
          "<td>" +
          vid_url +
          "</td>" +
          "<td>" +
          ctaStr +
          "</td>" +
          "<td>" +
          vid_status +
          "</td>" +
          "</tr>";

        $("#table-kc-videos tbody").append($rowStr);
      });

      $("#loader").hide();
      return;
    },
    error: function (data) {
      if (data.status === 401) {
        location.href = baseUrl + "login";
        return false;
      }
      $("#loader").hide();
      responseText = data.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
      return false;
    },
  });

  $("#loader").hide();
}

function initKCVideos() {
  $("#loader").show();
  let user = JSON.parse(localStorage.getItem("user"));
  let token = user != null ? user.token : "";

  if (user == null) {
    location.href = baseUrl + "login";
    return false;
  }

  $.ajax({
    url: baseAPIUrl + "/videos/active",
    type: "GET",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + token,
    },
    dataType: "json",
    ContentType: "application/json;",
    success: function (data) {
      //console.log("in success");
      //console.log(data);

      if (data.status === "success") {
        localStorage.setItem("kcvideolisting", JSON.stringify(data.videos));
      }

      //console.log(data.trainings);

      let vids = JSON.parse(localStorage.getItem("kcvideolisting"));
      let calendarItems = [];

      let vidItemStr = "";
      vids.forEach(function (item, index) {
        let vid_url = item.vid_is_ext_url
          ? item.vid_url
          : baseUrl + item.vid_url;

        vidItemStr +=
          "<div class='col-md-4'>" +
          "<div class='' style='padding:10px 0px;'>" +
          "<iframe width='350' height='300'" +
          "src='" +
          vid_url +
          "'" +
          "title='' frameborder='0'" +
          "allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' " +
          "allowfullscreen></iframe>" +
          "<h5 style='padding:5px 0px'>" +
          item.vid_title +
          "</h5>" +
          "</div></div>";
      });
      $("#page-kc-videos .content-wrapper .row").html(vidItemStr);

      $("#loader").hide();
      return;
    },
    error: function (data) {
      if (data.status === 401) {
        location.href = baseUrl + "login";
        return false;
      }
      $("#loader").hide();
      responseText = data.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
      return false;
    },
  });

  $("#loader").hide();
}

/***********************/
/* Init Functions - Single PArtner */
/**********************/
function initSinglePartner(partner) {
  $("#loader").show();
  let user = JSON.parse(localStorage.getItem("user"));
  let token = user != null ? user.token : "";

  if (user == null) {
    location.href = baseUrl + "login";
    return false;
  }

  $.ajax({
    url: baseAPIUrl + "/partners/" + partner + "/view",
    type: "GET",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + token,
    },
    dataType: "json",
    ContentType: "application/json;",
    success: function (data) {
      //console.log("in success");
      console.log(data);

      if (data.status === "success") {
        localStorage.setItem(
          "initpartnerdetails",
          JSON.stringify(data.partnerdetails)
        );
      }
      let partnerObj = JSON.parse(localStorage.getItem("initpartnerdetails"));
      // console.log("partner object: ");
      // console.log(partnerObj);
      fillReviewPage(partnerObj);
      $("#loader").hide();
      return;
    },
    error: function (data) {
      if (data.status === 401) {
        location.href = baseUrl + "login";
        return false;
      }
      $("#loader").hide();
      responseText = data.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
      return false;
    },
  });
}

/***********************/
/* Init Functions - PArtner Profile */
/**********************/
function initPartnerProfile() {
  $("#loader").show();
  let user = JSON.parse(localStorage.getItem("user"));
  let token = user != null ? user.token : "";

  if (user == null) {
    location.href = baseUrl + "login";
    return false;
  }

  $.ajax({
    url: baseAPIUrl + "/profile",
    type: "GET",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + token,
    },
    dataType: "json",
    ContentType: "application/json;",
    success: function (data) {
      //console.log("in success");
      console.log(data);

      if (data.status === "success") {
        localStorage.setItem(
          "initpartnerprofile",
          JSON.stringify(data.partnerprofile)
        );
      }
      let partnerObj = JSON.parse(localStorage.getItem("initpartnerprofile"));
      // console.log("partner object: ");
      // console.log(partnerObj);
      fillProfilePage(partnerObj);
      $("#loader").hide();
      return;
    },
    error: function (data) {
      if (data.status === 401) {
        location.href = baseUrl + "login";
        return false;
      }
      $("#loader").hide();
      responseText = data.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
      return false;
    },
  });
}


/***********************/
/* Init Functions - Dashboard */
/**********************/
function initDashboard() {
  //alert("initdashboard called");
  let user = JSON.parse(localStorage.getItem("user"));

  if (user != null && user.user_type != USER_ADMIN_TYPE) {
    $("#sidebar ul li.registration-nav-item").css("display", "none");
  }

  let currentDate = new Date();
  let year = currentDate.getFullYear();
  let month = ("0" + (currentDate.getMonth() + 1)).slice(-2);
  let endDate = new Date(year, month, 0).getDate();

  $(".dashboard-page #startdate").val(year + "-" + month + "-01");
  $(".dashboard-page #enddate").val(year + "-" + month + "-" + endDate);

  getDashboard(user);
}

function initPipelineFilter(formData) {
  let user = JSON.parse(localStorage.getItem("user"));

  if (user == null || user == "" || typeof user == "undefined") {
    snackbar("You are not logged in");
    return false;
  }

  //let url = baseAPIUrl + "/pipelines/<?=$filter1?>/<?=$filter2?>";
  let url = baseAPIUrl + "/pipelines/filter";
  //alert(url);
  console.log("error 2" + user.token);
  $.ajax({
    url: url,
    type: "POST",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + user.token,
    },
    dataType: "json",
    data: formData,
    processData: false,
    contentType: false,
    success: function (response) {
      console.log("in success");
      console.log(response);
      if (response.status == "success") {
        data = response.pipelines;
        $("#page-pipeline-filter h4").html(response.title);
        appendPipelineFilterRow(data);
      }

      return;
    },
    error: function (data) {
      console.log("in failure");
      console.log(data);
      return false;
    },
  });
}

/***********************/
/* Init Functions - Pipeline */
/**********************/
function initPipelineForm() {
  let user = JSON.parse(localStorage.getItem("user"));
  let token = user != null ? user.token : "";

  if (user == null) {
    location.href = baseUrl + "login";
    return false;
  }

  $.ajax({
    url: baseAPIUrl + "/pipeline/create",
    type: "GET",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + token,
    },
    dataType: "json",
    ContentType: "application/json;",
    success: function (data) {
      //console.log("in success");
      console.log(data);

      // localStorage.setItem("initpipeline", JSON.stringify(data));

      var regionStr = "";
      if (data.status === "ok") {
        localStorage.setItem(
          "initpipelineform",
          JSON.stringify(data.pipelineform)
        );

        $pipelineForm = data.pipelineform;

        document.getElementById("ppotentialid").value =
          $pipelineForm.potential_id;
	document.getElementById("roatpi").value = $pipelineForm.partner.ro;

        /* Setting the Region dropdown */
        $stateOptionsStr = "<option value=''>Select Region</option>";
        $stateOptionsStr += createRegionSelection($pipelineForm.states, "");
        $("#rbpregion").html($stateOptionsStr);

        /* Setting the Customer Region */
        $stateOptionsStr = "<option value=''>Select Customer Region</option>";
        $stateOptionsStr += createRegionSelection($pipelineForm.states, "");
        $("#cregion").html($stateOptionsStr);

        /*setting the business industry dropdown*/
        $biOptionsStr = "<option value=''>Select Business Industry</option>";
        $biOptionsStr += createSelection($pipelineForm.business_industries, "");
        //alert($biOptionsStr);
        $("#industry").html($biOptionsStr);

        /*setting the account type dropdown*/
        $acctypeOptionsStr = "<option value=''>Select Account Type</option>";
        $acctypeOptionsStr += createSelection($pipelineForm.account_types, "");
        $("#cracTypeegion").html($acctypeOptionsStr);

        /*setting the sbu dropdown*/
        $sbuOptionsStr = "<option value=''>Select SBU</option>";
        $sbuOptionsStr += createSBUSelection($pipelineForm.sbus, "");
        $("#sbu").html($sbuOptionsStr);

        /*setting the sbu product dropdown*/
        $productOptionsStr = "<option value=''>Select Product</option>";
        $productOptionsStr += createProdSelection(
          $pipelineForm.sbuProducts,
          ""
        );
        $("#cProduct").html($productOptionsStr);

        /*setting the stage dropdown*/
        $stageOptionsStr = "<option value=''>Select Stage</option>";
        $stageOptionsStr += createSelection($pipelineForm.stages, "");
        $("#pStage").html($stageOptionsStr);

        /*setting the rating dropdown*/
        $ratingOptionsStr = "<option value=''>Select Rating</option>";
        $ratingOptionsStr += createRatingSelection($pipelineForm.ratings, "");
        $("#pRating").html($ratingOptionsStr);

        /*setting the contract period dropdown*/

        $cpOptionsStr = "<option value=''>Select Contract Period</option>";
        $cpOptionsStr += createCPSelection($pipelineForm.contract_periods, "");
        $("#cpinmonths").html($cpOptionsStr);

        /*setting the payment term dropdown*/
        $payTermOptionsStr = "<option value=''>Select Payment Term</option>";
        $payTermOptionsStr += createSelection($pipelineForm.payment_terms, "");
        $("#paymentterm").html($payTermOptionsStr);

        /*setting the customer type dropdown*/
        $custTypeOptionsStr = "<option value=''>Select Customer Type</option>";
        $custTypeOptionsStr += createCustTypeSelection(
          $pipelineForm.customer_types,
          ""
        );
        $("#cpcusttype").html($custTypeOptionsStr);

        /*setting the commission type dropdown*/
        $commTypeOptionsStr =
          "<option value=''>Select Commission Type</option>";
        $commTypeOptionsStr += createSelection(
          $pipelineForm.commission_types,
          ""
        );
        $("#cmmsontype").html($commTypeOptionsStr);
	let today = getCurrentDate();
        $("#podate").val(today);
      }

      return;
    },
    error: function (data) {
      if (data.status === 401) {
        location.href = baseUrl + "login";
        return false;
      }
      responseText = data.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
      return false;
    },
  });
}

function initPipelines() {
  //console.log("in initPipelines");
  let user = JSON.parse(localStorage.getItem("user"));

  if (user == null) {
    location.href = baseUrl + "login";
    return false;
  }

  $.ajax({
    url: baseAPIUrl + "/pipelines",
    type: "GET",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      console.log(data);
      localStorage.setItem("pipelines", JSON.stringify(data.pipelines));
      localStorage.setItem(
        "pipedependencies",
        JSON.stringify(data.dependencies)
      );
      appendPipelineRow();
    },
    error: function (data) {
      if (data.status === 401) {
        location.href = baseUrl + "login";
        return false;
      }
      responseText = data.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
      return false;
    },
  });
}

/***********************/
/* Init Functions - GTM */
/**********************/
function initGtmFundRequestList() {
  //show the loader
  $("#loader").show();
  let user = JSON.parse(localStorage.getItem("user"));

  if (user == null) {
    location.href = baseUrl + "login";
    return false;
  }

  $.ajax({
    url: baseAPIUrl + "/gtmfundrequests",
    type: "GET",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      //console.log(data);
      localStorage.setItem(
        "gtmfundrequests",
        JSON.stringify(data.gtmfundrequests)
      );
      appendGTMFundRequestRow();
      $("#loader").hide();
    },
    error: function (data) {
      $("#loader").hide();
      if (data.status === 401) {
        location.href = baseUrl + "login";
        return false;
      }
      responseText = data.responseText;
      //console.log(responseText);
      snackbar(JSON.parse(responseText).message);
      return false;
    },
  });
}

function initGtmJointMediaCampaignList() {
  $("#loader").show();
  let user = JSON.parse(localStorage.getItem("user"));

  if (user == null) {
    location.href = baseUrl + "login";
    return false;
  }

  $.ajax({
    url: baseAPIUrl + "/gtmmediacampaignrequests",
    type: "GET",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      //console.log(data);
      localStorage.setItem(
        "gtmmediacampaignrequests",
        JSON.stringify(data.gtmmediacampaignrequests)
      );
      appendGTMMediaCampaignRequestRow();
      $("#loader").hide();
    },
    error: function (data) {
      $("#loader").hide();
      if (data.status === 401) {
        location.href = baseUrl + "login";
        return false;
      }
      responseText = data.responseText;
      //console.log(responseText);
      snackbar(JSON.parse(responseText).message);
      return false;
    },
  });
}

function initGtmCollateralRequestList() {
  $("#loader").show();
  let user = JSON.parse(localStorage.getItem("user"));

  if (user == null) {
    location.href = baseUrl + "login";
    return false;
  }

  $.ajax({
    url: baseAPIUrl + "/gtmcollateralrequests",
    type: "GET",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      //console.log(data);
      localStorage.setItem(
        "gtmmediacollateralrequests",
        JSON.stringify(data.gtmcollateralrequests)
      );
      appendGTMCollateralRequestRow();
      $("#loader").hide();
    },
    error: function (data) {
      $("#loader").hide();
      if (data.status === 401) {
        location.href = baseUrl + "login";
        return false;
      }
      responseText = data.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
      return false;
    },
  });
}

function initGTMJointEventRequestList() {
  $("#loader").show();
  let user = JSON.parse(localStorage.getItem("user"));

  if (user == null) {
    location.href = baseUrl + "login";
    return false;
  }

  $.ajax({
    url: baseAPIUrl + "/gtmjointeventrequests",
    type: "GET",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    dataType: "json",
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      console.log(data);
      localStorage.setItem(
        "gtmjointeventrequests",
        JSON.stringify(data.gtmJErequests)
      );
      appendGTMJERequestRow();
      $("#loader").hide();
    },
    error: function (data) {
      $("#loader").hide();
      if (data.status === 401) {
        location.href = baseUrl + "login";
        return false;
      }
      responseText = data.responseText;
      // console.log(responseText);
      snackbar(JSON.parse(responseText).message);
      return false;
    },
  });
}
/***********************/
/* Functions - Registration */
/**********************/

function getRegistrations(status) {
  $("#loader").show();
  let user = JSON.parse(localStorage.getItem("user"));

  if (user == null) {
    location.href = baseUrl + "login";
    return false;
  }

  if (status === "pending") {
    url = baseAPIUrl + "/partners/pending";
  } else if (status === "approved") {
    url = baseAPIUrl + "/partners/approved";
  } else if (status === "rejected") {
    url = baseAPIUrl + "/partners/rejected";
  } else {
    url = baseAPIUrl + "/partners/pending";
  }

  $.ajax({
    url: url,
    type: "GET",
    crossDomain: true,
    headers: {
      Authorization: "Bearer " + user.token,
    },
    dataType: "json",
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      partners = data.partners;
      console.log("pending partners");
      console.log(partners);

      localStorage.setItem("partners", JSON.stringify(partners));
      document.querySelector("#pending-registrtaion tbody").innerHTML = "";

      if (status === "pending") {
        partners.forEach(appendRegistrationRow);
      } else if (status === "approved") {
        partners.forEach(appendRegProcessedRow);
      } else if (status === "rejected") {
        partners.forEach(appendRegProcessedRow);
      }
      $("#loader").hide();
    },
    error: function (data) {
      $("#loader").hide();
      if (data.status === 401) {
        location.href = baseUrl + "login";
        return false;
      }
      responseText = data.responseText;
      console.log(responseText);
      snackbar(JSON.parse(responseText).message);
      return false;
    },
  });
}

function appendRegistrationRow(item, index) {
  var dateStr = item.created_at.split("T");
  var dateParts = dateStr[0].split("-");

  var name = "";
  if (item.partner_personal_info != null) {
    name = getPartnerName(item);
  }
  comp_name =
    item.partner_org_info === null ? "" : item.partner_org_info.comp_name;
  partner_type =
    item.partner_tech_info === null ? "" : item.partner_tech_info.partner_type;

  let rowStr = "";
  rowStr +=
    "<tr data-ref='" +
    index +
    "'>" +
    "<td>" +
    comp_name +
    "</td>" +
    "<td>" +
    name +
    "</td>" +
    "<td>" +
    partner_type +
    "</td>" +
    "<td>" +
    item.business_email +
    "</td>" +
    "<td>" +
    dateParts[2] +
    "-" +
    dateParts[1] +
    "-" +
    dateParts[0] +
    "</td>" +
    "<td class='text-center reg-review'>" +
    '<a href="' +
    baseUrl +
    "partners/" +
    item.partner_ref_no +
    '/view" class="btn btn-default btn-info">Review</a>' +
    "</td>" +
    "<td class='text-center reg-approve'>" +
    '<button class="btn btn-default btn-success">Approve</button>' +
    "</td>" +
    "<td class='text-center reg-reject'>" +
    '<button class="btn btn-default btn-danger">Reject</button>' +
    "</td>" +
    "<td class='text-center reg-gen-cert'>" +
    '<button type="button" id="btn-gen-cert" class="btn btn-default btn-info">Generate Certificate</button>' +
    "</td>";

  if (item.certificate === "") {
    rowStr += "<td class='text-center'>&nbsp;</td>";
  } else {
    rowStr +=
      "<td class='text-center reg-cert-link'>" +
      "<a href='" +
      item.certificate +
      "' download>Download Certificate</a>" +
      "</td>";
  }
  rowStr += "</tr>";

  document.querySelector("#pending-registrtaion tbody").innerHTML += rowStr;
}

function appendRegProcessedRow(item, index) {
  var dateStr = item.created_at.split("T");
  var dateParts = dateStr[0].split("-");

  var name = "";
  if (item.partner_personal_info != null) {
    name = getPartnerName(item);
  }
  comp_name =
    item.partner_org_info === null ? "" : item.partner_org_info.comp_name;
  partner_type =
    item.partner_tech_info === null ? "" : item.partner_tech_info.partner_type;

  document.querySelector("#pending-registrtaion tbody").innerHTML +=
    "<tr data-ref='" +
    index +
    "'>" +
    "<td>" +
    comp_name +
    "</td>" +
    "<td>" +
    name +
    "</td>" +
    "<td>" +
    partner_type +
    "</td>" +
    "<td>" +
    item.business_email +
    "</td>" +
    "<td>" +
    dateParts[2] +
    "-" +
    dateParts[1] +
    "-" +
    dateParts[0] +
    "</td>" +
    "<td class='text-center reg-review'>" +
    '<a href="' +
    baseUrl +
    "partners/" +
    item.partner_ref_no +
    '/view" class="btn btn-default btn-info">Review</a>' +
    "</td>" +
    "</tr>";
}

function fillReviewPage(partnerObj) {
  if (partnerObj.status === PENDING_STATE) {
    if ($("#page-single-partner #row-cta #cta-wrap").hasClass("hide")) {
      $("#page-single-partner #row-cta #cta-wrap").removeClass("hide");
    }
  } else {
    if (!$("#page-single-partner #row-cta #cta-wrap").hasClass("hide")) {
      $("#page-single-partner #row-cta #cta-wrap").addClass("hide");
    }
  }

  $("#partnerstatus").val(partnerObj.status);

  if (partnerObj.status == REJECTED_STATE) {
    if (partnerObj.rejection_comment == null) {
      partnerObj.rejection_comment = "";
    }
    $("#rejection-comment-wrap #rejectionreason").html(
      partnerObj.rejection_comment
    );
    if ($("#rejection-comment-wrap").hasClass("hide")) {
      $("#rejection-comment-wrap").removeClass("hide");
    }
  } else {
    if (!$("#rejection-comment-wrap").hasClass("hide")) {
      $("#rejection-comment-wrap").addClass("hide");
    }
  }

  if (partnerObj.partner_personal_info != null) {
    $("#patnername").val(getPartnerName(partnerObj));
    $("#jobtitle").val(partnerObj.partner_personal_info.designation);
    $("#partneremail").val(partnerObj.partner_personal_info.business_email);
    $("#partnermobile").val(getPartnerMobile(partnerObj));
  }

  if (partnerObj.partner_org_info != null) {
    $("#ro-at-pi").val(partnerObj.partner_org_info.ro_name);
    $("#compname").val(partnerObj.partner_org_info.comp_name);
    $("#compwebsite").val(partnerObj.partner_org_info.comp_website);
    $("#compdesc").val(partnerObj.partner_org_info.comp_desc);
    $("#comphqadd").val(partnerObj.partner_org_info.comp_hq);
    $("#zip").val(partnerObj.partner_org_info.pincode);
    $("#country").val(partnerObj.partner_org_info.country);
    $("#state").val(partnerObj.partner_org_info.state);
    $("#city").val(partnerObj.partner_org_info.city);
    $("#empstrength").val(partnerObj.partner_org_info.comp_size);
    $("#annualrevenue").val(partnerObj.partner_org_info.annual_revenue);
    $("#indusvert").val(partnerObj.partner_org_info.industry);
    $("#lob").val(partnerObj.partner_org_info.lob);
    if ("others" == partnerObj.partner_org_info.lob.toLowerCase()) {
      $("#lob_other").val(partnerObj.partner_org_info.lob_other);
      $("#lob_other").removeClass("hide");
    } else {
      $("#lob_other").val("");
      $("#lob_other").addClass("hide");
    }
    $("#clientbase").val(partnerObj.partner_org_info.client_base);
  }

  if (partnerObj.partner_tech_info != null) {
    $("#usecase").val(partnerObj.partner_tech_info.use_case_expertise);
    $("#techexpertise").val(partnerObj.partner_tech_info.technology_expertise);
    $("#profservices").val(
      partnerObj.partner_tech_info.professional_services_offered
    );
    $("#interestedservices").val(
      partnerObj.partner_tech_info.interested_ser_prod_at_pi
    );

    $("#businesscase").val(partnerObj.partner_tech_info.busi_case_brief);

    $("#payoutmodel").val(partnerObj.partner_tech_info.partner_type);

    if (
      partnerObj.partner_tech_info.agreement_doc != null &&
      partnerObj.partner_tech_info.agreement_doc != ""
    ) {
      $("#agreement_doc").attr(
        "href",
        apiDomainUrl + partnerObj.partner_tech_info.agreement_doc
      );
      let doc_parts = partnerObj.partner_tech_info.agreement_doc.split("/");
      //alert(doc_parts[5]);
      $("#agreement_doc").html(doc_parts[doc_parts.length - 1]);
    }

    if (
      partnerObj.partner_tech_info.nda_doc != null &&
      partnerObj.partner_tech_info.nda_doc != ""
    ) {
      $("#nda_doc").attr(
        "href",
        apiDomainUrl + partnerObj.partner_tech_info.nda_doc
      );
      let doc_parts = partnerObj.partner_tech_info.nda_doc.split("/");
      //alert(doc_parts[5]);
      $("#nda_doc").html(doc_parts[doc_parts.length - 1]);
    }
  }

  if (partnerObj.certificate != "" && partnerObj.certificate != null) {
    $("#lnk-cert").attr("href", partnerObj.certificate);
    if ($("#cert-card").hasClass("hide")) {
      $("#cert-card").removeClass("hide");
    }
  } else {
    if (!$("#cert-card").hasClass("hide")) {
      $("#cert-card").addClass("hide");
    }
  }
}

function fillProfilePage(partnerObj) {
  if (partnerObj.partner_personal_info != null) {
    $("#partner-ref").val(partnerObj.partner_ref_no);
    $("#patnername").val(getPartnerName(partnerObj));
    $("#jobtitle").val(partnerObj.partner_personal_info.designation);
    $("#partneremail").val(partnerObj.partner_personal_info.business_email);
    $("#partnermobile").val(getPartnerMobile(partnerObj));
  }

  if (partnerObj.partner_org_info != null) {
    $("#compname").val(partnerObj.partner_org_info.comp_name);
    $("#compwebsite").val(partnerObj.partner_org_info.comp_website);
    $("#compdesc").val(partnerObj.partner_org_info.comp_desc);
    $("#comphqadd").val(partnerObj.partner_org_info.comp_hq);
    $("#zip").val(partnerObj.partner_org_info.pincode);
    $("#country").val(partnerObj.partner_org_info.country);
    $("#state").val(partnerObj.partner_org_info.state);
    $("#city").val(partnerObj.partner_org_info.city);
    $("#empstrength").val(partnerObj.partner_org_info.comp_size);
    $("#annualrevenue").val(partnerObj.partner_org_info.annual_revenue);
    $("#indusvert").val(partnerObj.partner_org_info.industry);
    $("#lob").val(partnerObj.partner_org_info.lob);
    if ("others" == partnerObj.partner_org_info.lob.toLowerCase()) {
      $("#lob_other").val(partnerObj.partner_org_info.lob_other);
      $("#lob_other").removeClass("hide");
    } else {
      $("#lob_other").val("");
      $("#lob_other").addClass("hide");
    }
    $("#clientbase").val(partnerObj.partner_org_info.client_base);
  }

  if (partnerObj.partner_tech_info != null) {
    $("#usecase").val(partnerObj.partner_tech_info.use_case_expertise);
    $("#techexpertise").val(partnerObj.partner_tech_info.technology_expertise);
    $("#profservices").val(
      partnerObj.partner_tech_info.professional_services_offered
    );
    $("#interestedservices").val(
      partnerObj.partner_tech_info.interested_ser_prod_at_pi
    );

    $("#businesscase").val(partnerObj.partner_tech_info.busi_case_brief);

    $("#payoutmodel").val(partnerObj.partner_tech_info.partner_type);

    if (
      partnerObj.partner_tech_info.agreement_doc != null &&
      partnerObj.partner_tech_info.agreement_doc != ""
    ) {
      $("#agreement_doc").attr(
        "href",
        apiDomainUrl + partnerObj.partner_tech_info.agreement_doc
      );
      let doc_parts = partnerObj.partner_tech_info.agreement_doc.split("/");
      //alert(doc_parts[5]);
      $("#agreement_doc").html(doc_parts[doc_parts.length - 1]);
    }

    if (
      partnerObj.partner_tech_info.nda_doc != null &&
      partnerObj.partner_tech_info.nda_doc != ""
    ) {
      $("#nda_doc").attr(
        "href",
        apiDomainUrl + partnerObj.partner_tech_info.nda_doc
      );
      let doc_parts = partnerObj.partner_tech_info.nda_doc.split("/");
      //alert(doc_parts[5]);
      $("#nda_doc").html(doc_parts[doc_parts.length - 1]);
    }
  }

  if (partnerObj.certificate != "" && partnerObj.certificate != null) {
    $("#lnk-cert").attr("href", partnerObj.certificate);
    if ($("#cert-card").hasClass("hide")) {
      $("#cert-card").removeClass("hide");
    }
  } else {
    if (!$("#cert-card").hasClass("hide")) {
      $("#cert-card").addClass("hide");
    }
  }
}

/*
function fillReviewPop(partnerObj) {
  if (partnerObj.partner_personal_info != null) {
    $("#reviewpop #patnername").val(getPartnerName(partnerObj));
    $("#reviewpop #jobtitle").val(partnerObj.partner_personal_info.designation);
    $("#reviewpop #partneremail").val(
      partnerObj.partner_personal_info.business_email
    );
    $("#reviewpop #partnermobile").val(getPartnerMobile(partnerObj));
  }

  if (partnerObj.partner_org_info != null) {
    $("#reviewpop #compname").val(partnerObj.partner_org_info.comp_name);
    $("#reviewpop #compwebsite").val(partnerObj.partner_org_info.comp_website);
    $("#reviewpop #compdesc").val(partnerObj.partner_org_info.comp_desc);
    $("#reviewpop #comphqadd").val(partnerObj.partner_org_info.comp_hq);
    $("#reviewpop #zip").val(partnerObj.partner_org_info.pincode);
    $("#reviewpop #country").val(partnerObj.partner_org_info.country);
    $("#reviewpop #state").val(partnerObj.partner_org_info.state);
    $("#reviewpop #city").val(partnerObj.partner_org_info.city);
    $("#reviewpop #empstrength").val(partnerObj.partner_org_info.comp_size);
    $("#reviewpop #annualrevenue").val(
      partnerObj.partner_org_info.annual_revenue
    );
    $("#reviewpop #indusvert").val(partnerObj.partner_org_info.industry);
    $("#reviewpop #lob").val(partnerObj.partner_org_info.lob);
    $("#reviewpop #clientbase").val(partnerObj.partner_org_info.client_base);
  }

  if (partnerObj.partner_tech_info != null) {
    $("#reviewpop #usecase").val(
      partnerObj.partner_tech_info.use_case_expertise
    );
    $("#reviewpop #techexpertise").val(
      partnerObj.partner_tech_info.technology_expertise
    );
    $("#reviewpop #profservices").val(
      partnerObj.partner_tech_info.professional_services_offered
    );
    $("#reviewpop #interestedservices").val(
      partnerObj.partner_tech_info.interested_ser_prod_at_pi
    );

    $("#reviewpop #businesscase").val(
      partnerObj.partner_tech_info.busi_case_brief
    );

    $("#reviewpop #payoutmodel").val(partnerObj.partner_tech_info.partner_type);
  }

  
}
*/

function getPartnerName(partnerObj) {
  //alert("in getPArtnername" + partnerObj.personalinfos.first_name);
  return (
    partnerObj.partner_personal_info.title +
    " " +
    partnerObj.partner_personal_info.first_name +
    " " +
    partnerObj.partner_personal_info.last_name
  );
}
function getPartnerMobile(partnerObj) {
  //alert("in getPArtnername" + partnerObj.personalinfos.first_name);
  return (
   // partnerObj.partner_personal_info.mobile_code +
    partnerObj.partner_personal_info.mobile_number
  );
}

function goBack() {
  window.history.back();
}

/***********************/
/* Functions - Pipeline */
/**********************/

function calculatePC(commsonTypeArr, custTypeArr) {
  let projectedCommission = 0;
  let cmmsontype = document.getElementById("cmmsontype").value;
  let pmrc = document.getElementById("pmrc").value;
  let acv = document.getElementById("pacv").value;
  let custtype = document.getElementById("cpcusttype").value;
  let cpinmonths = document.getElementById("cpinmonths").value;

  var commsonObj = commsonTypeArr.find((obj) => {
    return obj.id == cmmsontype;
  });

  var custObj = custTypeArr.find((obj) => {
    return obj.id == custtype;
  });

  if (commsonObj == undefined || custObj == undefined) {
    //console.log("commsonObj or custObj was undefined");
    return 0;
  }

  if (pmrc == "" || acv == "" || cpinmonths == -1) {
    // console.log("mrc or acv was empty or con period was -1");
    return 0;
  }

  if (cmmsontype != "" && commsonObj.display_value === "onetime") {
    if (pmrc >= 1) {
      projectedCommission = acv * 0.1;
    } else {
      projectedCommission = acv * 0.07;
    }
  } else if (commsonObj.display_value === "recurring") {
    //console.log("cmmsontype was recurring");
    if (custObj.customer_type_value === "new-logo") {
      //console.log("custObj was new-logo");
      projectedCommission = pmrc * 0.1 * cpinmonths;
    } else if (custObj.customer_type_value === "existing-logo") {
      //console.log("custObj was existing-logo");
      projectedCommission = pmrc * 0.5 * cpinmonths;
    } else {
      //console.log("custtype was something else " + custObj.display_value);
    }
  } else {
    //console.log("commontype was something else");
  }
  return roundToTwo(projectedCommission);
}

function triggerCalculatePC() {
  //alert("comm type changed");

  let pipelineForm =
    localStorage.getItem("initpipelineform") != null
      ? JSON.parse(localStorage.getItem("initpipelineform"))
      : "";
  let dependencies =
    localStorage.getItem("pipedependencies") != null
      ? JSON.parse(localStorage.getItem("pipedependencies"))
      : "";

  let commTypeArr = "";
  if (pipelineForm != "") {
    commTypeArr = pipelineForm.commission_types;
  }
  if (dependencies != "") {
    commTypeArr = dependencies.commission_types;
  }

  let custTypeArr = "";
  if (pipelineForm != "") {
    custTypeArr = pipelineForm.customer_types;
  }
  if (dependencies != "") {
    custTypeArr = dependencies.customer_types;
  }

  // console.log("commtypearr");
  // console.log(commTypeArr);

  // console.log("custTypeArr");
  // console.log(custTypeArr);

  if (commTypeArr == "" || custTypeArr == "") {
    document.getElementById("projectedcms").value = "";
  } else {
    document.getElementById("projectedcms").value = calculatePC(
      commTypeArr,
      custTypeArr
    );
  }
}

function updateSbuProducts() {
  var selectedSBU = document.getElementById("sbu").value;
  //alert(selectedSBU);

  $.ajax({
    url: baseAPIUrl + "/pipeline/sbu/" + selectedSBU + "/products",
    type: "GET",
    crossDomain: true,
    dataType: "json",
    ContentType: "application/json;",
    success: function (data) {
      console.log("in success");
      // console.log(data);

      var productStr = "";
      if (data.status === "ok") {
        //console.log("products " + JSON.parse(data));
        data.products.forEach(function (item, index) {
          productStr +=
            "<option value='" + item.id + "'>" + item.prod_name + "</option>";
        });

        //alert(productStr);
        document.getElementById("cProduct").innerHTML = productStr;
      }

      return;
    },
    error: function (data) {
      console.log("in failure");
      console.log(data);
      return false;
    },
  });
}

function updateRatingProbability() {
  var selectedRating = document.getElementById("pRating").value;
  var lsPipeline = "";

  if (selectedRating == "") {
    document.getElementById("probability").value = "";
    return false;
  }

  if (localStorage.getItem("initpipelineform") != null) {
    lsPipeline = localStorage.getItem("initpipelineform");
    let ratings = JSON.parse(lsPipeline).ratings;

    var ratingObj = ratings.find((obj) => {
      return obj.id == selectedRating;
    });

    document.getElementById("probability").value = ratingObj.rate_probability;
  } else if (
    (dependencies = localStorage.getItem("pipedependencies")) != null
  ) {
    let ratings = JSON.parse(dependencies).ratings;

    var ratingObj = ratings.find((obj) => {
      return obj.id == selectedRating;
    });
    document.getElementById("probability").value = ratingObj.rate_probability;
  } else {
    document.getElementById("probability").value = "";
  }
}

function updateEditRatingProbability() {
  var selectedRating = document.getElementById("pRating").value;

  var lsPipeline = "";

  if (selectedRating == "") {
    //document.getElementById("probability").value = "";
    $("#pipeline-editpop #probability").val("");
    return false;
  }

  if ((dependencies = localStorage.getItem("pipedependencies")) != null) {
    let ratings = JSON.parse(dependencies).ratings;

    var ratingObj = ratings.find((obj) => {
      return obj.id == selectedRating;
    });

    //document.getElementById("probability").value = ratingObj.rate_probability;
    $("#pipeline-editpop #probability").val(ratingObj.rate_probability);
  } else {
    //document.getElementById("probability").value = "";
    $("#pipeline-editpop #probability").val("");
  }
}

function appendPipelineRow() {
  let user = JSON.parse(localStorage.getItem("user"));
  //console.log(user.type);
  //console.log(user.token);
  var pipelines = JSON.parse(localStorage.getItem("pipelines"));

  var rowStr = "";
  pipelines.forEach(function (item, index) {
    let actionBtnStr = "";

    if (user.type == USER_ADMIN_TYPE) {
      if (item.status == REJECTED_STATE) {
        actionBtnStr +=
          "<td class='text-center pipeline-approve'><button class='btn btn-default btn-secondary' disabled='true'>Approve</button></td>" +
          "<td class='text-center pipeline-reject'><button class='btn btn-default btn-secondary' disabled='true'>Reject</button></td>";
      } else if (item.status == APPROVED_STATE) {
        actionBtnStr +=
          "<td class='text-center pipeline-approve'><button class='btn btn-default btn-secondary' disabled='true'>Approve</button></td>" +
          "<td class='text-center pipeline-reject'><button class='btn btn-default btn-danger'>Reject</button></td>";
      } else {
        actionBtnStr +=
          "<td class='text-center pipeline-approve'><button class='btn btn-default btn-success'>Approve</button></td>" +
          "<td class='text-center pipeline-reject'><button class='btn btn-default btn-danger'>Reject</button></td>";
      }
    } else {
      actionBtnStr +=
        "<td colspan='2' >" +
        "<button type='button' class='btn btn-icons btn-rounded btn-success pi-view' title='VIEW' style='cursor: pointer;'>" +
        "<i class='mdi mdi-eye'></i>" +
        "</button>";

      if (item.status == APPROVED_STATE) {
        actionBtnStr +=
          "<button type='button' class='btn btn-icons btn-rounded btn-info pi-edit' title='EDIT' style='cursor: pointer;'>" +
          "<i class='mdi mdi-account-edit'></i>" +
          "</button>";
      }
      actionBtnStr += "</td>";
    }

    let classStr = "";
    if (index % 3 == 0) {
      classStr = "dt-bg-white";
    } else if (index % 3 == 1) {
      classStr = "dt-bg-light";
    } else {
      classStr = "dt-bg-dark";
    }

    if (item.status == REJECTED_STATE) {
      classStr += " bg-grey ";
    }

    rowStr +=
      "<tr class='" +
      classStr +
      "' data-ref='" +
      item.id +
      "' data-idx='" +
      index +
      "'>";
    rowStr += actionBtnStr;
    rowStr +=
      "<td>" +
      item.potential_id +
      " <a href='' class='potentialid'>" +
      "<i class='fa fa-external-link-square'></i>" +
      "</a></td>" +
      "<td>" +
      item.rbp_name +
      "</td>" +
      "<td>" +
      item.customer_name +
      "</td>" +
      "<td>" +
      item.product.prod_name +
      "</td>" +
      "<td>" +
      item.stage.display_name /*need to  change the value stored in the db*/ +
      "</td>" +
      "<td>" +
      item.mrc +
      "</td>" +
      "<td>" +
      item.otc +
      "</td>" +
      "<td>" +
      item.arc +
      "</td>" +
      "<td>" +
      item.acv +
      "</td>" +
      "<td>" +
      item.tcv +
      "</td>" +
      "<td>" +
      item.contract_period +
      "</td>" +
      "<td>" +
      item.closing_date +
      "</td>" +
      "<td>" +
      item.customer_type.customer_type_name +
      "</td>" +
      "<td>" +
      item.projected_commission +
      "</td>";
    rowStr += "</tr>";
  });
  document.querySelector("#pending-pipelines tbody").innerHTML = rowStr;
}

function fillPipelineEditPop(index) {
  let user = JSON.parse(localStorage.getItem("user"));
  $("#pipeline-editpop form")[0].reset();
  let pipelines = JSON.parse(localStorage.getItem("pipelines"));
  let selectedPipeline = pipelines[index];

  let pipedependencies = JSON.parse(localStorage.getItem("pipedependencies"));

  // console.log("pipedependencies: ");
  // console.log(pipedependencies);
  // console.log("selected pipeline: ");
  // console.log(selectedPipeline);

  $("#pipeline-editpop #pipeline_id").val(selectedPipeline.id);
  $("#pipeline-editpop #potential-id").val(selectedPipeline.potential_id);
  $("#pipeline-editpop #rbpname").val(selectedPipeline.rbp_name);
  $("#pipeline-editpop #salesowner").val(selectedPipeline.sales_owner);
  $("#pipeline-editpop #custname").val(selectedPipeline.customer_name);
  $("#pipeline-editpop #custemail").val(selectedPipeline.customer_email_id);
  $("#pipeline-editpop #pmrc").val(selectedPipeline.mrc);
  $("#pipeline-editpop #potc").val(selectedPipeline.otc);
  $("#pipeline-editpop #parc").val(selectedPipeline.arc);
  $("#pipeline-editpop #pacv").val(selectedPipeline.acv);
  $("#pipeline-editpop #ptcv").val(selectedPipeline.tcv);
  $("#pipeline-editpop #opportunity-dt").val(selectedPipeline.opportunity_date);
  $("#pipeline-editpop #proposal-dt").val(selectedPipeline.proposal_date);
  $("#pipeline-editpop #closing-dt").val(selectedPipeline.closing_date);
  $("#pipeline-editpop #projectedcms").val(
    selectedPipeline.projected_commission
  );

  $("#pipeline-editpop #customer-website").val(
    selectedPipeline.customer_website
  );
  $("#pipeline-editpop a#lnk-customer-website").html(
    selectedPipeline.customer_website
  );

  if (
    !selectedPipeline.customer_website.startsWith("http://") &&
    !selectedPipeline.customer_website.startsWith("https://")
  ) {
    $("#pipeline-editpop a#lnk-customer-website").prop(
      "href",
      "//" + selectedPipeline.customer_website
    );
  } else {
    $("#pipeline-editpop a#lnk-customer-website").prop(
      "href",
      selectedPipeline.customer_website
    );
  }


  $("#pipeline-editpop #oppo-details").val(
    selectedPipeline.opportunity_details
  );

  // /* Setting the Region dropdown */
  $stateOptionsStr = "<option value=''>Select Region</option>";
  $stateOptionsStr += createRegionSelection(
    pipedependencies.states,
    selectedPipeline.rbp_state.id
  );
  $("#pipeline-editpop #rbpstate").html($stateOptionsStr);

  /* Setting the Customer Region */
  $stateOptionsStr = "<option value=''>Select Customer Region</option>";
  $stateOptionsStr += createRegionSelection(
    pipedependencies.states,
    selectedPipeline.customer_state.id
  );
  $("#pipeline-editpop #customerstate").html($stateOptionsStr);

  /*setting the business industry dropdown*/
  $biOptionsStr = "<option value=''>Select Business Industry</option>";
  $biOptionsStr += createSelection(
    pipedependencies.business_industries,
    selectedPipeline.business_industry.id,
    true
  );
  $("#pipeline-editpop #business-industry").html($biOptionsStr);

  /*setting the account type dropdown*/
  $acctypeOptionsStr = "<option value=''>Select Account Type</option>";
  $acctypeOptionsStr += createSelection(
    pipedependencies.account_types,
    selectedPipeline.account_type.id,
    true
  );
  $("#pipeline-editpop #account-type").html($acctypeOptionsStr);

  /*setting the sbu dropdown*/
  $sbuOptionsStr = "<option value=''>Select SBU</option>";
  $sbuOptionsStr += createSBUSelection(
    pipedependencies.sbus,
    selectedPipeline.sb_unit.id,
    true
  );
  $("#pipeline-editpop #sbu").html($sbuOptionsStr);

  /*setting the sbu product dropdown*/
  $productOptionsStr = "<option value=''>Select Product</option>";
  $productOptionsStr += createProdSelection(
    pipedependencies.sbuProducts,
    selectedPipeline.product.id
  );
  $("#pipeline-editpop #product").html($productOptionsStr);

  /*setting the stage dropdown*/
  $stageOptionsStr = "<option value=''>Select Stage</option>";
  $stageOptionsStr += createSelection(
    pipedependencies.stages,
    selectedPipeline.stage.id,
    true
  );
  $("#pipeline-editpop #stage").html($stageOptionsStr);

  /*setting the rating dropdown*/
  $ratingOptionsStr = "<option value=''>Select Rating</option>";
  $ratingOptionsStr += createRatingSelection(
    pipedependencies.ratings,
    selectedPipeline.rating.id
  );
  $("#pipeline-editpop #pRating").html($ratingOptionsStr);

  /*setting the contract period dropdown*/
  $cpOptionsStr = "<option value=''>Select Contract Period</option>";
  $cpOptionsStr += createCPSelection(
    pipedependencies.contract_periods,
    selectedPipeline.contract_period
  );
  $("#pipeline-editpop #cpinmonths").html($cpOptionsStr);

  /*setting the payment term dropdown*/
  $payTermOptionsStr = "<option value=''>Select Payment Term</option>";
  //console.log("payment term : " + selectedPipeline.payment_terms);
  $payTermOptionsStr += createSelection(
    pipedependencies.payment_terms,
    selectedPipeline.payment_terms.id,
    true
  );
  $("#pipeline-editpop #payment-term").html($payTermOptionsStr);

  /*setting the customer type dropdown*/
  $custTypeOptionsStr = "<option value=''>Select Customer Type</option>";
  $custTypeOptionsStr += createCustTypeSelection(
    pipedependencies.customer_types,
    selectedPipeline.customer_type.id
  );
  $("#pipeline-editpop #cpcusttype").html($custTypeOptionsStr);

  /*setting the commission type dropdown*/
  $commTypeOptionsStr = "<option value=''>Select Commission Type</option>";
  $commTypeOptionsStr += createSelection(
    pipedependencies.commission_types,
    selectedPipeline.commission_type.id
  );
  $("#pipeline-editpop #cmmsontype").html($commTypeOptionsStr);
  $("#pipeline-editpop #probability").val(
    selectedPipeline.rating.rate_probability
  );

  if (
    selectedPipeline.opportunity_docs != null &&
    selectedPipeline.opportunity_docs != ""
  ) {
    let doc_str = "<ul>";
    let files = selectedPipeline.opportunity_docs.split(";");

    files.forEach(function (file, index) {
      let file_parts = file.split("/");
      let filename = file_parts[file_parts.length - 1];

      doc_str +=
        "<li><a class='mr-2' href='" +
        apiDomainUrl +
        file +
        "' target='_blank'>" +
        filename +
        "</a></li>";
    });
    doc_str += "</ul>";
    $(".current-doc-wrap-inner").html(doc_str);
    if ($(".current-doc-wrap").hasClass("hide")) {
      $(".current-doc-wrap").removeClass("hide");
    }
  } else {
    if (!$(".current-doc-wrap").hasClass("hide")) {
      $(".current-doc-wrap").addClass("hide");
    }
  }
}

function fillPipelinePops(popupid, index) {
  let user = JSON.parse(localStorage.getItem("user"));
  let pipelines = JSON.parse(localStorage.getItem("pipelines"));
  let selectedPipeline = pipelines[index];

  // console.log("pipelines while viewing popup");
  // console.log(selectedPipeline);

  $("#" + popupid + " #potential-id").val(selectedPipeline.potential_id);
  $("#" + popupid + " #rbpname").val(selectedPipeline.rbp_name);
  $("#" + popupid + " #rbpstate").val(selectedPipeline.rbp_state.state_name);
  $("#" + popupid + " #custemail").val(selectedPipeline.customer_email_id);
  $("#" + popupid + " #salesowner").val(selectedPipeline.sales_owner);
  $("#" + popupid + " #customerstate").val(
    selectedPipeline.customer_state.state_name
  );
  $("#" + popupid + " #custname").val(selectedPipeline.customer_name);
  $("#" + popupid + " #custemail").val(selectedPipeline.customer_email_id);
  $("#" + popupid + " #business-industry").val(
    selectedPipeline.business_industry.display_name
  );
  $("#" + popupid + " #account-type").val(
    selectedPipeline.account_type.display_name
  );
  $("#" + popupid + " #sbu").val(selectedPipeline.sb_unit.sbu_name);
  $("#" + popupid + " #product").val(selectedPipeline.product.prod_name);
  $("#" + popupid + " #stage").val(selectedPipeline.stage.display_name);
  $("#" + popupid + " #rating").val(selectedPipeline.rating.rate_name);
  $("#" + popupid + " #probability").val(
    selectedPipeline.rating.rate_probability
  );
  $("#" + popupid + " #mrc").val(selectedPipeline.mrc);
  $("#" + popupid + " #otc").val(selectedPipeline.otc);
  $("#" + popupid + " #arc").val(selectedPipeline.arc);
  $("#" + popupid + " #acv").val(selectedPipeline.acv);
  $("#" + popupid + " #tcv").val(selectedPipeline.tcv);
  $("#" + popupid + " #contract-period").val(
    selectedPipeline.contract_period.display_name
  );
  $("#" + popupid + " #payment-term").val(
    selectedPipeline.payment_terms.display_name
  );
  $("#" + popupid + " #opportunity-dt").val(selectedPipeline.opportunity_date);
  $("#" + popupid + " #proposal-dt").val(selectedPipeline.proposal_date);
  $("#" + popupid + " #closing-dt").val(selectedPipeline.closing_date);
  $("#" + popupid + " #customer-type").val(
    selectedPipeline.customer_type.customer_type_name
  );
  $("#" + popupid + " #commission-type").val(
    selectedPipeline.commission_type.display_name
  );
  $("#" + popupid + " #projected-comm").val(
    selectedPipeline.projected_commission
  );

  if (
    !selectedPipeline.customer_website.startsWith("http://") &&
    !selectedPipeline.customer_website.startsWith("https://")
  ) {
    $("#" + popupid + " #customer-website").prop(
      "href",
      "//" + selectedPipeline.customer_website
    );
  } else {
    $("#" + popupid + " #customer-website").prop(
      "href",
      selectedPipeline.customer_website
    );
  }  

  $("#" + popupid + " #customer-website").html(
    selectedPipeline.customer_website
  );
  $("#" + popupid + " #oppor-details").val(
    selectedPipeline.opportunity_details
  );

  let spanStr = "<ul>";
  if (
    selectedPipeline.opportunity_docs != null &&
    selectedPipeline.opportunity_docs != ""
  ) {
    let docs_array = selectedPipeline.opportunity_docs.split(";");

    docs_array.forEach(function (item) {
      let files = item.split("/");
      let filename = files[files.length - 1];
      spanStr +=
        "<li class='ml-2 mr-2'><a target='_blank' href='" +
        apiDomainUrl +
        "/" +
        item +
        "'>" +
        filename +
        "</a></li>";
    });
  } else {
    spanStr = "<li>None</li>";
  }
  spanStr += "</ul>";
  $("#" + popupid + " #opportunity-docs-wrap").html(spanStr);

}

function createSelection(dataSource, selectedValue = "", matchId = true) {
  //$optionsStr = "<option value=-1>Select Region</option>";
  $optionsStr = "";
  // console.log("in createSelection");
  // console.log("selected value: " + selectedValue);

  if (dataSource != null) {
    dataSource.forEach(function (item, index) {
      $optionsStr += "<option value='" + item.id + "'";

      if (selectedValue != "") {
        if (matchId) {
          if (parseInt(selectedValue) === item.id) {
            $optionsStr += " selected ";
          }
        } else {
          if (selectedValue === item.display_value) {
            $optionsStr += " selected ";
          }
        }
      }

      $optionsStr += ">" + item.display_name + "</option>";
    });
  }

  return $optionsStr;
}

function createRegionSelection(dataSource, selectedValue = "") {
  //$optionsStr = "<option value=-1>Select Region</option>";
  $optionsStr = "";

  if (dataSource != null) {
    dataSource.forEach(function (item, index) {
      $optionsStr += "<option value='" + item.id + "'";

      if (selectedValue === item.id) {
        $optionsStr += " selected ";
      }

      $optionsStr += ">" + item.state_name + "</option>";
    });
  }

  return $optionsStr;
}

function createSBUSelection(dataSource, selectedValue = "") {
  //$optionsStr = "<option value=-1>Select Region</option>";
  $optionsStr = "";

  if (dataSource != null) {
    dataSource.forEach(function (item, index) {
      $optionsStr += "<option value='" + item.id + "'";

      if (selectedValue === item.id) {
        $optionsStr += " selected ";
      }

      $optionsStr += ">" + item.sbu_name + "</option>";
    });
  }

  return $optionsStr;
}

function createProdSelection(dataSource, selectedValue = "") {
  //$optionsStr = "<option value=-1>Select Region</option>";
  $optionsStr = "";

  if (dataSource != null) {
    dataSource.forEach(function (item, index) {
      $optionsStr += "<option value='" + item.id + "'";

      if (selectedValue === item.id) {
        $optionsStr += " selected ";
      }

      $optionsStr += ">" + item.prod_name + "</option>";
    });
  }

  return $optionsStr;
}

function createRatingSelection(dataSource, selectedValue = "") {
  //$optionsStr = "<option value=-1>Select Region</option>";
  $optionsStr = "";

  if (dataSource != null) {
    dataSource.forEach(function (item, index) {
      $optionsStr += "<option value='" + item.id + "'";

      if (selectedValue === item.id) {
        $optionsStr += " selected ";
      }

      $optionsStr += ">" + item.rate_name + "</option>";
    });
  }

  return $optionsStr;
}

function createCustTypeSelection(dataSource, selectedValue = "") {
  //$optionsStr = "<option value=-1>Select Region</option>";
  $optionsStr = "";

  if (dataSource != null) {
    dataSource.forEach(function (item, index) {
      $optionsStr += "<option value='" + item.id + "'";

      if (selectedValue === item.id) {
        $optionsStr += " selected ";
      }

      $optionsStr += ">" + item.customer_type_name + "</option>";
    });
  }

  return $optionsStr;
}

function createCPSelection(dataSource, selectedValue = "") {
  $optionsStr = "";

  if (dataSource != null) {
    dataSource.forEach(function (item, index) {
      $optionsStr += "<option value='" + item.display_value + "'";

      if (selectedValue == item.display_value) {
        $optionsStr += " selected ";
      }

      $optionsStr += ">" + item.display_name + "</option>";
    });
  }

  return $optionsStr;
}
/***********************/
/* Auth Functions */
/**********************/
function logout() {
  if (localStorage.getItem("user") != null) {
    localStorage.removeItem("user");
  }
}

/***********************/
/* Dashboard Functions */
/**********************/
function getDashboard(user) {
  let startDate = document.getElementById("startdate").value;
  let endDate = document.getElementById("enddate").value;

  if (startDate == "" || endDate == "") {
    $("#loader").hide();
    snackbar("Both start and end dates are mandatory.");
    return false;
  }

  if (new Date(endDate) < new Date(startDate)) {
    $("#loader").hide();
    snackbar("End date should be greater than start date");
    return false;
  }

  let formData = {
    startdate: startDate,
    enddate: endDate,
  };

  $.ajax({
    url: baseAPIUrl + "/getDashboardData",
    type: "GET",
    headers: {
      Authorization: "Bearer " + user.token,
    },
    crossDomain: true,
    data: formData,
    dataType: "json",
    ContentType: "application/json; charset=utf-8",
    success: function (data) {
      $("#loader").hide();
      console.log(data);

      if (data.status == "success") {
        renderDashboard(data.dashboard);
      } else {
        snackbar(data.msg);
        return false;
      }
    },
    error: function (data) {
      $("#loader").hide();
      //console.log(data);
      return false;
    },
  });
}

function renderDashboard(dashboardData) {
  $(".card-charges-n-contracts .mrc-wrapper h3").html(
    dashboardData.mrc.total /*Values should be in thousands seperator format*/
  );
  $(".card-charges-n-contracts .mrc-wrapper p").html(
    dashboardData.mrc.difference +
      "(" +
      dashboardData.mrc.differenceInPerc +
      ")"
  );

  /*Populate the ARC values*/
  $(".card-charges-n-contracts .arc-wrapper h3").html(
    dashboardData.arc.total /*Values should be in thousands seperator format*/
  );
  $(".card-charges-n-contracts .arc-wrapper p").html(
    dashboardData.arc.difference +
      "(" +
      dashboardData.arc.differenceInPerc +
      ")"
  );

  /*Populate the OTC values*/
  $(".card-charges-n-contracts .otc-wrapper h3").html(
    dashboardData.otc.total /*Values should be in thousands seperator format*/
  );
  $(".card-charges-n-contracts .otc-wrapper p").html(
    dashboardData.otc.difference +
      "(" +
      dashboardData.otc.differenceInPerc +
      ")"
  );

  /*Populate the ACV values*/
  $(".card-charges-n-contracts .acv-wrapper h3").html(
    dashboardData.acv.total /*Values should be in thousands seperator format*/
  );
  $(".card-charges-n-contracts .acv-wrapper p").html(
    dashboardData.acv.difference +
      "(" +
      dashboardData.acv.differenceInPerc +
      ")"
  );

  /*Populate the TCV values*/
  $(".card-charges-n-contracts .tcv-wrapper h3").html(
    dashboardData.tcv.total /*Values should be in thousands seperator format*/
  );
  $(".card-charges-n-contracts .tcv-wrapper p").html(
    dashboardData.tcv.difference +
      "(" +
      dashboardData.tcv.differenceInPerc +
      ")"
  );

  /*Pipeline By Stage graph*/
  let pipelineByStage = dashboardData.pipelinebystage;
  createPipelineByStageGraph(pipelineByStage);

  //let pipelineByRating = dashboardData.pipelinebyrating;
  //createPipelineByRatingGraph(pipelineByRating);

  let pipelineByCust = dashboardData.pipelinebycust;
  createPipelineByCustGraph(pipelineByCust);

  let pipelineByIndustry = dashboardData.pipelinebyindustry;
  createPipelineByIndustryGraph(pipelineByIndustry);

  createFunnelGraph(dashboardData.pipelinebyrating);
  createDoughnutChart(dashboardData.pipelinebysbu);
  //createCustTypeLineGraph();

  let pipelineRevenueProjection = dashboardData.revenueprojection;
  createRevenuePipelineProjectionGraph(pipelineRevenueProjection);
}

function createPipelineByStageGraph(byStageObj) {
  if (byStageObj != null) {
    var stages = [];
    var pipeCnt = [];
    var barcolor = [];

    for (let key in byStageObj) {
      stages.push(key);
      pipeCnt.push(byStageObj[key]["total"]);
    }

    var ctx = new Chart(document.getElementById("pipe-by-stage"), {
      type: "horizontalBar",
      data: {
        labels: stages,
        datasets: [
          {
            // label: "Number of approved pipelines",
            data: pipeCnt,
            fill: false,
            backgroundColor: [
              "rgba(255, 99, 132, 0.2)",
              "rgba(255, 159, 64, 0.2)",
              "rgba(255, 205, 86, 0.2)",
              "rgba(75, 192, 192, 0.2)",
            ],
            borderColor: [
              "rgb(255, 99, 132)",
              "rgb(255, 159, 64)",
              "rgb(255, 205, 86)",
              "rgb(75, 192, 192)",
            ],
            borderWidth: 1,
          },
        ],
      },
      options: {
        legend: false,
        // legendCallback: function (chart) {
        //   let legendText = `<ul>
        //   <li>X-axis: <span>Number of pipelines</span></li>
        //   <li>Y-axis: <span>Stages</span></li>
        //   </ul>`;
        //   return legendText;
        // },
        tooltips: {
          callbacks: {
            label: function (tooltipItem) {
              //return "$" + Number(tooltipItem.xLabel) + " and so worth it !";
              let key = tooltipItem.yLabel;
              let labelStr =
                "Total MRC: " +
                byStageObj[key]["mrc"] +
                " " +
                "Total OTC: " +
                byStageObj[key]["otc"] +
                " " +
                "Total ACV:" +
                byStageObj[key]["acv"];

              return labelStr;
            },
          },
        },
        scales: {
          xAxes: [
            {
              scaleLabel: {
                display: true,
                labelString: "Number of approved pipelines",
              },
              ticks: {
                beginAtZero: true,
                min: 0,
                max: 50,
                stepSize: 5,
              },
            },
          ],
          yAxes: [
            {
              scaleLabel: {
                display: true,
                labelString: "Stages",
              },
              ticks: {
                autoSkip: false,
                maxRotation: 45,
                minRotation: 45,
              },
              barPercentage: 0.8,
              categoryPercentage: 1,
            },
          ],
        },
      },
    });
  }

  let start = $("#startdate").val();
  let end = $("#enddate").val();
  document.getElementById("pipe-by-stage").onclick = function (evt) {
    var activePoints = ctx.getElementsAtEvent(evt);
    var firstPoint = activePoints[0];
    var label = ctx.data.labels[firstPoint._index];
    //alert("bar clicked " + label);
    window.open(
      baseUrl +
        "pipelines/filter/stages/" +
        label +
        "/d1=" +
        start +
        "/d2=" +
        end,
      "_blank"
    );
  };

}

function createPipelineByRatingGraph(byRatingObj) {
  if (byRatingObj != null) {
    var ratings = [];
    var pipeCnt = [];

    for (let key in byRatingObj) {
      ratings.push(key);
      pipeCnt.push(byRatingObj[key]["total"]);
    }

    var ctx = new Chart(document.getElementById("pipe-by-rating"), {
      type: "horizontalBar",
      data: {
        labels: ratings,
        datasets: [
          {
            // label: "Number of approved pipelines",
            data: pipeCnt,
            fill: false,
            backgroundColor: [
              "rgba(255, 99, 132, 0.2)",
              "rgba(255, 159, 64, 0.2)",
              "rgba(255, 205, 86, 0.2)",
              "rgba(75, 192, 192, 0.2)",
            ],
            borderColor: [
              "rgb(255, 99, 132)",
              "rgb(255, 159, 64)",
              "rgb(255, 205, 86)",
              "rgb(75, 192, 192)",
            ],
            borderWidth: 1,
          },
        ],
      },
      options: {
        legend: false,
        tooltips: {
          callbacks: {
            label: function (tooltipItem) {
              //return "$" + Number(tooltipItem.xLabel) + " and so worth it !";
              let key = tooltipItem.yLabel;
              let labelStr =
                "Total MRC: " +
                byRatingObj[key]["mrc"] +
                " " +
                "Total OTC: " +
                byRatingObj[key]["otc"] +
                " " +
                "Total ACV:" +
                byRatingObj[key]["acv"];

              return labelStr;
            },
          },
        },
        scales: {
          xAxes: [
            {
              scaleLabel: {
                display: true,
                labelString: "Number of approved pipelines",
              },
              ticks: {
                beginAtZero: true,
                min: 0,
                max: 20,
                stepSize: 5,
              },
            },
          ],
          yAxes: [
            {
              scaleLabel: {
                display: true,
                labelString: "Ratings",
              },
              barPercentage: 0.8,
              categoryPercentage: 1,
            },
          ],
        },
      },
    });
  }
}

function createPipelineByCustGraph(byCustObj) {
  if (byCustObj != null) {
    var custTypes = [];
    var pipeCnt = [];

    for (let key in byCustObj) {
      custTypes.push(key);
      pipeCnt.push(byCustObj[key]["total"]);
    }

    var ctx = new Chart(document.getElementById("pipe-by-cust"), {
      type: "horizontalBar",
      data: {
        labels: custTypes,
        datasets: [
          {
            // label: "Number of approved pipelines",
            data: pipeCnt,
            fill: false,
            backgroundColor: [
              "rgba(255, 99, 132, 0.2)",
              "rgba(255, 159, 64, 0.2)",
              "rgba(255, 205, 86, 0.2)",
              "rgba(75, 192, 192, 0.2)",
            ],
            borderColor: [
              "rgb(255, 99, 132)",
              "rgb(255, 159, 64)",
              "rgb(255, 205, 86)",
              "rgb(75, 192, 192)",
            ],
            borderWidth: 1,
          },
        ],
      },
      options: {
        legend: false,
        tooltips: {
          callbacks: {
            label: function (tooltipItem) {
              //return "$" + Number(tooltipItem.xLabel) + " and so worth it !";
              let key = tooltipItem.yLabel;
              let labelStr =
                "Total MRC: " +
                byCustObj[key]["mrc"] +
                " " +
                "Total OTC: " +
                byCustObj[key]["otc"] +
                " " +
                "Total ACV:" +
                byCustObj[key]["acv"];

              return labelStr;
            },
          },
        },
        scales: {
          xAxes: [
            {
              scaleLabel: {
                display: true,
                labelString: "Number of approved pipelines",
              },
              ticks: {
                beginAtZero: true,
                min: 0,
                max: 50,
                stepSize: 5,
              },
            },
          ],
          yAxes: [
            {
              scaleLabel: {
                display: true,
                labelString: "Customer Types",
              },
              ticks: {
                autoSkip: false,
                maxRotation: 45,
                minRotation: 45,
              },
              barPercentage: 0.8,
              categoryPercentage: 1,
            },
          ],
        },
      },
    });
  }

  let start = $("#startdate").val();
  let end = $("#enddate").val();
  document.getElementById("pipe-by-cust").onclick = function (evt) {
    var activePoints = ctx.getElementsAtEvent(evt);
    var firstPoint = activePoints[0];
    var label = ctx.data.labels[firstPoint._index];
    //alert("bar clicked " + label);
    window.open(
      baseUrl +
        "pipelines/filter/customer-type/" +
        label +
        "/d1=" +
        start +
        "/d2=" +
        end,
      "_blank"
    );
  };

}

function createPipelineByIndustryGraph(byIndustryObj) {
  if (byIndustryObj != null) {
    var industries = [];
    var pipeCnt = [];

    for (let key in byIndustryObj) {
      industries.push(key);
      pipeCnt.push(byIndustryObj[key]["total"]);
    }

    var ctx = new Chart(document.getElementById("pipe-by-industry"), {
      type: "horizontalBar",
      data: {
        labels: industries,
        datasets: [
          {
            // label: "Number of approved pipelines",
            data: pipeCnt,
            fill: false,
            backgroundColor: [
              "rgba(255, 99, 132, 0.2)",
              "rgba(255, 159, 64, 0.2)",
              "rgba(255, 205, 86, 0.2)",
              "rgba(75, 192, 192, 0.2)",
            ],
            borderColor: [
              "rgb(255, 99, 132)",
              "rgb(255, 159, 64)",
              "rgb(255, 205, 86)",
              "rgb(75, 192, 192)",
            ],
            borderWidth: 1,
          },
        ],
      },
      options: {
        legend: false,
        tooltips: {
          callbacks: {
            label: function (tooltipItem) {
              //return "$" + Number(tooltipItem.xLabel) + " and so worth it !";
              let key = tooltipItem.yLabel;
              let labelStr =
                "Total MRC: " +
                byIndustryObj[key]["mrc"] +
                " " +
                "Total OTC: " +
                byIndustryObj[key]["otc"] +
                " " +
                "Total ACV:" +
                byIndustryObj[key]["acv"];

              return labelStr;
            },
          },
        },
        scales: {
          xAxes: [
            {
              scaleLabel: {
                display: true,
                labelString: "Number of approved pipelines",
              },
              ticks: {
                beginAtZero: true,
                min: 0,
                max: 50,
                stepSize: 5,
              },
            },
          ],
          yAxes: [
            {
              scaleLabel: {
                display: true,
                labelString: "Industry",
              },
              ticks: {
                autoSkip: false,
                maxRotation: 45,
                minRotation: 45,
              },
              barPercentage: 0.8,
              categoryPercentage: 1,
            },
          ],
        },
      },
    });
  }

  let start = $("#startdate").val();
  let end = $("#enddate").val();
  document.getElementById("pipe-by-industry").onclick = function (evt) {
    var activePoints = ctx.getElementsAtEvent(evt);
    var firstPoint = activePoints[0];
    var label = ctx.data.labels[firstPoint._index];
    //alert("bar clicked " + label);
    window.open(
      baseUrl +
        "pipelines/filter/industry/" +
        label +
        "/d1=" +
        start +
        "/d2=" +
        end,
      "_blank"
    );
  };

}

function createFunnelGraph(byRatingObj) {
  // data = [
  //   ["Hot", 12, "#AA1515"],
  //   ["Warm", 4, "#96A817"],
  //   ["Cold", 2.5, "#71B38E"],
  //   ["Win", 1.5, "#9E1BA5"],
  //   ["Passive", 1.2, "#AA7615"],
  //   ["Lost", 0.5, "#58A817"],
  //   ["Dropped", 0.4, "#AE1115"],
  // ];

  data = [];
  tooltipsObj = {};

  colors = [
    "#AA1515",
    "#96A817",
    "#71B38E",
    "#9E1BA5",
    "#AA7615",
    "#58A817",
    "#AE1115",
  ];

  colorIdx = 0;
  rowStr = "";
  // console.log("byRatingObj");
  // console.log(byRatingObj);

  for (let key in byRatingObj) {
    tempArr = [key.split(" ")[0], byRatingObj[key]["total"], colors[colorIdx]];
    data.push(tempArr);
    //tooltipdata[key.split(" ")[0]] = { label: "white", mrc: "1" };

    tooltipsObj[key.split(" ")[0]] = {
      label: key,
      mrc: byRatingObj[key]["mrc"],
      otc: byRatingObj[key]["otc"],
      acv: byRatingObj[key]["acv"],
    };

    rowStr +=
      "<tr><td>" +
      key +
      "</td><td>" +
      byRatingObj[key]["total"] +
      "</td><td>" +
      byRatingObj[key]["mrc"] +
      "</td>" +
      "<td>" +
      byRatingObj[key]["otc"] +
      "</td><td>" +
      byRatingObj[key]["acv"] +
      "</td></tr>";

    colorIdx++;
    if (colorIdx > colors.length) {
      colorIdx = 0;
    }
  }
  $("#by-rating-funnel-wrap .tbl-label tbody").html(rowStr);
  console.log("data");
  console.log(data);
  console.log("tooltipdata");
  console.log(tooltipsObj);

  var options = {
    chart: {
      width: 350,
      height: 400,
      bottomWidth: 1 / 3,
      bottomPinch: 1,
      inverted: false,
      horizontal: false,
      animate: 0,
      curve: {
        enabled: true,
        height: 20,
        shade: -0.4,
      },
      totalCount: null,
    },
    block: {
      dynamicHeight: false,
      dynamicSlope: false,
      barOverlay: false,
      /*fill: {
        scale: scaleOrdinal(schemeCategory10).domain(range(0, 10)),
        type: "solid",
      },*/
      minHeight: 0,
      highlight: true,
    },
    label: {
      enabled: true,
      /*fontFamily: null,*/
      fontSize: "14px",
      fill: "#fff",
      format: "{l} - {f}",
    },
    tooltip: {
      enabled: true,
      //format: "{l}: {f}",
      format: function (label, value) {
        let selectedTooltipObj = tooltipsObj[label];
        // console.log("label: " + label);
        // console.log(tooltipObj);

        return (
          "Total MRC: " +
          selectedTooltipObj.mrc +
          " Total OTC: " +
          selectedTooltipObj.otc +
          " Total ACV: " +
          selectedTooltipObj.acv
        );
      },
    },
    events: {
      click: {
        block(event, d) {
          let start = $("#startdate").val();
          let end = $("#enddate").val();

          let label = d.label.raw;
          window.open(
            baseUrl +
              "pipelines/filter/rating/" +
              label +
              "/d1=" +
              start +
              "/d2=" +
              end,
            "_blank"
          );

          return;
        },
      },
    },
  };
  var chart = new D3Funnel("#funnel");
  chart.draw(data, options);
  /*chart.draw(data);*/
}

function createDoughnutChart(bySbuObj) {
  let labels = Object.keys(bySbuObj);
  let data = [];
  let colors = [
    "rgba(255, 0, 0, 0.5)",
    "rgba(100, 255, 0, 0.5)",
    "rgba(200, 50, 255, 0.5)",
    // "rgba(0, 100, 255, 0.5)",
  ];

  for (key of Object.keys(bySbuObj)) {
    data.push(bySbuObj[key]["total"]);
  }

  var ctx = $("#sbu-doughnut-graph");
  var myLineChart = new Chart(ctx, {
    type: "doughnut",
    data: {
      labels: labels,
      datasets: [
        {
          data: data,
          backgroundColor: colors,
        },
      ],
    },
    options: {
      title: {
        display: true,
        text: "Service Business Units (SBUs)",
      },
    },
  });

  let start = $("#startdate").val();
  let end = $("#enddate").val();
  document.getElementById("sbu-doughnut-graph").onclick = function (evt) {
    var activePoints = ctx.getElementsAtEvent(evt);
    var firstPoint = activePoints[0];
    var label = ctx.data.labels[firstPoint._index];
    //alert("bar clicked " + label);
    window.open(
      baseUrl + "pipelines/filter/sbu/" + label + "/d1=" + start + "/d2=" + end,
      "_blank"
    );
  };

}

function createCustTypeLineGraph() {
  if ($("#cust-type-line-graph").length) {
    var salesChartCanvas = $("#cust-type-line-graph").get(0).getContext("2d");
    var gradientStrokeFill_1 = salesChartCanvas.createLinearGradient(
      0,
      0,
      0,
      450
    );
    gradientStrokeFill_1.addColorStop(1, "rgba(255,255,255, 0.0)");
    gradientStrokeFill_1.addColorStop(0, "rgba(102,78,235, 0.2)");

    var gradientStrokeFill_2 = salesChartCanvas.createLinearGradient(
      0,
      0,
      0,
      400
    );
    gradientStrokeFill_2.addColorStop(1, "rgba(255, 255, 255, 0.01)");
    gradientStrokeFill_2.addColorStop(0, "#14c671");

    var data_1_1 = [60, 75, 65, 130, 130, 145, 110, 145, 155, 149];
    var data_1_2 = [15, 25, 20, 40, 70, 52, 49, 90, 70, 94];

    var areaData = {
      labels: [
        "1 Cr",
        "2 Cr",
        "3 Cr",
        "4 Cr",
        "5 Cr",
        "6 Cr",
        "7 Cr",
        "8 Cr",
        "9 Cr",
        "10 Cr",
      ],
      datasets: [
        {
          label: "New-Logo",
          data: data_1_1,
          borderColor: infoColor,
          backgroundColor: gradientStrokeFill_1,
          borderWidth: 2,
        },
        {
          label: "Existing Logo",
          data: data_1_2,
          borderColor: successColor,
          backgroundColor: gradientStrokeFill_2,
          borderWidth: 2,
        },
      ],
    };
    var areaOptions = {
      responsive: true,
      animation: {
        animateScale: true,
        animateRotate: true,
      },
      elements: {
        point: {
          radius: 3,
          backgroundColor: "#fff",
        },
        line: {
          tension: 0,
        },
      },
      layout: {
        padding: {
          left: 0,
          right: 0,
          top: 0,
          bottom: 0,
        },
      },
      legend: false,
      legendCallback: function (chart) {
        var text = [];
        text.push('<div class="chartjs-legend"><ul>');
        for (var i = 0; i < chart.data.datasets.length; i++) {
          console.log(chart.data.datasets[i]); // see what's inside the obj.
          text.push("<li>");
          text.push(
            '<span style="background-color:' +
              chart.data.datasets[i].borderColor +
              '">' +
              "</span>"
          );
          text.push(chart.data.datasets[i].label);
          text.push("</li>");
        }
        text.push("</ul></div>");
        return text.join("");
      },
      scales: {
        xAxes: [
          {
            title: {
              display: true,
              text: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "June",
                "Jul",
                "Aug",
                "Sept",
                "Oct",
                "Nov",
                "Dec",
              ],
            },
            display: true,
            ticks: {
              display: true,
              beginAtZero: true,
            },
            gridLines: {
              drawBorder: false,
            },
          },
        ],
        yAxes: [
          {
            ticks: {
              max: 200,
              min: 0,
              stepSize: 50,
              fontColor: "#858585",
              beginAtZero: false,
            },
            gridLines: {
              color: "#e2e6ec",
              display: true,
              drawBorder: false,
            },
          },
        ],
      },
    };
    var salesChart = new Chart(salesChartCanvas, {
      type: "line",
      data: areaData,
      options: areaOptions,
    });
    document.getElementById("cust-type-line-legend").innerHTML =
      salesChart.generateLegend();
  }
}

function createRevenuePipelineProjectionGraph(revProjData) {
  console.log("revenue projection data: ");

  if ($("#revenue-pipeline-projection").length) {
    var RevProjChartCanvas = $("#revenue-pipeline-projection")
      .get(0)
      .getContext("2d");
    var gradientStrokeFill_1 = RevProjChartCanvas.createLinearGradient(
      0,
      0,
      0,
      450
    );
    gradientStrokeFill_1.addColorStop(1, "rgba(255,255,255, 0.0)");
    gradientStrokeFill_1.addColorStop(0, "rgba(102,78,235, 0.2)");

    var gradientStrokeFill_2 = RevProjChartCanvas.createLinearGradient(
      0,
      0,
      0,
      400
    );
    gradientStrokeFill_2.addColorStop(1, "rgba(255, 255, 255, 0.01)");
    gradientStrokeFill_2.addColorStop(0, "#14c671");

    var gradientStrokeFill_3 = RevProjChartCanvas.createLinearGradient(
      0,
      0,
      0,
      400
    );
    gradientStrokeFill_3.addColorStop(1, "rgba(255, 255, 255, 0.02)");
    gradientStrokeFill_3.addColorStop(0, "rgba(247,15,79, 0.2)");

    var gradientStrokeFill_4 = RevProjChartCanvas.createLinearGradient(
      0,
      0,
      0,
      400
    );
    gradientStrokeFill_4.addColorStop(1, "rgba(255, 255, 255, 0.02)");
    gradientStrokeFill_4.addColorStop(0, "rgba(209,209,209, 0.2)");

    var gradientStrokeFill_5 = RevProjChartCanvas.createLinearGradient(
      0,
      0,
      0,
      400
    );
    gradientStrokeFill_5.addColorStop(1, "rgba(255, 255, 255, 0.02)");
    gradientStrokeFill_5.addColorStop(0, "rgba(52,209,119, 0.2)");

    let lineData = revProjData.data;

    var data_1 = []; //mrc
    var data_2 = []; //arc
    var data_3 = []; //otc
    var data_4 = []; //acv
    var data_5 = []; //tcv
    let months = [
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December",
      "January",
      "February",
      "March",
    ];
    let monthsLen = months.length;
    for (let i = 0; i < monthsLen; i++) {
      data_1.push(lineData[months[i]]["mrc"]);
      data_2.push(lineData[months[i]]["arc"]);
      data_3.push(lineData[months[i]]["otc"]);
      data_4.push(lineData[months[i]]["acv"]);
      data_5.push(lineData[months[i]]["tcv"]);
    }

    $("#total_fy_rev").html("&#8377;" + revProjData.fyrev + " Cr.");
    $("#total_annualized_rev").html("&#8377;" + revProjData.annualrev + " Cr.");

    // var data_1 = [0, 25, 20, 40, 70, 52, 49, 90, 70, 94, 110, 135];
    // var data_2 = [0, 25, 20, 40, 70, 52, 49, 90, 70, 94, 110, 135]; //arc
    // var data_3 = [20, 35, 45, 110, 110, 125, 90, 125, 135, 129, 150, 160]; //otc
    // var data_4 = [20, 45, 40, 60, 90, 72, 69, 110, 90, 114, 130, 155]; //acv
    // var data_5 = [10, 35, 30, 50, 80, 62, 59, 100, 80, 104, 120, 145]; //tcv

    var areaData = {
      labels: [
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sept",
        "Oct",
        "Nov",
        "Dec",
        "Jan",
        "Feb",
        "Mar",
      ],
      datasets: [
        {
          label: "MRC",
          data: data_1,
          borderColor: infoColor,
          backgroundColor: gradientStrokeFill_1,
          borderWidth: 2,
        },
        {
          label: "ARC",
          data: data_2,
          borderColor: successColor,
          backgroundColor: gradientStrokeFill_2,
          borderWidth: 2,
        },
        {
          label: "OTC",
          data: data_3,
          borderColor: "#F70F4F",
          backgroundColor: gradientStrokeFill_3,
          borderWidth: 2,
        },
        {
          label: "ACV",
          data: data_4,
          borderColor: "#D1D134",
          backgroundColor: gradientStrokeFill_4,
          borderWidth: 2,
        },
/*
        {
          label: "TCV",
          data: data_5,
          borderColor: "#34D177",
          backgroundColor: gradientStrokeFill_5,
          borderWidth: 2,
        },
*/
      ],
    };
    var areaOptions = {
      responsive: true,
      animation: {
        animateScale: true,
        animateRotate: true,
      },
      elements: {
        point: {
          radius: 3,
          backgroundColor: "#fff",
        },
        line: {
          tension: 0,
        },
      },
      layout: {
        padding: {
          left: 0,
          right: 0,
          top: 0,
          bottom: 0,
        },
      },
      legend: false,
      legendCallback: function (chart) {
        var text = [];
        text.push('<div class="chartjs-legend"><ul>');
        for (var i = 0; i < chart.data.datasets.length; i++) {
          console.log(chart.data.datasets[i]); // see what's inside the obj.
          text.push("<li>");
          text.push(
            '<span style="background-color:' +
              chart.data.datasets[i].borderColor +
              '">' +
              "</span>"
          );
          text.push(chart.data.datasets[i].label);
          text.push("</li>");
        }
        text.push("</ul></div>");
        return text.join("");
      },
      scales: {
        xAxes: [
          {
            display: true,
            ticks: {
              display: true,
              beginAtZero: true,
            },
            gridLines: {
              drawBorder: false,
            },
          },
        ],
        yAxes: [
          {
            ticks: {
              max: 0.2,
              min: 0,
              stepSize: 0.005,
              fontColor: "#858585",
              beginAtZero: false,
            },
            gridLines: {
              color: "#e2e6ec",
              display: true,
              drawBorder: false,
            },
          },
        ],
      },
    };
    var salesChart = new Chart(RevProjChartCanvas, {
      type: "line",
      data: areaData,
      options: areaOptions,
    });
    document.getElementById("revenue-pipeline-projection-legend").innerHTML =
      salesChart.generateLegend();
  }
}

function appendPipelineFilterRow(pipelines) {
  rowStr = "";
  pipelines.forEach(function (item, index) {
    rowStr +=
      "<tr>" +
      "<td>" +
      item.potential_id +
      "</td>" +
      "<td>" +
      item.rbp_name +
      "</td>" +
      "<td>" +
      item.customer_name +
      "</td>" +
      "<td>" +
      item.sb_unit.sbu_name +
      " - " +
      item.product.prod_name +
      "</td>" +
      "<td>" +
      item.stagemaster.display_name +
      "</td>" +
      "<td>" +
      item.mrc +
      "</td>" +
      "<td>" +
      item.otc +
      "</td>" +
      "<td>" +
      item.arc +
      "</td>" +
      "<td>" +
      item.acv +
      "</td>" +
      "<td>" +
      item.tcv +
      "</td>" +
      "<td>" +
      item.contract_period +
      "</td>" +
      "<td>" +
      item.closing_date +
      "</td>" +
      "<td>" +
      item.customer_type +
      "</td>" +
      "<td>" +
      item.projected_commission +
      "</td>" +
      "</tr>";
  });
  $("#tbl-pipelines-export tbody").html(rowStr);
}

/***********************/
/* KC Functions */
/**********************/
function appendKCBlogRow() {
  let bloglisting = localStorage.getItem("bloglisting");
  if (bloglisting == null) {
    return "";
  }

  bloglisting = JSON.parse(bloglisting);

  let rowStr = "";
  bloglisting.forEach(function (item, index) {
    if (item.blog_author == null) {
      item.blog_author = "";
    }

    let blog_status = item.blog_is_active == 1 ? "active" : "inactive";

    let blogUrl = "";
    blogUrl = item.is_external_link ? item.blog_link : baseUrl + item.blog_slug;

    rowStr +=
      "<tr data-rowcnt='" +
      index +
      "'>" +
      "<td>" +
      (index + 1) +
      "</td>" +
      "<td>" +
      item.blog_title +
      "</td>" +
      "<td>" +
      item.publish_date +
      "</td>" +
      "<td>" +
      item.blog_author +
      "</td>" +
      "<td>" +
      blog_status +
      "</td>" +
      "<td>" +
      "<button type='button' class='btn btn-icons btn-rounded btn-info pi-edit' title='EDIT' style='cursor: pointer;'>" +
      "<i class='mdi mdi-account-edit'></i>" +
      "</button>";

    if (item.blog_is_active) {
      rowStr +=
        "<button type='button' class='btn btn-icons btn-rounded btn-success pi-delete' title='DELETE' style='cursor: pointer;'>" +
        "<i class='mdi mdi-delete'></i>" +
        "</button>";
    } else if (!item.blog_is_active) {
      rowStr +=
        "<button type='button' class='btn btn-icons btn-rounded btn-success pi-activate' title='ACTIVATE' style='cursor: pointer;'>" +
        "<i class='mdi mdi-plus'></i>" +
        "</button>";
    } else {
    }

    rowStr +=
      "<a href='" +
      blogUrl +
      "' target='_blank' type='button' class='btn btn-icons btn-rounded btn-success pi-view' title='VIEW' style='cursor: pointer;'>" +
      "<i class='mdi mdi-eye'></i>" +
      "</a>" +
      "</td>" +
      "</tr>";
  });

  $("#table-kc-blogs tbody").html(rowStr);
}

function populateBlogEditPopup(datarow) {
  console.log(datarow);
  $("#editpop #blog-title").val(
    datarow.blog_title == null || datarow.blog_title == ""
      ? ""
      : datarow.blog_title
  );

  $("#editpop #blog-author").val(
    datarow.blog_author == null || datarow.blog_author == ""
      ? ""
      : datarow.blog_author
  );

  if (datarow.is_external_link) {
    $("#editpop #is-ext-link").prop("checked", "true");

    $("#editpop #external-link").val(datarow.blog_link);
    $("#editpop #external-link").css("display", "block");
  }

  if (datarow.blog_image_path != null && datarow.blog_image_path != "") {
    $("#editpop #existing-img a").prop(
      "href",
      baseUrl + datarow.blog_image_path
    );
    $("#editpop #existing-img a").html(baseUrl + datarow.blog_image_path);
  }

  if (
    datarow.blog_short_description != null &&
    datarow.blog_short_description != ""
  ) {
    CKEDITOR.instances["blog-short-desc"].setData(
      datarow.blog_short_description
    );
  }

  if (datarow.blog_description != null && datarow.blog_description != "") {
    CKEDITOR.instances["blog-desc"].setData(datarow.blog_description);
  }
}


function appendKCCSRow() {
  let kccslisting = localStorage.getItem("kccslisting");
  if (kccslisting == null) {
    return "";
  }

  kccslisting = JSON.parse(kccslisting);

  let rowStr = "";
  kccslisting.forEach(function (item, index) {
    if (item.cs_author == null) {
      item.cs_author = "";
    }

    let cs_status = item.cs_is_active == 1 ? "active" : "inactive";

    rowStr +=
      "<tr data-rowcnt='" +
      index +
      "'>" +
      "<td>" +
      (index + 1) +
      "</td>" +
      "<td>" +
      item.cs_title +
      "</td>" +
      "<td>" +
      item.cs_date +
      "</td>" +
      "<td>" +
      cs_status +
      "</td>" +
      "<td>" +
      "<button type='button' class='btn btn-icons btn-rounded btn-info pi-edit' title='EDIT' style='cursor: pointer;'>" +
      "<i class='mdi mdi-account-edit'></i>" +
      "</button>";

    if (item.cs_is_active) {
      rowStr +=
        "<button type='button' class='btn btn-icons btn-rounded btn-success pi-delete' title='DELETE' style='cursor: pointer;'>" +
        "<i class='mdi mdi-delete'></i>" +
        "</button>";
    } else if (!item.blog_is_active) {
      rowStr +=
        "<button type='button' class='btn btn-icons btn-rounded btn-success pi-activate' title='ACTIVATE' style='cursor: pointer;'>" +
        "<i class='mdi mdi-plus'></i>" +
        "</button>";
    } else {
    }

    // rowStr +=
    //   "<a href='" +
    //   csUrl +
    //   "' target='_blank' type='button' class='btn btn-icons btn-rounded btn-success pi-view' title='VIEW' style='cursor: pointer;'>" +
    //   "<i class='mdi mdi-eye'></i>" +
    //   "</a>" +
    //   "</td>" +
    ("</tr>");
  });

  $("#table-kc-cs tbody").html(rowStr);
}

function populateKCCSEditPopup(datarow) {
  console.log(datarow);

  $("#editpop #kccs-title").val(
    datarow.cs_title == null || datarow.cs_title == "" ? "" : datarow.cs_title
  );

  let csdate = "";
  if (datarow.cs_date != null && datarow.cs_date != "") {
    csdate =
      datarow.cs_date.substr(6) +
      "-" +
      datarow.cs_date.substr(3, 2) +
      "-" +
      datarow.cs_date.substr(0, 2);
  }

  $("#editpop #kccs-date").val(csdate);

  if (
    datarow.cs_short_description != null &&
    datarow.cs_short_description != ""
  ) {
    CKEDITOR.instances["kccs-short-desc"].setData(datarow.cs_short_description);
  }

  if (datarow.cs_image_path != null && datarow.cs_image_path != "") {
    $("#editpop a#cur-kccs-banner").prop(
      "href",
      baseUrl + datarow.cs_image_path
    );
    $("#editpop a#cur-kccs-banner").html(baseUrl + datarow.cs_image_path);
  }

  if (datarow.cs_doc_path != null && datarow.cs_doc_path != "") {
    $("#editpop a#cur-kccs-doc").prop("href", baseUrl + datarow.cs_doc_path);
    $("#editpop a#cur-kccs-doc").html(baseUrl + datarow.cs_doc_path);
  }
}

function populateKCTrainingEditPopup(datarow) {
  let training_title =
    datarow.training_title != null && datarow.training_title.trim() != ""
      ? datarow.training_title
      : "";
  let trainer_name =
    datarow.trainer_name != null && datarow.trainer_name.trim() != ""
      ? datarow.trainer_name
      : "";

  let trainingdate = "";
  if (datarow.training_date != null && datarow.training_date != "") {
    trainingdate =
      datarow.training_date.substr(0, 4) +
      "-" +
      datarow.training_date.substr(5, 2) +
      "-" +
      datarow.training_date.substr(8);
  } else {
    trainingdate = "";
  }

  let training_st_time =
    datarow.training_st_time != null && datarow.training_st_time != ""
      ? datarow.training_st_time
      : "";
  let training_end_time =
    datarow.training_end_time != null && datarow.training_end_time != ""
      ? datarow.training_end_time
      : "";

  let training_content =
    datarow.training_content != null && datarow.training_content != ""
      ? datarow.training_content
      : "";

  $("#editpop #frm-training-edit #training-title").val(training_title);
  $("#editpop #frm-training-edit #trainer_name").val(trainer_name);
  $("#editpop #frm-training-edit #training-date").val(trainingdate);
  $("#editpop #frm-training-edit #training-st-time").val(training_st_time);
  $("#editpop #frm-training-edit #training-end-time").val(training_end_time);
  CKEDITOR.instances["training-content"].setData(training_content);
}

function populateKCEventEditPopup(datarow) {
  let event_title =
    datarow.event_title != null && datarow.event_title.trim() != ""
      ? datarow.event_title
      : "";
  let eventdate = "";
  if (datarow.event_date != null && datarow.event_date != "") {
    eventdate =
      datarow.event_date.substr(0, 4) +
      "-" +
      datarow.event_date.substr(5, 2) +
      "-" +
      datarow.event_date.substr(8);
  } else {
    eventdate = "";
  }

  let event_st_time =
    datarow.event_st_time != null && datarow.event_st_time != ""
      ? datarow.event_st_time
      : "";
  let event_end_time =
    datarow.event_end_time != null && datarow.event_end_time != ""
      ? datarow.event_end_time
      : "";

  let event_content =
    datarow.event_content != null && datarow.event_content != ""
      ? datarow.event_content
      : "";

  let filename = "";
  if (datarow.event_banner_path != "") {
    filenameparts = datarow.event_banner_path.split("/");
    filename = filenameparts[filenameparts.length - 1];
  }

  $("#editpop #frm-event-edit #event-title").val(event_title);
  $("#editpop #frm-event-edit #event-date").val(eventdate);
  $("#editpop #frm-event-edit #event-st-time").val(event_st_time);
  $("#editpop #frm-event-edit #event-end-time").val(event_end_time);
  CKEDITOR.instances["event-content"].setData(event_content);
  $("#editpop #frm-event-edit #cur-event-banner").prop(
    "href",
    baseUrl + datarow.event_banner_path
  );

  $("#editpop #frm-event-edit #cur-event-banner").html(filename);
}

/***********************/
/* GTM Functions */
/**********************/
function appendGTMFundRequestRow() {
  let user = localStorage.getItem("user");
  if (user == null) {
    return "";
  }
  user = JSON.parse(user);

  let gtmFundRequests = localStorage.getItem("gtmfundrequests");
  if (gtmFundRequests == null) {
    return "";
  }

  gtmFundRequests = JSON.parse(gtmFundRequests);
  //add the rows
  let rowStr = "";
  let actionButtons = "";

  gtmFundRequests.forEach(function (item, index) {
    if (item.gmt_prod_services.toLowerCase() === "other") {
      item.gmt_prod_services =
        item.gmt_prod_services + " ( " + item.gmt_prod_services_others + " )";
    }

    rowStr += "<tr data-rowcnt='" + index + "'>";

    actionButtons =
      "<td colspan='2'>" +
      "<button type='button' class='btn btn-icons btn-rounded btn-success btn-view mr-2' title='VIEW' style='cursor: pointer;'>" +
      "<i class='mdi mdi-eye'></i></button>";

    if (user.type === USER_ADMIN_TYPE) {
      if (item.status === APPROVED_STATE) {
        actionButtons +=
          "<button type='button' class='btn btn-icons btn-rounded btn-secondary btn-approve' title='Approve' disabled='' style='cursor: pointer;'>" +
          "<i class='mdi mdi-check'></i></button>" +
          "<button type='button' class='btn btn-icons btn-rounded btn-danger btn-reject' title='Reject' style='cursor: pointer;'>" +
          "<i class='mdi mdi-close'></i></button>";
      } else if (item.status === REJECTED_STATE) {
        actionButtons +=
          "<button type='button' class='btn btn-icons btn-rounded btn-secondary btn-approve' title='Approve' disabled='' style='cursor: pointer;'>" +
          "<i class='mdi mdi-check'></i></button>" +
          "<button type='button' class='btn btn-icons btn-rounded btn-secondary btn-reject' title='Reject' disabled='' style='cursor: pointer;'>" +
          "<i class='mdi mdi-close'></i></button>";
      } else {
        actionButtons +=
          "<button type='button' class='btn btn-icons btn-rounded btn-info btn-approve' title='Approve' style='cursor: pointer;'>" +
          "<i class='mdi mdi-check'></i></button>" +
          "<button type='button' class='btn btn-icons btn-rounded btn-danger btn-reject' title='Reject' style='cursor: pointer;'>" +
          "<i class='mdi mdi-close'></i></button>";
      }
    } else {
      if (item.status === PENDING_STATE) {
        actionButtons +=
          "<button type='button' class='btn btn-icons btn-rounded btn-info btn-del' title='DELETE' style='cursor: pointer;'>" +
          "<i class='mdi mdi-delete'></i></button>";
      }
      if (item.status === APPROVED_STATE || item.status === REJECTED_STATE) {
        if (item.status === APPROVED_STATE) {
          actionButtons +=
            "<button type='button' class='btn btn-icons btn-rounded btn-info btn-edit' title='EDIT' style='cursor: pointer;'>" +
            "<i class='mdi mdi-pencil'></i></button>";
        }
        actionButtons +=
          "<button type='button' class='btn btn-icons btn-rounded btn-info btn-del' title='DELETE' style='cursor: pointer;' disabled>" +
          "<i class='mdi mdi-delete'></i></button>";
      }
    }
    actionButtons += "</td>";
    rowStr += actionButtons;

    rowStr +=
      "<td>" +
      item.project_name +
      "</td>" +
      "<td>" +
      item.gmt_prod_services +
      "</td>" +
      "<td>" +
      item.estimated_event_cost +
      "</td>" +
      "<td>" +
      item.target_market +
      "</td>" +
      "<td>" +
      item.fund_requested +
      "</td>";

    rowStr += "</tr>";
  });
  $("#gtm-fund-requests tbody").html(rowStr);
  return;
}

function fillGTMFundRequestReviewPop(rowObj) {
  if (rowObj == null) {
    return false;
  }

  $("#reviewpop #row-cnt").val(rowObj.id);

  $("#reviewpop #fProjectName").val(rowObj.project_name);
  $("#reviewpop #fundproduct").val(rowObj.gmt_prod_services);

  if (rowObj.gmt_prod_services.toLowerCase() === "other") {
    $("#reviewpop #prod-other-view").val(rowObj.gmt_prod_services_others);
    if ($("#reviewpop #prod-other-view").hasClass("hide")) {
      $("#reviewpop #prod-other-view").removeClass("hide");
    }
  } else {
    if (!$("#reviewpop #prod-other-view").hasClass("hide")) {
      $("#reviewpop #prod-other-view").addClass("hide");
    }
  }

  $("#reviewpop #fproj-cost").val(rowObj.estimated_event_cost);

  if (
    rowObj.budget_plan_doc_path != null &&
    rowObj.budget_plan_doc_path != ""
  ) {
    $("#reviewpop #fr-budget-plan-doc").attr(
      "href",
      apiDomainUrl + rowObj.budget_plan_doc_path
    );
    $("#reviewpop #fr-budget-plan-doc").html(
      rowObj.budget_plan_doc_path.split("/")[4]
    );
    if ($("#reviewpop #budget-plan-doc-wrap").hasClass("hide")) {
      $("#reviewpop #budget-plan-doc-wrap").removeClass("hide");
    }
  } else {
    if (!$("#reviewpop #budget-plan-doc-wrap").hasClass("hide")) {
      $("#reviewpop #budget-plan-doc-wrap").addClass("hide");
    }
  }

  $("#reviewpop #fobjective").html(rowObj.objective);
  $("#reviewpop #ftarget-market").html(rowObj.target_market);

  $("#reviewpop #fpart-ownership").html(rowObj.partner_ownership);
  $("#reviewpop #fexisting-sponsors").html(rowObj.existing_sponsors);
  $("#reviewpop #fspon-deliverables").html(rowObj.sponsor_deliverables);
  $("#reviewpop #fpi-deliverables").html(rowObj.pi_deliverables);
  $("#reviewpop #ffund-requested").val(rowObj.fund_requested);
  $("#reviewpop #fcomments").html(rowObj.comments);

  $("#reviewpop #fExecName").val(rowObj.executive_name);
  $("#reviewpop #fExecEmail").val(rowObj.executive_email);
  $("#reviewpop #fExecMob").val(rowObj.executive_mobile_no);
  $("#reviewpop #fExecDesig").val(rowObj.executive_desig);

  $("#reviewpop #fMarkName").val(rowObj.marteking_cname);
  $("#reviewpop #fMarkEmail").val(rowObj.marteking_cemail);
  $("#reviewpop #fMarkMob").val(rowObj.marteking_cmobile_no);

  $("#reviewpop #fparam").html(rowObj.success_parameters);
  $("#reviewpop #fmetric").html(rowObj.success_metrics);

  return;
}

function fillGTMFundRequestEditPop(rowObj) {
  if (rowObj == null) {
    return false;
  }
  //console.log(rowObj);
  if ($("#fund-req-id").length) {
    $("#fund-req-id").val(rowObj.id);
  }
  $("#editpop #fProjectName").val(rowObj.project_name);
  $("#editpop #fundproduct").val(rowObj.gmt_prod_services);

  if (rowObj.gmt_prod_services.toLowerCase() === "other") {
    $("#editpop #prod-other").val(rowObj.gmt_prod_services_others);
    if ($("#editpop #prod-other").hasClass("hide")) {
      $("#editpop #prod-other").removeClass("hide");
    }
  } else {
    $("#editpop #prod-other").val(rowObj.gmt_prod_services_others);
    if (!$("#editpop #prod-other").hasClass("hide")) {
      $("#editpop #prod-other").addClass("hide");
    }
  }

  $("#editpop #fproj-cost").val(rowObj.estimated_event_cost);

  if (
    rowObj.budget_plan_doc_path != null &&
    rowObj.budget_plan_doc_path != ""
  ) {
    $("#editpop #fr-budget-plan-doc").attr(
      "href",
      apiDomainUrl + rowObj.budget_plan_doc_path
    );
    $("#editpop #fr-budget-plan-doc").html(
      rowObj.budget_plan_doc_path.split("/")[4]
    );
    if ($("#editpop #budget-plan-doc-wrap").hasClass("hide")) {
      $("#editpop #budget-plan-doc-wrap").removeClass("hide");
    }
  } else {
    if (!$("#editpop #budget-plan-doc-wrap").hasClass("hide")) {
      $("#editpop #budget-plan-doc-wrap").addClass("hide");
    }
  }

  $("#editpop #fobjective").html(rowObj.objective);
  $("#editpop #ftarget-market").html(rowObj.target_market);

  $("#editpop #fpart-ownership").html(rowObj.partner_ownership);
  $("#editpop #fexisting-sponsors").html(rowObj.existing_sponsors);
  $("#editpop #fspon-deliverables").html(rowObj.sponsor_deliverables);
  $("#editpop #fpi-deliverables").html(rowObj.pi_deliverables);
  $("#editpop #ffund-requested").val(rowObj.fund_requested);
  $("#editpop #fcomments").html(rowObj.comments);

  $("#editpop #fExecName").val(rowObj.executive_name);
  $("#editpop #fExecEmail").val(rowObj.executive_email);
  $("#editpop #fExecMob").val(rowObj.executive_mobile_no);
  $("#editpop #fExecDesig").val(rowObj.executive_desig);

  $("#editpop #fMarkName").val(rowObj.marteking_cname);
  $("#editpop #fMarkEmail").val(rowObj.marteking_cemail);
  $("#editpop #fMarkMob").val(rowObj.marteking_cmobile_no);

  $("#editpop #fparam").html(rowObj.success_parameters);
  $("#editpop #fmetric").html(rowObj.success_metrics);

  return;
}

function chkProdValue(value) {
  //alert("chkProdValue triggered " + value);
  //$selectedProduct = ele.value;
  $selectedProduct = value;

  if ($selectedProduct.toLowerCase() == "other") {
    //alert("selected value is other");
    if ($("#prod-other").hasClass("hide")) {
     // alert("prod-other has hide class");
      $("#prod-other").removeClass("hide");
    }
  } else {
    if (!$("#prod-other").hasClass("hide")) {
      $("#editpop #prod-other").val("");
      $("#prod-other").addClass("hide");
    }
  }
}

function appendGTMCollateralRequestRow() {
  let user = localStorage.getItem("user");
  if (user == null) {
    return "";
  }
  user = JSON.parse(user);

  let gtmCollateralRequests = localStorage.getItem(
    "gtmmediacollateralrequests"
  );
  if (gtmCollateralRequests == null) {
    return "";
  }

  gtmCollateralRequests = JSON.parse(gtmCollateralRequests);
  //add the rows
  let rowStr = "";
  let actionButtons = "";

  gtmCollateralRequests.forEach(function (item, index) {
    if (item.gtm_prod_services.toLowerCase() === "other") {
      item.gtm_prod_services =
        item.gtm_prod_services + " ( " + item.gtm_prod_services_others + " )";
    }

    rowStr += "<tr data-rowcnt='" + index + "'>";

    actionButtons =
      "<td colspan='2'>" +
      "<button type='button' class='btn btn-icons btn-rounded btn-success btn-view mr-2' title='VIEW' style='cursor: pointer;'>" +
      "<i class='mdi mdi-eye'></i></button>";

    if (user.type === USER_ADMIN_TYPE) {
      if (item.status === APPROVED_STATE) {
        actionButtons +=
          "<button type='button' class='btn btn-icons btn-rounded btn-secondary btn-approve' title='Approve' disabled='' style='cursor: pointer;'>" +
          "<i class='mdi mdi-check'></i></button>" +
          "<button type='button' class='btn btn-icons btn-rounded btn-danger btn-reject' title='Reject' style='cursor: pointer;'>" +
          "<i class='mdi mdi-close'></i></button>";
      } else if (item.status === REJECTED_STATE) {
        actionButtons +=
          "<button type='button' class='btn btn-icons btn-rounded btn-secondary btn-approve' title='Approve' disabled='' style='cursor: pointer;'>" +
          "<i class='mdi mdi-check'></i></button>" +
          "<button type='button' class='btn btn-icons btn-rounded btn-secondary btn-reject' title='Reject' disabled='' style='cursor: pointer;'>" +
          "<i class='mdi mdi-close'></i></button>";
      } else {
        actionButtons +=
          "<button type='button' class='btn btn-icons btn-rounded btn-info btn-approve' title='Approve' style='cursor: pointer;'>" +
          "<i class='mdi mdi-check'></i></button>" +
          "<button type='button' class='btn btn-icons btn-rounded btn-danger btn-reject' title='Reject' style='cursor: pointer;'>" +
          "<i class='mdi mdi-close'></i></button>";
      }
    } else {
      if (item.status === PENDING_STATE) {
        actionButtons +=
          "<button type='button' class='btn btn-icons btn-rounded btn-info btn-del' title='DELETE' style='cursor: pointer;'>" +
          "<i class='mdi mdi-delete'></i></button>";
      }
      if (item.status === APPROVED_STATE || item.status === REJECTED_STATE) {
        if (item.status === APPROVED_STATE) {
          actionButtons +=
            "<button type='button' class='btn btn-icons btn-rounded btn-info btn-edit' title='EDIT' style='cursor: pointer;'>" +
            "<i class='mdi mdi-pencil'></i></button>";
        }
        actionButtons +=
          "<button type='button' class='btn btn-icons btn-rounded btn-info btn-del' title='DELETE' style='cursor: pointer;' disabled>" +
          "<i class='mdi mdi-delete'></i></button>";
      }
    }
    actionButtons += "</td>";
    rowStr += actionButtons;

    rowStr +=
      "<td>" +
      item.event_name +
      "</td>" +
      "<td>" +
      item.collateral_name +
      "</td>" +
      "<td>" +
      item.collateral_type +
      "</td>" +
      "<td>" +
      item.gtm_prod_services +
      "</td>";

    rowStr += "</tr>";
  });
  $("#gtm-media-collateral-requests tbody").html(rowStr);
  return;
}

function fillGTMCollateralReqReviewPop(rowObj) {
  if (rowObj == null) {
    return false;
  }
  if ($("#page-gtm-media-collateral form #row-cnt").length) {
    $("#page-gtm-media-collateral form #row-cnt").val(rowObj.id);
  }
  $("#reviewpop.db-popup #fevent-name").val(rowObj.event_name);
  $("#reviewpop.db-popup #fcollateral-name").val(rowObj.collateral_name);

  $("#reviewpop.db-popup #fcollateral-product").val(rowObj.gtm_prod_services);
  if (rowObj.gtm_prod_services.toLowerCase() === "other") {
    $("#reviewpop.db-popup #prod-other").val(rowObj.gtm_prod_services_others);
    if ($("#reviewpop.db-popup #prod-other").hasClass("hide")) {
      $("#reviewpop.db-popup #prod-other").removeClass("hide");
    }
  } else {
    if (!$("#reviewpop.db-popup #prod-other").hasClass("hide")) {
      $("#reviewpop.db-popup #prod-other").addClass("hide");
    }
  }
  $("#reviewpop.db-popup #fcollateral-types").html(rowObj.collateral_type);
  $("#reviewpop.db-popup #fobjective").html(rowObj.objective);
  $("#reviewpop.db-popup #ftarget-audience").html(rowObj.target_audience);

  return;
}

function fillGTMCollateralReqEditPop(rowObj) {
  if (rowObj == null) {
    return false;
  }
  if ($("#frm-jm-collateral-edit #jm-collateral-req-id").length) {
    $("#frm-jm-collateral-edit #jm-collateral-req-id").val(rowObj.id);
  }

  $("#editpop.db-popup #fevent-name").val(rowObj.event_name);
  $("#editpop.db-popup #fcollateral-name").val(rowObj.collateral_name);

  $("#editpop.db-popup #fcollateral-product").val(rowObj.gtm_prod_services);
  if (rowObj.gtm_prod_services.toLowerCase() === "other") {
    $("#editpop.db-popup #prod-other").val(rowObj.gtm_prod_services_others);
    if ($("#editpop.db-popupp #prod-other").hasClass("hide")) {
      $("#editpop.db-popup #prod-other").removeClass("hide");
    }
  } else {
    if (!$("#editpop.db-popup #prod-other").hasClass("hide")) {
      $("#editpop.db-popup #prod-other").addClass("hide");
    }
  }

  if (rowObj.collateral_type != "") {
    $("#editpop.db-popup #fcollateral-types option").each(function () {
      $(this).prop("selected", false);
    });

    $.each(rowObj.collateral_type.split(","), function (index, ele) {
      $(
        "#editpop.db-popup #fcollateral-types option[value='" + ele + "']"
      ).prop("selected", true);
    });
  }

  $("#editpop.db-popup #fobjective").html(rowObj.objective);
  $("#editpop.db-popup #ftarget-audience").html(rowObj.target_audience);

  return;
}

function appendGTMMediaCampaignRequestRow() {
  let user = localStorage.getItem("user");
  if (user == null) {
    return "";
  }
  user = JSON.parse(user);

  let gtmCampaignRequests = localStorage.getItem("gtmmediacampaignrequests");
  if (gtmCampaignRequests == null) {
    return "";
  }

  gtmCampaignRequests = JSON.parse(gtmCampaignRequests);
  //add the rows

  let rowStr = "";
  let actionButtons = "";

  gtmCampaignRequests.forEach(function (item, index) {
    if (item.gmt_prod_services.toLowerCase() === "other") {
      item.gmt_prod_services =
        item.gmt_prod_services + " ( " + item.gmt_prod_services_others + " )";
    }

    rowStr += "<tr data-rowcnt='" + index + "'>";

    actionButtons =
      "<td colspan='2'>" +
      "<button type='button' class='btn btn-icons btn-rounded btn-success btn-view mr-2' title='VIEW' style='cursor: pointer;'>" +
      "<i class='mdi mdi-eye'></i></button>";

    if (user.type === USER_ADMIN_TYPE) {
      if (item.status === APPROVED_STATE) {
        actionButtons +=
          "<button type='button' class='btn btn-icons btn-rounded btn-secondary btn-approve' title='Approve' disabled='' style='cursor: pointer;'>" +
          "<i class='mdi mdi-check'></i></button>" +
          "<button type='button' class='btn btn-icons btn-rounded btn-danger btn-reject' title='Reject' style='cursor: pointer;'>" +
          "<i class='mdi mdi-close'></i></button>";
      } else if (item.status === REJECTED_STATE) {
        actionButtons +=
          "<button type='button' class='btn btn-icons btn-rounded btn-secondary btn-approve' title='Approve' disabled='' style='cursor: pointer;'>" +
          "<i class='mdi mdi-check'></i></button>" +
          "<button type='button' class='btn btn-icons btn-rounded btn-secondary btn-reject' title='Reject' disabled='' style='cursor: pointer;'>" +
          "<i class='mdi mdi-close'></i></button>";
      } else {
        actionButtons +=
          "<button type='button' class='btn btn-icons btn-rounded btn-info btn-approve' title='Approve' style='cursor: pointer;'>" +
          "<i class='mdi mdi-check'></i></button>" +
          "<button type='button' class='btn btn-icons btn-rounded btn-danger btn-reject' title='Reject' style='cursor: pointer;'>" +
          "<i class='mdi mdi-close'></i></button>";
      }
    } else {
      if (item.status === PENDING_STATE) {
        actionButtons +=
          "<button type='button' class='btn btn-icons btn-rounded btn-info btn-del' title='DELETE' style='cursor: pointer;'>" +
          "<i class='mdi mdi-delete'></i></button>";
      }
      if (item.status === APPROVED_STATE || item.status === REJECTED_STATE) {
        if (item.status === APPROVED_STATE) {
          actionButtons +=
            "<button type='button' class='btn btn-icons btn-rounded btn-info btn-edit' title='EDIT' style='cursor: pointer;'>" +
            "<i class='mdi mdi-pencil'></i></button>";
        }
        actionButtons +=
          "<button type='button' class='btn btn-icons btn-rounded btn-info btn-del' title='DELETE' style='cursor: pointer;' disabled>" +
          "<i class='mdi mdi-delete'></i></button>";
      }
    }
    actionButtons += "</td>";
    rowStr += actionButtons;

    rowStr +=
      "<td>" +
      item.project_name +
      "</td>" +
      "<td>" +
      item.gmt_prod_services +
      "</td>" +
      "<td>" +
      item.estimated_event_cost +
      "</td>" +
      "<td>" +
      item.target_market +
      "</td>" +
      "<td>" +
      item.fund_requested +
      "</td>" +
      "<td>" +
      item.media_house_online +
      " - " +
      item.media_house_offline +
      "</td>";
    rowStr += "</tr>";
  });
  $("#gtm-media-campaign-requests tbody").html(rowStr);
  return;
}

function fillGTMMediaCampaignReqReviewPop(rowObj) {
  if (rowObj == null) {
    return false;
  }
  //console.log(rowObj);
  if ($("#page-gtm-media-campaign form #row-cnt").length) {
    $("#page-gtm-media-campaign form #row-cnt").val(rowObj.id);
  }
  $(".db-popup #fProjectName").val(rowObj.project_name);
  $(".db-popup #fundproduct").val(rowObj.gmt_prod_services);

  if (rowObj.gmt_prod_services.toLowerCase() === "other") {
    $(".db-popup #prod-other").val(rowObj.gmt_prod_services_others);
    if ($(".db-popup #prod-other").hasClass("hide")) {
      $(".db-popup #prod-other").removeClass("hide");
    }
  }

  $(".db-popup #fproj-cost").val(rowObj.estimated_event_cost);

  if (
    rowObj.budget_plan_doc_path != null &&
    rowObj.budget_plan_doc_path != ""
  ) {
    $(".db-popup #mc-budget-plan-doc").attr(
      "href",
      apiDomainUrl + rowObj.budget_plan_doc_path
    );
    $(".db-popup #mc-budget-plan-doc").html(
      rowObj.budget_plan_doc_path.split("/")[4]
    );
    if ($(".db-popup #budget-plan-doc-wrap").hasClass("hide")) {
      $(".db-popup #budget-plan-doc-wrap").removeClass("hide");
    }
  } else {
    if (!$(".db-popup #budget-plan-doc-wrap").hasClass("hide")) {
      $(".db-popup #budget-plan-doc-wrap").addClass("hide");
    }
  }

  $(".db-popup #fobjective").html(rowObj.objective);
  $(".db-popup #ftarget-market").html(rowObj.target_market);

  $(".db-popup #fpart-ownership").html(rowObj.partner_ownership);
  $(".db-popup #fexisting-sponsors").html(rowObj.existing_sponsors);
  $(".db-popup #fspon-deliverables").html(rowObj.sponsor_deliverables);
  $(".db-popup #fpi-deliverables").html(rowObj.pi_deliverables);
  $(".db-popup #ffund-requested").val(rowObj.fund_requested);
  $(".db-popup #fcomments").html(rowObj.comments);

  $(".db-popup #fExecName").val(rowObj.executive_name);
  $(".db-popup #fExecEmail").val(rowObj.executive_email);
  $(".db-popup #fExecMob").val(rowObj.executive_mobile_no);
  $(".db-popup #fExecDesig").val(rowObj.executive_desig);

  $(".db-popup #fMarkName").val(rowObj.marteking_cname);
  $(".db-popup #fMarkEmail").val(rowObj.marteking_cemail);
  $(".db-popup #fMarkMob").val(rowObj.marteking_cmobile_no);

  $(".db-popup #fparam").html(rowObj.success_parameters);
  $(".db-popup #fmetric").html(rowObj.success_metrics);

  $(".db-popup #fmed-house-online").html(rowObj.media_house_online);
  $(".db-popup #fmed-house-offline").html(rowObj.media_house_offline);

  return;
}

function fillGTMMediaCampaignReqEditPop(rowObj) {
  if (rowObj == null) {
    return false;
  }
  //console.log(rowObj);
  if ($("#mcampaign-req-id").length) {
    $("#mcampaign-req-id").val(rowObj.id);
  }
  $(".db-popup #fProjectName").val(rowObj.project_name);
  $(".db-popup #fundproduct").val(rowObj.gmt_prod_services);

  if (rowObj.gmt_prod_services.toLowerCase() === "other") {
    $(".db-popup #prod-other").val(rowObj.gmt_prod_services_others);
    if ($(".db-popup #prod-other").hasClass("hide")) {
      $(".db-popup #prod-other").removeClass("hide");
    }
  }

  $(".db-popup #fproj-cost").val(rowObj.estimated_event_cost);

  if (
    rowObj.budget_plan_doc_path != null &&
    rowObj.budget_plan_doc_path != ""
  ) {
    $(".db-popup #mc-budget-plan-doc").attr(
      "href",
      apiDomainUrl + rowObj.budget_plan_doc_path
    );
    $(".db-popup #mc-budget-plan-doc").html(
      rowObj.budget_plan_doc_path.split("/")[4]
    );
    if ($(".db-popup #budget-plan-doc-wrap").hasClass("hide")) {
      $(".db-popup #budget-plan-doc-wrap").removeClass("hide");
    }
  } else {
    if (!$(".db-popup #budget-plan-doc-wrap").hasClass("hide")) {
      $(".db-popup #budget-plan-doc-wrap").addClass("hide");
    }
  }

  $(".db-popup #fobjective").html(rowObj.objective);
  $(".db-popup #ftarget-market").html(rowObj.target_market);

  $(".db-popup #fpart-ownership").html(rowObj.partner_ownership);
  $(".db-popup #fexisting-sponsors").html(rowObj.existing_sponsors);
  $(".db-popup #fspon-deliverables").html(rowObj.sponsor_deliverables);
  $(".db-popup #fpi-deliverables").html(rowObj.pi_deliverables);
  $(".db-popup #ffund-requested").val(rowObj.fund_requested);
  $(".db-popup #fcomments").html(rowObj.comments);

  $(".db-popup #fExecName").val(rowObj.executive_name);
  $(".db-popup #fExecEmail").val(rowObj.executive_email);
  $(".db-popup #fExecMob").val(rowObj.executive_mobile_no);
  $(".db-popup #fExecDesig").val(rowObj.executive_desig);

  $(".db-popup #fMarkName").val(rowObj.marteking_cname);
  $(".db-popup #fMarkEmail").val(rowObj.marteking_cemail);
  $(".db-popup #fMarkMob").val(rowObj.marteking_cmobile_no);

  $(".db-popup #fparam").html(rowObj.success_parameters);
  $(".db-popup #fmetric").html(rowObj.success_metrics);

  $(".db-popup #fmed-house-online").html(rowObj.media_house_online);
  $(".db-popup #fmed-house-offline").html(rowObj.media_house_offline);

  return;
}

function appendGTMJERequestRow() {
  let user = localStorage.getItem("user");
  if (user == null) {
    return "";
  }
  user = JSON.parse(user);

  let gtmJERequests = localStorage.getItem("gtmjointeventrequests");
  if (gtmJERequests == null) {
    return "";
  }

  gtmJERequests = JSON.parse(gtmJERequests);
  //add the rows
  let rowStr = "";
  let actionButtons = "";

  gtmJERequests.forEach(function (item, index) {
    if (item.gmt_prod_services.toLowerCase() === "other") {
      item.gmt_prod_services =
        item.gmt_prod_services + " ( " + item.gmt_prod_services_others + " )";
    }

    rowStr += "<tr data-rowcnt='" + index + "'>";

    actionButtons =
      "<td colspan='2'>" +
      "<button type='button' class='btn btn-icons btn-rounded btn-success btn-view mr-2' title='VIEW' style='cursor: pointer;'>" +
      "<i class='mdi mdi-eye'></i></button>";

    if (user.type === USER_ADMIN_TYPE) {
      if (item.status === APPROVED_STATE) {
        actionButtons +=
          "<button type='button' class='btn btn-icons btn-rounded btn-secondary btn-approve' title='Approve' disabled='' style='cursor: pointer;'>" +
          "<i class='mdi mdi-check'></i></button>" +
          "<button type='button' class='btn btn-icons btn-rounded btn-danger btn-reject' title='Reject' style='cursor: pointer;'>" +
          "<i class='mdi mdi-close'></i></button>";

	if (item.isEditable === "true") {
          actionButtons +=
            "<button type='button' class='btn btn-icons btn-rounded btn-info btn-edit' title='EDIT' style='cursor: pointer;'>" +
            "<i class='mdi mdi-account-edit'></i></button>";
        }

      } else if (item.status === REJECTED_STATE) {
        actionButtons +=
          "<button type='button' class='btn btn-icons btn-rounded btn-secondary btn-approve' title='Approve' disabled='' style='cursor: pointer;'>" +
          "<i class='mdi mdi-check'></i></button>" +
          "<button type='button' class='btn btn-icons btn-rounded btn-secondary btn-reject' title='Reject' disabled='' style='cursor: pointer;'>" +
          "<i class='mdi mdi-close'></i></button>";
      } else {
        actionButtons +=
          "<button type='button' class='btn btn-icons btn-rounded btn-info btn-approve' title='Approve' style='cursor: pointer;'>" +
          "<i class='mdi mdi-check'></i></button>" +
          "<button type='button' class='btn btn-icons btn-rounded btn-danger btn-reject' title='Reject' style='cursor: pointer;'>" +
          "<i class='mdi mdi-close'></i></button>";
      }
    } else {
      if (item.status === PENDING_STATE) {
        actionButtons +=
          "<button type='button' class='btn btn-icons btn-rounded btn-info btn-del' title='DELETE' style='cursor: pointer;'>" +
          "<i class='mdi mdi-delete'></i></button>";
      }
      if (item.status === APPROVED_STATE || item.status === REJECTED_STATE) {
        if (item.status === APPROVED_STATE && item.isEditable === "true") {
          actionButtons +=
            "<button type='button' class='btn btn-icons btn-rounded btn-info btn-edit' title='EDIT' style='cursor: pointer;'>" +
            "<i class='mdi mdi-pencil'></i></button>";
        }
        actionButtons +=
          "<button type='button' class='btn btn-icons btn-rounded btn-info btn-del' title='DELETE' style='cursor: pointer;' disabled>" +
          "<i class='mdi mdi-delete'></i></button>";
      }
    }
/*
    if (item.isEditable === "true") {
      actionButtons +=
        "<button type='button' class='btn btn-icons btn-rounded btn-info btn-edit' title='EDIT' style='cursor: pointer;'>" +
        "<i class='mdi mdi-account-edit'></i></button>";
    }
*/
    actionButtons += "</td>";
    rowStr += actionButtons;

    rowStr +=
      "<td>" +
      item.event_name +
      "</td>" +
      "<td>" +
      item.gmt_prod_services +
      "</td>" +
      "<td>" +
      item.estimated_event_cost +
      "</td>" +
      "<td>" +
      item.target_market +
      "</td>";
    // "<td>" +
    // item.fund_requested +
    // "</td>";

    rowStr += "</tr>";
  });
  $("#gtm-je-requests tbody").html(rowStr);
  return;
}

function fillGTMJEReqItemPop(rowObj) {
  if (rowObj == null) {
    return false;
  }
  //console.log(rowObj);
  if ($("#row-cnt").length) {
    $("#row-cnt").val(rowObj.id);
  }

  if ($("#je-req-id").length) {
    $("#je-req-id").val(rowObj.id);
  }
  $(".db-popup #je-event-name").val(rowObj.event_name);
  $(".db-popup #je-product").val(rowObj.gmt_prod_services);

  if (rowObj.gmt_prod_services.toLowerCase() === "other") {
    $(".db-popup #prod-other").val(rowObj.gmt_prod_services_others);
    if ($(".db-popup #prod-other").hasClass("hide")) {
      $(".db-popup #prod-other").removeClass("hide");
    }
  }

  $(".db-popup #je-proj-cost").val(rowObj.estimated_event_cost);

  if (
    rowObj.budget_plan_doc_path != null &&
    rowObj.budget_plan_doc_path != ""
  ) {
    $(".db-popup #je-budget-plan-doc").attr(
      "href",
      apiDomainUrl + rowObj.budget_plan_doc_path
    );
    $(".db-popup #je-budget-plan-doc").html(
      rowObj.budget_plan_doc_path.split("/")[4]
    );
    if ($(".db-popup #budget-plan-doc-wrap").hasClass("hide")) {
      $(".db-popup #budget-plan-doc-wrap").removeClass("hide");
    }
  } else {
    if (!$(".db-popup #budget-plan-doc-wrap").hasClass("hide")) {
      $(".db-popup #budget-plan-doc-wrap").addClass("hide");
    }
  }

  $(".db-popup #je-objective").html(rowObj.objective);
  $(".db-popup #je-audience").html(rowObj.target_market);

  //$(".db-popup #fpart-ownership").html(rowObj.partner_ownership);
  $(".db-popup #je-existing-sponsors").html(rowObj.existing_sponsors);
  $(".db-popup #je-part-deliverables").html(rowObj.sponsor_deliverables);
  $(".db-popup #je-pi-deliverables").html(rowObj.pi_deliverables);
  //$(".db-popup #ffund-requested").val(rowObj.fund_requested);
  $(".db-popup #je-comments").html(rowObj.comments);

  $(".db-popup #je-exec-name").val(rowObj.executive_name);
  $(".db-popup #je-exec-email").val(rowObj.executive_email);
  $(".db-popup #je-exec-mob").val(rowObj.executive_mobile_no);
  $(".db-popup #je-exec-desig").val(rowObj.executive_desig);

  $(".db-popup #je-mark-name").val(rowObj.marteking_cname);
  $(".db-popup #je-mark-email").val(rowObj.marteking_cemail);
  $(".db-popup #je-mark-mob").val(rowObj.marteking_cmobile_no);

  $(".db-popup #je-success-params").html(rowObj.success_parameters);
  $(".db-popup #je-success-metrics").html(rowObj.success_metrics);

  $(".db-popup #je-loc").html(rowObj.loc_covered);
  $(".db-popup #je-social-media").html(rowObj.social_media);
  $(".db-popup #je-print-media").html(rowObj.print_media);
  $(".db-popup #je-inst-branding").html(rowObj.institutional_building);

  return;
}

function fillGTMJEReqEditPop(rowObj) {
  if (rowObj == null) {
    return false;
  }
  //console.log(rowObj);
  if ($("#row-cnt").length) {
    $("#row-cnt").val(rowObj.id);
  }

  if ($("#je-req-id").length) {
    $("#je-req-id").val(rowObj.id);
  }
  $("#editpop #je-event-name").val(rowObj.event_name);
  $("#editpop #je-product").val(rowObj.gmt_prod_services);

  if (rowObj.gmt_prod_services.toLowerCase() === "other") {
    $("#editpop #prod-other").val(rowObj.gmt_prod_services_others);
    if ($("#editpop #prod-other").hasClass("hide")) {
      $("#editpop #prod-other").removeClass("hide");
    }
  } else {
    $("#editpop #prod-other").val("");
    if (!$("#editpop #prod-other").hasClass("hide")) {
      $("#editpop #prod-other").addClass("hide");
    }
  }

  $("#editpop #je-proj-cost").val(rowObj.estimated_event_cost);

  if (
    rowObj.budget_plan_doc_path != null &&
    rowObj.budget_plan_doc_path != ""
  ) {
    $("#editpop #je-budget-plan-doc").attr(
      "href",
      apiDomainUrl + rowObj.budget_plan_doc_path
    );
    $("#editpop #je-budget-plan-doc").html(
      rowObj.budget_plan_doc_path.split("/")[4]
    );
    if ($("#editpop #budget-plan-doc-wrap").hasClass("hide")) {
      $("#editpop #budget-plan-doc-wrap").removeClass("hide");
    }
  } else {
    if (!$("#editpop #budget-plan-doc-wrap").hasClass("hide")) {
      $("#editpop #budget-plan-doc-wrap").addClass("hide");
    }
  }

  $("#editpop #je-objective").html(rowObj.objective);
  $("#editpop #je-audience").html(rowObj.target_market);

  //$("#editpop #fpart-ownership").html(rowObj.partner_ownership);
  $("#editpop #je-existing-sponsors").html(rowObj.existing_sponsors);
  $("#editpop #je-part-deliverables").html(rowObj.sponsor_deliverables);
  $("#editpop #je-pi-deliverables").html(rowObj.pi_deliverables);
  //$("#editpop #ffund-requested").val(rowObj.fund_requested);
  $("#editpop #je-comments").html(rowObj.comments);

  $("#editpop #je-exec-name").val(rowObj.executive_name);
  $("#editpop #je-exec-email").val(rowObj.executive_email);
  $("#editpop #je-exec-mob").val(rowObj.executive_mobile_no);
  $("#editpop #je-exec-desig").val(rowObj.executive_desig);

  $("#editpop #je-mark-name").val(rowObj.marteking_cname);
  $("#editpop #je-mark-email").val(rowObj.marteking_cemail);
  $("#editpop #je-mark-mob").val(rowObj.marteking_cmobile_no);

  $("#editpop #je-success-params").html(rowObj.success_parameters);
  $("#editpop #je-success-metrics").html(rowObj.success_metrics);

  $("#editpop #je-loc").html(rowObj.loc_covered);
  $("#editpop #je-social-media").html(rowObj.social_media);
  $("#editpop #je-print-media").html(rowObj.print_media);
  $("#editpop #je-inst-branding").html(rowObj.institutional_building);

  return;
}
/***********************/
/* Helper Functions */
/**********************/

function snackbar(snk_msg, isError = true) {
  var x = document.getElementById("snackbar");

  $("#snackbar").html(snk_msg);
  if (!isError) {
    x.className = "show info";
  } else {
    x.className = "show";
  }

  setTimeout(function () {
    x.className = x.className.replace("show", "");
    x.className = x.className.replace("info", "");
  }, 3000);
}

function printErrorObj(errObj) {
  let errMsg = "<ul>";

  Object.keys(errObj).forEach((key) => {
    value = errObj[key];
    value.forEach(function (item) {
      errMsg += "<li>" + item + "</li>";
    });
  });

  errMsg += "</ul>";
  return errMsg;
}

function getCurrentDate() {
  let today = new Date();
  var dd = String(today.getDate()).padStart(2, "0");
  var mm = String(today.getMonth() + 1).padStart(2, "0"); //January is 0!
  var yyyy = today.getFullYear();

  today = yyyy + "-" + mm + "-" + dd;

  return today;
}
