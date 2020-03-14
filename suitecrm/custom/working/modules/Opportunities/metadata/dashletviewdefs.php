<?php
$dashletData['OpportunitiesDashlet']['searchFields'] = array (
  'especialidad_c' => 
  array (
    'default' => '',
  ),
  'prioridad_c' => 
  array (
    'default' => '',
  ),
  'estado_sol_prestador_c' => 
  array (
    'default' => '',
  ),
  'date_closed' => 
  array (
    'default' => '',
  ),
  'opportunity_type' => 
  array (
    'default' => '',
  ),
  'matricula_nac_c' => 
  array (
    'default' => '',
  ),
  'vigencia_nac_c' => 
  array (
    'default' => '',
  ),
  'matricula_prov_c' => 
  array (
    'default' => '',
  ),
  'vigencia_prov_c' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['OpportunitiesDashlet']['columns'] = array (
  'especialidad_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESPECIALIDAD',
    'id' => 'ESPE_ESPECIALIDADES_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'prioridad_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PRIORIDAD',
    'width' => '10%',
  ),
  'estado_sol_prestador_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO_SOL_PRESTADOR',
    'width' => '10%',
  ),
  'date_closed' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_CLOSED',
    'default' => true,
    'defaultOrderColumn' => 
    array (
      'sortOrder' => 'ASC',
    ),
    'name' => 'date_closed',
  ),
  'opportunity_type' => 
  array (
    'width' => '15%',
    'label' => 'LBL_TYPE',
    'name' => 'opportunity_type',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'name' => 'date_entered',
    'default' => false,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'matricula_nac_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_MATRICULA_NAC',
    'width' => '10%',
  ),
  'matricula_prov_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_MATRICULA_PROV',
    'width' => '10%',
  ),
  'vigencia_nac_c' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_VIGENCIA_NAC',
    'width' => '10%',
  ),
  'vigencia_prov_c' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_VIGENCIA_PROV',
    'width' => '10%',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
