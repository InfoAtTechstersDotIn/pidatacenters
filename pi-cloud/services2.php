<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: "Roboto", sans-serif;
        }

        .points {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .cards {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .card {
            margin: 40px;
            position: relative;
            max-width: 425px;
            max-height: 425px;
            box-shadow: 1px 0px 20px -6px #76b543;
        }

        .card-title {
            display: block;
            text-align: center;
            color: #76b543;
            background-color: #80808038;
            padding: 2%;
            border-top-right-radius: 4px;
            border-top-left-radius: 4px;
        }

        .card img {
            width: 80%;
            height: 80%;
            object-fit: contain;
            display: block;
            padding: 0 0 0 30px;
            position: relative;
        }

        .card-desc {
            display: block;
            font-size: 1rem;
            line-height: 1.5rem;
            position: absolute;
            height: 0;
            top: 0;
            opacity: 0;
            padding: 20px 8%;
            background-color: white;
            /* overflow-y: scroll; */
            transition: 0.8s ease;
            color: #223f97;
        }

        .card ul li {
            list-style-type: none;
            padding-left: 1em;
            text-indent: -1.4em;
        }

        .card:hover .card-desc {
            opacity: 1;
            height: 100%;
        }

        h1 {
            font-size: 2.8rem;
            color: #fff;
            margin: 40px 0 20px 0;
            text-align: center;
        }

        .card-desc span {
            padding: 0 10px 0 0;
        }
    </style>
</head>

<body>
    <div class="points">
        <div class="cards">
            <div class="card">
                <h2 class="card-title">ESSENTIALS</h2>
                <img src="../images/managed-services-icons/dashboard-ms.svg" alt="">
                <ul class="card-desc">
                    <li><span>&#187;</span> 24 X 7 support with 2 hours critical response</li>
                    <li><span>&#187;</span> Basic IT support (OS Patching, OS Updates, OS Management, Virtual Machines, Disks, Basic Configuration Management, &Incident Management)</li>
                    <li><span>&#187;</span> 30 days backup</li>
                    <li><span>&#187;</span> Proactive infrastructure monitoring and alerting</li>
                    <li><span>&#187;</span> Monthly health reports and dashboards</li>

                    <li><span>&#187;</span> Basic anti-virus and anti-malware support</li>
                </ul>
            </div>
            <div class="card">
                <h2 class="card-title">ADVANCED</h2>
                <img src="../images/managed-services-icons/city-ms.svg" alt="">
                <ul class="card-desc">
                    <li><span>&#187;</span> 24 X 7 support with 1 hour critical response</li>
                    <li><span>&#187;</span> Advanced IT Support (OS Patching, OS Updates, OS Management, Virtual Machines, Virtual Machine scales, Availability Sets, Disks, Virtual Networks, WAF, Identity Management, Configuration Management, Incident Management, Problem Management, Change Management)</li>
                    <li><span>&#187;</span> Shared TAM and architect support</li>
                    <li><span>&#187;</span> Unlimited backup, self-serve point-in-time restore</li>
                    <li><span>&#187;</span> Proactive infrastructure monitoring and alerting</li>
                    <li><span>&#187;</span> Monthly health reports and dashboards.</li>
                    <li><span>&#187;</span> Advanced anti-virus and anti-malware support</li>
                </ul>
            </div>
            <div class="card">
                <h2 class="card-title">PREMIUM</h2>
                <img src="../images/managed-services-icons/premium-service-ms.svg" alt="">
                <ul class="card-desc">
                    <li><span>&#187;</span> 24 X 7 support with 30 minutes critical response</li>
                    <li><span>&#187;</span> Level-3 escalation advanced support</li>
                    <li><span>&#187;</span> Proactive capacity planning, performance and cost optimization</li>
                    <li><span>&#187;</span> Shared TAM and architect support</li>
                    <li><span>&#187;</span> Unbrmited backup, self-serve point-in-time restore</li>
                    <li><span>&#187;</span> Proactive infrastructure monitoring and alerting</li>
                    <li><span>&#187;</span> Monthly health reports and dashboards</li>
                    <li><span>&#187;</span> Deep security (WAF, DDoS, Threat analytics, anti-virus, anti-malware, email and web protection)</li>
                    <li><span>&#187;</span> Proactive run book authoring</li>
                    <li><span>&#187;</span> Advanced operational intelligence and custom dashboard on usage, performance, governance, and cost</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>