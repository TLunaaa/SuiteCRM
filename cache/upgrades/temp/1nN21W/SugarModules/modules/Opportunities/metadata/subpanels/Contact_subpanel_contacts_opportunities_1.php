<?php
// created: 2019-08-23 18:19:22
$subpanel_layout['list_fields'] = array (
  'especialidad_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ESPECIALIDAD',
    'id' => 'ESPE_ESPECIALIDADES_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Espe_Especialidades',
    'target_record_key' => 'espe_especialidades_id_c',
  ),
  'prioridad_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PRIORIDAD',
    'width' => '10%',
  ),
  'estado_sol_prestador_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ESTADO_SOL_PRESTADOR',
    'width' => '10%',
  ),
  'date_closed' => 
  array (
    'name' => 'date_closed',
    'vname' => 'LBL_LIST_DATE_CLOSED',
    'width' => '15%',
    'default' => true,
  ),
  'vigencia_nac_c' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_VIGENCIA_NAC',
    'width' => '10%',
  ),
  'vigencia_prov_c' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_VIGENCIA_PROV',
    'width' => '10%',
  ),
  'assigned_user_name' => 
  array (
    'name' => 'assigned_user_name',
    'vname' => 'LBL_LIST_ASSIGNED_TO_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_record_key' => 'assigned_user_id',
    'target_module' => 'Employees',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Opportunities',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Leads',
    'width' => '4%',
    'default' => true,
  ),
  'currency_id' => 
  array (
    'usage' => 'query_only',
  ),
);