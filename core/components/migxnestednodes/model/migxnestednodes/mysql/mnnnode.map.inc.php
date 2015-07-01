<?php
$xpdo_meta_map['mnnNode']= array (
  'package' => 'migxnestednodes',
  'version' => '1.1',
  'table' => 'mnn_nodes',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'name' => '',
    'pos' => 0,
    'extended' => '',
  ),
  'fieldMeta' => 
  array (
    'name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'index',
    ),
    'pos' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'extended' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'json',
      'null' => false,
      'default' => '',
    ),
  ),
  'composites' => 
  array (
    'ResourceNodeSelections' => 
    array (
      'class' => 'mnnResourceNodeSelection',
      'local' => 'id',
      'foreign' => 'resource_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'Children' => 
    array (
      'class' => 'mnnChildNode',
      'local' => 'id',
      'foreign' => 'node_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);
