<?php
use Drupal\file\FileInterface;
use Drupal\Core\Url;
use Drupal\Core\DrupalKernel;

/**
 * Implements hook_form_system_theme_settings_alter() for Steller theme settings.
 */
function steller_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state) {
    // Add a fieldset for blogger-related fields
    $form['blogger_fieldset'] = [
        '#type'        => 'details',
        '#title'       => t('Blogger Information'),
        '#collapsible' => TRUE,
        '#collapsed'   => FALSE,
    ];

    // Add a text field for 'full name' inside the fieldset.
    $form['blogger_fieldset']['full_name'] = [
        '#type'          => 'textfield',
        '#title'         => t('Full name'),
        '#default_value' => \Drupal::config('steller.settings')->get('full_name'),
        '#description'   => t('Enter the first full name to display in the theme.'),
    ];

    // Add a text field for 'what you do' inside the fieldset.
    $form['blogger_fieldset']['what_you_do'] = [
        '#type'          => 'textfield',
        '#title'         => t('What you do'),
        '#default_value' => \Drupal::config('steller.settings')->get('what_you_do'),
        '#description'   => t('Enter the job to display in the theme.'),
    ];

    // Add a textarea field for 'Resume' inside the fieldset.
    $form['blogger_fieldset']['resume'] = [
        '#type'          => 'textarea',
        '#title'         => t('Resume'),
        '#default_value' => \Drupal::config('steller.settings')->get('resume'),
        '#description'   => t('Enter a detailed resume. This field supports plain text.'),
        '#rows'          => 5, // Number of visible rows.
        '#required'      => FALSE, // Set to TRUE if you want this field to be mandatory.
    ];

    // Add a managed file field for the 'CV PDF' upload inside the fieldset.
    $form['blogger_fieldset']['cv_pdf'] = [
        '#type'              => 'managed_file',
        '#title'             => t('CV PDF'),
        '#description'       => t('Upload your CV in PDF format.'),
        '#default_value'     => \Drupal::config('steller.settings')->get('cv_pdf'), // If a file has been uploaded, it will be the default value.
        '#upload_location'   => 'public://steller/cv_uploads/', // Path where the file will be stored.
        '#file_extensions'   => 'pdf',
        '#required'          => FALSE, // Set to TRUE if you want the file to be mandatory.
        '#upload_validators' => [
            'file_validate_extensions' => ['pdf'],
        ],
    ];

    // Add a fieldset for related fields
    $form['statistics_fieldset'] = [
        '#type'        => 'details',
        '#title'       => t('Statistics'),
    ];

    // Add a text field for 'happy clients' inside the fieldset.
    $form['statistics_fieldset']['happy_clients'] = [
        '#type'          => 'number',
        '#title'         => t('Happy clients'),
        '#default_value' => \Drupal::config('steller.settings')->get('happy_clients'),
        '#description'   => t('Enter the number of happy clients.'),
    ];

    // Add a text field for 'projects completed' inside the fieldset.
    $form['statistics_fieldset']['projects_completed'] = [
        '#type'          => 'number',
        '#title'         => t('Projects completed'),
        '#default_value' => \Drupal::config('steller.settings')->get('projects_completed'),
        '#description'   => t('Enter the projects completed in the theme.'),
    ];

    // Add a text field for 'awards won' inside the fieldset.
    $form['statistics_fieldset']['awards_won'] = [
        '#type'          => 'number',
        '#title'         => t('Awards won'),
        '#default_value' => \Drupal::config('steller.settings')->get('awards_won'),
        '#description'   => t('Enter the awards won in the theme.'),
    ];

    // Add a managed file field for the CV PDF upload.
    $form['header_img'] = [
        '#type'              => 'managed_file',
        '#title'             => t('Header image'),
        '#description'       => t('Upload your header image.'),
        '#default_value'     => \Drupal::config('steller.settings')->get('header_img'), // If a file has been uploaded, it will be the default value.
        '#upload_location'   => 'public://steller/images/',
        '#file_extensions'   => 'svg',
        '#required'          => FALSE,
        '#upload_validators' => [
            'file_validate_extensions' => ['svg'],
        ],
    ];

    // Add a managed file field for the CV PDF upload.
    $form['cv_img'] = [
        '#type'              => 'managed_file',
        '#title'             => t('CV image'),
        '#description'       => t('Upload your CV image.'),
        '#default_value'     => \Drupal::config('steller.settings')->get('cv_img'), // If a file has been uploaded, it will be the default value.
        '#upload_location'   => 'public://steller/images/',
        '#file_extensions'   => 'png',
        '#required'          => FALSE,
        '#upload_validators' => [
            'file_validate_extensions' => ['png'],
        ],
    ];


       // Add a fieldset for social links
       $form['social_links_fieldset'] = [
        '#type'        => 'details',
        '#title'       => t('Social Links'),
        '#collapsible' => TRUE,
        '#collapsed'   => FALSE,
    ];

    // Add Facebook URL field
    $form['social_links_fieldset']['facebook'] = [
        '#type'          => 'textfield',
        '#title'         => t('Facebook'),
        '#default_value' => \Drupal::config('mymodule.settings')->get('facebook'),
        '#description'   => t('Enter your Facebook profile or page URL.'),
    ];

    // Add Google URL field
    $form['social_links_fieldset']['google'] = [
        '#type'          => 'textfield',
        '#title'         => t('Google'),
        '#default_value' => \Drupal::config('mymodule.settings')->get('google'),
        '#description'   => t('Enter your Google+ (or Google profile) URL.'),
    ];

    // Add LinkedIn URL field
    $form['social_links_fieldset']['linkedin'] = [
        '#type'          => 'textfield',
        '#title'         => t('LinkedIn'),
        '#default_value' => \Drupal::config('mymodule.settings')->get('linkedin'), 
        '#description'   => t('Enter your LinkedIn profile URL.'),
    ];

    // Add Twitter URL field
    $form['social_links_fieldset']['twitter'] = [
        '#type'          => 'textfield',
        '#title'         => t('Twitter'),
        '#default_value' => \Drupal::config('mymodule.settings')->get('twitter'),
        '#description'   => t('Enter your Twitter profile URL.'),
    ];





}