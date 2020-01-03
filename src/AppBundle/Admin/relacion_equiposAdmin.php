<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class relacion_equiposAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('anchoEquipo')
            ->add('profundidadEquipo')
            ->add('altoEquipo')
            ->add('pesoEquipo')
            ->add('temperaturaTrabajo')
            ->add('entradaCablesEquipo')
            ->add('existenciaBarraConexionTierra')
            ->add('bastidorExistenteConexionTierra')
            ->add('existenciaPuntosTomaTierra')
            ->add('proyectoPor')
            ->add('ejecucionProyectoPor')
            ->add('tipoEnergia')
            ->add('voltajeAlimentacion')
            ->add('cantidadFases')
            ->add('consumoNominalEstimado')
            ->add('corrienteArranque')
            ->add('tipoDisipacion')
            ->add('corrienteConsumoMaximaCapacidad')
            ->add('dobleEntradaAlimentacion')
            ->add('existenciaBaterias')
            ->add('localizacionBaterias')
            ->add('dimensionBateriasAncho')
            ->add('dimensionBateriasProfundidad')
            ->add('dimensionBateriasAlto')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('anchoEquipo')
            ->add('profundidadEquipo')
            ->add('altoEquipo')
            ->add('pesoEquipo')
            ->add('temperaturaTrabajo')
            ->add('entradaCablesEquipo')
            ->add('existenciaBarraConexionTierra')
            ->add('bastidorExistenteConexionTierra')
            ->add('existenciaPuntosTomaTierra')
            ->add('proyectoPor')
            ->add('ejecucionProyectoPor')
            ->add('tipoEnergia')
            ->add('voltajeAlimentacion')
            ->add('cantidadFases')
            ->add('consumoNominalEstimado')
            ->add('corrienteArranque')
            ->add('tipoDisipacion')
            ->add('corrienteConsumoMaximaCapacidad')
            ->add('dobleEntradaAlimentacion')
            ->add('existenciaBaterias')
            ->add('localizacionBaterias')
            ->add('dimensionBateriasAncho')
            ->add('dimensionBateriasProfundidad')
            ->add('dimensionBateriasAlto')
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
            ->add('anchoEquipo')
            ->add('profundidadEquipo')
            ->add('altoEquipo')
            ->add('pesoEquipo')
            ->add('temperaturaTrabajo')
            ->add('entradaCablesEquipo')
            ->add('existenciaBarraConexionTierra')
            ->add('bastidorExistenteConexionTierra')
            ->add('existenciaPuntosTomaTierra')
            ->add('proyectoPor')
            ->add('ejecucionProyectoPor')
            ->add('tipoEnergia')
            ->add('voltajeAlimentacion')
            ->add('cantidadFases')
            ->add('consumoNominalEstimado')
            ->add('corrienteArranque')
            ->add('tipoDisipacion')
            ->add('corrienteConsumoMaximaCapacidad')
            ->add('dobleEntradaAlimentacion')
            ->add('existenciaBaterias')
            ->add('localizacionBaterias')
            ->add('dimensionBateriasAncho')
            ->add('dimensionBateriasProfundidad')
            ->add('dimensionBateriasAlto')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('anchoEquipo')
            ->add('profundidadEquipo')
            ->add('altoEquipo')
            ->add('pesoEquipo')
            ->add('temperaturaTrabajo')
            ->add('entradaCablesEquipo')
            ->add('existenciaBarraConexionTierra')
            ->add('bastidorExistenteConexionTierra')
            ->add('existenciaPuntosTomaTierra')
            ->add('proyectoPor')
            ->add('ejecucionProyectoPor')
            ->add('tipoEnergia')
            ->add('voltajeAlimentacion')
            ->add('cantidadFases')
            ->add('consumoNominalEstimado')
            ->add('corrienteArranque')
            ->add('tipoDisipacion')
            ->add('corrienteConsumoMaximaCapacidad')
            ->add('dobleEntradaAlimentacion')
            ->add('existenciaBaterias')
            ->add('localizacionBaterias')
            ->add('dimensionBateriasAncho')
            ->add('dimensionBateriasProfundidad')
            ->add('dimensionBateriasAlto')
        ;
    }
}
