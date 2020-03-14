<?php
$dashletData['LeadsDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'status' => 
  array (
    'default' => '',
  ),
  'email1' => 
  array (
    'default' => '',
  ),
  'phone_mobile' => 
  array (
    'default' => '',
  ),
  'localidadprestacion_c' => 
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
);
$dashletData['LeadsDashlet']['columns'] = array (
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
  'status' => 
  array (
    'width' => '10%',
    'label' => 'LBL_STATUS',
    'name' => 'status',
    'default' => true,
  ),
  'email1' => 
  array (
    'width' => '30%',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => false,
    'customCode' => '{$EMAIL1_LINK}',
    'default' => true,
    'name' => 'email1',
  ),
  'phone_mobile' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MOBILE_PHONE',
    'name' => 'phone_mobile',
    'default' => true,
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
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'nombrecalle_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_NOMBRECALLE',
    'width' => '10%',
    'name' => 'nombrecalle_c',
  ),
  'pais_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PAIS',
    'id' => 'PAIS_PAISES_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'pais_c',
  ),
  'provinciaprestacion_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PROVINCIAPRESTACION',
    'id' => 'PROV_PROVINCIAS_ID1_C',
    'link' => true,
    'width' => '10%',
    'name' => 'provinciaprestacion_c',
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
    'name' => 'localidad_c',
  ),
  'nromatricula_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_NROMATRICULA',
    'width' => '10%',
    'name' => 'nromatricula_c',
  ),
  'codpostal_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CODPOSTAL',
    'width' => '10%',
    'name' => 'codpostal_c',
  ),
  'depto_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DEPTO',
    'width' => '10%',
    'name' => 'depto_c',
  ),
  'obcdomicilio_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_OBCDOMICILIO',
    'width' => '10%',
    'name' => 'obcdomicilio_c',
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
    'name' => 'provincia_c',
  ),
  'status_description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_STATUS_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
    'name' => 'status_description',
  ),
  'numerocalle_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_NUMEROCALLE',
    'width' => '10%',
    'name' => 'numerocalle_c',
  ),
  'refered_by' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REFERED_BY',
    'width' => '10%',
    'default' => false,
    'name' => 'refered_by',
  ),
  'paisprestacion_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PAISPRESTACION',
    'id' => 'PAIS_PAISES_ID1_C',
    'link' => true,
    'width' => '10%',
    'name' => 'paisprestacion_c',
  ),
  'municipio_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_MUNICIPIO',
    'id' => 'MUNI_MUNICIPIOS_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'municipio_c',
  ),
  'municipioprestacion_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_MUNICIPIOPRESTACION',
    'id' => 'MUNI_MUNICIPIOS_ID1_C',
    'link' => true,
    'width' => '10%',
    'name' => 'municipioprestacion_c',
  ),
  'piso_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_PISO',
    'width' => '10%',
    'name' => 'piso_c',
  ),
);
