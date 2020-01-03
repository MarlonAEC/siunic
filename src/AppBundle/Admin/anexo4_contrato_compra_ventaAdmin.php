<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class anexo4_contrato_compra_ventaAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('contrato', null, array('label'=>'Contrato al que Pertenece'))
            ->add('municipio')
            ->add('unidadesComerciales')
            ->add('direccion')
            ->add('horarioAtencion')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id',null, array('label'=>'No.'))
            ->add('contrato', null, array('label'=>'Contrato al que Pertenece'))
            ->add('municipio')
            ->add('unidadesComerciales')
            ->add('direccion')
            ->add('horarioAtencion')
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
                ->add('contrato',null,array('label'=>'Contrato al que Pertenece'))
                ->add('municipio')
                ->add('unidadesComerciales')
                ->add('direccion')
                ->add('horarioAtencion')
            ;
        }
        else{
            $formMapper
                //->add('id')
                ->add('municipio')
                ->add('unidadesComerciales')
                ->add('direccion')
                ->add('horarioAtencion')
            ;
        }
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id',null, array('label'=>'No.'))
            ->add('contrato', null, array('label'=>'Contrato al que Pertenece'))
            ->add('municipio')
            ->add('unidadesComerciales')
            ->add('direccion')
            ->add('horarioAtencion')
        ;
    }
}
