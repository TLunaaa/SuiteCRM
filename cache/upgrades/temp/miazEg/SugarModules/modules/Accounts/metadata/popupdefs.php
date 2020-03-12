<?php
$popupMeta = array (
    'moduleMain' => 'Account',
    'varName' => 'ACCOUNT',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'accounts.name',
  'email' => 'accounts.email',
  'assigned_user_id' => 'accounts.assigned_user_id',
  'quienfactura_c' => 'accounts_cstm.quienfactura_c',
  'razonsocial_c' => 'accounts_cstm.razonsocial_c',
  'tipoidentificacion_c' => 'accounts_cstm.tipoidentificacion_c',
  'nroidentificacion_c' => 'accounts_cstm.nroidentificacion_c',
),
    'searchInputs' => array (
  0 => 'name',
  7 => 'email',
  8 => 'assigned_user_id',
  9 => 'quienfactura_c',
  10 => 'razonsocial_c',
  11 => 'tipoidentificacion_c',
  12 => 'nroidentificacion_c',
),
    'create' => array (
  'formBase' => 'AccountFormBase.php',
  'formBaseClass' => 'AccountFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'AccountSave',
  ),
  'createButton' => 'LNK_NEW_ACCOUNT',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'quienfactura_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_QUIENFACTURA',
    'width' => '10%',
    'name' => 'quienfactura_c',
  ),
  'razonsocial_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_RAZONSOCIAL',
    'width' => '10%',
    'name' => 'razonsocial_c',
  ),
  'tipoidentificacion_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPOIDENTIFICACION',
    'width' => '10%',
    'name' => 'tipoidentificacion_c',
  ),
  'nroidentificacion_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NROIDENTIFICACION',
    'width' => '10%',
    'name' => 'nroidentificacion_c',
  ),
  'email' => 
  array (
    'name' => 'email',
    'width' => '10%',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'QUIENFACTURA_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_QUIENFACTURA',
    'width' => '10%',
  ),
  'RAZONSOCIAL_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_RAZONSOCIAL',
    'width' => '10%',
  ),
  'TIPOIDENTIFICACION_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TIPOIDENTIFICACION',
    'width' => '10%',
  ),
  'NROIDENTIFICACION_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_NROIDENTIFICACION',
    'width' => '10%',
  ),
),
);
