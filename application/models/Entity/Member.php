<?php
namespace app\models\Entity;
require_once __DIR__.'/../../../vendor/autoload.php';
use Doctrine\ORM\Mapping as ORM;
/**
 * @Entity @Table(name="tbl_member")
 **/
class Member extends Entity{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    public $id;
    /** @OColumn(type="string") **/
    private $login;
    /** @Column(type="string") **/
    private $password;
    /** @Column(type="string") **/
    private $mail;
    /** @Column(type="integer") **/
    private $teamLeader;
    /** @Column(type="integer") **/
    private $team;


    /**
     * @param array $task
     */
    public function setTask($task)
    {
        $this->task = $task;

    }

    /**
     * @return array
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * @return mixed
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @param mixed $team
     */
    public function setTeam($team)
    {
        $this->team = $team;
    }

    public function setLogin($new_login) {
        $this->login = $new_login;
    }
    public function getLogin() {
        return $this->login;
    }


    public function setPassword($new_password) {
        $this->password = $new_password;
    }
    public function getPassword() {
        return $this->password;
    }


    public function setMail($new_mail) {
        $this->mail= $new_mail;
    }
    public function getMail() {
        return $this->mail;
    }


    public function setTeamLeader($new_teamLeader) {
        $this->teamLeader= $new_teamLeader;
    }
    public function getTeamLeader() {
        return $this->teamLeader;
    }

    public function entityToArray() {
        return get_object_vars($this);
    }

}
