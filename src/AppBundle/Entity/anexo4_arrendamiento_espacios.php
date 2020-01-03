<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * anexo4_arrendamiento_espacios
 *
 * @ORM\Table(name="anexo4_arrendamiento_espacios")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\anexo4_arrendamiento_espaciosRepository")
 */
class anexo4_arrendamiento_espacios
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
     * @ORM\ManyToOne(targetEntity="contrato_arrendamiento_espacios")
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id", nullable=false)
     */
    private $contrato;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_torre_o_mastil", type="string", length=50)
     */
    private $tipoTorreOMastil;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_solicitud", type="date")
     */
    private $fechaSolicitud;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar", type="string", length=255)
     */
    private $lugar;

    /**
     * @var string
     *
     * @ORM\Column(name="objetivos", type="text")
     */
    private $objetivos;

    /**
     * @var bool
     *
     * @ORM\Column(name="sp_tierra_optimas_condiciones", type="boolean")
     */
    private $spTierraOptimasCondiciones;

    /**
     * @var bool
     *
     * @ORM\Column(name="sp_pararrayos_conectado_terra", type="boolean")
     */
    private $spPararrayosConectadoTerra;

    /**
     * @var bool
     *
     * @ORM\Column(name="sp_existencia_cables_tierra", type="boolean")
     */
    private $spExistenciaCablesTierra;

    /**
     * @var bool
     *
     * @ORM\Column(name="sp_barras_conexion_linea_transmicion", type="boolean")
     */
    private $spBarrasConexionLineaTransmicion;

    /**
     * @var bool
     *
     * @ORM\Column(name="sp_estado_barra", type="boolean")
     */
    private $spEstadoBarra;

    /**
     * @var string
     *
     * @ORM\Column(name="sp_existencia_grounding_kits", type="string", length=255)
     */
    private $spExistenciaGroundingKits;

    /**
     * @var bool
     *
     * @ORM\Column(name="sp_existencia_protectores_RF", type="boolean")
     */
    private $spExistenciaProtectoresRF;

    /**
     * @var bool
     *
     * @ORM\Column(name="sp_barra_tierra_entrada_cables", type="boolean")
     */
    private $spBarraTierraEntradaCables;

    /**
     * @var string
     *
     * @ORM\Column(name="otras_especificaciones", type="text")
     */
    private $otrasEspecificaciones;

    public function __toString() {
        return $this->getId()?"Anexo 4 al Contrato".$this->getContrato()->getNumeroContrato():"";
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
     * Set tipoTorreOMastil.
     *
     * @param string $tipoTorreOMastil
     *
     * @return anexo4_arrendamiento_espacios
     */
    public function setTipoTorreOMastil($tipoTorreOMastil)
    {
        $this->tipoTorreOMastil = $tipoTorreOMastil;

        return $this;
    }

    /**
     * Get tipoTorreOMastil.
     *
     * @return string
     */
    public function getTipoTorreOMastil()
    {
        return $this->tipoTorreOMastil;
    }

    /**
     * Set fechaSolicitud.
     *
     * @param \DateTime $fechaSolicitud
     *
     * @return anexo4_arrendamiento_espacios
     */
    public function setFechaSolicitud($fechaSolicitud)
    {
        $this->fechaSolicitud = $fechaSolicitud;

        return $this;
    }

    /**
     * Get fechaSolicitud.
     *
     * @return \DateTime
     */
    public function getFechaSolicitud()
    {
        return $this->fechaSolicitud;
    }

    /**
     * Set lugar.
     *
     * @param string $lugar
     *
     * @return anexo4_arrendamiento_espacios
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar.
     *
     * @return string
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Set objetivos.
     *
     * @param string $objetivos
     *
     * @return anexo4_arrendamiento_espacios
     */
    public function setObjetivos($objetivos)
    {
        $this->objetivos = $objetivos;

        return $this;
    }

    /**
     * Get objetivos.
     *
     * @return string
     */
    public function getObjetivos()
    {
        return $this->objetivos;
    }

    /**
     * Set spTierraOptimasCondiciones.
     *
     * @param bool $spTierraOptimasCondiciones
     *
     * @return anexo4_arrendamiento_espacios
     */
    public function setSpTierraOptimasCondiciones($spTierraOptimasCondiciones)
    {
        $this->spTierraOptimasCondiciones = $spTierraOptimasCondiciones;

        return $this;
    }

    /**
     * Get spTierraOptimasCondiciones.
     *
     * @return bool
     */
    public function getSpTierraOptimasCondiciones()
    {
        return $this->spTierraOptimasCondiciones;
    }

    /**
     * Set spPararrayosConectadoTerra.
     *
     * @param bool $spPararrayosConectadoTerra
     *
     * @return anexo4_arrendamiento_espacios
     */
    public function setSpPararrayosConectadoTerra($spPararrayosConectadoTerra)
    {
        $this->spPararrayosConectadoTerra = $spPararrayosConectadoTerra;

        return $this;
    }

    /**
     * Get spPararrayosConectadoTerra.
     *
     * @return bool
     */
    public function getSpPararrayosConectadoTerra()
    {
        return $this->spPararrayosConectadoTerra;
    }

    /**
     * Set spExistenciaCablesTierra.
     *
     * @param bool $spExistenciaCablesTierra
     *
     * @return anexo4_arrendamiento_espacios
     */
    public function setSpExistenciaCablesTierra($spExistenciaCablesTierra)
    {
        $this->spExistenciaCablesTierra = $spExistenciaCablesTierra;

        return $this;
    }

    /**
     * Get spExistenciaCablesTierra.
     *
     * @return bool
     */
    public function getSpExistenciaCablesTierra()
    {
        return $this->spExistenciaCablesTierra;
    }

    /**
     * Set spBarrasConexionLineaTransmicion.
     *
     * @param bool $spBarrasConexionLineaTransmicion
     *
     * @return anexo4_arrendamiento_espacios
     */
    public function setSpBarrasConexionLineaTransmicion($spBarrasConexionLineaTransmicion)
    {
        $this->spBarrasConexionLineaTransmicion = $spBarrasConexionLineaTransmicion;

        return $this;
    }

    /**
     * Get spBarrasConexionLineaTransmicion.
     *
     * @return bool
     */
    public function getSpBarrasConexionLineaTransmicion()
    {
        return $this->spBarrasConexionLineaTransmicion;
    }

    /**
     * Set spEstadoBarra.
     *
     * @param bool $spEstadoBarra
     *
     * @return anexo4_arrendamiento_espacios
     */
    public function setSpEstadoBarra($spEstadoBarra)
    {
        $this->spEstadoBarra = $spEstadoBarra;

        return $this;
    }

    /**
     * Get spEstadoBarra.
     *
     * @return bool
     */
    public function getSpEstadoBarra()
    {
        return $this->spEstadoBarra;
    }

    /**
     * Set spExistenciaGroundingKits.
     *
     * @param string $spExistenciaGroundingKits
     *
     * @return anexo4_arrendamiento_espacios
     */
    public function setSpExistenciaGroundingKits($spExistenciaGroundingKits)
    {
        $this->spExistenciaGroundingKits = $spExistenciaGroundingKits;

        return $this;
    }

    /**
     * Get spExistenciaGroundingKits.
     *
     * @return string
     */
    public function getSpExistenciaGroundingKits()
    {
        return $this->spExistenciaGroundingKits;
    }

    /**
     * Set spExistenciaProtectoresRF.
     *
     * @param bool $spExistenciaProtectoresRF
     *
     * @return anexo4_arrendamiento_espacios
     */
    public function setSpExistenciaProtectoresRF($spExistenciaProtectoresRF)
    {
        $this->spExistenciaProtectoresRF = $spExistenciaProtectoresRF;

        return $this;
    }

    /**
     * Get spExistenciaProtectoresRF.
     *
     * @return bool
     */
    public function getSpExistenciaProtectoresRF()
    {
        return $this->spExistenciaProtectoresRF;
    }

    /**
     * Set spBarraTierraEntradaCables.
     *
     * @param bool $spBarraTierraEntradaCables
     *
     * @return anexo4_arrendamiento_espacios
     */
    public function setSpBarraTierraEntradaCables($spBarraTierraEntradaCables)
    {
        $this->spBarraTierraEntradaCables = $spBarraTierraEntradaCables;

        return $this;
    }

    /**
     * Get spBarraTierraEntradaCables.
     *
     * @return bool
     */
    public function getSpBarraTierraEntradaCables()
    {
        return $this->spBarraTierraEntradaCables;
    }

    /**
     * Set otrasEspecificaciones.
     *
     * @param string $otrasEspecificaciones
     *
     * @return anexo4_arrendamiento_espacios
     */
    public function setOtrasEspecificaciones($otrasEspecificaciones)
    {
        $this->otrasEspecificaciones = $otrasEspecificaciones;

        return $this;
    }

    /**
     * Get otrasEspecificaciones.
     *
     * @return string
     */
    public function getOtrasEspecificaciones()
    {
        return $this->otrasEspecificaciones;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_arrendamiento_espacios $contrato
     *
     * @return anexo4_arrendamiento_espacios
     */
    public function setContrato(\AppBundle\Entity\contrato_arrendamiento_espacios $contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato.
     *
     * @return \AppBundle\Entity\contrato_arrendamiento_espacios
     */
    public function getContrato()
    {
        return $this->contrato;
    }
}
