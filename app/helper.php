<?php

function flash($message,$level = "")
{
    $flash = app('App\Http\Flash');
    return $flash->info($message,$level);
}
function EnFa($value,$to = ""){
    $en = array("0","1","2","3","4","5","6","7","8","9");
    $fa = array("۰","۱","۲","۳","۴","۵","۶","۷","۸","۹");
    if ($to == "fa")
        return str_replace($en, $fa, $value);
    if ($to == "en")
        return str_replace($fa, $en, $value);
}
function redirectCustomize($to,$jsRedirect = false){
    if ($jsRedirect == true){
        ?><script>window.location = '<?= $to ?>';</script><?php
    }
    else{
        header('Location: '.$to);
    }
}
?>
