<?php
$popupMeta = array (
    'moduleMain' => 'Loc_Localidades',
    'varName' => 'Loc_Localidades',
    'orderBy' => 'loc_localidades.name',
    'whereClauses' => array (
  'name' => 'loc_localidades.name',
  'pais' => 'loc_localidades.pais',
  'provincia' => 'loc_localidades.provincia',
  'municipio' => 'loc_localidades.municipio',
  'description' => 'loc_localidades.description',
  'date_modified' => 'loc_localidades.date_modified',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'pais',
  5 => 'provincia',
  6 => 'municipio',
  7 => 'description',
  8 => 'date_modified',
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
  'municipio' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_MUNICIPIO',
    'id' => 'MUNI_MUNICIPIOS_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'municipio',
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
);
