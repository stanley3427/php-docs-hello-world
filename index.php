<?php
if (empty($_POST['user']) == True)
{
	echo "<form action=\"#\" method=\"POST\">";
	echo "What do you want to say ? <input type=\"text\" id=\"user\" name=\"user\" autocomplete=\"off\" required autofocus>&nbsp;";
	echo "<input type=\"submit\" >&nbsp;";
	echo "<input type=\"reset\" >";
	echo "</form>";
}
else
{
	if (strtolower($_POST['user']) == "wade")
	{
		echo "<pre>";
		echo phpinfo();
		echo "</pre>";
	}
	else
	{
		echo "<p>";
		echo "You say [".htmlentities($_POST['user'])."]";
		echo "</p>";
	}
	echo "<input type=\"button\" value=\"Back\" onClick=\"history.go(-1)\" autofocus>";
}
?>