<!-- enctype="multipart/form-data" is mandatory to be able to upload a file -->
<form action="" method="POST" enctype="multipart/form-data">

    Select the file :
    <input type="file" name="myFile">

    <input type="submit" name="submitBtn" value="Send the file">
</form>

<?php

if (isset($_POST['submitBtn'])) {
    /*
        The uploaded files are places in a temporary folder on the server.
        These files must be saved/moved to the desired location/folder.
    */

    // echo '<pre>';
    // var_dump($_FILES);
    // echo '</pre>';

    // Is there some errors ?
    if ($_FILES['myFile']['error'] != UPLOAD_ERR_OK) {
        echo 'Error during upload';
        die();
    }

    // Limit the file type
    $extFoundInArray = array_search($_FILES['myFile']['type'], array(
        'jpg' => 'image/jpeg',
        'png' => 'image/png',
        'gif' => 'image/gif'
    ));

    if ($extFoundInArray == false) {
        echo 'File must be an image !';
        die();
    } else {
        $fileName = substr($_FILES['myFile']['name'], 0, strpos($_FILES['myFile']['name'], '.'));
        $nbFile = 0;

        do {
            // uploads/steven1.jpg
            $destinationPath = 'uploads/' . $fileName . $nbFile . '.' . $extFoundInArray;
            $nbFile++;
        } while (file_exists($destinationPath));

        // Try to move/save permanently the file
        if (move_uploaded_file($_FILES['myFile']['tmp_name'], $destinationPath)) {
            echo 'File was saved properly';
            $query = "INSERT INTO directors(name, nationality, picture)
            VALUES('my director', 'french', '$destinationPath');";
        } else
            echo 'Problem saving the file';
    }
}

?>