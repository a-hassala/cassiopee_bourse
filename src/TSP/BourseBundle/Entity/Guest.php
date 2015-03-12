<?php

namespace TSP\BourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Guest
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TSP\BourseBundle\Entity\GuestRepository")
 */
class Guest
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
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="etablissement", type="string", length=255)
     */
    private $etablissement;

    /**
     * @var string
     *
     * @ORM\Column(name="nationalite", type="string", length=255)
     */
    private $nationalite;

    /**
     * @var string
     *
     * @ORM\Column(name="niveauScolaire", type="string", length=255)
     */
    private $niveauScolaire;

    /**
     * @var string
     *
     * @ORM\Column(name="domicile", type="string", length=1000)
     */
    private $domicile;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;


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
     * @return Guest
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
     * Set prenom
     *
     * @param string $prenom
     * @return Guest
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set etablissement
     *
     * @param string $etablissement
     * @return Guest
     */
    public function setEtablissement($etablissement)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get etablissement
     *
     * @return string 
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * Set nationalite
     *
     * @param string $nationalite
     * @return Guest
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return string 
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set niveauScolaire
     *
     * @param string $niveauScolaire
     * @return Guest
     */
    public function setNiveauScolaire($niveauScolaire)
    {
        $this->niveauScolaire = $niveauScolaire;

        return $this;
    }

    /**
     * Get niveauScolaire
     *
     * @return string 
     */
    public function getNiveauScolaire()
    {
        return $this->niveauScolaire;
    }

    /**
     * Set domicile
     *
     * @param string $domicile
     * @return Guest
     */
    public function setDomicile($domicile)
    {
        $this->domicile = $domicile;

        return $this;
    }

    /**
     * Get domicile
     *
     * @return string 
     */
    public function getDomicile()
    {
        return $this->domicile;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Guest
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Guest
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Guest
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
}
