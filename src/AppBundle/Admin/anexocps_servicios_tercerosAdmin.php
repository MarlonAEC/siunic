<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class anexocps_servicios_tercerosAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id', null, array('No.'))
            ->add('contrato', null, array('Contrato al que Pertenece'))
            ->add('descripcionServicio')
            ->add('obra')
            ->add('diasLimites')
            ->add('montoCuc')
            ->add('montoCup')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', null, array('No.'))
            ->add('contrato', null, array('Contrato al que Pertenece'))
            ->add('descripcionServicio')
            ->add('obra')
            ->add('diasLimites')
            ->add('montoCuc')
            ->add('montoCup')
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
        if($this->getRoot()->getClass() == get_class($this->getSubject())){
            $formMapper
                //->add('id')
                ->add('contrato', null, array('Contrato al que Pertenece'))
                ->add('descripcionServicio')
                ->add('obra')
                ->add('diasLimites')
                ->add('montoCuc')
                ->add('montoCup')
            ;           
        }
        else{
            $formMapper
                //->add('id')
                ->add('descripcionServicio')
                ->add('obra')
                ->add('diasLimites')
                ->add('montoCuc')
                ->add('montoCup')
            ;
        }
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array('No.'))
            ->add('contrato', null, array('Contrato al que Pertenece'))
            ->add('descripcionServicio')
            ->add('obra')
            ->add('diasLimites')
            ->add('montoCuc')
            ->add('montoCup')
        ;
    }
}
