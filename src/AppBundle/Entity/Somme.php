<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Somme
 *
 * @ORM\Table(name="somme")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SommeRepository")
 */
class Somme
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
     * @ORM\Column(name="a", type="integer")
     */
    private $a;

    /**
     * @var int
     *
     * @ORM\Column(name="b", type="integer")
     */
    private $b;

    /**
     * @var int|null
     *
     * @ORM\Column(name="c", type="integer", nullable=true)
     */
    private $c;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct()
    {
    }

    /**
     * Set b.
     *
     * @param int $b
     *
     * @return Somme
     */
    public function setB($b)
    {
        $this->b = $b;

        return $this;
    }

    /**
     * Get b.
     *
     * @return int
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * Set c.
     *
     * @param int|null $c
     *
     * @return Somme
     */
    public function setC($c = null)
    {
        $this->c = $c;

        return $this;
    }

    /**
     * Get c.
     *
     * @return int|null
     */
    public function getC()
    {
        return $this->c;
    }

    /**
     * Set a.
     *
     * @param int $a
     *
     * @return Somme
     */
    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }

    /**
     * Get a.
     *
     * @return int
     */
    public function getA()
    {
        return $this->a;
    }
}
