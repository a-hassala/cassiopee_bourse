<?php

namespace TSP\BourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Scolarite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TSP\BourseBundle\Entity\ScolariteRepository")
 */
class Scolarite
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set guest
     *
     * @param \TSP\BourseBundle\Entity\Guest $guest
     * @return Scolarite
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
}
