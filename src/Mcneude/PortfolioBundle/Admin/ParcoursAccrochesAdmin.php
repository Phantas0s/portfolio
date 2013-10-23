<?php
namespace Mcneude\PortfolioBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ParcoursAccrochesAdmin extends Admin
{
    /**
     * Configuration du formulaire
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add( 'accroche_experiences', 'textarea', array( 'label' => 'Experiences', 'attr' => array( 'class' => 'tinymce' ) ) )
            ->add( 'accroche_etudes', 'textarea', array( 'label' => 'Etudes' ) )
            ->add( 'accroche_interets', 'textarea', array( 'label' => 'Intérets' ) )
            ->add( 'accroche_experiences_complementaires', 'textarea', array( 'label' => 'Experiences complémentaires' ) )
        ;
    }

    /**
     * Configuration des filtres
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add( 'accrocheExperiences' )
            ->add( 'accrocheEtudes' )
            ->add( 'accrocheInterets' )
            ->add( 'accrocheExperiencesComplementaires' )
        ;
    }

    /**
     * Configuration de la liste
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('accroche_experiences')
            ->add('accroche_etudes')
            ->add('accroche_interets')
            ->add('accroche_experiences_complementaires')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'view' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }
}