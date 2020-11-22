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
    '/essays/where-are-we-supposed-to-go/',
    '"Where are we supposed to go?" Why the 99% struggle to win elections.',
    'May 2019',
    <<<DESC

A progressive political candidate approaches the mic, pushes up their
glasses, and recites a list of policies to benefit the 99%, with
supporting facts. Then they lose the election. Why does this keep
happening? I illustrate the importance of mythology in leadership by
proposing we imagine the economy upside-down and backwards.

DESC
);

T::article_listing(
    '/essays/lets-talk-about-bell/',
    "Let's Talk About Bell",
    'February 2019',
    <<<DESC

There's a place for corporate citizenship, but you can't talk about
citizenship without taxes.

DESC
);

T::article_listing(
    '/essays/democracy/',
    'What We Talk About When We Talk About Democracy',
    'May 2018',
    <<<DESC

We say democracy is now in crisis where it was thought to be most stable. We
say democracy is vital; we say it's inefficient. We call democracy the worst form of
government except for all the others. Like _love_, this word means too much and
therefore too little. How will we then know if we have lost it? A long read to
renew a deceptively simple concept.

DESC
);

T::article_listing(
    '/essays/the-inconvenience-of-memory/',
    'The Inconvenience of Memory',
    'April 2017',
    <<<DESC

A century after Canada's most famous and bloodiest battle, what does
remembering look like, and why does it matter? What does forgetting look
like?

DESC
);

T::article_listing(
    '/essays/tentanda-via/',
    '_Tentanda Via_: why I stopped donating to YorkU, my alma mater',
    'October 2016',
    <<<DESC

Okay, I was only giving five dollars a month, but I still took it pretty
personally when they honoured a corrupt billionaire for $20 million. I
make the argument that universities' moral leadership will determine
their level of public funding.

DESC
);

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
