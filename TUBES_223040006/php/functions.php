<?php 
    function koneksi() {
        return mysqli_connect("localhost", "root", "", "pw_tubes223040006");
    }

    function query($query) {
        $conn = koneksi() ;

        $result = mysqli_query($conn, "$query");

        $rows = [] ;

        // jika hasilnya hanya 1 data 
        if(mysqli_num_rows($result) == 1) {
            return mysqli_fetch_assoc($result) ;
        }

        while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
        }

        return $rows ;
    }

    function tambah($data) {
    // ambil data dari tiap elemen dalam form
    $conn = koneksi();
    // ambil data dari tiap elemen dalam form
    $img = htmlspecialchars($data["img"]) ;
    $name = htmlspecialchars($data["name"]) ;
    $harga = htmlspecialchars($data["harga"]) ;
    $alamat = htmlspecialchars($data["alamat"]) ;
    $info = htmlspecialchars($data["info"]) ;
    
    // query insert data
    $query = "INSERT INTO tiket VALUES (null, '$img', '$name', '$harga', '$alamat', '$info')";
  mysqli_query($conn, $query);


        return mysqli_affected_rows($conn) ;

    }

    function hapus($id) {
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM tiket WHERE id = $id") or die(mysqli_error($conn)) ;
        return mysqli_affected_rows($conn) ; 
    }

    function ubah($data)
    {
        // ambil data dari tiap elemen dalam form
        $conn = koneksi();
        // ambil data dari tiap elemen dalam form
        $id = $data["id"] ;
        $img = htmlspecialchars($data["img"]) ;
        $name = htmlspecialchars($data["name"]) ;
        $harga = htmlspecialchars($data["harga"]) ;
        $alamat = htmlspecialchars($data["alamat"]) ;
        $info = htmlspecialchars($data["info"]) ;

        $query = "UPDATE tiket SET
                     img = '$img',
                     name = '$name',
                     harga = '$harga' ,
                     alamat = '$alamat',
                     info = '$info'
                     WHERE id = $id
                  ";
        mysqli_query($conn, $query) or die(mysqli_error($conn)) ;

        echo mysqli_error($conn);

        return mysqli_affected_rows($conn);
    }

    function cari($keyword) 
    {
        $conn =  koneksi();

        $query = "SELECT * FROM tiket WHERE 
                    name LIKE '%$keyword%' OR
                    harga LIKE '%$keyword%' OR
                    alamat LIKE '%$keyword%' 
                 " ;

        $result =  mysqli_query($conn, $query);

        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    

    function registrasi($data) {
        global $conn;

        $username = htmlspecialchars(strtolower($data['username'])) ;
        $password1 = mysqli_real_escape_string($data['password1']) ;
        $password2 = mysqli_real_escape_string($data['password2']) ;
        
        // cek konfirmasi password 
        if( $password !== $password2 ){
            echo "<script>
            alert('konfirmasi password tidak sesuai!')
            </script>";
            return false;
        } 
    }
?>