<?php
$popupMeta = array (
    'moduleMain' => 'Opportunity',
    'varName' => 'OPPORTUNITY',
    'orderBy' => 'name',
    'whereClauses' => array (
  'especialidad_c' => 'opportunities.especialidad_c',
  'prioridad_c' => 'opportunities_cstm.prioridad_c',
  'estado_sol_prestador_c' => 'opportunities_cstm.estado_sol_prestador_c',
  'date_closed' => 'opportunities.date_closed',
  'matricula_nac_c' => 'opportunities_cstm.matricula_nac_c',
  'vigencia_nac_c' => 'opportunities_cstm.vigencia_nac_c',
  'matricula_prov_c' => 'opportunities_cstm.matricula_prov_c',
  'vigencia_prov_c' => 'opportunities_cstm.vigencia_prov_c',
  'opportunity_type' => 'opportunities.opportunity_type',
  'assigned_user_id' => 'opportunities.assigned_user_id',
),
    'searchInputs' => array (
  2 => 'especialidad_c',
  3 => 'prioridad_c',
  4 => 'estado_sol_prestador_c',
  5 => 'date_closed',
  6 => 'matricula_nac_c',
  7 => 'vigencia_nac_c',
  8 => 'matricula_prov_c',
  9 => 'vigencia_prov_c',
  10 => 'opportunity_type',
  11 => 'assigned_user_id',
),
    'searchdefs' => array (
  'especialidad_c' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ESPECIALIDAD',
    'id' => 'ESPE_ESPECIALIDADES_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'especialidad_c',
  ),
  'prioridad_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PRIORIDAD',
    'width' => '10%',
    'name' => 'prioridad_c',
  ),
  'estado_sol_prestador_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADO_SOL_PRESTADOR',
    'width' => '10%',
    'name' => 'estado_sol_prestador_c',
  ),
  'date_closed' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_CLOSED',
    'width' => '10%',
    'name' => 'date_closed',
  ),
  'matricula_nac_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MATRICULA_NAC',
    'width' => '10%',
    'name' => 'matricula_nac_c',
  ),
  'vigencia_nac_c' => 
  array (
    'type' => 'date',
    'label' => 'LBL_VIGENCIA_NAC',
    'width' => '10%',
    'name' => 'vigencia_nac_c',
  ),
  'matricula_prov_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MATRICULA_PROV',
    'width' => '10%',
    'name' => 'matricula_prov_c',
  ),
  'vigencia_prov_c' => 
  array (
    'type' => 'date',
    'label' => 'LBL_VIGENCIA_PROV',
    'width' => '10%',
    'name' => 'vigencia_prov_c',
  ),
  'opportunity_type' => 
  array (
    'name' => 'opportunity_type',
    'width' => '10%',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'type' => 'enum',
    'label' => 'LBL_ASSIGNED_TO',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
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
  'PRIORIDAD_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PRIORIDAD',
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
  'DATE_CLOSED' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_CLOSED',
    'width' => '10%',
    'default' => true,
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
  'OPPORTUNITY_TYPE' => 
  array (
    'width' => '15%',
    'default' => true,
    'label' => 'LBL_TYPE',
    'name' => 'opportunity_type',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
