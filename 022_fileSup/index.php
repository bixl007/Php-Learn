<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <style>
            .upload-form {
                margin: 20px;
            }
            .upload-label {
                font-weight: bold;
            }
            .upload-input {
                margin-top: 10px;
            }
            .upload-button {
                margin-top: 10px;
                padding: 5px 10px;
                background-color: #4CAF50;
                color: white;
                border: none;
                cursor: pointer;
            }
            .upload-button:hover {
                background-color: #45a049;
            }
        </style>
        <form action="" method="post" class="upload-form" enctype="multipart/form-data">
            <label for="file" class="upload-label">Upload file:</label>
            <input type="file" name="file" id="file" class="upload-input">
            <br>
            <input type="submit" name="submit" value="Upload" class="upload-button">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST["submit"])) {
            $filename = $_FILES["file"]["name"];
            $filetype = $_FILES["file"]["type"];
            $filesize = $_FILES["file"]["size"];
            $fileerror = $_FILES["file"]["error"];
            $filetmpname = $_FILES["file"]["tmp_name"];
            echo "File name: $filename <br>";
            echo "File type: $filetype <br>";
            echo "File size: $filesize <br>";
            echo "File error: $fileerror <br>";
            echo "File tmp name: $filetmpname <br>";
            $fileExt = explode('.', $filename);
            $fileExt = end($fileExt);
            echo "File extension: $fileExt <br>";
            if(!is_dir("uploads")) { // Checks whether the same name dir is created or not
                if(mkdir("uploads", 0777, true)) {
                    echo "Dir created successfully";
                } else {
                    echo "Dir Not created";
                }
            }
            if ($filesize > 10000000) {
                echo "File size exceed the limits";
            }
            $allowedTypes = ['image/jpeg', 'image/jpg', 'application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
            if (!in_array($filetype, $allowedTypes)) {
                echo "Invalid file type. Only PDF, Word, JPEG, and JPG files are allowed.";
                exit;
            }

            if (move_uploaded_file($filetmpname, "uploads/{$filename}")) {
                echo "File uploaded";
            } else {
                echo "Failed To upload";
            }
        }
    }
    ?>
</body>
</html>