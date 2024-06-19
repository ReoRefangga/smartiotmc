<?php
    $konek = mysqli_connect("localhost", "root", "", "dbmonitoring");

    $sql = mysqli_query($konek, "select * from sensor order by id desc");

    $data = mysqli_fetch_array($sql);
    $kekeruhan = $data['kekeruhan'];

    if ( $kekeruhan == "") $kekeruhan = 0;

    echo $kekeruhan;
?>