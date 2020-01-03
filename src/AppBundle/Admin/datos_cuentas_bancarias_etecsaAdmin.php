<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class datos_cuentas_bancarias_etecsaAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('contrato')
            ->add('divisionTerritorial')
            ->add('banco')
            ->add('noCuenta')
            ->add('moneda')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        if($this->getRoot()->getClass() == get_class($this->getSubject())){ 
            $listMapper
                ->add('id', null, array(
                    'label' => 'No.'
                ))
                ->add('divisionTerritorial')
                ->add('banco')
                ->add('noCuenta')
                ->add('moneda')
                ->add('_action', null, [
                    'actions' => [
                        'show' => [],
                        'edit' => [],
                        'delete' => [],
                    ],
                ])
            ;            
        }
        else{
            $listMapper
                ->add('id', null, array(
                    'label' => 'No.'
                ))
                ->add('contrato', null, array('Contrato al que Pertenece'))
                ->add('divisionTerritorial')
                ->add('banco')
                ->add('noCuenta')
                ->add('moneda')
                ->add('_action', null, [
                    'actions' => [
                        'show' => [],
                        'edit' => [],
                        'delete' => [],
                    ],
                ])
            ;
        }
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        if($this->getRoot()->getClass() == get_class($this->getSubject())){ 
            $formMapper
                //->add('id')
                ->add('contrato', null, array('label'=>'Contrato al que Pertenece'))
                ->add('divisionTerritorial')
                ->add('banco')
                ->add('noCuenta', null, array(
                    'label'=> 'No. Cuenta'
                ))
                ->add('moneda')
            ;
        }
        else{
            $formMapper
                //->add('id')
                ->add('divisionTerritorial')
                ->add('banco')
                ->add('noCuenta', null, array(
                    'label'=> 'No. Cuenta'
                ))
                ->add('moneda')
            ;
        }
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array(
                'label' => 'No.'
            ))
            ->add('divisionTerritorial')
            ->add('banco')
            ->add('noCuenta')
            ->add('moneda')
        ;
    }
    
}
