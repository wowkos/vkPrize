<?php
/**
 * Created by PhpStorm.
 * User: Wowkos
 * Date: 20.10.2017
 * Time: 14:33
 */

$dood = $modx->getService('vkitray','Vkitray',
    $modx->getOption('doodles.core_path',null,
        $modx->getOption('core_path').'components/vkitray/').'model/vkitray/',$scriptProperties);

if (!($dood instanceof Vkitray)) return '';

/* setup default properties */
$tpl = $modx->getOption('tpl',$scriptProperties,'rowTpl');
$sort = $modx->getOption('sort',$scriptProperties,'name');
$dir = $modx->getOption('dir',$scriptProperties,'ASC');

$output = '';
 
return $output;