<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>#6</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <p>Загрузить картинки</p>
    <input type="file" multiple name="pics[]">
    <input type="submit">

</form>
</body>
</html>

<?php

$dir = 'gallery';

$allowedMimes =[
        'image/png',
        'image/jpg',
        'image/gif',
];

if(!empty($_FILES))
    $files = [];

    $upload = $_FILES['pics'];
    foreach ($upload as $key => $name){
        $tmpName = $upload['name'][$key];
        $info = new finfo(FILEINFO_MIME_TYPE);
        $mime = $info->file($tmpName);
        $extension = pathinfo($name, PATHINFO_EXTENSION);

        if(!in_array($mime, $allowedMimes))
            continue;

        $files = [
            'tmpNmae' => $tmpName,
            'destination' => md5($tmpName) . $extension
        ];
    }



?>