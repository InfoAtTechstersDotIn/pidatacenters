function actionitem() {
    // alert("cgfdg");
    //var input = "03/07/2016";
    customer = document.getElementById('customer').value.trim();
    mrc = document.getElementById('mrc').value.trim();
    service = document.getElementById('service').value.trim();
    status = document.getElementById('status').value.trim();
    remarks = document.getElementById('remarks').value.trim();
    if (customer == '' || mrc == '' || service == 'select' || status == 'select' || remarks == '') {
        alert("All Fields Are Mandatory", "error");
        return false;
    }
    input = {
        "user_id": localStorage.getItem("user_id"),
        "customer_obj": customer,
        "mrc_obj": mrc,
        "service_obj": service,
        "status_obj": status,
        "remarks_obj": remarks,
    };
    //alert(JSON.stringify(input));
    $.ajax({
        url: "https://pidatacenters.com/account-managment/calls/controllers/pipeline/userpipeline.php",
        type: "POST",
        data: input,
        dataType: 'json',
        ContentType: 'application/json; charset=utf-8',
        beforeSend: function() {
            $("#loading-image").show();
        },
        success: function(data) {
            // alert(data.status)
            if (data.status == "err" && data.status_code == 201) {
                swal("Sorry", "Please try again", "err");
                // console.log(JSON.stringify(input));
                $("#loading-image").hide();
            } else if (data.status == "success" && data.status_code == 200) {
                swal("Good job!", "You successfully added new customer", "success").then(function() {
                    location.reload();
                });
                $("#loading-image").hide();
            } else if (data.status == "error" && data.status_code == 503) {
                swal("Sorry", "Something went wrong", "error");
                $("#loading-image").hide();
            }
        },
        error: function(data) {
            swal(data.message);
            return false;
        }
    });
    return true;
}


$(document).ready(function() {
    if (!(localStorage.getItem("status") == "sucess")) {
        window.location.href = "login.php";
    } else {
        document.getElementById("names1", "names2").innerHTML = localStorage.getItem("name");
        document.getElementById("names2").innerHTML = localStorage.getItem("name");
        document.getElementById("mobile").innerHTML = localStorage.getItem("mobile");
        var uid = localStorage.getItem("user_id");
        $.ajax({
            url: "https://pidatacenters.com/account-managment/calls/controllers/pipeline/getpipeline.php?user_id=" + uid,
            method: "GET",
            dataType: "JSON",
            beforeSend: function() {
                $("#loading-image").show();
            },
            success: function(data) {
                $("#loading-image").hide();
                console.log(typeof(data));
                console.log(data.records);
                var res = $('#datalist').DataTable({
                    async: false,
                    data: data.data,
                    columns: [{
                            title: "S.No"
                        },
                        {
                            title: "customer"
                        },
                        {
                            title: "MRC"
                        },
                        {
                            title: "Service Offering"
                        },
                        
                        {
                            title: "Status"
                        },
                        {
                            title: "Remarks"
                        },
                        {
                            title: "Button"
                        },
                        {
                            title: "Button"
                        },
                    ],
                    //scrollY: "500px",
                    //scrollX: true,
                    // scrollCollapse: true,
                    paging: false,
					
					
						
                    "order": [
                    [2, "desc"]
                    ], 
                    dom: 'Bfrtip',
                }).columns.adjust();
                res.on('order.dt search.dt', function() {
                    res.column(0, {
                        search: 'applied',
                        order: 'applied'
                    }).nodes().each(function(cell, i) {
                        cell.innerHTML = i + 1;
                    });
                }).draw();
            },
            error: function(error) // 24 25
            {
                console.log("Error in Fetching Data:");
                console.log(error.responseText);
            }
        });
    }
    $("#logout_user").click(function() {
        localStorage.clear();
        window.location.href = "/portfolio-list/login.php";
    });
});

function getId(elem) {
    var id = $(elem).attr("id");
    localStorage.setItem("keyName", id);
    // alert("asdsa");
    $(document).ready(function() {
        var user_id = localStorage.getItem("user_id");
        var unique_id = localStorage.getItem("keyName");
        //alert(user_id);
        //alert(unique_id);
        $.ajax({
            url: 'https://pidatacenters.com/account-managment/calls/controllers/pipeline/getsinglepipeline.php?user_id=' + user_id + '&unique_id=' + unique_id + '',
            type: 'get',
            dataType: 'json',
            ContentType: 'application/json; charset=utf-8',
            beforeSend: function() {
                $("#loading-image").show();
            },
            data: {
                user_id: user_id,
                unique_id: unique_id
            },
            success: function(result) {
                //alert(user_id);
                //alert(unique_id);
                //alert(result.status);
                var msg = "";
                if (result.status == "sucess" && result.status_code == 200) {
                    //alert("test");
                    //alert(JSON.stringify(result));
                    var myJson = JSON.stringify(result);
                    var result = JSON.parse(myJson);
                    // alert(result.data.applications_hosted);  
                    //localStorage.setItem('userss', JSON.stringify(data.records));
                    // for (i = 0; i < result.length; i++) {
                    //	alert(result[0].customer);
                    // var mrc_input = result.data.mrc.replace(/,/g, "");
                    //var mrc_iinput = Math.trunc(mrc_input);
                    //alert(result.data.backup_type)
                    $('#customer-input').val(result.data.customer_obj);
                    $('#mrc-input').val(result.data.mrc_obj);
                    $('#service-input').val(result.data.service_obj);
                    $('#status-input').val(result.data.status_obj);
                    $('#remarks-input').val(result.data.remarks_obj);
                    //}		
                    $("#loading-image").hide();
                } else {
                    msg = "Please try after sometime";
                    $("#loading-image").hide();
                }
                $("#message").html(msg);
            }
        });
    });
};

function update() {
    customer_input_input = document.getElementById('customer-input').value.trim();
    mrc_input_input = document.getElementById('mrc-input').value.trim();
    service_input_input = document.getElementById('service-input').value.trim();
    status_input_input = document.getElementById('status-input').value.trim();
    remarks_input_input = document.getElementById('remarks-input').value.trim();
    if (customer_input_input == '' || mrc_input_input == '' || service_input_input == 'select' || status_input_input == 'select' || remarks_input_input == '') {
        alert("All Fields Are Mandatory", "error");
        return false;
    }
    input = {
        "user_id": localStorage.getItem("user_id"),
        "unique_id": localStorage.getItem("keyName"),
        "customer_obj": customer_input_input,
        "mrc_obj": mrc_input_input,
        "service_obj": service_input_input,
        "status_obj": status_input_input,
        "remarks_obj": remarks_input_input,
    };  
    //alert(JSON.stringify(input));
    $.ajax({
        url: "https://pidatacenters.com/account-managment/calls/controllers/pipeline/editpipeline.php",
        type: "POST",
        data: input,
        dataType: 'json',
        ContentType: 'application/json; charset=utf-8',
        beforeSend: function() {
            $("#loading-image").show();
        },
        success: function(data) {
			//alert(data.status)
            if (data.status == "err" && data.status_code == 201) {
                swal("Sorry", "Please try again", "err");
                console.log(JSON.stringify(input));
                $("#loading-image").hide();
            } else if (data.status == "success" && data.status_code == 200) {
                swal("Good job!", "You successfully updated customer", "success").then(function() {
                    location.reload();
                });
                $("#loading-image").hide();
            } else if (data.status == "error" && data.status_code == 503) {
                swal("Sorry", "Something went wrong", "error");
                $("#loading-image").hide();
            }
        },
        error: function(data) {
            swal(data.message);
            return false;
        }
    });
    return true;
}

function getupdateId(elem) {
    var id = $(elem).attr("id");
    localStorage.setItem("keyName", id);
    // alert("asdsa");
    var user_id = localStorage.getItem("user_id");
    var unique_id = localStorage.getItem("keyName");
    //alert(user_id);
    //alert(unique_id);
    swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this customer!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: 'https://pidatacenters.com/account-managment/calls/controllers/pipeline/deleteuserpipeline.php',
                    type: 'post',
                    dataType: 'json',
                    ContentType: 'application/json; charset=utf-8',
                    data: {
                        user_id: user_id,
                        unique_id: unique_id
                    },
                    success: function(data) {
                         alert(data.status);
                        if (data.status == "success" && data.status_code == 200) {
                            swal("Good job!", "You successfully delete customer", "success").then(function() {
                                location.reload();
                            });
                        } else {
                            alert("please try after sometime");
                        }
                        $("#message").html(msg);
                    }
                });
            } else {
                swal("Your customer is safe!");
            }
        });
};



/* validation for mrc*/

 function CheckNumeric(e) {
        if (window.event) // IE
        {
            if ((e.keyCode < 48 || e.keyCode > 57) & e.keyCode != 8 && e.keyCode != 44) {
                event.returnValue = false;
                return false;
            }
        }
        else { // Fire Fox
            if ((e.which < 48 || e.which > 57) & e.which != 8 && e.which != 44) {
                e.preventDefault();
                return false;
            }
        }
    }