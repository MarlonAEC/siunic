<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * tipos_de_mantenimientos
 *
 * @ORM\Table(name="tipos_de_mantenimientos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\tipos_de_mantenimientosRepository")
 */
class tipos_de_mantenimientos
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
     * @ORM\Column(name="nombre_mantenimiento", type="string", length=50)
     */
    private $nombreMantenimiento;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreMantenimiento.
     *
     * @param string $nombreMantenimiento
     *
     * @return tipos_de_mantenimientos
     */
    public function setNombreMantenimiento($nombreMantenimiento)
    {
        $this->nombreMantenimiento = $nombreMantenimiento;

        return $this;
    }

    /**
     * Get nombreMantenimiento.
     *
     * @return string
     */
    public function getNombreMantenimiento()
    {
        return $this->nombreMantenimiento;
    }
}
