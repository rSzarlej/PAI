<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css"  href="../Public/css/style.css"/>
        <title>watchbook</title>
    </head>
    <body>
        <div class="container">
            <div class="logo">
                <img src="../Public/img/logo.svg">
            </div>

            <form action="?page=login" method="POST" class="loginform">
                <input name="email" type="text" placeholder="e-mail" required>
                <input name="password" type="password" placeholder="password" required>
                <button type="submit">CONTINUE</button>
                <button>login with Google</button>
                <?php if(isset($message)): ?>
                    <?php foreach($message as $item): ?>
                        <div class="msglogout"><?= $item ?></div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </form>
        </div>
    </body>
</html>
