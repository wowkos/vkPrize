<?php
if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
}
else {
    require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.core.php';
}
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var vkPrize $vkPrize */
$vkPrize = $modx->getService('vkprize', 'vkPrize', $modx->getOption('vkprize_core_path', null,
        $modx->getOption('core_path') . 'components/vkprize/') . 'model/vkprize/'
);
$modx->lexicon->load('vkprize:default');

// handle request
$corePath = $modx->getOption('vkprize_core_path', null, $modx->getOption('core_path') . 'components/vkprize/');
$path = $modx->getOption('processorsPath', $vkPrize->config, $corePath . 'processors/');
$modx->getRequest();

/** @var modConnectorRequest $request */
$request = $modx->request;
$request->handleRequest(array(
    'processors_path' => $path,
    'location' => '',
));