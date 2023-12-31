<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }


    public function configureFields(string $pageName): iterable
    {
         yield TextField::new('name');
         yield SlugField::new('slug')->setTargetFieldName('name');
        if ($pageName == 'index'){
            yield ImageField::new('illustrationUrl');
        }else{
            yield TextareaField::new('illustrationFile')->setFormType(VichImageType::class);
        }
        yield TextField::new('subtitle');
        yield TextareaField::new('description');
        yield BooleanField::new('isBests');
        yield MoneyField::new('price')->setCurrency('EUR');

        yield AssociationField::new('category');
    }

}
