<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class relacion_torres_a4Admin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('latitudTorre')
            ->add('longitudTorre')
            ->add('tipoTorre')
            ->add('alturaTorre')
            ->add('alturaVientos1erNivel')
            ->add('alturaVientos2doNivel')
            ->add('alturaVientos3erNivel')
            ->add('alturaVientos4toNivel')
            ->add('alturaAntitorsor')
            ->add('diametroCablesTensores')
            ->add('distanciaAnclaje1')
            ->add('distanciaAnclaje2')
            ->add('distanciaAnclaje3')
            ->add('distanciaAnclaje4')
            ->add('distanciaEntreColumnas')
            ->add('tipoSeccionTransversal')
            ->add('dimensionesAngularDiagonales')
            ->add('diametroTuboDiagonales')
            ->add('longitudDiagonales')
            ->add('columnaDondeSeInstalara')
            ->add('tranqueTorreDondeSeInstalara')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('latitudTorre')
            ->add('longitudTorre')
            ->add('tipoTorre')
            ->add('alturaTorre')
            ->add('alturaVientos1erNivel')
            ->add('alturaVientos2doNivel')
            ->add('alturaVientos3erNivel')
            ->add('alturaVientos4toNivel')
            ->add('alturaAntitorsor')
            ->add('diametroCablesTensores')
            ->add('distanciaAnclaje1')
            ->add('distanciaAnclaje2')
            ->add('distanciaAnclaje3')
            ->add('distanciaAnclaje4')
            ->add('distanciaEntreColumnas')
            ->add('tipoSeccionTransversal')
            ->add('dimensionesAngularDiagonales')
            ->add('diametroTuboDiagonales')
            ->add('longitudDiagonales')
            ->add('columnaDondeSeInstalara')
            ->add('tranqueTorreDondeSeInstalara')
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
            ->add('latitudTorre')
            ->add('longitudTorre')
            ->add('tipoTorre')
            ->add('alturaTorre')
            ->add('alturaVientos1erNivel')
            ->add('alturaVientos2doNivel')
            ->add('alturaVientos3erNivel')
            ->add('alturaVientos4toNivel')
            ->add('alturaAntitorsor')
            ->add('diametroCablesTensores')
            ->add('distanciaAnclaje1')
            ->add('distanciaAnclaje2')
            ->add('distanciaAnclaje3')
            ->add('distanciaAnclaje4')
            ->add('distanciaEntreColumnas')
            ->add('tipoSeccionTransversal')
            ->add('dimensionesAngularDiagonales')
            ->add('diametroTuboDiagonales')
            ->add('longitudDiagonales')
            ->add('columnaDondeSeInstalara')
            ->add('tranqueTorreDondeSeInstalara')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('latitudTorre')
            ->add('longitudTorre')
            ->add('tipoTorre')
            ->add('alturaTorre')
            ->add('alturaVientos1erNivel')
            ->add('alturaVientos2doNivel')
            ->add('alturaVientos3erNivel')
            ->add('alturaVientos4toNivel')
            ->add('alturaAntitorsor')
            ->add('diametroCablesTensores')
            ->add('distanciaAnclaje1')
            ->add('distanciaAnclaje2')
            ->add('distanciaAnclaje3')
            ->add('distanciaAnclaje4')
            ->add('distanciaEntreColumnas')
            ->add('tipoSeccionTransversal')
            ->add('dimensionesAngularDiagonales')
            ->add('diametroTuboDiagonales')
            ->add('longitudDiagonales')
            ->add('columnaDondeSeInstalara')
            ->add('tranqueTorreDondeSeInstalara')
        ;
    }
}
