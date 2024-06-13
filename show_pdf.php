<?php
include 'includes/db.php';
    // Show blog_whats_new PDF
    if (isset($_GET['file_id1'])) {
        $id = $_GET['file_id1'];

        // fetch file to download from database
        $sql = "SELECT * FROM blog_whats_new WHERE id=$id";
        $result = mysqli_query($con, $sql);

        $file = mysqli_fetch_assoc($result);
        $filepath = 'uploads/' . $file['pdf_name'];
        if (file_exists($filepath)) {
            header("Location:$filepath");
            exit;
        }
    }
    // Show blog_yojnas PDF
    if (isset($_GET['file_id2'])) {
        $id = $_GET['file_id2'];

        // fetch file to download from database
        $sql = "SELECT * FROM blog_yojnas WHERE id=$id";
        $result = mysqli_query($con, $sql);

        $file = mysqli_fetch_assoc($result);
        $filepath = 'uploads/' . $file['pdf_name'];
        if (file_exists($filepath)) {
            header("Location:$filepath");
            exit;
        }
    }
    // Show blog_latest_news PDF
    if (isset($_GET['file_id3'])) {
        $id = $_GET['file_id3'];
    
        // fetch file to download from database
        $sql = "SELECT * FROM blog_latest_news WHERE id=$id";
        $result = mysqli_query($con, $sql);
    
        $file = mysqli_fetch_assoc($result);
        $filepath = 'uploads/' . $file['pdf_name'];
        if (file_exists($filepath)) {
            header("Location:$filepath");
            exit;
        }
    }
?>