<?php
$dashletData['ContactsDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'estado_prestador_c' => 
  array (
    'default' => '',
  ),
  'tipodoc_c' => 
  array (
    'default' => '',
  ),
  'nrodoc_c' => 
  array (
    'default' => '',
  ),
  'localidad_c' => 
  array (
    'default' => '',
  ),
  'phone_mobile' => 
  array (
    'default' => '',
  ),
  'email1' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['ContactsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '30%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
    ),
    'name' => 'name',
  ),
  'estado_prestador_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO_PRESTADOR',
    'width' => '10%',
  ),
  'tipodoc_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TIPODOC',
    'width' => '10%',
  ),
  'nrodoc_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_NRODOC',
    'width' => '10%',
  ),
  'phone_mobile' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MOBILE_PHONE',
    'name' => 'phone_mobile',
    'default' => true,
  ),
  'email1' => 
  array (
    'width' => '10%',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => false,
    'customCode' => '{$EMAIL1_LINK}',
    'name' => 'email1',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'assigned_user_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
  'phone_home' => 
  array (
    'width' => '10%',
    'label' => 'LBL_HOME_PHONE',
    'name' => 'phone_home',
    'default' => false,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'provincia_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PROVINCIA',
    'id' => 'PROV_PROVINCIAS_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'localidad_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_LOCALIDAD',
    'id' => 'LOC_LOCALIDADES_ID_C',
    'link' => true,
    'width' => '10%',
  ),
);
