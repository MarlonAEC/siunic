<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * anexo2_contrato_arrendamiento_redes
 *
 * @ORM\Table(name="anexo2_contrato_arrendamiento_redes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\anexo2_contrato_arrendamiento_redesRepository")
 */
class anexo2_contrato_arrendamiento_redes
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
     * @ORM\OneToOne(targetEntity="contrato_arrendamiento_redes", cascade={"all"})
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank(message="No debe estar vacío")
     */
    private $contrato;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=50)
     */
    private $provincia;

    /**
     * @var float
     *
     * @ORM\Column(name="total_KM_arrendado_soterrado", type="float")
     */
    private $totalKMArrendadoSoterrado;

    /**
     * @var float
     *
     * @ORM\Column(name="total_KM_arrendado_aereo", type="float")
     */
    private $totalKMArrendadoAereo;

    /**
     * @var float
     *
     * @ORM\Column(name="total_KM_arrendado_bitubos", type="float")
     */
    private $totalKMArrendadoBitubos;

    /**
     * @var float
     *
     * @ORM\Column(name="total_USD_por_soterrado", type="float")
     */
    private $totalUSDPorSoterrado;

    /**
     * @var float
     *
     * @ORM\Column(name="total_USD_por_aereo", type="float")
     */
    private $totalUSDPorAereo;

    /**
     * @var float
     *
     * @ORM\Column(name="total_USD_por_bitubos", type="float")
     */
    private $totalUSDPorBitubos;

    /**
     * @var float
     *
     * @ORM\Column(name="USD_por_mes_soterrado", type="float")
     */
    private $uSDPorMesSoterrado;

    /**
     * @var float
     *
     * @ORM\Column(name="USD_por_mes_aereo", type="float")
     */
    private $uSDPorMesAereo;

    /**
     * @var float
     *
     * @ORM\Column(name="USD_por_mes_bitubos", type="float")
     */
    private $uSDPorMesBitubos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tipoDistancia = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString() {
        return $this->getId()?'Anexo 2 del contrato:'.$this->getContrato()->getNumeroContrato():'';
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
     * Set provincia.
     *
     * @param string $provincia
     *
     * @return anexo2_contrato_arrendamiento_redes
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia.
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set totalKMArrendadoSoterrado.
     *
     * @param float $totalKMArrendadoSoterrado
     *
     * @return anexo2_contrato_arrendamiento_redes
     */
    public function setTotalKMArrendadoSoterrado($totalKMArrendadoSoterrado)
    {
        $this->totalKMArrendadoSoterrado = $totalKMArrendadoSoterrado;

        return $this;
    }

    /**
     * Get totalKMArrendadoSoterrado.
     *
     * @return float
     */
    public function getTotalKMArrendadoSoterrado()
    {
        return $this->totalKMArrendadoSoterrado;
    }

    /**
     * Set totalKMArrendadoAereo.
     *
     * @param float $totalKMArrendadoAereo
     *
     * @return anexo2_contrato_arrendamiento_redes
     */
    public function setTotalKMArrendadoAereo($totalKMArrendadoAereo)
    {
        $this->totalKMArrendadoAereo = $totalKMArrendadoAereo;

        return $this;
    }

    /**
     * Get totalKMArrendadoAereo.
     *
     * @return float
     */
    public function getTotalKMArrendadoAereo()
    {
        return $this->totalKMArrendadoAereo;
    }

    /**
     * Set totalKMArrendadoBitubos.
     *
     * @param float $totalKMArrendadoBitubos
     *
     * @return anexo2_contrato_arrendamiento_redes
     */
    public function setTotalKMArrendadoBitubos($totalKMArrendadoBitubos)
    {
        $this->totalKMArrendadoBitubos = $totalKMArrendadoBitubos;

        return $this;
    }

    /**
     * Get totalKMArrendadoBitubos.
     *
     * @return float
     */
    public function getTotalKMArrendadoBitubos()
    {
        return $this->totalKMArrendadoBitubos;
    }

    /**
     * Set totalUSDPorSoterrado.
     *
     * @param float $totalUSDPorSoterrado
     *
     * @return anexo2_contrato_arrendamiento_redes
     */
    public function setTotalUSDPorSoterrado($totalUSDPorSoterrado)
    {
        $this->totalUSDPorSoterrado = $totalUSDPorSoterrado;

        return $this;
    }

    /**
     * Get totalUSDPorSoterrado.
     *
     * @return float
     */
    public function getTotalUSDPorSoterrado()
    {
        return $this->totalUSDPorSoterrado;
    }

    /**
     * Set totalUSDPorAereo.
     *
     * @param float $totalUSDPorAereo
     *
     * @return anexo2_contrato_arrendamiento_redes
     */
    public function setTotalUSDPorAereo($totalUSDPorAereo)
    {
        $this->totalUSDPorAereo = $totalUSDPorAereo;

        return $this;
    }

    /**
     * Get totalUSDPorAereo.
     *
     * @return float
     */
    public function getTotalUSDPorAereo()
    {
        return $this->totalUSDPorAereo;
    }

    /**
     * Set totalUSDPorBitubos.
     *
     * @param float $totalUSDPorBitubos
     *
     * @return anexo2_contrato_arrendamiento_redes
     */
    public function setTotalUSDPorBitubos($totalUSDPorBitubos)
    {
        $this->totalUSDPorBitubos = $totalUSDPorBitubos;

        return $this;
    }

    /**
     * Get totalUSDPorBitubos.
     *
     * @return float
     */
    public function getTotalUSDPorBitubos()
    {
        return $this->totalUSDPorBitubos;
    }

    /**
     * Set uSDPorMesSoterrado.
     *
     * @param float $uSDPorMesSoterrado
     *
     * @return anexo2_contrato_arrendamiento_redes
     */
    public function setUSDPorMesSoterrado($uSDPorMesSoterrado)
    {
        $this->uSDPorMesSoterrado = $uSDPorMesSoterrado;

        return $this;
    }

    /**
     * Get uSDPorMesSoterrado.
     *
     * @return float
     */
    public function getUSDPorMesSoterrado()
    {
        return $this->uSDPorMesSoterrado;
    }

    /**
     * Set uSDPorMesAereo.
     *
     * @param float $uSDPorMesAereo
     *
     * @return anexo2_contrato_arrendamiento_redes
     */
    public function setUSDPorMesAereo($uSDPorMesAereo)
    {
        $this->uSDPorMesAereo = $uSDPorMesAereo;

        return $this;
    }

    /**
     * Get uSDPorMesAereo.
     *
     * @return float
     */
    public function getUSDPorMesAereo()
    {
        return $this->uSDPorMesAereo;
    }

    /**
     * Set uSDPorMesBitubos.
     *
     * @param float $uSDPorMesBitubos
     *
     * @return anexo2_contrato_arrendamiento_redes
     */
    public function setUSDPorMesBitubos($uSDPorMesBitubos)
    {
        $this->uSDPorMesBitubos = $uSDPorMesBitubos;

        return $this;
    }

    /**
     * Get uSDPorMesBitubos.
     *
     * @return float
     */
    public function getUSDPorMesBitubos()
    {
        return $this->uSDPorMesBitubos;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_arrendamiento_redes $contrato
     *
     * @return anexo2_contrato_arrendamiento_redes
     */
    public function setContrato(\AppBundle\Entity\contrato_arrendamiento_redes $contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato.
     *
     * @return \AppBundle\Entity\contrato_arrendamiento_redes
     */
    public function getContrato()
    {
        return $this->contrato;
    }

    /**
     * Add tipoDistancium.
     *
     * @param \AppBundle\Entity\tipos_distancias_arrendadas $tipoDistancium
     *
     * @return anexo2_contrato_arrendamiento_redes
     */
    public function addTipoDistancium(\AppBundle\Entity\tipos_distancias_arrendadas $tipoDistancium)
    {
        $this->tipoDistancia[] = $tipoDistancium;

        return $this;
    }

    /**
     * Remove tipoDistancium.
     *
     * @param \AppBundle\Entity\tipos_distancias_arrendadas $tipoDistancium
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeTipoDistancium(\AppBundle\Entity\tipos_distancias_arrendadas $tipoDistancium)
    {
        return $this->tipoDistancia->removeElement($tipoDistancium);
    }

    /**
     * Get tipoDistancia.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTipoDistancia()
    {
        return $this->tipoDistancia;
    }
}
