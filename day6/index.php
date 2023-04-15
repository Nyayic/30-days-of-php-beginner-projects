<?php
// state an array of quotes
$quotes =  array(
    "We cannot solve problems with the kind of thinking we employed when we came up with them. — Albert Einstein",
    "Learn as if you will live forever, live like you will die tomorrow.” — Mahatma Gandhi",
    "Stay away from those people who try to disparage your ambitions. Small minds will always do that, but great minds will give you a feeling that you can become great too.” — Mark Twain",
    "When you change your thoughts, remember to also change your world.”—Norman Vincent Peale"
);
// get a random quote from the array
$randomQuote = $quotes[array_rand($quotes)];

// display the quote
echo $randomQuote;
?>