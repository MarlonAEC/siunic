<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * relacion_mastiles_a4
 *
 * @ORM\Table(name="relacion_mastiles_a4")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\relacion_mastiles_a4Repository")
 */
class relacion_mastiles_a4
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
     * @ORM\Column(name="latitud_mastil", type="float")
     */
    private $latitudMastil;

    /**
     * @var float
     *
     * @ORM\Column(name="longitud_mastil", type="float")
     */
    private $longitudMastil;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_mastil", type="string", length=50)
     */
    private $tipoMastil;

    /**
     * @var float
     *
     * @ORM\Column(name="altura_mastil", type="float")
     */
    private $alturaMastil;

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
     * @ORM\Column(name="diametro_cable_tensor", type="float")
     */
    private $diametroCableTensor;

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
     * @ORM\Column(name="dimension_angular_columna_mastil", type="float")
     */
    private $dimensionAngularColumnaMastil;

    /**
     * @var float
     *
     * @ORM\Column(name="diametro_tubo_columna_mastil", type="float")
     */
    private $diametroTuboColumnaMastil;

    /**
     * @var float
     *
     * @ORM\Column(name="longitud_tramo_columna_mastil", type="float")
     */
    private $longitudTramoColumnaMastil;


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
     * Set latitudMastil.
     *
     * @param float $latitudMastil
     *
     * @return relacion_mastiles_a4
     */
    public function setLatitudMastil($latitudMastil)
    {
        $this->latitudMastil = $latitudMastil;

        return $this;
    }

    /**
     * Get latitudMastil.
     *
     * @return float
     */
    public function getLatitudMastil()
    {
        return $this->latitudMastil;
    }

    /**
     * Set longitudMastil.
     *
     * @param float $longitudMastil
     *
     * @return relacion_mastiles_a4
     */
    public function setLongitudMastil($longitudMastil)
    {
        $this->longitudMastil = $longitudMastil;

        return $this;
    }

    /**
     * Get longitudMastil.
     *
     * @return float
     */
    public function getLongitudMastil()
    {
        return $this->longitudMastil;
    }

    /**
     * Set tipoMastil.
     *
     * @param string $tipoMastil
     *
     * @return relacion_mastiles_a4
     */
    public function setTipoMastil($tipoMastil)
    {
        $this->tipoMastil = $tipoMastil;

        return $this;
    }

    /**
     * Get tipoMastil.
     *
     * @return string
     */
    public function getTipoMastil()
    {
        return $this->tipoMastil;
    }

    /**
     * Set alturaMastil.
     *
     * @param float $alturaMastil
     *
     * @return relacion_mastiles_a4
     */
    public function setAlturaMastil($alturaMastil)
    {
        $this->alturaMastil = $alturaMastil;

        return $this;
    }

    /**
     * Get alturaMastil.
     *
     * @return float
     */
    public function getAlturaMastil()
    {
        return $this->alturaMastil;
    }

    /**
     * Set alturaVientos1erNivel.
     *
     * @param float $alturaVientos1erNivel
     *
     * @return relacion_mastiles_a4
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
     * @return relacion_mastiles_a4
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
     * @return relacion_mastiles_a4
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
     * @return relacion_mastiles_a4
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
     * Set diametroCableTensor.
     *
     * @param float $diametroCableTensor
     *
     * @return relacion_mastiles_a4
     */
    public function setDiametroCableTensor($diametroCableTensor)
    {
        $this->diametroCableTensor = $diametroCableTensor;

        return $this;
    }

    /**
     * Get diametroCableTensor.
     *
     * @return float
     */
    public function getDiametroCableTensor()
    {
        return $this->diametroCableTensor;
    }

    /**
     * Set distanciaAnclaje1.
     *
     * @param float $distanciaAnclaje1
     *
     * @return relacion_mastiles_a4
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
     * @return relacion_mastiles_a4
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
     * @return relacion_mastiles_a4
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
     * @return relacion_mastiles_a4
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
     * Set dimensionAngularColumnaMastil.
     *
     * @param float $dimensionAngularColumnaMastil
     *
     * @return relacion_mastiles_a4
     */
    public function setDimensionAngularColumnaMastil($dimensionAngularColumnaMastil)
    {
        $this->dimensionAngularColumnaMastil = $dimensionAngularColumnaMastil;

        return $this;
    }

    /**
     * Get dimensionAngularColumnaMastil.
     *
     * @return float
     */
    public function getDimensionAngularColumnaMastil()
    {
        return $this->dimensionAngularColumnaMastil;
    }

    /**
     * Set diametroTuboColumnaMastil.
     *
     * @param float $diametroTuboColumnaMastil
     *
     * @return relacion_mastiles_a4
     */
    public function setDiametroTuboColumnaMastil($diametroTuboColumnaMastil)
    {
        $this->diametroTuboColumnaMastil = $diametroTuboColumnaMastil;

        return $this;
    }

    /**
     * Get diametroTuboColumnaMastil.
     *
     * @return float
     */
    public function getDiametroTuboColumnaMastil()
    {
        return $this->diametroTuboColumnaMastil;
    }

    /**
     * Set longitudTramoColumnaMastil.
     *
     * @param float $longitudTramoColumnaMastil
     *
     * @return relacion_mastiles_a4
     */
    public function setLongitudTramoColumnaMastil($longitudTramoColumnaMastil)
    {
        $this->longitudTramoColumnaMastil = $longitudTramoColumnaMastil;

        return $this;
    }

    /**
     * Get longitudTramoColumnaMastil.
     *
     * @return float
     */
    public function getLongitudTramoColumnaMastil()
    {
        return $this->longitudTramoColumnaMastil;
    }

    /**
     * Set anexo.
     *
     * @param \AppBundle\Entity\anexo4_arrendamiento_espacios $anexo
     *
     * @return relacion_mastiles_a4
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
