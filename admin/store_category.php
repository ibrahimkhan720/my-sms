<?php
    require 'config/dbc.php';

    $date = $_POST['create_date'];
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $status = 'DEACTIVE';
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];

    mysqli_query($connection, "INSERT INTO category(create_date, title, slug, status, meta_description, meta_keyword)
                VALUES('$date', '$title', '$slug', '$status', '$meta_description', '$meta_keyword')") or die(mysqli_error($connection));

    header("Location:category.php");                
   
?>