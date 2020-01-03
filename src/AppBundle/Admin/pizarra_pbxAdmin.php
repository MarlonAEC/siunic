<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class pizarra_pbxAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('modelo')
            ->add('marca')
            ->add('cantidadExtensionesDisponibles')
            ->add('cantidadTroncosDisponibles')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('modelo')
            ->add('marca')
            ->add('cantidadExtensionesDisponibles',null, array('label'=>'Cantidad de Extensiones Disponibles'))
            ->add('cantidadTroncosDisponibles',null, array('label'=>'Cantidad de Troncos Disponibles'))
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
            ->add('modelo')
            ->add('marca')
            ->add('cantidadExtensionesDisponibles',null, array('label'=>'Cantidad de Extensiones Disponibles'))
            ->add('cantidadTroncosDisponibles',null, array('label'=>'Cantidad de Troncos Disponibles'))
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('modelo')
            ->add('marca')
            ->add('cantidadExtensionesDisponibles',null, array('label'=>'Cantidad de Extensiones Disponibles'))
            ->add('cantidadTroncosDisponibles',null, array('label'=>'Cantidad de Troncos Disponibles'))
        ;
    }
}
