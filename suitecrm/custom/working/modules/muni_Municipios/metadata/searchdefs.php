<?php
$module_name = 'muni_Municipios';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
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
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'pais' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PAIS',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'PAIS_PAISES_ID_C',
        'name' => 'pais',
      ),
      'provincia' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PROVINCIA',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'PROV_PROVINCIAS_ID_C',
        'name' => 'provincia',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
