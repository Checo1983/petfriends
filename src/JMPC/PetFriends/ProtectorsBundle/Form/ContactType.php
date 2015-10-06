<?php


/******************************************************/
/*          Clase Formulario ContactType              */
/*               Entidad Contact                      */
/*                                                    */                                         
/******************************************************/

namespace JMPC\PetFriends\ProtectorsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('asunto', 'text', array(
                  'label' => 'Asunto',
                  'attr' => array(
                  'class' => 'form_contact_topic',
                  'placeholder' => 'Escriba el asunto')))
            ->add('nombre', 'text', array(
                  'label' => 'Nombre completo',
                  'attr' => array(
                  'class' => 'form_contact_name',
                  'placeholder' => 'Escriba su nombre')))
            ->add('email', 'text', array(
                  'label' => 'Email de contacto',
                  'attr' => array(
                  'class' => 'form_contact_email',
                  'placeholder' => 'Escriba su email')))
            ->add('mensaje', 'textarea', array(
                  'label' => 'Mensaje',
                  'attr' => array(
                  'class' => 'form_contact_message',
                  'placeholder' => 'Escriba su mensaje aqui...')))
            //->add('creado','date')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'JMPC\PetFriends\ProtectorsBundle\Entity\Contact'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'jmpc_petfriends_protectorsbundle_contact';
    }
}
