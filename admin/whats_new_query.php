<!-- Start Add new Post PHP SCRIPT -->
<?php
session_start();
include '../includes/db.php';
    if(isset($_POST['submit']))
    {
        $content=$_POST['content'];
             // name of the uploaded file
            $filename = $_FILES['myfile']['name'];

            // destination of the file on the server
            $destination = '../uploads/' . $filename;
            // get the file extension
            $extension = pathinfo($filename, PATHINFO_EXTENSION);

            // the physical file on a temporary uploads directory on the server
            $file = $_FILES['myfile']['tmp_name'];
            $size = $_FILES['myfile']['size'];

            if (!in_array($extension, ['pdf'])) {
                $_SESSION['status']="You file extension must be .pdf or .docx";
                        header("Location: whats_new.php");
            } elseif ($_FILES['myfile']['size'] > 2000000) { // file shouldn't be larger than 2Megabyte
                $_SESSION['status']="File too large!";
                        header("Location: whats_new.php");
            } else {
                // move the uploaded (temporary) file to the specified destination
                if (move_uploaded_file($file, $destination)) {
                    $sql = "INSERT INTO blog_whats_new (`content`, `pdf`, `pdf_name`) VALUES ('$content', '$size', '$filename')";
                    if (mysqli_query($con, $sql)) {
                        $_SESSION['status']="Post has been Added Successfully";
                        header("Location: whats_new.php");
                    }
                } else {
                    $_SESSION['status']=mysqli_error();
                    header("Location: whats_new.php");
                }
            }

        // $result = mysqli_query($con,"INSERT INTO blog_whats_new (`content`,`url`) VALUES ('$content', '$url')");

        // if($result)
        // {
        //     $_SESSION['status']="Post has been Added Successfully";
        //     header("Location: whats_new.php");
        // }
        // else{
        //     $_SESSION['status']=mysqli_error();
        //     header("Location: whats_new.php");
        // }
    }
?>
<!-- End Add new Post PHP SCRIPT -->
<!-- Start Edit Post PHP SCRIPT -->
<?php
    if(isset($_POST['edit']))
    {
        // $id=$_POST['id'];
        // $content=$_POST['content'];
        // $url=$_POST['url'];

        // $result = mysqli_query($con,"UPDATE `blog_whats_new` SET `content` = '$content', `url` = '$url' WHERE `id` = '$id';");

        // if($result)
        // {
        //     $_SESSION['status']="Edited Succesfully!";
        //     header("Location: whats_new.php");
        // }
        // else{
        //     $_SESSION['status']=mysqli_error();
        //     header("Location: whats_new.php");
        // }
    }
?>
<!-- End Edit Post PHP SCRIPT -->
<?php
    // Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM blog_whats_new WHERE id=$id";
    $result = mysqli_query($con, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = '../uploads/' . $file['pdf_name'];
    if (file_exists($filepath)) {
        // header('Content-Description: File Transfer');
        // header('Content-Type: application/octet-stream');
        // header('Content-Disposition: attachment; filename=' . basename($filepath));
        // header('Expires: 0');
        // header('Cache-Control: must-revalidate');
        // header('Pragma: public');
        // header('Content-Length: ' . filesize('../uploads/' . $file['pdf_name']));
        // readfile('../uploads/' . $file['pdf_name']);
        header("Location:$filepath");
        exit;
        
    // header($filepath);
    }

}
?>