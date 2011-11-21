<?php
include_once 'CounterString.php';

if ($_POST['nbr']==null || intval($_POST['nbr'])>100000) {

    echo echoForm();
}
else
{
    header("Content-type: text/plain");
    $cntString = new CounterString();
    echo ($cntString->generate($_POST['nbr']));
}
function echoForm()
{
    if(intval($_POST['nbr'])>100000)
    {
        $message = "Number of chars to high. Maximum is 100000.";
    }
    echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>CounterString</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body>
<div id="container">
    <div><h1>Counterstring</h1></div>
<form action="index.php" method="post">

           <fieldset>
                <legend>Create Counterstring</legend>
                <dl>
                    <dd>After the counterstring is created just use ctrl-a (to select all) and then ctrl-c (to copy). After that it is just to past it into the app you want to test.
                    </dd>
                </dl>
                <dl>
                    <dt><label for="nbr">Number of chars in your counterstring:</label></dt>
                    <dd><input type="text" name="nbr" id="nbr" value="" size="32" maxlength="128"/>'.$message.'</dd>
                </dl>
               <input type="submit" name="submit" id="submit" value="Create string"/>

            </fieldset>
        </form></div>
</body>
</html>
';

}

?>