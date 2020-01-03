<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * grupos_electrogenos
 *
 * @ORM\Table(name="grupos_electrogenos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\grupos_electrogenosRepository")
 */
class grupos_electrogenos
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
     * @var float
     *
     * @ORM\Column(name="capacidad", type="float")
     */
    private $capacidad;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=50)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=50)
     */
    private $modelo;

    /**
     * @var int
     *
     * @ORM\Column(name="nomero_fases", type="integer")
     */
    private $nomeroFases;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_carga_actual", type="string", length=50)
     */
    private $estadoCargaActual;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_tecnico_visible", type="string", length=50)
     */
    private $estadoTecnicoVisible;

    /**
     * @var bool
     *
     * @ORM\Column(name="posibilidad_inclui_breakers", type="boolean")
     */
    private $posibilidadIncluiBreakers;

    /**
     * @var bool
     *
     * @ORM\Column(name="existencia_tanque_nodriza", type="boolean")
     */
    private $existenciaTanqueNodriza;

    /**
     * @var float
     *
     * @ORM\Column(name="capacidad_tanque_nodriza", type="float")
     */
    private $capacidadTanqueNodriza;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_tecnico_visible_Tnodriza", type="string", length=50)
     */
    private $estadoTecnicoVisibleTnodriza;

    /**
     * @var bool
     *
     * @ORM\Column(name="inclusion_nuevo_equipo_climatizacion", type="boolean")
     */
    private $inclusionNuevoEquipoClimatizacion;

    /**
     * @var float
     *
     * @ORM\Column(name="capacidad_equipo_climatizacion", type="float")
     */
    private $capacidadEquipoClimatizacion;
    
    public function __toString() {
        return $this->getId()? "Grupo Electrógeno: ".$this->getId():'';
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
     * Set capacidad.
     *
     * @param float $capacidad
     *
     * @return grupos_electrogenos
     */
    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;

        return $this;
    }

    /**
     * Get capacidad.
     *
     * @return float
     */
    public function getCapacidad()
    {
        return $this->capacidad;
    }

    /**
     * Set marca.
     *
     * @param string $marca
     *
     * @return grupos_electrogenos
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca.
     *
     * @return string
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set modelo.
     *
     * @param string $modelo
     *
     * @return grupos_electrogenos
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo.
     *
     * @return string
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set nomeroFases.
     *
     * @param int $nomeroFases
     *
     * @return grupos_electrogenos
     */
    public function setNomeroFases($nomeroFases)
    {
        $this->nomeroFases = $nomeroFases;

        return $this;
    }

    /**
     * Get nomeroFases.
     *
     * @return int
     */
    public function getNomeroFases()
    {
        return $this->nomeroFases;
    }

    /**
     * Set estadoCargaActual.
     *
     * @param string $estadoCargaActual
     *
     * @return grupos_electrogenos
     */
    public function setEstadoCargaActual($estadoCargaActual)
    {
        $this->estadoCargaActual = $estadoCargaActual;

        return $this;
    }

    /**
     * Get estadoCargaActual.
     *
     * @return string
     */
    public function getEstadoCargaActual()
    {
        return $this->estadoCargaActual;
    }

    /**
     * Set estadoTecnicoVisible.
     *
     * @param string $estadoTecnicoVisible
     *
     * @return grupos_electrogenos
     */
    public function setEstadoTecnicoVisible($estadoTecnicoVisible)
    {
        $this->estadoTecnicoVisible = $estadoTecnicoVisible;

        return $this;
    }

    /**
     * Get estadoTecnicoVisible.
     *
     * @return string
     */
    public function getEstadoTecnicoVisible()
    {
        return $this->estadoTecnicoVisible;
    }

    /**
     * Set posibilidadIncluiBreakers.
     *
     * @param bool $posibilidadIncluiBreakers
     *
     * @return grupos_electrogenos
     */
    public function setPosibilidadIncluiBreakers($posibilidadIncluiBreakers)
    {
        $this->posibilidadIncluiBreakers = $posibilidadIncluiBreakers;

        return $this;
    }

    /**
     * Get posibilidadIncluiBreakers.
     *
     * @return bool
     */
    public function getPosibilidadIncluiBreakers()
    {
        return $this->posibilidadIncluiBreakers;
    }

    /**
     * Set existenciaTanqueNodriza.
     *
     * @param bool $existenciaTanqueNodriza
     *
     * @return grupos_electrogenos
     */
    public function setExistenciaTanqueNodriza($existenciaTanqueNodriza)
    {
        $this->existenciaTanqueNodriza = $existenciaTanqueNodriza;

        return $this;
    }

    /**
     * Get existenciaTanqueNodriza.
     *
     * @return bool
     */
    public function getExistenciaTanqueNodriza()
    {
        return $this->existenciaTanqueNodriza;
    }

    /**
     * Set capacidadTanqueNodriza.
     *
     * @param float $capacidadTanqueNodriza
     *
     * @return grupos_electrogenos
     */
    public function setCapacidadTanqueNodriza($capacidadTanqueNodriza)
    {
        $this->capacidadTanqueNodriza = $capacidadTanqueNodriza;

        return $this;
    }

    /**
     * Get capacidadTanqueNodriza.
     *
     * @return float
     */
    public function getCapacidadTanqueNodriza()
    {
        return $this->capacidadTanqueNodriza;
    }

    /**
     * Set estadoTecnicoVisibleTnodriza.
     *
     * @param string $estadoTecnicoVisibleTnodriza
     *
     * @return grupos_electrogenos
     */
    public function setEstadoTecnicoVisibleTnodriza($estadoTecnicoVisibleTnodriza)
    {
        $this->estadoTecnicoVisibleTnodriza = $estadoTecnicoVisibleTnodriza;

        return $this;
    }

    /**
     * Get estadoTecnicoVisibleTnodriza.
     *
     * @return string
     */
    public function getEstadoTecnicoVisibleTnodriza()
    {
        return $this->estadoTecnicoVisibleTnodriza;
    }

    /**
     * Set inclusionNuevoEquipoClimatizacion.
     *
     * @param bool $inclusionNuevoEquipoClimatizacion
     *
     * @return grupos_electrogenos
     */
    public function setInclusionNuevoEquipoClimatizacion($inclusionNuevoEquipoClimatizacion)
    {
        $this->inclusionNuevoEquipoClimatizacion = $inclusionNuevoEquipoClimatizacion;

        return $this;
    }

    /**
     * Get inclusionNuevoEquipoClimatizacion.
     *
     * @return bool
     */
    public function getInclusionNuevoEquipoClimatizacion()
    {
        return $this->inclusionNuevoEquipoClimatizacion;
    }

    /**
     * Set capacidadEquipoClimatizacion.
     *
     * @param float $capacidadEquipoClimatizacion
     *
     * @return grupos_electrogenos
     */
    public function setCapacidadEquipoClimatizacion($capacidadEquipoClimatizacion)
    {
        $this->capacidadEquipoClimatizacion = $capacidadEquipoClimatizacion;

        return $this;
    }

    /**
     * Get capacidadEquipoClimatizacion.
     *
     * @return float
     */
    public function getCapacidadEquipoClimatizacion()
    {
        return $this->capacidadEquipoClimatizacion;
    }

    /**
     * Set local.
     *
     * @param \AppBundle\Entity\locales $local
     *
     * @return grupos_electrogenos
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
