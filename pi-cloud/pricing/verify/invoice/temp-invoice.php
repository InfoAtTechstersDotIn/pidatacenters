<?php

if(isset($_REQUEST['x'])){

    error_reporting(E_ALL);
	ini_set('display_errors', 1); 

    ob_start();

    include ('../mysql.php');
    include ('mpdf60/mpdf.php');

    function getDBdata($condition,$tb,$col,$retrive){ global $mr_con;

		// echo "SELECT $retrive FROM $tb WHERE $col='$condition'".'<br/>'; 

		$sql = mysqli_query($mr_con,"SELECT $retrive FROM $tb WHERE $col='$condition'");
		if(mysqli_num_rows($sql)){
			$row = mysqli_fetch_array($sql);
			return $row[$retrive];
		}else return "";
	}
	function getproperdate($fv1){
		$ac=date_create($fv1);
		return date_format($ac, 'd-M-Y');
    }
    
    function randnum($digits_needed){
        $random_number='';
        $count=0;
        while ( $count < $digits_needed ) {
            $random_digit = mt_rand(0, 9);
            
            $random_number .= $random_digit;
            $count++;
        }
        return $random_number;
    }

	function moneyFormatIndia($num){
	
		$explrestunits = "" ;
			if(strlen($num)>3){
				$lastthree = substr($num, strlen($num)-3, strlen($num));
				$restunits = substr($num, 0, strlen($num)-3); // extracts the last three digits
				$restunits = (strlen($restunits)%2 == 1)?"0".$restunits:$restunits; // explodes the remaining digits in 2's formats, adds a zero in the beginning to maintain the 2's grouping.
				$expunit = str_split($restunits, 2);
	
				for($i=0; $i<sizeof($expunit); $i++){
					// creates each of the 2's group and adds a comma to the end
					if($i==0){
						$explrestunits .= (int)$expunit[$i].",";
					} // if is first value , convert into integer
					else{
						$explrestunits .= $expunit[$i].",";
					}
				}$thecash = $explrestunits.$lastthree;
			}else{
				$thecash = $num;
			}
		return $thecash.'.00'; // writes the final format where $currency is the currency symbol.
	
	}

    $order_id=mysqli_real_escape_string($mr_con,$_REQUEST['x']);
    $body = '';

    if($order_id != '' && $order_id != '0'){
        $sql = "SELECT t1.*, t2.* FROM orders t1 INNER JOIN order_addresses t2 ON t1.order_id=t2.order_id WHERE t1.order_id='".$order_id."'";
		$result = mysqli_query($mr_con,$sql);

		if(mysqli_num_rows($result) > '0'){
            $userdetails=mysqli_fetch_array($result);

            $body .='<html>
                    <head>
                    <meta charset="utf-8">
                    <link rel="stylesheet" href="invicestyle.css?vas">
                    
                    </head>
                    
                    <body>
                    <div class="fullwidth">
                            <div class="fullwidth">
                                <div class="left-block">
                                    <b>Pi DATACENTERS PRIVATE LIMITE</b><br />
                                    Survey No 49 P, Plot 12, IT Layout, Autonagar,<br />
                                    Mangalagiri<br />
                                    Guntur, Andhra Pradesh 522503<br />
                                    IN<br />
                                    4033539999<br />
                                    d.mounika@pidatacenters.com<br />
                                    GSTIN: 37AAHCP8334J1ZZ<br />
                                    PAN No. AAHCP8334J<br />
                                    CIN: U72200AP2014PTC095214<br />
                                </div>
                    
                                <div style="text-align:right;">
                                    <img src = "pi-logo.png"/>
                                </div>
                            </div>
                            <div class="fullwidth">
                            <p style="font-size: 20px;">Tax Invoice</p>
                            </div>
                            <div class = "fullwidth">
                                <div class="left-block">
                                    <!--user Info -->
                                    '.$userdetails['first_name'].'<br />
                                    '.$userdetails['company'].'<br />
                                    '.$userdetails['address_line2'].'<br />
                                    '.$userdetails['mobile'].'<br />
                                    '.$userdetails['email'].'<br />
                                    GSTIN: 36AABCI0923L1ZN
                                </div>
                                <div style="text-align:right;">
                                <b>INVOICE NO.</b>&nbsp;&nbsp; '.randnum(4).'<br />
                                <b>DATE</b>&nbsp;&nbsp; '.getproperdate($userdetails['order_date']).'<br />
                                <b>TERMS</b>&nbsp;&nbsp; Advance<br />
                            </div>
                        </div>
                        <br/><br/>
                                <hr>
                                <br/><br/>
                                <table  width ="100%" cellpadding="10">
                                   
                                        <tr style="text-align:center;">
                                            <th>SN
                                            </th>
                                            
                                            <th>HASN/SAC
                                            </th>
                                            
                                            <th>PERIOD
                                            </th>
                                            
                                            <th>REVENUE CLASS
                                            </th>
                                            
                                            <th>QTY
                                            </th>

                                            <th>RATE (INR)
                                            </th>

                                            <th>TAX
                                            </th>

                                            <th>AMOUNT
                                            </th>
                                        </tr>
                                    

                                    <tbody>';
                                    $product_details_query = "SELECT * FROM `purchased_products` WHERE `order_id` = '".$order_id."'";
                                    $product_details_result = mysqli_query($mr_con,$product_details_query);
                                    if(mysqli_num_rows($product_details_result) > '0'){
                                        $i = 1;
                                        $tot_mon_rec_charges = 0;
                                        
                                        while($value=mysqli_fetch_array($product_details_result)){
                                            $body.=' <tr style="text-align:right;">
                                                    <td>'.$i.'
                                                    </td>
                                                    <td>998315</td>';
                                                                                
                                                                                                  
                                                  
                                                $body.=' <td>'.getproperdate($userdetails['order_date']).'
                                                </td>
                                                <td>'.$value['subplan'] .'</td>
                                                    
                                                   
                                                    
                                                    <td>'.$value['quantity'].'
                                                    </td>

                                                    <td>'.($value['amount']/$value['tenure']).'
                                                    </td>

                                                    <td>18.0% GST
                                                    </td>

                                                    <td>'.($value['amount']/$value['tenure'])*$value['quantity'].'
                                                    </td>
                                                </tr>';
                                                
                                                $i = $i+1;
                                                $tot_mon_rec_charges = $tot_mon_rec_charges + (($value['amount']/$value['tenure'])*$value['quantity']);
                                        }
                                    }  
                                   
                                 $body.='</tbody>
                                            </table>

                                            <br/><br/>

                                            <hr style="border-top: dashed #C0C0C0    1px;" />
                                            
                                            <br/><br/>
                                            
                                            <div class = "fullwidth">

                                                <div class="left-block">

                                                </div>

                                                <div style="text-align:right;">
                                                    <b>SUBTOTAL</b>&nbsp;&nbsp; '.$tot_mon_rec_charges.'<br />
                                                    <b>CGST @ 9% on 1.00</b>&nbsp;&nbsp; '.$tot_mon_rec_charges*(9/100).'<br />
                                                    <b>SGST @ 9% on 1.00</b>&nbsp;&nbsp; '.$tot_mon_rec_charges*(9/100).'<br />
                                                    <b>TOTAL</b>&nbsp;&nbsp; '.(($tot_mon_rec_charges)+($tot_mon_rec_charges*(18/100))).'<br />
                                                   
                                                </div>
                                            </div>
                                    </div>

                                    </body>
                                    </html>';

                   
                
        }

        // echo $body;

        $mpdf=new mPDF('','A4', 0, '', 15, 15, 45, 35, 5, 10, '');
        $mpdf->SetDisplayMode('fullpage');
        
        // $mpdf->SetHTMLFooter("<div style='width:95%; display: inline-block;'><hr></div><div style='width:95%; display: inline-block;'>
                // <img style='border:3px solid white;' src='https://pricing.pidatacenters.com/pidata/images/lh.png'>
                // </div>");
        
        $mpdf->pagenumPrefix = 'Page No : ';
        
        //  $mpdf->SetWatermarkImage('https://pricing.pidatacenters.com/pidata/images/new_watermark.png');
        // $mpdf->showWatermarkImage = true;
        // $mpdf->watermarkImageAlpha = 1.0; 
        $mpdf->WriteHTML($stylesheet,1);
        $mpdf->WriteHTML($body,0);
        // $mpdf->AddPage();
        // $mpdf->SetHTMLFooter("<div style='width:95%;'><hr></div><table width='95%' style=' padding-bottom:25px;'>
        // <tr>
        //     <td width='30%' align='left' style='font-size:12px;'>©2018 Pi DATACENTERS</td>
        //     <td width='40%' align='center' style='font-size:12px;'>
        //     <img style='margin-top:0px;' src='https://pricing.pidatacenters.com/pidata/images/lock-icon.png'/>100 % Safe & Secure Payments</td>
        //     <td align='right' width='30%' style='font-style: italic;font-size:12px;'>{PAGENO}/{nbpg}</td>
        // </tr>
        // </table>");
        // $mpdf->WriteHTML($tandc,2);
        $filename='invoice-'.$order_id;
        ob_end_flush();
        $mpdf->Output("$filename.pdf", "D");

        echo $body;

    }
    
}

?>


        

            
        