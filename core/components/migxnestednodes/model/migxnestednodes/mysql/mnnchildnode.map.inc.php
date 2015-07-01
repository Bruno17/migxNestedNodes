<?php
$xpdo_meta_map['mnnChildNode']= array (
  'package' => 'migxnestednodes',
  'version' => '1.1',
  'table' => 'mnn_child_nodes',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'name' => '',
    'node_id' => 0,
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
    'node_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
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
    'NodeNodeSelections' => 
    array (
      'class' => 'mnnNodeNodeSelection',
      'local' => 'id',
      'foreign' => 'node_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
  'aggregates' => 
  array (
    'Node' => 
    array (
      'class' => 'mnnNode',
      'local' => 'node_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
