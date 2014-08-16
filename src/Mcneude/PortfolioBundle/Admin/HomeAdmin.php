<?php
namespace Mcneude\PortfolioBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class HomeAdmin extends Admin
{
    /**
     * Configuration du formulaire
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('translations', 'a2lix_translations', array(
                'by_reference' => false,
                'fields' => array(
                    'accroche' => array(
                        'label' => 'Accroche',
                        'attr' => array( 'class' => 'tinymce' )
                    ),
                    'apprendre' => array(
                        'label' => 'En ce moment je me documente sur...'
                    ),
                    'construire' => array(
                        'label' => 'En ce moment je travaille sur...',
                    )
                )
            ) )

            ->add( 'titre', 'text', array( 'label' => 'URL de l\'image : /bundles/portfolio/images/content/home' ) )
            ->add( 'accroche', 'textarea', array( 'label' => 'Accroche', 'attr' => array( 'class' => 'tinymce' ) ) )
            ->add( 'apprendre', 'text', array( 'label' => 'En ce moment je me documente sur...' ) )
            ->add( 'construire', 'text', array( 'label' => 'En ce moment je travaille sur...' ) )
            ->add( 'urlImage', 'text', array( 'label' => 'URL de l\'image : /bundles/portfolio/images/content/home' ) )
        ;
    }

    /**
     * Configuration des filtres
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('titre')
            ->add('accroche')
            ->add('urlImage')
            ->add('apprendre')
            ->add('construire')
        ;
    }

    /**
     * Configuration de la liste
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('titre')
            ->add('accroche')
            ->add('urlImage')
            ->add('apprendre')
            ->add('construire')
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
