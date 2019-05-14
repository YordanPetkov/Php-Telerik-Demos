<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $data['title'] ?></title>
</head>
<body>
    <div style='height: 150px; border: 1px solid blue;float: left;width: 200px'>;  
        <?php
        include $data['header'];
        ?>
    </div>
    <div style='border: 1px solid black;float: right;'>;
        <?php
        include $data['content'];
        ?>
    </div>
</body>
</html>