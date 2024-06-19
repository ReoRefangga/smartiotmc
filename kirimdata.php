<?php

    $konek = mysqli_connect("localhost", "root", "", "dbmonitoring");

    $ketinggian = $_GET['ketinggian'];
    $kekeruhan = $_GET['kekeruhan'];
    $nutrisi = $_GET['nutrisi'];    

    mysqli_query($konek, "ALTER TABLE sensor AUTO_INCREMENT=1");
    $simpan = mysqli_query ($konek, "insert into sensor(ketinggian, kekeruhan, nutrisi)values('$ketinggian', '$kekeruhan', '$nutrisi')");

    if ($simpan)
        echo "Berhasil dikirim";
    else
        echo "Gagal dikirim";

?>