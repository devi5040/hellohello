<?php
if (isset($_POST['submit'])) {
    $ua = $_SERVER['REMOTE_ADDR'];
    echo ($ua);
}
