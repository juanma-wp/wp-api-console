<?php

/**
 * This is a custom page template for the page with ID 138. This is accessible via
 * a rewrite rule in functions.php and loads the JS file from the API console repo.This is
 * an actual page, but all it does is adding a root div for React and then adding the script
 * and CSS.
 *
 * @package Automattic/Wpcom_Developer
 */

declare(strict_types=1);
//phpcs:ignorefile
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="//s0.wp.com/wp-content/themes/a8c/wpcom-developer/build-dist/console3/static/{CSS_FILENAME}">
</head>

<body <?php body_class(); ?>>
    <div id="root"></div>
    <script src="//s0.wp.com/wp-content/themes/a8c/wpcom-developer/build-dist/console3/static/{JS_FILENAME}" defer></script>
</body>

</html>