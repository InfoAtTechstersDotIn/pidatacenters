<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet" />
<title>PDF</title>
<style type="text/css">
@page{margin:0;}

.certpage{
    width: 100%; 
    /* height: 792px;   */
    height:815px;
    overflow: hidden; 
    font-family: Arial, Helvetica; 
    position: relative; 
    color: #545554;
    page-break-after: always;
}
.companyName {
	position: absolute;
	left: 0px;
	margin: 0px auto;
	top: 46%;
	text-align: center;
	width: 100%;
	background: no-repeat;
	height: 100px;
	font-size: 40px;
	color: #dfb850;
	font-family: 'Great Vibes', cursive;
}
.dateSection {
	position: absolute;
    bottom:30px;
    left:250px;
	text-align: left;
	font-family: 'Poppins', sans-serif;
}
.date, .partnerref {
	font-size: 16px;
	font-weight: 500;
}
</style>
</head>
<body>
<div class="certpage" style="background-image: url('images/Asset_36.png');background-size:100% 100%;background-position:-2px 0;">
<p class="companyName">{{ $company }}</p>
<div class="dateSection">
    <p class="date"> Valid Untill : <span class="vadliddate">{{ $expdate }}</span></p>
    <p class="partnerref"> Partner Ref No : <span class="vadliddate">{{ $partnerrefno }}</span></p>
</div> 
</div>