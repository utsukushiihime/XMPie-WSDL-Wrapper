<?php


 function autoload_e4396280d6a7a46ee448adce07aafd4c($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ProductInventoryWS\ProductInventoryWS' => __DIR__ .'/ProductInventoryWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ProductInventoryWS\ReadInventoryLevel' => __DIR__ .'/ReadInventoryLevel.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ProductInventoryWS\ReadInventoryLevelResponse' => __DIR__ .'/ReadInventoryLevelResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ProductInventoryWS\ReadInventoryLevelByExternalID' => __DIR__ .'/ReadInventoryLevelByExternalID.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ProductInventoryWS\ReadInventoryLevelByExternalIDResponse' => __DIR__ .'/ReadInventoryLevelByExternalIDResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ProductInventoryWS\Update' => __DIR__ .'/Update.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ProductInventoryWS\UpdateResponse' => __DIR__ .'/UpdateResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ProductInventoryWS\UpdateByExternalID' => __DIR__ .'/UpdateByExternalID.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ProductInventoryWS\UpdateByExternalIDResponse' => __DIR__ .'/UpdateByExternalIDResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ProductInventoryWS\Increase' => __DIR__ .'/Increase.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ProductInventoryWS\IncreaseResponse' => __DIR__ .'/IncreaseResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ProductInventoryWS\IncreaseByExternalID' => __DIR__ .'/IncreaseByExternalID.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ProductInventoryWS\IncreaseByExternalIDResponse' => __DIR__ .'/IncreaseByExternalIDResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ProductInventoryWS\Decrease' => __DIR__ .'/Decrease.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ProductInventoryWS\DecreaseResponse' => __DIR__ .'/DecreaseResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ProductInventoryWS\DecreaseByExternalID' => __DIR__ .'/DecreaseByExternalID.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ProductInventoryWS\DecreaseByExternalIDResponse' => __DIR__ .'/DecreaseByExternalIDResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_e4396280d6a7a46ee448adce07aafd4c');

// Do nothing. The rest is just leftovers from the code generation.
{
}
