<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css"  href="../Public/css/style.css"/>
    <title>watchbook</title>
</head>
<body>

<div class="containermenu">

    <header class="menu">
        <div class="boxmenubutton"><h1>Details</h1></div>
        <div class="boxmenubutton"></div>
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
        <form action="?page=dateandtime" method="POST">
            <div class="dateandtimecolumn">
                <div class="dateandtimetitle">
                    Date
                </div>

                <div class="dateqndtimecontent">
                    <div class="dateandtimecolumn">
                        <div class="dateandtimeday">Mon</div>
                        <input type="radio" id="radio1" name="radiodate" value="Mon, 22.06" checked>
                        <label for="radio1" class="labeldate">22</label>
                    </div>

                    <div class="dateandtimecolumn">
                        <div class="dateandtimeday">Tue</div>
                        <input type="radio" id="radio2" name="radiodate" value="Tue, 23.06">
                        <label for="radio2" class="labeldate">23</label>
                    </div>

                    <div class="dateandtimecolumn">
                        <div class="dateandtimeday">Fri</div>
                        <input type="radio" id="radio3" name="radiodate" value="Fri, 26.06">
                        <label for="radio3" class="labeldate">26</label>
                    </div>

                    <div class="dateandtimecolumn">
                        <div class="dateandtimeday">Sat</div>
                        <input type="radio" id="radio4" name="radiodate" value="Sat, 27.06">
                        <label for="radio4" class="labeldate">27</label>
                    </div>
                </div>

                <div class="dateandtimetitle">
                    Time
                </div>

                <div class="dateqndtimecontent">
                    <div class="dateandtimecolumn">
                        <input type="radio" id="radio5" name="radiotime" value="19:00" checked>
                        <label for="radio5" class="labeltime">19:00</label>
                    </div>

                    <div class="dateandtimecolumn">
                        <input type="radio" id="radio6" name="radiotime" value="20:00">
                        <label for="radio6" class="labeltime">20:00</label>
                    </div>

                    <div class="dateandtimecolumn">
                        <input type="radio" id="radio7" name="radiotime" value="20:15">
                        <label for="radio7" class="labeltime">20:15</label>
                    </div>

                    <div class="dateandtimecolumn">
                        <input type="radio" id="radio8" name="radiotime" value="23:00">
                        <label for="radio8" class="labeltime">23:00</label>
                    </div>
                </div>

                <div class="dateqndtimecontent">
                    <button type="submit" class="menubutton">CONTINUE</button>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html>
