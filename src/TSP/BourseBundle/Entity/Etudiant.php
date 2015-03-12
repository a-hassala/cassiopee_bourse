<?php

namespace TSP\BourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Etudiant
*
* @ORM\Table()
* @ORM\Entity(repositoryClass="TSP\BourseBundle\Entity\EtudiantRepository")
*/
class Etudiant
{
    /**
    * @var integer
    *
    * @ORM\Column(name="id", type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;

    /**
    * @ORM\OneToOne(targetEntity="TSP\BourseBundle\Entity\Guest",cascade={"persist"})
    */

    private $guest;

    /**
    * @var \DateTime
    *
    * @ORM\Column(name="lastSeen", type="datetime")
    */
    private $lastSeen;


    /**

    * @ORM\ManyToMany(targetEntity="TSP\BourseBundle\Entity\Bourse", cascade={"persist"})

    */

    private $bourses;

    /**
    * Get id
    *
    * @return integer
    */
    public function getId()
    {
        return $this->id;
    }

    /**
    * Set lastSeen
    *
    * @param \DateTime $lastSeen
    * @return Etudiant
    */
    public function setLastSeen($lastSeen)
    {
        $this->lastSeen = $lastSeen;

        return $this;
    }

    /**
    * Get lastSeen
    *
    * @return \DateTime
    */
    public function getLastSeen()
    {
        return $this->lastSeen;
    }

    /**
    * Set guest
    *
    * @param \TSP\BourseBundle\Entity\Guest $guest
    * @return Etudiant
    */
    public function setGuest(\TSP\BourseBundle\Entity\Guest $guest = null)
    {
        $this->guest = $guest;

        return $this;
    }

    /**
    * Get guest
    *
    * @return \TSP\BourseBundle\Entity\Guest
    */
    public function getGuest()
    {
        return $this->guest;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->bourses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add bourses
     *
     * @param \TSP\BourseBundle\Entity\Bourse $bourses
     * @return Etudiant
     */
    public function addBourse(\TSP\BourseBundle\Entity\Bourse $bourses)
    {
        $this->bourses[] = $bourses;

        return $this;
    }

    /**
     * Remove bourses
     *
     * @param \TSP\BourseBundle\Entity\Bourse $bourses
     */
    public function removeBourse(\TSP\BourseBundle\Entity\Bourse $bourses)
    {
        $this->bourses->removeElement($bourses);
    }

    /**
     * Get bourses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBourses()
    {
        return $this->bourses;
    }
}
