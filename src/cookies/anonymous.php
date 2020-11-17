<?php
$title = 'If cookies can be used to identify me, can I be anonymous if I disable cookies?';
T::head($title);
T::article_head($title, ['/cookies/' => 'What are cookies?']);
?>

<?php T::markdown_begin() ?>

If you use a regular web browser, you are never truly anonymous no
matter what settings you use. Cookies provide a reliable way for a
website to remember who you are, but there are many other quasi-reliable
ways. This means if you disable cookies, a website can't be absolutely
sure who you are, but you're still far from anonymous.

A website you visit still receives a lot of information other than
cookies, the combination of which can still uniquely identify you. Just
like if you don't wear your lanyard with the barcode, you're probably
still recognizable by your face or your clothing. Without accepting
cookies, you may lose the ability to log into the website, but you may
still be trackable for, e.g., advertising purposes. Advertisers are
comfortable with a 95% probability of your identity, whereas a login
system needs certainty.

Finally, if your internet service provider (e.g. Rogers) receives a
court order, or if you live under an oppressive government, any internet
activity can be traced back to the physical location you connected from.
The only way around this is to use software like the Tor browser, which
you may remember from such shows as Mr. Robot.

<?php T::markdown_end() ?>

<?php
T::article_foot(['/cookies/#sub-questions' => "Other sub-questions"]);
T::foot();
