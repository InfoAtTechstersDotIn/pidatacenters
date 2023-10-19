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
    </style>
</head>

<body>
    <div class="points">
        <div class="cards">
            <div class="card">
                <h2 class="card-title">ESSENTIALS</h2>
                <img src="../images/managed-services-icons/dashboard-ms.svg" alt="">
                <p class="card-desc">
                    &#187; 24 X 7 support with 2 hours critical response<br>
                    &#187; Basic IT support (OS Patching, OS Updates, OS Management, Virtual Machines, Disks, Basic Configuration Management, &Incident<br> Management)<br>
                    &#187; 30 days backup<br>
                    &#187; Proactive infrastructure monitoring and alerting<br>
                    &#187; Monthly health reports and dashboards<br>

                    &#187; Basic anti-virus and anti-malware support<br>
                </p>
            </div>
            <div class="card">
                <h2 class="card-title">ADVANCED</h2>
                <img src="../images/managed-services-icons/city-ms.svg" alt="">
                <p class="card-desc">
                    &#187; 24 X 7 support with 1 hour critical response<br>
                    &#187; Advanced IT Support (OS Patching, OS Updates, OS Management, Virtual Machines, Virtual Machine scales, Availability Sets, Disks, Virtual <br>Networks, WAF, Identity Management, Configuration Management,<br> Incident Management, Problem Management, Change Management)<br>
                    &#187; Shared TAM and architect support<br>
                    &#187; Unlimited backup, self-serve point-in-time restore<br>
                    &#187; Proactive infrastructure monitoring and alerting<br>
                    &#187; Monthly health reports and dashboards.<br>
                    &#187; Advanced anti-virus and anti-malware support</p>
            </div>
            <div class="card">
                <h2 class="card-title">PREMIUM</h2>
                <img src="../images/managed-services-icons/premium-service-ms.svg" alt="">
                <p class="card-desc">
                    &#187; 24 X 7 support with 30 minutes critical response</br>
                    &#187; Level-3 escalation advanced support</br>
                    &#187; Proactive capacity planning, performance and cost optimization</br>
                    &#187; Shared TAM and architect support</br>
                    &#187; Unbrmited backup, self-serve point-in-time restore</br>
                    &#187; Proactive infrastructure monitoring and alerting</br>
                    &#187; Monthly health reports and dashboards</br>
                    &#187; Deep security (WAF, DDoS, Threat analytics, anti-virus, anti-malware, email and web protection)</br>
                    &#187; Proactive run book authoring</br>
                    &#187; Advanced operational intelligence and custom dashboard on usage, performance, governance, and cost
                </p>
            </div>
        </div>
    </div>
</body>

</html>