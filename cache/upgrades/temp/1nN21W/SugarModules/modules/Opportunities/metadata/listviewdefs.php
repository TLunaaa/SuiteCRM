<?php
$listViewDefs ['Opportunities'] = 
array (
  'ESPECIALIDAD_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESPECIALIDAD',
    'id' => 'ESPE_ESPECIALIDADES_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'ESTADO_SOL_PRESTADOR_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO_SOL_PRESTADOR',
    'width' => '10%',
  ),
  'PRIORIDAD_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PRIORIDAD',
    'width' => '10%',
  ),
  'MATRICULA_NAC_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_MATRICULA_NAC',
    'width' => '10%',
  ),
  'VIGENCIA_NAC_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_VIGENCIA_NAC',
    'width' => '10%',
  ),
  'MATRICULA_PROV_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_MATRICULA_PROV',
    'width' => '10%',
  ),
  'VIGENCIA_PROV_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_VIGENCIA_PROV',
    'width' => '10%',
  ),
  'DATE_CLOSED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_DATE_CLOSED',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'OPPORTUNITY_TYPE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_TYPE',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_MODIFIED',
    'default' => false,
  ),
  'OBS_ESTADO_SOL_C' => 
  array (
    'type' => 'text',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_OBS_ESTADO_SOL',
    'sortable' => false,
    'width' => '10%',
  ),
);
;
?>
