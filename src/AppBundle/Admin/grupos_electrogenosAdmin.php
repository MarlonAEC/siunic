<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class grupos_electrogenosAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('capacidad')
            ->add('marca')
            ->add('modelo')
            ->add('nomeroFases')
            ->add('estadoCargaActual')
            ->add('estadoTecnicoVisible')
            ->add('posibilidadIncluiBreakers')
            ->add('existenciaTanqueNodriza')
            ->add('capacidadTanqueNodriza')
            ->add('estadoTecnicoVisibleTnodriza')
            ->add('inclusionNuevoEquipoClimatizacion')
            ->add('capacidadEquipoClimatizacion')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('capacidad')
            ->add('marca')
            ->add('modelo')
            ->add('nomeroFases')
            ->add('estadoCargaActual')
            ->add('estadoTecnicoVisible')
            ->add('posibilidadIncluiBreakers')
            ->add('existenciaTanqueNodriza')
            ->add('capacidadTanqueNodriza')
            ->add('estadoTecnicoVisibleTnodriza')
            ->add('inclusionNuevoEquipoClimatizacion')
            ->add('capacidadEquipoClimatizacion')
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
            ->add('capacidad')
            ->add('marca')
            ->add('modelo')
            ->add('nomeroFases')
            ->add('estadoCargaActual')
            ->add('estadoTecnicoVisible')
            ->add('posibilidadIncluiBreakers')
            ->add('existenciaTanqueNodriza')
            ->add('capacidadTanqueNodriza')
            ->add('estadoTecnicoVisibleTnodriza')
            ->add('inclusionNuevoEquipoClimatizacion')
            ->add('capacidadEquipoClimatizacion')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('capacidad')
            ->add('marca')
            ->add('modelo')
            ->add('nomeroFases')
            ->add('estadoCargaActual')
            ->add('estadoTecnicoVisible')
            ->add('posibilidadIncluiBreakers')
            ->add('existenciaTanqueNodriza')
            ->add('capacidadTanqueNodriza')
            ->add('estadoTecnicoVisibleTnodriza')
            ->add('inclusionNuevoEquipoClimatizacion')
            ->add('capacidadEquipoClimatizacion')
        ;
    }
}
