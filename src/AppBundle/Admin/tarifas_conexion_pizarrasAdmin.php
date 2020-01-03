<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class tarifas_conexion_pizarrasAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id', null, array('No.'))
            ->add('contrato', null, array('Contrato al que Pertenece'))
            ->add('servicio')
            ->add('monedaPago')
            ->add('cantArrendada')
            ->add('cuotaUnaVez')
            ->add('coutaMensual')
            ->add('tarifaConsumo')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', null, array('No.'))
            ->add('contrato', null, array('Contrato al que Pertenece'))
            ->add('servicio')
            ->add('monedaPago')
            ->add('cantArrendada')
            ->add('cuotaUnaVez')
            ->add('coutaMensual')
            ->add('tarifaConsumo')
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
                //->add('id', null, array('No.'))
                ->add('contrato', null, array('Contrato al que Pertenece'))
                ->add('servicio')
                ->add('monedaPago')
                ->add('cantArrendada')
                ->add('cuotaUnaVez')
                ->add('coutaMensual')
                ->add('tarifaConsumo')
            ;            
        }
        else{
            $formMapper
                //->add('id', null, array('No.'))
                //->add('contrato', null, array('Contrato al que Pertenece'))
                ->add('servicio')
                ->add('monedaPago')
                ->add('cantArrendada')
                ->add('cuotaUnaVez')
                ->add('coutaMensual')
                ->add('tarifaConsumo')
            ;
        }
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array('No.'))
            ->add('contrato', null, array('Contrato al que Pertenece'))
            ->add('servicio')
            ->add('monedaPago')
            ->add('cantArrendada')
            ->add('cuotaUnaVez')
            ->add('coutaMensual')
            ->add('tarifaConsumo')
        ;
    }
}
