$(document).ready(function() {
    $.ajax({
        url: "https://pidatacenters.com/account-managment/calls/controllers/getacconuntdetails.php?user_id=1",
		method: "GET",
        dataType: "JSON",
        success: function (data) {
            console.log(typeof(data));
            console.log(data.records);
            $('#datalist').DataTable({
                async: false,
                data: data.data,
                columns: [
					{ title: "S.No" },
					{ title: "Customer" },
					{ title: "MRC"},
					{ title: "Billing Cycle" },
					{ title: "Industry"},
					{ title: "Product/services  of the customer"},
					{ title: "Corporate Office"},
					{ title: "Services by Pi" },
					{ title: "Applications Hosted" },
					{ title: "# of VMs" },
					{ title: "H1+" },
					{ title: "Vmware" }, 
					{ title: "Go Live Date" },
					{ title: "Hosted  Environment" },
					{ title: "vCPU" },
					{ title: "Memory" },
					{ title: "Storage SAS/SATA" },
					{ title: "Storage SSD" },
					{ title: "OS" },
					{ title: "DB" },
					{ title: "Backup opted(Yes/No)" },
					{ title: "Backup Type" },
					{ title: "Backup Frequency" },
					{ title: "Backup retention period" },
					{ title: "Backup status" },
					{ title: "Back-up Storage  (GB)" }, 
					{ title: "DR" },
					{ title: "HA" },
					{ title: "Bandwidth" },
                    { title: "Customer contact details" },
                    { title: "Last CSAT Suvery Score" },                    
					{ title: "Comments on Interest in other products of Pi" },
					{ title: "Action Items post weekly review" },
					{ title: "" },
					{ title: "" },
                ],
                "footerCallback": function (row, data, start, end, display) {
                    var api = this.api(), data;
                    
                    // Remove the formatting to get integer data for summation
                    var intVal = function ( i ) {
                        return typeof i === 'string' ?
                            i.replace(/[\$,]/g, '')*1 :
                            typeof i === 'number' ?
                                i : 0;
                    };

                    // Total over all pages
                    total = api
                        .column( 2 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
                     // Total over this page
                    pageTotal = api
                        .column( 2, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    // Update footer
                    $( api.column( 2 ).footer() ).html(
                        'Page Total'+pageTotal.toLocaleString('en-IN', {
								maximumFractionDigits: 2,
								style: 'currency',
								currency: 'INR'
							}) +' ( Total '+ total .toLocaleString('en-IN', {
								maximumFractionDigits: 2,
								style: 'currency',
								currency: 'INR'
							})+ ' total)'
                    );
                },
                "columnDefs":[
                {
                    "targets":[0, 33, 34],
                    "orderable":false,
                },
	],
            });
        },error: function (error)// 24 25
		{
			console.log("Error in Fetching Data:");
			console.log(error.responseText);
		}
    });
});
 