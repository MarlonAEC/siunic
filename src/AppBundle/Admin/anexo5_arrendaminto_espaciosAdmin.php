<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class anexo5_arrendaminto_espaciosAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('otrasEspecificaciones')
            ->add('proyectoACargo')
            ->add('ejecucionProyectoACargo')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('otrasEspecificaciones')
            ->add('proyectoACargo')
            ->add('ejecucionProyectoACargo')
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
            ->add('otrasEspecificaciones')
            ->add('proyectoACargo')
            ->add('ejecucionProyectoACargo')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('otrasEspecificaciones')
            ->add('proyectoACargo')
            ->add('ejecucionProyectoACargo')
        ;
    }
}
