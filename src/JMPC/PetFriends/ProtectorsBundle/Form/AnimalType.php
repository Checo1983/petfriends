<?php


/*******************************************************/
/*          Clase Formulario AnimalType                */
/*                 Entidad Animal                      */
/*                                                     */                                         
/*******************************************************/

namespace JMPC\PetFriends\ProtectorsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;

class AnimalType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
              ->add('nombre', 'text', array(
                    'label' => 'Nombre', 
                    'attr' => array(
                    'class' => 'form_animal_name',
                    'placeholder' => 'Nombre del animal')))
              ->add('tipo', 'choice', array(
                    'label' => 'Elige una especie',
                    'attr'=> array(
                    'class' => 'select-style'),
                    'choices' => array(
                    'perro' => 'Perro', 'gato' => 'Gato', 'ave' => 'Ave', 'animal' => 'Otra especie')))
              ->add('raza', 'text', array(
                    'label' => 'Raza',
                    'attr' => array(
                    'class' => 'form_animal_breed',
                    'placeholder' => 'Raza del animal')))
              ->add('sexo', 'choice', array(
                    'label' => 'Sexo',
                    'attr' => array(
                    'class' => 'select-style'),
                    'choices' => array(
                    'macho' => 'Macho', 'hembra' => 'Hembra')))
              ->add('tamano', 'choice', array(
                    'label' => 'Tamaño',
                    'attr' => array(
                    'class' => 'select-style'),
                    'choices' => array(
                    'pequeño' => 'Pequeño tamaño', 'mediano' => 'Tamaño medio', 'grande' => 'Gran tamaño')))
              ->add('color', 'hidden', array(
                    'label' => 'Color del pelaje',
                    'attr' => array(
                    'class' => 'form_color')))
              ->add('comportamiento',
                    'choice', array(
                    'label' => 'Estado',
                    'attr' => array(
                    'class' => 'select-style'),
                    'choices' => array(
                    'cariñoso' => 'Cariñoso', 'jugueton' => 'Juguetón', 'hogareño' => 'Hogareño',
                    'nervioso' => 'Nervioso', 'dormilón' => 'Dormilón', 'agresivo' => 'Agresivo')))
              ->add('historia', 'textarea', array(
                    'label' => 'Historia', 'attr' => array(
                    'class' => 'form_animal_history',
                    'placeholder' => 'Como llegó a la asociación')))
              ->add('fotografiaArchivo', 'file', array(
                    'label' => 'Fotografía', 'attr' => array(
                    'class' => 'form_animal_file')))
              ->add('chip', 'choice', array(
                    'label' => 'Chip',
                    'attr' => array('class' => 'select-style'),
                    'choices' => array(
                    '1' => 'Si', '0' => 'No')))
              ->add('fechaalta', 'date', array(
                    'label' => 'Fecha de registro',
                    'input' => 'datetime',
                    'widget' => 'single_text', 'format' => 'dd-MM-yy',
                    'attr' => array('class' => 'form_animal_date')))
              ->add('pais', 'entity', array(
                    'label' => 'Pais',
                    'class' => 'JMPCPetFriendsProtectorsBundle:Country',
                    'empty_value' => 'Selecciona pais...',
                    'attr' => array(
                    'class' => 'select-style country')))
              ->add('ciudad', 'entity', array(
                    'label' => 'Ciudad',
                    'class' => 'JMPCPetFriendsProtectorsBundle:Province',
                    'empty_value' => 'Selecciona ciudad...', 
                    'attr' => array(
                    'class' => 'select-style city')))
              ->add('direccion', 'text', array(
                    'label' =>'Dirección', 'attr' => array(
                    'class' => 'form_animal_address',
                    'placeholder' => 'Escribe la dirección')))
              ->add('Enviar', 'submit')
        ;
               
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'JMPC\PetFriends\ProtectorsBundle\Entity\Animal'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'jmpc_petfriends_protectors_animal';
    }
}
