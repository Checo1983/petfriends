<?php

/***********************************************************/
/*         Clase Formulario ProfileFormType                */
/*         Sobreescrita de ProfileFormType FOSUserBundle   */
/*         para añadir los campos necesarios               */
/*                    Entidad User                         */
/*                                                         */                                         
/***********************************************************/

/**
 * Description of ProfileFormType
 *
 * @author Checo
 */

namespace JMPC\PetFriends\ProtectorsBundle\Form\Type;

use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;

class ProfileFormType extends BaseType
{
    public function buildUserForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('nombre', null, array(
                      'label' => 'Nombre completo', 'attr' => array(
                      'class' => 'rg_nombre',
                      'placeholder' => 'Nombre')))
                ->add('nombre_pais', 'entity', array(
                      'label' => 'Seleccione pais',
                      'class' => 'JMPCPetFriendsProtectorsBundle:Country',
                      'empty_value' => 'Selecciona pais...',
                      'attr' => array('class' => 'country')))
                ->add('nombre_ciudad', 'entity', array(
                      'label' => 'Selecciona provincia',
                      'class'       => 'JMPCPetFriendsProtectorsBundle:Province',
                      'empty_value' => 'Selecciona ciudad...',
                      'attr' => array('class' => 'city')))
                ->add('nombre_mascota', null, array(
                      'label' => 'Nombre de tu mascota', 'attr' => array(
                      'class' => 'rg_mascota',
                      'placeholder' => 'Mascota')))
                ->add('especie', 'choice', array(
                      'label' => 'Especie', 'attr' => array(
                      'class' => 'rg_especie'), 'choices' => array(
                      'perro' => 'Perro', 'gato' => 'Gato', 'ave' => 'Aves', 'animal' => 'Otra especie')))
                ->add('sobre_vosotros', 'textarea', array(
                      'label' => 'Acerca de vosotros',
                      'attr' => array(
                      'class' => 'rg_sobre', 
                      'placeholder' => 'Cuentanos más de ti y de como conociste a tu mascota')))
        ;
    }
    
    public function getName()
    {
        return 'jmpc_user_profile';
    }
}