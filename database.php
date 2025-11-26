<?php
// connect to the database
$connection = mysqli_connect(
    "db",
    "oidoioi",
    "password",
    "oisoioi"
);
if( !$connection ) {
    echo "database connection failed";
    exit();
}
else {
    // echo "database connection is successful";
}
?>