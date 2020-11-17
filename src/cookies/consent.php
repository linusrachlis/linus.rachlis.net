<?php
$title = "If the new cookie popups don't result in genuine informed consent, what would be better?";
T::head($title);
T::article_head($title, ['/cookies/' => 'What are cookies?']);
?>

<?php T::markdown_begin() ?>

Historically, cookies were always a matter of consent. Even today, when
you visit, say, some news outlet's website, your browser (a program
running on your computer) has a conversation with a server (a program
running on a remote computer). It goes something like this:

> **Browser:** Hi `action-news-world.com`, I guess my user is in the mood
> for sadness, because they're requesting the international news page.
> Please send that over.

> **Server:** Kinda busy here, hold on ... OK, got that page for you.
> Also, can you hold these for me?

> <pre>
> visitor ID = ABC123
> country code = CA
> free articles viewed = 0
> </pre>

> That's just a couple pieces of information to serve your user better.
> If you could present them on every visit for the next four years,
> that'd be great. OK, here's the international news page. Hope your
> user is ready for a deep funk. `<data stream follows>`

> **Browser:** Hmm. I'm not sure if tracking "free articles viewed" is
> really about serving my user better, but as a computer program, it's
> pretty hard for me to tell. For all I know, it's essential
> functionality. OK, I'll do as you say. By the way, surely some
> positive things are happening internationally as well as sad things?

> **Server:** I mean, probably ... I just don't consider them news,
> though.

See that? Had your browser refused to accept the cookies, there is
nothing the website could have done to force the issue. It can't block
the browser for refusing the cookies, because the cookies are the only
reliable way to recognize the same browser coming back!

> Note: there are a couple of other ways for a website to store data on
> your computer, but they all rely on the browser agreeing to do what the
> website asks. Just read that in whenever I use the word "cookies."

In fact, all browsers have a setting you can toggle to refuse cookies,
but it defaults to "accept," because many websites just won't work
properly without cookies. And for the most part, it's not possible for
your browser to be selective, because there's no way for it to tell
which cookies are in your interest and which are against. That depends
how the website uses the data, and your browser is not a mind-reader.

So for any given website, we've been stuck with all-or-nothing consent
for cookies, and since cookies are sometimes essential functionality,
the only way not to consent is not to visit the site at all.

It seems like this is where the EU's new laws were supposed to come in.
As [described here](https://gdpr.eu/cookies/), they contain two key
concepts that would improve the above situation:

1. Distinguish "strictly necessary" cookies (i.e. essential website
   functionality) from other kinds of cookies (e.g. free article
   tracking). Consent is only required for use of the latter.
2. "Allow users to access your service even if they refuse to allow the
   use of certain cookies."

Now when's the last time you saw a cookie consent popup with that kind
of nuance? For me, basically never. They tend to be some polite
variation of, "We use cookies. They help us help you help us. If you
don't like it, you're free to leave." I'm no legal expert, but I feel
like most popups don't fulfill the EU's legal requirements, and are just
hasty attempts to mitigate the risk of getting slapped with a full-force
fine.

## OK, so most consent popups are garbage, but it's the fault of lazy webmasters and not EU lawmakers?

While it might be nice if all websites gave you an informed choice about
what kinds of cookies to accept, fulfilling that requirement under the
current situation would result in a lot of duplicated effort for folks
running websites. To be meaningfully compliant, you have to implement a
system to inform the user about all the cookies you use and what purpose
they serve (i.e. strictly necessary, preferences, statistics, marketing,
etc.), design a user interface to display this information and allow the
user to select which cookies they are willing to accept, store the
user's preferences, and then retrieve and follow those preferences in
all parts of your application code that interact with cookie data.

And that's assuming you even know how to do that. Many people running
websites are not software developers, but are using a content management
system like Wordpress or Drupal and rely on third-party plugins to
provide such functionality. Indeed, I'd wager most cookie consent popups
you see are provided by such plugins, and that's part of the reason they
lack nuance to the point of meaninglessness. The code that runs them was
written with no specific knowledge of the particular website on which it
would be used, and the people running the website may not even
understand what cookies are. It's like an English-speaking, Canadian
doctor asking for your informed consent for an operation that will be
performed by a Japanese robot without any English documentation. It's all
or nothing, and good luck getting genuinely informed.

## The "Do Not Track" experiment

The new EU legislation was introduced just as another e-privacy
experiment failed. Between 2009 and 2018, the internet standards
community tried to introduce a new, standard way for website visitors to
opt out of being tracked between websites for advertising or other
non-essential purposes. (It's this kind of tracking that results in your
being followed around the web by ads for whatever you've been searching
for recently.) The experiment ultimately failed due to a lack of clarity
and legal force.

See what happened there? First there was a technical standard that
lacked legal force. Then there was a law that lacked technical
standardization. Both failed to achieve their goals. Hmmm.

(Keep in mind that cookies are just one part of the EU legislation. I'm
not informed about the rest of it.)

## A holistic solution

If we really want to give people control over what data websites can
store on their computers, we need international legislation with an
integrated technical standard.

Easy, right? But imagine if you could adjust your browser setting thus:
"I'm OK with strictly necessary cookies, preference cookies, and
statistics cookies, but not with marketing cookies. Oh, except for
CBC.com, their marketing cookies are OK."

First of all, you need a technical standard so that, when websites ask
to store data on your computer, they must specify the purpose at the
code level, in terms of some set of categories. Then you need
legislation to provide enough incentive to do this truthfully. Then your
browser can accept or reject cookies on your behalf with confidence.

The key here is that it's up to software developers to adhere to the new
technical standard, but they don't have to do a lot of busywork to
develop new user interfaces for preferences that should just be part of
the browser itself. And as always, it's up to browsers to accept or
reject cookies -- but now they can do so with more nuance. Non-technical
folks running websites are no longer caught in the middle between
systems that don't know how to talk to each other.

## Sounds great. But does it solve the right problem?



<?php T::markdown_end() ?>

<?php
T::article_foot(['/cookies/#sub-questions' => "Other sub-questions"]);
T::foot();
