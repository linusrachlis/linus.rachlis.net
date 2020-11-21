<? T::head() ?>
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
            <h2>Essays</h2>
<?
T::article_listing(
    '/essays/new-deal-or-bust/',
    'New Deal or Bust',
    'May 2019',
    <<<DESC
Mauris volutpat, nulla id porttitor eleifend, odio massa finibus ligula, sit amet pharetra urna dolor ut ante.
DESC
);

T::article_listing(
    '/essays/democracy/',
    'What We Talk About When We Talk About Democracy',
    'May 2018',
    <<<DESC
We say democracy is now in crisis where it was thought to be most stable. We say democracy is vital; we say it's inefficient. We call it the worst form of government except for all the others. We keep using this word, but do we even agree on what it means? A long read
DESC
);

T::article_listing(
    '/essays/tentanda-via/',
    '_Tentanda Via_: why I stopped donating to YorkU, my alma mater',
    'October 2016',
    <<<DESC
Okay, I was only giving $5 a month, but I still took it pretty personally when they honoured a corrupt billionaire for $20 million. I make the argument that universities' moral leadership will determine their level of public funding.
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

## Elsewhere

Mauris volutpat, nulla id porttitor eleifend, odio massa finibus ligula, sit amet pharetra urna dolor ut ante. Curabitur id tristique lorem.

.

.

.
<? T::markdown_end() ?>
        </section>
<? T::foot();
