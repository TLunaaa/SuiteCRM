<?php
$module_name = 'Cob_Lugares_de_Cobertura';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
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
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'LATITUD' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_LATITUD',
    'width' => '10%',
  ),
  'LONGITUD' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_LONGITUD',
    'width' => '10%',
  ),
);
;
?>
