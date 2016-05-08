<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Monster
 *
 * @ORM\Table(name="monster")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MonsterRepository")
 */
class Monster
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
     * @var int
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @var int
     *
     * @ORM\Column(name="health", type="integer")
     */
    private $health;

    /**
     * @var int
     *
     * @ORM\Column(name="mana", type="integer")
     */
    private $mana;

    /**
     * @var int
     *
     * @ORM\Column(name="damage", type="integer")
     */
    private $damage;

    /**
     * @var int
     *
     * @ORM\Column(name="deviation", type="integer")
     */
    private $deviation;

    /**
     * @var int
     *
     * @ORM\Column(name="defense", type="integer")
     */
    private $defense;

    /**
     * @var array
     *
     * @ORM\Column(name="skill", type="array", nullable=true)
     */
    private $skill;

    /**
     * @var MonsterType
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\MonsterType", inversedBy="monsters")
     */
    private $type;

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
     * @return Monster
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
     * Set level
     *
     * @param integer $level
     *
     * @return Monster
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }


    /**
     * Set health
     *
     * @param integer $health
     *
     * @return Monster
     */
    public function setHealth($health)
    {
        $this->health = $health;

        return $this;
    }

    /**
     * Get health
     *
     * @return int
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Set mana
     *
     * @param integer $mana
     *
     * @return Monster
     */
    public function setMana($mana)
    {
        $this->mana = $mana;

        return $this;
    }

    /**
     * Get mana
     *
     * @return int
     */
    public function getMana()
    {
        return $this->mana;
    }

    /**
     * Set damage
     *
     * @param integer $damage
     *
     * @return Monster
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;

        return $this;
    }

    /**
     * Get damage
     *
     * @return int
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * Set deviation
     *
     * @param integer $deviation
     *
     * @return Monster
     */
    public function setDeviation($deviation)
    {
        $this->deviation = $deviation;

        return $this;
    }

    /**
     * Get deviation
     *
     * @return int
     */
    public function getDeviation()
    {
        return $this->deviation;
    }

    /**
     * Set defense
     *
     * @param integer $defense
     *
     * @return Monster
     */
    public function setDefense($defense)
    {
        $this->defense = $defense;

        return $this;
    }

    /**
     * Get defense
     *
     * @return int
     */
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Set skill
     *
     * @param array $skill
     *
     * @return Monster
     */
    public function setSkill($skill)
    {
        $this->skill = $skill;

        return $this;
    }

    /**
     * Get skill
     *
     * @return array
     */
    public function getSkill()
    {
        return $this->skill;
    }

    /**
     * Set type.
     *
     * @param \AppBundle\Entity\MonsterType $type
     *
     * @return Monster
     */
    public function setType(MonsterType $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return \AppBundle\Entity\MonsterType
     */
    public function getType()
    {
        return $this->type;
    }
}
