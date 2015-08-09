<?php
function getFileListArray($dir){
    return array_diff(scandir($dir), ['.', '..']);
}

function updImgLsInDB(){
    $link = mysqli_connect('localhost', 'root', '', 'test'); //return obj (link)
    $res = mysqli_query($link, "DELETE FROM les7_tb_imgs");
    if($res):
        $imgList = getFileListArray(__DIR__ . '/images/');
        if(!empty($imgList)):
            foreach($imgList as $imgFile):
                $res = mysqli_query($link, "INSERT INTO les7_tb_imgs (FileName, ImageName, ViewCount) VALUES ('" . $imgFile ."', 'Name', '0')");
            endforeach;
        endif;
    endif;
    mysqli_close($link);
    return $res;
}

function getDBlink(){
    return mysqli_connect('localhost', 'root', '', 'test');
}


function getImageInfoFromDB(){
    $link = getDBlink();
    $result = mysqli_query($link, "SELECT FileName, ImageName, ViewCount FROM les7_tb_imgs ORDER BY ViewCount DESC");
    while($row = mysqli_fetch_assoc($result)){
        $imgInfo[] = $row;
    }
    mysqli_close($link);
    return $imgInfo;
}


function getImgFileNameFromDB(){
    $link = getDBlink();
    $result = mysqli_query($link, "SELECT FileName FROM les7_tb_imgs");
    while ($row = mysqli_fetch_array($result)){
       $imgFileNames[] = $row['FileName'];
    }
    mysqli_close($link);
    return $imgFileNames;
}


function incImgViewsInDB($fileName){
    $link = getDBlink();
    $result = mysqli_query($link, "UPDATE les7_tb_imgs SET ViewCount = ViewCount +1 WHERE FileName = '" .$fileName."'");
    mysqli_close($link);
    return $result;
}

function addNewImgToDB($fileName, $imageName){
    $link = getDBlink();
    $fileName = mysqli_real_escape_string($link, $fileName);
    $imageName = mysqli_real_escape_string($link, $imageName);
    $result = mysqli_query($link, "INSERT INTO les7_tb_imgs (FileName, ImageName, ViewCount) VALUES ('" .$fileName. "', '" .$imageName. "', 0)");
    mysqli_close($link);
    return $result;
}