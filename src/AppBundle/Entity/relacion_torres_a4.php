<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * relacion_torres_a4
 *
 * @ORM\Table(name="relacion_torres_a4")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\relacion_torres_a4Repository")
 */
class relacion_torres_a4
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
     * @ORM\ManyToOne(targetEntity="anexo4_arrendamiento_espacios")
     * @ORM\JoinColumn(name="id_anexo", referencedColumnName="id", nullable=false)
     */
    private $anexo;

    /**
     * @var float
     *
     * @ORM\Column(name="latitud_torre", type="float")
     */
    private $latitudTorre;

    /**
     * @var float
     *
     * @ORM\Column(name="longitud_torre", type="float")
     */
    private $longitudTorre;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_torre", type="string", length=50)
     */
    private $tipoTorre;

    /**
     * @var float
     *
     * @ORM\Column(name="altura_torre", type="float")
     */
    private $alturaTorre;

    /**
     * @var float
     *
     * @ORM\Column(name="altura_vientos_1er_nivel", type="float")
     */
    private $alturaVientos1erNivel;

    /**
     * @var float
     *
     * @ORM\Column(name="altura_vientos_2do_nivel", type="float")
     */
    private $alturaVientos2doNivel;

    /**
     * @var float
     *
     * @ORM\Column(name="altura_vientos_3er_nivel", type="float")
     */
    private $alturaVientos3erNivel;

    /**
     * @var float
     *
     * @ORM\Column(name="altura_vientos_4to_nivel", type="float")
     */
    private $alturaVientos4toNivel;

    /**
     * @var float
     *
     * @ORM\Column(name="altura_antitorsor", type="float")
     */
    private $alturaAntitorsor;

    /**
     * @var float
     *
     * @ORM\Column(name="diametro_cables_tensores", type="float")
     */
    private $diametroCablesTensores;

    /**
     * @var float
     *
     * @ORM\Column(name="distancia_anclaje1", type="float")
     */
    private $distanciaAnclaje1;

    /**
     * @var float
     *
     * @ORM\Column(name="distancia_anclaje2", type="float")
     */
    private $distanciaAnclaje2;

    /**
     * @var float
     *
     * @ORM\Column(name="distancia_anclaje3", type="float")
     */
    private $distanciaAnclaje3;

    /**
     * @var float
     *
     * @ORM\Column(name="distancia_anclaje4", type="float")
     */
    private $distanciaAnclaje4;

    /**
     * @var float
     *
     * @ORM\Column(name="distancia_entre_columnas", type="float")
     */
    private $distanciaEntreColumnas;

    /**
     * @var float
     *
     * @ORM\Column(name="tipo_seccion_transversal", type="float")
     */
    private $tipoSeccionTransversal;

    /**
     * @var float
     *
     * @ORM\Column(name="dimensiones_angular_diagonales", type="float")
     */
    private $dimensionesAngularDiagonales;

    /**
     * @var float
     *
     * @ORM\Column(name="diametro_tubo_diagonales", type="float")
     */
    private $diametroTuboDiagonales;

    /**
     * @var float
     *
     * @ORM\Column(name="longitud_diagonales", type="float")
     */
    private $longitudDiagonales;

    /**
     * @var string
     *
     * @ORM\Column(name="columna_donde_se_instalara", type="string", length=50)
     */
    private $columnaDondeSeInstalara;

    /**
     * @var string
     *
     * @ORM\Column(name="tranque_torre_donde_se_instalara", type="string", length=50)
     */
    private $tranqueTorreDondeSeInstalara;


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
     * Set latitudTorre.
     *
     * @param float $latitudTorre
     *
     * @return relacion_torres_a4
     */
    public function setLatitudTorre($latitudTorre)
    {
        $this->latitudTorre = $latitudTorre;

        return $this;
    }

    /**
     * Get latitudTorre.
     *
     * @return float
     */
    public function getLatitudTorre()
    {
        return $this->latitudTorre;
    }

    /**
     * Set longitudTorre.
     *
     * @param float $longitudTorre
     *
     * @return relacion_torres_a4
     */
    public function setLongitudTorre($longitudTorre)
    {
        $this->longitudTorre = $longitudTorre;

        return $this;
    }

    /**
     * Get longitudTorre.
     *
     * @return float
     */
    public function getLongitudTorre()
    {
        return $this->longitudTorre;
    }

    /**
     * Set tipoTorre.
     *
     * @param string $tipoTorre
     *
     * @return relacion_torres_a4
     */
    public function setTipoTorre($tipoTorre)
    {
        $this->tipoTorre = $tipoTorre;

        return $this;
    }

    /**
     * Get tipoTorre.
     *
     * @return string
     */
    public function getTipoTorre()
    {
        return $this->tipoTorre;
    }

    /**
     * Set alturaTorre.
     *
     * @param float $alturaTorre
     *
     * @return relacion_torres_a4
     */
    public function setAlturaTorre($alturaTorre)
    {
        $this->alturaTorre = $alturaTorre;

        return $this;
    }

    /**
     * Get alturaTorre.
     *
     * @return float
     */
    public function getAlturaTorre()
    {
        return $this->alturaTorre;
    }

    /**
     * Set alturaVientos1erNivel.
     *
     * @param float $alturaVientos1erNivel
     *
     * @return relacion_torres_a4
     */
    public function setAlturaVientos1erNivel($alturaVientos1erNivel)
    {
        $this->alturaVientos1erNivel = $alturaVientos1erNivel;

        return $this;
    }

    /**
     * Get alturaVientos1erNivel.
     *
     * @return float
     */
    public function getAlturaVientos1erNivel()
    {
        return $this->alturaVientos1erNivel;
    }

    /**
     * Set alturaVientos2doNivel.
     *
     * @param float $alturaVientos2doNivel
     *
     * @return relacion_torres_a4
     */
    public function setAlturaVientos2doNivel($alturaVientos2doNivel)
    {
        $this->alturaVientos2doNivel = $alturaVientos2doNivel;

        return $this;
    }

    /**
     * Get alturaVientos2doNivel.
     *
     * @return float
     */
    public function getAlturaVientos2doNivel()
    {
        return $this->alturaVientos2doNivel;
    }

    /**
     * Set alturaVientos3erNivel.
     *
     * @param float $alturaVientos3erNivel
     *
     * @return relacion_torres_a4
     */
    public function setAlturaVientos3erNivel($alturaVientos3erNivel)
    {
        $this->alturaVientos3erNivel = $alturaVientos3erNivel;

        return $this;
    }

    /**
     * Get alturaVientos3erNivel.
     *
     * @return float
     */
    public function getAlturaVientos3erNivel()
    {
        return $this->alturaVientos3erNivel;
    }

    /**
     * Set alturaVientos4toNivel.
     *
     * @param float $alturaVientos4toNivel
     *
     * @return relacion_torres_a4
     */
    public function setAlturaVientos4toNivel($alturaVientos4toNivel)
    {
        $this->alturaVientos4toNivel = $alturaVientos4toNivel;

        return $this;
    }

    /**
     * Get alturaVientos4toNivel.
     *
     * @return float
     */
    public function getAlturaVientos4toNivel()
    {
        return $this->alturaVientos4toNivel;
    }

    /**
     * Set alturaAntitorsor.
     *
     * @param float $alturaAntitorsor
     *
     * @return relacion_torres_a4
     */
    public function setAlturaAntitorsor($alturaAntitorsor)
    {
        $this->alturaAntitorsor = $alturaAntitorsor;

        return $this;
    }

    /**
     * Get alturaAntitorsor.
     *
     * @return float
     */
    public function getAlturaAntitorsor()
    {
        return $this->alturaAntitorsor;
    }

    /**
     * Set diametroCablesTensores.
     *
     * @param float $diametroCablesTensores
     *
     * @return relacion_torres_a4
     */
    public function setDiametroCablesTensores($diametroCablesTensores)
    {
        $this->diametroCablesTensores = $diametroCablesTensores;

        return $this;
    }

    /**
     * Get diametroCablesTensores.
     *
     * @return float
     */
    public function getDiametroCablesTensores()
    {
        return $this->diametroCablesTensores;
    }

    /**
     * Set distanciaAnclaje1.
     *
     * @param float $distanciaAnclaje1
     *
     * @return relacion_torres_a4
     */
    public function setDistanciaAnclaje1($distanciaAnclaje1)
    {
        $this->distanciaAnclaje1 = $distanciaAnclaje1;

        return $this;
    }

    /**
     * Get distanciaAnclaje1.
     *
     * @return float
     */
    public function getDistanciaAnclaje1()
    {
        return $this->distanciaAnclaje1;
    }

    /**
     * Set distanciaAnclaje2.
     *
     * @param float $distanciaAnclaje2
     *
     * @return relacion_torres_a4
     */
    public function setDistanciaAnclaje2($distanciaAnclaje2)
    {
        $this->distanciaAnclaje2 = $distanciaAnclaje2;

        return $this;
    }

    /**
     * Get distanciaAnclaje2.
     *
     * @return float
     */
    public function getDistanciaAnclaje2()
    {
        return $this->distanciaAnclaje2;
    }

    /**
     * Set distanciaAnclaje3.
     *
     * @param float $distanciaAnclaje3
     *
     * @return relacion_torres_a4
     */
    public function setDistanciaAnclaje3($distanciaAnclaje3)
    {
        $this->distanciaAnclaje3 = $distanciaAnclaje3;

        return $this;
    }

    /**
     * Get distanciaAnclaje3.
     *
     * @return float
     */
    public function getDistanciaAnclaje3()
    {
        return $this->distanciaAnclaje3;
    }

    /**
     * Set distanciaAnclaje4.
     *
     * @param float $distanciaAnclaje4
     *
     * @return relacion_torres_a4
     */
    public function setDistanciaAnclaje4($distanciaAnclaje4)
    {
        $this->distanciaAnclaje4 = $distanciaAnclaje4;

        return $this;
    }

    /**
     * Get distanciaAnclaje4.
     *
     * @return float
     */
    public function getDistanciaAnclaje4()
    {
        return $this->distanciaAnclaje4;
    }

    /**
     * Set distanciaEntreColumnas.
     *
     * @param float $distanciaEntreColumnas
     *
     * @return relacion_torres_a4
     */
    public function setDistanciaEntreColumnas($distanciaEntreColumnas)
    {
        $this->distanciaEntreColumnas = $distanciaEntreColumnas;

        return $this;
    }

    /**
     * Get distanciaEntreColumnas.
     *
     * @return float
     */
    public function getDistanciaEntreColumnas()
    {
        return $this->distanciaEntreColumnas;
    }

    /**
     * Set tipoSeccionTransversal.
     *
     * @param float $tipoSeccionTransversal
     *
     * @return relacion_torres_a4
     */
    public function setTipoSeccionTransversal($tipoSeccionTransversal)
    {
        $this->tipoSeccionTransversal = $tipoSeccionTransversal;

        return $this;
    }

    /**
     * Get tipoSeccionTransversal.
     *
     * @return float
     */
    public function getTipoSeccionTransversal()
    {
        return $this->tipoSeccionTransversal;
    }

    /**
     * Set dimensionesAngularDiagonales.
     *
     * @param float $dimensionesAngularDiagonales
     *
     * @return relacion_torres_a4
     */
    public function setDimensionesAngularDiagonales($dimensionesAngularDiagonales)
    {
        $this->dimensionesAngularDiagonales = $dimensionesAngularDiagonales;

        return $this;
    }

    /**
     * Get dimensionesAngularDiagonales.
     *
     * @return float
     */
    public function getDimensionesAngularDiagonales()
    {
        return $this->dimensionesAngularDiagonales;
    }

    /**
     * Set diametroTuboDiagonales.
     *
     * @param float $diametroTuboDiagonales
     *
     * @return relacion_torres_a4
     */
    public function setDiametroTuboDiagonales($diametroTuboDiagonales)
    {
        $this->diametroTuboDiagonales = $diametroTuboDiagonales;

        return $this;
    }

    /**
     * Get diametroTuboDiagonales.
     *
     * @return float
     */
    public function getDiametroTuboDiagonales()
    {
        return $this->diametroTuboDiagonales;
    }

    /**
     * Set longitudDiagonales.
     *
     * @param float $longitudDiagonales
     *
     * @return relacion_torres_a4
     */
    public function setLongitudDiagonales($longitudDiagonales)
    {
        $this->longitudDiagonales = $longitudDiagonales;

        return $this;
    }

    /**
     * Get longitudDiagonales.
     *
     * @return float
     */
    public function getLongitudDiagonales()
    {
        return $this->longitudDiagonales;
    }

    /**
     * Set columnaDondeSeInstalara.
     *
     * @param string $columnaDondeSeInstalara
     *
     * @return relacion_torres_a4
     */
    public function setColumnaDondeSeInstalara($columnaDondeSeInstalara)
    {
        $this->columnaDondeSeInstalara = $columnaDondeSeInstalara;

        return $this;
    }

    /**
     * Get columnaDondeSeInstalara.
     *
     * @return string
     */
    public function getColumnaDondeSeInstalara()
    {
        return $this->columnaDondeSeInstalara;
    }

    /**
     * Set tranqueTorreDondeSeInstalara.
     *
     * @param string $tranqueTorreDondeSeInstalara
     *
     * @return relacion_torres_a4
     */
    public function setTranqueTorreDondeSeInstalara($tranqueTorreDondeSeInstalara)
    {
        $this->tranqueTorreDondeSeInstalara = $tranqueTorreDondeSeInstalara;

        return $this;
    }

    /**
     * Get tranqueTorreDondeSeInstalara.
     *
     * @return string
     */
    public function getTranqueTorreDondeSeInstalara()
    {
        return $this->tranqueTorreDondeSeInstalara;
    }

    /**
     * Set anexo.
     *
     * @param \AppBundle\Entity\anexo4_arrendamiento_espacios $anexo
     *
     * @return relacion_torres_a4
     */
    public function setAnexo(\AppBundle\Entity\anexo4_arrendamiento_espacios $anexo)
    {
        $this->anexo = $anexo;

        return $this;
    }

    /**
     * Get anexo.
     *
     * @return \AppBundle\Entity\anexo4_arrendamiento_espacios
     */
    public function getAnexo()
    {
        return $this->anexo;
    }
}
