<?php


namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use mysql_xdevapi\Collection;

/**
 * @ORM\Entity()
 * @ORM\Table()
 */
class Libro
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
    private $titulo;

    /**
     * @ORM\ManyToOne(targetEntity="Autor", inversedBy="libros")
     * @ORM\JoinColumn(nullable=false)
     * @var Autor
     */
    private $autores;

    /**
     * @ORM\OneToMany(targetEntity="Editorial", mappedBy="libro")
     * @var Editorial[]|Collection
     */
    private $editoriales;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $anioPublicacion;

    /**
     * @ORM\Column(type="integer", unique=true)
     * @var int
     */
    private $isbn;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @var int
     */
    private $numeroPaginas;

    /**
     * @ORM\Column(type="text", length=25)
     * @var string
     */
    private $sinopsis;

    /**
     * Libro constructor.
     */
    public function __construct()
    {
        $this->editoriales = new ArrayCollection();
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
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * @param string $titulo
     * @return Libro
     */
    public function setTitulo(string $titulo): Libro
    {
        $this->titulo = $titulo;
        return $this;
    }

    /**
     * @return Autor
     */
    public function getAutores(): Autor
    {
        return $this->autores;
    }

    /**
     * @param Autor $autores
     * @return Libro
     */
    public function setAutores(Autor $autores): Libro
    {
        $this->autores = $autores;
        return $this;
    }

    /**
     * @return string
     */
    public function getEditorial(): string
    {
        return $this->editorial;
    }

    /**
     * @param string $editorial
     * @return Libro
     */
    public function setEditorial(string $editorial): Libro
    {
        $this->editorial = $editorial;
        return $this;
    }

    /**
     * @return int
     */
    public function getAnioPublicacion(): int
    {
        return $this->anioPublicacion;
    }

    /**
     * @param int $anioPublicacion
     * @return Libro
     */
    public function setAnioPublicacion(int $anioPublicacion): Libro
    {
        $this->anioPublicacion = $anioPublicacion;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsbn(): int
    {
        return $this->isbn;
    }

    /**
     * @param int $isbn
     * @return Libro
     */
    public function setIsbn(int $isbn): Libro
    {
        $this->isbn = $isbn;
        return $this;
    }

    /**
     * @return int/null
     */
    public function getNumeroPaginas(): ?int
    {
        return $this->numeroPaginas;
    }

    /**
     * @param int $numeroPaginas
     * @return Libro
     */
    public function setNumeroPaginas(int $numeroPaginas = null): Libro
    {
        $this->numeroPaginas = $numeroPaginas;
        return $this;
    }

    /**
     * @return string
     */
    public function getSinopsis(): string
    {
        return $this->sinopsis;
    }

    /**
     * @param string $sinopsis
     * @return Libro
     */
    public function setSinopsis(string $sinopsis): Libro
    {
        $this->sinopsis = $sinopsis;
        return $this;
    }


}