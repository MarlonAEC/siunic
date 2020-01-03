<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class relacion_antenas_a4Admin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('modelo')
            ->add('gananciaDB')
            ->add('bandaFrecuenciaMHz')
            ->add('potenciaRFEntregadaW')
            ->add('pesoAntenaKg')
            ->add('dimensionMarcoSoporte')
            ->add('instaladaColumnaA')
            ->add('instaladaColumnaB')
            ->add('instaladaColumnaC')
            ->add('instaladaColumnaD')
            ->add('tipoLineaTransmision')
            ->add('diametroParabola')
            ->add('largoEjeDireccionalidadOtras')
            ->add('proyectoPor')
            ->add('instalacionProyectoPor')
            ->add('otrasEspecificaciones')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('modelo')
            ->add('gananciaDB')
            ->add('bandaFrecuenciaMHz')
            ->add('potenciaRFEntregadaW')
            ->add('pesoAntenaKg')
            ->add('dimensionMarcoSoporte')
            ->add('instaladaColumnaA')
            ->add('instaladaColumnaB')
            ->add('instaladaColumnaC')
            ->add('instaladaColumnaD')
            ->add('tipoLineaTransmision')
            ->add('diametroParabola')
            ->add('largoEjeDireccionalidadOtras')
            ->add('proyectoPor')
            ->add('instalacionProyectoPor')
            ->add('otrasEspecificaciones')
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
            ->add('modelo')
            ->add('gananciaDB')
            ->add('bandaFrecuenciaMHz')
            ->add('potenciaRFEntregadaW')
            ->add('pesoAntenaKg')
            ->add('dimensionMarcoSoporte')
            ->add('instaladaColumnaA')
            ->add('instaladaColumnaB')
            ->add('instaladaColumnaC')
            ->add('instaladaColumnaD')
            ->add('tipoLineaTransmision')
            ->add('diametroParabola')
            ->add('largoEjeDireccionalidadOtras')
            ->add('proyectoPor')
            ->add('instalacionProyectoPor')
            ->add('otrasEspecificaciones')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('modelo')
            ->add('gananciaDB')
            ->add('bandaFrecuenciaMHz')
            ->add('potenciaRFEntregadaW')
            ->add('pesoAntenaKg')
            ->add('dimensionMarcoSoporte')
            ->add('instaladaColumnaA')
            ->add('instaladaColumnaB')
            ->add('instaladaColumnaC')
            ->add('instaladaColumnaD')
            ->add('tipoLineaTransmision')
            ->add('diametroParabola')
            ->add('largoEjeDireccionalidadOtras')
            ->add('proyectoPor')
            ->add('instalacionProyectoPor')
            ->add('otrasEspecificaciones')
        ;
    }
}
