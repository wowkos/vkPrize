<?php

class vkPrizeOfficeItemCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'vkPrizeItem';
    public $classKey = 'vkPrizeItem';
    public $languageTopics = array('vkprize');
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $name = trim($this->getProperty('name'));
        if (empty($name)) {
            $this->modx->error->addField('name', $this->modx->lexicon('vkprize_item_err_name'));
        } elseif ($this->modx->getCount($this->classKey, array('name' => $name))) {
            $this->modx->error->addField('name', $this->modx->lexicon('vkprize_item_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'vkPrizeOfficeItemCreateProcessor';