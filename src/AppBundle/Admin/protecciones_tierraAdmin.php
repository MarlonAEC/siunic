<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class protecciones_tierraAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('existenciaBarraTierraPrincipal')
            ->add('bastidorExistenteConectadoBarra')
            ->add('tierraEquipamiento')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('existenciaBarraTierraPrincipal')
            ->add('bastidorExistenteConectadoBarra')
            ->add('tierraEquipamiento')
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
            ->add('existenciaBarraTierraPrincipal')
            ->add('bastidorExistenteConectadoBarra')
            ->add('tierraEquipamiento')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('existenciaBarraTierraPrincipal')
            ->add('bastidorExistenteConectadoBarra')
            ->add('tierraEquipamiento')
        ;
    }
}
