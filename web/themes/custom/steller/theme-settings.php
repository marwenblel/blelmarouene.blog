<?php
use Drupal\file\FileInterface;
use Drupal\Core\Url;
use Drupal\Core\DrupalKernel;

/**
 * Implements hook_form_system_theme_settings_alter() for Steller theme settings.
 */
function steller_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state) {
    $form['home_fieldset'] = [
        '#type'        => 'details',
        '#title'       => t('Home'),
        '#collapsible' => TRUE,
        '#collapsed'   => FALSE,
    ];
    $form['home_fieldset']['full_name'] = [
        '#type'          => 'textfield',
        '#title'         => t('Full name'),
        '#default_value' => \Drupal::config('steller.settings')->get('full_name'),
        '#description'   => t('Enter the first full name to display in the theme.'),
    ];
    $form['home_fieldset']['what_you_do'] = [
        '#type'          => 'textfield',
        '#title'         => t('What you do'),
        '#default_value' => \Drupal::config('steller.settings')->get('what_you_do'),
        '#description'   => t('Enter the job to display in the theme.'),
    ];
    $form['home_fieldset']['cv_pdf'] = [
        '#type'              => 'managed_file',
        '#title'             => t('CV PDF'),
        '#description'       => t('Upload your CV in PDF format.'),
        '#default_value'     => \Drupal::config('steller.settings')->get('cv_pdf'),
        '#upload_location'   => 'public://steller/cv_uploads/',
        '#file_extensions'   => 'pdf',
        '#required'          => FALSE,
        '#upload_validators' => [
            'file_validate_extensions' => ['pdf'],
        ],
    ];
    $form['home_fieldset']['header_img'] = [
        '#type'              => 'managed_file',
        '#title'             => t('Header image'),
        '#description'       => t('Upload your header image.'),
        '#default_value'     => \Drupal::config('steller.settings')->get('header_img'),
        '#upload_location'   => 'public://steller/images/',
        '#file_extensions'   => 'svg',
        '#required'          => FALSE,
        '#upload_validators' => [
            'file_validate_extensions' => ['svg'],
        ],
    ];
    $form['home_fieldset']['happy_clients'] = [
        '#type'          => 'number',
        '#title'         => t('Happy clients'),
        '#default_value' => \Drupal::config('steller.settings')->get('happy_clients'),
        '#description'   => t('Enter the number of happy clients.'),
    ];
    $form['home_fieldset']['projects_completed'] = [
        '#type'          => 'number',
        '#title'         => t('Projects completed'),
        '#default_value' => \Drupal::config('steller.settings')->get('projects_completed'),
        '#description'   => t('Enter the projects completed in the theme.'),
    ];
    $form['home_fieldset']['awards_won'] = [
        '#type'          => 'number',
        '#title'         => t('Awards won'),
        '#default_value' => \Drupal::config('steller.settings')->get('awards_won'),
        '#description'   => t('Enter the awards won in the theme.'),
    ];





    $form['about_fieldset'] = [
        '#type'        => 'details',
        '#title'       => t('About'),
        '#collapsible' => TRUE,
        '#collapsed'   => FALSE,
    ];
    $form['about_fieldset']['resume'] = [
        '#type'          => 'textarea',
        '#title'         => t('Resume'),
        '#default_value' => \Drupal::config('steller.settings')->get('resume'),
        '#description'   => t('Enter a detailed resume. This field supports plain text.'),
        '#rows'          => 5,
        '#required'      => FALSE,
    ];
    $form['about_fieldset']['cv_img'] = [
        '#type'              => 'managed_file',
        '#title'             => t('CV image'),
        '#description'       => t('Upload your CV image.'),
        '#default_value'     => \Drupal::config('steller.settings')->get('cv_img'),
        '#upload_location'   => 'public://steller/images/',
        '#file_extensions'   => 'png',
        '#required'          => FALSE,
        '#upload_validators' => [
            'file_validate_extensions' => ['png'],
        ],
    ];



    $form['contact_fieldset'] = [
        '#type'        => 'details',
        '#title'       => t('Contact'),
        '#collapsible' => TRUE,
        '#collapsed'   => FALSE,
    ];
    $form['contact_fieldset']['facebook'] = [
        '#type'          => 'textfield',
        '#title'         => t('Facebook'),
        '#default_value' => \Drupal::config('steller.settings')->get('facebook'),
        '#description'   => t('Enter your Facebook profile or page URL.'),
    ];
    $form['contact_fieldset']['google'] = [
        '#type'          => 'textfield',
        '#title'         => t('Google'),
        '#default_value' => \Drupal::config('steller.settings')->get('google'),
        '#description'   => t('Enter your Google+ (or Google profile) URL.'),
    ];
    $form['contact_fieldset']['linkedin'] = [
        '#type'          => 'textfield',
        '#title'         => t('LinkedIn'),
        '#default_value' => \Drupal::config('steller.settings')->get('linkedin'), 
        '#description'   => t('Enter your LinkedIn profile URL.'),
    ];
    $form['contact_fieldset']['twitter'] = [
        '#type'          => 'textfield',
        '#title'         => t('Twitter'),
        '#default_value' => \Drupal::config('steller.settings')->get('twitter'),
        '#description'   => t('Enter your Twitter profile URL.'),
    ];
    $form['contact_fieldset']['location'] = [
        '#type'          => 'textfield',
        '#title'         => t('Location'),
        '#default_value' => \Drupal::config('steller.settings')->get('location'),
        '#description'   => t('Enter your location.'),
    ];
    $form['contact_fieldset']['phone_number'] = [
        '#type'          => 'tel',
        '#title'         => t('Phone number'),
        '#default_value' => \Drupal::config('steller.settings')->get('phone_number'),
        '#description'   => t('Enter your Phone number.'),
        '#pattern'       => '^(\+?\d{1,4}[\s\-]?)?(\(?\d{1,3}\)?[\s\-]?)?[\d\s\-]{7,15}$',
    ];
    $form['contact_fieldset']['email'] = [
        '#type'          => 'email',
        '#title'         => t('Email'),
        '#default_value' => \Drupal::config('steller.settings')->get('email'), 
        '#description'   => t('Enter your email address.'),
    ];




    /*****************************/
    // Add a wrapper to contain dynamically added fieldsets.
    $form['dynamic_fieldsets'] = [
        '#type' => 'container',
        '#attributes' => ['id' => 'dynamic-fieldsets-wrapper'],
    ];

    // Get the current number of fieldsets from the form state.
    //$fieldset_count = $form_state->get('fieldset_count');
    $fieldset_count = \Drupal::config('steller.settings')->get('fieldset_count');


    if ($fieldset_count === NULL) {
        $fieldset_count = 1; // Default is 1 fieldset.
        //$form_state->set('fieldset_count', $fieldset_count);


        \Drupal::configFactory()->getEditable('steller.settings')
            ->set('fieldset_count', $fieldset_count)
            ->save();
    }

    // Generate the fieldsets dynamically.
    for ($i = 1; $i <= $fieldset_count; $i++) {
        $form['dynamic_fieldsets']['fieldset_' . $i] = [
            '#type' => 'fieldset',
            '#title' => t('Dynamic Fieldset @num', ['@num' => $i]),
        ];

        $form['dynamic_fieldsets']['fieldset_' . $i]['field_name_' . $i] = [
            '#type' => 'textfield',
            '#title' => t('Field Name @num', ['@num' => $i]),
            '#default_value' => \Drupal::config('steller.settings')->get('field_name_' . $i),
        ];
        $form['dynamic_fieldsets']['fieldset_' . $i]['field_img_' . $i] = [
            '#type'              => 'managed_file',
            '#title'             => t('Header image'),
            '#description'       => t('Upload your header image.'),
            '#default_value'     => \Drupal::config('steller.settings')->get('field_img_' . $i),
            '#upload_location'   => 'public://steller/projects/',
            '#file_extensions'   => 'jpg',
            '#required'          => FALSE,
            '#upload_validators' => [
                'file_validate_extensions' => ['jpg'],
                ]
            ];
    }

    // Add a button to create additional fieldsets.
    $form['add_fieldset'] = [
        '#type' => 'submit',
        '#value' => t('Add Another Fieldset'),
        '#ajax' => [
            'callback' => 'steller_add_fieldset_ajax_callback',
            'wrapper' => 'dynamic-fieldsets-wrapper',
        ],
        '#submit' => ['steller_add_fieldset_submit'],
    ];


    // Remove a button to create additional fieldsets.
    $form['remove_fieldset'] = [
        '#type' => 'submit',
        '#value' => t('Remove Another Fieldset'),
        '#ajax' => [
            'callback' => 'steller_remove_fieldset_ajax_callback',
            'wrapper' => 'dynamic-fieldsets-wrapper',
        ],
        '#submit' => ['steller_remove_fieldset_submit'],
    ];

    // Save all settings.
    $form['#submit'][] = 'steller_theme_settings_submit';



    /*****************************/




}

/**
 * AJAX callback for adding a new fieldset.
 */
function steller_add_fieldset_ajax_callback(&$form, \Drupal\Core\Form\FormStateInterface $form_state) {
    return $form['dynamic_fieldsets'];
}

/**
 * AJAX callback for adding a new fieldset.
 */
function steller_remove_fieldset_ajax_callback(&$form, \Drupal\Core\Form\FormStateInterface $form_state) {
    return $form['dynamic_fieldsets'];
}

function steller_add_fieldset_submit(&$form, \Drupal\Core\Form\FormStateInterface $form_state) {
    // Increment the fieldset count.
    //$fieldset_count = $form_state->get('fieldset_count');
    $fieldset_count = \Drupal::config('steller.settings')->get('fieldset_count');
    //$form_state->set('fieldset_count', $fieldset_count + 1);
    \Drupal::configFactory()->getEditable('steller.settings')
        ->set('fieldset_count', $fieldset_count + 1)
        ->save();

    // Trigger a rebuild.
    $form_state->setRebuild(TRUE);
}
function steller_remove_fieldset_submit(&$form, \Drupal\Core\Form\FormStateInterface $form_state) {
    // Increment the fieldset count.
    //$fieldset_count = $form_state->get('fieldset_count');
    $fieldset_count = \Drupal::config('steller.settings')->get('fieldset_count');


    if($fieldset_count >=  1) {
        \Drupal::configFactory()->getEditable('steller.settings')
            ->set('fieldset_count', $fieldset_count - 1)
            ->save();
    }

    // Trigger a rebuild.
    $form_state->setRebuild(TRUE);
}

/**
 * Submit callback for the theme settings form.
 */
function steller_theme_settings_submit(&$form, \Drupal\Core\Form\FormStateInterface $form_state) {
    //$fieldset_count = $form_state->get('fieldset_count');
    $fieldset_count = \Drupal::config('steller.settings')->get('fieldset_count');
    for ($i = 1; $i <= $fieldset_count; $i++) {
        $field_name = 'field_name_' . $i;
        $field_img  = 'field_img_' . $i;
        \Drupal::configFactory()->getEditable('steller.settings')
            ->set($field_name, $form_state->getValue($field_name))
            ->save();
        \Drupal::configFactory()->getEditable('steller.settings')
            ->set($field_img, $form_state->getValue($field_img))
            ->save();
    }
    // Trigger a rebuild.
    $form_state->setRebuild(TRUE);
}