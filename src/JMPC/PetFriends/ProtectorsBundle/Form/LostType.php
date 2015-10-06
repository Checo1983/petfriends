<?php

/***********************************************************/
/*            Clase Formulario LostType                    */
/*               Entidad AnimalLost                        */
/*                                                         */                                         
/***********************************************************/

namespace JMPC\PetFriends\ProtectorsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class LostType extends AbstractType
{

    //Al constructor se le pasa el parametro $idusuario (id de usuario registrado) 
    //para añadirlo de forma automatica al value en idusuariomascperd
    public function __construct($idusuario)
    {
        $this->idusuario = $idusuario;
    }
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
              ->add('idusuariomascperd', 'entity', array(
                    'class' => 'JMPCPetFriendsProtectorsBundle:User',
                    'label' => 'Usuario', 
                    'attr' => array(
                    'class' => 'select-style'),
                    //Busca al usuario que va a crear/editar la entrada de Animales perdidos
                    'query_builder' => function(EntityRepository $er) {
                          return $er->createQueryBuilder('u')
                          ->where("u.id = $this->idusuario");}))
              ->add('nombre', 'text', array(
                    'label' => 'Nombre', 
                    'attr' => array(
                    'class' => 'form_lost_name',
                    'placeholder' => 'Nombre del animal')))
              ->add('tipo', 'choice', array(
                    'label' => 'Elige una especie',
                    'attr' => array(
                    'class' => 'select-style'),
                    'choices' => array(
                    'perro' => 'Perro', 'gato' => 'Gato', 'ave' => 'Ave', 'animal' => 'Otra especie')))
              ->add('raza', 'text', array(
                    'label' => 'Raza',
                    'attr' => array(
                    'class' => 'form_lost_breed',
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
              ->add('mensaje', 'textarea', array(
                    'label' => 'Historia', 'attr' => array(
                     'class' => 'form_lost_message',
                     'placeholder' => 'Escribe aqui como lo perdiste')))
              ->add('fotografiaArchivo', 'file', array(
                    'label' => 'Fotografía', 'attr' => array(
                    'class' => 'form_lost_file')))
              ->add('chip', 'choice', array(
                    'label' => 'Chip',
                    'attr' => array('class' => 'select-style'),
                    'choices' => array(
                    '1' => 'Si', '0' => 'No')))
              ->add('fechaperdida', 'date', array(
                    'label' => 'Fecha de desaparición',
                    'input' => 'datetime',
                    'widget' => 'single_text', 'format' => 'dd-MM-yy',
                    'attr' => array('class' => 'form_lost_date')))
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
                    'class' => 'select-style city'),
                     ))
              ->add('direccion', 'text', array(
                    'label' => 'Dirección', 'attr' => array(
                    'class' => 'form_lost_address',
                    'placeholder' => 'Escribe aqui la dirección')))
              ->add('encontrado', 'hidden', array(
                    'attr' => array(
                    'value' => 'false', 'class' => 'form_lost_find')))
              ->add('Enviar', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'JMPC\PetFriends\ProtectorsBundle\Entity\AnimalLost'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'jmpc_petfriends_protectors_lost';
    }
}
