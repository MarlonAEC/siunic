<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * tipos_mantenimientos_correctivos
 *
 * @ORM\Table(name="tipos_mantenimientos_correctivos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\tipos_mantenimientos_correctivosRepository")
 */
class tipos_mantenimientos_correctivos
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
     * @ORM\Column(name="nombre_mantenimiento_correctivo", type="string", length=50)
     */
    private $nombreMantenimientoCorrectivo;


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
     * Set nombreMantenimientoCorrectivo.
     *
     * @param string $nombreMantenimientoCorrectivo
     *
     * @return tipos_mantenimientos_correctivos
     */
    public function setNombreMantenimientoCorrectivo($nombreMantenimientoCorrectivo)
    {
        $this->nombreMantenimientoCorrectivo = $nombreMantenimientoCorrectivo;

        return $this;
    }

    /**
     * Get nombreMantenimientoCorrectivo.
     *
     * @return string
     */
    public function getNombreMantenimientoCorrectivo()
    {
        return $this->nombreMantenimientoCorrectivo;
    }
}
