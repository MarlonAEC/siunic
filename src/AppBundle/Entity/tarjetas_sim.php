<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * tarjetas_sim
 *
 * @ORM\Table(name="tarjetas_sim")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\tarjetas_simRepository")
 */
class tarjetas_sim
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
     * @ORM\ManyToOne(targetEntity="contrato_recarga_por_pos", cascade={"all"})
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank(message="No debe estar vacío")
     */
    private $contrato;

    /**
     * @var string
     *
     * @ORM\Column(name="denominacion", type="string", length=255)
     */
    private $denominacion;

    /**
     * @var string
     *
     * @ORM\Column(name="no_serie", type="string", length=255, unique=true)
     */
    private $noSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="no_servicio_asociado", type="string", length=255, unique=true)
     */
    private $noServicioAsociado;
    
    public function __toString() {
        return $this->getId() ? 'Tarjeta SIM perteneciente al contrato:'.$this->getContrato()->getNumeroContrato():'';
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
     * Set denominacion.
     *
     * @param string $denominacion
     *
     * @return tarjetas_sim
     */
    public function setDenominacion($denominacion)
    {
        $this->denominacion = $denominacion;

        return $this;
    }

    /**
     * Get denominacion.
     *
     * @return string
     */
    public function getDenominacion()
    {
        return $this->denominacion;
    }

    /**
     * Set noSerie.
     *
     * @param string $noSerie
     *
     * @return tarjetas_sim
     */
    public function setNoSerie($noSerie)
    {
        $this->noSerie = $noSerie;

        return $this;
    }

    /**
     * Get noSerie.
     *
     * @return string
     */
    public function getNoSerie()
    {
        return $this->noSerie;
    }

    /**
     * Set noServicioAsociado.
     *
     * @param string $noServicioAsociado
     *
     * @return tarjetas_sim
     */
    public function setNoServicioAsociado($noServicioAsociado)
    {
        $this->noServicioAsociado = $noServicioAsociado;

        return $this;
    }

    /**
     * Get noServicioAsociado.
     *
     * @return string
     */
    public function getNoServicioAsociado()
    {
        return $this->noServicioAsociado;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_recarga_por_pos $contrato
     *
     * @return tarjetas_sim
     */
    public function setContrato(\AppBundle\Entity\contrato_recarga_por_pos $contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato.
     *
     * @return \AppBundle\Entity\contrato_recarga_por_pos
     */
    public function getContrato()
    {
        return $this->contrato;
    }
}
