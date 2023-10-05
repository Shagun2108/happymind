<?php 

namespace App\Form;

 

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;

 

class TimezoneType extends AbstractType

{

    public function buildForm(FormBuilderInterface $builder, array $options): void

    {

        $builder

            ->add('timezone', ChoiceType::class, [

                'choices' => $this->getTimezoneChoices(),

                'label' => 'Timezone',

                'placeholder' => 'Select a timezone',

            ]);

    }

 

    public function configureOptions(OptionsResolver $resolver): void

    {

        $resolver->setDefaults([

            'data_class'=>null,

        ]);

    }

 

    private function getTimezoneChoices(): array

    {

        $timezones = \DateTimeZone::listIdentifiers();

        $choices = [];

 

        foreach ($timezones as $timezone) {

            $choices[$timezone] = $timezone;

        }

 

        return $choices;

    }

}

 