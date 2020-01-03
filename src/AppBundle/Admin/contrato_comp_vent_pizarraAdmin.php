<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class contrato_comp_vent_pizarraAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('numeroContrato')
            ->add('fechaFirma')
            ->add('lugarFirma')
            ->add('direccionEntrega')
            ->add('plazoEntrega')
            ->add('plazoSaneamientoProductos')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('numeroContrato')
            ->add('fechaFirma')
            ->add('lugarFirma')
            ->add('direccionEntrega')
            ->add('plazoEntrega')
            ->add('plazoSaneamientoProductos',null, array('label'=>'Plazo para el Saneamiento de los Productos'))
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
            ->add('numeroContrato')
            ->add('empresa')
            ->add('fechaFirma', 'sonata_type_date_picker', array(
                'label' => 'Fecha de Firma',
                'format' => 'dd/MM/yyyy',
                'required' => false
            ))
            ->add('lugarFirma')
            ->add('direccionEntrega')
            ->add('plazoEntrega')
            ->add('plazoSaneamientoProductos',null, array('label'=>'Plazo para el Saneamiento de los Productos'))
            ->end();
            $formMapper
                ->add(                    
                    $formMapper->create('anexo1', 'form', array(
                       'label' => "Descripción de los Productos Contratados",
                        'by_reference' => true,
                        'data_class' => "AppBundle\\Entity\\anexo1_contrato_compra_venta_pizarra"))
                        ->add('pizarraPbx')
                        ->add('modelo')
                        ->add('cantidadTroncos')
                        ->add('cantidadExtensiones')
                        ->add('telefonosAsociadosPbx')
                        ->add('licenciasOSoftware')
                        ->add('otrosAccesorios')
                )         
            ->end();
            $formMapper
             ->with('Anexo: Puntos de comercialización destinados a la atención del agente. 
               ', array('class' => 'col-md-12'))
             ->add('descripcionProductos', 'sonata_type_collection', array(
                'label' => false,
                "by_reference" => false,
                'btn_add' => 'link_add',
                'type_options' => array(
                    'delete' =>'link_delete',
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
            ->add('id', null, array('label'=>'No.'))
            ->add('numeroContrato')
            ->add('fechaFirma')
            ->add('lugarFirma')
            ->add('direccionEntrega')
            ->add('plazoEntrega')
            ->add('plazoSaneamientoProductos',null, array('label'=>'Plazo para el Saneamiento de los Productos'))
        ;
    }
    
     /**
     * @param contrato_comp_vent_pizarra $object
     */
    public function prePersist($object)
    {
        parent::prePersist($object);
        
        /* @var $a1 anexo1_contrato_compra_venta_pizarra */
        $a1 = $object->getAnexo1();
        $a1->setContrato($object); 
        foreach ($object->getDescripcionProductos() as $dp) /* @var $dp descripcion_productos_contratados */ {
            $dp->setContrato($object);
        }
    }
}
