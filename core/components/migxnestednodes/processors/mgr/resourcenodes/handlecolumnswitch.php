<?php

$config = $modx->migx->customconfigs;

$prefix = $modx->getOption('prefix', $config, null);
$packageName = $config['packageName'];

$packagepath = $modx->getOption('core_path') . 'components/' . $packageName . '/';
$modelpath = $packagepath . 'model/';

$modx->addPackage($packageName, $modelpath, $prefix);
$classname = $config['classname'];

$configs = $modx->getOption('configs', $scriptProperties, 0);

switch ($configs) {
    case 'mnn_resourcenodes':
        $joinclass = 'mnnResourceNodeSelection';
        $source_field = 'resource_id';
        $target_field = 'node_id';
        $resource_id = $modx->getOption('resource_id', $scriptProperties, 0);
        break;
    case 'mnn_nodenodes':
        $joinclass = 'mnnNodeNodeSelection';
        $source_field = 'node_id';
        $target_field = 'childnode_id';
        $resource_id = $modx->getOption('co_id', $scriptProperties, 0);        
        break;
}



$object_id = $modx->getOption('object_id', $scriptProperties, 0);

switch ($scriptProperties['idx']) {
    case '1':

        //get max position
        $resCategories = array();
        $positions = array();
        $c = $modx->newQuery($joinclass);
        $c->where(array('node_id' => $object_id));
        $c->sortby('pos', 'DESC');
        $c->limit('1');
        $c->prepare();
        //echo $c->toSql();
        $pos = 0;
        if ($object = $modx->getObject($joinclass, $c)) {
            $pos = $object->get('pos');
        }

        $pos = $pos + 1;

        if ($joinobject = $modx->getObject($joinclass, array($source_field => $resource_id, $target_field => $object_id))) {

        } else {
            $joinobject = $modx->newObject($joinclass);
            $joinobject->set('pos', $pos);
            $joinobject->set($source_field, $resource_id);
            $joinobject->set($target_field, $object_id);
        }
        $joinobject->save();
        break;
    case '0':
        if ($joinobject = $modx->getObject($joinclass, array($source_field => $resource_id, $target_field => $object_id))) {
            $joinobject->remove();

            $c = $modx->newQuery($joinclass);
            $c->where(array($target_field => $object_id));
            $c->sortby('pos');
            $c->prepare();
            //echo $c->toSql();
            $pos = 0;
            if ($collection = $modx->getCollection($joinclass, $c)) {
                $pos = 1;
                foreach ($collection as $object) {
                    $object->set('pos', $pos);
                    $object->save();
                    $pos++;
                }
            }
        }
        break;
    default:
        break;
}


//clear cache for all contexts
$collection = $modx->getCollection('modContext');
foreach ($collection as $context) {
    $contexts[] = $context->get('key');
}
$modx->cacheManager->refresh(array(
    'db' => array(),
    'auto_publish' => array('contexts' => $contexts),
    'context_settings' => array('contexts' => $contexts),
    'resource' => array('contexts' => $contexts),
    ));

return $modx->error->success();
