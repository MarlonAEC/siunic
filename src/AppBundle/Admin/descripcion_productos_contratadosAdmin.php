<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class descripcion_productos_contratadosAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('descripcion')
            ->add('uM')
            ->add('cantidad')
            ->add('precio')
            ->add('precioTotal')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('descripcion')
            ->add('uM')
            ->add('cantidad')
            ->add('precio')
            ->add('precioTotal')
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
        $subject = $this->getSubject();
        if($this->getRoot()->getClass() == get_class($this->getSubject())){
            $formMapper
                //->add('id')
                ->add('contrato',null, array('label'=>'Contrato al que pertenece'))
                ->add('descripcion')
                ->add('uM')
                ->add('cantidad')
                ->add('precio')
                ->add('precioTotal')
            ;
        }
        else{
            $formMapper
                ->add('descripcion')
                ->add('uM')
                ->add('cantidad')
                ->add('precio')
                ->add('precioTotal')
            ;
        }
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('descripcion')
            ->add('uM')
            ->add('cantidad')
            ->add('precio')
            ->add('precioTotal')
        ;
    }
}
