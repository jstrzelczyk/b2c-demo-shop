<?php

namespace Pyz\Zed\Planet\Communication\Form;

use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormInterface;
use Generated\Shared\Transfer\PlanetTransfer;
use Spryker\Zed\Kernel\Communication\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;


class PlanetForm extends AbstractType
{
    /**

     * @return string

     */
    public function getBlockPrefix(): string
    {
        return 'planet';
    }
    /**
     * @param \Symfony\Component\OptionsResolver\OptionsResolver $resolver
     */

    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);
        $resolver->setDefaults([
            'data_class' => PlanetTransfer::class

        ]);
    }

    private const FIELD_NAME = 'name';

    private const FIELD_INTERESTING_FACT = 'interesting_fact';
    public const BUTTON_SUBMIT = "Submit";

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $this

            ->addNameField($builder)

            ->addInterestingFactField($builder)

            ->addSubmitButton($builder);

    }



    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     *
     * @return $this
     */

    private function addSubmitButton(FormBuilderInterface $builder): PlanetForm
    {

        $builder->add(static::BUTTON_SUBMIT, SubmitType::class);

        return $this;

    }

    private function addNameField(FormBuilderInterface $builder): PlanetForm
    {

        $builder->add(static::FIELD_NAME, TextType::class, [

            'constraints' => [

                new NotBlank(),
                new Length([

                    'min' => 3,
                    'max' => 50,

                    'minMessage' => 'Interesting fact minimum length is at least {{ limit }}',

                    'maxMessage' =>'Interesting fact maximum length is {{ limit }}'
                ])

            ]

        ]);



        return $this;

    }



    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     *
     * @return $this
     */

    private function addInterestingFactField(FormBuilderInterface $builder): PlanetForm
    {
        $builder->add(static::FIELD_INTERESTING_FACT, TextType::class, [

            'constraints' => [

                new NotBlank(),

                new Length([

                    'min' => 15,
                    'max' => 255,

                    'minMessage' => 'Interesting fact minimum length is at least {{ limit }}',

                     'maxMessage' =>'Interesting fact maximum length is {{ limit }}'
                ])

            ]

        ]);

        return $this;
    }




}
