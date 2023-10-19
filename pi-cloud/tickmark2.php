<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TICKMARK</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        .tiered-model {
            max-width: 1480px;
        }

        /* .tickmark {
            position: relative;
        }

        .inner-tickmark {
            border: 2px solid black;
            background-color: yellow;
            width: 200px;
            height: 250px;
            margin-top: 45px;
            padding: 20px;
        }

        .tickmark-img img {
            display: block;
            width: 440px;
            height: 440px;
            padding: 35px;
        }

        .bullet-points {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #008CBA;
            overflow: hidden;
            width: 100%;
            height: 100%;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            -webkit-transition: .3s ease;
            transition: .3s ease;
        }

        .tickmark:hover .bullet-points {
            transform: scale(1);
        }

        .tickmark ul li {
            list-style-type: none;
            font-weight: bold;
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        } */

        .tickmark-img img {
            width: 400px;
            height: auto;
            background-color: #fff;
            z-index: 99;
            position: relative;
        }



        /* .bullet-points {
            background-color: grey;
            margin: 40px 0;
            width: 820px;
            height: 300px;
            padding: 27px;
            transform: scale(1, 1);
        } */


        .bullet-points {
            background-color: grey;
            margin: 40px 0;
            width: 395px;
            height: 300px;
            padding: 27px;
            /* transform: scale(1, 1); */
            position: absolute;
            top: 10px;
        }


        .shiva:hover {
            cursor: pointer;
            border: 10px solid red;

        }


        .shiva:hover.bullet-points {
            left: 200px !important;
            position: absolute;

        }
    </style>
</head>

<body>

    <div class="tiered-model">
        <div class="head" style="text-align: center;  margin: 15px;">
            <h3>ESSENTIALS</h3>
        </div>
        <div class="tickmark">
            <div class="container">
                <div class="row overlay">
                    <div class="tickmark-img col-md-4">
                        <img class="shiva" src="../pi-cloud/images/product-images/essesntials28.png" alt="tickmark">


                    </div>

                    <ul class="bullet-points">
                        <li>24 X 7 support with 2 hours critical response</li>
                        <li>Basic IT support (OS Patching, OS Updates, OS Management, Virtual Machines, Disks, Basic Configuration Management, Incident<br> Management)</li>
                        <li>30 days backup</li>
                        <li>Proactive infrastructure monitoring and alerting</li>
                        <li>Monthly health reports and dashboards</li>
                        <li>Basic anti-virus and anti-malware support</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

</body>

</html>


<!-- <div class="inner-tickmark  col-md-4">
                        <ul class="bullet-points">
                            <li>24 X 7 support with 2 hours critical response</li>
                            <li>Basic IT support (OS Patching, OS Updates, OS Management, Virtual Machines, Disks, Basic Configuration Management, Incident<br> Management)</li>
                            <li>30 days backup</li>
                            <li>Proactive infrastructure monitoring and alerting</li>
                            <li>Monthly health reports and dashboards</li>
                            <li>Basic anti-virus and anti-malware support</li>
                        </ul>
                    </div> -->