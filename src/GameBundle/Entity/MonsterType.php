<?php

namespace GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * MonsterType
 *
 * @ORM\Table(name="monster_type")
 * @ORM\Entity(repositoryClass="GameBundle\Repository\MonsterTypeRepository")
 */
class MonsterType
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var Monster[]
     *
     * @ORM\OneToMany(targetEntity="GameBundle\Entity\Monster", mappedBy="type")
     */
    private $monsters;

    public function __construct()
    {
        $this->monsters = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return MonsterType
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add monster.
     *
     * @param \GameBundle\Entity\Monster $monster
     *
     * @return MonsterType
     */
    public function addMonster(Monster $monster)
    {
        $this->monsters[] = $monster;
        $monster->setType($this);

        return $this;
    }

    /**
     * Remove monster.
     *
     * @param \GameBundle\Entity\Monster $monster
     */
    public function removeMonster(Monster $monster)
    {
        $this->monsters->removeElement($monster);
    }

    /**
     * Get monsters.
     *
     * @return \Doctrine\Common\Collections\Collection|Monster[]
     */
    public function getMonsters()
    {
        return $this->monsters;
    }
}
