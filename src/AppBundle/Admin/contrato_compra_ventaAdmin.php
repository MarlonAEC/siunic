<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class contrato_compra_ventaAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('numeroContrato')
            ->add('metodoPago')
            ->add('fechaFirma')
            ->add('lugarFirma')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('empresa')
            ->add('numeroContrato')
            ->add('metodoPago')
            ->add('fechaFirma')
            ->add('lugarFirma')
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
            ->add('empresa')
            ->add('numeroContrato')
            ->add('metodoPago')
            ->add('fechaFirma', 'sonata_type_date_picker', array(
                'label' => 'Fecha de Firma',
                'format' => 'dd/MM/yyyy',
                'required' => false
            ))
            ->add('lugarFirma')
            ->end();
            $formMapper
            ->with('Anexo: Descripción de los Productos', array('class' => 'col-md-12'))
            ->add('anexo1','sonata_type_collection',array(
                'label'=>false,
                'by_reference'=>false,
                'btn_add'=>'link_add'
            ),array('edit'=>'inline','inline'=>'table'))
            ->end();
            $formMapper
            ->with('Anexo: Puntos de Comercialización', array('class' => 'col-md-12'))
            ->add('anexo4','sonata_type_collection',array(
                'label'=>false,
                'by_reference'=>false,
                'btn_add'=>'link_add'
            ),array('edit'=>'inline','inline'=>'table'))
            ->end();
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('numeroContrato')
            ->add('metodoPago')
            ->add('fechaFirma')
            ->add('lugarFirma')
        ;
    }
    /**
     *@param contrato_compra_venta $object Description
     */
    public function prePersist($object) {
        parent::prePersist($object);
        foreach ($object->getAnexo1() as $a1){
            $a1->setContrato($object);
        }
        foreach ($object->getAnexo4() as $a4){
            $a4->setContrato($object);
        }
    }
}
