<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class contrato_areas_internetAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('numeroContrato')
            ->add('empresa', null, array(
                'label' => 'Empresa'
            ))
            ->add('diasParaEfectuarPago')
            ->add('fechaFirma')
            ->add('lugarFirma')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', null, array('label'=> 'No.'))
            ->add('numeroContrato')
            ->add('empresa', null, array(
                'label' => 'Empresa'
            ))
            ->add('diasParaEfectuarPago')
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
            ->add('empresa', null, array(
                'label' => 'Empresa'
            ))
            ->add('diasParaEfectuarPago')
            ->add('fechaFirma', 'sonata_type_date_picker', array(
                'label' => 'Fecha de Firma',
                'format' => 'dd/MM/yyyy',
                'required' => false
            ))
            ->add('lugarFirma')
        ->end();
        $formMapper
            ->with('Anexo: Tarifas y Distribución de Ingresos.
               ', array('class' => 'col-md-12'))
            ->add(                    
                    $formMapper->create('anexo1', 'form', array(
                       'label' => false,
                        'by_reference' => true,
                        'data_class' => "AppBundle\\Entity\\anexo1_contrato_areas_internet"))
                        ->add('precioTreintaMinutos')
                        ->add('precioSesentaMinutos')
                        ->add('cantUnDiaVentServ', null, array('label' => 'Cantidad de Tarjetas de un día'))
                        ->add('cantDosDiasVentServ', null, array('label' => 'Cantidad de Tarjetas de dos días'))
                        ->add('cantTresDiasVentServ', null, array('label' => 'Cantidad de Tarjetas de tres días'))
                        ->add('cantCincoDiasVentServ', null, array('label' => 'Cantidad de Tarjetas de cinco días'))
                        ->add('cantSieteDiasVentServ', null, array('label' => 'Cantidad de Tarjetas de siete días'))
                        ->add('cantUnYearVentServ', null, array('label' => 'Cantidad de Tarjetas de un Año'))
                        ->add('cantUnaHoraVentServ', null, array('label' => 'Cantidad de Tarjetas Temporales de una Hora'))
                        ->add('cantCincoHorasVentServ', null, array('label' => 'Cantidad de Tarjetas Temporales de cinco Horas'))
                        ->add('cantPlegableUnaHoraVentServ', null, array('label' => 'Cantidad de Tarjetas Plegables de una Hora'))
                        ->add('cantUnDiaIncluirServicio', null, array('label' => 'Cantidad de Tarjetas para incluir en el servicio de un día'))
                        ->add('cantDosDiasIncluirServicio', null, array('label' => 'Cantidad de Tarjetas para incluir en el servicio de dos días'))
                        ->add('cantTresDiasIncluirServicio', null, array('label' => 'Cantidad de Tarjetas para incluir en el servicio de tres días'))
                        ->add('cantCincoDiasIncluirServicio', null, array('label' => 'Cantidad de Tarjetas para incluir en el servicio de cinco días'))
                        ->add('cantSieteDiasIncluirServicio', null, array('label' => 'Cantidad de Tarjetas para incluir en el servicio de siete días'))
                        ->add('cantUnYearIncluirServicio', null, array('label' => 'Cantidad de Tarjetas para incluir en el servicio de un Año'))
                        ->add('cantUnaHoraIncluirServicio', null, array('label' => 'Cantidad de Tarjetas Temporales para incluir en el servicio de una hora'))
                        ->add('cantCincoHorasIncluirServicio', null, array('label' => 'Cantidad de Tarjetas Temporales para incluir en el servicio de cinco horas'))
                        ->add('restriccionNavegacion')
                )
        ->end();
        $formMapper
                ->with('Anexo: Aportes de las Partes
               ', array('class' => 'col-md-12'))
                ->add(                    
                    $formMapper->create('anexo2', 'form', array(
                       'label' => false,
                        'by_reference' => true,
                        'data_class' => "AppBundle\\Entity\\anexo2_contrato_areas_internet"))
                        ->add('anchoBandaAreasEntidad', null, array('label'=>'Ancho de banda en areas de la Entidad'))
                        ->add('anchoBandaCibercafes', null, array('label'=>'Ancho de Banda en Cibercafés'))
                        ->add('anchoBandaVentaServicio', null, array('label'=>'Ancho de Banda para la Venta del Servicio'))
                )
          ->end();
        $formMapper
                ->with('Anexo: Punto de Comercialización 
               ', array('class' => 'col-md-12'))
                ->add(
                    $formMapper->create('anexo5', 'form', array(
                       'label' => false,
                        'by_reference' => true,
                        'data_class' => "AppBundle\\Entity\\anexo5_contrato_areas_internet"))
                        ->add('unidadComercialDesignada')
                        ->add('direccion',null, array('label'=>'Dirección'))
                )
        ->end();
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id',null, array('label'=>'No.'))
            ->add('numeroContrato')
            ->add('empresa', null, array(
                'label' => 'Empresa'
            ))
            ->add('diasParaEfectuarPago')
            ->add('fechaFirma')
            ->add('lugarFirma')
        ;
    }
     /**
     * @param contrato_areas_internet $object
     */
    public function prePersist($object)
    {
        parent::prePersist($object);
        
        /* @var $a1 anexo1_contrato_areas_internet */
        $a1 = $object->getAnexo1();
        $a1->setContrato($object);
        /* @var $a2 anexo2_contrato_areas_internet */
        $a2 = $object->getAnexo2();
        $a2->setContrato($object);
        /* @var $a5 anexo5_contrato_areas_internet */
        $a5 = $object->getAnexo5();
        $a5->setContrato($object);
    }
}
