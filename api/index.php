<?php
/**
 * ================
 * @Author:        css
 * @Parameter:     
 * @DataTime:      2019-08-06
 * @Return:        
 * @Notes:         入口文件。 为了安全，在权限上设定网站目录为只读，并锁死该index.php文件，防止篡改
 * @ErrorReason:   
 * ================
 */
    //网站根目录
    define('DOCROOT', str_replace("\\", '/', realpath(dirname(__FILE__))).'/');
    //
    echo DOCROOT;