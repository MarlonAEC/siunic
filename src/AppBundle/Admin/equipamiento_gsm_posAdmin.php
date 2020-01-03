<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class equipamiento_gsm_posAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('contrato', null, array('label'=>'Contrato al que pertenece'))
            ->add('descripcion')
            ->add('marca')
            ->add('noSerie')
            ->add('noActivo')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('contrato', null, array('label'=>'Contrato al que pertenece'))
            ->add('descripcion')
            ->add('marca')
            ->add('noSerie')
            ->add('noActivo')
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
                ->add('contrato', null, array('label'=>'Contrato al que pertenece'))
                ->add('descripcion')
                ->add('marca')
                ->add('noSerie')
                ->add('noActivo')
            ;            
        }
        else{
            $formMapper
                //->add('id')
                ->add('descripcion')
                ->add('marca')
                ->add('noSerie')
                ->add('noActivo')
            ;
        }
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('contrato', null, array('label'=>'Contrato al que pertenece'))
            ->add('descripcion')
            ->add('marca')
            ->add('noSerie')
            ->add('noActivo')
        ;
    }
}
