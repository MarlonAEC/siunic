<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class anexo2_contrato_recarga_por_posAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('contrato',null, array('label'=>'Contrato al que Pertenece'))
            ->add('nombrePuntoVenta')
            ->add('direccion')
            ->add('telefono')
            ->add('correo')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('contrato',null, array('label'=>'Contrato al que Pertenece'))
            ->add('nombrePuntoVenta')
            ->add('direccion')
            ->add('telefono')
            ->add('correo')
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
            //->add('id', null, array('label'=>'No.'))
            ->add('contrato',null, array('label'=>'Contrato al que Pertenece'))
            ->add('nombrePuntoVenta')
            ->add('direccion')
            ->add('telefono')
            ->add('correo')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('contrato',null, array('label'=>'Contrato al que Pertenece'))
            ->add('nombrePuntoVenta')
            ->add('direccion')
            ->add('telefono')
            ->add('correo')
        ;
    }
}
