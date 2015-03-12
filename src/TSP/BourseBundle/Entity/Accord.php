<?php

namespace TSP\BourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accord
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TSP\BourseBundle\Entity\AccordRepository")
 */
class Accord
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
     * @var string
     *
     * @ORM\Column(name="nature", type="string", length=255)
     */
    private $nature;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=255)
     */
    private $intitule;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=255)
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="conditions", type="string", length=255)
     */
    private $conditions;

    /**
     * @var string
     *
     * @ORM\Column(name="etablissementOrigine", type="string", length=255)
     */
    private $etablissementOrigine;

    /**
     * @var string
     *
     * @ORM\Column(name="etablissementDestination", type="string", length=255)
     */
    private $etablissementDestination;

    /**
     * @var string
     *
     * @ORM\Column(name="promotion", type="string", length=255)
     */
    private $promotion;

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="integer")
     */
    private $count;


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
     * Set nature
     *
     * @param string $nature
     * @return Accord
     */
    public function setNature($nature)
    {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get nature
     *
     * @return string 
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Accord
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     * @return Accord
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set duree
     *
     * @param string $duree
     * @return Accord
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string 
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set conditions
     *
     * @param string $conditions
     * @return Accord
     */
    public function setConditions($conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * Get conditions
     *
     * @return string 
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Set etablissementOrigine
     *
     * @param string $etablissementOrigine
     * @return Accord
     */
    public function setEtablissementOrigine($etablissementOrigine)
    {
        $this->etablissementOrigine = $etablissementOrigine;

        return $this;
    }

    /**
     * Get etablissementOrigine
     *
     * @return string 
     */
    public function getEtablissementOrigine()
    {
        return $this->etablissementOrigine;
    }

    /**
     * Set etablissementDestination
     *
     * @param string $etablissementDestination
     * @return Accord
     */
    public function setEtablissementDestination($etablissementDestination)
    {
        $this->etablissementDestination = $etablissementDestination;

        return $this;
    }

    /**
     * Get etablissementDestination
     *
     * @return string 
     */
    public function getEtablissementDestination()
    {
        return $this->etablissementDestination;
    }

    /**
     * Set promotion
     *
     * @param string $promotion
     * @return Accord
     */
    public function setPromotion($promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * Get promotion
     *
     * @return string 
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Set count
     *
     * @param integer $count
     * @return Accord
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer 
     */
    public function getCount()
    {
        return $this->count;
    }
}
