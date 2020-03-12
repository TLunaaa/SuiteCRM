<?php
$popupMeta = array (
    'moduleMain' => 'Documents',
    'varName' => 'DOCUMENTS',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'documents.name',
  'estadodocumentacion_c' => 'documents_cstm.estadodocumentacion_c',
  'tipodocumentacion_c' => 'documents_cstm.tipodocumentacion_c',
  'active_date' => 'documents.active_date',
  'exp_date' => 'documents.exp_date',
  'description' => 'documents.description',
),
    'searchInputs' => array (
  0 => 'name',
  1 => 'estadodocumentacion_c',
  2 => 'tipodocumentacion_c',
  3 => 'active_date',
  4 => 'exp_date',
  5 => 'description',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'estadodocumentacion_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADODOCUMENTACION',
    'width' => '10%',
    'name' => 'estadodocumentacion_c',
  ),
  'tipodocumentacion_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPODOCUMENTACION',
    'width' => '10%',
    'name' => 'tipodocumentacion_c',
  ),
  'active_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DOC_ACTIVE_DATE',
    'width' => '10%',
    'name' => 'active_date',
  ),
  'exp_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DOC_EXP_DATE',
    'width' => '10%',
    'name' => 'exp_date',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'name' => 'description',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'ESTADODOCUMENTACION_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADODOCUMENTACION',
    'width' => '10%',
  ),
  'TIPODOCUMENTACION_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TIPODOCUMENTACION',
    'width' => '10%',
  ),
  'ACTIVE_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DOC_ACTIVE_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'EXP_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DOC_EXP_DATE',
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
),
);
