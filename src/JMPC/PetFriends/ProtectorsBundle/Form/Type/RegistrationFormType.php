<?php

/***********************************************************/
/*       Clase Formulario RegistrationFormType             */
/*       Extiende de RegistrationFormType FOSUserBundle    */
/*       para añadir los campos necesarios                 */
/*                    Entidad User                         */
/*                                                         */                                         
/***********************************************************/

/**
 * Description of RegistrationFormType
 *
 * @author Checo
 */

namespace JMPC\PetFriends\ProtectorsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use Symfony\Component\Form\FormInterface;


class RegistrationFormType extends BaseType 
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // Aqui se añaden los nuevos campos necesarios 
        $builder->add('nombre', null, array(
                      'label' => 'Nombre completo:', 'attr' => array(
                      'name' => 'rg_nombre',
                      'placeholder' => 'Nombre')))
                ->add('nombre_pais', 'entity', array(
                      'label' => 'Pais:',
                      'class' => 'JMPCPetFriendsProtectorsBundle:Country',
                      'empty_value' => 'Selecciona pais...',
                      'attr' => array('class' => 'country')))
                ->add('nombre_ciudad', 'entity', array(
                      'label' => 'Ciudad:',
                      'class'       => 'JMPCPetFriendsProtectorsBundle:Province',
                      'empty_value' => 'Selecciona ciudad...',
                      'attr' => array('class' => 'city')))
                ->add('nombre_mascota', null, array(
                      'label' => 'Nombre de tu mascota:', 'attr' => array(
                      'class' => 'rg_mascota',
                      'placeholder' => 'Mascota')))
                ->add('especie', 'choice', array(
                      'label' => 'Especie:', 'attr' => array(
                      'class' => 'rg_especie'), 'choices' => array(
                      'perro' => 'Perro', 'gato' => 'Gato', 'ave' => 'Aves', 'animal' => 'Otra especie')))
                ->add('sobre_vosotros', 'textarea', array(
                      'label' => 'Acerca de vosotros:',
                      'attr' => array(
                      'class' => 'rg_sobre', 
                      'placeholder' => 'Cuentanos más de ti y de como conociste a tu mascota'))); 
    }
    
    public function getName()
    {
        return 'jmpc_user_registration';
    }
}
