<?php


/**************************************************/
/*          Clase Formulario PostType             */
/*               Entidad Post                     */
/*                                                */                                         
/**************************************************/

namespace JMPC\PetFriends\ProtectorsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType
{   
    //Al constructor se le pasa el parametro $autor (administrador) 
    //para añadirlo de forma automatica al value en autor
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
              ->add('titulo', 'text', array(
                    'label' => 'Título', 
                    'attr' => array(
                    'class' => 'form_page_name',
                    'placeholder' => 'Título de la noticia')))
              ->add('autor', 'text', array(
                    'label' => 'Autor',
                    'read_only' => true,
                    'attr' => array(
                    'value'=> $this->autor, 'class' => 'form_page_autor')))
              ->add('contenido', 'textarea', array(
                    'label' => 'Noticia',
                    'attr' => array(
                    'class' => 'form_page_content',
                    'placeholder' => 'Escribe aquí...')))
              ->add('imagenArchivo', 'file', array(
                    'label' => 'Imagen',
                    'attr' => array(
                    'class' => 'form_page_file')))
              ->add('tags', 'text', array(
                    'label' => 'Etiquetas',
                    'attr' => array(
                    'class' => 'form_page_tags',
                    'placeholder' => 'Etiquetas de esta noticia')))
              ->add('Enviar', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'JMPC\PetFriends\ProtectorsBundle\Entity\Post'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'jmpc_petfriends_protectors_post';
    }
}
