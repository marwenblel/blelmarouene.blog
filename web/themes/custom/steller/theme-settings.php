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
        '#upload_location' => 'public://steller/cv_uploads/', // Path where the file will be stored.
        '#file_extensions' => 'pdf',
        '#required' => FALSE, // Set to TRUE if you want the file to be mandatory.
        '#upload_validators' => [
            'file_validate_extensions' => ['pdf'],
        ],
        '#weight' => 10, // Optional: adjust the weight of the field in the form.
    ];

    // Add a managed file field for the CV PDF upload.
    $form['header_img'] = [
        '#type' => 'managed_file',
        '#title' => t('CV PDF'),
        '#description' => t('Upload your CV in PDF format.'),
        '#default_value' => \Drupal::config('steller.settings')->get('header_img'), // If a file has been uploaded, it will be the default value.
        '#upload_location' => 'public://steller/images/', // Path where the file will be stored.
        '#file_extensions' => 'svg',
        '#required' => FALSE, // Set to TRUE if you want the file to be mandatory.
        '#upload_validators' => [
            'file_validate_extensions' => ['svg'],
        ],
        '#weight' => 10, // Optional: adjust the weight of the field in the form.
    ];


    // Add a text field for 'full name'.
    $form['happy_clients'] = [
        '#type'          => 'number',
        '#title'         => t('Happy clients'),
        '#default_value' => \Drupal::config('steller.settings')->get('happy_clients'),
        '#description'   => t('Enter the number of happy clients.'),
    ];

    // Add a text field for 'what you do'.
    $form['projects_completed'] = [
        '#type'          => 'number',
        '#title'         => t('Projects completed'),
        '#default_value' => \Drupal::config('steller.settings')->get('projects_completed'),
        '#description'   => t('Enter the projects completed in the theme.'),
    ];
    // Add a text field for 'full name'.
    $form['awards_won'] = [
        '#type'          => 'number',
        '#title'         => t('Awards won'),
        '#default_value' => \Drupal::config('steller.settings')->get('awards_won'),
        '#description'   => t('Enter the awards won in the theme.'),
    ];

    $form['resume'] = [
        '#type' => 'textarea',
        '#title' => t('Resume'),
        '#default_value' => \Drupal::config('steller.settings')->get('resume'),
        '#description' => t('Enter a detailed resume. This field supports plain text.'),
        '#rows' => 5, // Number of visible rows.
        '#required' => FALSE, // Set to TRUE if you want this field to be mandatory.
    ];
}