<?php

declare(strict_types=1);

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\Type\ModelAutocompleteType;

final class BookAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('id')
            ->add('Label')
            ->add('Authors')
            ->add('Description')
            ->add('Cover')
            ->add('PubYear')
            ;
    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
            ->add('id')
            ->add('Label')
            ->add('Authors')
            ->add('Description')
            ->add('Cover')
            ->add('PubYear')
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }

    protected function configureFormFields(FormMapper $formMapper): void
    {
        $formMapper
            ->add('Label')
            ->add('Authors', ModelAutocompleteType::class, array('multiple' => true, 'by_reference' => true, 'property' => 'Name'))
            ->add('Description')
            ->add('Cover')
            ->add('PubYear')
            ;
    }

    protected function configureShowFields(ShowMapper $showMapper): void
    {
        $showMapper
            ->add('id')
            ->add('Label')
            ->add('Authors')
            ->add('Description')
            ->add('Cover')
            ->add('PubYear')
            ;
    }
}
