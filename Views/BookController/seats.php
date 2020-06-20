<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css"  href="../Public/css/style.css"/>
    <title>watchbook</title>
</head>
<body>

<div class="containermenu">

    <header class="menu">
        <div class="boxmenubutton"><h1>Seats</h1></div>
        <div class="boxmenubutton"></div>
        <div class="boxmenubutton">
            <form action="?page=back" method="POST">
                <button type="submit" class="menubutton" name="id" value="2">BACK</button>
            </form>
        </div>
        <div class="boxmenubutton">
            <form action="?page=logout" method="POST">
                <button type="submit" class="menubutton">LOGOUT</button>
            </form>
        </div>
    </header>

    <div class="containerbody">
        <form action="?page=seats" method="POST">
            <div class="dateandtimecolumn">

            <div class="smallBox greenBox">Selected</div>
            <div class="smallBox redBox">Reserved</div>
            <div class="smallBox emptyBox">Empty</div>

        <div class="seatStructure">
                <table id="seatsBlock">
                    <tr>
                        <td colspan="14"><div class="screen">SCREEN</div></td>
                        <br/>
                    </tr>

                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td></td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                    </tr>

                    <tr>
                        <td>A</td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="A1" disabled></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="A2"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="A3"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="A4"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="A5"></td>
                        <td class="seatGap"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="A6"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="A7"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="A8"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="A9"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="A10"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="A11"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="A12"></td>
                    </tr>

                    <tr>
                        <td>B</td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="B1"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="B2"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="B3"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="B4"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="B5"></td>
                        <td></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="B6"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="B7"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="B8"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="B9"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="B10"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="B11"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="B12"></td>
                    </tr>

                    <tr>
                        <td>C</td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="C1"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="C2"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="C3"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="C4"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="C5"></td>
                        <td></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="C6"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="C7"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="C8"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="C9"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="C10"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="C11"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="C12"></td>
                    </tr>

                    <tr>
                        <td>D</td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="D1"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="D2"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="D3"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="D4"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="D5"></td>
                        <td></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="D6"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="D7"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="D8"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="D9"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="D10"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="D11"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="D12"></td>
                    </tr>

                    <tr>
                        <td>E</td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="E1"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="E2"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="E3"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="E4"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="E5"></td>
                        <td></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="E6"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="E7"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="E8"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="E9"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="E10"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="E11"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="E12"></td>
                    </tr>

                    <tr class="seatVGap"></tr>

                    <tr>
                        <td>F</td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="F1"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="F2"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="F3"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="F4"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="F5"></td>
                        <td></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="F6"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="F7"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="F8"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="F9"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="F10"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="F11"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="F12"></td>
                    </tr>

                    <tr>
                        <td>G</td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="G1"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="G2"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="G3"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="G4"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="G5"></td>
                        <td></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="G6"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="G7"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="G8"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="G9"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="G10"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="G11"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="G12"></td>
                    </tr>

                    <tr>
                        <td>H</td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="H1"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="H2"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="H3"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="H4"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="H5"></td>
                        <td></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="H6"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="H7"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="H8"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="H9"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="H10"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="H11"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="H12"></td>
                    </tr>

                    <tr>
                        <td>I</td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="I1"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="I2"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="I3"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="I4"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="I5"></td>
                        <td></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="I6"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="I7"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="I8"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="I9"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="I10"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="I11"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="I12"></td>
                    </tr>

                    <tr>
                        <td>J</td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="J1"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="J2"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="J3"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="J4"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="J5"></td>
                        <td></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="J6"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="J7"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="J8"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="J9"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="J10"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="J11"></td>
                        <td><input type="checkbox" class="seats" name="seats[]" value="J12"></td>
                    </tr>
                </table>
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

