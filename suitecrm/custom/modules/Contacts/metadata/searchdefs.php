<?php
$searchdefs ['Contacts'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'search_name' => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'estado_prestador_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO_PRESTADOR',
        'width' => '10%',
        'name' => 'estado_prestador_c',
      ),
      'tipodoc_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TIPODOC',
        'width' => '10%',
        'name' => 'tipodoc_c',
      ),
      'nrodoc_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NRODOC',
        'width' => '10%',
        'name' => 'nrodoc_c',
      ),
      'localidad_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_LOCALIDAD',
        'id' => 'LOC_LOCALIDADES_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'localidad_c',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'fnacimiento_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_FNACIMIENTO',
        'width' => '10%',
        'name' => 'fnacimiento_c',
      ),
      'nacionalidad_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_NACIONALIDAD',
        'id' => 'NACI_NACIONALIDADES_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'nacionalidad_c',
      ),
      'idsistemaweb_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_IDSISTEMAWEB',
        'width' => '10%',
        'name' => 'idsistemaweb_c',
      ),
      'referidopor_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_REFERIDOPOR',
        'id' => 'CONTACT_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'referidopor_c',
      ),
      'account_name' => 
      array (
        'name' => 'account_name',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'first_name' => 
      array (
        'name' => 'first_name',
        'default' => true,
        'width' => '10%',
      ),
      'estado_prestador_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO_PRESTADOR',
        'width' => '10%',
        'name' => 'estado_prestador_c',
      ),
      'nrodoc_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NRODOC',
        'width' => '10%',
        'name' => 'nrodoc_c',
      ),
      'localidad_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_LOCALIDAD',
        'link' => true,
        'width' => '10%',
        'id' => 'LOC_LOCALIDADES_ID_C',
        'name' => 'localidad_c',
      ),
      'email' => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'phone' => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'last_name' => 
      array (
        'name' => 'last_name',
        'default' => true,
        'width' => '10%',
      ),
      'idsistemaweb_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_IDSISTEMAWEB',
        'width' => '10%',
        'name' => 'idsistemaweb_c',
      ),
      'account_name' => 
      array (
        'name' => 'account_name',
        'default' => true,
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
        'default' => true,
        'width' => '10%',
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
