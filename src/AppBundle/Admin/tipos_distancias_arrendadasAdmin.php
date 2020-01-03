<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class tipos_distancias_arrendadasAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('contrato',null, array('label'=>'Contrato al que Pertenece')) 
            ->add('desde')
            ->add('hasta')
            ->add('distancia')
            ->add('tipoDistanciaArrendada')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id',null, array('No.'))
            ->add('contrato',null, array('label'=>'Contrato al que Pertenece'))
            ->add('tipoDistanciaArrendada')
            ->add('desde')
            ->add('hasta')
            ->add('distancia')
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
        $object = $this->getSubject();
        if($this->getRoot()->getClass() == get_class($this->getSubject())){
            $formMapper
                //->add('id')
                ->add('contrato',null, array('label'=>'Contrato al que Pertenece'))
                ->add('tipoDistanciaArrendada')
                ->add('desde')
                ->add('hasta')
                ->add('distancia')
            ;
        }
        else{
            $formMapper
                //->add('id')
                //->add('anexo2',null, array('label'=>'Anexo al que pertenece'))
                ->add('tipoDistanciaArrendada')
                ->add('desde')
                ->add('hasta')
                ->add('distancia')
            ;
        }
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id',null, array('No.'))
            ->add('contrato',null, array('label'=>'Contrato al que Pertenece'))
            ->add('tipoDistanciaArrendada')
            ->add('desde')
            ->add('hasta')
            ->add('distancia')
        ;
    }
}
