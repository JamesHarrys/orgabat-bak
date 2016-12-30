<?php

namespace Orgabat\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Section
 *
 * @ORM\Table(name="section")
 * @ORM\Entity(repositoryClass="Orgabat\GameBundle\Repository\SectionRepository")
 */
class Section
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
     * @ORM\Column(type="string")
     */
    private $name;


    /**
     * @ORM\OneToMany(targetEntity="Orgabat\GameBundle\Entity\Apprentice", mappedBy="group")
     */
    private $apprentices;

    /**
     * @ORM\OneToMany(targetEntity="Orgabat\GameBundle\Entity\Trainer", mappedBy="group")
     */
    private $trainers;


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
     * @return Section
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
     * Get name
     *
     * @return string
     */
    public function getSection()
    {
        return $this->name;
    }


    /**
     * @return mixed
     */
    public function getApprentices()
    {
        return $this->apprentices;
    }

    /**
     * @param mixed $apprentices
     */
    public function setApprentices($apprentices)
    {
        $this->apprentices = $apprentices;
    }

    /**
     * @return mixed
     */
    public function getTrainers()
    {
        return $this->teachers;
    }

    /**
     * @param mixed $trainers
     */
    public function setTrainers($trainers)
    {
        $this->trainers = $trainers;
    }




    public function getData()
    {
        $tab = [];
        $tab[0] = $this->getName();
        return $tab;
    }
}

