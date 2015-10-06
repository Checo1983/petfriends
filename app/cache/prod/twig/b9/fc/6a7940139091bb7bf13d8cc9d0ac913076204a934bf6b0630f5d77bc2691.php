<?php

/* JMPCPetFriendsProtectorsBundle:Page:about.html.twig */
class __TwigTemplate_b9fc6a7940139091bb7bf13d8cc9d0ac913076204a934bf6b0630f5d77bc2691 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JMPCPetFriendsProtectorsBundle::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JMPCPetFriendsProtectorsBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Sobre adopciones";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " - Administración";
        }
    }

    // line 9
    public function block_section($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"grid_8 prefix_1\">
    <h2>Sobre nosotros</h2><br>
    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" width=\"250\" alt=\"about us\" class=\"img_inner fleft\">
    <article class=\"about\">
        <p>Los requisitos para poder adoptar algún animal de la sociedad protectora son los siguientes:</p>
        <p>Debe estar correctamente registrado y logueado en <span class=\"pe\">P</span>ets<span class=\"f\">F</span>riends. Para ello puede rellenar el formulario de registro 
        <a class=\"register_button\" href=\"#\">haciendo click aquí</a> o en la zona superior en 'Acceso'</p>
        <p>Un vez registrado y logueado en nuestro sistema, los animales de la protectora se encuentran en la sección <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_list");
        echo "\"> Nuestros amigos</a></p>
        <p>Navegue a través del listado para conocer a cada uno de los animales, y poder ver sus fichas particulares</p>
        <p>Una vez que encuentre a su futura mascota, en su ficha completa, aparecerá un boton denominado 'Adoptame'. Haciendo click en el botón, el sistema enviará una petición automática de adopción en su nombre al administrador de la sociedad y en el menor tiempo posible, tras evaluar la petición, se pondran en contacto con usted via email para iniciar los tramites de adopción.</p>
        <p>Para cualquier consulta acerca de la asociación, obtener más información acerca de los animales que aparecen en <span class=\"pe\">P</span>et<span class=\"f\">F</span>riends, u obtener ayuda de cualquier tipo no dude en ponerse en contacto con nosotros a traves del formulario de <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_contact");
        echo "\">contacto</a><p>
        <p>La dirección de <span class=\"pe\">P</span>ets<span class=\"f\">F</span>riends</p>
    </article>
    </div>
";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 20,  53 => 17,  45 => 12,  41 => 10,  38 => 9,  29 => 7,);
    }
}
