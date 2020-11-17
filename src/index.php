<? T::head() ?>
<div class=container>
    <header>
        <h1>
            <span class=ego>Linus Rachlis</span>
            <script>
                (function () {
                    var emojis = ['💾', '💻', '👾', '🎸'];
                    document.write(emojis[Math.floor(Math.random() * emojis.length)])
                })();
            </script>
            Essays
        </h1>
    </header>

    <main>

        <section class=quotation>

            <p>If you don't give them a better analogy to replace the one that
            wasn't working, they'll just cling to the old one anyway.</p>

            <p>&mdash; <a href="https://github.com/Icetigris">Elizabeth Blaumel</a> on
            teaching data-oriented design, Handmade Seattle conference, 2020 (paraphrase)</p>

        </section>

        <section class=vert-header>
<? T::markdown_begin() ?>

## Hello

Well, this website is what happens when an idealist web developer does a
philosophy major and then becomes a dad and a software developer in a world
that often laughs at idealists.

<? T::markdown_end() ?>

<ul>
    <li style="list-style-type: '⬆️';">
        <?= T::typograph("Above shines my favourite thought that I've heard recently.") ?>
    </li>
    <li style="list-style-type: '⬇️'; margin-top: .5em;">
        <?= T::typograph("Below lurk some pretty well argued radical opinions on topics I couldn't get
off my mind.") ?>
    </li>
</ul>

        </section>

        <section class=vert-header>
            <h2>Society</h2>
<?
T::article_listing(
    '/new-deal-or-bust/',
    'New Deal or Bust',
    'May 2019',
    <<<DESC
Mauris volutpat, nulla id porttitor eleifend, odio massa finibus ligula, sit amet pharetra urna dolor ut ante.
DESC
);

T::article_listing(
    '/what-we-talk-about-when-we-talk-about-democracy/',
    'What We Talk About When We Talk About Democracy',
    'May 2018',
    <<<DESC
Curabitur id tristique lorem. Vestibulum egestas, felis et accumsan laoreet, risus tortor ornare risus, id scelerisque velit nunc non eros.
DESC
);

T::article_listing(
    '/tentanda-via/',
    '_Tentanda Via_: why I stopped donating to YorkU, my alma mater',
    'October 2016',
    <<<DESC
Duis vel eleifend augue. Morbi aliquet leo nisi, nec pellentesque lectus pretium id.
DESC
);

// T::article_listing(
//     '',
//     '',
//     '',
//     <<<DESC

// DESC
// );

// T::article_listing(
//     '',
//     '',
//     '',
//     <<<DESC

// DESC
// );

?>
            
        </section>

        <section class=vert-header contenteditable>
<? T::markdown_begin() ?>

## Software

Mauris volutpat, nulla id porttitor eleifend, odio massa finibus ligula, sit amet pharetra urna dolor ut ante. Curabitur id tristique lorem.

Vestibulum egestas, felis et accumsan laoreet, risus tortor ornare risus, id scelerisque velit nunc non eros. Nulla sem nibh, fermentum tristique lorem eu, convallis mollis elit.

Duis vel eleifend augue. Morbi aliquet leo nisi, nec pellentesque lectus pretium id. Maecenas condimentum tincidunt arcu, a porta urna aliquet ut. Nam venenatis dui non dapibus molestie. Duis mollis odio nec sapien consectetur, nec gravida diam lacinia. Curabitur a turpis at ex facilisis imperdiet at et nisi. Vivamus sollicitudin est a eros convallis dapibus. Aliquam erat volutpat.

<? T::markdown_end() ?>
        </section>

        <section class=vert-header contenteditable>
<? T::markdown_begin() ?>

## Elsewhere

Mauris volutpat, nulla id porttitor eleifend, odio massa finibus ligula, sit amet pharetra urna dolor ut ante. Curabitur id tristique lorem.

.

.

.
<? T::markdown_end() ?>
        </section>
</div>
<? T::foot();
