<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(type="string", length=25)
     * @var string
     */
    private $autor;

    /**
     * @ORM\Column(type="string", length=25)
     * @var string
     */
    private $editorial;

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
}