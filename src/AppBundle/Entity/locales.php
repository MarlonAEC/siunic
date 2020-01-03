<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * locales
 *
 * @ORM\Table(name="locales")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\localesRepository")
 */
class locales
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
     *
     * @ORM\ManyToOne(targetEntity="anexo5_arrendamiento_espacios")
     * @ORM\JoinColumn(name="id_anexo", referencedColumnName="id", nullable=false)
     */
    private $anexo;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="transformacion_a_realizar", type="string", length=255)
     */
    private $transformacionARealizar;

    /**
     * @var string
     *
     * @ORM\Column(name="trabajos_inducidos", type="string", length=255)
     */
    private $trabajosInducidos;

    public function __toString() {
        return $this->getId()?$this->getId():'';
    }

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
     * Set direccion.
     *
     * @param string $direccion
     *
     * @return locales
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion.
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set transformacionARealizar.
     *
     * @param string $transformacionARealizar
     *
     * @return locales
     */
    public function setTransformacionARealizar($transformacionARealizar)
    {
        $this->transformacionARealizar = $transformacionARealizar;

        return $this;
    }

    /**
     * Get transformacionARealizar.
     *
     * @return string
     */
    public function getTransformacionARealizar()
    {
        return $this->transformacionARealizar;
    }

    /**
     * Set trabajosInducidos.
     *
     * @param string $trabajosInducidos
     *
     * @return locales
     */
    public function setTrabajosInducidos($trabajosInducidos)
    {
        $this->trabajosInducidos = $trabajosInducidos;

        return $this;
    }

    /**
     * Get trabajosInducidos.
     *
     * @return string
     */
    public function getTrabajosInducidos()
    {
        return $this->trabajosInducidos;
    }

    /**
     * Set anexo.
     *
     * @param \AppBundle\Entity\anexo5_arrendamiento_espacios $anexo
     *
     * @return locales
     */
    public function setAnexo(\AppBundle\Entity\anexo5_arrendamiento_espacios $anexo)
    {
        $this->anexo = $anexo;

        return $this;
    }

    /**
     * Get anexo.
     *
     * @return \AppBundle\Entity\anexo5_arrendamiento_espacios
     */
    public function getAnexo()
    {
        return $this->anexo;
    }
}
