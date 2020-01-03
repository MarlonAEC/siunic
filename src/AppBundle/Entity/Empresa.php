<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Empresa
 *
 * @ORM\Table(name="empresa")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EmpresaRepository")
 * 
 */
class Empresa
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
     * @ORM\ManyToOne(targetEntity="Organismos")
     * @ORM\JoinColumn(name="id_organismo", referencedColumnName="id", nullable=false)
     */
    private $organismo;
    
    /**
     * @ORM\OneToMany(targetEntity="Personas", mappedBy="empresa", cascade={"all"}, orphanRemoval=true)
     */
    private $personas;
    /**
     * @ORM\OneToMany(targetEntity="contrato_agencia_persona_juridica", mappedBy="empresa", cascade={"all"}, orphanRemoval=true)
     */
    private $contratoAgencia;
    
    /**
     * @ORM\OneToMany(targetEntity="contrato_areas_internet", mappedBy="empresa", cascade={"all"}, orphanRemoval=true)
     */
    private $contratoAreas;
    
    /**
     * @ORM\OneToMany(targetEntity="contrato_arrendamiento_pizarra_privada_pbx", mappedBy="empresa", cascade={"all"}, orphanRemoval=true)
     */
    private $contrato_arrendamiento_pizarra;
    
    /**
     * @ORM\OneToMany(targetEntity="contrato_arrendamiento_redes", mappedBy="empresa", cascade={"all"}, orphanRemoval=true)
     */
    private $contratoArrendamientoRedes;
    
    /**
     * @ORM\OneToMany(targetEntity="contrato_compra_venta", mappedBy="empresa", cascade={"all"}, orphanRemoval=true)
     */
    private $contratoCompraVenta;
    
    /**
     * @ORM\OneToMany(targetEntity="contrato_comp_vent_pizarra", mappedBy="empresa", cascade={"all"}, orphanRemoval=true)
     */
    private $contratoCompraVentaPizarra;
    
    /**
     * @ORM\OneToMany(targetEntity="contrato_instalacion_pizarra_pbx", mappedBy="empresa", cascade={"all"}, orphanRemoval=true)
     */
    private $contratoInstalacionPizarra;
    
    /**
     * @ORM\OneToMany(targetEntity="contrato_mantenimiento_pizarra_pbx", mappedBy="empresa", cascade={"all"}, orphanRemoval=true)
     */
    private $contratoMantenimientoPizarra;
    
    /**
     * @ORM\OneToMany(targetEntity="contrato_prestacion_servicios", mappedBy="empresa", cascade={"all"}, orphanRemoval=true)
     */
    private $contratoPrestacionServicios;
    
    /**
     * @ORM\OneToMany(targetEntity="contrato_contactos_telefonicos", mappedBy="empresa", cascade={"all"}, orphanRemoval=true)
     */
    private $contratoPrestacionServiciosCT;
    
    /**
     * @ORM\OneToMany(targetEntity="contrato_recarga_por_pos", mappedBy="empresa", cascade={"all"}, orphanRemoval=true)
     */
    private $contratoRecargaPOS;

    /**
     * @var string
     * @Assert\Regex(pattern = "/\d{3}\/\d{3}\/\d{3}/")
     * @ORM\Column(name="codigo_REUP", type="string", length=50, unique=true)
     */
    private $codigoREUP;

    /**
     * @var string
     * @Assert\Regex(pattern = "/\D/")
     * @ORM\Column(name="nombre_oficial", type="string", length=255)
     */
    private $nombreOficial;

    /**
     * @var string
     * @Assert\Regex(pattern = "/\D/")
     * @ORM\Column(name="nombre_abreviado", type="string", length=50)
     */
    private $nombreAbreviado;

    /**
     * @var string
     *
     * @ORM\Column(name="domicilio", type="string", length=255)
     */
    private $domicilio;

    /**
     * @var string
     * @Assert\Regex(pattern = "/\d/")
     * @ORM\Column(name="actividad_economica", type="string", length=255)
     */
    private $actividadEconomica;

    /**
     * @var string
     * @Assert\Email(
     *      message = "El mail '{{ value }}' ingresado no tiene el formato correcto."
     * )
     * @ORM\Column(name="correo_electronico", type="string", length=255)
     */
    private $correoElectronico;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sitio_web", type="string", length=255, nullable=true)
     */
    private $sitioWeb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observaciones", type="string", length=255, nullable=true)
     */
    private $observaciones;

    /**
     * @var string
     * @Assert\Regex(pattern = "/\d/")
     * @ORM\Column(name="NO_cuenta_bancaria_MLC", type="string", length=255)
     */
    private $nOCuentaBancariaMLC;

    /**
     * @var string
     * @Assert\Regex(pattern = "/\d/")
     * @ORM\Column(name="NO_cuenta_bancaria_MN", type="string", length=255)
     */
    private $nOCuentaBancariaMN;   
    
    public function __toString() {
        return $this->getId() ? $this->getNombreOficial() : '';
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->personas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contratoAgencia = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contratoAreas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contrato_arrendamiento_pizarra = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contratoArrendamientoRedes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contratoCompraVenta = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contratoCompraVentaPizarra = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contratoInstalacionPizarra = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contratoMantenimientoPizarra = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contratoPrestacionServicios = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contratoPrestacionServiciosCT = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contratoRecargaPOS = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codigoREUP.
     *
     * @param string $codigoREUP
     *
     * @return Empresa
     */
    public function setCodigoREUP($codigoREUP)
    {
        $this->codigoREUP = $codigoREUP;

        return $this;
    }

    /**
     * Get codigoREUP.
     *
     * @return string
     */
    public function getCodigoREUP()
    {
        return $this->codigoREUP;
    }

    /**
     * Set nombreOficial.
     *
     * @param string $nombreOficial
     *
     * @return Empresa
     */
    public function setNombreOficial($nombreOficial)
    {
        $this->nombreOficial = $nombreOficial;

        return $this;
    }

    /**
     * Get nombreOficial.
     *
     * @return string
     */
    public function getNombreOficial()
    {
        return $this->nombreOficial;
    }

    /**
     * Set nombreAbreviado.
     *
     * @param string $nombreAbreviado
     *
     * @return Empresa
     */
    public function setNombreAbreviado($nombreAbreviado)
    {
        $this->nombreAbreviado = $nombreAbreviado;

        return $this;
    }

    /**
     * Get nombreAbreviado.
     *
     * @return string
     */
    public function getNombreAbreviado()
    {
        return $this->nombreAbreviado;
    }

    /**
     * Set domicilio.
     *
     * @param string $domicilio
     *
     * @return Empresa
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Get domicilio.
     *
     * @return string
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Set actividadEconomica.
     *
     * @param string $actividadEconomica
     *
     * @return Empresa
     */
    public function setActividadEconomica($actividadEconomica)
    {
        $this->actividadEconomica = $actividadEconomica;

        return $this;
    }

    /**
     * Get actividadEconomica.
     *
     * @return string
     */
    public function getActividadEconomica()
    {
        return $this->actividadEconomica;
    }

    /**
     * Set correoElectronico.
     *
     * @param string $correoElectronico
     *
     * @return Empresa
     */
    public function setCorreoElectronico($correoElectronico)
    {
        $this->correoElectronico = $correoElectronico;

        return $this;
    }

    /**
     * Get correoElectronico.
     *
     * @return string
     */
    public function getCorreoElectronico()
    {
        return $this->correoElectronico;
    }

    /**
     * Set sitioWeb.
     *
     * @param string|null $sitioWeb
     *
     * @return Empresa
     */
    public function setSitioWeb($sitioWeb = null)
    {
        $this->sitioWeb = $sitioWeb;

        return $this;
    }

    /**
     * Get sitioWeb.
     *
     * @return string|null
     */
    public function getSitioWeb()
    {
        return $this->sitioWeb;
    }

    /**
     * Set observaciones.
     *
     * @param string|null $observaciones
     *
     * @return Empresa
     */
    public function setObservaciones($observaciones = null)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones.
     *
     * @return string|null
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set nOCuentaBancariaMLC.
     *
     * @param string $nOCuentaBancariaMLC
     *
     * @return Empresa
     */
    public function setNOCuentaBancariaMLC($nOCuentaBancariaMLC)
    {
        $this->nOCuentaBancariaMLC = $nOCuentaBancariaMLC;

        return $this;
    }

    /**
     * Get nOCuentaBancariaMLC.
     *
     * @return string
     */
    public function getNOCuentaBancariaMLC()
    {
        return $this->nOCuentaBancariaMLC;
    }

    /**
     * Set nOCuentaBancariaMN.
     *
     * @param string $nOCuentaBancariaMN
     *
     * @return Empresa
     */
    public function setNOCuentaBancariaMN($nOCuentaBancariaMN)
    {
        $this->nOCuentaBancariaMN = $nOCuentaBancariaMN;

        return $this;
    }

    /**
     * Get nOCuentaBancariaMN.
     *
     * @return string
     */
    public function getNOCuentaBancariaMN()
    {
        return $this->nOCuentaBancariaMN;
    }

    /**
     * Set organismo.
     *
     * @param \AppBundle\Entity\Organismos $organismo
     *
     * @return Empresa
     */
    public function setOrganismo(\AppBundle\Entity\Organismos $organismo)
    {
        $this->organismo = $organismo;

        return $this;
    }

    /**
     * Get organismo.
     *
     * @return \AppBundle\Entity\Organismos
     */
    public function getOrganismo()
    {
        return $this->organismo;
    }

    /**
     * Add persona.
     *
     * @param \AppBundle\Entity\Personas $persona
     *
     * @return Empresa
     */
    public function addPersona(\AppBundle\Entity\Personas $persona)
    {
        $this->personas[] = $persona;

        return $this;
    }

    /**
     * Remove persona.
     *
     * @param \AppBundle\Entity\Personas $persona
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removePersona(\AppBundle\Entity\Personas $persona)
    {
        return $this->personas->removeElement($persona);
    }

    /**
     * Get personas.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersonas()
    {
        return $this->personas;
    }

    /**
     * Add contratoAgencium.
     *
     * @param \AppBundle\Entity\contrato_agencia_persona_juridica $contratoAgencium
     *
     * @return Empresa
     */
    public function addContratoAgencium(\AppBundle\Entity\contrato_agencia_persona_juridica $contratoAgencium)
    {
        $this->contratoAgencia[] = $contratoAgencium;

        return $this;
    }

    /**
     * Remove contratoAgencium.
     *
     * @param \AppBundle\Entity\contrato_agencia_persona_juridica $contratoAgencium
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeContratoAgencium(\AppBundle\Entity\contrato_agencia_persona_juridica $contratoAgencium)
    {
        return $this->contratoAgencia->removeElement($contratoAgencium);
    }

    /**
     * Get contratoAgencia.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContratoAgencia()
    {
        return $this->contratoAgencia;
    }

    /**
     * Add contratoArea.
     *
     * @param \AppBundle\Entity\contrato_areas_internet $contratoArea
     *
     * @return Empresa
     */
    public function addContratoArea(\AppBundle\Entity\contrato_areas_internet $contratoArea)
    {
        $this->contratoAreas[] = $contratoArea;

        return $this;
    }

    /**
     * Remove contratoArea.
     *
     * @param \AppBundle\Entity\contrato_areas_internet $contratoArea
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeContratoArea(\AppBundle\Entity\contrato_areas_internet $contratoArea)
    {
        return $this->contratoAreas->removeElement($contratoArea);
    }

    /**
     * Get contratoAreas.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContratoAreas()
    {
        return $this->contratoAreas;
    }

    /**
     * Add contratoArrendamientoPizarra.
     *
     * @param \AppBundle\Entity\contrato_arrendamiento_pizarra_privada_pbx $contratoArrendamientoPizarra
     *
     * @return Empresa
     */
    public function addContratoArrendamientoPizarra(\AppBundle\Entity\contrato_arrendamiento_pizarra_privada_pbx $contratoArrendamientoPizarra)
    {
        $this->contrato_arrendamiento_pizarra[] = $contratoArrendamientoPizarra;

        return $this;
    }

    /**
     * Remove contratoArrendamientoPizarra.
     *
     * @param \AppBundle\Entity\contrato_arrendamiento_pizarra_privada_pbx $contratoArrendamientoPizarra
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeContratoArrendamientoPizarra(\AppBundle\Entity\contrato_arrendamiento_pizarra_privada_pbx $contratoArrendamientoPizarra)
    {
        return $this->contrato_arrendamiento_pizarra->removeElement($contratoArrendamientoPizarra);
    }

    /**
     * Get contratoArrendamientoPizarra.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContratoArrendamientoPizarra()
    {
        return $this->contrato_arrendamiento_pizarra;
    }

    /**
     * Add contratoArrendamientoRede.
     *
     * @param \AppBundle\Entity\contrato_arrendamiento_redes $contratoArrendamientoRede
     *
     * @return Empresa
     */
    public function addContratoArrendamientoRede(\AppBundle\Entity\contrato_arrendamiento_redes $contratoArrendamientoRede)
    {
        $this->contratoArrendamientoRedes[] = $contratoArrendamientoRede;

        return $this;
    }

    /**
     * Remove contratoArrendamientoRede.
     *
     * @param \AppBundle\Entity\contrato_arrendamiento_redes $contratoArrendamientoRede
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeContratoArrendamientoRede(\AppBundle\Entity\contrato_arrendamiento_redes $contratoArrendamientoRede)
    {
        return $this->contratoArrendamientoRedes->removeElement($contratoArrendamientoRede);
    }

    /**
     * Get contratoArrendamientoRedes.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContratoArrendamientoRedes()
    {
        return $this->contratoArrendamientoRedes;
    }

    /**
     * Add contratoCompraVentum.
     *
     * @param \AppBundle\Entity\contrato_compra_venta $contratoCompraVentum
     *
     * @return Empresa
     */
    public function addContratoCompraVentum(\AppBundle\Entity\contrato_compra_venta $contratoCompraVentum)
    {
        $this->contratoCompraVenta[] = $contratoCompraVentum;

        return $this;
    }

    /**
     * Remove contratoCompraVentum.
     *
     * @param \AppBundle\Entity\contrato_compra_venta $contratoCompraVentum
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeContratoCompraVentum(\AppBundle\Entity\contrato_compra_venta $contratoCompraVentum)
    {
        return $this->contratoCompraVenta->removeElement($contratoCompraVentum);
    }

    /**
     * Get contratoCompraVenta.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContratoCompraVenta()
    {
        return $this->contratoCompraVenta;
    }

    /**
     * Add contratoCompraVentaPizarra.
     *
     * @param \AppBundle\Entity\contrato_comp_vent_pizarra $contratoCompraVentaPizarra
     *
     * @return Empresa
     */
    public function addContratoCompraVentaPizarra(\AppBundle\Entity\contrato_comp_vent_pizarra $contratoCompraVentaPizarra)
    {
        $this->contratoCompraVentaPizarra[] = $contratoCompraVentaPizarra;

        return $this;
    }

    /**
     * Remove contratoCompraVentaPizarra.
     *
     * @param \AppBundle\Entity\contrato_comp_vent_pizarra $contratoCompraVentaPizarra
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeContratoCompraVentaPizarra(\AppBundle\Entity\contrato_comp_vent_pizarra $contratoCompraVentaPizarra)
    {
        return $this->contratoCompraVentaPizarra->removeElement($contratoCompraVentaPizarra);
    }

    /**
     * Get contratoCompraVentaPizarra.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContratoCompraVentaPizarra()
    {
        return $this->contratoCompraVentaPizarra;
    }

    /**
     * Add contratoInstalacionPizarra.
     *
     * @param \AppBundle\Entity\contrato_instalacion_pizarra_pbx $contratoInstalacionPizarra
     *
     * @return Empresa
     */
    public function addContratoInstalacionPizarra(\AppBundle\Entity\contrato_instalacion_pizarra_pbx $contratoInstalacionPizarra)
    {
        $this->contratoInstalacionPizarra[] = $contratoInstalacionPizarra;

        return $this;
    }

    /**
     * Remove contratoInstalacionPizarra.
     *
     * @param \AppBundle\Entity\contrato_instalacion_pizarra_pbx $contratoInstalacionPizarra
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeContratoInstalacionPizarra(\AppBundle\Entity\contrato_instalacion_pizarra_pbx $contratoInstalacionPizarra)
    {
        return $this->contratoInstalacionPizarra->removeElement($contratoInstalacionPizarra);
    }

    /**
     * Get contratoInstalacionPizarra.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContratoInstalacionPizarra()
    {
        return $this->contratoInstalacionPizarra;
    }

    /**
     * Add contratoMantenimientoPizarra.
     *
     * @param \AppBundle\Entity\contrato_mantenimiento_pizarra_pbx $contratoMantenimientoPizarra
     *
     * @return Empresa
     */
    public function addContratoMantenimientoPizarra(\AppBundle\Entity\contrato_mantenimiento_pizarra_pbx $contratoMantenimientoPizarra)
    {
        $this->contratoMantenimientoPizarra[] = $contratoMantenimientoPizarra;

        return $this;
    }

    /**
     * Remove contratoMantenimientoPizarra.
     *
     * @param \AppBundle\Entity\contrato_mantenimiento_pizarra_pbx $contratoMantenimientoPizarra
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeContratoMantenimientoPizarra(\AppBundle\Entity\contrato_mantenimiento_pizarra_pbx $contratoMantenimientoPizarra)
    {
        return $this->contratoMantenimientoPizarra->removeElement($contratoMantenimientoPizarra);
    }

    /**
     * Get contratoMantenimientoPizarra.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContratoMantenimientoPizarra()
    {
        return $this->contratoMantenimientoPizarra;
    }

    /**
     * Add contratoPrestacionServicio.
     *
     * @param \AppBundle\Entity\contrato_prestacion_servicios $contratoPrestacionServicio
     *
     * @return Empresa
     */
    public function addContratoPrestacionServicio(\AppBundle\Entity\contrato_prestacion_servicios $contratoPrestacionServicio)
    {
        $this->contratoPrestacionServicios[] = $contratoPrestacionServicio;

        return $this;
    }

    /**
     * Remove contratoPrestacionServicio.
     *
     * @param \AppBundle\Entity\contrato_prestacion_servicios $contratoPrestacionServicio
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeContratoPrestacionServicio(\AppBundle\Entity\contrato_prestacion_servicios $contratoPrestacionServicio)
    {
        return $this->contratoPrestacionServicios->removeElement($contratoPrestacionServicio);
    }

    /**
     * Get contratoPrestacionServicios.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContratoPrestacionServicios()
    {
        return $this->contratoPrestacionServicios;
    }

    /**
     * Add contratoPrestacionServiciosCT.
     *
     * @param \AppBundle\Entity\contrato_contactos_telefonicos $contratoPrestacionServiciosCT
     *
     * @return Empresa
     */
    public function addContratoPrestacionServiciosCT(\AppBundle\Entity\contrato_contactos_telefonicos $contratoPrestacionServiciosCT)
    {
        $this->contratoPrestacionServiciosCT[] = $contratoPrestacionServiciosCT;

        return $this;
    }

    /**
     * Remove contratoPrestacionServiciosCT.
     *
     * @param \AppBundle\Entity\contrato_contactos_telefonicos $contratoPrestacionServiciosCT
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeContratoPrestacionServiciosCT(\AppBundle\Entity\contrato_contactos_telefonicos $contratoPrestacionServiciosCT)
    {
        return $this->contratoPrestacionServiciosCT->removeElement($contratoPrestacionServiciosCT);
    }

    /**
     * Get contratoPrestacionServiciosCT.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContratoPrestacionServiciosCT()
    {
        return $this->contratoPrestacionServiciosCT;
    }

    /**
     * Add contratoRecargaPO.
     *
     * @param \AppBundle\Entity\contrato_recarga_por_pos $contratoRecargaPO
     *
     * @return Empresa
     */
    public function addContratoRecargaPO(\AppBundle\Entity\contrato_recarga_por_pos $contratoRecargaPO)
    {
        $this->contratoRecargaPOS[] = $contratoRecargaPO;

        return $this;
    }

    /**
     * Remove contratoRecargaPO.
     *
     * @param \AppBundle\Entity\contrato_recarga_por_pos $contratoRecargaPO
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeContratoRecargaPO(\AppBundle\Entity\contrato_recarga_por_pos $contratoRecargaPO)
    {
        return $this->contratoRecargaPOS->removeElement($contratoRecargaPO);
    }

    /**
     * Get contratoRecargaPOS.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContratoRecargaPOS()
    {
        return $this->contratoRecargaPOS;
    }
}
