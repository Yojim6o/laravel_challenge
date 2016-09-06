<!DOCTYPE html>
<html>
<head>
    <title>My App</title>
</head>
<body>

    <form action="add" method="post">
        Paste in a CNN.COM article URL<br>
        <input type="text" name="name"><br>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" name="Send Data!">
    </form>

    <?php foreach($projects as $project) { ?>
        <div>
            <?php echo $project->name; ?> ( <?php echo $project->money; ?> $ )
        </div>
    <?php } ?>
</body>
</html>
