<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * anexo1_contrato_areas_internet
 *
 * @ORM\Table(name="anexo1_contrato_areas_internet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\anexo1_contrato_areas_internetRepository")
 */
class anexo1_contrato_areas_internet
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
     * @ORM\OneToOne(targetEntity="contrato_areas_internet", cascade={"all"})
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank(message="No debe estar vacío")
     */
    private $contrato;

    /**
     * @var float
     *
     * @ORM\Column(name="precio_treinta_minutos", type="float")
     */
    private $precioTreintaMinutos;

    /**
     * @var float
     *
     * @ORM\Column(name="precio_sesenta_minutos", type="float")
     */
    private $precioSesentaMinutos;

    /**
     * @var int
     *
     * @ORM\Column(name="cant_unDia_vent_serv", type="integer")
     */
    private $cantUnDiaVentServ;

    /**
     * @var int
     *
     * @ORM\Column(name="cant_dosDias_vent_serv", type="integer")
     */
    private $cantDosDiasVentServ;

    /**
     * @var int
     *
     * @ORM\Column(name="cant_tresDias_vent_serv", type="integer")
     */
    private $cantTresDiasVentServ;

    /**
     * @var int
     *
     * @ORM\Column(name="cant_cincoDias_vent_serv", type="integer")
     */
    private $cantCincoDiasVentServ;

    /**
     * @var int
     *
     * @ORM\Column(name="cant_sieteDias_vent_serv", type="integer")
     */
    private $cantSieteDiasVentServ;

    /**
     * @var int
     *
     * @ORM\Column(name="cant_unYear_vent_serv", type="integer")
     */
    private $cantUnYearVentServ;

    /**
     * @var int
     *
     * @ORM\Column(name="cant_unaHora_vent_serv", type="integer")
     */
    private $cantUnaHoraVentServ;

    /**
     * @var int
     *
     * @ORM\Column(name="cant_cincoHoras_vent_serv", type="integer")
     */
    private $cantCincoHorasVentServ;

    /**
     * @var int
     *
     * @ORM\Column(name="cant_plegable_unaHora_vent_serv", type="integer")
     */
    private $cantPlegableUnaHoraVentServ;

    /**
     * @var int
     *
     * @ORM\Column(name="cant_unDia_incluir_servicio", type="integer")
     */
    private $cantUnDiaIncluirServicio;

    /**
     * @var int
     *
     * @ORM\Column(name="cant_dosDias_incluir_servicio", type="integer")
     */
    private $cantDosDiasIncluirServicio;

    /**
     * @var int
     *
     * @ORM\Column(name="cant_tresDias_incluir_servicio", type="integer")
     */
    private $cantTresDiasIncluirServicio;

    /**
     * @var int
     *
     * @ORM\Column(name="cant_cincoDias_incluir_servicio", type="integer")
     */
    private $cantCincoDiasIncluirServicio;

    /**
     * @var int
     *
     * @ORM\Column(name="cant_sieteDias_incluir_servicio", type="integer")
     */
    private $cantSieteDiasIncluirServicio;

    /**
     * @var int
     *
     * @ORM\Column(name="cant_unYear_incluir_servicio", type="integer")
     */
    private $cantUnYearIncluirServicio;

    /**
     * @var int
     *
     * @ORM\Column(name="cant_unaHora_incluir_servicio", type="integer")
     */
    private $cantUnaHoraIncluirServicio;

    /**
     * @var int
     *
     * @ORM\Column(name="cant_cincoHoras_incluir_servicio", type="integer")
     */
    private $cantCincoHorasIncluirServicio;

    /**
     * @var bool
     *
     * @ORM\Column(name="restriccion_navegacion", type="boolean")
     */
    private $restriccionNavegacion;
    
    public function __toString() {
        return $this->getId()?"Anexo 1 al Contrato".$this->getContrato()->getNumeroContrato():"";
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
     * Set precioTreintaMinutos.
     *
     * @param float $precioTreintaMinutos
     *
     * @return anexo1_contrato_areas_internet
     */
    public function setPrecioTreintaMinutos($precioTreintaMinutos)
    {
        $this->precioTreintaMinutos = $precioTreintaMinutos;

        return $this;
    }

    /**
     * Get precioTreintaMinutos.
     *
     * @return float
     */
    public function getPrecioTreintaMinutos()
    {
        return $this->precioTreintaMinutos;
    }

    /**
     * Set precioSesentaMinutos.
     *
     * @param float $precioSesentaMinutos
     *
     * @return anexo1_contrato_areas_internet
     */
    public function setPrecioSesentaMinutos($precioSesentaMinutos)
    {
        $this->precioSesentaMinutos = $precioSesentaMinutos;

        return $this;
    }

    /**
     * Get precioSesentaMinutos.
     *
     * @return float
     */
    public function getPrecioSesentaMinutos()
    {
        return $this->precioSesentaMinutos;
    }

    /**
     * Set cantUnDiaVentServ.
     *
     * @param int $cantUnDiaVentServ
     *
     * @return anexo1_contrato_areas_internet
     */
    public function setCantUnDiaVentServ($cantUnDiaVentServ)
    {
        $this->cantUnDiaVentServ = $cantUnDiaVentServ;

        return $this;
    }

    /**
     * Get cantUnDiaVentServ.
     *
     * @return int
     */
    public function getCantUnDiaVentServ()
    {
        return $this->cantUnDiaVentServ;
    }

    /**
     * Set cantDosDiasVentServ.
     *
     * @param int $cantDosDiasVentServ
     *
     * @return anexo1_contrato_areas_internet
     */
    public function setCantDosDiasVentServ($cantDosDiasVentServ)
    {
        $this->cantDosDiasVentServ = $cantDosDiasVentServ;

        return $this;
    }

    /**
     * Get cantDosDiasVentServ.
     *
     * @return int
     */
    public function getCantDosDiasVentServ()
    {
        return $this->cantDosDiasVentServ;
    }

    /**
     * Set cantTresDiasVentServ.
     *
     * @param int $cantTresDiasVentServ
     *
     * @return anexo1_contrato_areas_internet
     */
    public function setCantTresDiasVentServ($cantTresDiasVentServ)
    {
        $this->cantTresDiasVentServ = $cantTresDiasVentServ;

        return $this;
    }

    /**
     * Get cantTresDiasVentServ.
     *
     * @return int
     */
    public function getCantTresDiasVentServ()
    {
        return $this->cantTresDiasVentServ;
    }

    /**
     * Set cantCincoDiasVentServ.
     *
     * @param int $cantCincoDiasVentServ
     *
     * @return anexo1_contrato_areas_internet
     */
    public function setCantCincoDiasVentServ($cantCincoDiasVentServ)
    {
        $this->cantCincoDiasVentServ = $cantCincoDiasVentServ;

        return $this;
    }

    /**
     * Get cantCincoDiasVentServ.
     *
     * @return int
     */
    public function getCantCincoDiasVentServ()
    {
        return $this->cantCincoDiasVentServ;
    }

    /**
     * Set cantSieteDiasVentServ.
     *
     * @param int $cantSieteDiasVentServ
     *
     * @return anexo1_contrato_areas_internet
     */
    public function setCantSieteDiasVentServ($cantSieteDiasVentServ)
    {
        $this->cantSieteDiasVentServ = $cantSieteDiasVentServ;

        return $this;
    }

    /**
     * Get cantSieteDiasVentServ.
     *
     * @return int
     */
    public function getCantSieteDiasVentServ()
    {
        return $this->cantSieteDiasVentServ;
    }

    /**
     * Set cantUnYearVentServ.
     *
     * @param int $cantUnYearVentServ
     *
     * @return anexo1_contrato_areas_internet
     */
    public function setCantUnYearVentServ($cantUnYearVentServ)
    {
        $this->cantUnYearVentServ = $cantUnYearVentServ;

        return $this;
    }

    /**
     * Get cantUnYearVentServ.
     *
     * @return int
     */
    public function getCantUnYearVentServ()
    {
        return $this->cantUnYearVentServ;
    }

    /**
     * Set cantUnaHoraVentServ.
     *
     * @param int $cantUnaHoraVentServ
     *
     * @return anexo1_contrato_areas_internet
     */
    public function setCantUnaHoraVentServ($cantUnaHoraVentServ)
    {
        $this->cantUnaHoraVentServ = $cantUnaHoraVentServ;

        return $this;
    }

    /**
     * Get cantUnaHoraVentServ.
     *
     * @return int
     */
    public function getCantUnaHoraVentServ()
    {
        return $this->cantUnaHoraVentServ;
    }

    /**
     * Set cantCincoHorasVentServ.
     *
     * @param int $cantCincoHorasVentServ
     *
     * @return anexo1_contrato_areas_internet
     */
    public function setCantCincoHorasVentServ($cantCincoHorasVentServ)
    {
        $this->cantCincoHorasVentServ = $cantCincoHorasVentServ;

        return $this;
    }

    /**
     * Get cantCincoHorasVentServ.
     *
     * @return int
     */
    public function getCantCincoHorasVentServ()
    {
        return $this->cantCincoHorasVentServ;
    }

    /**
     * Set cantPlegableUnaHoraVentServ.
     *
     * @param int $cantPlegableUnaHoraVentServ
     *
     * @return anexo1_contrato_areas_internet
     */
    public function setCantPlegableUnaHoraVentServ($cantPlegableUnaHoraVentServ)
    {
        $this->cantPlegableUnaHoraVentServ = $cantPlegableUnaHoraVentServ;

        return $this;
    }

    /**
     * Get cantPlegableUnaHoraVentServ.
     *
     * @return int
     */
    public function getCantPlegableUnaHoraVentServ()
    {
        return $this->cantPlegableUnaHoraVentServ;
    }

    /**
     * Set cantUnDiaIncluirServicio.
     *
     * @param int $cantUnDiaIncluirServicio
     *
     * @return anexo1_contrato_areas_internet
     */
    public function setCantUnDiaIncluirServicio($cantUnDiaIncluirServicio)
    {
        $this->cantUnDiaIncluirServicio = $cantUnDiaIncluirServicio;

        return $this;
    }

    /**
     * Get cantUnDiaIncluirServicio.
     *
     * @return int
     */
    public function getCantUnDiaIncluirServicio()
    {
        return $this->cantUnDiaIncluirServicio;
    }

    /**
     * Set cantDosDiasIncluirServicio.
     *
     * @param int $cantDosDiasIncluirServicio
     *
     * @return anexo1_contrato_areas_internet
     */
    public function setCantDosDiasIncluirServicio($cantDosDiasIncluirServicio)
    {
        $this->cantDosDiasIncluirServicio = $cantDosDiasIncluirServicio;

        return $this;
    }

    /**
     * Get cantDosDiasIncluirServicio.
     *
     * @return int
     */
    public function getCantDosDiasIncluirServicio()
    {
        return $this->cantDosDiasIncluirServicio;
    }

    /**
     * Set cantTresDiasIncluirServicio.
     *
     * @param int $cantTresDiasIncluirServicio
     *
     * @return anexo1_contrato_areas_internet
     */
    public function setCantTresDiasIncluirServicio($cantTresDiasIncluirServicio)
    {
        $this->cantTresDiasIncluirServicio = $cantTresDiasIncluirServicio;

        return $this;
    }

    /**
     * Get cantTresDiasIncluirServicio.
     *
     * @return int
     */
    public function getCantTresDiasIncluirServicio()
    {
        return $this->cantTresDiasIncluirServicio;
    }

    /**
     * Set cantCincoDiasIncluirServicio.
     *
     * @param int $cantCincoDiasIncluirServicio
     *
     * @return anexo1_contrato_areas_internet
     */
    public function setCantCincoDiasIncluirServicio($cantCincoDiasIncluirServicio)
    {
        $this->cantCincoDiasIncluirServicio = $cantCincoDiasIncluirServicio;

        return $this;
    }

    /**
     * Get cantCincoDiasIncluirServicio.
     *
     * @return int
     */
    public function getCantCincoDiasIncluirServicio()
    {
        return $this->cantCincoDiasIncluirServicio;
    }

    /**
     * Set cantSieteDiasIncluirServicio.
     *
     * @param int $cantSieteDiasIncluirServicio
     *
     * @return anexo1_contrato_areas_internet
     */
    public function setCantSieteDiasIncluirServicio($cantSieteDiasIncluirServicio)
    {
        $this->cantSieteDiasIncluirServicio = $cantSieteDiasIncluirServicio;

        return $this;
    }

    /**
     * Get cantSieteDiasIncluirServicio.
     *
     * @return int
     */
    public function getCantSieteDiasIncluirServicio()
    {
        return $this->cantSieteDiasIncluirServicio;
    }

    /**
     * Set cantUnYearIncluirServicio.
     *
     * @param int $cantUnYearIncluirServicio
     *
     * @return anexo1_contrato_areas_internet
     */
    public function setCantUnYearIncluirServicio($cantUnYearIncluirServicio)
    {
        $this->cantUnYearIncluirServicio = $cantUnYearIncluirServicio;

        return $this;
    }

    /**
     * Get cantUnYearIncluirServicio.
     *
     * @return int
     */
    public function getCantUnYearIncluirServicio()
    {
        return $this->cantUnYearIncluirServicio;
    }

    /**
     * Set cantUnaHoraIncluirServicio.
     *
     * @param int $cantUnaHoraIncluirServicio
     *
     * @return anexo1_contrato_areas_internet
     */
    public function setCantUnaHoraIncluirServicio($cantUnaHoraIncluirServicio)
    {
        $this->cantUnaHoraIncluirServicio = $cantUnaHoraIncluirServicio;

        return $this;
    }

    /**
     * Get cantUnaHoraIncluirServicio.
     *
     * @return int
     */
    public function getCantUnaHoraIncluirServicio()
    {
        return $this->cantUnaHoraIncluirServicio;
    }

    /**
     * Set cantCincoHorasIncluirServicio.
     *
     * @param int $cantCincoHorasIncluirServicio
     *
     * @return anexo1_contrato_areas_internet
     */
    public function setCantCincoHorasIncluirServicio($cantCincoHorasIncluirServicio)
    {
        $this->cantCincoHorasIncluirServicio = $cantCincoHorasIncluirServicio;

        return $this;
    }

    /**
     * Get cantCincoHorasIncluirServicio.
     *
     * @return int
     */
    public function getCantCincoHorasIncluirServicio()
    {
        return $this->cantCincoHorasIncluirServicio;
    }

    /**
     * Set restriccionNavegacion.
     *
     * @param bool $restriccionNavegacion
     *
     * @return anexo1_contrato_areas_internet
     */
    public function setRestriccionNavegacion($restriccionNavegacion)
    {
        $this->restriccionNavegacion = $restriccionNavegacion;

        return $this;
    }

    /**
     * Get restriccionNavegacion.
     *
     * @return bool
     */
    public function getRestriccionNavegacion()
    {
        return $this->restriccionNavegacion;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_areas_internet $contrato
     *
     * @return anexo1_contrato_areas_internet
     */
    public function setContrato(\AppBundle\Entity\contrato_areas_internet $contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato.
     *
     * @return \AppBundle\Entity\contrato_areas_internet
     */
    public function getContrato()
    {
        return $this->contrato;
    }
}
