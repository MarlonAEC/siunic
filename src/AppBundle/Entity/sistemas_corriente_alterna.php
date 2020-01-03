<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * sistemas_corriente_alterna
 *
 * @ORM\Table(name="sistemas_corriente_alterna")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\sistemas_corriente_alternaRepository")
 */
class sistemas_corriente_alterna
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
     * @ORM\Column(name="conexion_sistema_inversor_rectificador", type="boolean")
     */
    private $conexionSistemaInversorRectificador;

    /**
     * @var bool
     *
     * @ORM\Column(name="conexion_UPS_online", type="boolean")
     */
    private $conexionUPSOnline;

    /**
     * @var bool
     *
     * @ORM\Column(name="conexion_UPS_standar", type="boolean")
     */
    private $conexionUPSStandar;

    /**
     * @var bool
     *
     * @ORM\Column(name="conexion_red_comercial", type="boolean")
     */
    private $conexionRedComercial;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="existencia_panel_distribucion", type="boolean", nullable=true)
     */
    private $existenciaPanelDistribucion;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="existencia_breakers", type="boolean", nullable=true)
     */
    private $existenciaBreakers;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="necesidad_nuevo_panel", type="boolean", nullable=true)
     */
    private $necesidadNuevoPanel;

    /**
     * @var float|null
     *
     * @ORM\Column(name="dimension_nuevo_panel_ancho", type="float", nullable=true)
     */
    private $dimensionNuevoPanelAncho;

    /**
     * @var float|null
     *
     * @ORM\Column(name="dimension_nuevo_panel_profundidad", type="float", nullable=true)
     */
    private $dimensionNuevoPanelProfundidad;

    /**
     * @var float|null
     *
     * @ORM\Column(name="dimension_nuevo_panel_alto", type="float", nullable=true)
     */
    private $dimensionNuevoPanelAlto;


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
     * Set conexionSistemaInversorRectificador.
     *
     * @param bool $conexionSistemaInversorRectificador
     *
     * @return sistemas_corriente_alterna
     */
    public function setConexionSistemaInversorRectificador($conexionSistemaInversorRectificador)
    {
        $this->conexionSistemaInversorRectificador = $conexionSistemaInversorRectificador;

        return $this;
    }

    /**
     * Get conexionSistemaInversorRectificador.
     *
     * @return bool
     */
    public function getConexionSistemaInversorRectificador()
    {
        return $this->conexionSistemaInversorRectificador;
    }

    /**
     * Set conexionUPSOnline.
     *
     * @param bool $conexionUPSOnline
     *
     * @return sistemas_corriente_alterna
     */
    public function setConexionUPSOnline($conexionUPSOnline)
    {
        $this->conexionUPSOnline = $conexionUPSOnline;

        return $this;
    }

    /**
     * Get conexionUPSOnline.
     *
     * @return bool
     */
    public function getConexionUPSOnline()
    {
        return $this->conexionUPSOnline;
    }

    /**
     * Set conexionUPSStandar.
     *
     * @param bool $conexionUPSStandar
     *
     * @return sistemas_corriente_alterna
     */
    public function setConexionUPSStandar($conexionUPSStandar)
    {
        $this->conexionUPSStandar = $conexionUPSStandar;

        return $this;
    }

    /**
     * Get conexionUPSStandar.
     *
     * @return bool
     */
    public function getConexionUPSStandar()
    {
        return $this->conexionUPSStandar;
    }

    /**
     * Set conexionRedComercial.
     *
     * @param bool $conexionRedComercial
     *
     * @return sistemas_corriente_alterna
     */
    public function setConexionRedComercial($conexionRedComercial)
    {
        $this->conexionRedComercial = $conexionRedComercial;

        return $this;
    }

    /**
     * Get conexionRedComercial.
     *
     * @return bool
     */
    public function getConexionRedComercial()
    {
        return $this->conexionRedComercial;
    }

    /**
     * Set existenciaPanelDistribucion.
     *
     * @param bool|null $existenciaPanelDistribucion
     *
     * @return sistemas_corriente_alterna
     */
    public function setExistenciaPanelDistribucion($existenciaPanelDistribucion = null)
    {
        $this->existenciaPanelDistribucion = $existenciaPanelDistribucion;

        return $this;
    }

    /**
     * Get existenciaPanelDistribucion.
     *
     * @return bool|null
     */
    public function getExistenciaPanelDistribucion()
    {
        return $this->existenciaPanelDistribucion;
    }

    /**
     * Set existenciaBreakers.
     *
     * @param bool|null $existenciaBreakers
     *
     * @return sistemas_corriente_alterna
     */
    public function setExistenciaBreakers($existenciaBreakers = null)
    {
        $this->existenciaBreakers = $existenciaBreakers;

        return $this;
    }

    /**
     * Get existenciaBreakers.
     *
     * @return bool|null
     */
    public function getExistenciaBreakers()
    {
        return $this->existenciaBreakers;
    }

    /**
     * Set necesidadNuevoPanel.
     *
     * @param bool|null $necesidadNuevoPanel
     *
     * @return sistemas_corriente_alterna
     */
    public function setNecesidadNuevoPanel($necesidadNuevoPanel = null)
    {
        $this->necesidadNuevoPanel = $necesidadNuevoPanel;

        return $this;
    }

    /**
     * Get necesidadNuevoPanel.
     *
     * @return bool|null
     */
    public function getNecesidadNuevoPanel()
    {
        return $this->necesidadNuevoPanel;
    }

    /**
     * Set dimensionNuevoPanelAncho.
     *
     * @param float|null $dimensionNuevoPanelAncho
     *
     * @return sistemas_corriente_alterna
     */
    public function setDimensionNuevoPanelAncho($dimensionNuevoPanelAncho = null)
    {
        $this->dimensionNuevoPanelAncho = $dimensionNuevoPanelAncho;

        return $this;
    }

    /**
     * Get dimensionNuevoPanelAncho.
     *
     * @return float|null
     */
    public function getDimensionNuevoPanelAncho()
    {
        return $this->dimensionNuevoPanelAncho;
    }

    /**
     * Set dimensionNuevoPanelProfundidad.
     *
     * @param float|null $dimensionNuevoPanelProfundidad
     *
     * @return sistemas_corriente_alterna
     */
    public function setDimensionNuevoPanelProfundidad($dimensionNuevoPanelProfundidad = null)
    {
        $this->dimensionNuevoPanelProfundidad = $dimensionNuevoPanelProfundidad;

        return $this;
    }

    /**
     * Get dimensionNuevoPanelProfundidad.
     *
     * @return float|null
     */
    public function getDimensionNuevoPanelProfundidad()
    {
        return $this->dimensionNuevoPanelProfundidad;
    }

    /**
     * Set dimensionNuevoPanelAlto.
     *
     * @param float|null $dimensionNuevoPanelAlto
     *
     * @return sistemas_corriente_alterna
     */
    public function setDimensionNuevoPanelAlto($dimensionNuevoPanelAlto = null)
    {
        $this->dimensionNuevoPanelAlto = $dimensionNuevoPanelAlto;

        return $this;
    }

    /**
     * Get dimensionNuevoPanelAlto.
     *
     * @return float|null
     */
    public function getDimensionNuevoPanelAlto()
    {
        return $this->dimensionNuevoPanelAlto;
    }

    /**
     * Set local.
     *
     * @param \AppBundle\Entity\locales $local
     *
     * @return sistemas_corriente_alterna
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
