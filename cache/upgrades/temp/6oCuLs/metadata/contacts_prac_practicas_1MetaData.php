<?php
// created: 2019-08-23 16:03:02
$dictionary["contacts_prac_practicas_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'contacts_prac_practicas_1' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'prac_Practicas',
      'rhs_table' => 'prac_practicas',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'contacts_prac_practicas_1_c',
      'join_key_lhs' => 'contacts_prac_practicas_1contacts_ida',
      'join_key_rhs' => 'contacts_prac_practicas_1prac_practicas_idb',
    ),
  ),
  'table' => 'contacts_prac_practicas_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'contacts_prac_practicas_1contacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'contacts_prac_practicas_1prac_practicas_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'contacts_prac_practicas_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'contacts_prac_practicas_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'contacts_prac_practicas_1contacts_ida',
        1 => 'contacts_prac_practicas_1prac_practicas_idb',
      ),
    ),
  ),
);