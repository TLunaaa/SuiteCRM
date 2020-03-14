<?php
$listViewDefs ['Contacts'] = 
array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'contextMenu' => 
    array (
      'objectType' => 'sugarPerson',
      'metaData' => 
      array (
        'contact_id' => '{$ID}',
        'module' => 'Contacts',
        'return_action' => 'ListView',
        'contact_name' => '{$FULL_NAME}',
        'parent_id' => '{$ACCOUNT_ID}',
        'parent_name' => '{$ACCOUNT_NAME}',
        'return_module' => 'Contacts',
        'parent_type' => 'Account',
        'notes_parent_type' => 'Account',
      ),
    ),
    'orderBy' => 'name',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
      3 => 'account_name',
      4 => 'account_id',
    ),
  ),
  'ESTADO_PRESTADOR_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO_PRESTADOR',
    'width' => '10%',
  ),
  'TIPODOC_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TIPODOC',
    'width' => '10%',
  ),
  'NRODOC_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_NRODOC',
    'width' => '10%',
  ),
  'LOCALIDAD_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_LOCALIDAD',
    'id' => 'LOC_LOCALIDADES_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'PHONE_MOBILE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MOBILE_PHONE',
    'default' => true,
  ),
  'EMAIL1' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
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
  'IDSISTEMAWEB_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_IDSISTEMAWEB',
    'width' => '10%',
  ),
  'PHONE_HOME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_HOME_PHONE',
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
    'width' => '10%',
    'label' => 'LBL_MODIFIED',
    'default' => false,
  ),
  'NOTASBAJA_C' => 
  array (
    'type' => 'text',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_NOTASBAJA',
    'sortable' => false,
    'width' => '10%',
  ),
  'MOTIVOBAJA_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_MOTIVOBAJA',
    'width' => '10%',
  ),
  'MOTIVOCANCELACION_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_MOTIVOCANCELACION',
    'width' => '10%',
  ),
  'OBSESTADO_C' => 
  array (
    'type' => 'text',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_OBSESTADO',
    'sortable' => false,
    'width' => '10%',
  ),
  'NACIONALIDAD_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_NACIONALIDAD',
    'id' => 'NACI_NACIONALIDADES_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'CODPOSTAL_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CODPOSTAL',
    'width' => '10%',
  ),
  'ORIGENBAJA_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ORIGENBAJA',
    'width' => '10%',
  ),
  'OBSDOMICILIO_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_OBSDOMICILIO',
    'width' => '10%',
  ),
  'REFERIDOPOR_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_REFERIDOPOR',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'FNACIMIENTO_C' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_FNACIMIENTO',
    'width' => '10%',
  ),
  'FECHABAJA_C' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_FECHABAJA',
    'width' => '10%',
  ),
);
;
?>
