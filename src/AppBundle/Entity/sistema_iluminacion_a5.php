<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * sistema_iluminacion_a5
 *
 * @ORM\Table(name="sistema_iluminacion_a5")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\sistema_iluminacion_a5Repository")
 */
class sistema_iluminacion_a5
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
     * @ORM\ManyToOne(targetEntity="locales")
     * @ORM\JoinColumn(name="id_local", referencedColumnName="id", nullable=false)
     */
    private $local;

    /**
     * @var bool
     *
     * @ORM\Column(name="mejoramiento_iluminacion", type="boolean")
     */
    private $mejoramientoIluminacion;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="aumento_tomacorrientes", type="boolean", nullable=true)
     */
    private $aumentoTomacorrientes;

    /**
     * @var float
     *
     * @ORM\Column(name="voltaje_a_obtener", type="float")
     */
    private $voltajeAObtener;


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
     * Set mejoramientoIluminacion.
     *
     * @param bool $mejoramientoIluminacion
     *
     * @return sistema_iluminacion_a5
     */
    public function setMejoramientoIluminacion($mejoramientoIluminacion)
    {
        $this->mejoramientoIluminacion = $mejoramientoIluminacion;

        return $this;
    }

    /**
     * Get mejoramientoIluminacion.
     *
     * @return bool
     */
    public function getMejoramientoIluminacion()
    {
        return $this->mejoramientoIluminacion;
    }

    /**
     * Set aumentoTomacorrientes.
     *
     * @param bool|null $aumentoTomacorrientes
     *
     * @return sistema_iluminacion_a5
     */
    public function setAumentoTomacorrientes($aumentoTomacorrientes = null)
    {
        $this->aumentoTomacorrientes = $aumentoTomacorrientes;

        return $this;
    }

    /**
     * Get aumentoTomacorrientes.
     *
     * @return bool|null
     */
    public function getAumentoTomacorrientes()
    {
        return $this->aumentoTomacorrientes;
    }

    /**
     * Set voltajeAObtener.
     *
     * @param float $voltajeAObtener
     *
     * @return sistema_iluminacion_a5
     */
    public function setVoltajeAObtener($voltajeAObtener)
    {
        $this->voltajeAObtener = $voltajeAObtener;

        return $this;
    }

    /**
     * Get voltajeAObtener.
     *
     * @return float
     */
    public function getVoltajeAObtener()
    {
        return $this->voltajeAObtener;
    }

    /**
     * Set local.
     *
     * @param \AppBundle\Entity\locales $local
     *
     * @return sistema_iluminacion_a5
     */
    public function setLocal(\AppBundle\Entity\locales $local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local.
     *
     * @return \AppBundle\Entity\locales
     */
    public function getLocal()
    {
        return $this->local;
    }
}
