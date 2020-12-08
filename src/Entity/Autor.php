<?php


namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="autores")
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
     * @ORM\OneToMany(targetEntity="Libro", mappedBy="autores")
     * @var Libro[]|Collection
     */
    private $libros;

    /**
     * @ORM\ManyToMany(targetEntity="Socio", mappedBy="autores")
     * @var Socio[]|Collection
     */
    private $socios;

    /**
     * Autor constructor.
     */
    public function __construct()
    {
        $this->libros = new ArrayCollection();
        $this->socios = new ArrayCollection();
    }

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
    public function setPseudonimo(string $pseudonimo = null): Autor
    {
        $this->pseudonimo = $pseudonimo;
        return $this;
    }

    /**
     * @return Collection|Libro[]
     */
    public function getLibros()
    {
        return $this->libros;
    }

    /**
     * @param Collection|Libro[] $libros
     * @return Autor
     */
    public function setLibros($libros)
    {
        $this->libros = $libros;
        return $this;
    }

    /**
     * @return Socio[]|Collection
     */
    public function getSocios()
    {
        return $this->socios;
    }

    /**
     * @param Socio[]|Collection $socios
     * @return Autor
     */
    public function setSocios($socios)
    {
        $this->socios = $socios;
        return $this;
    }


}