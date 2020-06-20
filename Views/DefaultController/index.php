<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css"  href="../Public/css/style.css"/>
    <title>watchbook</title>
</head>
<body>
<div class="container">
    <form action="?page=logout" method="POST">
        <button type="submit">LOGOUT</button>
    </form>

    <?php if(isset($message)): ?>
        <?php foreach($message as $item): ?>
            <div><?= $item ?></div>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php
    if(isset($_SESSION))
        print_r($_SESSION);
    ?>

</div>
</body>
</html>
