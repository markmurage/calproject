<html>
    <body bgcolor="cyan">
        <form method="post">
            <fieldset>
<legend>MY calculator</legend>
Enter any number to compute cube:&nbsp;&nbsp;&nbsp;<input type="number"
name="cube"/> <br><br>

Enter any number to compute square:&nbsp;&nbsp;&nbsp;<input type="number"
name="square"/> <br><br>

<fieldset>
<legend>divide</legend>
Enter any number :&nbsp;&nbsp;&nbsp;<input type="number"
name="divide"/> <br><br>

Enter any number :&nbsp;&nbsp;&nbsp;<input type="number"
name="divideone"/> <br><br>
</fieldset>


<fieldset>
<legend>multiplication</legend>
Enter any number:&nbsp;&nbsp;&nbsp;<input type="number"
name="multiply"/> <br><br>

Enter any number:&nbsp;&nbsp;&nbsp;<input type="number"
name="multiplyone"/> <br><br>
</fieldset>

<fieldset>
<legend>add</legend>
Enter any number :&nbsp;&nbsp;&nbsp;<input type="number"
name="add"/> <br><br>

Enter any number :&nbsp;&nbsp;&nbsp;<input type="number"
name="addone"/> <br><br>
</fieldset>

<fieldset>
<legend>subtract</legend>
Enter any number :&nbsp;&nbsp;&nbsp;<input type="number"
name="subtract"/> <br><br>

Enter any number:&nbsp;&nbsp;&nbsp;<input type="number"
name="subtractone"/> <br><br>
</fieldset>

<input type="submit" name="submit"   value="COMPUTE">
            </fieldset>
            </form>
            <?php
            if(isset($_POST['submit']))
            {
                $bse=$_POST['cube'];
                $cube=$bse*$bse*$bse;
                echo"the cube of $bse=".$cube;
            }
            ?>
            <?php
             if(isset($_POST['submit']))
            {
                $bse=$_POST['square'];
                $square=$bse*$bse;
                echo"the square of $bse=".$square;
            }
            ?>
            <?php
             if(isset($_POST['submit']))
            {
                $bse=$_POST['divide'];
                $bseone=$_POST['divideone'];
                $square=$bse/$bseone;
                echo"the answer of =".$square;
            }
            ?>
            <?php
             if(isset($_POST['submit']))
            {
                $bse=$_POST['multiply'];
                $bseone=$_POST['multiplyone'];
                $square=$bse*$bseone;
                echo"the answer of =".$square;
            }
            ?>
            <?php
             if(isset($_POST['submit']))
            {
                $bse=$_POST['add'];
                $bseone=$_POST['addone'];
                $square=$bse+$bseone;
                echo"the answer of =".$square;
            }
            ?>
            <?php
             if(isset($_POST['submit']))
            {
                $bse=$_POST['subtract'];
                $bseone=$_POST['subtractone'];
                $square=$bse-$bseone;
                echo"the answer of =".$square;
            }
            ?>
    </body>
</html>