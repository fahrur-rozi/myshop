<?php 

class database{
    //konfigurasi koneksi
    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "mini_projek";
    var $koneksi ="";

    function __construct() {
        $this->koneksi = mysqli_connect($this->host,$this->uname,$this->pass,$this->db); //setting koneksi
        if (mysqli_connect_errno()){
            echo "koneksi database gagal : " . mysqli_connect_error();
        }
        else{

            echo "koneksi berhasil";
        }
    }

    function view($sql) {
        $data = mysqli_query($this->koneksi,$sql);
        if($data->num_rows==0){
            return false;
        } else {
            while($row = mysqli_fetch_array($data)){ 
                $hasil[] = $row;
            }
        }
        return $hasil;
    }

    function insert($sql) {
        $data = mysqli_query($this->koneksi,$sql);
        if ($data) {return true;} else {return false;}
    }

}

?>