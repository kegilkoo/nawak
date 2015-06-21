<?php

namespace Drupal\mydashboard\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class MainBlock
 * classe permetant de créer un block
 *
 * @Block(
 *   id = "mainblock",
 *   admin_label = @Translation("main block"),
 * )
 */
class MainBlock extends BlockBase implements BlockPluginInterface{
    /**
     * dans la {@inheritdoc}, permet de builder le block
     * @return array
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
     * dans la {@inheritdoc}, permet de gérer le contenu du block
     * @param $form array
     * @param $form_state FormStateInterface
     * @return $form array
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
     * dans la {@inheritdoc}, permet de gérer le submit du block
     * @param $form array
     * @param $form_state FormStateInterface
     */
    public function blockSubmit($form, FormStateInterface $form_state){
        $this->setConfigurationValue('mydb_settings', $form_state->getValue('mydb_settings'));
    }

    /**
     * dans la {@inheritdoc}, permet de gérer la configuration par défaut du block
     * @return array
     */
    public function defaultConfiguration(){
        $default_config = \Drupal::config('mydashboard.settings');
        return array(
            'mydb_settings' => $default_config->get('mydb.test')
        );
    }


}