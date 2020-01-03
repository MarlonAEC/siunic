<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class contrato_instalacion_pizarra_pbxAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('numeroContrato')
            ->add('direccionInstalacion')
            ->add('fechaFirma')
            ->add('lugarFirma')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('numeroContrato')
            ->add('direccionInstalacion')
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
            ->add('direccionInstalacion')
            ->add('fechaFirma', 'sonata_type_date_picker', array(
                'label' => 'Fecha de Firma',
                'format' => 'dd/MM/yyyy',
                'required' => false
            ))
            ->add('lugarFirma')
        ;
        $formMapper
            ->add(                    
                $formMapper->create('anexo2', 'form', array(
                   'label' => 'Equipos Contratado por el cliente para su Instalación',
                    'by_reference' => true,
                    'data_class' => "AppBundle\\Entity\\anexo2_contrato_instalacion_pizarra_pbx"))
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
            )         
          ->end();
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('empresa', null, array('label'=>'Empresa'))
            ->add('numeroContrato')
            ->add('direccionInstalacion')
            ->add('fechaFirma')
            ->add('lugarFirma')
        ;
    }
    
    /**
     * @param contrato_instalacion_pizarra_pbx $object Description
     */
    public function prePersist($object) {
        parent::prePersist($object);
        /* @var $a1 anexo1_contrato_agencia */
        $a1 = $object->getAnexo2();
        $a1->setContrato($object);
    }
}
