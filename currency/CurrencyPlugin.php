<?php
namespace Craft;

class CurrencyPlugin extends BasePlugin
{
    public function getName()
    {
         return Craft::t('Currency');
    }

    public function getVersion()
    {
        return '1.0';
    }

    public function getDeveloper()
    {
        return 'Mike Pierce';
    }

    public function getDeveloperUrl()
    {
        return 'http://someoneandsons.net';
    }
    
    protected function defineSettings()
    {
        return array(
            'accessKey' => array(AttributeType::String, 'required' => true, 'default' => ''),
            'https' => array(AttributeType::Bool, 'default' => ''),
        );
    }

    public function getSettingsHtml()
    {
        return craft()->templates->render('currency/_settings', array(
            'settings' => $this->getSettings()
        ));
    }
}
