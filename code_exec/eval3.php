<?php
    if (isset($_GET['code'])) {
        $code = $_GET['code'];
        eval("\$ret = strtolower(\"$code\");");
        echo $ret;
    } else {
        echo 'please input code.';
    }
?>