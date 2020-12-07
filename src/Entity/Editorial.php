<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table
 */
class Editorial
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
     * @ORM\Column(type="string", length=10, unique=true)
     * @var string
     */
    private $cif;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     * @var direccionPostal
     */
    private $direccionPostal;

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
     * @return Editorial
     */
    public function setNombre(string $nombre): Editorial
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return string
     */
    public function getCif(): string
    {
        return $this->cif;
    }

    /**
     * @param string $cif
     * @return Editorial
     */
    public function setCif(string $cif): Editorial
    {
        $this->cif = $cif;
        return $this;
    }

    /**
     * @return direccionPostal/null
     */
    public function getDireccionPostal(): ?direccionPostal
    {
        return $this->direccionPostal;
    }

    /**
     * @param direccionPostal $direccionPostal
     * @return Editorial
     */
    public function setDireccionPostal(direccionPostal $direccionPostal = null): Editorial
    {
        $this->direccionPostal = $direccionPostal;
        return $this;
    }


}