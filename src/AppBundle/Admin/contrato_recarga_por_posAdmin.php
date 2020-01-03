<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class contrato_recarga_por_posAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('empresa')
            ->add('retribucionAEmplear')
            ->add('monedaPago')
            ->add('modalidadPago')
            ->add('fechaFirma')
            ->add('lugarFirma')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', null, array('label'=>'Contrato al que pertenece'))
            ->add('numeroContrato')
            ->add('empresa')
            ->add('retribucionAEmplear')
            ->add('monedaPago')
            ->add('modalidadPago')
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
            ->add('retribucionAEmplear')
            ->add('monedaPago')
            ->add('modalidadPago')
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
                       'label' => "Puntos de Venta del cliente",
                        'by_reference' => true,
                        'data_class' => "AppBundle\\Entity\\anexo2_contrato_recarga_por_pos"))
                        ->add('nombrePuntoVenta')
                        ->add('direccion')
                        ->add('telefono')
                        ->add('correo')
                )         
          ->end();
        $formMapper
                ->add(
                    
                    $formMapper->create('anexo4', 'form', array(
                       'label' => "Acta de Entrega",
                        'by_reference' => true,
                        'data_class' => "AppBundle\\Entity\\anexo4_contrato_recarga_por_pos"))
                        ->add('cantidadRollosAEntregar')
                )         
          ->end();
        $formMapper
             ->with('Equipamiento GSM. 
               ', array('class' => 'col-md-12'))
             ->add('equipamientoGSM', 'sonata_type_collection', array(
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
             ->with('Tarjetas SIM. 
               ', array('class' => 'col-md-12'))
             ->add('tarjetasSIM', 'sonata_type_collection', array(
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
            ->add('id', null, array('label'=>'Contrato al que pertenece'))
            ->add('numeroContrato')
            ->add('empresa')
            ->add('retribucionAEmplear')
            ->add('monedaPago')
            ->add('modalidadPago')
            ->add('fechaFirma')
            ->add('lugarFirma')
        ;
    }
    /**
     * @param contrato_recarga_por_pos $object Description
     */
    public function prePersist($object) {
        parent::prePersist($object);
        
        /* @var $a2 anexo2_contrato_recarga_por_pos */
        $a2 = $object->getAnexo2();
        $a2->setContrato($object);
        /* @var $a4 anexo4_contrato_recarga_por_pos */
        $a4 = $object->getAnexo4();
        $a4->setContrato($object);
        
        foreach ($object->getEquipamientoGSM() as $egsm) /* @var $egsm equipamiento_gsm */ {
            $egsm->setContrato($object);
        }
        foreach ($object->getTarjetasSIM() as $tsim) /* @var $tsim datos_cuentas_bancarias_etecsa */ {
            $tsim->setContrato($object);
        }
    }
}
