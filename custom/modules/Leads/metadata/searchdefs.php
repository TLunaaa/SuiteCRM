<?php
$searchdefs ['Leads'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'search_name' => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'tipodoc_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TIPODOC',
        'width' => '10%',
        'name' => 'tipodoc_c',
      ),
      'nrodoc_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NRODOC',
        'width' => '10%',
        'name' => 'nrodoc_c',
      ),
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
      'nromatricula_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NROMATRICULA',
        'width' => '10%',
        'name' => 'nromatricula_c',
      ),
      'localidadprestacion_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_LOCALIDADPRESTACION',
        'id' => 'LOC_LOCALIDADES_ID1_C',
        'link' => true,
        'width' => '10%',
        'name' => 'localidadprestacion_c',
      ),
      'idsistemaweb_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_IDSISTEMAWEB',
        'width' => '10%',
        'name' => 'idsistemaweb_c',
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
      'name' => 
      array (
        'type' => 'name',
        'link' => true,
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
      ),
      'email' => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'phone' => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'status' => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
      ),
      'nrodoc_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NRODOC',
        'width' => '10%',
        'name' => 'nrodoc_c',
      ),
      'localidadprestacion_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_LOCALIDADPRESTACION',
        'link' => true,
        'width' => '10%',
        'id' => 'LOC_LOCALIDADES_ID1_C',
        'name' => 'localidadprestacion_c',
      ),
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
      'nromatricula_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NROMATRICULA',
        'width' => '10%',
        'name' => 'nromatricula_c',
      ),
      'idsistemaweb_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_IDSISTEMAWEB',
        'width' => '10%',
        'name' => 'idsistemaweb_c',
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
