<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css"  href="../Public/css/style.css"/>
    <title>watchbook</title>
</head>
<body>

<div class="containermenu">

    <header class="menu">
        <div class="boxmenubutton"><h1>Summary</h1></div>
        <div class="boxmenubutton"></div>
        <div class="boxmenubutton">
            <form action="?page=back" method="POST">
                <button type="submit" class="menubutton" name="id" value="3">BACK</button>
            </form>
        </div>
        <div class="boxmenubutton">
            <form action="?page=logout" method="POST">
                <button type="submit" class="menubutton">LOGOUT</button>
            </form>
        </div>
    </header>

    <div class="containerbody">
        <form action="?page=podsuma" method="POST">
            <div class="dateandtimecolumn">
                <div class="dateandtimetitle">
                    <?php if(isset($_GET['title'])): ?><?= $_GET['title'] ?><?php endif; ?>
                </div>
                <div class="dateandtimetitle">
                    <?php if(isset($_GET['date'])): ?><?= $_GET['date'] ?><?php endif; ?>
                </div>
                <div class="dateandtimetitle">
                    <?php if(isset($_GET['time'])): ?><?= $_GET['time'] ?><?php endif; ?>
                </div>
                <div class="dateandtimetitle">
                    <?php if(isset($_GET['size'])): ?><?= $_GET['size'] ?><?php endif; ?> seats
                </div>
                <div class="dateandtimetitle">
                    <?php if(isset($_GET['price'])): ?><?= $_GET['price'] ?><?php endif; ?>$
                </div>

                <div class="dateqndtimecontent">
                    <button type="submit" class="menubutton">PAY</button>
                </div>
            </div>
        </form>
    </div>
</div>




</body>
</html>


