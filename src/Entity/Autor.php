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
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $fechaNacimiento;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $nacional;
}