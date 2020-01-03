<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class anexo4_arrendamiento_espaciosAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('tipoTorreOMastil')
            ->add('fechaSolicitud')
            ->add('lugar')
            ->add('objetivos')
            ->add('spTierraOptimasCondiciones')
            ->add('spPararrayosConectadoTerra')
            ->add('spExistenciaCablesTierra')
            ->add('spBarrasConexionLineaTransmicion')
            ->add('spEstadoBarra')
            ->add('spExistenciaGroundingKits')
            ->add('spExistenciaProtectoresRF')
            ->add('spBarraTierraEntradaCables')
            ->add('otrasEspecificaciones')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('tipoTorreOMastil')
            ->add('fechaSolicitud')
            ->add('lugar')
            ->add('objetivos')
            ->add('spTierraOptimasCondiciones')
            ->add('spPararrayosConectadoTerra')
            ->add('spExistenciaCablesTierra')
            ->add('spBarrasConexionLineaTransmicion')
            ->add('spEstadoBarra')
            ->add('spExistenciaGroundingKits')
            ->add('spExistenciaProtectoresRF')
            ->add('spBarraTierraEntradaCables')
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
            ->add('tipoTorreOMastil')
            ->add('fechaSolicitud')
            ->add('lugar')
            ->add('objetivos')
            ->add('spTierraOptimasCondiciones')
            ->add('spPararrayosConectadoTerra')
            ->add('spExistenciaCablesTierra')
            ->add('spBarrasConexionLineaTransmicion')
            ->add('spEstadoBarra')
            ->add('spExistenciaGroundingKits')
            ->add('spExistenciaProtectoresRF')
            ->add('spBarraTierraEntradaCables')
            ->add('otrasEspecificaciones')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('tipoTorreOMastil')
            ->add('fechaSolicitud')
            ->add('lugar')
            ->add('objetivos')
            ->add('spTierraOptimasCondiciones')
            ->add('spPararrayosConectadoTerra')
            ->add('spExistenciaCablesTierra')
            ->add('spBarrasConexionLineaTransmicion')
            ->add('spEstadoBarra')
            ->add('spExistenciaGroundingKits')
            ->add('spExistenciaProtectoresRF')
            ->add('spBarraTierraEntradaCables')
            ->add('otrasEspecificaciones')
        ;
    }
}
