<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class anexo1_contrato_compra_venta_pizarraAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('pizarraPbx')
            ->add('modelo')
            ->add('cantidadTroncos')
            ->add('cantidadExtensiones')
            ->add('telefonosAsociadosPbx')
            ->add('licenciasOSoftware')
            ->add('otrosAccesorios')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('pizarraPbx')
            ->add('modelo')
            ->add('cantidadTroncos')
            ->add('cantidadExtensiones')
            ->add('telefonosAsociadosPbx')
            ->add('licenciasOSoftware')
            ->add('otrosAccesorios')
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
            ->add('pizarraPbx')
            ->add('modelo')
            ->add('cantidadTroncos')
            ->add('cantidadExtensiones')
            ->add('telefonosAsociadosPbx')
            ->add('licenciasOSoftware')
            ->add('otrosAccesorios')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('pizarraPbx')
            ->add('modelo')
            ->add('cantidadTroncos')
            ->add('cantidadExtensiones')
            ->add('telefonosAsociadosPbx')
            ->add('licenciasOSoftware')
            ->add('otrosAccesorios')
        ;
    }
}
