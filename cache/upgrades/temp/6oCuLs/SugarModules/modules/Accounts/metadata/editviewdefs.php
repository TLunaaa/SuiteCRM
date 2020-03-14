<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
          1 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'obsdomicilio_c',
            'studio' => 'visible',
            'label' => 'LBL_OBSDOMICILIO',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'quienfactura_c',
            'studio' => 'visible',
            'label' => 'LBL_QUIENFACTURA',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'razonsocial_c',
            'label' => 'LBL_RAZONSOCIAL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tipoidentificacion_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPOIDENTIFICACION',
          ),
          1 => 
          array (
            'name' => 'nroidentificacion_c',
            'label' => 'LBL_NROIDENTIFICACION',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'titularc1_c',
            'label' => 'LBL_TITULARC1',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'tipoidentificacionc1_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPOIDENTIFICACIONC1',
          ),
          1 => 
          array (
            'name' => 'nroidentificacionc1_c',
            'label' => 'LBL_NROIDENTIFICACIONC1',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'bancoc1_c',
            'studio' => 'visible',
            'label' => 'LBL_BANCOC1',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'sucursalc1_c',
            'label' => 'LBL_SUCURSALC1',
          ),
          1 => 
          array (
            'name' => 'nrocuentac1_c',
            'label' => 'LBL_NROCUENTAC1',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'cbucuenta1_c',
            'label' => 'LBL_CBUCUENTA1',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'aliasc1_c',
            'label' => 'LBL_ALIASC1',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'titularc2_c',
            'label' => 'LBL_TITULARC2',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'tipoidentificacionc2_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPOIDENTIFICACIONC2',
          ),
          1 => 
          array (
            'name' => 'nroidentificacionc2_c',
            'label' => 'LBL_NROIDENTIFICACIONC2',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'bancoc2_c',
            'studio' => 'visible',
            'label' => 'LBL_BANCOC2',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'sucursalc2_c',
            'label' => 'LBL_SUCURSALC2',
          ),
          1 => 
          array (
            'name' => 'nrocuentac2_c',
            'label' => 'LBL_NROCUENTAC2',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'cbucuenta2_c',
            'label' => 'LBL_CBUCUENTA2',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'aliasc2_c',
            'label' => 'LBL_ALIASC2',
          ),
        ),
      ),
    ),
  ),
);
;
?>
