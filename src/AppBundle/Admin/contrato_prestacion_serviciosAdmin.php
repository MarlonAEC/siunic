<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class contrato_prestacion_serviciosAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('empresa')
            ->add('numeroContrato')
            ->add('videoconferencias')
            ->add('audioconferencias')
            ->add('conexionPizarraPbx')
            ->add('levantamientoRedesTecnicas')
            ->add('serviciosTecnicos')
            ->add('posventaReparacionEquipos')
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
            ->add('videoconferencias')
            ->add('audioconferencias')
            ->add('conexionPizarraPbx')
            ->add('levantamientoRedesTecnicas')
            ->add('serviciosTecnicos')
            ->add('posventaReparacionEquipos')
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
            //->add('id',null, array('label'=>'No.'))
            ->add('numeroContrato')
            ->add('empresa')            
            ->add('videoconferencias')
            ->add('audioconferencias')
            ->add('conexionPizarraPbx')
            ->add('levantamientoRedesTecnicas')
            ->add('serviciosTecnicos')
            ->add('posventaReparacionEquipos')
            ->add('fechaFirma', 'sonata_type_date_picker', array(
                'label' => 'Fecha de Firma',
                'format' => 'dd/MM/yyyy',
                'required' => false
            ))
            ->add('lugarFirma')
        ;
        $formMapper
                ->add(
                    
                    $formMapper->create('conexioCentrales', 'form', array(
                       'label' => "Conexión de pizarras privadas (pbx) a centrales telefónicas mediante superenlaces digitales de transmisión (flujos) de 2.0 mbts",
                        'by_reference' => true,
                        'data_class' => "AppBundle\\Entity\\anexocps_conexion_centrales_telefonicas"))
                        ->add('numeroFactura')
                )         
          ->end();
        $formMapper
             ->with('Servicios técnicos (también identificado como de servicios a terceros). 
               ', array('class' => 'col-md-12'))
             ->add('serviciosTerceros', 'sonata_type_collection', array(
                'label' => false,
                "by_reference" => false,
                'btn_add' => 'link_add',
                'type_options' => array(
                    'delete' => 'link_delete',
                )
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ))
          ->end();
        $formMapper
             ->with('Levantamiento de redes técnicas de comunicaciones y su supervisión. 
               ', array('class' => 'col-md-12'))
             ->add('levantamientoRedes', 'sonata_type_collection', array(
                'label' => false,
                "by_reference" => false,
                'btn_add' => 'link_add',
                'type_options' => array(
                    'delete' => 'link_delete',
                )
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ))
          ->end();
        $formMapper
             ->with('Tarifas de conexiones a centrales telefónicas. 
               ', array('class' => 'col-md-12'))
             ->add('tarifasConexion', 'sonata_type_collection', array(
                'label' => false,
                "by_reference" => false,
                'btn_add' => 'link_add',
                'type_options' => array(
                    'delete' => 'link_delete',
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
            ->add('id',null, array('label'=>'No.'))
            ->add('empresa')
            ->add('numeroContrato')
            ->add('videoconferencias')
            ->add('audioconferencias')
            ->add('conexionPizarraPbx')
            ->add('levantamientoRedesTecnicas')
            ->add('serviciosTecnicos')
            ->add('posventaReparacionEquipos')
            ->add('fechaFirma')
            ->add('lugarFirma')
        ;
    }
    /**
     * @param contrato_prestacion_servicios $object
     */
    public function prePersist($object)
    {
        parent::prePersist($object);
        
        /* @var $cc anexocps_conexion_centrales_telefonicas */
        $cc = $object->getConexioCentrales();
        $cc->setContrato($object); 
        foreach ($object->getServiciosTerceros() as $st) /* @var $st anexocps_servicios_terceros */ {
            $st->setContrato($object);
        }
        foreach ($object->getLevantamientoRedes() as $lr) /* @var $lr anexocps_levantamiento_redes_tecnicas */ {
            $lr->setContrato($object);
        }
        foreach ($object->getTarifasConexion() as $tc) /* @var $tc tarifas_conexion_pizarras */ {
            $tc->setContrato($object);
        }
    }
}
