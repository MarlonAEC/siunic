<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PersonasAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('empresa')
            ->add('nombre')
            ->add('cargo')
            ->add('telefono')
            ->add('correoElectronico')
            ->add('direccion')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('empresa')
            ->add('nombre')
            ->add('cargo')
            ->add('telefono')
            ->add('correoElectronico')
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
                ->add('empresa')
                ->add('nombre')
                ->add('cargo')
                ->add('telefono')
                ->add('correoElectronico')
                ->add('direccion')
            ;            
        }
        else{
            $formMapper
                //->add('id')
                //->add('empresa')
                ->add('nombre')
                ->add('cargo')
                ->add('telefono')
                ->add('correoElectronico')
                ->add('direccion')
            ; 
        }
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            //->add('empresa')
            ->add('nombre')
            ->add('cargo')
            ->add('telefono')
            ->add('correoElectronico')
            ->add('direccion')
        ;
    }
}
