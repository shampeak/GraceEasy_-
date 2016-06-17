<?php
/*
 |------------------------------------------------
 | 类文件和配置文件注册
 |------------------------------------------------
 */

return [

        'smartyFile'    => APPROOT.'Library/Smarty/Smarty.class.php',
        'TemplateDir'   => APPROOT.'Views/',
        'ConfigDir'     => APPROOT.'Views/SmartyConfigs/',
        'CompileDir'    => APPROOT.'Cache/SmartyTemplates_c/',
        'CacheDir'      => APPROOT.'Cache/SmartyCache/',
        'debugging'     => true,
        'caching'       => false,
        'cache_lifetime'=> 120

];

