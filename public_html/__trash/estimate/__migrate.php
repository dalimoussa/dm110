<?php

if ($_POST['code'] == 'start2012') {

$res = exec('cd ../../; sh ./migrate.sh &', $ret);
var_dump($res);
var_dump($ret);

}

?><html>
<body>
<form action="?" method="post">
<input type="text" name="code" value="">
<input type="submit" value="migrate!">
</form>
</body>
</html>