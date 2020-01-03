<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class anexo1_contrato_arrendamiento_redesAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('cuotaConductoSoterrado', null, array('label'=>'Cuota por Conducto Soterrado'))
            ->add('coutaBituboEnterrado', null, array('label'=>'Cuota por Bitubo Enterrado'))
            ->add('coutaSoporteRedAerea', null, array('label'=>'Cuota por Soporte de Red Aérea'))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('cuotaConductoSoterrado', null, array('label'=>'Cuota por Conducto Soterrado'))
            ->add('coutaBituboEnterrado', null, array('label'=>'Cuota por Bitubo Enterrado'))
            ->add('coutaSoporteRedAerea', null, array('label'=>'Cuota por Soporte de Red Aérea'))
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
                ->add('contrato',null, array('label'=>'Contrato al que pertenece')) 
                ->add('cuotaConductoSoterrado', null, array('label'=>'Cuota por Conducto Soterrado'))
                ->add('coutaBituboEnterrado', null, array('label'=>'Cuota por Bitubo Enterrado'))
                ->add('coutaSoporteRedAerea', null, array('label'=>'Cuota por Soporte de Red Aérea'))
            ;            
        }
        else{
            $formMapper
                ->add('cuotaConductoSoterrado', null, array('label'=>'Cuota por Conducto Soterrado'))
                ->add('coutaBituboEnterrado', null, array('label'=>'Cuota por Bitubo Enterrado'))
                ->add('coutaSoporteRedAerea', null, array('label'=>'Cuota por Soporte de Red Aérea'))
             ;
        }
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('cuotaConductoSoterrado', null, array('label'=>'Cuota por Conducto Soterrado'))
            ->add('coutaBituboEnterrado', null, array('label'=>'Cuota por Bitubo Enterrado'))
            ->add('coutaSoporteRedAerea', null, array('label'=>'Cuota por Soporte de Red Aérea'))
        ;
    }
}
