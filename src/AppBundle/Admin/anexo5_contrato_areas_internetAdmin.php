<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class anexo5_contrato_areas_internetAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('unidadComercialDesignada')
            ->add('direccion')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('unidadComercialDesignada')
            ->add('direccion')
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
                ->add('unidadComercialDesignada')
                ->add('direccion')
            ;            
        }
        else{
            $formMapper
                //->add('id')
                ->add('unidadComercialDesignada')
                ->add('direccion')
            ;
        }
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id',null, array('label'=>'No.'))
            ->add('unidadComercialDesignada')
            ->add('direccion')
        ;
    }
}
