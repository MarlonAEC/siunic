<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class anexo1_contrato_areas_internetAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('precioTreintaMinutos')
            ->add('precioSesentaMinutos')
            ->add('cantUnDiaVentServ')
            ->add('cantDosDiasVentServ')
            ->add('cantTresDiasVentServ')
            ->add('cantCincoDiasVentServ')
            ->add('cantSieteDiasVentServ')
            ->add('cantUnYearVentServ')
            ->add('cantUnaHoraVentServ')
            ->add('cantCincoHorasVentServ')
            ->add('cantPlegableUnaHoraVentServ')
            ->add('cantUnDiaIncluirServicio')
            ->add('cantDosDiasIncluirServicio')
            ->add('cantTresDiasIncluirServicio')
            ->add('cantCincoDiasIncluirServicio')
            ->add('cantSieteDiasIncluirServicio')
            ->add('cantUnYearIncluirServicio')
            ->add('cantUnaHoraIncluirServicio')
            ->add('cantCincoHorasIncluirServicio')
            ->add('restriccionNavegacion')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('precioTreintaMinutos')
            ->add('precioSesentaMinutos')
            ->add('cantUnDiaVentServ')
            ->add('cantDosDiasVentServ')
            ->add('cantTresDiasVentServ')
            ->add('cantCincoDiasVentServ')
            ->add('cantSieteDiasVentServ')
            ->add('cantUnYearVentServ')
            ->add('cantUnaHoraVentServ')
            ->add('cantCincoHorasVentServ')
            ->add('cantPlegableUnaHoraVentServ')
            ->add('cantUnDiaIncluirServicio')
            ->add('cantDosDiasIncluirServicio')
            ->add('cantTresDiasIncluirServicio')
            ->add('cantCincoDiasIncluirServicio')
            ->add('cantSieteDiasIncluirServicio')
            ->add('cantUnYearIncluirServicio')
            ->add('cantUnaHoraIncluirServicio')
            ->add('cantCincoHorasIncluirServicio')
            ->add('restriccionNavegacion')
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
                ->add('contrato',null, array('label'=>'Contrato al que pertenece'))    
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
            ;            
        }
        else{
            $formMapper
                //->add('id')
                ->add('contrato',null, array('label'=>'Contrato al que pertenece'))    
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
            ;
        }
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array('label'=> 'No.'))
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
        ;
    }
}
