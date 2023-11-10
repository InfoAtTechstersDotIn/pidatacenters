
  function actionitem() {
    
	// alert("cgfdg");
    //var input = "03/07/2016";
    action_item_obj = document.getElementById('action-item').value.trim();
    Status_obj = document.getElementById('Status').value.trim();
    intiated_date_obj = document.getElementById('intiated-date').value.trim();
    expcated_obj = document.getElementById('expcated').value.trim();
    remarks_obj = document.getElementById('remarks').value.trim();
   var output = intiated_date_obj.replace(/(\d\d)\/(\d\d)\/(\d{4})/, "$3-$1-$2");
   
   var output_1 = expcated_obj.replace(/(\d\d)\/(\d\d)\/(\d{4})/, "$3-$1-$2");
   
    if (action_item_obj == '' || Status_obj  == 'select' || intiated_date_obj == '' || expcated_obj == '' || remarks_obj == '') {
        alert("All Fields Are Mandatory", "error");
        return false;
    }
   
    input = {
        "user_id": localStorage.getItem("user_id"),
        "action_item_obj": action_item_obj,
        "Status_obj": Status_obj,
        "intiated__date_obj": output,
        "expcated_obj": output_1,
        "remarks_obj": remarks_obj,
        };
    //alert(JSON.stringify(input));
    
    $.ajax({
        url: "https://pidatacenters.com/account-managment/calls/controllers/actionitem/useractionitems.php",
        type: "POST",
        data: input,
        dataType: 'json',
        ContentType: 'application/json; charset=utf-8',
        beforeSend: function() {
            $("#loading-image").show();
        },
        success: function(data) {
        // alert("commng")
            if (data.status == "err" && data.status_code == 201) { 
                swal("Sorry", "Please try again", "err");
               // console.log(JSON.stringify(input));
                $("#loading-image").hide();
            } else if (data.status == "sucess" && data.status_code == 200) {
                swal("Good job!", "You successfully added new item", "success").then(function() {
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
            url: "https://pidatacenters.com/account-managment/calls/controllers/actionitem/getuseractionitems.php?user_id=" + uid,
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
                    columns: [
						{
                            title: "S.No"
                        },
                        {
                            title: "Action Item"
                        },
                        {
                            title: "Status"
                        },
                        {
                            title: "intiated date"
                        },
                        {
                            title: "Expected date clossure"
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
					
                   
                    /*"order": [
                        [2, "desc"]
                    ], */
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
            url: 'https://pidatacenters.com/account-managment/calls/controllers/actionitem/getsingleactionitem.php?user_id=' + user_id + '&unique_id=' + unique_id + '',
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
                    $('#action-item-input').val(result.data.action_item);
                    $('#Status-input').val(result.data.status);
                    $('#intiated-date-input').val(result.data.initiated_date);
                    $('#expcated-input').val(result.data.expected_date);
                    $('#remarks-input').val(result.data.remarks);
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
    
    actionitem_input = document.getElementById('action-item-input').value.trim();
    Status_input = document.getElementById('Status-input').value.trim();
    intiateddate_input = document.getElementById('intiated-date-input').value.trim();
    expcatedinput_input = document.getElementById('expcated-input').value.trim();
    remarks_input = document.getElementById('remarks-input').value.trim();
    
    if (actionitem_input == '' || Status_input == 'select' || intiateddate_input == '' || expcatedinput_input == '' || remarks_input == '') {
        alert("All Fields Are Mandatory", "error");
        return false;
    }
    
    input = {
        "user_id": localStorage.getItem("user_id"),
        "unique_id": localStorage.getItem("keyName"),
        "actionitem_input_obj": actionitem_input,
        "Status_input_obj": Status_input,
        "intiateddate_input_obj": intiateddate_input,
        "expcatedinput_input_obj": expcatedinput_input,
        "remarks_input_obj": remarks_input,
           };
    //alert(JSON.stringify(input));
   
    $.ajax({
        url: "https://pidatacenters.com/account-managment/calls/controllers/actionitem/editactionitem.php",
        type: "POST",
        data: input,
        dataType: 'json',
        ContentType: 'application/json; charset=utf-8',
        beforeSend: function() {
            $("#loading-image").show();
        },
        success: function(data) {
            
            if (data.status == "err" && data.status_code == 201) {
                swal("Sorry", "Please try again", "err");
                console.log(JSON.stringify(input));
                $("#loading-image").hide();
            } else if (data.status == "sucess" && data.status_code == 200) {
                swal("Good job!", "You successfully updated item", "success").then(function() {
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
            text: "Once deleted, you will not be able to recover this item!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: 'https://pidatacenters.com/account-managment/calls/controllers/actionitem/deleteuseractionitems.php',
                    type: 'post',
                    dataType: 'json',
                    ContentType: 'application/json; charset=utf-8',
                    data: { 
                        user_id: user_id,
                        unique_id: unique_id
                    },
                    success: function(data) {
                        // alert(data.status);
                        if (data.status == "success" && data.status_code == 200) {
                            swal("Good job!", "You successfully delete item", "success").then(function() {
                                location.reload();
                            });
                        } else {
                            alert("please try after sometime");
                        }
                       // $("#message").html(msg);
                    }
                });
            } else {
                swal("Your item  is safe!");
            }
        });
};