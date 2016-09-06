<!DOCTYPE html>
<html>
<head>
    <title>My App</title>
</head>
<body>

    <a href="../">Back</a>
    <br><br>
    <div>
        <strong>Title:</strong><br>
        <?php echo $article->title ?>
    </div>
    <br>
    <img style="width:200px" src=<?php echo $article->img ?> />
    <br>
    <strong>Image Source:</strong><br>
    <?php echo $article->img ?>
    <br><br>
    <div>
        <strong>Body:</strong><br>
        <?php echo $article->body ?>
    </div>

</body>
</html>