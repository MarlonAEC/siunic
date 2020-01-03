<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * contrato_prestacion_servicios
 *
 * @ORM\Table(name="contrato_prestacion_servicios")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\contrato_prestacion_serviciosRepository")
 */
class contrato_prestacion_servicios
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
     * @ORM\OneToOne(targetEntity="anexocps_conexion_centrales_telefonicas", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $conexioCentrales;
    /**
     * @ORM\OneToMany(targetEntity="anexocps_servicios_terceros", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $serviciosTerceros;
    /**
     * @ORM\OneToMany(targetEntity="anexocps_levantamiento_redes_tecnicas", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $levantamientoRedes;
    /**
     * @ORM\OneToMany(targetEntity="tarifas_conexion_pizarras", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $tarifasConexion;
    /**
     * @var string
     * @Assert\NotBlank(message="No debe estar vacío")
     * @ORM\Column(name="numero_contrato", type="string", length=50, unique=true) 
     */
    private $numeroContrato;
    /**
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumn(name="id_empresa", referencedColumnName="id", nullable=false)
     */
    private $empresa;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="videoconferencias", type="boolean", nullable=true)
     */
    private $videoconferencias;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="audioconferencias", type="boolean", nullable=true)
     */
    private $audioconferencias;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="conexion_pizarra_pbx", type="boolean", nullable=true)
     */
    private $conexionPizarraPbx;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="levantamiento_redes_tecnicas", type="boolean", nullable=true)
     */
    private $levantamientoRedesTecnicas;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="servicios_tecnicos", type="boolean", nullable=true)
     */
    private $serviciosTecnicos;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="posventa_reparacion_equipos", type="boolean", nullable=true)
     */
    private $posventaReparacionEquipos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_firma", type="date")
     */
    private $fechaFirma;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar_firma", type="string", length=255)
     */
    private $lugarFirma;
    
    public function __toString() {
        return $this->getId() ? 'Contrato '.$this->getNumeroContrato():'';
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->serviciosTerceros = new \Doctrine\Common\Collections\ArrayCollection();
        $this->levantamientoRedes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tarifasConexion = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set videoconferencias.
     *
     * @param bool|null $videoconferencias
     *
     * @return contrato_prestacion_servicios
     */
    public function setVideoconferencias($videoconferencias = null)
    {
        $this->videoconferencias = $videoconferencias;

        return $this;
    }

    /**
     * Get videoconferencias.
     *
     * @return bool|null
     */
    public function getVideoconferencias()
    {
        return $this->videoconferencias;
    }

    /**
     * Set audioconferencias.
     *
     * @param bool|null $audioconferencias
     *
     * @return contrato_prestacion_servicios
     */
    public function setAudioconferencias($audioconferencias = null)
    {
        $this->audioconferencias = $audioconferencias;

        return $this;
    }

    /**
     * Get audioconferencias.
     *
     * @return bool|null
     */
    public function getAudioconferencias()
    {
        return $this->audioconferencias;
    }

    /**
     * Set conexionPizarraPbx.
     *
     * @param bool|null $conexionPizarraPbx
     *
     * @return contrato_prestacion_servicios
     */
    public function setConexionPizarraPbx($conexionPizarraPbx = null)
    {
        $this->conexionPizarraPbx = $conexionPizarraPbx;

        return $this;
    }

    /**
     * Get conexionPizarraPbx.
     *
     * @return bool|null
     */
    public function getConexionPizarraPbx()
    {
        return $this->conexionPizarraPbx;
    }

    /**
     * Set levantamientoRedesTecnicas.
     *
     * @param bool|null $levantamientoRedesTecnicas
     *
     * @return contrato_prestacion_servicios
     */
    public function setLevantamientoRedesTecnicas($levantamientoRedesTecnicas = null)
    {
        $this->levantamientoRedesTecnicas = $levantamientoRedesTecnicas;

        return $this;
    }

    /**
     * Get levantamientoRedesTecnicas.
     *
     * @return bool|null
     */
    public function getLevantamientoRedesTecnicas()
    {
        return $this->levantamientoRedesTecnicas;
    }

    /**
     * Set serviciosTecnicos.
     *
     * @param bool|null $serviciosTecnicos
     *
     * @return contrato_prestacion_servicios
     */
    public function setServiciosTecnicos($serviciosTecnicos = null)
    {
        $this->serviciosTecnicos = $serviciosTecnicos;

        return $this;
    }

    /**
     * Get serviciosTecnicos.
     *
     * @return bool|null
     */
    public function getServiciosTecnicos()
    {
        return $this->serviciosTecnicos;
    }

    /**
     * Set posventaReparacionEquipos.
     *
     * @param bool|null $posventaReparacionEquipos
     *
     * @return contrato_prestacion_servicios
     */
    public function setPosventaReparacionEquipos($posventaReparacionEquipos = null)
    {
        $this->posventaReparacionEquipos = $posventaReparacionEquipos;

        return $this;
    }

    /**
     * Get posventaReparacionEquipos.
     *
     * @return bool|null
     */
    public function getPosventaReparacionEquipos()
    {
        return $this->posventaReparacionEquipos;
    }

    /**
     * Set fechaFirma.
     *
     * @param \DateTime $fechaFirma
     *
     * @return contrato_prestacion_servicios
     */
    public function setFechaFirma($fechaFirma)
    {
        $this->fechaFirma = $fechaFirma;

        return $this;
    }

    /**
     * Get fechaFirma.
     *
     * @return \DateTime
     */
    public function getFechaFirma()
    {
        return $this->fechaFirma;
    }

    /**
     * Set lugarFirma.
     *
     * @param string $lugarFirma
     *
     * @return contrato_prestacion_servicios
     */
    public function setLugarFirma($lugarFirma)
    {
        $this->lugarFirma = $lugarFirma;

        return $this;
    }

    /**
     * Get lugarFirma.
     *
     * @return string
     */
    public function getLugarFirma()
    {
        return $this->lugarFirma;
    }

    /**
     * Set conexioCentrales.
     *
     * @param \AppBundle\Entity\anexocps_conexion_centrales_telefonicas|null $conexioCentrales
     *
     * @return contrato_prestacion_servicios
     */
    public function setConexioCentrales(\AppBundle\Entity\anexocps_conexion_centrales_telefonicas $conexioCentrales = null)
    {
        $this->conexioCentrales = $conexioCentrales;

        return $this;
    }

    /**
     * Get conexioCentrales.
     *
     * @return \AppBundle\Entity\anexocps_conexion_centrales_telefonicas|null
     */
    public function getConexioCentrales()
    {
        return $this->conexioCentrales;
    }

    /**
     * Add serviciosTercero.
     *
     * @param \AppBundle\Entity\anexocps_servicios_terceros $serviciosTercero
     *
     * @return contrato_prestacion_servicios
     */
    public function addServiciosTercero(\AppBundle\Entity\anexocps_servicios_terceros $serviciosTercero)
    {
        $this->serviciosTerceros[] = $serviciosTercero;

        return $this;
    }

    /**
     * Remove serviciosTercero.
     *
     * @param \AppBundle\Entity\anexocps_servicios_terceros $serviciosTercero
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeServiciosTercero(\AppBundle\Entity\anexocps_servicios_terceros $serviciosTercero)
    {
        return $this->serviciosTerceros->removeElement($serviciosTercero);
    }

    /**
     * Get serviciosTerceros.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getServiciosTerceros()
    {
        return $this->serviciosTerceros;
    }

    /**
     * Add levantamientoRede.
     *
     * @param \AppBundle\Entity\anexocps_levantamiento_redes_tecnicas $levantamientoRede
     *
     * @return contrato_prestacion_servicios
     */
    public function addLevantamientoRede(\AppBundle\Entity\anexocps_levantamiento_redes_tecnicas $levantamientoRede)
    {
        $this->levantamientoRedes[] = $levantamientoRede;

        return $this;
    }

    /**
     * Remove levantamientoRede.
     *
     * @param \AppBundle\Entity\anexocps_levantamiento_redes_tecnicas $levantamientoRede
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeLevantamientoRede(\AppBundle\Entity\anexocps_levantamiento_redes_tecnicas $levantamientoRede)
    {
        return $this->levantamientoRedes->removeElement($levantamientoRede);
    }

    /**
     * Get levantamientoRedes.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLevantamientoRedes()
    {
        return $this->levantamientoRedes;
    }

    /**
     * Add tarifasConexion.
     *
     * @param \AppBundle\Entity\tarifas_conexion_pizarras $tarifasConexion
     *
     * @return contrato_prestacion_servicios
     */
    public function addTarifasConexion(\AppBundle\Entity\tarifas_conexion_pizarras $tarifasConexion)
    {
        $this->tarifasConexion[] = $tarifasConexion;

        return $this;
    }

    /**
     * Remove tarifasConexion.
     *
     * @param \AppBundle\Entity\tarifas_conexion_pizarras $tarifasConexion
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeTarifasConexion(\AppBundle\Entity\tarifas_conexion_pizarras $tarifasConexion)
    {
        return $this->tarifasConexion->removeElement($tarifasConexion);
    }

    /**
     * Get tarifasConexion.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTarifasConexion()
    {
        return $this->tarifasConexion;
    }

    /**
     * Set empresa.
     *
     * @param \AppBundle\Entity\Empresa $empresa
     *
     * @return contrato_prestacion_servicios
     */
    public function setEmpresa(\AppBundle\Entity\Empresa $empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa.
     *
     * @return \AppBundle\Entity\Empresa
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set numeroContrato.
     *
     * @param string $numeroContrato
     *
     * @return contrato_prestacion_servicios
     */
    public function setNumeroContrato($numeroContrato)
    {
        $this->numeroContrato = $numeroContrato;

        return $this;
    }

    /**
     * Get numeroContrato.
     *
     * @return string
     */
    public function getNumeroContrato()
    {
        return $this->numeroContrato;
    }
}
