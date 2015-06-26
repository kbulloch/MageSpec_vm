<?php

// autoload_namespaces.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'phpDocumentor' => array($vendorDir . '/phpdocumentor/reflection-docblock/src'),
    'Prophecy\\' => array($vendorDir . '/phpspec/prophecy/src'),
    'PrettyXml' => array($vendorDir . '/shanethehat/pretty-xml/src'),
    'PhpSpec' => array($vendorDir . '/phpspec/phpspec/src'),
    'MageTest\\PhpSpec\\MagentoExtension' => array($baseDir . '/src', $vendorDir . '/magetest/magento-phpspec-extension/src'),
    'Mage' => array($baseDir . '/app/code/core', $vendorDir . '/magetest/magento-phpspec-extension/vendor/magetest/magento/src/app/code/core'),
    'Diff' => array($vendorDir . '/phpspec/php-diff/lib'),
    'Console' => array($vendorDir . '/magetest/magento-phpspec-extension/vendor/phpspec/phpspec/features/bootstrap'),
    'Bossa\\PhpSpec\\Expect\\' => array($vendorDir . '/bossa/phpspec2-expect'),
    '' => array($baseDir . '/app/code/local', $baseDir . '/app/code/community', $baseDir . '/app/code/core', $baseDir . '/app', $baseDir . '/lib', $vendorDir . '/magetest/magento-phpspec-extension/vendor/magetest/magento/src/app', $vendorDir . '/magetest/magento-phpspec-extension/vendor/magetest/magento/src/lib', $vendorDir . '/magetest/magento-phpspec-extension/vendor/magetest/magento/src/app/code/local', $vendorDir . '/magetest/magento-phpspec-extension/vendor/magetest/magento/src/app/code/community', $vendorDir . '/magetest/magento-phpspec-extension/vendor/magetest/magento/src/app/code/core'),
);