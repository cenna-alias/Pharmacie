<?php
$result=0;
if(isset($_POST["btn_add"]))
{
	$n1=$_POST["txt_num1"];
	$n2=$_POST["txt_num2"];
	$result=$n1+$n2;
}
if(isset($_POST["btn_sub"]))
{
	$n1=$_POST["txt_num1"];
	$n2=$_POST["txt_num2"];
	$result=$n1-$n2;
}
if(isset($_POST["btn_mul"]))
{
	$n1=$_POST["txt_num1"];
	$n2=$_POST["txt_num2"];
	$result=$n1*$n2;
}
if(isset($_POST["btn_div"]))
{
	$n1=$_POST["txt_num1"];
	$n2=$_POST["txt_num2"];
	$result=$n1/$n2;
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table border="1">
    <tr>
      <td>Number1</td>
      <td><label for="txt_num1"></label>
      <input type="text" name="txt_num1" id="txt_num1" /></td>
    </tr>
    <tr>
      <td>Number2</td>
      <td><label for="txt_num2"></label>
      <input type="text" name="txt_num2" id="txt_num2" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_add" id="btn_add" value="+" />
        <input type="submit" name="btn_sub" id="btn_sub" value="-" />
        <input type="submit" name="btn_mul" id="btn_mul" value="*" />
        <input type="submit" name="btn_div" id="btn_div" value="/" />
      </div></td>
    </tr>
    <tr>
      <td>Result</td>
      <td><?php echo $result; ?></td>
    </tr>
  </table>
  
</form>
</body>
</html>