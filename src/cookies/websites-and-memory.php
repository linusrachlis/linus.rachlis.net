<?php
$title = 'Why does my browser have to present the same data again on every visit? Can\'t the website just remember who I am?';
T::head($title);
T::article_head($title, ['/cookies/' => 'What are cookies?']);
?>

<?php T::markdown_begin() ?>

This may seem strange. Maybe you're imagining a real-life analogy where
you've met someone at a party who is having short-term memory trouble,
and are having a surreal conversation:

> **Me:** Hi, I'm Linus. I'm from Toronto and I'm a software developer.
>
> **Him:** Hi Linus. Nice to meet you. Tell me, why is software still so
> hard to use? Haven't you people been at this for decades? By the way,
> I'll forget who you are by the time you reply.
>
> **Me:** Oh, no worries. So I'm Linus. I'm a software developer from
> Toronto. You just asked me why most software is so hard to use despite
> its being a decades-old discipline. I would, however, point out that
> decades is hardly very old for an engineering discipline. How long
> have we been at bridges, for example?
>
> **Him:** Hi Linus. Thanks for catching me up. Now what I want to ask
> is, does the creation of software really qualify as engineering? From
> where I'm sitting, most software looks very seat-of-the-pants compared
> to bridges.
>
> **Me:** I'd say there's a spectrum. It's true, much of the software
> people use is created quite casually, but at the other end, there's
> the software that controls rocket launches. I'd call that engineering
> for sure.
>
> **Him:** A spectrum of what? Who are you? Are you trying to sell me
> rockets?
>
> **Me:** 🤦‍♂️

## Some quick history

The thing is, a one-on-one conversation isn't a great analogy for
information flow when it comes to websites. Let's recall the web's
original purpose: It's 1989. For most people, personal computers still
aren't a thing, and if you want to read up on something, you go to the
library and physically open a book. But for certain groups of
scientists, reading and writing have become digital activities. The only
problem is, digital text is still cooped up on individual computers, and
must be shared either via physical printout or by explicitly making a
digital copy to share. Tim Berners-Lee of CERN creates a
digital-documents-on-demand system, and a document format that can embed
links to other documents. The web is born.

Compared with today's web, this original version is modest and stuffy.
Today's web solves for a different problem than the original. Notice two
key aspects of the original version, one of which is now more true, and
the other less:

1.  A website has a one-to-many relationship with visitors.
2.  A website is a repository of documents. For the most part, any
    visitor requesting the same document will be served in the same way.

In this original version of the web, aspect (1) means, for the computer
running a website, remembering individual visitors adds programming
complexity and occupies system resources, and you don't even know who
will actually return. Aspect (2) means this is a moot point: when a
visitor requests "document A", you send them "document A"; you don't
care who they are or if they've visited before.

That's the basic design of the web, but the lack of continuity for
visitors soon became an issue. I want websites to remember that I
selected Celsius, or a larger font size. I want them to remember my VIP
status without having to re-enter a password on every visit. And website
creators want to be able to analyze which pages I visited, in what
order, for how long -- ostensibly so they can improve my experience.
This requires my having a continuous identity from page to page.

## How cookies are used

If a website has only a small amount of data to store, the simplest way
is to put it in the cookie itself. Suppose you set some preferences on a
website, and in order to remember them, the website sets two cookies:

<pre>
temp unit = C
font size = 18
</pre>

Now my browser will no longer merely say "send me document A." It will
now say:

<pre>
Send me document A, and by the way, temp unit = C and font size = 18.
</pre>

And then,

<pre>
Send me document <strong><em>B</em></strong>, and by the way, temp unit = C and font size = 18.
</pre>

This is like being at an event with catered food, and wearing a lanyard
with the code "VGN, GF, AP." This could efficiently tell the catering
staff that you are vegan and gluten-intolerant with a peanut allergy,
without their having to re-interview you on every interaction. They
still don't know who you are individually, but you constantly present
all the information they need. Websites may use this strategy to store
minor customizations and preferences.

Nowadays, "documents on demand" describes only a narrow aspect of the
web. A more general description of the modern web would be "software as
a broadcast medium." Even websites that are essentially document
repositories still run code to track visitors' behaviour, allow them to
post comments, and serve them ads. Obviously, many modern websites care
a great deal who each visitor is, and serve each visitor a personalized
experience. So, in contrast to the original design of the web, aspect
(2) is no longer true. But with more and more activities moving online,
aspect (1) is more true than ever (see aside).

<aside>
    <h3>Web 1.0</h3>
    <ol>
        <li>A website has a one-to-many relationship with visitors.</li>
        <li>A website is a repository of documents. For the most part, any
        visitor requesting the same document will be served in the same way.</li>
    </ol>

    <h3>Web 2.0</h3>
    <ol>
        <li>
            A website has a one-to-many relationship with visitors.
            ✅ <em>Oh yeah, double down on this, the more visitors the better</em>
        </li>
        <li>
            <del>A website is a repository of documents. For the most part, any
            visitor requesting the same document will be served in the same way.</del>
            ❌❌❌ <em>Nope we are too hip for this now, documents are programs, rock on postmodernity</em> 🤘
        </li>
    </ol>
</aside>

In this situation, where websites may want to build up extensive profile
data for each visitor, storing this data in the cookie itself won't
work, for a few reasons.

* Cookies are limited in size, to protect visitors' hard drive space.
* Each computer stores its own set of cookies. If you use your phone
  instead of your laptop, the same cookies will not be sent.
* Visitors can choose to delete cookies any time, destroying the data.
  If a website bothers to accumulate profile data on you, they would
  like to be in control of that data, and have it live with them.

Websites with such ambitions will set a cookie that just holds a large
random number:

<pre style="clear: right;">
ID = b94d27b9934d3e08...
</pre>

Your computer presents this unique random number again on every visit,
and the computer running the website can use it to look up your
information in an internal database (and add to it) before deciding how
to serve you. You may or may not have to enter a password to interact
with your profile information, depending on the nature of the website.
In the food catering analogy, this is like having a barcode on your
lanyard instead of actual information. The catering staff can scan the
barcode to pull up your profile, which could now be extensive because it
doesn't have to fit on a little card; all that needs to fit is the
barcode (representing a unique number).

Of course, another strategy would be to simply hire as many staff as
attendees, so that each staff member only has to remember one person's
preferences, but this would be overly costly. It's the same with a
website serving visitors. Each time you visit a page, the computer
running a website spends a little time and energy to figure out how to
respond. After responding, it *could* in theory keep the line open just
for you, so that it would genuinely remember who you are upon the next
interaction. But there's a limit to how many lines it can keep open at a
time, so this strategy would quickly become infeasible for a busy
website. It would be too complicated to have one way that busy websites
work and another way for non-busy websites, so instead we all use the
way that will keep working no matter how busy a website gets.

<?php T::markdown_end() ?>

<?php
T::article_foot(['/cookies/#sub-questions' => "Other sub-questions"]);
T::foot();
