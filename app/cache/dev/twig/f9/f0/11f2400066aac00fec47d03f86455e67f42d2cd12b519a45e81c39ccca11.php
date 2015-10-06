<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_f9f011f2400066aac00fec47d03f86455e67f42d2cd12b519a45e81c39ccca11 extends Twig_Template
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
        // line 17
        echo "
  <div id=\"w\">
    <div id=\"content\" class=\"clearfix\">
      <div id=\"userphoto\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.png"), "html", null, true);
        echo "\" alt=\"default avatar\"></div>
      <h1 class=\"profile\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombre"), "html", null, true);
        echo "</h1>

      <nav id=\"profiletabs\">
        <ul class=\"clearfix\">
          <li><a href=\"#locale\" class=\"sel\">Localización</a></li>
          <li><a href=\"#bio\">Acerca de ti</a></li>
          <li><a href=\"#pet\">Tu Mascota</a></li>
          <li><a href=\"#settings\">Tus Datos</a></li>
        </ul>
      </nav>

      <section id=\"locale\">
            <p>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombrePais"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombreCiudad"), "html", null, true);
        echo "</p>

            <div class=\"box_profile\">
                <div id=\"map_canvas\"></div>

            </div>
      </section>
      
      <section id=\"bio\" class=\"hidden\">
            <p>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "sobreVosotros"), "html", null, true);
        echo "</p>
      </section>
      
      <section id=\"pet\" class=\"hidden\">
            <p>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombreMascota"), "html", null, true);
        echo "</p>
            <p>";
        // line 47
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "especie")), "html", null, true);
        echo "</p>
      </section>
      
      <section id=\"settings\" class=\"hidden\">
            <span>Editar tu perfil </span><span><img class=\"img_edit\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/edit.png"), "html", null, true);
        echo "\" alt=\"*Edit*\"></span>

            <p class=\"setting\"><span>Usuario</span> ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</p>

            <p class=\"setting\"><span>Direccion E-mail</span> ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</p>

            <p class=\"setting\"><span>Nombre de tu mascota</span>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombreMascota"), "html", null, true);
        echo "</p>

            <p class=\"setting\"><span>Especie</span>";
        // line 59
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "especie")), "html", null, true);
        echo "</p>

            <p class=\"setting\"><span>Pais</span>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombrePais"), "html", null, true);
        echo "</p>

            <p class=\"setting\"><span>Ciudad</span>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombreCiudad"), "html", null, true);
        echo "</p>

            <p class=\"setting\"><span>Ultima vez online</span>
              Hoy";
        // line 66
        echo "</p>

      </section>
      
    </div><!-- @end #content -->
  </div><!-- @end #w -->
  \t  ";
        // line 72
        if ((!$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "valid"))) {
            // line 73
            echo "        <div id=\"dialogoPerfilError\" title=\"Modificar Datos de Usuario\">
\t        <form id=\"form_register\" action=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " method=\"POST\" class=\"fos_user_profile_edit\">
\t          ";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
\t          <div>
\t              <input class=\"boton\" type=\"submit\" value=\"Modificar\" />
\t          </div>
\t        </form> 
        </div>
      ";
        }
        // line 82
        echo "      
<script type=\"text/javascript\">

\$(document).ready(function() {
    initialize('";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombreCiudad"), "html", null, true);
        echo "');
});
</script>
    
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 86,  186 => 82,  110 => 46,  100 => 25,  174 => 81,  113 => 45,  34 => 5,  152 => 52,  134 => 53,  97 => 34,  129 => 43,  81 => 25,  77 => 29,  23 => 4,  146 => 61,  137 => 43,  126 => 53,  58 => 16,  53 => 17,  200 => 48,  190 => 43,  185 => 40,  180 => 28,  175 => 20,  170 => 74,  165 => 72,  160 => 8,  155 => 72,  118 => 40,  114 => 47,  84 => 28,  76 => 25,  65 => 17,  340 => 123,  334 => 121,  328 => 124,  326 => 121,  317 => 114,  310 => 110,  307 => 109,  302 => 107,  291 => 99,  287 => 98,  279 => 96,  275 => 95,  271 => 94,  261 => 88,  251 => 82,  239 => 79,  233 => 76,  225 => 74,  216 => 71,  212 => 70,  207 => 67,  198 => 63,  195 => 44,  188 => 58,  167 => 73,  104 => 34,  90 => 29,  70 => 20,  124 => 41,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 122,  322 => 101,  314 => 113,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 97,  278 => 86,  268 => 85,  264 => 89,  258 => 81,  252 => 80,  247 => 81,  241 => 77,  229 => 75,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 48,  132 => 45,  128 => 34,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 80,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 73,  219 => 76,  217 => 75,  208 => 68,  204 => 66,  179 => 69,  159 => 73,  143 => 58,  135 => 46,  119 => 42,  102 => 34,  71 => 18,  67 => 23,  63 => 22,  59 => 20,  38 => 6,  94 => 33,  89 => 33,  85 => 24,  75 => 18,  68 => 14,  56 => 13,  87 => 28,  21 => 3,  26 => 7,  93 => 32,  88 => 34,  78 => 27,  46 => 10,  27 => 4,  44 => 11,  31 => 7,  28 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 48,  166 => 71,  163 => 46,  158 => 67,  156 => 67,  151 => 63,  142 => 46,  138 => 55,  136 => 57,  121 => 51,  117 => 39,  105 => 40,  91 => 27,  62 => 15,  49 => 16,  24 => 4,  25 => 8,  19 => 2,  79 => 21,  72 => 22,  69 => 23,  47 => 11,  40 => 8,  37 => 6,  22 => 3,  246 => 90,  157 => 66,  145 => 46,  139 => 45,  131 => 55,  123 => 42,  120 => 38,  115 => 43,  111 => 30,  108 => 41,  101 => 32,  98 => 34,  96 => 36,  83 => 31,  74 => 21,  66 => 23,  55 => 17,  52 => 12,  50 => 13,  43 => 9,  41 => 10,  35 => 7,  32 => 6,  29 => 7,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 54,  176 => 75,  173 => 65,  168 => 77,  164 => 75,  162 => 57,  154 => 50,  149 => 51,  147 => 58,  144 => 64,  141 => 59,  133 => 55,  130 => 51,  125 => 39,  122 => 47,  116 => 36,  112 => 38,  109 => 40,  106 => 29,  103 => 42,  99 => 32,  95 => 31,  92 => 34,  86 => 31,  82 => 27,  80 => 27,  73 => 21,  64 => 19,  60 => 14,  57 => 13,  54 => 17,  51 => 24,  48 => 12,  45 => 12,  42 => 12,  39 => 9,  36 => 10,  33 => 6,  30 => 7,);
    }
}
