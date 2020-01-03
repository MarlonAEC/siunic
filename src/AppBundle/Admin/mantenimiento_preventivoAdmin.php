<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class mantenimiento_preventivoAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('fechaMantenimiento1')
            ->add('fechaMantenimiento2')
            ->add('costoTotal')
            ->add('coutaMantenimiento')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('fechaMantenimiento1')
            ->add('fechaMantenimiento2')
            ->add('costoTotal')
            ->add('coutaMantenimiento')
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
            ->add('id')
            ->add('fechaMantenimiento1')
            ->add('fechaMantenimiento2')
            ->add('costoTotal')
            ->add('coutaMantenimiento')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('fechaMantenimiento1')
            ->add('fechaMantenimiento2')
            ->add('costoTotal')
            ->add('coutaMantenimiento')
        ;
    }
}
