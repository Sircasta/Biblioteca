<?php


namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="socio")
 */
class Socio
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     * @var string
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=50)
     * @var string
     */
    private $apellidos;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     * @var string
     */
    private $dni;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $estudiante;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $docente;

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
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     * @return Socio
     */
    public function setNombre(string $nombre): Socio
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return string
     */
    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    /**
     * @param string $apellidos
     * @return Socio
     */
    public function setApellidos(string $apellidos): Socio
    {
        $this->apellidos = $apellidos;
        return $this;
    }

    /**
     * @return string/null
     */
    public function getDni(): ?string
    {
        return $this->dni;
    }

    /**
     * @param string $dni
     * @return Socio
     */
    public function setDni(string $dni = null): Socio
    {
        $this->dni = $dni;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEstudiante(): bool
    {
        return $this->estudiante;
    }

    /**
     * @param bool $estudiante
     * @return Socio
     */
    public function setEstudiante(bool $estudiante): Socio
    {
        $this->estudiante = $estudiante;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDocente(): bool
    {
        return $this->docente;
    }

    /**
     * @param bool $docente
     * @return Socio
     */
    public function setDocente(bool $docente): Socio
    {
        $this->docente = $docente;
        return $this;
    }


}