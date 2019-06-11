<?php
require('../vendor/autoload.php');
define('SMARTY_DIR', '../vendor/smarty/smarty/libs/');


require_once(SMARTY_DIR . 'Smarty.class.php');

$smarty = new Smarty();
$smarty->template_dir = '/var/www/html/rate/web/templates/';
$smarty->compile_dir = '/var/www/html/rate/web/templates_c/';
$smarty->config_dir = '/var/www/html/rate/web/configs/';
$smarty->cache_dir = '/var/www/html/rate/web/cache/';


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pb = file_get_contents('https://api.privatbank.ua/p24api/pubinfo?exchange&json&coursid=11');
    $data_json = json_decode($pb, true);

    $value = (float) $_POST['value'];
    $currency = (int) $_POST['currency'];
    $inCurrency = (int) $_POST['inCurrency'];

    $value = convert($value, $currency, $inCurrency, $data_json);
    if($value == -1){
        $value = 0;

        $smarty->assign('error', "Даний перевод наразі не готовий");
    }else{

        $smarty->assign('error', "");
    }

    $smarty->assign('data', $data_json);


    $smarty->assign('val', $value);
    $smarty->display('index.tpl');
}else{
    $smarty->assign('val', "0");
    $smarty->display('index.tpl');
}


function convert($value, $currency, $inCurrency, $data_json){
    if($currency == 1 && $inCurrency == 2){
        $value = $value / (float) $data_json[0]["buy"];
    }else if($currency == 2 && $inCurrency == 1){
        $value = $value * (float) $data_json[0]["sale"];
    }else if($currency == 1 && $inCurrency == 3){
        $value = $value / (float) $data_json[1]["buy"];
    }else if($currency == 3 && $inCurrency == 1){
        $value = $value * (float) $data_json[1]["sale"];
    }else if($currency == 1 && $inCurrency == 4){
        $value = $value / (float) $data_json[2]["buy"];
    }else if($currency == 4 && $inCurrency == 1){
        $value = $value * (float) $data_json[2]["sale"];
    }else{
        $value = -1;
    }

    return $value;

}