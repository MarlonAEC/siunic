<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class sistema_iluminacion_a5Admin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('mejoramientoIluminacion')
            ->add('aumentoTomacorrientes')
            ->add('voltajeAObtener')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('mejoramientoIluminacion')
            ->add('aumentoTomacorrientes')
            ->add('voltajeAObtener')
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
            ->add('mejoramientoIluminacion')
            ->add('aumentoTomacorrientes')
            ->add('voltajeAObtener')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('mejoramientoIluminacion')
            ->add('aumentoTomacorrientes')
            ->add('voltajeAObtener')
        ;
    }
}
