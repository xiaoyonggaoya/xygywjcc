<?php
$visitCountFile = 'playtj.txt';
function getVisitCount() {
    global $visitCountFile;
    if (file_exists($visitCountFile)) {
        return file_get_contents($visitCountFile);
    }
    return 0;
}
function increaseVisitCount() {
    global $visitCountFile;
    $visitCount = getVisitCount();
    file_put_contents($visitCountFile, ++$visitCount);
}
increaseVisitCount();
header('Content-Type: application/json');
echo json_encode(['visitCount' => getVisitCount()]);
?>