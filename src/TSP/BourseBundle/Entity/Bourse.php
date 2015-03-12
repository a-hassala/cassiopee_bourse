<?php

namespace TSP\BourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bourse
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TSP\BourseBundle\Entity\BourseRepository")
 */
class Bourse
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="validation", type="string", length=255)
     */
    private $validation;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=255)
     */
    private $duree;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="conditions", type="string", length=255)
     */
    private $conditions;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCandidature", type="date")
     */
    private $dateCandidature;

    /**
     * @var string
     *
     * @ORM\Column(name="versement", type="string", length=255)
     */
    private $versement;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=255)
     */
    private $destination;

    /**
     * @var float
     *
     * @ORM\Column(name="montantElligible", type="float")
     */
    private $montantElligible;

    /**
     * @var float
     *
     * @ORM\Column(name="montantTotal", type="float")
     */
    private $montantTotal;


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
     * Set nom
     *
     * @param string $nom
     * @return Bourse
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set validation
     *
     * @param string $validation
     * @return Bourse
     */
    public function setValidation($validation)
    {
        $this->validation = $validation;

        return $this;
    }

    /**
     * Get validation
     *
     * @return string 
     */
    public function getValidation()
    {
        return $this->validation;
    }

    /**
     * Set duree
     *
     * @param string $duree
     * @return Bourse
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
     * Set montant
     *
     * @param float $montant
     * @return Bourse
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set conditions
     *
     * @param string $conditions
     * @return Bourse
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
     * Set dateCandidature
     *
     * @param \DateTime $dateCandidature
     * @return Bourse
     */
    public function setDateCandidature($dateCandidature)
    {
        $this->dateCandidature = $dateCandidature;

        return $this;
    }

    /**
     * Get dateCandidature
     *
     * @return \DateTime 
     */
    public function getDateCandidature()
    {
        return $this->dateCandidature;
    }

    /**
     * Set versement
     *
     * @param string $versement
     * @return Bourse
     */
    public function setVersement($versement)
    {
        $this->versement = $versement;

        return $this;
    }

    /**
     * Get versement
     *
     * @return string 
     */
    public function getVersement()
    {
        return $this->versement;
    }

    /**
     * Set destination
     *
     * @param string $destination
     * @return Bourse
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string 
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set montantElligible
     *
     * @param float $montantElligible
     * @return Bourse
     */
    public function setMontantElligible($montantElligible)
    {
        $this->montantElligible = $montantElligible;

        return $this;
    }

    /**
     * Get montantElligible
     *
     * @return float 
     */
    public function getMontantElligible()
    {
        return $this->montantElligible;
    }

    /**
     * Set montantTotal
     *
     * @param float $montantTotal
     * @return Bourse
     */
    public function setMontantTotal($montantTotal)
    {
        $this->montantTotal = $montantTotal;

        return $this;
    }

    /**
     * Get montantTotal
     *
     * @return float 
     */
    public function getMontantTotal()
    {
        return $this->montantTotal;
    }
}
