<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class sistemas_corriente_alternaAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('conexionSistemaInversorRectificador')
            ->add('conexionUPSOnline')
            ->add('conexionUPSStandar')
            ->add('conexionRedComercial')
            ->add('existenciaPanelDistribucion')
            ->add('existenciaBreakers')
            ->add('necesidadNuevoPanel')
            ->add('dimensionNuevoPanelAncho')
            ->add('dimensionNuevoPanelProfundidad')
            ->add('dimensionNuevoPanelAlto')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('conexionSistemaInversorRectificador')
            ->add('conexionUPSOnline')
            ->add('conexionUPSStandar')
            ->add('conexionRedComercial')
            ->add('existenciaPanelDistribucion')
            ->add('existenciaBreakers')
            ->add('necesidadNuevoPanel')
            ->add('dimensionNuevoPanelAncho')
            ->add('dimensionNuevoPanelProfundidad')
            ->add('dimensionNuevoPanelAlto')
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
            ->add('id')
            ->add('conexionSistemaInversorRectificador')
            ->add('conexionUPSOnline')
            ->add('conexionUPSStandar')
            ->add('conexionRedComercial')
            ->add('existenciaPanelDistribucion')
            ->add('existenciaBreakers')
            ->add('necesidadNuevoPanel')
            ->add('dimensionNuevoPanelAncho')
            ->add('dimensionNuevoPanelProfundidad')
            ->add('dimensionNuevoPanelAlto')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('conexionSistemaInversorRectificador')
            ->add('conexionUPSOnline')
            ->add('conexionUPSStandar')
            ->add('conexionRedComercial')
            ->add('existenciaPanelDistribucion')
            ->add('existenciaBreakers')
            ->add('necesidadNuevoPanel')
            ->add('dimensionNuevoPanelAncho')
            ->add('dimensionNuevoPanelProfundidad')
            ->add('dimensionNuevoPanelAlto')
        ;
    }
}
