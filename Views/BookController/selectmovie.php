<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css"  href="../Public/css/style.css"/>
    <title>watchbook</title>
</head>
<body>

<div class="containermenu">

    <header class="menu">
        <div class="boxmenubutton"><h1>Movie</h1></div>
        <div class="boxmenubutton"></div>
        <div class="boxmenubutton">
            <?php if($_SESSION["role"]=="admin"): ?>
                <form action="?page=admin" method="POST">
                    <button type="submit" class="menubutton">ADMIN</button>
                </form>
            <?php endif; ?>
        </div>
        <div class="boxmenubutton">
            <form action="?page=logout" method="POST">
                <button type="submit" class="menubutton">LOGOUT</button>
            </form>
        </div>
    </header>

    <div class="containerbody">

        <?php if(isset($movies)): ?>
            <?php foreach($movies as $mv): ?>
                <form action="?page=selectmovie" method="POST">
                    <button class="moviebox" name="id" value="<?= $mv->getId(); ?>">
                        <img class="movieboximg" src="../../Public/img/movies/<?= $mv->getImage(); ?>" alt="<?= $mv->getTitle(); ?>">
                        <div class="movieboxcontent">
                            <h2><?= $mv->getTitle(); ?></h2>
                        </div>
                    </button>
                </form>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>

</div>

</body>
</html>
