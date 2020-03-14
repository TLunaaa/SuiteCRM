<?php
$popupMeta = array (
    'moduleMain' => 'muni_Municipios',
    'varName' => 'muni_Municipios',
    'orderBy' => 'muni_municipios.name',
    'whereClauses' => array (
  'name' => 'muni_municipios.name',
  'pais' => 'muni_municipios.pais',
  'provincia' => 'muni_municipios.provincia',
  'description' => 'muni_municipios.description',
  'date_modified' => 'muni_municipios.date_modified',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'pais',
  5 => 'provincia',
  6 => 'description',
  7 => 'date_modified',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'pais' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PAIS',
    'id' => 'PAIS_PAISES_ID_C',
    'link' => true,
    'width' => '10%',
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
    'name' => 'provincia',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'name' => 'description',
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'name' => 'date_modified',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'PAIS' => 
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
  'PROVINCIA' => 
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
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_modified',
  ),
),
);
