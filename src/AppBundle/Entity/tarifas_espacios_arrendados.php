<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * tarifas_espacios_arrendados
 *
 * @ORM\Table(name="tarifas_espacios_arrendados")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\tarifas_espacios_arrendadosRepository")
 */
class tarifas_espacios_arrendados
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
     * @ORM\ManyToOne(targetEntity="anexo1_contrato_arrendamiento_espacios")
     * @ORM\JoinColumn(name="id_anexo", referencedColumnName="id", nullable=false)
     */
    private $anexo;

    /**
     * @var string
     *
     * @ORM\Column(name="espacio_arrendado", type="string", length=255)
     */
    private $espacioArrendado;

    /**
     * @var float
     *
     * @ORM\Column(name="tarifas_mensuales", type="float")
     */
    private $tarifasMensuales;


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
     * Set espacioArrendado.
     *
     * @param string $espacioArrendado
     *
     * @return tarifas_espacios_arrendados
     */
    public function setEspacioArrendado($espacioArrendado)
    {
        $this->espacioArrendado = $espacioArrendado;

        return $this;
    }

    /**
     * Get espacioArrendado.
     *
     * @return string
     */
    public function getEspacioArrendado()
    {
        return $this->espacioArrendado;
    }

    /**
     * Set tarifasMensuales.
     *
     * @param float $tarifasMensuales
     *
     * @return tarifas_espacios_arrendados
     */
    public function setTarifasMensuales($tarifasMensuales)
    {
        $this->tarifasMensuales = $tarifasMensuales;

        return $this;
    }

    /**
     * Get tarifasMensuales.
     *
     * @return float
     */
    public function getTarifasMensuales()
    {
        return $this->tarifasMensuales;
    }

    /**
     * Set anexo.
     *
     * @param \AppBundle\Entity\anexo1_contrato_arrendamiento_espacios $anexo
     *
     * @return tarifas_espacios_arrendados
     */
    public function setAnexo(\AppBundle\Entity\anexo1_contrato_arrendamiento_espacios $anexo)
    {
        $this->anexo = $anexo;

        return $this;
    }

    /**
     * Get anexo.
     *
     * @return \AppBundle\Entity\anexo1_contrato_arrendamiento_espacios
     */
    public function getAnexo()
    {
        return $this->anexo;
    }
}
