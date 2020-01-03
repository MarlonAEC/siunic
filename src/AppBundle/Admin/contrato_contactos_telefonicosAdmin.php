<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class contrato_contactos_telefonicosAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('empresa')
            ->add('numeroContrato')
            ->add('fechaFirma')
            ->add('lugarFirma')
            ->add('coutaMensual')
            ->add('cantidadLlamadas')
            ->add('precioLlamadasExtras')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('empresa')
            ->add('numeroContrato')
            ->add('fechaFirma')
            ->add('lugarFirma')
            ->add('coutaMensual')
            ->add('cantidadLlamadas')
            ->add('precioLlamadasExtras')
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
            ->add('empresa')
            ->add('numeroContrato')
            ->add('fechaFirma', 'sonata_type_date_picker', array(
                'label' => 'Fecha de Firma',
                'format' => 'dd/MM/yyyy',
                'required' => false
            ))
            ->add('lugarFirma')
            ->add('coutaMensual')
            ->add('cantidadLlamadas')
            ->add('precioLlamadasExtras')
            ->end();
            $formMapper
                ->add(                    
                    $formMapper->create('anexo1', 'form', array(
                       'label' => "Especificaciones del Servicio",
                        'by_reference' => true,
                        'data_class' => "AppBundle\\Entity\\anexo1_contrato_contactos_telefonicos"))
                        ->add('tiempoMedioRespuesta', null, array('label'=>'Tiempo Medio de Respuesta'))
                        ->add('porcentajeLlamadasContestadas', null, array('label'=>'Porcentaje de LLamadas Contestadas'))
                        ->add('posiciones', null, array('label'=>'Posiciones (equivalente de 24 Hrs)'))
                        ->add('cantLlamadasPorHora', null, array('label'=>'Cantidad de LLamadas por Hora'))
                        ->add('cantLlamadasPorDia', null, array('label'=>'Cantidad de LLamadas por Día'))
                )         
            ->end();
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('empresa')
            ->add('numeroContrato')
            ->add('fechaFirma')
            ->add('lugarFirma')
            ->add('coutaMensual')
            ->add('cantidadLlamadas')
            ->add('precioLlamadasExtras')
        ;
    }
    /**
     * @param contrato_contactos_telefonicos $object
     */
    public function prePersist($object) {
        parent::prePersist($object);
        
        /* @var $a1 anexo1_contrato_contactos_telefonicos */
        $a1 = $object->getAnexo1();
        $a1->setContrato($object); 
    }
}
