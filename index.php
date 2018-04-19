<?php
session_start();
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'\bootstrap.php';
//require_once 'application/core/Route.php';


$member = new app\models\Entity\Member();
$member->setMail("orm@orm.com");
$member->setPassword("blabla");
$member->setTeam(2);
$member->setTeamLeader(1);
$entityManager->persist($member);
$entityManager->flush();
echo "Created member with ID " . $member->getId() . "\n";




die();
$route = new \app\core\Route();
try {


    $route->routeQuery();
} catch (\Exception $ex) {
    \app\core\handleError($ex);
}

