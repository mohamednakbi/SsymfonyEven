<?php

namespace App\Form;

use App\Entity\Evenement;

use App\Entity\GategorieEvenement;

use App\Repository\GategorieEvenementRepo;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EvenementType extends AbstractType
{
    private $GategorieEvenementRepo;
    public  function __construct(GategorieEvenementRepo $GategorieEvenementRepo)
    {
        $this->GategorieEvenementRepo = $GategorieEvenementRepo;
    }


    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('lieux')

            ->add('dateDebut', DateType::class, [
                'widget' => 'single_text',
                // this is actually the default format for single_text
                'format' => 'yyyy-MM-dd',
            ])


            ->add('dateFin', DateType::class, [
                'widget' => 'single_text',
                // this is actually the default format for single_text
                'format' => 'yyyy-MM-dd',
            ])





          //  ->add('gatName')


            ->add('gatName', ChoiceType::class, [
                'multiple' => false,
                'choices' =>
                    $this->GategorieEvenementRepo->createQueryBuilder('u')->select("(u.nom) as nom")->getQuery()->getResult(),
                'choice_label' => function ($choice) {
                    return $choice;
                },
            ])




            ->add('image', FileType::class, array('data_class' => null,'required' => false),  [
                'label' => true,
    
            ])   
        ;




        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
