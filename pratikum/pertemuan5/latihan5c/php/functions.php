<?php
    //functions untuk melakukan koneksi ke database
    function koneksi(){
        $conn = mysqli_connect("localhost","root","") or die ("koneksi ke DB gagal");
        mysqli_select_db($conn,"PW_193040164") or die ("database salah!");

        return $conn;
    }
    //function untuk memanggil melakukan query ke database
    function query($sql){
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");
    
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }