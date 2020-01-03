<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * sistema_corriente_directa
 *
 * @ORM\Table(name="sistema_corriente_directa")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\sistema_corriente_directaRepository")
 */
class sistema_corriente_directa
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
     * @var float
     *
     * @ORM\Column(name="voltaje_trabajo", type="float")
     */
    private $voltajeTrabajo;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad_fases", type="integer")
     */
    private $cantidadFases;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad_rectificadores", type="integer")
     */
    private $cantidadRectificadores;

    /**
     * @var float
     *
     * @ORM\Column(name="capacidad_rectificadores", type="float")
     */
    private $capacidadRectificadores;

    /**
     * @var string
     *
     * @ORM\Column(name="configuracion_rectificadores", type="string", length=50)
     */
    private $configuracionRectificadores;

    /**
     * @var float
     *
     * @ORM\Column(name="carga_actual", type="float")
     */
    private $cargaActual;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad_bancos_baterias", type="integer")
     */
    private $cantidadBancosBaterias;

    /**
     * @var float
     *
     * @ORM\Column(name="capacidad_banco_baterias", type="float")
     */
    private $capacidadBancoBaterias;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_baterias", type="string", length=50)
     */
    private $tipoBaterias;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_general_sistema", type="text")
     */
    private $estadoGeneralSistema;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion_banco_baterias", type="text")
     */
    private $ubicacionBancoBaterias;

    /**
     * @var bool
     *
     * @ORM\Column(name="existencia_paneles_distribucion", type="boolean")
     */
    private $existenciaPanelesDistribucion;

    /**
     * @var bool
     *
     * @ORM\Column(name="existencia_breakers", type="boolean")
     */
    private $existenciaBreakers;


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
     * Set marca.
     *
     * @param string $marca
     *
     * @return sistema_corriente_directa
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
     * @return sistema_corriente_directa
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
     * Set voltajeTrabajo.
     *
     * @param float $voltajeTrabajo
     *
     * @return sistema_corriente_directa
     */
    public function setVoltajeTrabajo($voltajeTrabajo)
    {
        $this->voltajeTrabajo = $voltajeTrabajo;

        return $this;
    }

    /**
     * Get voltajeTrabajo.
     *
     * @return float
     */
    public function getVoltajeTrabajo()
    {
        return $this->voltajeTrabajo;
    }

    /**
     * Set cantidadFases.
     *
     * @param int $cantidadFases
     *
     * @return sistema_corriente_directa
     */
    public function setCantidadFases($cantidadFases)
    {
        $this->cantidadFases = $cantidadFases;

        return $this;
    }

    /**
     * Get cantidadFases.
     *
     * @return int
     */
    public function getCantidadFases()
    {
        return $this->cantidadFases;
    }

    /**
     * Set cantidadRectificadores.
     *
     * @param int $cantidadRectificadores
     *
     * @return sistema_corriente_directa
     */
    public function setCantidadRectificadores($cantidadRectificadores)
    {
        $this->cantidadRectificadores = $cantidadRectificadores;

        return $this;
    }

    /**
     * Get cantidadRectificadores.
     *
     * @return int
     */
    public function getCantidadRectificadores()
    {
        return $this->cantidadRectificadores;
    }

    /**
     * Set capacidadRectificadores.
     *
     * @param float $capacidadRectificadores
     *
     * @return sistema_corriente_directa
     */
    public function setCapacidadRectificadores($capacidadRectificadores)
    {
        $this->capacidadRectificadores = $capacidadRectificadores;

        return $this;
    }

    /**
     * Get capacidadRectificadores.
     *
     * @return float
     */
    public function getCapacidadRectificadores()
    {
        return $this->capacidadRectificadores;
    }

    /**
     * Set configuracionRectificadores.
     *
     * @param string $configuracionRectificadores
     *
     * @return sistema_corriente_directa
     */
    public function setConfiguracionRectificadores($configuracionRectificadores)
    {
        $this->configuracionRectificadores = $configuracionRectificadores;

        return $this;
    }

    /**
     * Get configuracionRectificadores.
     *
     * @return string
     */
    public function getConfiguracionRectificadores()
    {
        return $this->configuracionRectificadores;
    }

    /**
     * Set cargaActual.
     *
     * @param float $cargaActual
     *
     * @return sistema_corriente_directa
     */
    public function setCargaActual($cargaActual)
    {
        $this->cargaActual = $cargaActual;

        return $this;
    }

    /**
     * Get cargaActual.
     *
     * @return float
     */
    public function getCargaActual()
    {
        return $this->cargaActual;
    }

    /**
     * Set cantidadBancosBaterias.
     *
     * @param int $cantidadBancosBaterias
     *
     * @return sistema_corriente_directa
     */
    public function setCantidadBancosBaterias($cantidadBancosBaterias)
    {
        $this->cantidadBancosBaterias = $cantidadBancosBaterias;

        return $this;
    }

    /**
     * Get cantidadBancosBaterias.
     *
     * @return int
     */
    public function getCantidadBancosBaterias()
    {
        return $this->cantidadBancosBaterias;
    }

    /**
     * Set capacidadBancoBaterias.
     *
     * @param float $capacidadBancoBaterias
     *
     * @return sistema_corriente_directa
     */
    public function setCapacidadBancoBaterias($capacidadBancoBaterias)
    {
        $this->capacidadBancoBaterias = $capacidadBancoBaterias;

        return $this;
    }

    /**
     * Get capacidadBancoBaterias.
     *
     * @return float
     */
    public function getCapacidadBancoBaterias()
    {
        return $this->capacidadBancoBaterias;
    }

    /**
     * Set tipoBaterias.
     *
     * @param string $tipoBaterias
     *
     * @return sistema_corriente_directa
     */
    public function setTipoBaterias($tipoBaterias)
    {
        $this->tipoBaterias = $tipoBaterias;

        return $this;
    }

    /**
     * Get tipoBaterias.
     *
     * @return string
     */
    public function getTipoBaterias()
    {
        return $this->tipoBaterias;
    }

    /**
     * Set estadoGeneralSistema.
     *
     * @param string $estadoGeneralSistema
     *
     * @return sistema_corriente_directa
     */
    public function setEstadoGeneralSistema($estadoGeneralSistema)
    {
        $this->estadoGeneralSistema = $estadoGeneralSistema;

        return $this;
    }

    /**
     * Get estadoGeneralSistema.
     *
     * @return string
     */
    public function getEstadoGeneralSistema()
    {
        return $this->estadoGeneralSistema;
    }

    /**
     * Set ubicacionBancoBaterias.
     *
     * @param string $ubicacionBancoBaterias
     *
     * @return sistema_corriente_directa
     */
    public function setUbicacionBancoBaterias($ubicacionBancoBaterias)
    {
        $this->ubicacionBancoBaterias = $ubicacionBancoBaterias;

        return $this;
    }

    /**
     * Get ubicacionBancoBaterias.
     *
     * @return string
     */
    public function getUbicacionBancoBaterias()
    {
        return $this->ubicacionBancoBaterias;
    }

    /**
     * Set existenciaPanelesDistribucion.
     *
     * @param bool $existenciaPanelesDistribucion
     *
     * @return sistema_corriente_directa
     */
    public function setExistenciaPanelesDistribucion($existenciaPanelesDistribucion)
    {
        $this->existenciaPanelesDistribucion = $existenciaPanelesDistribucion;

        return $this;
    }

    /**
     * Get existenciaPanelesDistribucion.
     *
     * @return bool
     */
    public function getExistenciaPanelesDistribucion()
    {
        return $this->existenciaPanelesDistribucion;
    }

    /**
     * Set existenciaBreakers.
     *
     * @param bool $existenciaBreakers
     *
     * @return sistema_corriente_directa
     */
    public function setExistenciaBreakers($existenciaBreakers)
    {
        $this->existenciaBreakers = $existenciaBreakers;

        return $this;
    }

    /**
     * Get existenciaBreakers.
     *
     * @return bool
     */
    public function getExistenciaBreakers()
    {
        return $this->existenciaBreakers;
    }

    /**
     * Set local.
     *
     * @param \AppBundle\Entity\locales $local
     *
     * @return sistema_corriente_directa
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
