<?php
/**
 * Created by PhpStorm.
 * User: Wowkos
 * Date: 20.10.2017
 * Time: 15:49
 */
require_once dirname(__FILE__).'/build.config.php';
//echo(MODX_CORE_PATH . 'model/modx/modx.class.php');die;
include_once MODX_CORE_PATH . 'model/modx/modx.class.php';
$modx= new modX();
$modx->initialize('mgr');
$modx->loadClass('transport.modPackageBuilder','',false, true);
echo '<pre>'; /* used for nice formatting of log messages */
$modx->setLogLevel(modX::LOG_LEVEL_INFO);
$modx->setLogTarget('ECHO');
$root = dirname(dirname(__FILE__)).'/';
$sources = array(
    'model' => $root.'core/components/vkitray/model/',
    'schema_file' => $root.'core/components/vkitray/model/schema/vkitray.mysql.schema.xml',
);
$manager= $modx->getManager();
$generator= $manager->getGenerator();
if (!is_dir($sources['model'])) { $modx->log(modX::LOG_LEVEL_ERROR,'Model directory not found!'); die(); }
if (!file_exists($sources['schema_file'])) { $modx->log(modX::LOG_LEVEL_ERROR,'Schema file not found!'); die(); }
$generator->parseSchema($sources['schema_file'],$sources['model']);
echo 'Done.';
exit();