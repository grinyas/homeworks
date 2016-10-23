<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>#6</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <p>Загрузить картинки</p>
    <input type="file"  name="pics[]" multiple>
    <p><input type="submit"></p>
</form>
<?php renderGallery('gallery'); ?>

<?php

$galleryDir = 'gallery';

$allowedMimes = [
    'image/png',
    'image/jpg',
    'image/gif',
];

if (!empty($_FILES)) {
    $files = [];
    $upload = $_FILES['pics'];


    foreach ($upload['name'] as $key => $name) {

        $tmpName = $upload['tmp_name'][$key];
        $info = new finfo(FILEINFO_MIME_TYPE);
        $mime = $info->file($tmpName);
        $extension = pathinfo($name, PATHINFO_EXTENSION);

        if (!in_array($mime, $allowedMimes))
            continue;

        $files[] = [
            'tmpName' => $tmpName,
            'destination' => md5($tmpName). "." . $extension
        ];
    }

    saveImages($files);
}

function saveImages(array $images)
{
//    echo "<pre>";
//var_dump($images);
//    echo "</pre>";
    global $galleryDir;

    if (!is_dir($galleryDir)) {
        mkdir($galleryDir);
    }

    $cwd = getcwd();

    chdir($galleryDir);
    foreach ($images as &$image) {
        move_uploaded_file($image['tmpName'], $image['destination']);
    }
    chdir($cwd);
}

function renderGallery($galleryDir)
{
    if (!is_dir($galleryDir)) {
        echo "No image render";
        return;
    }

    $cwd = getcwd();
    chdir($galleryDir);
    $images = glob('*.png');

    foreach ($images as $image) {
        echo "<img src=\"$galleryDir/$image\" width=\"125px\">";
    }
    chdir($cwd);
    unset($images);
}

?>
</body>
</html>
