<?php 

  session_start();

  if (!isset($_SESSION['login'])) {
      header("Location: ../php/login.php");
      exit;
  }

require 'php/functions.php' ;

    $id = $_GET["id"] ;

    if ( hapus($id) > 0 ) {
        echo "<script>
                alert('Data Berhasil Dihapus!') ;
                document.location.href = '../php/admin.php' ;
              </script>
             " ;
    } else {
        echo "<script>
                alert('Data Gagal Dihapus!') ;
                document.location.href = '../php/admin.php' ;
              </script>
             " ;
    }
?>