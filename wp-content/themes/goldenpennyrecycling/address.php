<?php
/**
 * The template for displaying contact sideber
 *
 * Used for both single and index/archive/search.
 *
 */
?>
<div class="left-information">
    <div class="heading-title">
        <h1></h1>
    </div>


    <div class="content-area-left">


        <div class="content-area-left1">
            <ul>
                <li>
                    <p class="text-info"><a class="btn btn-danger" href="#"><i
                                class="fa fa-home"></i></a>
                        &nbsp;Address &rarr; </p>
                <li>
                <li><span>Goldenpennyrecycling </span>
                    <p><?php echo ot_get_option('address') ?></p><a href="#">
                        <i class="fa fa-arrow-right"></i> </a></li>
            </ul>
        </div>


        <div class="content-area-left2">
            <ul>
                <li>
                    <p class="text-info"><a class="btn btn-danger"><i
                                class="fa fa-recycle"></i></a>
                        &nbsp;Hours of operations &rarr; </p>

                    <?php echo ot_get_option('hours_of_operations') ?>

                    <i class="fa fa-arrow-right"></i>
                </li>
            </ul>
        </div>

        <div class="content-area-left3">
            <ul>
                <li>
                    <p class="text-info"><a class="btn btn-danger"><i
                                class="fa fa-user"></i></a>
                        &nbsp;Get in Touch &rarr; </p>

                    <span> <h1><i class="fa fa-envelope"></i> &nbsp; <?php echo ot_get_option('email') ?> </h1> </span>
                    <span> <h1><i class="fa fa-phone"></i> &nbsp; Ph : <?php echo ot_get_option('phone') ?> </h1></span>

                    <i class="fa fa-arrow-right"></i>

                </li>
            </ul>
        </div>

    </div>


</div>
