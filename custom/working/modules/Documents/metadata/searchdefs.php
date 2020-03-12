<?php
$searchdefs ['Documents'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'document_name' => 
      array (
        'name' => 'document_name',
        'default' => true,
        'width' => '10%',
      ),
      'tipodocumentacion_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TIPODOCUMENTACION',
        'width' => '10%',
        'name' => 'tipodocumentacion_c',
      ),
      'estadodocumentacion_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADODOCUMENTACION',
        'width' => '10%',
        'name' => 'estadodocumentacion_c',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'active_date' => 
      array (
        'name' => 'active_date',
        'default' => true,
        'width' => '10%',
      ),
      'exp_date' => 
      array (
        'name' => 'exp_date',
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
      'document_name' => 
      array (
        'name' => 'document_name',
        'default' => true,
        'width' => '10%',
      ),
      'estadodocumentacion_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADODOCUMENTACION',
        'width' => '10%',
        'name' => 'estadodocumentacion_c',
      ),
      'tipodocumentacion_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TIPODOCUMENTACION',
        'width' => '10%',
        'name' => 'tipodocumentacion_c',
      ),
      'active_date' => 
      array (
        'name' => 'active_date',
        'default' => true,
        'width' => '10%',
      ),
      'exp_date' => 
      array (
        'name' => 'exp_date',
        'default' => true,
        'width' => '10%',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
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
