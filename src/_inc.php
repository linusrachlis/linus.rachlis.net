<?php

require __DIR__ . '/../vendor/autoload.php';

use Michelf\MarkdownExtra, Michelf\SmartyPants;

class T {
    function markdown_begin() {
        ob_start();
    }

    function markdown_end() {
        $input = ob_get_clean();
        $output = self::markdown_to_html($input);
        echo $output;
    }

    function markdown_to_html($input) {
        $output = MarkdownExtra::defaultTransform($input);
        $output = self::typograph($output);
        return $output;
    }

    function markdown_inline($input) {
        $html = self::markdown_to_html($input);
        // omit p tags (note trailing linefeed)
        $result = substr($html, 3, -5);
        return $result;
    }

    function typograph($input) {
        $output = SmartyPants::defaultTransform($input);
        return $output;
    }

    function article_listing($url, $title, $date, $desc) {
        ?>
            <div class=article-listing>
                <h3><a href="<?= $url ?>"><?= self::markdown_inline($title) ?></a></h3>
                <time><?= self::markdown_inline($date) ?></time>
                <?= self::markdown_to_html($desc) ?>
            </div>
        <?php
    }

    function head($title = null) {
        ?>
<!DOCTYPE html>
<html>

<head>
    <title><?= isset($title) ? self::typograph($title) : 'Linus Rachlis &mdash; Essays' ?></title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#000000">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Radley:ital@0;1&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="/style.css">
</head>

<body>
        <?php
    }

    function foot() {
        ?>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <!--
    <script>
        window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
    -->
    </body>

</html>
        <?php
    }
}
