<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class anexocps_levantamiento_redes_tecnicasAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('contrato', null, array('Contrato al que Pertenece'))
            ->add('diasLimite')
            ->add('direccion')
            ->add('instrumentoPago')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('contrato', null, array('Contrato al que Pertenece'))
            ->add('diasLimite')
            ->add('direccion')
            ->add('instrumentoPago')
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
                //->add('id', null, array('label'=>'No.'))
                ->add('contrato', null, array('Contrato al que Pertenece'))
                ->add('diasLimite')
                ->add('direccion')
                ->add('instrumentoPago')
            ;           
        }
        else{
            $formMapper
                //->add('id', null, array('label'=>'No.'))
                //->add('contrato', null, array('Contrato al que Pertenece'))
                ->add('diasLimite')
                ->add('direccion')
                ->add('instrumentoPago')
            ;
        }
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('contrato', null, array('Contrato al que Pertenece'))
            ->add('diasLimite')
            ->add('direccion')
            ->add('instrumentoPago')
        ;
    }
}
