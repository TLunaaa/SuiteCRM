<?php
$searchdefs ['Opportunities'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'especialidad_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESPECIALIDAD',
        'id' => 'ESPE_ESPECIALIDADES_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'especialidad_c',
      ),
      'prioridad_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PRIORIDAD',
        'width' => '10%',
        'name' => 'prioridad_c',
      ),
      'estado_sol_prestador_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO_SOL_PRESTADOR',
        'width' => '10%',
        'name' => 'estado_sol_prestador_c',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'open_only' => 
      array (
        'name' => 'open_only',
        'label' => 'LBL_OPEN_ITEMS',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'especialidad_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESPECIALIDAD',
        'link' => true,
        'width' => '10%',
        'id' => 'ESPE_ESPECIALIDADES_ID_C',
        'name' => 'especialidad_c',
      ),
      'prioridad_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PRIORIDAD',
        'width' => '10%',
        'name' => 'prioridad_c',
      ),
      'estado_sol_prestador_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO_SOL_PRESTADOR',
        'width' => '10%',
        'name' => 'estado_sol_prestador_c',
      ),
      'date_closed' => 
      array (
        'name' => 'date_closed',
        'default' => true,
        'width' => '10%',
      ),
      'matricula_nac_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_MATRICULA_NAC',
        'width' => '10%',
        'name' => 'matricula_nac_c',
      ),
      'vigencia_nac_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_VIGENCIA_NAC',
        'width' => '10%',
        'name' => 'vigencia_nac_c',
      ),
      'matricula_prov_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_MATRICULA_PROV',
        'width' => '10%',
        'name' => 'matricula_prov_c',
      ),
      'vigencia_prov_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_VIGENCIA_PROV',
        'width' => '10%',
        'name' => 'vigencia_prov_c',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
