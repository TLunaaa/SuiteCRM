<?php
$dashletData['Loc_LocalidadesDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'pais' => 
  array (
    'default' => '',
  ),
  'provincia' => 
  array (
    'default' => '',
  ),
  'municipio' => 
  array (
    'default' => '',
  ),
  'description' => 
  array (
    'default' => '',
  ),
);
$dashletData['Loc_LocalidadesDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'pais' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PAIS',
    'id' => 'PAIS_PAISES_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'provincia' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PROVINCIA',
    'id' => 'PROV_PROVINCIAS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'municipio' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_MUNICIPIO',
    'id' => 'MUNI_MUNICIPIOS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'latitud' => 
  array (
    'type' => 'float',
    'default' => false,
    'label' => 'LBL_LATITUD',
    'width' => '10%',
  ),
  'longitud' => 
  array (
    'type' => 'float',
    'default' => false,
    'label' => 'LBL_LONGITUD',
    'width' => '10%',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
);
