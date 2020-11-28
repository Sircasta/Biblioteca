<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table()
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
}