<?php
$viewdefs ['Accounts'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          'SEND_CONFIRM_OPT_IN_EMAIL' => 
          array (
            'customCode' => '<input type="submit" class="button hidden" disabled="disabled" title="{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}" onclick="this.form.return_module.value=\'Accounts\'; this.form.return_action.value=\'Accounts\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'sendConfirmOptInEmail\'; this.form.module.value=\'Accounts\'; this.form.module_tab.value=\'Accounts\';" name="send_confirm_opt_in_email" value="{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}"/>',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}',
              'htmlOptions' => 
              array (
                'class' => 'button hidden',
                'id' => 'send_confirm_opt_in_email',
                'title' => '{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}',
                'onclick' => 'this.form.return_module.value=\'Accounts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'sendConfirmOptInEmail\'; this.form.module.value=\'Accounts\'; this.form.module_tab.value=\'Accounts\';',
                'name' => 'send_confirm_opt_in_email',
                'disabled' => true,
              ),
            ),
          ),
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
          'AOS_GENLET' => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_PRINT_AS_PDF}">',
          ),
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
            'comment' => 'Name of the Company',
            'label' => 'LBL_NAME',
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
            'comment' => 'The office phone number',
            'label' => 'LBL_PHONE_OFFICE',
          ),
          1 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
            'displayParams' => 
            array (
              'link_target' => '_blank',
            ),
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'label' => 'LBL_BILLING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
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
