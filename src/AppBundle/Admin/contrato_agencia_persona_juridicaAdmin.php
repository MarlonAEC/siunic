<?php

namespace AppBundle\Admin;

use Sonata\CoreBundle\Form\Type\DatePickerType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\Type\ModelAutocompleteType;
use Sonata\AdminBundle\Form\Type\AdminType;
use Sonata\AdminBundle\Form\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Sonata\AdminBundle\Route\RouteCollection;

class contrato_agencia_persona_juridicaAdmin extends AbstractAdmin
{
protected function configureRoutes(RouteCollection $collection){
    $collection->add('myCustom'); // Action gets added automatically 
    $collection->add('imprimir', $this->getRouterIdParameter().'/view');
}

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('numeroContrato')
            ->add('empresa')
            ->add('momentoPago')
            ->add('fechaFirma')
            ->add('lugarFirma')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        unset($this->listModes['mosaic']);
        
        $listMapper
            ->remove('batch')
            ->add('id', null, array(
                'label' => 'No.'
            ))
            ->add('empresa')
            ->add('numeroContrato')
            ->add('momentoPago')
            ->add('fechaFirma')
            ->add('lugarFirma')
            ->add('imprimir','string',array('template'=>':Reportes:Imprimir.html.twig'))
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
        /* @var $object Orden */
        
        $formMapper
            //->add('id')
            ->with('Datos del Contrato', array('class' => 'col-md-12'))
            ->add('numeroContrato', null, array(
                'label' => 'Número de Contrato'
            ))
            ->add('empresa', null, array(
                'label' => 'Empresa'
            ))
            ->add('momentoPago', null, array(
                'label' => 'Momento de pago'
            ))
            ->add('fechaFirma', 'sonata_type_date_picker', array(
                'label' => 'Fecha de Firma',
                'format' => 'dd/MM/yyyy',
                'required' => false
            ))
            ->add('lugarFirma', null, array(
                'label' => 'Lugar de Firma'
            ))
            ->end();
        
        $formMapper
                ->add(
                    
                    $formMapper->create('anexo3', 'form', array(
                       'label' => "Condiciones generales para la comercialización de tarjetas prepagadas.",
                        'by_reference' => true,
                        'data_class' => "AppBundle\\Entity\\anexo3_contrato_agencia"))
                        ->add('nOTelefBloqueo', null, array(
                            'label' => 'Número de telefono de bloqueo'
                        ))
                        ->add('nOTelefAsistenciaUsuarios', null, array(
                            'label' => 'Número de telefono de asistencia a Usuarios'
                        ))
                )         
          ->end();
        $formMapper
             ->with('Anexo: Puntos de comercialización destinados a la atención del agente. 
               ', array('class' => 'col-md-12'))
             ->add('anexo4', 'sonata_type_collection', array(
                'label' => false,
                'disabled' => $object->getId(),
                "by_reference" => false,
                'btn_add' => $object->getId() ? false : 'link_add',
                'type_options' => array(
                    'delete' => !$object->getId(),
                )
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ))
          ->end();
        $formMapper
             ->with('Datos de las Cuentas Bancarias de ETECSA.', array('class' => 'col-md-12'))
             ->add('datosCuentasBancarias', 'sonata_type_collection', array(
               'label' => false,
                'disabled' => $object->getId(),
                "by_reference" => false,
                'btn_add' => $object->getId() ? false : 'link_add',
                'type_options' => array(
                    'delete' => !$object->getId(),
                )
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ))
          ->end();
        $formMapper
             ->with('Anexo: Puntos de comercialización del agente. ', array('class' => 'col-md-12'))
             ->add('anexo5', 'sonata_type_collection', array(
               'label' => false,
                'disabled' => $object->getId(),
                "by_reference" => false,
                'btn_add' => $object->getId() ? false : 'link_add',
                'type_options' => array(
                    'delete' => !$object->getId(),
                )
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ))
          ->end();
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('numeroContrato')
            ->add('empresa')
            ->add('momentoPago')
            ->add('fechaFirma')
            ->add('lugarFirma')
            ->add('anexo3')
            ->add('anexo4')
            ->add('anexo5')
        ;
    }
    
     /**
     * @param contrato_areas_internet $object
     */
    public function prePersist($object)
    {
        parent::prePersist($object);
        $em = $this->getConfigurationPool()->getContainer()->get('doctrine.orm.entity_manager');
        
        /* @var $a3 anexo3_contrato_agencia */
        $a3 = $object->getAnexo3();
        $a3->setContrato($object); 
        foreach ($object->getAnexo4() as $a4) /* @var $a4 anexo4_contrato_agencia */ {
            $a4->setContrato($object);
        }
        foreach ($object->getDatosCuentasBancarias() as $dc) /* @var $dc datos_cuentas_bancarias_etecsa */ {
            $dc->setContrato($object);
        }
        foreach ($object->getAnexo5() as $a5) /* @var $a5 anexo5_contrato_agencia */ {
            $a5->setContrato($object);
        }
    }
    
    /**
     * @param contrato_agencia_persona_juridica $object
     */
    public function preUpdate($object)
    {
        parent::preUpdate($object);
        $em = $this->getConfigurationPool()->getContainer()->get('doctrine.orm.entity_manager');
        
        foreach ($object->getAnexo4() as $a4) /* @var $a4 anexo4_contrato_agencia */ {
            $a4->setContrato($object);
        }
        foreach ($object->getDatosCuentasBancarias() as $dc) /* @var $dc datos_cuentas_bancarias_etecsa */ {
            $dc->setContrato($object);
        }
        foreach ($object->getAnexo5() as $a5) /* @var $a5 anexo5_contrato_agencia */ {
            $a5->setContrato($object);
        }
    }
    
    /**
     * @param contrato_agencia_persona_juridica $object
     */
    public function postPersist($object)
    {
        parent::postPersist($object);
        $em = $this->getConfigurationPool()->getContainer()->get('doctrine.orm.entity_manager');
    }
    
    /**
     * @param contrato_agencia_persona_juridica $object
     */
    public function postUpdate($object)
    {
        parent::postUpdate($object);

        $em = $this->getConfigurationPool()->getContainer()->get('doctrine.orm.entity_manager');

    }

 
}
