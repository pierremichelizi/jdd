<?php

$session = null;
function session(): ?Session
{
    global $session;
    return ($session = $session ?? new Session());
}

function debug(...$params)
{
    echo "<pre>";
    var_dump(...$params);
    echo "</pre>";
}

function dd(...$params)
{
    var_dump(...$params);
    die();
}


function uploadFile($from, $to)
{
    return move_uploaded_file($from, $to);
}

function fileToBase64($path)
{
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    return 'data:image/' . $type . ';base64,' . base64_encode($data);
}


function sanitizeFilename($filename){
    return preg_replace(["/(\/)+/", "/[\\\]+/"], "/", preg_replace(["/(\/)+/", "/[\\\]+/"], "/", $filename));
}


$countries =[];
$cities=[];
function getCountries(){
    global $countries;
    if(empty($countries[0])){
        $countries=require(BASE_PATH."/config/countries.php");
    }
    return $countries;
}

function getCities(){
    global $cities;
    if(empty($cities[0])){
        $cities=require(BASE_PATH."/config/cities.php");
    }
    return $cities;
}

    function getPaginationButtons($page, $total_pages, $url="/institutions"){
    $buttons=[];
    for($i=1; $i<$total_pages;  $i++){
        $ranger=$page == 1 || $page === $total_pages?  2 : 1;
        if($i<($page - $ranger) ){
            if(empty($buttons["prev"])){
                $buttons["prev"]=[
                    "id"=>$i,
                    "name"=>t('PREC'),
                    "url"=>$url."?page=".($page-($ranger ))
                ] ;
            }else{
                continue;
            }
           
        }else if($i>($page + $ranger)){
            if(empty($buttons["next"])){
                $buttons["next"]=[
                    "id"=>$i,
                    "name"=>t('SUIV'),
                    "url"=>$url."?page=".($page+($ranger ))
                ] ;
            }else{
                continue;
            }
            
        }else{
            $buttons[]=[
                "id"=>$i,
                "name"=>$i,
                "url"=>$url."?page=".$i
            ] ;
        }
        
    }

    return $buttons;
}
function addMinuteToTime($minutes=30, $time="now"){
    $time = new DateTime($time);
    $time->add(new DateInterval('PT' . $minutes . 'M'));
    return $time;
}

function  uuid($data = null)
    {
        // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
        $data = $data ?? random_bytes(16);
        assert(strlen($data) == 16);

        // Set version to 0100
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        // Set bits 6-7 to 10
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        // Output the 36 character UUID.
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }