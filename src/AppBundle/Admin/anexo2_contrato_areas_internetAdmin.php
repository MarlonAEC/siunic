<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class anexo2_contrato_areas_internetAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('anchoBandaAreasEntidad', null, array('label'=>'Ancho de banda en areas de la Entidad'))
            ->add('anchoBandaCibercafes', null, array('label'=>'Ancho de Banda en Cibercafés'))
            ->add('anchoBandaVentaServicio', null, array('label'=>'Ancho de Banda para la Venta del Servicio'))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('anchoBandaAreasEntidad', null, array('label'=>'Ancho de banda en areas de la Entidad'))
            ->add('anchoBandaCibercafes', null, array('label'=>'Ancho de Banda en Cibercafés'))
            ->add('anchoBandaVentaServicio', null, array('label'=>'Ancho de Banda para la Venta del Servicio'))
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
                ->add('anchoBandaAreasEntidad', null, array('label'=>'Ancho de banda en areas de la Entidad'))
                ->add('anchoBandaCibercafes', null, array('label'=>'Ancho de Banda en Cibercafés'))
                ->add('anchoBandaVentaServicio', null, array('label'=>'Ancho de Banda para la Venta del Servicio'))
            ;
        }
        else{
            $formMapper
                //->add('id')
                ->add('anchoBandaAreasEntidad', null, array('label'=>'Ancho de banda en areas de la Entidad'))
                ->add('anchoBandaCibercafes', null, array('label'=>'Ancho de Banda en Cibercafés'))
                ->add('anchoBandaVentaServicio', null, array('label'=>'Ancho de Banda para la Venta del Servicio'))
            ;
        }
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('anchoBandaAreasEntidad')
            ->add('anchoBandaCibercafes')
            ->add('anchoBandaVentaServicio')
        ;
    }
}
