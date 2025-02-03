<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $uploadDir = 'f/';
    $uploadFile = $uploadDir . basename($_FILES['file']['name']);

    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
        $fileUrl = 'https://' . $_SERVER['HTTP_HOST'] . '/' . $uploadFile;
        echo "文件上传成功，访问链接为：$fileUrl";
    } else {
        echo "发生错误，文件未成功上传，请重试";
    }
} else {
    echo "发生错误，请选择正确的文件";
}
?>