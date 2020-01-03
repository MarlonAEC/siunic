<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class relacion_mastiles_a4Admin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('latitudMastil')
            ->add('longitudMastil')
            ->add('tipoMastil')
            ->add('alturaMastil')
            ->add('alturaVientos1erNivel')
            ->add('alturaVientos2doNivel')
            ->add('alturaVientos3erNivel')
            ->add('alturaVientos4toNivel')
            ->add('diametroCableTensor')
            ->add('distanciaAnclaje1')
            ->add('distanciaAnclaje2')
            ->add('distanciaAnclaje3')
            ->add('distanciaAnclaje4')
            ->add('dimensionAngularColumnaMastil')
            ->add('diametroTuboColumnaMastil')
            ->add('longitudTramoColumnaMastil')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('latitudMastil')
            ->add('longitudMastil')
            ->add('tipoMastil')
            ->add('alturaMastil')
            ->add('alturaVientos1erNivel')
            ->add('alturaVientos2doNivel')
            ->add('alturaVientos3erNivel')
            ->add('alturaVientos4toNivel')
            ->add('diametroCableTensor')
            ->add('distanciaAnclaje1')
            ->add('distanciaAnclaje2')
            ->add('distanciaAnclaje3')
            ->add('distanciaAnclaje4')
            ->add('dimensionAngularColumnaMastil')
            ->add('diametroTuboColumnaMastil')
            ->add('longitudTramoColumnaMastil')
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
            ->add('latitudMastil')
            ->add('longitudMastil')
            ->add('tipoMastil')
            ->add('alturaMastil')
            ->add('alturaVientos1erNivel')
            ->add('alturaVientos2doNivel')
            ->add('alturaVientos3erNivel')
            ->add('alturaVientos4toNivel')
            ->add('diametroCableTensor')
            ->add('distanciaAnclaje1')
            ->add('distanciaAnclaje2')
            ->add('distanciaAnclaje3')
            ->add('distanciaAnclaje4')
            ->add('dimensionAngularColumnaMastil')
            ->add('diametroTuboColumnaMastil')
            ->add('longitudTramoColumnaMastil')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('latitudMastil')
            ->add('longitudMastil')
            ->add('tipoMastil')
            ->add('alturaMastil')
            ->add('alturaVientos1erNivel')
            ->add('alturaVientos2doNivel')
            ->add('alturaVientos3erNivel')
            ->add('alturaVientos4toNivel')
            ->add('diametroCableTensor')
            ->add('distanciaAnclaje1')
            ->add('distanciaAnclaje2')
            ->add('distanciaAnclaje3')
            ->add('distanciaAnclaje4')
            ->add('dimensionAngularColumnaMastil')
            ->add('diametroTuboColumnaMastil')
            ->add('longitudTramoColumnaMastil')
        ;
    }
}
