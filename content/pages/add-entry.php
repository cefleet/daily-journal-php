<h2>Add Entry</h2>
<form action="/api/">
    <div class="date"><?php echo DATE_TEXT ?></div>
    <input name="title" id="title" placeholder="Entry Title" />
    <textarea name="entry" id="entry" placeholder="Talk about your day"></textarea>
    <button id="submitForm">Add Entry</button>
    <input style="display:none;" name="date" value="<?php echo DATE_TEXT ?>" />
</form>