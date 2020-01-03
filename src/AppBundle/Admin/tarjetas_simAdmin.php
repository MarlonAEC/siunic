<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class tarjetas_simAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('contrato', null, array('label'=>'Contrato al que pertenece'))
            ->add('denominacion')
            ->add('noSerie')
            ->add('noServicioAsociado')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('contrato', null, array('label'=>'Contrato al que pertenece'))
            ->add('denominacion')
            ->add('noSerie')
            ->add('noServicioAsociado')
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
                ->add('denominacion')
                ->add('noSerie')
                ->add('noServicioAsociado')
            ;            
        }
        else{
            $formMapper
                ->add('denominacion')
                ->add('noSerie')
                ->add('noServicioAsociado')
                ->end();
        }
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('contrato', null, array('label'=>'Contrato al que Pertenece'))
            ->add('denominacion')
            ->add('noSerie')
            ->add('noServicioAsociado')
        ;
    }
}
