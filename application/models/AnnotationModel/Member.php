<?php
namespace app\models\AnnotationModel;
/**
 * Created by PhpStorm.
 * User: Sami
 * Date: 17-04-18
 * Time: 15:19
 */

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity @ORM\Table(name="member")
 **/
class Member
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    private $id;

    /** @ORM\Column(type="string") **/
    private $login;
    /** @ORM\Column(type="string") **/

    private $password;
    /** @ORM\Column(type="string") **/
    private $mail;
    /** @ORM\Column(type="integer") **/
    private $teamLeader;
    /** @ORM\Column(type="integer") **/
    private $team;


}