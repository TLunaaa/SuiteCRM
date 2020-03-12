<?php
$dashletData['muni_MunicipiosDashlet']['searchFields'] = array (
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
  'description' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
);
$dashletData['muni_MunicipiosDashlet']['columns'] = array (
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
    'name' => 'pais',
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
    'name' => 'provincia',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => true,
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
    'name' => 'description',
  ),
);
