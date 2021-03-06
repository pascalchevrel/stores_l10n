<h1>Apple Store Listing Copy</h1>
<h3>Title</h3>
<pre contenteditable="true"><?= htmlspecialchars($app_title($translations)) ?></pre>

<h3>Description</h3>
<pre contenteditable="true"><?= strip_tags($description($translations)) ?></pre>

<h3>What’s new</h3>
<pre contenteditable="true"><?= $whatsnew($translations) ?></pre>

<h3>Screenshots text</h3>
<pre contenteditable="true" style="text-align: center;"><?= br2nl($screenshots($translations)) ?></pre>


<?php if ($needs_v3_screenshots): // IOSHACK ?>
<h3>Version 3.0 Screenshots text</h3>
<pre contenteditable="true" style="text-align: center;"><?=br2nl($screenshots_v3($translations)) ?></pre>
<?php endif; ?>


<h3>Keywords &mdash; <?= $keywords_warning ?></h3>
<pre contenteditable="true"><?= htmlspecialchars($keywords($translations)) ?></pre>

<h3>Other</h3>
<pre contenteditable="true"><?= htmlspecialchars($other($translations)) ?></pre>
