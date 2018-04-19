<?php
/**
 * Created by PhpStorm.
 * User: Sami
 * Date: 15-04-18
 * Time: 20:27
 */// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/application/models/Entity"), $isDevMode);
$paths = array(__DIR__."\application\models\Entity
");
// database configuration parameters
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'host'      => '127.0.0.1',
    'port '     => '3306',
    'dbname'   => 'taskmanager',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);