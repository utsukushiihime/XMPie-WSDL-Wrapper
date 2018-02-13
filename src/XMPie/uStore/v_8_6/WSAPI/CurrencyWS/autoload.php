<?php


 function autoload_81f560d7e7e648c0253e5d60c6160124($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CurrencyWS\CurrencyWS' => __DIR__ .'/CurrencyWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CurrencyWS\GetCurrency' => __DIR__ .'/GetCurrency.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CurrencyWS\GetCurrencyResponse' => __DIR__ .'/GetCurrencyResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CurrencyWS\CurrencyInfo' => __DIR__ .'/CurrencyInfo.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CurrencyWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CurrencyWS\GetCurrencyByAbbreviation' => __DIR__ .'/GetCurrencyByAbbreviation.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CurrencyWS\GetCurrencyByAbbreviationResponse' => __DIR__ .'/GetCurrencyByAbbreviationResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_81f560d7e7e648c0253e5d60c6160124');

// Do nothing. The rest is just leftovers from the code generation.
{
}
