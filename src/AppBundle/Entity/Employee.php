<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use Doctrine\ORM\Mapping\DiscriminatorMap;
use Doctrine\ORM\Mapping\InheritanceType;

/**
 * Employee
 * @InheritanceType("JOINED")
 * @DiscriminatorColumn(name="type", type="string")
 * @DiscriminatorMap({"user" = "User", "employee" = "Employee"})
 * @ORM\Table(name="employee")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EmployeeRepository")
 */
class Employee
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

	/**
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Grade")
	 * @ORM\JoinColumn(name="grade_id", referencedColumnName="id")
	 */
    protected $grade;

	/**
	 * @return mixed
	 */
	public function getGrade() {
		return $this->grade;
	}

	/**
	 * @param mixed $grade
	 */
	public function setGrade( Grade $grade ) {
		$this->grade = $grade;
	}

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     */
    protected $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=255, unique=true)
     */
    protected $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=255, unique=true)
     */
    protected $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="nationality", type="string", length=255)
     */
    protected $nationality;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=50)
     */
    protected $status;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    protected $adresse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="workingDuration", type="integer", nullable=true)
     */
    protected $workingDuration;

    /**
     * @var int|null
     *
     * @ORM\Column(name="income", type="integer", nullable=true)
     */
    protected $income;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cost", type="integer", nullable=true)
     */
    protected $cost;


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
     * Set name.
     *
     * @param string $name
     *
     * @return Employee
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lastName.
     *
     * @param string $lastName
     *
     * @return Employee
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set matricule.
     *
     * @param string $matricule
     *
     * @return Employee
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule.
     *
     * @return string
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set cin.
     *
     * @param string $cin
     *
     * @return Employee
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin.
     *
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set nationality.
     *
     * @param string $nationality
     *
     * @return Employee
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality.
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set status.
     *
     * @param string $status
     *
     * @return Employee
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set adresse.
     *
     * @param string $adresse
     *
     * @return Employee
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse.
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set workingDuration.
     *
     * @param int|null $workingDuration
     *
     * @return Employee
     */
    public function setWorkingDuration($workingDuration = null)
    {
        $this->workingDuration = $workingDuration;

        return $this;
    }

    /**
     * Get workingDuration.
     *
     * @return int|null
     */
    public function getWorkingDuration()
    {
        return $this->workingDuration;
    }

    /**
     * Set income.
     *
     * @param int|null $income
     *
     * @return Employee
     */
    public function setIncome($income = null)
    {
        $this->income = $income;

        return $this;
    }

    /**
     * Get income.
     *
     * @return int|null
     */
    public function getIncome()
    {
        return $this->income;
    }

    /**
     * Set cost.
     *
     * @param int|null $cost
     *
     * @return Employee
     */
    public function setCost($cost = null)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost.
     *
     * @return int|null
     */
    public function getCost()
    {
        return $this->cost;
    }
}
