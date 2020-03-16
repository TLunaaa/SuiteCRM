<?php
$popupMeta = array (
    'moduleMain' => 'Cob_Lugares_de_Cobertura',
    'varName' => 'Cob_Lugares_de_Cobertura',
    'orderBy' => 'cob_lugares_de_cobertura.name',
    'whereClauses' => array (
  'name' => 'cob_lugares_de_cobertura.name',
  'pais' => 'cob_lugares_de_cobertura.pais',
  'provincia' => 'cob_lugares_de_cobertura.provincia',
  'municipio' => 'cob_lugares_de_cobertura.municipio',
  'description' => 'cob_lugares_de_cobertura.description',
  'latitud' => 'cob_lugares_de_cobertura.latitud',
  'longitud' => 'cob_lugares_de_cobertura.longitud',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'pais',
  5 => 'provincia',
  6 => 'municipio',
  7 => 'description',
  8 => 'latitud',
  9 => 'longitud',
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
  'latitud' => 
  array (
    'type' => 'float',
    'label' => 'LBL_LATITUD',
    'width' => '10%',
    'name' => 'latitud',
  ),
  'longitud' => 
  array (
    'type' => 'float',
    'label' => 'LBL_LONGITUD',
    'width' => '10%',
    'name' => 'longitud',
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
  'MUNICIPIO' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_MUNICIPIO',
    'id' => 'MUNI_MUNICIPIOS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'municipio',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description',
  ),
  'LATITUD' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_LATITUD',
    'width' => '10%',
    'name' => 'latitud',
  ),
  'LONGITUD' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_LONGITUD',
    'width' => '10%',
    'name' => 'longitud',
  ),
),
);
