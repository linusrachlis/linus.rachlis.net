<?php
$title = 'What are cookies, and why does every website make me agree to them?';
T::head($title);
T::article_head($title);
?>

<?php T::markdown_begin() ?>

Any website you visit can request that your computer store some data for
later use by the same site. Modern web browsers provide a few mechanisms
for this, but the oldest and most common is referred to as a "cookie,"
in the whimsical style of software jargon.

The data can be anything, and for a set time, your computer will present
the stored data back to the website on subsequent visits. Often, a
cookie is just a random number that's used to identify you during your
visit, and match you up with your profile data permanently stored on the
website. But in principle, a cookie can be anything, such as preferences
you've selected (e.g. Celsius vs. Fahrenheit), number of free articles
you've viewed, etc.

Websites have used cookies exuberantly for decades, but in 2018 the EU
passed new privacy laws that have been widely interpreted to require
consent for the usage of most cookies and other ways of storing data on
visitors' computers. Most websites are globally available, and therefore
available to EU citizens, and therefore subject to these laws. This has
resulted in yet another pop-up we all have to dismiss or ignore to get
at the actual website we came to visit, without becoming genuinely
informed or giving meaningful consent.

(The new laws do seems well-meaning, and are about much more than just
cookies. For more, see the [official word](https://gdpr.eu/cookies/) and
an [unofficial interpretive
article](https://www.varonis.com/blog/differences-between-the-gdpr-and-privacy-directive/).)

<?php T::markdown_end() ?>

        <h2 id=sub-questions>Sub-questions</h2>

        <ul class=articles>
            <li><a href="websites-and-memory.html">Why does my browser have to present the same data again on every visit? Can’t the website just remember who I am?</a></li>
            <li><a href="anonymous.html">If cookies can be used to identify me, can I be anonymous if I disable cookies?</a><br>(Short answer: no.)</li>
            <li><a href="consent.html">If the new cookie popups don&rsquo;t result in genuine informed consent, what would be better?</a></li>
            <li><em>Coming soon:</em> My browser gives the option to block third-party cookies. What does that mean, and why would I want to?</li>
        </ul>

        </div>
    </article>
<?php
T::article_foot();
T::foot();
