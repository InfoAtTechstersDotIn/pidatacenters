<?php
$seo_title = "Rent A Server";
$seo_description = "";
$seo_keywords = "";

require_once "./ecomm/connection.php";

?>

<?php include('php/includes-techsters/header.php'); ?>

<style>
    .rent-a-server {
        margin: 40px auto;
    }

    .rent-a-server h2 {
        color: #fff;
        font-size: 30px;
        font-weight: 500;
        background-color: #223f97;
        padding: 0px 60px;
        border-radius: 10px;
        line-height: 2.5rem;
        margin: 10px 0;
    }

    .rent-a-server .select-btn {
        display: flex;
        align-items: center;
        flex-direction: column;
    }


    .rent-a-server .processor-m {
        text-align: center;
        width: fit-content;
    }

    .rent-a-server table {
        border-collapse: collapse;
        border-radius: 1rem;
        overflow: hidden;
        width: 100%;
        margin: 10px 0;
    }

    .rent-a-server .display-data table,

    table td {
        text-align: center;
        vertical-align: middle;
        border: 2px solid #cccccc36;
        text-align: center;
        vertical-align: middle;
        padding: 5px 10px;
        font-size: 0.85rem;
    }

    table th {
        text-align: center;
        vertical-align: middle;
        border: 2px solid #cccccc36;
        text-align: center;
        vertical-align: middle;
        padding: 10px 10px;
        font-size: 0.85rem;
        color: #fff;
    }

    .rent-a-server .display-data table th {
        background-color: #223f97;
    }

    .display-data table {
        box-shadow: 0 0 10px grey;
        border-radius: 15px;
    }

    @media (max-width: 767px) {
        .display-data {
            overflow-x: scroll;
            box-shadow: 0 0 10px gray;
            border-radius: 15px;
        }

        .display-data table {
            box-shadow: none;
            border-radius: 15px;
        }

        table td {
            white-space: nowrap;
        }
    }

    .tab-button {
        border: none;
        padding: 7px 20px;
        border-radius: 20px;
        margin: 5px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        outline: none !important;
        font-size: 0.9rem;
    }

    .tab-button.active {
        background-color: #223f97;
        color: #fff;
        outline: none;
    }

    .tab-button:hover {
        background-color: #223f97;
        color: #fff;
    }

    .buy-now {
        background-color: #7BBC42;
        padding: 6px 10px;
        border: 1px solid #eee;
        color: #fff;
        border-radius: 4px;
    }

    .buy-now:hover {
        background-color: #223f97;
        color: #fff;
    }
</style>

<!-- main starts here -->
<div class="about-banner">
    <div class="about-banner-blk">
        <img src="images/datacenter-services.png" alt="datacenter-services" width="1920" height="210" class="datacenter-services-img">
        <h2>Rent A Sever</h2>
    </div>
</div>

<!-- rent a server block -->
<div class="rent-a-server">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="select-btn">
                    <div class="processor-m">
                        <h2>Processor Model</h2>
                    </div>

                    <div class="row align-items-center justify-content-center">
                        <?php

                        $sql = "SELECT * FROM `rent_server` GROUP BY `processor_model`";

                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                <button class="tab-button" onclick="handleShowPlan('<?php echo $row['processor_model'] ?>', event)">
                                    <?php echo $row['processor_model'] ?>
                                </button>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <br>
                <div>
                    <p class="text-dark small text-center">*All Prices are Excluding Convenience Fee & Taxes</p>
                </div>

            </div>
            <div class="col-lg-8">
                <div class="display-data">
                    <table>
                        <thead>
                            <tr style="background-color: #fff;">
                                <th>CPU</th>
                                <th>RAM</th>
                                <th>MEMORY</th>
                                <th>Storage</th>
                                <th>Bandwidth</th>
                                <th>MRC</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM `rent_server`";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) :
                            ?>
                                    <tr data-plan="<?php echo $row['processor_model'] ?>">
                                        <td>
                                            <?php echo $row['cpu_cores'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['ram'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['memory'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['storage'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['bandwidth'] ?>
                                        </td>
                                        <td>
                                            ₹
                                            <?php echo $row['price_convenience'] ?>
                                        </td>
                                        <td>
                                            <a href="rent-server/make-checkout.php?id=<?php echo $row['id'] ?>" class="buy-now">Buy
                                                now</a>
                                        </td>
                                    </tr>
                            <?php
                                endwhile;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>

</div>




<?php include('php/includes-techsters/footer.php'); ?>

<!--footer ends-->
</div>
<!-- wrapper ends -->
<script src="js/wow.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>

<script src="js/main-pi.js"></script>

<script>
    function handleShowPlan(name, event = null) {

        var tab_buttons = document.querySelectorAll('.tab-button');

        tab_buttons.forEach(function(element) {
            element.classList.remove('active');
        });

        if (event) {
            event.target.classList.add('active');
        }

        var all_elements = document.querySelectorAll('[data-plan]');

        all_elements.forEach(function(element) {
            element.setAttribute('hidden', true);
        });

        var elements = document.querySelectorAll(`[data-plan='${name}']`);

        elements.forEach(function(element) {
            element.removeAttribute('hidden');
        });
    }
    handleShowPlan('E5-2609 V3 @ 1.9GHz');
    document.querySelectorAll('.tab-button')[0].classList.add('active');
</script>

</body>

</html>