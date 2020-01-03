<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * anexo2_contrato_recarga_por_pos
 *
 * @ORM\Table(name="anexo2_contrato_recarga_por_pos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\anexo2_contrato_recarga_por_posRepository")
 */
class anexo2_contrato_recarga_por_pos
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
     * @ORM\ManyToOne(targetEntity="contrato_recarga_por_pos")
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id", nullable=false)
     */
    private $contrato;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_punto_venta", type="string", length=255)
     */
    private $nombrePuntoVenta;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=255)
     */
    private $correo;
    
    public function __toString() {
        return $this->getId() ? 'Anexo al 2 contrato: '.$this->getContrato()->getNumeroContrato():'';
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
     * Set nombrePuntoVenta.
     *
     * @param string $nombrePuntoVenta
     *
     * @return anexo2_contrato_recarga_por_pos
     */
    public function setNombrePuntoVenta($nombrePuntoVenta)
    {
        $this->nombrePuntoVenta = $nombrePuntoVenta;

        return $this;
    }

    /**
     * Get nombrePuntoVenta.
     *
     * @return string
     */
    public function getNombrePuntoVenta()
    {
        return $this->nombrePuntoVenta;
    }

    /**
     * Set direccion.
     *
     * @param string $direccion
     *
     * @return anexo2_contrato_recarga_por_pos
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion.
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono.
     *
     * @param string $telefono
     *
     * @return anexo2_contrato_recarga_por_pos
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono.
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set correo.
     *
     * @param string $correo
     *
     * @return anexo2_contrato_recarga_por_pos
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo.
     *
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_recarga_por_pos $contrato
     *
     * @return anexo2_contrato_recarga_por_pos
     */
    public function setContrato(\AppBundle\Entity\contrato_recarga_por_pos $contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato.
     *
     * @return \AppBundle\Entity\contrato_recarga_por_pos
     */
    public function getContrato()
    {
        return $this->contrato;
    }
}
