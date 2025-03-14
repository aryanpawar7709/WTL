<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="f1" action="post">
        <table>
        <tr>
        <td>Emp_id :></td><td><input type="text" name="t1" value=""></td>
    </tr>
<tr>
        <td>Emp_name :></td><td><input type="text" name="t2" value=""></td>
</tr>
<tr>
        <td>Emp_emial :></td><td><input type="text" name="t3" value=""></td>
</tr>
<tr>
        <td>Mobile_no :></td><td><input type="text" name="t4" value=""></td>
</tr>
<tr>
        <td>Emp_Department :></td><td><input type="text" name="t5" value=""></td>
</tr>
<tr>
    <td><input type="submit" name="b1" value="add"></td>
    <td><input type="submit" name="b1" value="update"></td>
    <td><input type="submit" name="b1" value="display"></td>
    <td><input type="submit" name="b1" value="delete"></td>
</tr>



        </table>
    </form>
    <?php
    if(isset($_POST['b1'])){
        $Emp_id=$_POST['t1'];
        $Emp_name=$_POST['t2'];
        $Emp_email=$_POST['t3'];
        $Mobile_no=$_POST['t4'];
        $Emp_Department=$_POST['t5'];
        echo "data inserted succesfully";
    }
    if(isset($_POST['b2'])){
        echo "data update succesfully";
    }
    if(isset($_POST['b3'])){
        echo "data delet succesfully";
    }

    if(isset($_POST['b4'])){
        echo "data disply succesfully";
    }


    
</body>
   

