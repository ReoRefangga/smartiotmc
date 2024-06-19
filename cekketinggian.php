<?php
    $konek = mysqli_connect("localhost", "root", "", "dbmonitoring");

    $sql = mysqli_query($konek, "select * from sensor order by id desc");

    $data = mysqli_fetch_array($sql);
    $ketinggian = $data['ketinggian'];

    if ( $ketinggian == "") $ketinggian = 0;

    echo $ketinggian;
?>