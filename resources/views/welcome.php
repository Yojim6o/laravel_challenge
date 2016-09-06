<!DOCTYPE html>
<html>
<head>
    <title>My App</title>
</head>
<body>

    <form action="add" method="post">
        Paste in a CNN.com article URL<br>
        <input type="text" name="url"><br>
        <input type="hidden" name="_token" value=<?php echo csrf_token() ?>>
        <input type="submit" name="Submit">
    </form>
    <br><br>
    <?php foreach($articles as $article) { ?>
        <div>
            <a href=<?php echo './article/'.$article->id; ?>>
                <?php echo $article->title; ?>
            </a>
        </div>
    <?php } ?>
</body>
</html>
