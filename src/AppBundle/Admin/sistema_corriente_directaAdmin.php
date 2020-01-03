<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class sistema_corriente_directaAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('marca')
            ->add('modelo')
            ->add('voltajeTrabajo')
            ->add('cantidadFases')
            ->add('cantidadRectificadores')
            ->add('capacidadRectificadores')
            ->add('configuracionRectificadores')
            ->add('cargaActual')
            ->add('cantidadBancosBaterias')
            ->add('capacidadBancoBaterias')
            ->add('tipoBaterias')
            ->add('estadoGeneralSistema')
            ->add('ubicacionBancoBaterias')
            ->add('existenciaPanelesDistribucion')
            ->add('existenciaBreakers')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('marca')
            ->add('modelo')
            ->add('voltajeTrabajo')
            ->add('cantidadFases')
            ->add('cantidadRectificadores')
            ->add('capacidadRectificadores')
            ->add('configuracionRectificadores')
            ->add('cargaActual')
            ->add('cantidadBancosBaterias')
            ->add('capacidadBancoBaterias')
            ->add('tipoBaterias')
            ->add('estadoGeneralSistema')
            ->add('ubicacionBancoBaterias')
            ->add('existenciaPanelesDistribucion')
            ->add('existenciaBreakers')
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
            ->add('marca')
            ->add('modelo')
            ->add('voltajeTrabajo')
            ->add('cantidadFases')
            ->add('cantidadRectificadores')
            ->add('capacidadRectificadores')
            ->add('configuracionRectificadores')
            ->add('cargaActual')
            ->add('cantidadBancosBaterias')
            ->add('capacidadBancoBaterias')
            ->add('tipoBaterias')
            ->add('estadoGeneralSistema')
            ->add('ubicacionBancoBaterias')
            ->add('existenciaPanelesDistribucion')
            ->add('existenciaBreakers')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('marca')
            ->add('modelo')
            ->add('voltajeTrabajo')
            ->add('cantidadFases')
            ->add('cantidadRectificadores')
            ->add('capacidadRectificadores')
            ->add('configuracionRectificadores')
            ->add('cargaActual')
            ->add('cantidadBancosBaterias')
            ->add('capacidadBancoBaterias')
            ->add('tipoBaterias')
            ->add('estadoGeneralSistema')
            ->add('ubicacionBancoBaterias')
            ->add('existenciaPanelesDistribucion')
            ->add('existenciaBreakers')
        ;
    }
}
