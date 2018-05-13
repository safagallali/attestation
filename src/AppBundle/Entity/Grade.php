<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grade
 *
 * @ORM\Table(name="grade")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GradeRepository")
 */
class Grade
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
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Salary", cascade={"ALL"})
     */
    private $salary;

    /**
     * @var int
     *
     * @ORM\Column(name="code_G", type="integer")
     */
    private $codeG;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_G", type="string", length=255)
     */
    private $libelleG;




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
     * Set codeG.
     *
     * @param int $codeG
     *
     * @return Grade
     */
    public function setCodeG($codeG)
    {
        $this->codeG = $codeG;

        return $this;
    }

    /**
     * Get codeG.
     *
     * @return int
     */
    public function getCodeG()
    {
        return $this->codeG;
    }

    /**
     * Set libelleG.
     *
     * @param string $libelleG
     *
     * @return Grade
     */
    public function setLibelleG($libelleG)
    {
        $this->libelleG = $libelleG;

        return $this;
    }

    /**
     * Get libelleG.
     *
     * @return string
     */
    public function getLibelleG()
    {
        return $this->libelleG;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary( Salary $salary)
    {
        $this->salary = $salary;
    }



}
