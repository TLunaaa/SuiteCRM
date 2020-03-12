<?php
$viewdefs ['Contacts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
          1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
          2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
          3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
          4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 
          array (
            'name' => 'last_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'estado_prestador_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO_PRESTADOR',
          ),
          1 => 
          array (
            'name' => 'obsestado_c',
            'studio' => 'visible',
            'label' => 'LBL_OBSESTADO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tipodoc_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPODOC',
          ),
          1 => 
          array (
            'name' => 'nrodoc_c',
            'label' => 'LBL_NRODOC',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'account_name',
            'displayParams' => 
            array (
              'key' => 'billing',
              'copy' => 'primary',
              'billingKey' => 'primary',
              'additionalFields' => 
              array (
                'phone_office' => 'phone_work',
              ),
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile',
            'comment' => 'Mobile phone number of the contact',
            'label' => 'LBL_MOBILE_PHONE',
          ),
          1 => 
          array (
            'name' => 'phone_home',
            'comment' => 'Home phone number of the contact',
            'label' => 'LBL_HOME_PHONE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL_ADDRESS',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'nacionalidad_c',
            'studio' => 'visible',
            'label' => 'LBL_NACIONALIDAD',
          ),
          1 => 
          array (
            'name' => 'birthdate',
            'comment' => 'The birthdate of the contact',
            'label' => 'LBL_BIRTHDATE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'photo',
            'studio' => 
            array (
              'listview' => true,
            ),
            'label' => 'LBL_PHOTO',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'nombrecalle_c',
            'label' => 'LBL_NOMBRECALLE',
          ),
          1 => 
          array (
            'name' => 'numerocalle_c',
            'label' => 'LBL_NUMEROCALLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'piso_c',
            'label' => 'LBL_PISO',
          ),
          1 => 
          array (
            'name' => 'depto_c',
            'label' => 'LBL_DEPTO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'pais_c',
            'studio' => 'visible',
            'label' => 'LBL_PAIS',
          ),
          1 => 
          array (
            'name' => 'provincia_c',
            'studio' => 'visible',
            'label' => 'LBL_PROVINCIA',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'municipio_c',
            'studio' => 'visible',
            'label' => 'LBL_MUNICIPIO',
          ),
          1 => 
          array (
            'name' => 'localidad_c',
            'studio' => 'visible',
            'label' => 'LBL_LOCALIDAD',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'codpostal_c',
            'label' => 'LBL_CODPOSTAL',
          ),
          1 => 
          array (
            'name' => 'obsdomicilio_c',
            'label' => 'LBL_OBSDOMICILIO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'mapa_prestador_c',
            'label' => 'LBL_MAPA_PRESTADOR',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'origenbaja_c',
            'studio' => 'visible',
            'label' => 'LBL_ORIGENBAJA',
          ),
          1 => 
          array (
            'name' => 'motivobaja_c',
            'studio' => 'visible',
            'label' => 'LBL_MOTIVOBAJA',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fechabaja_c',
            'label' => 'LBL_FECHABAJA',
          ),
          1 => 
          array (
            'name' => 'notasbaja_c',
            'studio' => 'visible',
            'label' => 'LBL_NOTASBAJA',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'motivocancelacion_c',
            'studio' => 'visible',
            'label' => 'LBL_MOTIVOCANCELACION',
          ),
          1 => 
          array (
            'name' => 'notascancelacion_c',
            'studio' => 'visible',
            'label' => 'LBL_NOTASCANCELACION',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'referidopor_c',
            'studio' => 'visible',
            'label' => 'LBL_REFERIDOPOR',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
      ),
    ),
  ),
);
;
?>
