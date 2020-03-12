<?php
$dashletData['AccountsDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'quienfactura_c' => 
  array (
    'default' => '',
  ),
  'razonsocial_c' => 
  array (
    'default' => '',
  ),
  'tipoidentificacion_c' => 
  array (
    'default' => '',
  ),
  'nroidentificacion_c' => 
  array (
    'default' => '',
  ),
);
$dashletData['AccountsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'quienfactura_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_QUIENFACTURA',
    'width' => '10%',
  ),
  'razonsocial_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_RAZONSOCIAL',
    'width' => '10%',
  ),
  'tipoidentificacion_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TIPOIDENTIFICACION',
    'width' => '10%',
  ),
  'nroidentificacion_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_NROIDENTIFICACION',
    'width' => '10%',
  ),
  'phone_office' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_PHONE',
    'default' => true,
    'name' => 'phone_office',
  ),
  'email1' => 
  array (
    'width' => '8%',
    'label' => 'LBL_EMAIL_ADDRESS_PRIMARY',
    'name' => 'email1',
    'default' => true,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'titularc1_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_TITULARC1',
    'width' => '10%',
  ),
  'tipoidentificacionc1_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_TIPOIDENTIFICACIONC1',
    'width' => '10%',
  ),
  'nroidentificacionc1_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_NROIDENTIFICACIONC1',
    'width' => '10%',
  ),
  'bancoc1_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_BANCOC1',
    'id' => 'BANCO_BANCOS_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'sucursalc1_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_SUCURSALC1',
    'width' => '10%',
  ),
  'nrocuentac1_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_NROCUENTAC1',
    'width' => '10%',
  ),
  'cbucuenta1_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CBUCUENTA1',
    'width' => '10%',
  ),
  'aliasc1_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_ALIASC1',
    'width' => '10%',
  ),
  'titularc2_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_TITULARC2',
    'width' => '10%',
  ),
  'tipoidentificacionc2_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_TIPOIDENTIFICACIONC2',
    'width' => '10%',
  ),
  'nroidentificacionc2_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_NROIDENTIFICACIONC2',
    'width' => '10%',
  ),
  'bancoc2_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_BANCOC2',
    'id' => 'BANCO_BANCOS_ID1_C',
    'link' => true,
    'width' => '10%',
  ),
  'sucursalc2_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_SUCURSALC2',
    'width' => '10%',
  ),
  'nrocuentac2_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_NROCUENTAC2',
    'width' => '10%',
  ),
  'cbucuenta2_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CBUCUENTA2',
    'width' => '10%',
  ),
  'aliasc2_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_ALIASC2',
    'width' => '10%',
  ),
);
