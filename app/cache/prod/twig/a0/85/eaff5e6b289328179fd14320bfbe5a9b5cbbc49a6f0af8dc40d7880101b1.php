<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_a085eaff5e6b289328179fd14320bfbe5a9b5cbbc49a6f0af8dc40d7880101b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JMPCPetFriendsProtectorsBundle::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'top_block' => array($this, 'block_top_block'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
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

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/profile.css"), "html", null, true);
        echo "\">

";
    }

    // line 11
    public function block_top_block($context, array $blocks = array())
    {
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
    }

    // line 13
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 15
    public function block_section($context, array $blocks = array())
    {
        // line 16
        echo "

<script type=\"text/javascript\">

\$(document).ready(function() {
    initialize('";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombreCiudad"), "html", null, true);
        echo "');
});

</script>


";
        // line 28
        echo "  <div id=\"w\">
    <div id=\"content\" class=\"clearfix\">
      <div id=\"userphoto\">
      ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : $this->getContext($context, "files")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 32
            echo "          <img class=\"img_profile\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "img/", 1 => $this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "fotoUsuario")))), "html", null, true);
            echo "\" alt=\"foto de usuario\">
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "          <img class=\"img_profile\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.png"), "html", null, true);
            echo "\" alt=\"foto de usuario\">
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "      </div>

      <h1 class=\"profile\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombre"), "html", null, true);
        echo "</h1>

      <nav id=\"profiletabs\">
          <ul class=\"clearfix\">
              <li><a href=\"#locale\" class=\"sel\">Localización</a></li>
              <li><a href=\"#bio\">Acerca de vosotros</a></li>
              <li><a href=\"#pet\">Tu Mascota</a></li>
              <li><a href=\"#settings\">Tus Datos</a></li>
          </ul>
      </nav>

      <section id=\"locale\">
          <p><b>Pais: </b>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombrePais"), "html", null, true);
        echo "</p><p><b>Ciudad: </b>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombreCiudad"), "html", null, true);
        echo "</p>
          <div class=\"box_form_photo\">
              <form class=\"form_photo_profile\" method=\"POST\" action=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_update_files");
        echo "\" 
              enctype=\"multipart/form-data\" name=\"form_photo_profile\">
                  <input type=\"file\" id=\"profile_photo\" name=\"profile_photo\"/>
                  <input id=\"submit_profile_photo\" type=\"submit\" value=\"Cambiar foto\" /> 
              </form>
          </div>
          <div class=\"box_profile\">
              <div id=\"map_canvas\"></div>
          </div>
      </section>
      
      <section id=\"bio\" class=\"hidden\">
          <p><b>Sobre vosotros</b></p><p>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "sobreVosotros"), "html", null, true);
        echo "</p>
      </section>
      
      <section id=\"pet\" class=\"hidden\">
          <div id=\"petphoto\">
          ";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : $this->getContext($context, "files")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 70
            echo "              <img class=\"img_pet\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "img/", 1 => $this->getAttribute((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "fotoMascota")))), "html", null, true);
            echo "\" alt=\"foto de tu mascota\">
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 72
            echo "              <img class=\"img_pet\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.png"), "html", null, true);
            echo "\" alt=\"foto de tu mascota\">
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "          </div>
          <p><b>Nombre: </b>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombreMascota"), "html", null, true);
        echo "</p>
          <p><b>Especie: </b>";
        // line 76
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "especie")), "html", null, true);
        echo "</p>
          <div class=\"box_form_photo_pet\">
              <form class=\"form_photo_profile_pet\" method=\"POST\" action=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_update_files_pet");
        echo "\" 
              enctype=\"multipart/form-data\" name=\"form_photo_profile_pet\">
                  <input type=\"file\" id=\"profile_photo_pet\" name=\"profile_photo_pet\"/>
                  <input id=\"submit_profile_photo_pet\" type=\"submit\" value=\"Cambiar foto\" /> 
              </form>
          </div>
      </section>

      <section id=\"settings\" class=\"hidden\">
          <span>Editar tu perfil </span><span><img class=\"img_edit\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/edit.png"), "html", null, true);
        echo "\" alt=\"*Edit*\"></span>

          <p class=\"setting\"><span>Usuario</span> ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</p>

          <p class=\"setting\"><span>Direccion E-mail</span> ";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</p>

          <p class=\"setting\"><span>Nombre de tu mascota</span>";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombreMascota"), "html", null, true);
        echo "</p>

          <p class=\"setting\"><span>Especie</span>";
        // line 95
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "especie")), "html", null, true);
        echo "</p>

          <p class=\"setting\"><span>Pais</span>";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombrePais"), "html", null, true);
        echo "</p>

          <p class=\"setting\"><span>Ciudad</span>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombreCiudad"), "html", null, true);
        echo "</p>

          <p class=\"setting\"><span>Ultima vez online</span>
            ";
        // line 102
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_localized_date_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastLogin"), "l, F j, Y"), "full", "none", "es")), "html", null, true);
        echo "</p>
      </section>
      
    </div><!-- @end #content -->
  </div><!-- @end #w -->
      <div id=\"dialogoPerfil\" title=\"Modificar Datos de Usuario\" style=\"display:none;\">
          <form id=\"form_register\" action=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
          ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div>
                <input class=\"boton\" type=\"submit\" value=\"Modificar\" />
            </div>
          </form> 
      </div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 109,  248 => 108,  239 => 102,  233 => 99,  228 => 97,  223 => 95,  218 => 93,  213 => 91,  208 => 89,  203 => 87,  191 => 78,  186 => 76,  182 => 75,  179 => 74,  170 => 72,  162 => 70,  157 => 69,  149 => 64,  134 => 52,  127 => 50,  112 => 38,  108 => 36,  99 => 34,  91 => 32,  86 => 31,  81 => 28,  72 => 21,  65 => 16,  62 => 15,  57 => 13,  52 => 12,  47 => 11,  40 => 8,  35 => 7,  32 => 6,  31 => 7,  28 => 6,);
    }
}
