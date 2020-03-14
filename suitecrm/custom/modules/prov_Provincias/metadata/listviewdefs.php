<?php
$module_name = 'prov_Provincias';
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
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
