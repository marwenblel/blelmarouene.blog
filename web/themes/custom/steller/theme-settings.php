<?php
use Drupal\file\FileInterface;
use Drupal\Core\Url;
use Drupal\Core\DrupalKernel;
/**
 * Implements hook_form_system_theme_settings_alter() for Steller theme settings.
 */
function steller_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state) {
    // Add a text field for 'full name'.
    $form['full_name'] = [
        '#type' => 'textfield',
        '#title' => t('Full name'),
        '#default_value' => \Drupal::config('steller.settings')->get('full_name'),
        '#description' => t('Enter the first full name to display in the theme.'),
    ];

    // Add a text field for 'what you do'.
    $form['what_you_do'] = [
        '#type' => 'textfield',
        '#title' => t('What you do'),
        '#default_value' => \Drupal::config('steller.settings')->get('what_you_do'),
        '#description' => t('Enter the job to display in the theme.'),
    ];

    // Add a managed file field for the CV PDF upload.
    $form['cv_pdf'] = [
        '#type' => 'managed_file',
        '#title' => t('CV PDF'),
        '#description' => t('Upload your CV in PDF format.'),
        '#default_value' => \Drupal::config('steller.settings')->get('cv_pdf'), // If a file has been uploaded, it will be the default value.
        '#upload_location' => 'public://cv_uploads/', // Path where the file will be stored.
        '#file_extensions' => 'pdf',
        '#required' => FALSE, // Set to TRUE if you want the file to be mandatory.
        '#upload_validators' => [
            'file_validate_extensions' => ['pdf'],
        ],
        '#weight' => 10, // Optional: adjust the weight of the field in the form.
    ];
}