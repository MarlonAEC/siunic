<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class anexo1_contrato_contactos_telefonicosAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('tiempoMedioRespuesta', null, array('label'=>'Tiempo Medio de Respuesta'))
            ->add('porcentajeLlamadasContestadas', null, array('label'=>'Porcentaje de LLamadas Contestadas'))
            ->add('posiciones', null, array('label'=>'Posiciones (equivalente de 24 Hrs)'))
            ->add('cantLlamadasPorHora', null, array('label'=>'Cantidad de LLamadas por Hora'))
            ->add('cantLlamadasPorDia', null, array('label'=>'Cantidad de LLamadas por Día'))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('tiempoMedioRespuesta', null, array('label'=>'Tiempo Medio de Respuesta'))
            ->add('porcentajeLlamadasContestadas', null, array('label'=>'Porcentaje de LLamadas Contestadas'))
            ->add('posiciones', null, array('label'=>'Posiciones (equivalente de 24 Hrs)'))
            ->add('cantLlamadasPorHora', null, array('label'=>'Cantidad de LLamadas por Hora'))
            ->add('cantLlamadasPorDia', null, array('label'=>'Cantidad de LLamadas por Día'))
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
                ->add('contrato', null, array('label'=>'Contrato al que pertenece'))
                ->add('tiempoMedioRespuesta', null, array('label'=>'Tiempo Medio de Respuesta'))
                ->add('porcentajeLlamadasContestadas', null, array('label'=>'Porcentaje de LLamadas Contestadas'))
                ->add('posiciones', null, array('label'=>'Posiciones (equivalente de 24 Hrs)'))
                ->add('cantLlamadasPorHora', null, array('label'=>'Cantidad de LLamadas por Hora'))
                ->add('cantLlamadasPorDia', null, array('label'=>'Cantidad de LLamadas por Día'))
            ;            
        }
        else{
            $formMapper
                ->add('tiempoMedioRespuesta', null, array('label'=>'Tiempo Medio de Respuesta'))
                ->add('porcentajeLlamadasContestadas', null, array('label'=>'Porcentaje de LLamadas Contestadas'))
                ->add('posiciones', null, array('label'=>'Posiciones (equivalente de 24 Hrs)'))
                ->add('cantLlamadasPorHora', null, array('label'=>'Cantidad de LLamadas por Hora'))
                ->add('cantLlamadasPorDia', null, array('label'=>'Cantidad de LLamadas por Día'))
            ;
        }
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('tiempoMedioRespuesta', null, array('label'=>'Tiempo Medio de Respuesta'))
            ->add('porcentajeLlamadasContestadas', null, array('label'=>'Porcentaje de LLamadas Contestadas'))
            ->add('posiciones', null, array('label'=>'Posiciones (equivalente de 24 Hrs)'))
            ->add('cantLlamadasPorHora', null, array('label'=>'Cantidad de LLamadas por Hora'))
            ->add('cantLlamadasPorDia', null, array('label'=>'Cantidad de LLamadas por Día'))
        ;
    }
}
