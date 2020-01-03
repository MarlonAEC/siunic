<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class anexo2_contrato_instalacion_pizarra_pbxAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('pizarra')
            ->add('telefonosAsociados')
            ->add('licenciaSoftware')
            ->add('otrosAccesorios')
            ->add('tipoMoneda')
            ->add('cantidadTroncos')
            ->add('tarifaTroncos')
            ->add('cantidadExtensiones')
            ->add('tarifaExtensiones')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('contrato', null, array('Contrato al que pertenece'))
            ->add('telefonosAsociados')
            ->add('licenciaSoftware')
            ->add('otrosAccesorios')
            ->add('tipoMoneda')
            ->add('cantidadTroncos')
            ->add('tarifaTroncos')
            ->add('cantidadExtensiones')
            ->add('tarifaExtensiones')
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
                ->add('contrato', null, array('Contrato al que pertenece'))
                ->add('pizarra', 'entity', array(
                                'label' => 'Pizarra a Instalar',
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
                ->add('telefonosAsociados')
                ->add('licenciaSoftware')
                ->add('otrosAccesorios')
                ->add('tipoMoneda')
                ->add('cantidadTroncos')
                ->add('tarifaTroncos')
                ->add('cantidadExtensiones')
                ->add('tarifaExtensiones')
            ;                                
        }
        else{
            $formMapper
                ->add('contrato', null, array('Contrato al que pertenece'))
                ->add('pizarra', 'entity', array(
                                'label' => 'Pizarra a Instalar',
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
                ->add('telefonosAsociados')
                ->add('licenciaSoftware')
                ->add('otrosAccesorios')
                ->add('tipoMoneda')
                ->add('cantidadTroncos')
                ->add('tarifaTroncos')
                ->add('cantidadExtensiones')
                ->add('tarifaExtensiones')
            ;
        }
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('contrato', null, array('label'=>'Contrato al que pertenece'))
            ->add('pizarra')
            ->add('telefonosAsociados')
            ->add('licenciaSoftware')
            ->add('otrosAccesorios')
            ->add('tipoMoneda')
            ->add('cantidadTroncos')
            ->add('tarifaTroncos')
            ->add('cantidadExtensiones')
            ->add('tarifaExtensiones')
        ;
    }
}
