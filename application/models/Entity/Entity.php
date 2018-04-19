<?php
namespace app\models\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity @ORM\Table(name="member")
 **/
abstract class Entity {

    //TODO: set to protected ?
    /**
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     * @Column(type="integer")
     */
    public $id;
	
	public function getID()
    {
        return $this->id;
    }
	
	public function setID(int $id)
    {
        $this->id = $id;
    }

    //TODO: usable ?
    //abstract function entityToArray();

}