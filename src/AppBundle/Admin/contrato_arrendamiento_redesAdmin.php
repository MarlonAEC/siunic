<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\Type\AdminType;

class contrato_arrendamiento_redesAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('numeroContrato')
            ->add('fechaFirma')
            ->add('lugarFirma')
            ->add('anexo1')
            ->add('anexo2')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id',null, array('label'=>'No.'))
            ->add('numeroContrato')
            ->add('fechaFirma')
            ->add('lugarFirma')
            ->add('anexo1')
            ->add('anexo2')
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
        $formMapper
            //->add('id')
            ->add('empresa')
            ->add('numeroContrato')
            ->add('fechaFirma', 'sonata_type_date_picker', array(
                'label' => 'Fecha de Firma',
                'format' => 'dd/MM/yyyy',
                'required' => false
            ))
            ->add('lugarFirma')
            ->end();
            $formMapper
                ->add(
                    
                    $formMapper->create('anexo1', 'form', array(
                       'label' => "Tarifas para el Arrendamiento de Redes.",
                        'by_reference' => true,
                        'data_class' => "AppBundle\\Entity\\anexo1_contrato_arrendamiento_redes"))
                        ->add('cuotaConductoSoterrado', null, array('label'=>'Cuota por Conducto Soterrado'))
                        ->add('coutaBituboEnterrado', null, array('label'=>'Cuota por Bitubo Enterrado'))
                        ->add('coutaSoporteRedAerea', null, array('label'=>'Cuota por Soporte de Red Aérea'))
                )         
          ->end();
          $formMapper
                ->add(
                    
                    $formMapper->create('anexo2', 'form', array(
                       'label' => "Datos de Costos Tramos de Redes Arrendados",
                        'by_reference' => true,
                        'data_class' => "AppBundle\\Entity\\anexo2_contrato_arrendamiento_redes"))
                        ->add('provincia')
                        ->add('totalKMArrendadoSoterrado', null, array('label'=>'Total de Km Arrendados Soterrado'))
                        ->add('totalKMArrendadoAereo', null, array('label'=>'Total de Km Arrendado Aereo'))
                        ->add('totalKMArrendadoBitubos', null, array('label'=>'Total de Km Arrendados Bitubos'))
                        ->add('totalUSDPorSoterrado', null, array('label'=>'Total USD por Soterrado'))
                        ->add('totalUSDPorAereo', null, array('label'=>'Total USD (Aéreo)'))
                        ->add('totalUSDPorBitubos', null, array('label'=>'Total USD por (Bitubos)'))
                        ->add('uSDPorMesSoterrado', null, array('label'=>'USD por mes (Soterrado)'))
                        ->add('uSDPorMesAereo', null, array('label'=>'USD por mes (Aéreo)'))
                        ->add('uSDPorMesBitubos', null, array('label'=>'USD por mes (Bitubos)'))
                )         
          ->end();            
        $formMapper
           ->with(' Tramos Arrendados.', array('class' => 'col-md-12'))
            ->add('tiposDistancias', 'sonata_type_collection', array(
                   'label' => 'Distancias Arrendadas',
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
            ->add('numeroContrato')
            ->add('fechaFirma')
            ->add('lugarFirma')
        ;
    }
    
         /**
     * @param contrato_arrendamiento_redes $object
     */
    public function prePersist($object)
    {
        parent::prePersist($object);
        
        /* @var $a1 anexo1_contrato_arrendamiento_redes */
        $a1 = $object->getAnexo1();
        $a1->setContrato($object);
        /* @var $a2 anexo2_contrato_arrendamiento_redes */
        $a2 = $object->getAnexo2();
        $a2->setContrato($object);
        
        foreach ($object->getTiposDistancias() as $td) /* @var $td tipos_distancias_arrendadas */ {
            $td->setContrato($object);
        }
    }

}
