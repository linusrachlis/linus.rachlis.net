<? T::head() ?>
        <section class=quotation>

<? T::markdown_begin() ?>

I wish that more people could feel things without rushing to a
"rational" defense of the feeling. And isn't rationality itself
often simply the attempt to make our feelings contagious?

-- ContraPoints, ["Envy"](https://www.youtube.com/watch?v=aPhrTOg1RUk)

<? T::markdown_end() ?>

        </section>

        <section class="regular hello">
<? T::markdown_begin() ?>

## Hello

Well, this website is what happens when an idealist dreamer type adolesces as a
web developer, does a philosophy major, and then becomes a dad and a software
developer in a less-than-ideal world.

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

        <section class=regular>
            <h2>Essays</h2>
<?

T::article_listing(
    '/essays/where-are-we-supposed-to-go/',
    '"Where are we supposed to go?" Why the 99% struggle to win elections',
    'May 2019',
    <<<DESC

A progressive political candidate approaches the mic, pushes up their
glasses, and recites a list of policies to benefit the 99%, with
supporting facts. Then they lose the election. Why does this keep
happening? I illustrate the importance of mythology in leadership by
proposing we imagine the economy upside-down and backwards.
*(10&nbsp;mins)*

DESC
);

T::article_listing(
    '/essays/lets-talk-about-bell/',
    "Let's Talk About Bell",
    'February 2019',
    <<<DESC

There's a place for corporate citizenship, but you can't talk about
citizenship without taxes. *(5&nbsp;mins)*

DESC
);

T::article_listing(
    '/essays/democracy/',
    'What We Talk About When We Talk About Democracy',
    'May 2018',
    <<<DESC

We say democracy is now in crisis where it was thought to be most
stable. We say democracy is vital; we say it's inefficient. We call
democracy the worst form of government except for all the others. Like
_love_, this word means too much and therefore too little. How will we
then know if we have lost it? A long read to renew a deceptively simple
concept. I'll shorten it when I have more time... *(30&nbsp;mins)*

DESC
);

T::article_listing(
    '/essays/the-inconvenience-of-memory/',
    'The Inconvenience of Memory',
    'April 2017',
    <<<DESC

A century after Canada's most famous and bloodiest battle, what does
remembering look like, and why does it matter? What does forgetting look
like? *(10&nbsp;mins)*

DESC
);

T::article_listing(
    '/essays/tentanda-via/',
    '_Tentanda Via_: why I stopped donating to YorkU, my alma mater',
    'October 2016',
    <<<DESC

Okay, I was only giving five dollars a month, but I still took it pretty
personally when they honoured a corrupt billionaire for $20&nbsp;million. I
make the argument that universities' moral leadership will determine their
level of public funding. *(4&nbsp;mins)*

DESC
);

?>

        </section>

        <section class="regular so-long">
            <h2>So Long</h2>
            <ul style="padding-left: 1em;">
                <li style="list-style-type: '📬';">
                    <a href="mailto:linus@rachlis.net">linus@rachlis.net</a>
                </li>
                <li style="list-style-type: '💼';">
                    <a href="https://www.linkedin.com/in/linusrachlis/">LinkedIn</a>
                </li>
            </ul>
        </section>
<? T::foot();
