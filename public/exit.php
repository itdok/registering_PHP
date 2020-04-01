<?php
setcookie('user', $user['name'], time() - 360, "/");
echo "Вы успешно вышли - переадресация через 5 сек" .
    "<meta http-equiv='refresh' content='5; url=http://registeringphp/'>";