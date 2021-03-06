<h1>Apple Store Listing Copy</h1>
<h3>Title</h3>
<pre><?= $app_title($translations) ?></pre>

<h3>Description</h3>
<pre><?= $description($translations) ?></pre>

<h3>What’s new</h3>
<pre><?= $whatsnew($translations) ?></pre>

<h3>Screenshots text</h3>
<pre style="text-align: center;"><?= $screenshots($translations) ?></pre>

<?php if ($needs_v3_screenshots): // IOSHACK?>
<h3>Version 3.0 Screenshots text</h3>
<pre style="text-align: center;"><?= $screenshots_v3($translations) ?></pre>
<?php endif; ?>

<h3>Keywords&mdash; <?= $keywords_warning ?></h3>
<pre><?= $keywords($translations) ?></pre>

<h3>Other</h3>
<pre><?= $other($translations) ?></pre>
