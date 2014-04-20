<!DOCTYPE html>
<html>
    <head>
        <title><?php echo Theme::get('title'); ?></title>
        <meta charset="utf-8">
        <meta name="keywords" content="<?php echo Theme::get('keywords'); ?>">
        <meta name="description" content="<?php echo Theme::get('description'); ?>">
        <?php echo Theme::asset()->styles(); ?>

    </head>
    <body>
        <div class="navbar navbar-fixed-top">

            <div class="navbar-inner">

                <div class="container">

                    <a class="brand" href="/">
                        <?php echo Settings::get("website.name", false, "Pulpitum");?>
                    </a>

                    <div class="nav-collapse">
                        <ul class="nav pull-right">
                            <li class="">
                                <a href="/" class="">
                                    <i class="icon-chevron-left"></i>
                                    Back to Homepage
                                </a>
                            </li>
                        </ul>

                    </div><!--/.nav-collapse -->

                </div> <!-- /container -->

            </div> <!-- /navbar-inner -->

        </div> <!-- /navbar -->

        <div class="container">
            <?php echo Theme::content(); ?>
        </div>

        <?php echo Theme::asset()->scripts(); ?>
        <?php echo Theme::asset()->container('footer')->scripts(); ?>
    </body>
</html>
