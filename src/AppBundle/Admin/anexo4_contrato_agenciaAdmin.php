<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class anexo4_contrato_agenciaAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('municipio', null, array(
                'label' => 'Municipio'
            ))
            ->add('direccion', null, array(
                'label'=> 'Dirección'
            ))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', null, array(
                'label' => 'No.'
            ))
            ->add('contrato', null, array(
                'label' => 'Contrato al que pertenece'
            ))
            ->add('municipio', null, array(
                'label' => 'Municipio'
            ))
            ->add('direccion', null, array(
                'label'=> 'Dirección'
            ))
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ])
        ;
    }
    
    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $subject = $this->getSubject();
        if($this->getRoot()->getClass() == get_class($this->getSubject())){        
            $formMapper
                //->add('id', null, array(
                 //   'label' => 'No.'
                //))
                ->add('contrato', null, array(
                    'label' => 'Contrato al que pertenece'
                ))

                ->add('municipio', null, array(
                    'label' => 'Municipio'
                ))
                ->add('direccion', null, array(
                    'label'=> 'Dirección'
                ))
                ->end();
        }
        else {
            $formMapper
                //->add('id', null, array(
                 //   'label' => 'No.'
                //))
                //->add('contrato', null, array(
                   // 'label' => 'Contrato al que pertenece',
                //))
                ->add('municipio', null, array(
                    'label' => 'Municipio'
                ))
                ->add('direccion', null, array(
                    'label'=> 'Dirección'
                ))
                ->end();
        }
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array(
                'label' => 'No.'
            ))
            ->add('contrato', null, array(
                'label' => 'Contrato al que pertenece'
            ))
            ->add('municipio', null, array(
                'label' => 'Municipio'
            ))
            ->add('direccion', null, array(
                'label'=> 'Dirección'
            ))
        ;
    }
    
    public function preUpdate($object) {
        parent::preUpdate($object);
        
        $this->setContrato($object);
    }
    
    public function prePersist($object) {
        parent::prePersist($object);
    }
}
