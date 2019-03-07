<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
/*
 * Create a session variable for the mobile number
 */

$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;

/**
 * Allocate the mobile number session variable to a text box
 */

?>

<!DOCTYPE html>
<html>
    <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
    <head>
        <title>Payment Details</title>      
    </head>
    <ul>
    <li><a href="index.php">Home</a></li>
    </ul>
    <body>
        <div class ="form">
            <form name ="Details" method="post" action="eBus3.php">
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Please Enter Your Payment Details</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" required=" "/></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id="txtEmail" name="txtEmail" value="" required=" " /></td>
                        </tr>
                        
                        <tr>
                            <td>Pin</td>
                            <td><input type="password" pattern="[0-9]{4}" id="txtPassword" name="txtPassword" value="" autocomplete="off" required=" "/></td>
                        </tr>
                        <tr>
                            <td><input type="hidden" id ="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /></td>
                        </tr>
                    </table>
                </center>
                <center>
                    <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
                </center>
            
            
            
            </form>
        </div>
    </body>
</html>


