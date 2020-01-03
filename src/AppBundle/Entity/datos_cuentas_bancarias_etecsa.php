<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * datos_cuentas_bancarias_etecsa
 *
 * @ORM\Table(name="datos_cuentas_bancarias_etecsa")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\datos_cuentas_bancarias_etecsaRepository")
 */
class datos_cuentas_bancarias_etecsa
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
     * @var string
     *
     * @ORM\Column(name="division_territorial", type="string", length=255)
     */
    private $divisionTerritorial;

    /**
     * @var string
     *
     * @ORM\Column(name="banco", type="string", length=255)
     */
    private $banco;

    /**
     * @var string
     *
     * @ORM\Column(name="no_cuenta", type="string", length=255)
     */
    private $noCuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=255)
     */
    private $moneda;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="contrato_agencia_persona_juridica", cascade={"all"})
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank(message="No debe estar vacío")
     */
    private $contrato;

    public function __toString() {
        return $this->getId() ? "Datos Cuentas para el Contrato: ".$this->getContrato()->getNumeroContrato(): '';
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
     * Set divisionTerritorial.
     *
     * @param string $divisionTerritorial
     *
     * @return datos_cuentas_bancarias_etecsa
     */
    public function setDivisionTerritorial($divisionTerritorial)
    {
        $this->divisionTerritorial = $divisionTerritorial;

        return $this;
    }

    /**
     * Get divisionTerritorial.
     *
     * @return string
     */
    public function getDivisionTerritorial()
    {
        return $this->divisionTerritorial;
    }

    /**
     * Set banco.
     *
     * @param string $banco
     *
     * @return datos_cuentas_bancarias_etecsa
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;

        return $this;
    }

    /**
     * Get banco.
     *
     * @return string
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Set noCuenta.
     *
     * @param string $noCuenta
     *
     * @return datos_cuentas_bancarias_etecsa
     */
    public function setNoCuenta($noCuenta)
    {
        $this->noCuenta = $noCuenta;

        return $this;
    }

    /**
     * Get noCuenta.
     *
     * @return string
     */
    public function getNoCuenta()
    {
        return $this->noCuenta;
    }

    /**
     * Set moneda.
     *
     * @param string $moneda
     *
     * @return datos_cuentas_bancarias_etecsa
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda.
     *
     * @return string
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_agencia_persona_juridica $contrato
     *
     * @return datos_cuentas_bancarias_etecsa
     */
    public function setContrato(\AppBundle\Entity\contrato_agencia_persona_juridica $contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato.
     *
     * @return \AppBundle\Entity\contrato_agencia_persona_juridica
     */
    public function getContrato()
    {
        return $this->contrato;
    }
}
