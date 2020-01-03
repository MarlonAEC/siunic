<?php

namespace AppBundle\Admin;

///require __DIR__.'/vendor/autoload.php';

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Spipu\Html2Pdf\Html2Pdf;

class EmpresaAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('codigoREUP')
            ->add('nombreOficial')
            ->add('nombreAbreviado')
            //->add('domicilio')
            ->add('actividadEconomica')
            ->add('organismo')
            ->add('contratoAgencia')
            ->add('contratoAreas')
            ->add('contrato_arrendamiento_pizarra')
            ->add('contratoArrendamientoRedes')
            ->add('contratoCompraVenta')
            ->add('contratoCompraVentaPizarra')
            ->add('contratoInstalacionPizarra')
            ->add('contratoMantenimientoPizarra')
            ->add('contratoPrestacionServicios')
            ->add('contratoPrestacionServiciosCT')
            ->add('contratoRecargaPOS')
            //->add('correoElectronico')
            //->add('sitioWeb')
            //->add('observaciones')
            //->add('nOCuentaBancariaMLC')
            //->add('nOCuentaBancariaMN')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {

        $listMapper
            //->add('id')
            ->add('codigoREUP')
            ->add('nombreOficial')
            ->add('nombreAbreviado')
            ->add('domicilio')
            ->add('actividadEconomica')
            ->add('organismo')    
            ->add('correoElectronico')
            ->add('sitioWeb')
            ->add('observaciones')
            ->add('nOCuentaBancariaMLC')
            ->add('nOCuentaBancariaMN')
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ])
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            //->add('id')
            ->add('codigoREUP')
            ->add('nombreOficial')
            ->add('nombreAbreviado')
            ->add('domicilio')
            ->add('actividadEconomica')
            ->add('organismo')
            ->add('correoElectronico')
            ->add('sitioWeb')
            ->add('observaciones')
            ->add('nOCuentaBancariaMLC')
            ->add('nOCuentaBancariaMN')
            ->end();
            $formMapper
             ->with('Añadir Trabajadores a la empresa', array('class' => 'col-md-12'))
             ->add('personas', 'sonata_type_collection', array(
               'label' => false,
                "by_reference" => false,
                'btn_add' =>'link_add',
                'type_options' => array(
                    'delete' => 'link_delete',
                )
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ))
          ->end();
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('codigoREUP')
            ->add('nombreOficial')
            ->add('nombreAbreviado')
            ->add('domicilio')
            ->add('actividadEconomica')
            ->add('organismo')
            ->add('correoElectronico')
            ->add('sitioWeb')
            ->add('observaciones')
            ->add('nOCuentaBancariaMLC')
            ->add('nOCuentaBancariaMN')
        ;
    }
    /**
     * @param Empresa $object
     */
    public function prePersist($object)
    {
        parent::prePersist($object);
        
        foreach ($object->getPersonas() as $p) /* @var $p Personas */ {
            $p->setEmpresa($object);
        }
    }
}
