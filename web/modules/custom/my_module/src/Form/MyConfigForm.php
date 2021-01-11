<?php

namespace Drupal\my_module\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class MyConfigForm extends ConfigFormBase {

    public function getFormId()
    {
        return 'my_module_config_form';
    }

    protected function getEditableConfigNames()
    {
        return [
            'my_module.settings'
        ];
    }

    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $config = $this->config('my_module.settings');

        $form['text_info'] = [
            #'#type' => 'textarea',
            '#type' => 'text_format',
            '#title' => 'Sell estate information',
            #'#default_value' => $config->get('text_info'),
            '#default_value' => $config->get('text_info')['value'],
            '#required' => TRUE,

        ];
        
        $form['submit'] = [
            '#type' => 'submit',
            '#value' => 'Edit',
        ];

        return $form;
    }

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $config = $this->config('my_module.settings');
        $config->set('text_info', $form_state->getValue('text_info'));
        $config->save();

        //Invalidate cache
        \Drupal\Core\Cache\Cache::invalidateTags(array('MY_CUSTOM_UNIQUE_TAG'));

        return parent::submitForm($form, $form_state);
    }
}