<?php

namespace Drupal\mydashboard\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Hello' Block
 *
 * @Block(
 *   id = "mainblock",
 *   admin_label = @Translation("main block"),
 * )
 */
class MainBlock extends BlockBase implements BlockPluginInterface{
    /**
     * {@inheritdoc}
     */
    public function build() {
        $config = $this->getConfiguration();

        if(!empty($config['mydb_settings'])) $name = $config['mydb_settings'];
        else $name = $this->t('nothing');

        return array(
            '#markup' => $this->t('Test du contenu de la var : @var',
                array(
                    '@var' => $name
                    )
            )
        );

    }

    /**
     * {@inheritdoc}
     */
    public function blockForm($form, FormStateInterface $form_state){
        $form = parent::blockForm($form, $form_state);

        $config = $this->getConfiguration();

        $form['mydb_settings'] = array(
          '#type' => 'textfield',
          '#title' => $this->t('Who'),
          '#description' => $this->t('Who do you want to say hello to?'),
          '#default_value' => isset($config['mydb_settings']) ? $config['mydb_settings'] : 'nothing',
        );

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function blockSubmit($form, FormStateInterface $form_state){
        $this->setConfigurationValue('mydb_settings', $form_state->getValue('mydb_settings'));
    }

    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration(){
       $default_config = \Drupal::config('mydashboard.settings');
        return array(
            'mydb_settings' => $default_config->get('mydb.test')
        );
    }


}