<?php

require __DIR__ . '/../vendor/autoload.php';

use Michelf\MarkdownExtra, Michelf\SmartyPants;

class T {
    static function markdown_begin() {
        ob_start();
    }

    static function markdown_end() {
        $input = ob_get_clean();
        $output = self::markdown_to_html($input);
        echo $output;
    }

    static function markdown_to_html($input) {
        $output = MarkdownExtra::defaultTransform($input);
        $output = self::typograph($output);
        return $output;
    }

    static function markdown_inline($input) {
        $html = self::markdown_to_html($input);
        // omit p tags (note trailing linefeed)
        $result = substr($html, 3, -5);
        return $result;
    }

    static function typograph($input) {
        $output = SmartyPants::defaultTransform($input);
        return $output;
    }

    static function article_listing($url, $title, $date, $desc) {
        ?>
            <div class=article-listing>
                <h3><a href="<?= $url ?>"><?= self::markdown_inline($title) ?></a></h3>
                <time><?= self::markdown_inline($date) ?></time>
                <?= self::markdown_to_html($desc) ?>
            </div>
        <?php
    }

    static function head($title = null) {
        ?>
<!DOCTYPE html>
<html>

<head>
    <title><?= isset($title) ? self::typograph($title) : 'Linus Rachlis' ?></title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Radley:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <header>
            <h1>
                <span class=ego>Linus Rachlis</span>
                <script>
                    (function () {
                        var emojis = [
                            '💾', '💻', '👾', '🎸', '🌎', '🚴‍♂', '☕️', '🌖',
                            '🖖', '👨‍👩‍👦', '🧙‍♂️','🐒', '🐢', '🍁', '🎧',
                            '🕹', '🖋'
                        ];
                        for (var i = 0; i < 2; i++) {
                            var j = Math.floor(Math.random() * emojis.length);
                            document.write(emojis.splice(j, 1));
                        }
                    })();
                </script>
                <? if ($_SERVER['REQUEST_URI'] != '/') { ?>
                <a href="/">Home</a>
                <? } ?>
            </h1>
        </header>

        <main>
            <div class=container>
                <?php
    }

    static function foot() {
        ?>
            </div>
        </main>

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

    static function article_head($title, $date, $subtitle = null) {
        ?>
        <article>

            <div class=article-head>
                <h1><?= self::markdown_inline($title) ?></h1>
                <? if (isset($subtitle)) { ?>
                <div class=subtitle><?= self::markdown_inline($subtitle) ?></div>
                <? } ?>
                <div><time><?= self::markdown_inline($date) ?></time></div>
            </div>

            <div class=article-body>
        <?php
    }

    static function article_foot() {
        ?>
            </div>
            <div class=article-foot>
                <a href="/">🏡 Home</a>
            </div>
        </article>
        <?php
    }
}
