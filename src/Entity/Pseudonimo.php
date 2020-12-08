<?php


namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table (name="pseudonimo")
 */
class Pseudonimo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     * @var string
     */
    private $nombre;

    /**
     * @ORM\OneToOne(targetEntity="Autor")
     * @ORM\JoinColumn(nullable=false)
     * @var Autor
     */
    private $autor;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string/null
     */
    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     * @return Pseudonimo
     */
    public function setNombre(string $nombre = null): Pseudonimo
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return Autor
     */
    public function getAutor(): Autor
    {
        return $this->autor;
    }

    /**
     * @param Autor $autor
     * @return Pseudonimo
     */
    public function setAutor(Autor $autor): Pseudonimo
    {
        $this->autor = $autor;
        return $this;
    }


}