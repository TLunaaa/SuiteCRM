<?php
$searchdefs ['Accounts'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'razonsocial_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_RAZONSOCIAL',
        'width' => '10%',
        'name' => 'razonsocial_c',
      ),
      'tipoidentificacion_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TIPOIDENTIFICACION',
        'width' => '10%',
        'name' => 'tipoidentificacion_c',
      ),
      'nroidentificacion_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NROIDENTIFICACION',
        'width' => '10%',
        'name' => 'nroidentificacion_c',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
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
      'name' => 
      array (
        'name' => 'name',
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
      'email' => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_street' => 
      array (
        'name' => 'address_street',
        'label' => 'LBL_ANY_ADDRESS',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_city' => 
      array (
        'name' => 'address_city',
        'label' => 'LBL_CITY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'razonsocial_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_RAZONSOCIAL',
        'width' => '10%',
        'name' => 'razonsocial_c',
      ),
      'tipoidentificacion_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TIPOIDENTIFICACION',
        'width' => '10%',
        'name' => 'tipoidentificacion_c',
      ),
      'nroidentificacion_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NROIDENTIFICACION',
        'width' => '10%',
        'name' => 'nroidentificacion_c',
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
