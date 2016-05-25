<?php

namespace Orgabat\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * HistoricalRealisation
 *
 * @ORM\Table(name="history_realisation")
 * @ORM\Entity(repositoryClass="Orgabat\GameBundle\Repository\HistoryRealisationRepository")
 */
class HistoryRealisation
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="time")
     */
    private $timer;

    /**
     * @var int
     *
     * @ORM\Column(name="healthNote", type="integer")
     * @Assert\Range(
     *     min = 0,
     *     minMessage= "La note de peut pas être inférieure à {{ limit }}."
     * )
     */
    private $healthNote;

    /**
     * @var int
     *
     * @ORM\Column(name="organizationNote", type="integer")
     * @Assert\Range(
     *     min = 0,
     *     minMessage= "La note de peut pas être inférieure à {{ limit }}."
     * )
     */
    private $organizationNote;

    /**
     * @var int
     *
     * @ORM\Column(name="businessNotorietyNote", type="integer")
     * @Assert\Range(
     *     min = 0,
     *     minMessage= "La note de peut pas être inférieure à {{ limit }}."
     * )
     */
    private $businessNotorietyNote;

    /**
     * @var int
     *
     * @ORM\Column(name="healthMaxNote", type="integer")
     * @Assert\Range(
     *     min = 0,
     *     minMessage= "La note de peut pas être inférieure à {{ limit }}."
     * )
     */
    private $healthMaxNote;

    /**
     * @var int
     *
     * @ORM\Column(name="organizationMaxNote", type="integer")
     * @Assert\Range(
     *     min = 0,
     *     minMessage= "La note de peut pas être inférieure à {{ limit }}."
     * )
     */
    private $organizationMaxNote;

    /**
     * @var int
     *
     * @ORM\Column(name="businessNotorietyMaxNote", type="integer")
     * @Assert\Range(
     *     min = 0,
     *     minMessage= "La note de peut pas être inférieure à {{ limit }}."
     * )
     */
    private $businessNotorietyMaxNote;

    /**
     * @ORM\OneToMany(targetEntity="Orgabat\GameBundle\Entity\Exercise", mappedBy="historyRealisation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $exercises;

    /**
     * @ORM\ManyToOne(targetEntity="Orgabat\GameBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return HistoryRealisation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set timer
     *
     * @param \DateTime $timer
     *
     * @return HistoryRealisation
     */
    public function setTimer($timer)
    {
        $this->timer = $timer;

        return $this;
    }

    /**
     * Get timer
     *
     * @return \DateTime
     */
    public function getTimer()
    {
        return $this->timer;
    }

    /**
     * Set exercise
     *
     * @param Exercise $exercise
     *
     * @return HistoryRealisation
     */
    public function setExercise(Exercise $exercise)
    {
        $this->exercise = $exercise;

        return $this;
    }

    /**
     * Get exercise
     *
     * @return Exercise
     */
    public function getExercise()
    {
        return $this->exercise;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->exercises = new ArrayCollection();
    }

    /**
     * Add exercise
     *
     * @param Exercise $exercise
     *
     * @return HistoryRealisation
     */
    public function addExercise(Exercise $exercise)
    {
        $this->exercises[] = $exercise;

        return $this;
    }

    /**
     * Remove exercise
     *
     * @param Exercise $exercise
     */
    public function removeExercise(Exercise $exercise)
    {
        $this->exercises->removeElement($exercise);
    }

    /**
     * Get exercises
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExercises()
    {
        return $this->exercises;
    }

    /**
     * Set healthNote
     *
     * @param integer $healthNote
     *
     * @return HistoryRealisation
     */
    public function setHealthNote($healthNote)
    {
        $this->healthNote = $healthNote;

        return $this;
    }

    /**
     * Get healthNote
     *
     * @return integer
     */
    public function getHealthNote()
    {
        return $this->healthNote;
    }

    /**
     * Set organizationNote
     *
     * @param integer $organizationNote
     *
     * @return HistoryRealisation
     */
    public function setOrganizationNote($organizationNote)
    {
        $this->organizationNote = $organizationNote;

        return $this;
    }

    /**
     * Get organizationNote
     *
     * @return integer
     */
    public function getOrganizationNote()
    {
        return $this->organizationNote;
    }

    /**
     * Set businessNotorietyNote
     *
     * @param integer $businessNotorietyNote
     *
     * @return HistoryRealisation
     */
    public function setBusinessNotorietyNote($businessNotorietyNote)
    {
        $this->businessNotorietyNote = $businessNotorietyNote;

        return $this;
    }

    /**
     * Get businessNotoriety
     *
     * @return integer
     */
    public function getBusinessNotorietyNote()
    {
        return $this->businessNotorietyNote;
    }

    /**
     * Set healthMaxNote
     *
     * @param integer $healthMaxNote
     *
     * @return HistoryRealisation
     */
    public function setHealthMaxNote($healthMaxNote)
    {
        $this->healthMaxNote = $healthMaxNote;

        return $this;
    }

    /**
     * Get healthMaxNote
     *
     * @return integer
     */
    public function getHealthMaxNote()
    {
        return $this->healthMaxNote;
    }

    /**
     * Set organizationMaxNote
     *
     * @param integer $organizationMaxNote
     *
     * @return HistoryRealisation
     */
    public function setOrganizationMaxNote($organizationMaxNote)
    {
        $this->organizationMaxNote = $organizationMaxNote;

        return $this;
    }

    /**
     * Get organizationMaxNote
     *
     * @return integer
     */
    public function getOrganizationMaxNote()
    {
        return $this->organizationMaxNote;
    }

    /**
     * Set businessNotorietyMaxNote
     *
     * @param integer $businessNotorietyMaxNote
     *
     * @return HistoryRealisation
     */
    public function setBusinessNotorietyMaxNote($businessNotorietyMaxNote)
    {
        $this->businessNotorietyMaxNote = $businessNotorietyMaxNote;

        return $this;
    }

    /**
     * Get businessNotorietyMaxNote
     *
     * @return integer
     */
    public function getBusinessNotorietyMaxNote()
    {
        return $this->businessNotorietyMaxNote;
    }

    /**
     * Set user
     *
     * @param \Orgabat\GameBundle\Entity\User $user
     *
     * @return HistoryRealisation
     */
    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Orgabat\GameBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
