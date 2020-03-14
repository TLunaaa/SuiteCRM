<?php
$popupMeta = array (
    'moduleMain' => 'Contact',
    'varName' => 'CONTACT',
    'orderBy' => 'contacts.first_name, contacts.last_name',
    'whereClauses' => array (
  'first_name' => 'contacts.first_name',
  'last_name' => 'contacts.last_name',
  'estado_prestador_c' => 'contacts_cstm.estado_prestador_c',
  'tipodoc_c' => 'contacts_cstm.tipodoc_c',
  'nrodoc_c' => 'contacts_cstm.nrodoc_c',
  'phone_mobile' => 'contacts.phone_mobile',
  'email' => 'contacts.email',
  'assigned_user_id' => 'contacts.assigned_user_id',
  'idsistemaweb_c' => 'contacts_cstm.idsistemaweb_c',
),
    'searchInputs' => array (
  0 => 'first_name',
  1 => 'last_name',
  3 => 'email',
  4 => 'estado_prestador_c',
  5 => 'tipodoc_c',
  6 => 'nrodoc_c',
  7 => 'phone_mobile',
  8 => 'assigned_user_id',
  9 => 'idsistemaweb_c',
),
    'create' => array (
  'formBase' => 'ContactFormBase.php',
  'formBaseClass' => 'ContactFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'ContactSave',
  ),
  'createButton' => 'LNK_NEW_CONTACT',
),
    'searchdefs' => array (
  'first_name' => 
  array (
    'name' => 'first_name',
    'width' => '10%',
  ),
  'last_name' => 
  array (
    'name' => 'last_name',
    'width' => '10%',
  ),
  'estado_prestador_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADO_PRESTADOR',
    'width' => '10%',
    'name' => 'estado_prestador_c',
  ),
  'tipodoc_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPODOC',
    'width' => '10%',
    'name' => 'tipodoc_c',
  ),
  'nrodoc_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NRODOC',
    'width' => '10%',
    'name' => 'nrodoc_c',
  ),
  'phone_mobile' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_MOBILE_PHONE',
    'width' => '10%',
    'name' => 'phone_mobile',
  ),
  'email' => 
  array (
    'name' => 'email',
    'width' => '10%',
  ),
  'idsistemaweb_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_IDSISTEMAWEB',
    'width' => '10%',
    'name' => 'idsistemaweb_c',
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
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
      3 => 'account_name',
      4 => 'account_id',
    ),
    'name' => 'name',
  ),
  'ESTADO_PRESTADOR_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO_PRESTADOR',
    'width' => '10%',
    'name' => 'estado_prestador_c',
  ),
  'TIPODOC_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TIPODOC',
    'width' => '10%',
    'name' => 'tipodoc_c',
  ),
  'NRODOC_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_NRODOC',
    'width' => '10%',
    'name' => 'nrodoc_c',
  ),
  'PHONE_MOBILE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_MOBILE_PHONE',
    'width' => '10%',
    'default' => true,
    'name' => 'phone_mobile',
  ),
  'EMAIL1' => 
  array (
    'type' => 'varchar',
    'studio' => 
    array (
      'editview' => true,
      'editField' => true,
      'searchview' => false,
      'popupsearch' => false,
    ),
    'label' => 'LBL_EMAIL_ADDRESS',
    'width' => '10%',
    'default' => true,
    'name' => 'email1',
  ),
  'IDSISTEMAWEB_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_IDSISTEMAWEB',
    'width' => '10%',
  ),
),
);
