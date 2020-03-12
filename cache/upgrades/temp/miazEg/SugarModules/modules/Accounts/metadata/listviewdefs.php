<?php
$listViewDefs ['Accounts'] = 
array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
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
  'PHONE_OFFICE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_PHONE',
    'default' => true,
  ),
  'EMAIL1' => 
  array (
    'width' => '15%',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}',
    'default' => true,
  ),
  'WEBSITE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_WEBSITE',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'width' => '5%',
    'label' => 'LBL_DATE_MODIFIED',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED',
    'default' => false,
  ),
  'TITULARC1_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_TITULARC1',
    'width' => '10%',
  ),
  'TIPOIDENTIFICACIONC1_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_TIPOIDENTIFICACIONC1',
    'width' => '10%',
  ),
  'NROIDENTIFICACIONC1_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_NROIDENTIFICACIONC1',
    'width' => '10%',
  ),
  'BANCOC1_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_BANCOC1',
    'id' => 'BANCO_BANCOS_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'SUCURSALC1_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_SUCURSALC1',
    'width' => '10%',
  ),
  'NROCUENTAC1_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_NROCUENTAC1',
    'width' => '10%',
  ),
  'CBUCUENTA1_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CBUCUENTA1',
    'width' => '10%',
  ),
  'ALIASC1_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_ALIASC1',
    'width' => '10%',
  ),
  'TITULARC2_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_TITULARC2',
    'width' => '10%',
  ),
  'TIPOIDENTIFICACIONC2_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_TIPOIDENTIFICACIONC2',
    'width' => '10%',
  ),
  'NROIDENTIFICACIONC2_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_NROIDENTIFICACIONC2',
    'width' => '10%',
  ),
  'BANCOC2_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_BANCOC2',
    'id' => 'BANCO_BANCOS_ID1_C',
    'link' => true,
    'width' => '10%',
  ),
  'SUCURSALC2_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_SUCURSALC2',
    'width' => '10%',
  ),
  'NROCUENTAC2_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_NROCUENTAC2',
    'width' => '10%',
  ),
  'CBUCUENTA2_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CBUCUENTA2',
    'width' => '10%',
  ),
  'ALIASC2_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_ALIASC2',
    'width' => '10%',
  ),
);
;
?>
