<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form>
    <select name="dia">
        <?php for($i = 1 ; $i <= 31 ; $i++): ?>
            <option value='<?php print $i; ?>'><?php print $i; ?></option>
        <?php endfor; ?>
    </select>
    <select name="dia">
        <?php for($i = 1 ; $i <= 12 ; $i++): ?>
            <option value='<?php print $i; ?>'><?php print $i; ?></option>
        <?php endfor; ?>
    </select>
    <select name="dia">
        <?php for($i = 1900 ; $i <= 2024 ; $i++): ?>
            <option value='<?php print $i; ?>'><?php print $i; ?></option>
        <?php endfor; ?>
    </select>
</form>
</body>
</html>