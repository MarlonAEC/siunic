<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class contrato_arrendamiento_pizarra_privada_pbxAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('numeroContrato')
            ->add('fechaFirma')
            ->add('lugarFirma')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id',null, array('label'=>'No.'))
            ->add('empresa')
            ->add('numeroContrato')
            ->add('fechaFirma')
            ->add('lugarFirma')
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
        $formMapper
            //->add('id')
            ->add('numeroContrato')
            ->add('empresa')
            ->add('fechaFirma', 'sonata_type_date_picker', array(
                'label' => 'Fecha de Firma',
                'format' => 'dd/MM/yyyy',
                'required' => false
            ))
            ->add('lugarFirma')
            ->end();
            $formMapper
                ->with('Anexo: Especificaciones del Contrato', array('class' => 'col-md-12'))
                ->add(
                    $formMapper->create('anexo1', 'form', array(
                       'label' => false,
                        'by_reference' => true,
                        'data_class' => "AppBundle\\Entity\\anexo1_contrato_arrendamiento_pizarras_privadas_pbx"))
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
                )
            ->end();
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id',null, array('label'=>'No.'))
            ->add('empresa')
            ->add('numeroContrato')
            ->add('fechaFirma')
            ->add('lugarFirma')
        ;
    }
    /**
     * @param contrato_arrendamiento_pizarra_privada_pbx $object
     */
    public function prePersist($object)
    {
        parent::prePersist($object);
        
        /* @var $a1 anexo1_contrato_arrendamiento_pizarras_privadas_pbx */
        $a1 = $object->getAnexo1();
        $a1->setContrato($object);
        
    }
}
