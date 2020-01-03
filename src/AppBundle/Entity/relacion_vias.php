<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * relacion_vias
 *
 * @ORM\Table(name="relacion_vias")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\relacion_viasRepository")
 */
class relacion_vias
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
     * @var string
     *
     * @ORM\Column(name="clasificacion_segun_existencia", type="string", length=50)
     */
    private $clasificacionSegunExistencia;

    /**
     * @var string
     *
     * @ORM\Column(name="clasificacion_segun_tipo", type="string", length=255)
     */
    private $clasificacionSegunTipo;

    /**
     * @var float
     *
     * @ORM\Column(name="longitud_total_vias_existentes", type="float")
     */
    private $longitudTotalViasExistentes;

    /**
     * @var float
     *
     * @ORM\Column(name="longitud_via_a_incrementar", type="float")
     */
    private $longitudViaAIncrementar;

    /**
     * @var float
     *
     * @ORM\Column(name="altura", type="float")
     */
    private $altura;


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
     * Set clasificacionSegunExistencia.
     *
     * @param string $clasificacionSegunExistencia
     *
     * @return relacion_vias
     */
    public function setClasificacionSegunExistencia($clasificacionSegunExistencia)
    {
        $this->clasificacionSegunExistencia = $clasificacionSegunExistencia;

        return $this;
    }

    /**
     * Get clasificacionSegunExistencia.
     *
     * @return string
     */
    public function getClasificacionSegunExistencia()
    {
        return $this->clasificacionSegunExistencia;
    }

    /**
     * Set clasificacionSegunTipo.
     *
     * @param string $clasificacionSegunTipo
     *
     * @return relacion_vias
     */
    public function setClasificacionSegunTipo($clasificacionSegunTipo)
    {
        $this->clasificacionSegunTipo = $clasificacionSegunTipo;

        return $this;
    }

    /**
     * Get clasificacionSegunTipo.
     *
     * @return string
     */
    public function getClasificacionSegunTipo()
    {
        return $this->clasificacionSegunTipo;
    }

    /**
     * Set longitudTotalViasExistentes.
     *
     * @param float $longitudTotalViasExistentes
     *
     * @return relacion_vias
     */
    public function setLongitudTotalViasExistentes($longitudTotalViasExistentes)
    {
        $this->longitudTotalViasExistentes = $longitudTotalViasExistentes;

        return $this;
    }

    /**
     * Get longitudTotalViasExistentes.
     *
     * @return float
     */
    public function getLongitudTotalViasExistentes()
    {
        return $this->longitudTotalViasExistentes;
    }

    /**
     * Set longitudViaAIncrementar.
     *
     * @param float $longitudViaAIncrementar
     *
     * @return relacion_vias
     */
    public function setLongitudViaAIncrementar($longitudViaAIncrementar)
    {
        $this->longitudViaAIncrementar = $longitudViaAIncrementar;

        return $this;
    }

    /**
     * Get longitudViaAIncrementar.
     *
     * @return float
     */
    public function getLongitudViaAIncrementar()
    {
        return $this->longitudViaAIncrementar;
    }

    /**
     * Set altura.
     *
     * @param float $altura
     *
     * @return relacion_vias
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get altura.
     *
     * @return float
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set local.
     *
     * @param \AppBundle\Entity\locales $local
     *
     * @return relacion_vias
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
