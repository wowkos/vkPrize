<?php

/**
 * The home manager controller for vkPrize.
 *
 */
class vkPrizeHomeManagerController extends modExtraManagerController
{
    /** @var vkPrize $vkPrize */
    public $vkPrize;


    /**
     *
     */
    public function initialize()
    {
        $path = $this->modx->getOption('vkprize_core_path', null,
                $this->modx->getOption('core_path') . 'components/vkprize/') . 'model/vkprize/';
        $this->vkPrize = $this->modx->getService('vkprize', 'vkPrize', $path);
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return array('vkprize:default');
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('vkprize');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->vkPrize->config['cssUrl'] . 'mgr/main.css');
        $this->addCss($this->vkPrize->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
        $this->addJavascript($this->vkPrize->config['jsUrl'] . 'mgr/vkprize.js');
        $this->addJavascript($this->vkPrize->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->vkPrize->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->vkPrize->config['jsUrl'] . 'mgr/widgets/items.grid.js');
        $this->addJavascript($this->vkPrize->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->vkPrize->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->vkPrize->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        vkPrize.config = ' . json_encode($this->vkPrize->config) . ';
        vkPrize.config.connector_url = "' . $this->vkPrize->config['connectorUrl'] . '";
        Ext.onReady(function() {
            MODx.load({ xtype: "vkprize-page-home"});
        });
        </script>
        ');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        return $this->vkPrize->config['templatesPath'] . 'home.tpl';
    }
}