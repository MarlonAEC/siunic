<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class anexo2_contrato_arrendamiento_redesAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('provincia')
            ->add('totalKMArrendadoSoterrado', null, array('label'=>'Total de Km Arrendados Soterrado'))
            ->add('totalKMArrendadoAereo', null, array('label'=>'Total de Km Arrendado Aereo'))
            ->add('totalKMArrendadoBitubos', null, array('label'=>'Total de Km Arrendados Bitubos'))
            ->add('totalUSDPorSoterrado', null, array('label'=>'Total USD por Soterrado'))
            ->add('totalUSDPorAereo', null, array('label'=>'Total USD (Aéreo)'))
            ->add('totalUSDPorBitubos', null, array('label'=>'Total USD por (Bitubos)'))
            ->add('uSDPorMesSoterrado', null, array('label'=>'USD por mes (Soterrado)'))
            ->add('uSDPorMesAereo', null, array('label'=>'USD por mes (Aéreo)'))
            ->add('uSDPorMesBitubos', null, array('label'=>'USD por mes (Bitubos)'))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('provincia')
            ->add('totalKMArrendadoSoterrado', null, array('label'=>'Total de Km Arrendados Soterrado'))
            ->add('totalKMArrendadoAereo', null, array('label'=>'Total de Km Arrendado Aereo'))
            ->add('totalKMArrendadoBitubos', null, array('label'=>'Total de Km Arrendados Bitubos'))
            ->add('totalUSDPorSoterrado', null, array('label'=>'Total USD por Soterrado'))
            ->add('totalUSDPorAereo', null, array('label'=>'Total USD (Aéreo)'))
            ->add('totalUSDPorBitubos', null, array('label'=>'Total USD por (Bitubos)'))
            ->add('uSDPorMesSoterrado', null, array('label'=>'USD por mes (Soterrado)'))
            ->add('uSDPorMesAereo', null, array('label'=>'USD por mes (Aéreo)'))
            ->add('uSDPorMesBitubos', null, array('label'=>'USD por mes (Bitubos)'))
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
        if($this->hasParentFieldDescription()){
            $object = $this->getParentFieldDescription()->getAdmin()->getSubject();
        }
        else{
            $object = $this->getSubject();
        }
        if($this->getRoot()->getClass() == get_class($this->getSubject())){
            $formMapper
                //->add('id')
                ->add('contrato', null, array('label'=>'Contrato al que pertenece'))
                ->add('provincia')
                ->add('tipoDistancia', 'sonata_type_collection', array(
                   'label' => 'Distancias Arrendadas',
                   "by_reference" => true,
                   'btn_add' => $object->getId() ? false : 'link_add',
                   'type_options' => array(
                       'delete' => !$object->getId(),
                   )
                ), array(
                   'edit' => 'inline',
                   'inline' => 'table',
                ))
                ->add('totalKMArrendadoSoterrado', null, array('label'=>'Total de Km Arrendados (Soterrado)'))
                ->add('totalKMArrendadoAereo', null, array('label'=>'Total de Km Arrendado (Aéreo)'))
                ->add('totalKMArrendadoBitubos', null, array('label'=>'Total de Km Arrendados (Bitubos)'))
                ->add('totalUSDPorSoterrado', null, array('label'=>'Total USD (Soterrado)'))
                ->add('totalUSDPorAereo', null, array('label'=>'Total USD (Aéreo)'))
                ->add('totalUSDPorBitubos', null, array('label'=>'Total USD por (Bitubos)'))
                ->add('uSDPorMesSoterrado', null, array('label'=>'USD por mes (Soterrado)'))
                ->add('uSDPorMesAereo', null, array('label'=>'USD por mes (Aéreo)'))
                ->add('uSDPorMesBitubos', null, array('label'=>'USD por mes (Bitubos)'))
            ;
        }
        else{
            $formMapper
                //->add('id')
                ->add('provincia')
                ->add('totalKMArrendadoSoterrado', null, array('label'=>'Total de Km Arrendados Soterrado'))
                ->add('totalKMArrendadoAereo', null, array('label'=>'Total de Km Arrendado Aereo'))
                ->add('totalKMArrendadoBitubos', null, array('label'=>'Total de Km Arrendados Bitubos'))
                ->add('totalUSDPorSoterrado', null, array('label'=>'Total USD por Soterrado'))
                ->add('totalUSDPorAereo', null, array('label'=>'Total USD (Aéreo)'))
                ->add('totalUSDPorBitubos', null, array('label'=>'Total USD por (Bitubos)'))
                ->add('uSDPorMesSoterrado', null, array('label'=>'USD por mes (Soterrado)'))
                ->add('uSDPorMesAereo', null, array('label'=>'USD por mes (Aéreo)'))
                ->add('uSDPorMesBitubos', null, array('label'=>'USD por mes (Bitubos)'))
            ;
        }
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array('label'=>'No.'))
            ->add('provincia')
            ->add('totalKMArrendadoSoterrado', null, array('label'=>'Total de Km Arrendados Soterrado'))
            ->add('totalKMArrendadoAereo', null, array('label'=>'Total de Km Arrendado Aereo'))
            ->add('totalKMArrendadoBitubos', null, array('label'=>'Total de Km Arrendados Bitubos'))
            ->add('totalUSDPorSoterrado', null, array('label'=>'Total USD por Soterrado'))
            ->add('totalUSDPorAereo', null, array('label'=>'Total USD (Aéreo)'))
            ->add('totalUSDPorBitubos', null, array('label'=>'Total USD por (Bitubos)'))
            ->add('uSDPorMesSoterrado', null, array('label'=>'USD por mes (Soterrado)'))
            ->add('uSDPorMesAereo', null, array('label'=>'USD por mes (Aéreo)'))
            ->add('uSDPorMesBitubos', null, array('label'=>'USD por mes (Bitubos)'))
        ;
    }
    /**
     * @param anexo2_contrato_arrendamiento_redes $object
     */
    public function prePersist($object)
    {
        if($this->hasParentFieldDescription()){
            $object = $this->getParentFieldDescription()->getAdmin()->getSubject();
        }
        else{
            $object = $this->getSubject();
        }
        parent::prePersist($object);
                
        foreach ($object->getTipoDistancia() as $da)/* @var $da tipos_distancias_arrendadas */ {
            $da->setAnexo2($object);
        }
    }
        /**
     * @param anexo2_contrato_arrendamiento_redes $object
     */
    public function preUpdate($object)
    {
        $this->setAnexo2($object->getAnexo2());        
        foreach ($object->getTipoDistancia() as $da)/* @var $da tipos_distancias_arrendadas */ {
            $da->setAnexo2($object);
        }
    }
}
