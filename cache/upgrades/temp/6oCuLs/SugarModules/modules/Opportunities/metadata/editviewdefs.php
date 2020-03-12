<?php
$viewdefs ['Opportunities'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
      'javascript' => '{$PROBABILITY_SCRIPT}',
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'opportunity_type',
          1 => 
          array (
            'name' => 'especialidad_c',
            'studio' => 'visible',
            'label' => 'LBL_ESPECIALIDAD',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'matricula_nac_c',
            'label' => 'LBL_MATRICULA_NAC',
          ),
          1 => 
          array (
            'name' => 'vigencia_nac_c',
            'label' => 'LBL_VIGENCIA_NAC',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'matricula_prov_c',
            'label' => 'LBL_MATRICULA_PROV',
          ),
          1 => 
          array (
            'name' => 'vigencia_prov_c',
            'label' => 'LBL_VIGENCIA_PROV',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'prioridad_c',
            'studio' => 'visible',
            'label' => 'LBL_PRIORIDAD',
          ),
          1 => 
          array (
            'name' => 'date_closed',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'estado_sol_prestador_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO_SOL_PRESTADOR',
          ),
          1 => 
          array (
            'name' => 'obs_estado_sol_c',
            'studio' => 'visible',
            'label' => 'LBL_OBS_ESTADO_SOL',
          ),
        ),
        2 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
;
?>
