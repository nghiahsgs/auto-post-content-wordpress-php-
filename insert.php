
<?php
include("config.php");

$ID='9';
$post_author='1';
$post_date=time();//'';//'2019-12-13 07:42:15';
$post_date_gmt='';//'2019-12-13 07:43:31';

$post_content='hello cac ban hihihi 3';
$post_title='hello cac ban hihihi 3';
$post_excerpt='';
$post_status='publish';

$comment_status='open';
$ping_status='open';
$post_password='';
$post_name='hello-cac-ban-hihihi-3';


$to_ping='';
$pinged='';
$post_modified='';//'2019-12-13 07:42:15';
$post_modified_gmt='';//'2019-12-13 07:42:15';

$post_content_filtered='';
$post_parent='0';
$guid='http://localhost:8080/wordpress-4.9.13/wordpress/?p='.$ID;
$menu_order='0';

$post_type='post';
$post_mime_type='';
$comment_count='0';



$sql = "INSERT INTO `wp_posts`(`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES ('$ID','$post_author','$post_date','$post_date_gmt','$post_content','$post_title','$post_excerpt','$post_status','$comment_status','$ping_status','$post_password','$post_name','$to_ping','$pinged','$post_modified','$post_modified_gmt','$post_content_filtered','$post_parent','$guid','$menu_order','$post_type','$post_mime_type','$comment_count')
";

echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "Add okay r";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();