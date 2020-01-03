<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class relacion_bastidoresAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('propietario')
            ->add('proteccion')
            ->add('modoMontajeBastidorNuevo')
            ->add('bastidorAncho')
            ->add('bastidorProfundidad')
            ->add('bastidorAlto')
            ->add('baseBastidorAncho')
            ->add('baseBastidorProfundidad')
            ->add('baseBastidorAlto')
            ->add('bastidorPDU')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('propietario')
            ->add('proteccion')
            ->add('modoMontajeBastidorNuevo')
            ->add('bastidorAncho')
            ->add('bastidorProfundidad')
            ->add('bastidorAlto')
            ->add('baseBastidorAncho')
            ->add('baseBastidorProfundidad')
            ->add('baseBastidorAlto')
            ->add('bastidorPDU')
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
            ->add('propietario')
            ->add('proteccion')
            ->add('modoMontajeBastidorNuevo')
            ->add('bastidorAncho')
            ->add('bastidorProfundidad')
            ->add('bastidorAlto')
            ->add('baseBastidorAncho')
            ->add('baseBastidorProfundidad')
            ->add('baseBastidorAlto')
            ->add('bastidorPDU')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('propietario')
            ->add('proteccion')
            ->add('modoMontajeBastidorNuevo')
            ->add('bastidorAncho')
            ->add('bastidorProfundidad')
            ->add('bastidorAlto')
            ->add('baseBastidorAncho')
            ->add('baseBastidorProfundidad')
            ->add('baseBastidorAlto')
            ->add('bastidorPDU')
        ;
    }
}
