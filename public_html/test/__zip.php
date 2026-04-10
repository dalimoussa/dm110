<?php

if ($_POST['code'] == 'start2012') {

exec('cd ../; sh ./zip.sh &', $ret);

}

?><html>
<body>
<form action="?" method="post">
<input type="text" name="code" value="">
<input type="submit" value="zip!">
</form>
</body>
</html>