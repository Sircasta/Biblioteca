<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table()
 */
class Autor
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @var string
     */
    private $nombreApellidos;


    /**
     * @ORM\Column(type="date", nullable=true)
     * @var \DateTime
     */
    private $fechaNacimiento;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $nacional;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    private $pseudonimo;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNombreApellidos(): string
    {
        return $this->nombreApellidos;
    }

    /**
     * @param string $nombreApellidos
     * @return Autor
     */
    public function setNombreApellidos(string $nombreApellidos): Autor
    {
        $this->nombreApellidos = $nombreApellidos;
        return $this;
    }

    /**
     * @return \DateTime/null
     */
    public function getFechaNacimiento(): ?\DateTime
    {
        return $this->fechaNacimiento;
    }

    /**
     * @param \DateTime $fechaNacimiento
     * @return Autor
     */
    public function setFechaNacimiento(\DateTime $fechaNacimiento = null): Autor
    {
        $this->fechaNacimiento = $fechaNacimiento;
        return $this;
    }

    /**
     * @return bool
     */
    public function isNacional(): bool
    {
        return $this->nacional;
    }

    /**
     * @param bool $nacional
     * @return Autor
     */
    public function setNacional(bool $nacional): Autor
    {
        $this->nacional = $nacional;
        return $this;
    }

    /**
     * @return string/null
     */
    public function getPseudonimo(): ?string
    {
        return $this->pseudonimo;
    }

    /**
     * @param string $pseudonimo
     * @return Autor
     */
    public function setPseudonimo(string $pseudonimo): Autor
    {
        $this->pseudonimo = $pseudonimo;
        return $this;
    }


}