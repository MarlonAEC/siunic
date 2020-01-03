<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * relacion_iluminacion_tomacorriente
 *
 * @ORM\Table(name="relacion_iluminacion_tomacorriente")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\relacion_iluminacion_tomacorrienteRepository")
 */
class relacion_iluminacion_tomacorriente
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
     * @ORM\ManyToOne(targetEntity="sistema_iluminacion_a5")
     * @ORM\JoinColumn(name="id_sistema_iluminacion", referencedColumnName="id", nullable=false)
     */
    private $sistemaIluminacion;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="tomacorrientes")
     * @ORM\JoinColumn(name="id_tomacorriente", referencedColumnName="id", nullable=false)
     */
    private $tomacorriente;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;


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
     * Set cantidad.
     *
     * @param int $cantidad
     *
     * @return relacion_iluminacion_tomacorriente
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad.
     *
     * @return int
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set sistemaIluminacion.
     *
     * @param \AppBundle\Entity\sistema_iluminacion_a5 $sistemaIluminacion
     *
     * @return relacion_iluminacion_tomacorriente
     */
    public function setSistemaIluminacion(\AppBundle\Entity\sistema_iluminacion_a5 $sistemaIluminacion)
    {
        $this->sistemaIluminacion = $sistemaIluminacion;

        return $this;
    }

    /**
     * Get sistemaIluminacion.
     *
     * @return \AppBundle\Entity\sistema_iluminacion_a5
     */
    public function getSistemaIluminacion()
    {
        return $this->sistemaIluminacion;
    }

    /**
     * Set tomacorriente.
     *
     * @param \AppBundle\Entity\tomacorrientes $tomacorriente
     *
     * @return relacion_iluminacion_tomacorriente
     */
    public function setTomacorriente(\AppBundle\Entity\tomacorrientes $tomacorriente)
    {
        $this->tomacorriente = $tomacorriente;

        return $this;
    }

    /**
     * Get tomacorriente.
     *
     * @return \AppBundle\Entity\tomacorrientes
     */
    public function getTomacorriente()
    {
        return $this->tomacorriente;
    }
}
