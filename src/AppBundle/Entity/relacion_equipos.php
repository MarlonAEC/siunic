<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * relacion_equipos
 *
 * @ORM\Table(name="relacion_equipos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\relacion_equiposRepository")
 */
class relacion_equipos
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
     * @ORM\Column(name="ancho_equipo", type="float")
     */
    private $anchoEquipo;

    /**
     * @var float
     *
     * @ORM\Column(name="profundidad_equipo", type="float")
     */
    private $profundidadEquipo;

    /**
     * @var float
     *
     * @ORM\Column(name="alto_equipo", type="float")
     */
    private $altoEquipo;

    /**
     * @var float
     *
     * @ORM\Column(name="peso_equipo", type="float")
     */
    private $pesoEquipo;

    /**
     * @var float
     *
     * @ORM\Column(name="temperatura_trabajo", type="float")
     */
    private $temperaturaTrabajo;

    /**
     * @var string
     *
     * @ORM\Column(name="entrada_cables_equipo", type="string", length=255)
     */
    private $entradaCablesEquipo;

    /**
     * @var bool
     *
     * @ORM\Column(name="existencia_barra_conexion_tierra", type="boolean")
     */
    private $existenciaBarraConexionTierra;

    /**
     * @var bool
     *
     * @ORM\Column(name="bastidor_existente_conexion_tierra", type="boolean")
     */
    private $bastidorExistenteConexionTierra;

    /**
     * @var bool
     *
     * @ORM\Column(name="existencia_puntos_toma_tierra", type="boolean")
     */
    private $existenciaPuntosTomaTierra;

    /**
     * @var string
     *
     * @ORM\Column(name="proyecto_por", type="string", length=255)
     */
    private $proyectoPor;

    /**
     * @var string
     *
     * @ORM\Column(name="ejecucion_proyecto_por", type="string", length=255)
     */
    private $ejecucionProyectoPor;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_energia", type="string", length=255)
     */
    private $tipoEnergia;

    /**
     * @var float
     *
     * @ORM\Column(name="voltaje_alimentacion", type="float")
     */
    private $voltajeAlimentacion;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad_fases", type="integer")
     */
    private $cantidadFases;

    /**
     * @var float
     *
     * @ORM\Column(name="consumo_nominal_estimado", type="float")
     */
    private $consumoNominalEstimado;

    /**
     * @var string
     *
     * @ORM\Column(name="corriente_arranque", type="string", length=255)
     */
    private $corrienteArranque;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_disipacion", type="string", length=50)
     */
    private $tipoDisipacion;

    /**
     * @var float
     *
     * @ORM\Column(name="corriente_consumo_maxima_capacidad", type="float")
     */
    private $corrienteConsumoMaximaCapacidad;

    /**
     * @var bool
     *
     * @ORM\Column(name="doble_entrada_alimentacion", type="boolean")
     */
    private $dobleEntradaAlimentacion;

    /**
     * @var bool
     *
     * @ORM\Column(name="existencia_baterias", type="boolean")
     */
    private $existenciaBaterias;

    /**
     * @var bool
     *
     * @ORM\Column(name="localizacion_baterias", type="boolean")
     */
    private $localizacionBaterias;

    /**
     * @var float
     *
     * @ORM\Column(name="dimension_baterias_ancho", type="float")
     */
    private $dimensionBateriasAncho;

    /**
     * @var float
     *
     * @ORM\Column(name="dimension_baterias_profundidad", type="float")
     */
    private $dimensionBateriasProfundidad;

    /**
     * @var float
     *
     * @ORM\Column(name="dimension_baterias_alto", type="float")
     */
    private $dimensionBateriasAlto;


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
     * Set anchoEquipo.
     *
     * @param float $anchoEquipo
     *
     * @return relacion_equipos
     */
    public function setAnchoEquipo($anchoEquipo)
    {
        $this->anchoEquipo = $anchoEquipo;

        return $this;
    }

    /**
     * Get anchoEquipo.
     *
     * @return float
     */
    public function getAnchoEquipo()
    {
        return $this->anchoEquipo;
    }

    /**
     * Set profundidadEquipo.
     *
     * @param float $profundidadEquipo
     *
     * @return relacion_equipos
     */
    public function setProfundidadEquipo($profundidadEquipo)
    {
        $this->profundidadEquipo = $profundidadEquipo;

        return $this;
    }

    /**
     * Get profundidadEquipo.
     *
     * @return float
     */
    public function getProfundidadEquipo()
    {
        return $this->profundidadEquipo;
    }

    /**
     * Set altoEquipo.
     *
     * @param float $altoEquipo
     *
     * @return relacion_equipos
     */
    public function setAltoEquipo($altoEquipo)
    {
        $this->altoEquipo = $altoEquipo;

        return $this;
    }

    /**
     * Get altoEquipo.
     *
     * @return float
     */
    public function getAltoEquipo()
    {
        return $this->altoEquipo;
    }

    /**
     * Set pesoEquipo.
     *
     * @param float $pesoEquipo
     *
     * @return relacion_equipos
     */
    public function setPesoEquipo($pesoEquipo)
    {
        $this->pesoEquipo = $pesoEquipo;

        return $this;
    }

    /**
     * Get pesoEquipo.
     *
     * @return float
     */
    public function getPesoEquipo()
    {
        return $this->pesoEquipo;
    }

    /**
     * Set temperaturaTrabajo.
     *
     * @param float $temperaturaTrabajo
     *
     * @return relacion_equipos
     */
    public function setTemperaturaTrabajo($temperaturaTrabajo)
    {
        $this->temperaturaTrabajo = $temperaturaTrabajo;

        return $this;
    }

    /**
     * Get temperaturaTrabajo.
     *
     * @return float
     */
    public function getTemperaturaTrabajo()
    {
        return $this->temperaturaTrabajo;
    }

    /**
     * Set entradaCablesEquipo.
     *
     * @param string $entradaCablesEquipo
     *
     * @return relacion_equipos
     */
    public function setEntradaCablesEquipo($entradaCablesEquipo)
    {
        $this->entradaCablesEquipo = $entradaCablesEquipo;

        return $this;
    }

    /**
     * Get entradaCablesEquipo.
     *
     * @return string
     */
    public function getEntradaCablesEquipo()
    {
        return $this->entradaCablesEquipo;
    }

    /**
     * Set existenciaBarraConexionTierra.
     *
     * @param bool $existenciaBarraConexionTierra
     *
     * @return relacion_equipos
     */
    public function setExistenciaBarraConexionTierra($existenciaBarraConexionTierra)
    {
        $this->existenciaBarraConexionTierra = $existenciaBarraConexionTierra;

        return $this;
    }

    /**
     * Get existenciaBarraConexionTierra.
     *
     * @return bool
     */
    public function getExistenciaBarraConexionTierra()
    {
        return $this->existenciaBarraConexionTierra;
    }

    /**
     * Set bastidorExistenteConexionTierra.
     *
     * @param bool $bastidorExistenteConexionTierra
     *
     * @return relacion_equipos
     */
    public function setBastidorExistenteConexionTierra($bastidorExistenteConexionTierra)
    {
        $this->bastidorExistenteConexionTierra = $bastidorExistenteConexionTierra;

        return $this;
    }

    /**
     * Get bastidorExistenteConexionTierra.
     *
     * @return bool
     */
    public function getBastidorExistenteConexionTierra()
    {
        return $this->bastidorExistenteConexionTierra;
    }

    /**
     * Set existenciaPuntosTomaTierra.
     *
     * @param bool $existenciaPuntosTomaTierra
     *
     * @return relacion_equipos
     */
    public function setExistenciaPuntosTomaTierra($existenciaPuntosTomaTierra)
    {
        $this->existenciaPuntosTomaTierra = $existenciaPuntosTomaTierra;

        return $this;
    }

    /**
     * Get existenciaPuntosTomaTierra.
     *
     * @return bool
     */
    public function getExistenciaPuntosTomaTierra()
    {
        return $this->existenciaPuntosTomaTierra;
    }

    /**
     * Set proyectoPor.
     *
     * @param string $proyectoPor
     *
     * @return relacion_equipos
     */
    public function setProyectoPor($proyectoPor)
    {
        $this->proyectoPor = $proyectoPor;

        return $this;
    }

    /**
     * Get proyectoPor.
     *
     * @return string
     */
    public function getProyectoPor()
    {
        return $this->proyectoPor;
    }

    /**
     * Set ejecucionProyectoPor.
     *
     * @param string $ejecucionProyectoPor
     *
     * @return relacion_equipos
     */
    public function setEjecucionProyectoPor($ejecucionProyectoPor)
    {
        $this->ejecucionProyectoPor = $ejecucionProyectoPor;

        return $this;
    }

    /**
     * Get ejecucionProyectoPor.
     *
     * @return string
     */
    public function getEjecucionProyectoPor()
    {
        return $this->ejecucionProyectoPor;
    }

    /**
     * Set tipoEnergia.
     *
     * @param string $tipoEnergia
     *
     * @return relacion_equipos
     */
    public function setTipoEnergia($tipoEnergia)
    {
        $this->tipoEnergia = $tipoEnergia;

        return $this;
    }

    /**
     * Get tipoEnergia.
     *
     * @return string
     */
    public function getTipoEnergia()
    {
        return $this->tipoEnergia;
    }

    /**
     * Set voltajeAlimentacion.
     *
     * @param float $voltajeAlimentacion
     *
     * @return relacion_equipos
     */
    public function setVoltajeAlimentacion($voltajeAlimentacion)
    {
        $this->voltajeAlimentacion = $voltajeAlimentacion;

        return $this;
    }

    /**
     * Get voltajeAlimentacion.
     *
     * @return float
     */
    public function getVoltajeAlimentacion()
    {
        return $this->voltajeAlimentacion;
    }

    /**
     * Set cantidadFases.
     *
     * @param int $cantidadFases
     *
     * @return relacion_equipos
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
     * Set consumoNominalEstimado.
     *
     * @param float $consumoNominalEstimado
     *
     * @return relacion_equipos
     */
    public function setConsumoNominalEstimado($consumoNominalEstimado)
    {
        $this->consumoNominalEstimado = $consumoNominalEstimado;

        return $this;
    }

    /**
     * Get consumoNominalEstimado.
     *
     * @return float
     */
    public function getConsumoNominalEstimado()
    {
        return $this->consumoNominalEstimado;
    }

    /**
     * Set corrienteArranque.
     *
     * @param string $corrienteArranque
     *
     * @return relacion_equipos
     */
    public function setCorrienteArranque($corrienteArranque)
    {
        $this->corrienteArranque = $corrienteArranque;

        return $this;
    }

    /**
     * Get corrienteArranque.
     *
     * @return string
     */
    public function getCorrienteArranque()
    {
        return $this->corrienteArranque;
    }

    /**
     * Set tipoDisipacion.
     *
     * @param string $tipoDisipacion
     *
     * @return relacion_equipos
     */
    public function setTipoDisipacion($tipoDisipacion)
    {
        $this->tipoDisipacion = $tipoDisipacion;

        return $this;
    }

    /**
     * Get tipoDisipacion.
     *
     * @return string
     */
    public function getTipoDisipacion()
    {
        return $this->tipoDisipacion;
    }

    /**
     * Set corrienteConsumoMaximaCapacidad.
     *
     * @param float $corrienteConsumoMaximaCapacidad
     *
     * @return relacion_equipos
     */
    public function setCorrienteConsumoMaximaCapacidad($corrienteConsumoMaximaCapacidad)
    {
        $this->corrienteConsumoMaximaCapacidad = $corrienteConsumoMaximaCapacidad;

        return $this;
    }

    /**
     * Get corrienteConsumoMaximaCapacidad.
     *
     * @return float
     */
    public function getCorrienteConsumoMaximaCapacidad()
    {
        return $this->corrienteConsumoMaximaCapacidad;
    }

    /**
     * Set dobleEntradaAlimentacion.
     *
     * @param bool $dobleEntradaAlimentacion
     *
     * @return relacion_equipos
     */
    public function setDobleEntradaAlimentacion($dobleEntradaAlimentacion)
    {
        $this->dobleEntradaAlimentacion = $dobleEntradaAlimentacion;

        return $this;
    }

    /**
     * Get dobleEntradaAlimentacion.
     *
     * @return bool
     */
    public function getDobleEntradaAlimentacion()
    {
        return $this->dobleEntradaAlimentacion;
    }

    /**
     * Set existenciaBaterias.
     *
     * @param bool $existenciaBaterias
     *
     * @return relacion_equipos
     */
    public function setExistenciaBaterias($existenciaBaterias)
    {
        $this->existenciaBaterias = $existenciaBaterias;

        return $this;
    }

    /**
     * Get existenciaBaterias.
     *
     * @return bool
     */
    public function getExistenciaBaterias()
    {
        return $this->existenciaBaterias;
    }

    /**
     * Set localizacionBaterias.
     *
     * @param bool $localizacionBaterias
     *
     * @return relacion_equipos
     */
    public function setLocalizacionBaterias($localizacionBaterias)
    {
        $this->localizacionBaterias = $localizacionBaterias;

        return $this;
    }

    /**
     * Get localizacionBaterias.
     *
     * @return bool
     */
    public function getLocalizacionBaterias()
    {
        return $this->localizacionBaterias;
    }

    /**
     * Set dimensionBateriasAncho.
     *
     * @param float $dimensionBateriasAncho
     *
     * @return relacion_equipos
     */
    public function setDimensionBateriasAncho($dimensionBateriasAncho)
    {
        $this->dimensionBateriasAncho = $dimensionBateriasAncho;

        return $this;
    }

    /**
     * Get dimensionBateriasAncho.
     *
     * @return float
     */
    public function getDimensionBateriasAncho()
    {
        return $this->dimensionBateriasAncho;
    }

    /**
     * Set dimensionBateriasProfundidad.
     *
     * @param float $dimensionBateriasProfundidad
     *
     * @return relacion_equipos
     */
    public function setDimensionBateriasProfundidad($dimensionBateriasProfundidad)
    {
        $this->dimensionBateriasProfundidad = $dimensionBateriasProfundidad;

        return $this;
    }

    /**
     * Get dimensionBateriasProfundidad.
     *
     * @return float
     */
    public function getDimensionBateriasProfundidad()
    {
        return $this->dimensionBateriasProfundidad;
    }

    /**
     * Set dimensionBateriasAlto.
     *
     * @param float $dimensionBateriasAlto
     *
     * @return relacion_equipos
     */
    public function setDimensionBateriasAlto($dimensionBateriasAlto)
    {
        $this->dimensionBateriasAlto = $dimensionBateriasAlto;

        return $this;
    }

    /**
     * Get dimensionBateriasAlto.
     *
     * @return float
     */
    public function getDimensionBateriasAlto()
    {
        return $this->dimensionBateriasAlto;
    }

    /**
     * Set local.
     *
     * @param \AppBundle\Entity\locales $local
     *
     * @return relacion_equipos
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
