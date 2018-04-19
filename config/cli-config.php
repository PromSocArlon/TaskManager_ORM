<?php
/**
 * Created by PhpStorm.
 * User: Sami
 * Date: 15-04-18
 * Time: 19:04
 */
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require __DIR__ . '\..\bootstrap.php';

// replace with mechanism to retrieve EntityManager in your app
return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
//return ConsoleRunner::createHelperSet($entityManager);