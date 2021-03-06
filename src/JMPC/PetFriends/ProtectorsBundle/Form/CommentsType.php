<?php

/***********************************************************/
/*          Clase Formulario CommentsType                  */
/*                  Entidad Comments                       */
/*                                                         */
/***********************************************************/

namespace JMPC\PetFriends\ProtectorsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommentsType extends AbstractType
{
    //Al constructor se le pasa el parametro $autor (username de usuario registrado) 
    //para añadirlo de forma automatica al value en usuario
    public function __construct($autor)
    {
        $this->autor = $autor; 
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('usuario', 'text', array(
                  'label' => 'Usuario',
                  'read_only' => true,
                  'attr' => array(
                  'value' => $this->autor,
                  'class' => 'form_comment_usuario')))
            ->add('comentarios', 'textarea', array(
                  'label' => 'Comentario',
                  'attr' => array(
                  'class' => 'form_comment_comments',
                  'placeholder' => 'Aqui tu comentario...')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'JMPC\PetFriends\ProtectorsBundle\Entity\Comments'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'jmpc_petfriends_protectors_comment';
    }
}
