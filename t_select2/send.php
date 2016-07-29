<?php
header("Content-type: text/plain; charset=UTF-8");
$data = [];
$inputData = $_GET['inputData'];
$setVal = $_GET['setVal'];
//file_put_contents('../logs/test.log', date("Y/m/d H:i:s")."：inputData = ".$inputData." / setVal = ".$setVal."\n",FILE_APPEND);

if ($inputData!==""){
    $pattern = '/^\d/';
    if(preg_match($pattern, $inputData)){
        $data[0]['id'] = "1";
        $data[0]['text'] = "いち";
        $data[1]['id'] = "2";
        $data[1]['text'] = "に";
    }else{
        $data[0]['id'] = "101";
        $data[0]['text'] = "佐藤";
        $data[1]['id'] = "102";
        $data[1]['text'] = "鈴木";
    }
}else if ($setVal!==""){
    $data[0]['id'] = "99";
    $data[0]['text'] = "デフォルト値";
}

$reData = json_encode($data);
//file_put_contents('../logs/test.log', date("Y/m/d H:i:s")."：reData = ".$reData."\n",FILE_APPEND);
echo $reData;