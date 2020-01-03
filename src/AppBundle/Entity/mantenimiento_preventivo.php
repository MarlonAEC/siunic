<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * mantenimiento_preventivo
 *
 * @ORM\Table(name="mantenimiento_preventivo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\mantenimiento_preventivoRepository")
 */
class mantenimiento_preventivo
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
     * @ORM\ManyToOne(targetEntity="anexo1_contrato_mantenimiento_pizarra_pbx")
     * @ORM\JoinColumn(name="id_anexo", referencedColumnName="id", nullable=false)
     */
    private $anexo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_mantenimiento1", type="date")
     */
    private $fechaMantenimiento1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_mantenimiento2", type="date")
     */
    private $fechaMantenimiento2;

    /**
     * @var float
     *
     * @ORM\Column(name="costo_total", type="float")
     */
    private $costoTotal;

    /**
     * @var float
     *
     * @ORM\Column(name="couta_mantenimiento", type="float")
     */
    private $coutaMantenimiento;


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
     * Set fechaMantenimiento1.
     *
     * @param \DateTime $fechaMantenimiento1
     *
     * @return mantenimiento_preventivo
     */
    public function setFechaMantenimiento1($fechaMantenimiento1)
    {
        $this->fechaMantenimiento1 = $fechaMantenimiento1;

        return $this;
    }

    /**
     * Get fechaMantenimiento1.
     *
     * @return \DateTime
     */
    public function getFechaMantenimiento1()
    {
        return $this->fechaMantenimiento1;
    }

    /**
     * Set fechaMantenimiento2.
     *
     * @param \DateTime $fechaMantenimiento2
     *
     * @return mantenimiento_preventivo
     */
    public function setFechaMantenimiento2($fechaMantenimiento2)
    {
        $this->fechaMantenimiento2 = $fechaMantenimiento2;

        return $this;
    }

    /**
     * Get fechaMantenimiento2.
     *
     * @return \DateTime
     */
    public function getFechaMantenimiento2()
    {
        return $this->fechaMantenimiento2;
    }

    /**
     * Set costoTotal.
     *
     * @param float $costoTotal
     *
     * @return mantenimiento_preventivo
     */
    public function setCostoTotal($costoTotal)
    {
        $this->costoTotal = $costoTotal;

        return $this;
    }

    /**
     * Get costoTotal.
     *
     * @return float
     */
    public function getCostoTotal()
    {
        return $this->costoTotal;
    }

    /**
     * Set coutaMantenimiento.
     *
     * @param float $coutaMantenimiento
     *
     * @return mantenimiento_preventivo
     */
    public function setCoutaMantenimiento($coutaMantenimiento)
    {
        $this->coutaMantenimiento = $coutaMantenimiento;

        return $this;
    }

    /**
     * Get coutaMantenimiento.
     *
     * @return float
     */
    public function getCoutaMantenimiento()
    {
        return $this->coutaMantenimiento;
    }

    /**
     * Set anexo.
     *
     * @param \AppBundle\Entity\anexo1_contrato_mantenimiento_pizarra_pbx $anexo
     *
     * @return mantenimiento_preventivo
     */
    public function setAnexo(\AppBundle\Entity\anexo1_contrato_mantenimiento_pizarra_pbx $anexo)
    {
        $this->anexo = $anexo;

        return $this;
    }

    /**
     * Get anexo.
     *
     * @return \AppBundle\Entity\anexo1_contrato_mantenimiento_pizarra_pbx
     */
    public function getAnexo()
    {
        return $this->anexo;
    }
}
