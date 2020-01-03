<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class anexo5_contrato_agenciaAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('contrato', null, array(
                'label' => 'Contrato al que pertenece'
            ))
            ->add('provincia', null, array(
                'label' => 'Provincia'
            ))
            ->add('municipio', null, array(
                'label' => 'Municipio'
            ))
            ->add('puntoVenta', null, array(
                'label' => 'Punto de venta'
            ))
            ->add('direccion', null, array(
                'label' => 'Dirección'
            ))
            ->add('telefonoContacto', null, array(
                'label' => 'Teléfono de Contacto'
            ))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', null, array(
                'label' => 'No.'
            ))
            ->add('contrato', null, array(
                'label' => 'Contrato al que pertenece'
            ))
            ->add('provincia', null, array(
                'label' => 'Provincia'
            ))
            ->add('municipio', null, array(
                'label' => 'Municipio'
            ))
            ->add('puntoVenta', null, array(
                'label' => 'Punto de venta'
            ))
            ->add('direccion', null, array(
                'label' => 'Dirección'
            ))
            ->add('telefonoContacto', null, array(
                'label' => 'Teléfono de Contacto'
            ))
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
                ->add('contrato', null, array(
                    'label' => 'Contrato al que pertenece'
                ))
                ->add('provincia', null, array(
                    'label' => 'Provincia'
                ))
                ->add('municipio', null, array(
                    'label' => 'Municipio'
                ))
                ->add('puntoVenta', null, array(
                    'label' => 'Punto de venta'
                ))
                ->add('direccion', null, array(
                    'label' => 'Dirección'
                ))
                ->add('telefonoContacto', null, array(
                    'label' => 'Teléfono de Contacto'
                ))
            ;            
        }
        else{
            $formMapper
                //->add('id')
                //->add('contrato', null, array(
                  //  'label' => 'Contrato al que pertenece'
                //))
                ->add('provincia', null, array(
                    'label' => 'Provincia'
                ))
                ->add('municipio', null, array(
                    'label' => 'Municipio'
                ))
                ->add('puntoVenta', null, array(
                    'label' => 'Punto de venta'
                ))
                ->add('direccion', null, array(
                    'label' => 'Dirección'
                ))
                ->add('telefonoContacto', null, array(
                    'label' => 'Teléfono de Contacto'
                ))
            ;  
        }
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array (
                'label' => 'No.'
            ))
            ->add('contrato', null, array(
                'label' => 'Contrato al que pertenece'
            ))
            ->add('provincia', null, array(
                'label' => 'Provincia'
            ))
            ->add('municipio', null, array(
                'label' => 'Municipio'
            ))
            ->add('puntoVenta', null, array(
                'label' => 'Punto de venta'
            ))
            ->add('direccion', null, array(
                'label' => 'Dirección'
            ))
            ->add('telefonoContacto', null, array(
                'label' => 'Teléfono de Contacto'
            ))
        ;
    }
}
