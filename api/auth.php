<?php
function authorize() {
    if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
        return false;
    } else {
        return true;
    }
}
?>