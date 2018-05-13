<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salary
 *
 * @ORM\Table(name="salary")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SalaryRepository")
 */
class Salary
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
     * @var float
     *
     * @ORM\Column(name="BaseSalaire", type="float")
     */
    private $baseSalaire;

    /**
     * @var float
     *
     * @ORM\Column(name="complementSalaire", type="float")
     */
    private $complementSalaire;

    /**
     * @var float|null
     *
     * @ORM\Column(name="indemniteComplementaire", type="float", nullable=true)
     */
    private $indemniteComplementaire;

    /**
     * @var float|null
     *
     * @ORM\Column(name="indemniteKilometrique", type="float", nullable=true)
     */
    private $indemniteKilometrique;

    /**
     * @var float
     *
     * @ORM\Column(name="indemnitePresence", type="float")
     */
    private $indemnitePresence;

    /**
     * @var float|null
     *
     * @ORM\Column(name="primelogement", type="float", nullable=true)
     */
    private $primelogement;

    /**
     * @var float|null
     *
     * @ORM\Column(name="indemniteTransport", type="float", nullable=true)
     */
    private $indemniteTransport;

    /**
     * @var float|null
     *
     * @ORM\Column(name="primeRendement", type="float", nullable=true)
     */
    private $primeRendement;

    /**
     * @var float|null
     *
     * @ORM\Column(name="primeService", type="float", nullable=true)
     */
    private $primeService;

    /**
     * @var float|null
     *
     * @ORM\Column(name="primeComplementaire", type="float", nullable=true)
     */
    private $primeComplementaire;

    /**
     * @var float
     *
     * @ORM\Column(name="primeAnnuelle", type="float")
     */
    private $primeAnnuelle;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set baseSalaire.
     *
     * @param float $baseSalaire
     *
     * @return Salary
     */
    public function setBaseSalaire($baseSalaire)
    {
        $this->baseSalaire = $baseSalaire;

        return $this;
    }

    /**
     * Get baseSalaire.
     *
     * @return float
     */
    public function getBaseSalaire()
    {
        return $this->baseSalaire;
    }

    /**
     * Set complementSalaire.
     *
     * @param float $complementSalaire
     *
     * @return Salary
     */
    public function setComplementSalaire($complementSalaire)
    {
        $this->complementSalaire = $complementSalaire;

        return $this;
    }

    /**
     * Get complementSalaire.
     *
     * @return float
     */
    public function getComplementSalaire()
    {
        return $this->complementSalaire;
    }

    /**
     * Set indemniteComplementaire.
     *
     * @param float|null $indemniteComplementaire
     *
     * @return Salary
     */
    public function setIndemniteComplementaire($indemniteComplementaire = null)
    {
        $this->indemniteComplementaire = $indemniteComplementaire;

        return $this;
    }

    /**
     * Get indemniteComplementaire.
     *
     * @return float|null
     */
    public function getIndemniteComplementaire()
    {
        return $this->indemniteComplementaire;
    }

    /**
     * Set indemniteKilometrique.
     *
     * @param float|null $indemniteKilometrique
     *
     * @return Salary
     */
    public function setIndemniteKilometrique($indemniteKilometrique = null)
    {
        $this->indemniteKilometrique = $indemniteKilometrique;

        return $this;
    }

    /**
     * Get indemniteKilometrique.
     *
     * @return float|null
     */
    public function getIndemniteKilometrique()
    {
        return $this->indemniteKilometrique;
    }

    /**
     * Set indemnitePresence.
     *
     * @param float $indemnitePresence
     *
     * @return Salary
     */
    public function setIndemnitePresence($indemnitePresence)
    {
        $this->indemnitePresence = $indemnitePresence;

        return $this;
    }

    /**
     * Get indemnitePresence.
     *
     * @return float
     */
    public function getIndemnitePresence()
    {
        return $this->indemnitePresence;
    }

    /**
     * Set primelogement.
     *
     * @param float|null $primelogement
     *
     * @return Salary
     */
    public function setPrimelogement($primelogement = null)
    {
        $this->primelogement = $primelogement;

        return $this;
    }

    /**
     * Get primelogement.
     *
     * @return float|null
     */
    public function getPrimelogement()
    {
        return $this->primelogement;
    }

    /**
     * Set indemniteTransport.
     *
     * @param float|null $indemniteTransport
     *
     * @return Salary
     */
    public function setIndemniteTransport($indemniteTransport = null)
    {
        $this->indemniteTransport = $indemniteTransport;

        return $this;
    }

    /**
     * Get indemniteTransport.
     *
     * @return float|null
     */
    public function getIndemniteTransport()
    {
        return $this->indemniteTransport;
    }

    /**
     * Set primeRendement.
     *
     * @param float|null $primeRendement
     *
     * @return Salary
     */
    public function setPrimeRendement($primeRendement = null)
    {
        $this->primeRendement = $primeRendement;

        return $this;
    }

    /**
     * Get primeRendement.
     *
     * @return float|null
     */
    public function getPrimeRendement()
    {
        return $this->primeRendement;
    }

    /**
     * Set primeService.
     *
     * @param float|null $primeService
     *
     * @return Salary
     */
    public function setPrimeService($primeService = null)
    {
        $this->primeService = $primeService;

        return $this;
    }

    /**
     * Get primeService.
     *
     * @return float|null
     */
    public function getPrimeService()
    {
        return $this->primeService;
    }

    /**
     * Set primeComplementaire.
     *
     * @param float|null $primeComplementaire
     *
     * @return Salary
     */
    public function setPrimeComplementaire($primeComplementaire = null)
    {
        $this->primeComplementaire = $primeComplementaire;

        return $this;
    }

    /**
     * Get primeComplementaire.
     *
     * @return float|null
     */
    public function getPrimeComplementaire()
    {
        return $this->primeComplementaire;
    }

    /**
     * Set primeAnnuelle.
     *
     * @param float $primeAnnuelle
     *
     * @return Salary
     */
    public function setPrimeAnnuelle($primeAnnuelle)
    {
        $this->primeAnnuelle = $primeAnnuelle;

        return $this;
    }

    /**
     * Get primeAnnuelle.
     *
     * @return float
     */
    public function getPrimeAnnuelle()
    {
        return $this->primeAnnuelle;
    }
}
