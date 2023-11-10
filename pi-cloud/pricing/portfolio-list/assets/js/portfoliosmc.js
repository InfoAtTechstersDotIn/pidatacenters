/*home page js*/
function sum() {
    var txtFirstNumberValue = document.getElementById('h1').value.trim();
    var txtSecondNumberValue = document.getElementById('Vmware').value.trim();
    var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
    //alert(result);
    if (!isNaN(result)) {
        //alert("comming")
        document.getElementById('VMs').value = result;
    }
}

function sumupdate() {
    var txtFirstNumberValue = document.getElementById('h_one_plus_input').value.trim();
    var txtSecondNumberValue = document.getElementById('vmware_input').value.trim();
    var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
    //alert(result);
    if (!isNaN(result)) {
        //alert("comming")
        document.getElementById('no_of_vm_input').value = result;
    }
}

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
            url: 'https://pidatacenters.com/account-managment/calls/controllers/getsinglerecord.php?user_id='+user_id +'&unique_id='+unique_id + '',
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
					//alert(result.status);
					var myJson = JSON.stringify(result);
					//alert(myJson);
                    var result = JSON.parse(myJson);
                    
					 //alert(result.data.customer);
                    // alert(result.data.applications_hosted);  
                    //localStorage.setItem('userss', JSON.stringify(data.records));
                    // for (i = 0; i < result.length; i++) {
                    //	alert(result[0].customer);
                    var mrc_input = result.data.mrc.replace(/,/g, "");
                    var mrc_iinput = Math.trunc(mrc_input);
					
                   
                    $('#customer_input').val(result.data.customer);
                    $('#mrc_iinputss').val(mrc_iinput);
                    $('#billing_cycle_input').val(result.data.billing_cycle);
                    $('#industry_input').val(result.data.industry);
                    $('#prod_of_the_customer_input').val(result.data.prod_of_the_customer);
                    $('#corporate_office_input').val(result.data.corporate_office);
                    $('#services_by_pi_input').val(result.data.services_by_pi);
                    $('#applications_hosted_input').val(result.data.applications_hosted);
                    $('#no_of_vm_input').val(result.data.no_of_vm);
                    $('#h_one_plus_input').val(result.data.h_one_plus);
                    $('#vmware_input').val(result.data.vmware);
                    $('#go_live_date_input').val(result.data.go_live_date);
                    // $('#hosted_environment_input').val(result.data.hosted_environment);
                    $('#vCPU_input').val(result.data.vCPU);
                    $('#memory_input').val(result.data.memory);
                    $('#storage_sas_sata_input').val(result.data.storage_sas_sata);
                    $('#storage_ssd_input').val(result.data.storage_ssd);
                    $('#os_input').val(result.data.os);
                    $('#db_input').val(result.data.db);
                    $('#backup_opted_input').val(result.data.backup_opted);
                    $('#backup_type_input').val(result.data.backup_type);
                    $('#backup_frequency_input').val(result.data.backup_frequency);
                    $('#backup_retention_period_input').val(result.data.backup_retention_period);
                    $('#backup_status_input').val(result.data.backup_status);
                    $('#backup_storage_input').val(result.data.backup_storage);
                    $('#dr_input').val(result.data.dr);
                    $('#ha_input').val(result.data.ha);
                    $('#bandwidth_input').val(result.data.bandwidth);
                    $('#customer_contact_details_input').val(result.data.customer_contact_details);
                    $('#last_CSAT_suvery_score_input').val(result.data.last_CSAT_suvery_score);
                   // $('#interest_in_other_products_of_pi_input').val(result.data.interest_in_other_products_of_pi);
                    //$('#action_items_post_weekly_review_input').val(result.data.action_items_post_weekly_review);
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

function getupdateId(elem) {
    var id = $(elem).attr("id");
    localStorage.setItem("keyName", id);
    // alert("asdsa");
    var user_id = localStorage.getItem("user_id");
    var unique_id = localStorage.getItem("keyName");
    // alert(user_id);
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
                    url: 'https://pidatacenters.com/account-managment/calls/controllers/deleteaccountdetails.php',
                    type: 'post',
                    dataType: 'json',
                    ContentType: 'application/json; charset=utf-8',
                    data: {
                        user_id: user_id,
                        unique_id: unique_id
                    },
                    success: function(data) {
                        // alert(data.status);
                        if (data.status == "sucess" && data.status_code == 200) {
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
$(document).ready(function() {
    // alert('called');
    if (!(localStorage.getItem("status") == "sucess")) {
        window.location.href = "login.php";
    } else {
        // document.getElementById("userid").innerHTML = localStorage.getItem("user_id");
        document.getElementById("names1", "names2").innerHTML = localStorage.getItem("name");
        document.getElementById("names2").innerHTML = localStorage.getItem("name");
        document.getElementById("mobile").innerHTML = localStorage.getItem("mobile");
        var uid = localStorage.getItem("user_id");
        if (window.matchMedia('(max-width: 768px)').matches) {
           
		    $.ajax({
                url: "https://pidatacenters.com/account-managment/calls/controllers/getacconuntdetails.php?user_id=" + uid,
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
                            // {title: "S.No"},
                            {
                                title: "Customer"
                            },
                            {
                                title: "Account Manager"
                            },
                            {
                                title: "MRC (₹)"
                            },
                            {
                                title: "Billing Cycle"
                            },
                            {
                                title: "Industry"
                            },
                            {
                                title: "Product/services  of the customer"
                            },
                            {
                                title: "Corporate Office"
                            },
                            {
                                title: "Services by Pi"
                            },
                            {
                                title: "Applications Hosted"
                            },
                            {
                                title: "# of VMs"
                            },
                            {
                                title: "H1+"
                            },
                            {
                                title: "Vmware"
                            },
                            {
                                title: "Go Live Date"
                            },
                            {
                                title: "vCPU"
                            },
                            {
                                title: "Memory"
                            },
                            {
                                title: "Storage SAS/SATA"
                            },
                            {
                                title: "Storage SSD"
                            },
                            {
                                title: "OS"
                            },
                            {
                                title: "DB"
                            },
                            {
                                title: "Backup opted(Yes/No)"
                            },
                            {
                                title: "Backup Type"
                            },
                            {
                                title: "Backup Frequency"
                            },
                            {
                                title: "Backup retention period"
                            },
                            {
                                title: "Backup status"
                            },
                            {
                                title: "Back-up Storage  (GB)"
                            },
                            {
                                title: "DR"
                            },
                            {
                                title: "HA"
                            },
                            {
                                title: "Bandwidth"
                            },
                            {
                                title: "Customer contact details"
                            },
                            {
                                title: "Last CSAT Suvery Score"
                            },
                           /* {
                                title: "Comments on Interest in other products of Pi"
                            },
                            {
                                title: "Action Items post weekly review"
                            },*/
							
                            {
                                title: "Update"
                            },
                            {
                                title: "Delete"
                            },
                        ],
                        "footerCallback": function(row, data, start, end, display) {
                            var api = this.api(),
                                data;
                            // Remove the formatting to get integer data for summation
                            var intVal = function(i) {
                                return typeof i === 'string' ?
                                    i.replace(/[\$,]/g, '') * 1 :
                                    typeof i === 'number' ?
                                    i : 0;
                            };
                            // Total over all pages
                            total = api
                                .column(3)
                                .data()
                                .reduce(function(a, b) {
                                    return intVal(a) + intVal(b);
                                }, 0);
                            // Total over this page
                            pageTotal = api
                                .column(3, {
                                    page: 'current'
                                })
                                .data()
                                .reduce(function(a, b) {
                                    return intVal(a) + intVal(b);
                                }, 0);
                            // Update footer
                            $(api.column(4).footer()).html(
                                'Page Total' + pageTotal.toLocaleString('en-IN', {
                                    maximumFractionDigits: 2,
                                    style: 'currency',
                                    currency: 'INR'
                                }) + ' ( Total ' + total.toLocaleString('en-IN', {
                                    maximumFractionDigits: 2,
                                    style: 'currency',
                                    currency: 'INR'
                                }) + ' total)'
                            );
                        },
                        scrollY: "425px",
                        scrollX: true,
                        scrollCollapse: true,
                        paging: false,
                        /* fixedColumns: {
                        leftColumns: 3
                        }, */
                        fixedHeader: {
                            header: true,
                            footer: true
                        },
                        "columnDefs": [{
                            'targets': [0, 4, 5, 6, 7, 8, 9, 18, 19, 20, 21, 22, 23, 24, 26, 27, 28, 29, 30, 31],
                            'orderable': false,
                        }],
                       "order": [[ 3, "desc" ]],
                        // 'dom': 'Bfrtip',
                        'dom': 'RlBfrtip',
                        buttons: [{
                                extend: 'excel',
                                text: 'Download'
                            }
                            ///text: 'Copy to clipboard', 
                           /* {
                                text: 'Upload',
                                action: function(e, dt, node, config) {
                                    window.location = 'upload.php';
                                }
                            } */
                        ],
                        /* columnDefs: [{
                        targets: [9,22, 29,31,32],
                        createdCell: function(cell) {
                        var $cell = $(cell);
                        $(cell).contents().wrapAll("
                        <div class='content'></div>
                        ");
                        var $content = $cell.find(".content");
                        //alert(columnDefs.targets);
                        //var showChar = 100;
                        //alert($content.length);
                        //if($(cell).contents().length > showChar) {
                        $(cell).append($("<a class='css_a'>Read more</a>"));
                        //}
                        //}
                        $btn = $(cell).find("a");
                        $content.css({ 
                        "height": "24px",
                        "overflow": "hidden"
                        })
                        $cell.data("isLess", true);
                        $btn.click(function() {
                        var isLess = $cell.data("isLess");
                        $content.css("height", isLess ? "auto" : "24px")
                        $(this).text(isLess ? "Read less" : "Read more")
                        $cell.data("isLess", !isLess)
                        })
                        }
                        }]	,
                        */
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
		   
        } else {
            $.ajax({
                url: "https://pidatacenters.com/account-managment/calls/controllers/getacconuntdetails.php?user_id=" + uid,
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
                            // {title: "S.No"},
                            {
                                title: "Customer"
                            },
                            {
                                title: "Account Manager"
                            },
                            {
                                title: "MRC (₹)"
                            },
                            {
                                title: "Billing Cycle"
                            },
                            {
                                title: "Industry"
                            },
                            {
                                title: "Product/services  of the customer"
                            },
                            {
                                title: "Corporate Office"
                            },
                            {
                                title: "Services by Pi"
                            },
                            {
                                title: "Applications Hosted"
                            },
                            {
                                title: "# of VMs"
                            },
                            {
                                title: "H1+"
                            },
                            {
                                title: "Vmware"
                            },
                            {
                                title: "Go Live Date"
                            },
                            {
                                title: "vCPU"
                            },
                            {
                                title: "Memory"
                            },
                            {
                                title: "Storage SAS/SATA"
                            },
                            {
                                title: "Storage SSD"
                            },
                            {
                                title: "OS"
                            },
                            {
                                title: "DB"
                            },
                            {
                                title: "Backup opted(Yes/No)"
                            },
                            {
                                title: "Backup Type"
                            },
                            {
                                title: "Backup Frequency"
                            },
                            {
                                title: "Backup retention period"
                            },
                            {
                                title: "Backup status"
                            },
                            {
                                title: "Back-up Storage  (GB)"
                            },
                            {
                                title: "DR"
                            },
                            {
                                title: "HA"
                            },
                            {
                                title: "Bandwidth"
                            },
                            {
                                title: "Customer contact details"
                            },
                            {
                                title: "Last CSAT Suvery Score"
                            },
                           /* {
                                title: "Comments on Interest in other products of Pi"
                            },
                            {
                                title: "Action Items post weekly review"
                            },*/
							
                            {
                                title: "Update"
                            },
                            {
                                title: "Delete"
                            },
                        ],
                        "footerCallback": function(row, data, start, end, display) {
                            var api = this.api(),
                                data;
                            // Remove the formatting to get integer data for summation
                            var intVal = function(i) {
                                return typeof i === 'string' ?
                                    i.replace(/[\$,]/g, '') * 1 :
                                    typeof i === 'number' ?
                                    i : 0;
                            };
                            // Total over all pages
                            total = api
                                .column(3)
                                .data()
                                .reduce(function(a, b) {
                                    return intVal(a) + intVal(b);
                                }, 0);
                            // Total over this page
                            pageTotal = api
                                .column(3, {
                                    page: 'current'
                                })
                                .data()
                                .reduce(function(a, b) {
                                    return intVal(a) + intVal(b);
                                }, 0);
                            // Update footer
                            $(api.column(4).footer()).html(
                                'Page Total' + pageTotal.toLocaleString('en-IN', {
                                    maximumFractionDigits: 2,
                                    style: 'currency',
                                    currency: 'INR'
                                }) + ' ( Total ' + total.toLocaleString('en-IN', {
                                    maximumFractionDigits: 2,
                                    style: 'currency',
                                    currency: 'INR'
                                }) + ' total)'
                            );
                        },
                        scrollY: "425px",
                        scrollX: true,
                        scrollCollapse: true,
                        paging: false,
                        /* fixedColumns: {
                        leftColumns: 3
                        }, */
                        fixedHeader: {
                            header: true,
                            footer: true
                        },
                        "columnDefs": [{
                            'targets': [0, 4, 5, 6, 7, 8, 9, 18, 19, 20, 21, 22, 23, 24, 26, 27, 28, 29, 30, 31],
                            'orderable': false,
                        }],
                       "order": [[ 3, "desc" ]],
                        // 'dom': 'Bfrtip',
                        'dom': 'RlBfrtip',
                        buttons: [{
                                extend: 'excel',
                                text: 'Download'
                            }
                            ///text: 'Copy to clipboard', 
                           /* {
                                text: 'Upload',
                                action: function(e, dt, node, config) {
                                    window.location = 'upload.php';
                                }
                            } */
                        ],
                        /* columnDefs: [{
                        targets: [9,22, 29,31,32],
                        createdCell: function(cell) {
                        var $cell = $(cell);
                        $(cell).contents().wrapAll("
                        <div class='content'></div>
                        ");
                        var $content = $cell.find(".content");
                        //alert(columnDefs.targets);
                        //var showChar = 100;
                        //alert($content.length);
                        //if($(cell).contents().length > showChar) {
                        $(cell).append($("<a class='css_a'>Read more</a>"));
                        //}
                        //}
                        $btn = $(cell).find("a");
                        $content.css({ 
                        "height": "24px",
                        "overflow": "hidden"
                        })
                        $cell.data("isLess", true);
                        $btn.click(function() {
                        var isLess = $cell.data("isLess");
                        $content.css("height", isLess ? "auto" : "24px")
                        $(this).text(isLess ? "Read less" : "Read more")
                        $cell.data("isLess", !isLess)
                        })
                        }
                        }]	,
                        */
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
    }
});

function validate() {
    // alert("test");
    //var input = "03/07/2016";
    Customer_obj = document.getElementById('Customer').value.trim();
    MRC_obj = document.getElementById('MRC').value.trim();
    Billig_Cycle_obj = document.getElementById('Billig_Cycle').value.trim();
    Industry_obj = document.getElementById('Industry').value.trim();
    services_of_the_customer_obj = document.getElementById('services_of_the_customer').value.trim();
    Corporate_Office_obj = document.getElementById('Corporate_Office').value.trim();
    Services_by_Pi_obj = document.getElementById('Services_by_Pi').value;
    Applications_Hosted_obj = document.getElementById('Applications_Hosted').value.trim();
    VMs_obj = document.getElementById('VMs').value.trim();
    h1_obj = document.getElementById('h1').value.trim();
    Vmware_obj = document.getElementById('Vmware').value.trim();
    Live_date_obj = document.getElementById('Live_date').value.trim();
    // Hosted_Environment_obj = document.getElementById('Hosted_Environment').value.trim();
    vCPU_obj = document.getElementById('vCPU').value;
    Memory_obj = document.getElementById('Memory').value.trim();
    SAS_SATA_obj = document.getElementById('SAS_SATA').value.trim();
    SSD_obj = document.getElementById('SSD').value.trim();
    OS_obj = document.getElementById('OS').value.trim();
    DB_obj = document.getElementById('DB').value.trim();
    Backup_opted_obj = document.getElementById('Backup_opted').value.trim();
    Backup_Type_obj = document.getElementById('Backup_Type').value;
    Backup_Frequency_obj = document.getElementById('Backup_Frequency').value.trim();
    Backup_retention_obj = document.getElementById('Backup_retention').value.trim();
    Backup_status_obj = document.getElementById('Backup_status').value.trim();
    Back_up_obj = document.getElementById('Back_up').value.trim();
    DR_obj = document.getElementById('DR').value.trim();
    AH_obj = document.getElementById('AH').value.trim();
    Bandwidth_obj = document.getElementById('Bandwidth').value;
    Customer_contact_obj = document.getElementById('Customer_contact').value.trim();
    CSAT_obj = document.getElementById('CSAT').value.trim();
    /* Interest_obj = document.getElementById('Interest').value;
    Action_obj = document.getElementById('Action').value.trim(); */
    var mac_num = Number(parseFloat(MRC_obj).toFixed(0)).toLocaleString('en', {
        minimumFractionDigits: 0
    });
    //alert(mac_num);
    //var Hosted_Environment_obj=0;
    var output = Live_date_obj.replace(/(\d\d)\/(\d\d)\/(\d{4})/, "$3-$1-$2");
    //alert(output);
    //alert(JSON.stringify(input));
    if (Customer_obj == '' || MRC_obj == '' || Billig_Cycle_obj == 'select' || Industry_obj == 'select' || services_of_the_customer_obj == '' ||
        Corporate_Office_obj == '' || Services_by_Pi_obj == 'select' || Customer_obj == '' || Applications_Hosted_obj == '' || VMs_obj == '' ||
        h1_obj == '' || Vmware_obj == '' || Live_date_obj == '' || vCPU_obj == '' || Memory_obj == '' ||
        SAS_SATA_obj == '' || SSD_obj == '' || OS_obj == '' || DB_obj == '' || Backup_opted_obj == 'select' || Backup_Type_obj == 'select' || Backup_Frequency_obj == 'select' ||
        Backup_retention_obj == '' || Backup_status_obj == 'select' || Back_up_obj == '' || DR_obj == 'select' || AH_obj == '' || Bandwidth_obj == '' ||
        Customer_contact_obj == '' || CSAT_obj == '') {
        alert("All Fields Are Mandatory", "error");
        return false;
    }
    // atpos = p_bemail.indexOf("@");
    // dotpos = p_bemail.lastIndexOf(".");
    // if (atpos < 1 || (dotpos - atpos < 2)) {
    // alert("", "Please Enter A Valid Corporate Email Address", "error");
    // return false;
    // } if (!(phone.match(/^[6789]\d{9}$/))) {
    // alert("", "Please Enter A Valid Phone Number", "error");
    // return false;
    // } else {
    input = {
        "user_id": localStorage.getItem("user_id"),
        "Customer_key": Customer_obj,
        "MRC_key": mac_num,
        "Billig_Cycle_key": Billig_Cycle_obj,
        "Industry_key": Industry_obj,
        "services_of_the_customer_key": services_of_the_customer_obj,
        "Corporate_Office_key": Corporate_Office_obj,
        "Services_by_Pi_key": Services_by_Pi_obj,
        "Applications_Hosted_key": Applications_Hosted_obj,
        "VMs_key": VMs_obj,
        "h1_key": h1_obj,
        "Vmware_key": Vmware_obj,
        "Live_date_key": output,
        // "Hosted_Environment_key": Hosted_Environment_obj,
        "vCPU_key": vCPU_obj,
        "Memory_key": Memory_obj,
        "SAS_SATA_key": SAS_SATA_obj,
        "SSD_key": SSD_obj,
        "OS_key": OS_obj,
        "DB_key": DB_obj,
        "Backup_opted_key": Backup_opted_obj,
        "Backup_Type_key": Backup_Type_obj,
        "Backup_Frequency_key": Backup_Frequency_obj,
        "Backup_retention_key": Backup_retention_obj,
        "Backup_status_key": Backup_status_obj,
        "Back_up_key": Back_up_obj,
        "DR_key": DR_obj,
        "AH_key": AH_obj,
        "Bandwidth_key": Bandwidth_obj,
        "Customer_contact_key": Customer_contact_obj,
        "CSAT_key": CSAT_obj,
       /* "Interest_key": Interest_obj,
        "Action_key": Action_obj */
    };
    console.log(JSON.stringify(input));
    //alert(JSON.stringify(input));
    // console.log(JSON.stringify(input));
    $.ajax({
        url: "https://pidatacenters.com/account-managment/calls/controllers/activeaccounts.php",
        type: "POST",
        data: input,
        dataType: 'json',
        ContentType: 'application/json; charset=utf-8',
        beforeSend: function() {
            $("#loading-image").show();
        },
        success: function(data) {
            // alert("comming");
            if (data.status == "err" && data.status_code == 201) {
                alert("Sorry", "Please try again", "err");
                console.log(JSON.stringify(input));
                $("#loading-image").hide();
            } else if (data.status == "sucess" && data.status_code == 200) {
                swal("Good job!", "You successfully added new customer", "success").then(function() {
                    location.reload();
                });
                // alert(JSON.stringify(data));
                // alert(JSON.stringify(input));
                $("#loading-image").hide();
            } else if (data.status == "error" && data.status_code == 503) {
                alert("Sorry", "Something went wrong", "error");
                $("#loading-image").hide();
            }
        },
        error: function(data) {
            // alert('error');
            // alert("erroee")
            alert(data.message);
            return false;
        }
    });
    return true;
}

function update() {
    //alert("test");
    Customer_obj = document.getElementById('customer_input').value.trim();
    MRC_obj = document.getElementById('mrc_iinputss').value.trim();
    Billig_Cycle_obj = document.getElementById('billing_cycle_input').value.trim();
    Industry_obj = document.getElementById('industry_input').value.trim();
    services_of_the_customer_obj = document.getElementById('prod_of_the_customer_input').value.trim();
    Corporate_Office_obj = document.getElementById('corporate_office_input').value.trim();
    Services_by_Pi_obj = document.getElementById('services_by_pi_input').value;
    Applications_Hosted_obj = document.getElementById('applications_hosted_input').value.trim();
    VMs_obj = document.getElementById('no_of_vm_input').value.trim();
    h1_obj = document.getElementById('h_one_plus_input').value.trim();
    Vmware_obj = document.getElementById('vmware_input').value.trim();
    Live_date_obj = document.getElementById('go_live_date_input').value.trim();
    //Hosted_Environment_obj = document.getElementById('hosted_environment_input').value.trim();
    vCPU_obj = document.getElementById('vCPU_input').value;
    Memory_obj = document.getElementById('memory_input').value.trim();
    SAS_SATA_obj = document.getElementById('storage_sas_sata_input').value.trim();
    SSD_obj = document.getElementById('storage_ssd_input').value.trim();
    OS_obj = document.getElementById('os_input').value.trim();
    DB_obj = document.getElementById('db_input').value.trim();
    Backup_opted_obj = document.getElementById('backup_opted_input').value.trim();
    Backup_Type_obj = document.getElementById('backup_type_input').value;
    Backup_Frequency_obj = document.getElementById('backup_frequency_input').value.trim();
    Backup_retention_obj = document.getElementById('backup_retention_period_input').value.trim();
    Backup_status_obj = document.getElementById('backup_status_input').value.trim();
    Back_up_obj = document.getElementById('backup_storage_input').value.trim();
    DR_obj = document.getElementById('dr_input').value.trim();
    AH_obj = document.getElementById('ha_input').value.trim();
    Bandwidth_obj = document.getElementById('bandwidth_input').value;
    Customer_contact_obj = document.getElementById('customer_contact_details_input').value.trim();
    CSAT_obj = document.getElementById('last_CSAT_suvery_score_input').value.trim();
    /*Interest_obj = document.getElementById('interest_in_other_products_of_pi_input').value;
    Action_obj = document.getElementById('action_items_post_weekly_review_input').value.trim(); */
    var mac_num = Number(parseFloat(MRC_obj).toFixed(0)).toLocaleString('en', {
        minimumFractionDigits: 0
    });
    alert(mac_num);
    if (Customer_obj == '' || MRC_obj == '' || Billig_Cycle_obj == 'select' || Industry_obj == 'select' || services_of_the_customer_obj == '' ||
        Corporate_Office_obj == '' || Services_by_Pi_obj == 'select' || Customer_obj == '' || Applications_Hosted_obj == '' || VMs_obj == '' ||
        h1_obj == '' || Vmware_obj == '' || Live_date_obj == '' || vCPU_obj == '' || Memory_obj == '' ||
        SAS_SATA_obj == '' || SSD_obj == '' || OS_obj == '' || DB_obj == '' || Backup_opted_obj == 'select' || Backup_Type_obj == 'select' || Backup_Frequency_obj == 'select' ||
        Backup_retention_obj == '' || Backup_status_obj == 'select' || Back_up_obj == '' || DR_obj == 'select' || AH_obj == '' || Bandwidth_obj == '' ||
        Customer_contact_obj == '' || CSAT_obj == '') {
        alert("All Fields Are Mandatory", "error");
        return false;
    }
    // atpos = p_bemail.indexOf("@");
    // dotpos = p_bemail.lastIndexOf(".");
    // if (atpos < 1 || (dotpos - atpos < 2)) {
    // alert("", "Please Enter A Valid Corporate Email Address", "error");
    // return false;
    // } if (!(phone.match(/^[6789]\d{9}$/))) {
    // alert("", "Please Enter A Valid Phone Number", "error");
    // return false;
    // } else {
    input = {
        "user_id": localStorage.getItem("user_id"),
        "unique_id": localStorage.getItem("keyName"),
        "Customer_key": Customer_obj,
        "MRC_key": mac_num,
        "Billig_Cycle_key": Billig_Cycle_obj,
        "Industry_key": Industry_obj,
        "services_of_the_customer_key": services_of_the_customer_obj,
        "Corporate_Office_key": Corporate_Office_obj,
        "Services_by_Pi_key": Services_by_Pi_obj,
        "Applications_Hosted_key": Applications_Hosted_obj,
        "VMs_key": VMs_obj,
        "h1_key": h1_obj,
        "Vmware_key": Vmware_obj,
        "Live_date_key": Live_date_obj,
        //"Hosted_Environment_key": Hosted_Environment_obj,
        "vCPU_key": vCPU_obj,
        "Memory_key": Memory_obj,
        "SAS_SATA_key": SAS_SATA_obj,
        "SSD_key": SSD_obj,
        "OS_key": OS_obj,
        "DB_key": DB_obj,
        "Backup_opted_key": Backup_opted_obj,
        "Backup_Type_key": Backup_Type_obj,
        "Backup_Frequency_key": Backup_Frequency_obj,
        "Backup_retention_key": Backup_retention_obj,
        "Backup_status_key": Backup_status_obj,
        "Back_up_key": Back_up_obj,
        "DR_key": DR_obj,
        "AH_key": AH_obj,
        "Bandwidth_key": Bandwidth_obj,
        "Customer_contact_key": Customer_contact_obj,
        "CSAT_key": CSAT_obj,
       /* "Interest_key": Interest_obj,
        "Action_key": Action_obj,*/
    };
    console.log(JSON.stringify(input));
    // alert(JSON.stringify(input));
    // console.log(JSON.stringify(input));
    $.ajax({
        url: "https://pidatacenters.com/account-managment/calls/controllers/editaccountdetails.php",
        type: "POST",
        data: input,
        dataType: 'json',
        ContentType: 'application/json; charset=utf-8',
        beforeSend: function() {
            $("#loading-image").show();
        },
        success: function(data) {
            // alert("comming");
            if (data.status == "err" && data.status_code == 201) {
                alert("Sorry", "Please try again", "err");
                console.log(JSON.stringify(input));
                $("#loading-image").hide();
            } else if (data.status == "sucess" && data.status_code == 200) {
                swal("Good job!", "You successfully updated customer", "success").then(function() {
                    location.reload();
                });
                // alert(JSON.stringify(data));
                // alert(JSON.stringify(input));
                $("#loading-image").hide();
            } else if (data.status == "error" && data.status_code == 503) {
                alert("Sorry", "Something went wrong", "error");
                $("#loading-image").hide();
            }
        },
        error: function(data) {
            // alert('error');
            // alert("erroee")
            alert(data.message);
            return false;
        }
    });
    return true;
}
$(window).on('load', function() {
    // alert("window load occurred!");
    var displayResources = $("#display-resources");
    var displayResourcessum = $("#display-resources-sum")
    var uid = localStorage.getItem("user_id");
});


/* validation for csat field*/

function validateFloatKeyPress(el, evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    var number = el.value.split('.');
    if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    //just one dot
    if(number.length>1 && charCode == 46){
         return false;
    }
    //get the carat position
    var caratPos = getSelectionStart(el);
    var dotPos = el.value.indexOf(".");
    if( caratPos > dotPos && dotPos>-1 && (number[1].length > 0)){
        return false;
    }
    return true;
}

//thanks: http://javascript.nwbox.com/cursor_position/
function getSelectionStart(o) {
	if (o.createTextRange) {
		var r = document.selection.createRange().duplicate()
		r.moveEnd('character', o.value.length)
		if (r.text == '') return o.value.length
		return o.value.lastIndexOf(r.text)
	} else return o.selectionStart
}


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
/*home js end*/