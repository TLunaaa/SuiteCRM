<?php
$viewdefs ['Leads'] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="prospect_id" value="{if isset($smarty.request.prospect_id)}{$smarty.request.prospect_id}{else}{$bean->prospect_id}{/if}">',
          1 => '<input type="hidden" name="contact_id" value="{if isset($smarty.request.contact_id)}{$smarty.request.contact_id}{else}{$bean->contact_id}{/if}">',
          2 => '<input type="hidden" name="opportunity_id" value="{if isset($smarty.request.opportunity_id)}{$smarty.request.opportunity_id}{else}{$bean->opportunity_id}{/if}">',
          3 => '<input type="hidden" name="account_id" value="{if isset($smarty.request.account_id)}{$smarty.request.account_id}{else}{$bean->account_id}{/if}">',
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
      'javascript' => '<script type="text/javascript" language="Javascript">function copyAddressRight(form)  {ldelim} form.alt_address_street.value = form.primary_address_street.value;form.alt_address_city.value = form.primary_address_city.value;form.alt_address_state.value = form.primary_address_state.value;form.alt_address_postalcode.value = form.primary_address_postalcode.value;form.alt_address_country.value = form.primary_address_country.value;return true; {rdelim} function copyAddressLeft(form)  {ldelim} form.primary_address_street.value =form.alt_address_street.value;form.primary_address_city.value = form.alt_address_city.value;form.primary_address_state.value = form.alt_address_state.value;form.primary_address_postalcode.value =form.alt_address_postalcode.value;form.primary_address_country.value = form.alt_address_country.value;return true; {rdelim} </script>',
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
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'LBL_CONTACT_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
          ),
          1 => 
          array (
            'name' => 'last_name',
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
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile',
          ),
          1 => 
          array (
            'name' => 'phone_home',
            'comment' => 'Home phone number of the contact',
            'label' => 'LBL_HOME_PHONE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'email1',
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
            'name' => 'obcdomicilio_c',
            'label' => 'LBL_OBCDOMICILIO',
          ),
          1 => 
          array (
            'name' => 'codpostal_c',
            'label' => 'LBL_CODPOSTAL',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'especialidad_c',
            'studio' => 'visible',
            'label' => 'LBL_ESPECIALIDAD',
          ),
          1 => 
          array (
            'name' => 'nromatricula_c',
            'label' => 'LBL_NROMATRICULA',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'paisprestacion_c',
            'studio' => 'visible',
            'label' => 'LBL_PAISPRESTACION',
          ),
          1 => 
          array (
            'name' => 'provinciaprestacion_c',
            'studio' => 'visible',
            'label' => 'LBL_PROVINCIAPRESTACION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'municipioprestacion_c',
            'studio' => 'visible',
            'label' => 'LBL_MUNICIPIOPRESTACION',
          ),
          1 => 
          array (
            'name' => 'localidadprestacion_c',
            'studio' => 'visible',
            'label' => 'LBL_LOCALIDADPRESTACION',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'lead_source',
          ),
          1 => 
          array (
            'name' => 'lead_source_description',
            'comment' => 'Description of the lead source',
            'label' => 'LBL_LEAD_SOURCE_DESCRIPTION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'refered_by',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'status_description',
            'comment' => 'Description of the status of the lead',
            'label' => 'LBL_STATUS_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
