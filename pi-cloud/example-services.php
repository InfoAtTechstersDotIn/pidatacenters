<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managed Services</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif !important;
        }

        .services {
            max-width: 90%;
            margin: 0 auto;
            position: relative;
        }

        .boxes {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            /* padding: 10px; */
        }


        .boxes li {
            list-style-type: none;
            width: 30%;
            margin: 10px 9px;
            vertical-align: top;
            font-size: 14px;
            box-shadow: 3px 3px 4px #76b543;
            background-color: #fff;
            cursor: pointer;
        }

        .card-box {
            padding: 12px;
        }

        .box-icon {
            position: relative;
            font-size: 0px;
            margin: 10px auto;
        }

        .card-icon {
            width: 23% !important;
        }

        .card-icon,
        .card-head {
            display: inline-block;
            width: 70%;
            vertical-align: top;
            /* font-size: 14px; */
        }

        .card-icon>img {
            max-width: 70px;
            vertical-align: bottom;
        }

        .card-head>h6 {
            font-size: 18px;
            padding-top: 20px;
        }

        .card-head>h6 {
            min-height: 40px;
            text-align: center;

        }






        .mon-model {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .Monitoring {
            width: 1000px;
            position: relative;
            display: flex;
            justify-content: space-between;
        }

        .Monitoring .card-2 {
            position: relative;
            cursor: pointer;
        }

        .Monitoring .card-2 .face {
            width: 300px;
            height: 200px;
            transition: 0.5s;
        }

        .Monitoring .card-2 .face.face1 {
            position: relative;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1;
            transform: translateY(100px);
        }

        .Monitoring .card-2:hover .face.face1 {
            transform: translateY(0);
            background-color: #76b543;
        }

        .Monitoring .card-2:hover h3 {
            color: #fff !important;
        }


        .Monitoring .card-2 .face.face1 .content {
            text-align: center;
            transition: 0.5s;
        }

        .Monitoring .card-2:hover .face.face1 .content {
            opacity: 1;
        }

        .Monitoring .card-2 .face.face1 .content img {
            max-width: 70px;
            border-radius: 10px;
            padding: 5px;

        }

        .Monitoring .card-2 .face.face1 .content h3 {
            margin: 10px 0 0;
            padding: 0;
            color: #76b543;
            text-align: center;
            font-size: 1.5em;
        }


        .Monitoring .card-2 .face.face2 {
            position: relative;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
            box-sizing: border-box;
            box-shadow: 0px 1px 13px rgba(0, 0, 0, 0.8);
            transform: translateY(-100px);
        }

        .Monitoring .card-2:hover .face.face2 {
            transform: translateY(0);
        }

        .Monitoring .card-2 .face.face2 .content p {
            margin: 0;
            padding: 0;
        }

        .content a {
            display: inline-block;
            text-decoration: none;
            font-weight: 600;
            color: #fff;
            padding: 5px 10px;
            background-color: #000;
            margin-top: 10px;
            border-radius: 20px;
            font-size: 15px;
        }

        .Monitoring .card-2:hover .content a {
            display: none !important;
        }

        .Monitoring .card-2 .face.face2 .content a:hover {
            background: #333;
            color: #fff;
        }

        .content ul li {
            padding: 5px 0;
        }




        .flipping {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            flex-direction: row;
            margin-top: 30px;
        }

        .flip-card {
            background-color: transparent;
            width: 300px;
            height: 300px;
            perspective: 1000px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-card-front {
            color: black;
            border: 2px solid #76b543;
        }

        .flip-card-back {
            background-color: #223f97;
            color: white;
            transform: rotateY(180deg);
        }

        .new-list {
            list-style-type: circle;
            list-style-position: outside;
            width: 100% !important;
            margin: 0 auto;
            height: 100%;
            display: flex;
            justify-content: center;
            flex-direction: column;
            text-align: left;
            padding: 30px;
            line-height: 1.5rem;
        }

        .carte-model {
            max-width: 90%;
            margin: 0 auto;
        }

        .model-2 {
            display: grid;
            grid-template-columns: auto auto auto auto;
            justify-content: center;
            margin: 20px;
            gap: 10px;
        }

        .carte-content {
            box-shadow: 0px 0px 15px grey;
            border-radius: 40px 40px;
        }

        .carte-head {
            background-color: #223f97;
            padding: 15px;
            color: #fff;
            height: 105px;
            text-align: center;
            border-radius: 40px 40px 0 0;
        }

        .read {
            padding: 10px 15px;
            overflow: hidden;
            width: 100%;
        }

        .read ul {
            text-align: justify;
            list-style: none;
        }

        .read ul li::before {
            content: "\2022";
            color: #76b543;
            font-size: 25px;
            font-weight: bold;
            display: inline-block;
            width: 1em;
        }

        .read li span {
            color: grey;
            font-size: 12px;
        }

        .elastic-model {
            display: grid;
            justify-content: center;
            align-items: center;
            grid-template-columns: auto auto;
            gap: 40px;
            padding: 20px;
        }

        .elastic {
            background-color: #fff;
            padding: 25px;
            text-align: center;
            height: 155px;
            width: 380px;
            border-radius: 60px;
            box-shadow: -1px 0px 11px 1px #223f97;
        }
    </style>
</head>

<body>

    <div class="services">
        <ul class="boxes">
            <li>
                <div class="card-box">
                    <div class="box-icon">
                        <p class="card-icon">
                            <img src="../images/managed-services-icons/CM.svg" class="img" width="70">
                        </p>
                        <div class="card-head">
                            <h6>Compute Management</h6>

                        </div>
                    </div>
                    <p style="text-align:center; font-size: 17px;">Efficiently manage the availability, performance, and fine-tuning of your cloud resources. We specialize in setting up high availability, managing licensing, monitoring, alerting, reporting, logging, analysis, dashboarding, health checks, and more.</p>
                </div>
            </li>
            <li>
                <div class="card-box">
                    <div class="box-icon">
                        <p class="card-icon">
                            <img src="../images/managed-services-icons/SM.svg" class="img" width="70">
                        </p>
                        <div class="card-head">
                            <h6>Security Management</h6>

                        </div>
                    </div>
                    <p style="text-align:center; font-size: 17px;">Rest easy with our robust security management services. We identify and mitigate unsanctioned apps, enforce policies, and monitor your cloud data. Our services include anti-virus and anti-malware updates to keep your infrastructure secure.</p>
                </div>
            </li>
            <li>
                <div class="card-box">
                    <div class="box-icon">
                        <p class="card-icon">
                            <img src="../images/managed-services-icons/BM.svg" class="img" width="70">
                        </p>
                        <div class="card-head">
                            <h6>Backup Management</h6>

                        </div>
                    </div>
                    <p style="text-align:center; font-size: 17px;">Protect your critical assets with our comprehensive backup solutions. We ensure backups for all your applications, workloads, and data. Our self-serve and on-demand restore options come with robust SLAs.</p>
                </div>
            </li>
            <li>
                <div class="card-box">
                    <div class="box-icon">
                        <p class="card-icon">
                            <img src="../images/managed-services-icons/NM.svg" class="img" width="70">
                        </p>
                        <div class="card-head">
                            <h6>Network Management</h6>

                        </div>
                    </div>
                    <p style="text-align:center; font-size: 17px;">Optimize your virtual network for seamless communication among VMs and the internet. We handle subnet management, NSG (Network Security Group) management, and firewall management.</p>
                </div>
            </li>
            <li>
                <div class="card-box">
                    <div class="box-icon">
                        <p class="card-icon">
                            <img src="../images/managed-services-icons/IM.svg" class="img" width="70">
                        </p>
                        <div class="card-head">
                            <h6>Identity Management</h6>

                        </div>
                    </div>
                    <p style="text-align:center; font-size: 17px;">Effortlessly manage user accounts, federate identities across your organization's LOB (Line of Business) apps, and implement role-based access controls.</p>
                </div>
            </li>
            <li>
                <div class="card-box">
                    <div class="box-icon">
                        <p class="card-icon">
                            <img src="../images/managed-services-icons/STORAGE-M.svg" class="img" width="70">
                        </p>
                        <div class="card-head">
                            <h6>Storage Management</h6>

                        </div>
                    </div>
                    <p style="text-align:center; font-size: 17px;">Optimize data usage and access patterns to maximize cost savings. Identify and move stale data to more economical storage areas, helping you manage your storage budget effectively.</p>
                </div>
            </li>
            <li>
                <div class="card-box">
                    <div class="box-icon">
                        <p class="card-icon">
                            <img src="../images/managed-services-icons/SOM.svg" class="img" width="70">
                        </p>
                        <div class="card-head">
                            <h6>Server OS Management</h6>

                        </div>
                    </div>
                    <p style="text-align:center; font-size: 17px;">Ensure the continuous updating and troubleshooting of server operating systems for peak performance.</p>
                </div>
            </li>
            <li>
                <div class="card-box">
                    <div class="box-icon">
                        <p class="card-icon">
                            <img src="../images/managed-services-icons/MM.svg" class="img" width="70">
                        </p>
                        <div class="card-head">
                            <h6>Monitoring Management</h6>

                        </div>
                    </div>
                    <p style="text-align:center; font-size: 17px;">Gain insights into your VMs with complete monitoring of CPU utilization, memory usage, storage IOPS, and OS performance.</p>
                </div>
            </li>
            <li>
                <div class="card-box">
                    <div class="box-icon">
                        <p class="card-icon">
                            <img src="../images/managed-services-icons/CONFIG-M.svg" class="img" width="70">
                        </p>
                        <div class="card-head">
                            <h6>Configuration Management</h6>

                        </div>
                    </div>
                    <p style="text-align:center; font-size: 17px;">Keep your software up-to-date, enforce configuration and security policies, and manage patching, updates, password resets, and resource right-sizing.</p>
                </div>
            </li>
            <li>
                <div class="card-box">
                    <div class="box-icon">
                        <p class="card-icon">
                            <img src="../images/managed-services-icons/BSA.svg" class="img" width="70">
                        </p>
                        <div class="card-head">
                            <h6>Basic Support Availability</h6>

                        </div>
                    </div>
                    <p style="text-align:center; font-size: 17px;">Benefit from our 8x5 support for billing and invoicing inquiries, as well as 24x7 L1/L2 support for break-fix issues. Reach out through phone, email, or web support tickets.</p>
                </div>
            </li>
            <li>
                <div class="card-box">
                    <div class="box-icon">
                        <p class="card-icon">
                            <img src="../images/managed-services-icons/CHANGE-M.svg" class="img" width="70">
                        </p>
                        <div class="card-head">
                            <h6>Change Management</h6>

                        </div>
                    </div>
                    <p style="text-align:center; font-size: 17px;">We ensure that proposed changes are scheduled based on business priorities, infrastructure impact, and service risk, minimizing disruptions to your IT services.</p>
                </div>
            </li>
        </ul>
    </div>


    <div class="mon-model">
        <div class="Monitoring">
            <div class="card-2">
                <div class="face face1">
                    <div class="content">
                        <img src="../pi-cloud/images/menu-icons/education_ico.png">
                        <h3>Service Monitoring</h3>
                        <a>Read More</a>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <ul style=" list-style-type: circle;list-style-position:outside;width: 100% !important;margin: 0 auto; color: #223f97;">
                            <li>Numerous dashboards and logs, records the status of resources.</li>
                            <li>In daily work, a consolidated monitoring of the systems and services operated is achieved by means of service monitoring.</li>

                        </ul>

                    </div>
                </div>
            </div>
            <div class="card-2">
                <div class="face face1">
                    <div class="content">
                        <img src="../pi-cloud/images/menu-icons/education_ico.png">
                        <h3>Hourly Support</h3>
                        <a>Read More</a>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p style="text-align:center; color: #223f97;">Monitoring has three models of support:</p>
                        <ul style="list-style-type: circle;list-style-position: inside;width: 100% !important;margin: 0 auto;padding: 10px 8px; color: #223f97;">
                            <li>24/7</li>
                            <li>16/7</li>
                            <li>8/7</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-2">
                <div class="face face1">
                    <div class="content">
                        <img src="../pi-cloud/images/menu-icons/education_ico.png">
                        <h3>Third Party Integration</h3>
                        <a>Read More</a>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <ul style="list-style-type: circle;list-style-position:outside;width: 100% !important;margin: 0 auto;text-align:left; color: #223f97;">
                            <li>Monitoring includes three unique parameters around Performance Metrics, Log Analytics, and Application Insights.</li>
                            <li>Provide powerful end-to-end monitoring of applications and other crucial components.</li>
                            <li>Third party applications can also be integrated for monitoring.</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div style="text-align: center;">
            <p>Offers IT professionals/engineers that will fully concentrate on the client's needs. Client has full management control over the project and IT professionals / engineers. These resources come at a fixed cost based on the level of experience.</p>
            <p>These resources can be aligned for all three models of support: </p>
            <ul>
                <li style="width: 45px; padding: 4px; box-shadow: 0px 1px 3px 1px grey; background-color: #223f97; color: #fff; margin: 5px;">24/7</li>
                <li style="width: 45px; padding: 4px; box-shadow: 0px 1px 3px 1px grey; background-color: #76b543; color: #fff; margin: 5px;">16/7</li>
                <li style="width: 45px; padding: 4px; box-shadow: 0px 1px 3px 1px grey; background-color: #223f97; color: #fff; margin: 5px;">8/7</li>
            </ul>
        </div>
    </div>



    <div class="dedicated-model">
        <p style="text-align:center">
            This model provides businesses with devoted resources for managing their workloads, ensuring they receive the necessary attention.
        </p>
        <div class="flipping">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../pi-cloud/images/Service-Monitoring11.png" alt="scale" style="max-width:50%; margin-top: 30px;">
                        <h2 style="margin-bottom: 20px;">Service Monitoring</h2>
                        <a style="background-color: #000; color: #fff; padding: 5px 10px; border-radius: 15px;">Know More</a>
                    </div>
                    <div class="flip-card-back">
                        <ul class="new-list">
                            <li>Numerous dashboards and logs, records the status of resources.</li>
                            <li>In daily work, a consolidated monitoring of the systems and services operated is achieved by means of service monitoring.</li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../pi-cloud/images/Hourly-Support11.png" alt="scale" style="max-width:50%; margin-top: 30px;">
                        <h2 style="margin-bottom: 20px;">Hourly Support</h2>
                        <a style="background-color: #000; color: #fff; padding: 5px 10px; border-radius: 15px;">Know More</a>
                    </div>
                    <div class="flip-card-back">
                        <ul class="new-list list-2">
                            <p style="text-align:center; color: #fff; padding-top: 40px;">Monitoring has three models of support:</p>
                            <li>24/7</li>
                            <li>16/7</li>
                            <li>8/7</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../pi-cloud/images/Third-Party-Integration11.png" style="max-width:50%; margin-top: 30px;">
                        <h2 style="margin-bottom: 20px;">Third Party Integration</h2>
                        <a style="background-color: #000; color: #fff; padding: 5px 10px; border-radius: 15px;">Know More</a>
                    </div>
                    <div class="flip-card-back">
                        <ul class="new-list">
                            <li>Monitoring includes three unique parameters around Performance Metrics, Log Analytics, and Application Insights.</li>
                            <li>Provide powerful end-to-end monitoring of applications and other crucial components.</li>
                            <li>Third party applications can also be integrated for monitoring.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <p style="text-align:center">
        Allows businesses to select specific services they require, providing flexibility in the services chosen.
    </p>
    <div class="carte-model">
        <div class="model-2">
            <div class="carte-content">
                <div class="carte-head">
                    <h3 style="margin: 5px 0 10px 0;">Application & DB Migration</h3>
                    <h5>Depending on business requirements, a
                        fully customized app and database
                        migration model is available.
                    </h5>
                </div>
                <div class="read">
                    <ul style="text-align: justify;">
                        <li>Add-On Service <span>(Service Type)</span></li>
                        <li>PER VM/NODE <span>(Pricing Model)</span></li>
                        <li>Monthly <span>(Pricing Type)</span></li>
                    </ul>
                </div>
            </div>
            <div class="carte-content">
                <div class="carte-head">
                    <h3 style="margin: 5px 0 10px 0;">Database Services</h3>
                    <h5>Cosmos DB, MySQL, MS-SQL, Maria DB,
                        PostgreSQL, Redies, Data Factories
                    </h5>
                </div>
                <div class="read">
                    <ul>
                        <li>Add-On Service <span>(Service Type)</span></li>
                        <li>PER Service/NODE <span>(Pricing Model)</span></li>
                        <li>Monthly <span>(Pricing Type)</span></li>
                    </ul>
                </div>
            </div>
            <div class="carte-content">
                <div class="carte-head">
                    <h3 style="margin: 25px;">Container Services</h3>
                </div>
                <div class="read">
                    <ul>
                        <li>Add-On Service <span>(Service Type)</span></li>
                        <li>PER Service/NODE <span>(Pricing Model)</span></li>
                        <li>Monthly <span>(Pricing Type)</span></li>
                    </ul>
                </div>
            </div>
            <div class="carte-content">
                <div class="carte-head">
                    <h3 style="margin: 10px 0 10px 0;">Analytics</h3>
                    <h5>(Data Engineering Services)
                    </h5>
                </div>
                <div class="read">
                    <ul>
                        <li>Add-On Service <span>(Service Type)</span></li>
                        <li>PER Service/NODE <span>(Pricing Model)</span></li>
                        <li>Monthly <span>(Pricing Type)</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="model-2">
            <div class="carte-content">
                <div class="carte-head">
                    <h3 style="margin: 25px;">DevOps Services</h3>
                </div>
                <div class="read">
                    <ul>
                        <li>Add-On Service <span>(Service Type)</span></li>
                        <li>PER Project/APP <span>(Pricing Model)</span></li>
                        <li>Monthly <span>(Pricing Type)</span></li>
                    </ul>
                </div>
            </div>
            <div class="carte-content">
                <div class="carte-head">
                    <h3 style="margin: 25px;">Managed Application Services</h3>
                </div>
                <div class="read">
                    <ul>
                        <li>Add-On Service <span>(Service Type)</span></li>
                        <li>PER VM/NODE <span>(Pricing Model)</span></li>
                        <li>Monthly <span>(Pricing Type)</span></li>
                    </ul>
                </div>
            </div>
            <div class="carte-content">
                <div class="carte-head">
                    <h3 style="margin: 25px;">Disaster Recovery Services</h3>
                </div>
                <div class="read">
                    <ul>
                        <li>Add-On Service <span>(Service Type)</span></li>
                        <li>PER VM/NODE <span>(Pricing Model)</span></li>
                        <li>Monthly <span>(Pricing Type)</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <style>
        .elastic {
            position: relative;
        }

        .circle {
            position: absolute;
            width: 100px;
            height: 100px;
            background-color: green;
            color: #fff;
            bottom: -55px;
            right: 265px;
            border-radius: 100%;
            text-align: center;
            padding: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .circle-2 {
            position: absolute;
            width: 100px;
            height: 100px;
            background-color: green;
            color: #fff;
            border-radius: 100%;
            text-align: center;
            padding: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            bottom: -55px;
            right: 15px;
        }
    </style>


    <div class="elastic-model">
        <div class="elastic" style="border-radius: 90px 30px 30px 90px;">

            <div class="circle">

                <i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
                sub
            </div>
            <div class="elastic-head">
                <h2 style="margin-bottom: 10px;">Subscription Fee</h2>
            </div>
            <div class="elastic-content">
                <p>Subscribe to the elastic model with a nominal monthly fee that provides access to all kinds of cloud services</p>
            </div>
        </div>
        <div class="elastic" style="border-radius: 30px 90px 90px 30px;">
            <div class="circle-2">

                <i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
                pay
            </div>
            <div class="elastic-head">
                <h2 style="margin-bottom: 10px;">Pay-Per-Use</h2>
            </div>
            <div class="elastic-content">
                <p>Pay only for the services used, and the billing is done only for the number of hours used</p>
            </div>
        </div>
    </div>
</body>

</html>