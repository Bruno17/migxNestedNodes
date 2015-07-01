<?php
$xpdo_meta_map['mnnNodeNodeSelection']= array (
  'package' => 'migxnestednodes',
  'version' => '1.1',
  'table' => 'mnn_node_node_selections',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'resource_id' => 0,
    'node_id' => 0,
    'childnode_id' => 0,
    'pos' => 0,
    'extended' => '',
  ),
  'fieldMeta' => 
  array (
    'resource_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
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
    'childnode_id' => 
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
    'Child' => 
    array (
      'class' => 'mnnChildNode',
      'local' => 'childnode_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
