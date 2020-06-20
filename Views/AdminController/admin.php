<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css"  href="../Public/css/style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../../Public/js/script.js"></script>
    <title>watchbook</title>
</head>
<body>

<div class="containermenu">

    <header class="menu">
        <div class="boxmenubutton"><h1>Admin</h1></div>
        <div class="boxmenubutton">
            <button class="menubutton" type="button" onclick="getUsers()">GET ALL USERS</button>
        </div>
        <div class="boxmenubutton">
            <form action="?page=back" method="POST">
                <button type="submit" class="menubutton" name="id" value="1">BACK</button>
            </form>
        </div>
        <div class="boxmenubutton">
            <form action="?page=logout" method="POST">
                <button type="submit" class="menubutton">LOGOUT</button>
            </form>
        </div>
    </header>

    <div class="containerbody">
        <div class="row">
            <h2 class="h2new">ADMIN PANEL</h2>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody class="users-list">
                <tr>
                    <td><?= $user->getId(); ?></td>
                    <td><?= $user->getName(); ?></td>
                    <td><?= $user->getEmail(); ?></td>
                    <td><?= $user->getRole(); ?></td>
                    <td>-</td>
                </tr>
                </tbody>
            </table>
        </div>


    </div>
</div>




</body>
</html>


