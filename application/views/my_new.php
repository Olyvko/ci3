<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h1>My First Bootstrap Page</h1>
    <p>This is some text.</p>
    <div class="row">
        <div class="col-sm-4 col-sm-push-8">.col-sm-4 .col-sm-push-8</div>
        <div class="col-sm-8 col-sm-pull-4">.col-sm-8 .col-sm-pull-4</div>
    </div>
    <div class="row">
        <div class="col-sm-4"><p><?php echo anchor('../my_func', 'Настройки'); ?></p></div>
    </div>
</div>

</body>
</html>