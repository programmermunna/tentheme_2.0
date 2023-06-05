<?php include("common/header.php");
// Downloads files
if (isset($_GET['file_id'])) {
    $file_id = $_GET['file_id'];
    $products = _fetch("products","id=$file_id");
    $d_link = $products['d_link'];
    $d_file = $products['d_file'];
    if($id<1){
        $msg = "Something is error";
        header("location:download.php?msg=$msg");
    }else{
        if(!empty($d_link)){
            header("location:$d_link");
            exit;
        }else{
            // $file = _fetch("products","id=$file_id");   
            $filepath = 'admin/upload/' . $d_file;
            if (file_exists($filepath)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename=' . basename($filepath));
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize('admin/upload/' . $d_file));
                readfile('admin/upload/' . $d_file);
                exit;
            }
        }          
    }
} 
?>
