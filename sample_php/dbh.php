<?php

$conn = mysqli_connect("localhost", "root", "anfield", "login");

if (!$conn) {
 die ("connection failed: ".mysqli_connect_error());
 }
