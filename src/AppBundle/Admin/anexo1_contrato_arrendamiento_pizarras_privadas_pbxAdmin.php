<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class anexo1_contrato_arrendamiento_pizarras_privadas_pbxAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('cantidadTroncosAInstalar')
            ->add('cantidadExtensionesAInstalar')
            ->add('cantidadFlujos')
            ->add('tarifaMensualArrendamiento')
            ->add('tipoMoneda')
            ->add('tarifaPorTronco')
            ->add('tarifaPorExtensiones')
            ->add('valorTotalPorInstalacion')
            ->add('pizarra')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id',null, array('label'=>'No.'))
            ->add('cantidadTroncosAInstalar',null, array('label'=>'Cantidad de Troncos a Instalar'))
            ->add('cantidadExtensionesAInstalar',null, array('label'=>'Cantidad de Extensiones a Instalar'))
            ->add('cantidadFlujos',null, array('label'=>'Cantidad de Flujos'))
            ->add('tarifaMensualArrendamiento',null, array('label'=>'Tarifa Mensual Arrendamiento'))
            ->add('tipoMoneda')
            ->add('tarifaPorTronco',null, array('label'=>'Tarifa por troncos'))
            ->add('tarifaPorExtensiones',null, array('label'=>'Tarifa por Extensiones'))
            ->add('valorTotalPorInstalacion',null, array('label'=>'Valor Total por Instalacion'))
            ->add('pizarra')
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
                ->add('cantidadTroncosAInstalar',null, array('label'=>'Cantidad de Troncos a Instalar'))
                ->add('cantidadExtensionesAInstalar',null, array('label'=>'Cantidad de Extensiones a Instalar'))
                ->add('cantidadFlujos',null, array('label'=>'Cantidad de Flujos'))
                ->add('tarifaMensualArrendamiento',null, array('label'=>'Tarifa Mensual Arrendamiento'))
                ->add('tipoMoneda')
                ->add('tarifaPorTronco',null, array('label'=>'Tarifa por troncos'))
                ->add('tarifaPorExtensiones',null, array('label'=>'Tarifa por Extensiones'))
                ->add('valorTotalPorInstalacion',null, array('label'=>'Valor Total por Instalacion'))
                ->add('pizarra', 'entity', array(
                            'label' => 'Pizarra a Arrendar',
                            'class' => 'AppBundle:pizarra_pbx',
                            'query_builder' => function (\Doctrine\ORM\EntityRepository $er) {
                                $qb = $er->createQueryBuilder('a');
                                return $qb;
                            },
                            "multiple" => false,
                            "expanded" => false,
                            'required' => true,
                            )
                        )
            ;
        }
        else{
            $formMapper
                //->add('id')
                ->add('cantidadTroncosAInstalar',null, array('label'=>'Cantidad de Troncos a Instalar'))
                ->add('cantidadExtensionesAInstalar',null, array('label'=>'Cantidad de Extensiones a Instalar'))
                ->add('cantidadFlujos',null, array('label'=>'Cantidad de Flujos'))
                ->add('tarifaMensualArrendamiento',null, array('label'=>'Tarifa Mensual Arrendamiento'))
                ->add('tipoMoneda')
                ->add('tarifaPorTronco',null, array('label'=>'Tarifa por troncos'))
                ->add('tarifaPorExtensiones',null, array('label'=>'Tarifa por Extensiones'))
                ->add('valorTotalPorInstalacion',null, array('label'=>'Valor Total por Instalacion'))
                ->add('pizarra', 'entity', array(
                            'label' => 'Pizarra a Arrendar',
                            'class' => 'AppBundle:pizarra_pbx',
                            'query_builder' => function (\Doctrine\ORM\EntityRepository $er) {
                                $qb = $er->createQueryBuilder('a');
                                return $qb;
                            },
                            "multiple" => false,
                            "expanded" => false,
                            'required' => true,
                            )
                        )
            ;
        }
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('cantidadTroncosAInstalar',null, array('label'=>'Cantidad de Troncos a Instalar'))
            ->add('cantidadExtensionesAInstalar',null, array('label'=>'Cantidad de Extensiones a Instalar'))
            ->add('cantidadFlujos',null, array('label'=>'Cantidad de Flujos'))
            ->add('tarifaMensualArrendamiento',null, array('label'=>'Tarifa Mensual Arrendamiento'))
            ->add('tipoMoneda')
            ->add('tarifaPorTronco',null, array('label'=>'Tarifa por troncos'))
            ->add('tarifaPorExtensiones',null, array('label'=>'Tarifa por Extensiones'))
            ->add('valorTotalPorInstalacion',null, array('label'=>'Valor Total por Instalacion'))
            ->add('pizarra')
        ;
    }
}
