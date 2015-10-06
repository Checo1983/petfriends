<?php

/* JMPCPetFriendsProtectorsBundle:Lost:view.html.twig */
class __TwigTemplate_68459f48856de8989401acb937f485f3feab74c2ccc181f645db7a3b6b61bf67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JMPCPetFriendsProtectorsBundle::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Mascotas desaparecidas";
    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 12
    public function block_section($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"grid_12 prefix_1\">
    <article class=\"blog\">
        <header class=\"ici02\">
            <div class=\"date\"><time datetime=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "fechaperdida"), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_localized_date_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "fechaperdida"), "l, F j, Y"), "full", "none", "es")), "html", null, true);
        echo "</time></div>
            <h2 class=\"ic1\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "nombre"), "html", null, true);
        echo "</h2>
        </header>
        
        <div class=\"adopt_content\">
            <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "img/", 1 => $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "fotografia")))), "html", null, true);
        echo "\" alt=\"Imagen de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "nombre"), "html", null, true);
        echo " no encontrada\" class=\"large\" />
        </div>
        <div id=\"fieldset_content\">
            <fieldset><legend>Ficha de ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "nombre"), "html", null, true);
        echo "</legend>
                <div id=\"animal_token\">
                    <div><span class=\"title_span\">Raza:</span>
                    <span>";
        // line 27
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "tipo")), "html", null, true);
        echo " 
                    ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "raza"), "html", null, true);
        echo "</span>
                    </div>
                    <div><span class=\"title_span\">Sexo:</span>
                        <span>";
        // line 31
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "sexo")), "html", null, true);
        echo "</span>
                    </div>
                    <div><span class=\"title_span\">Tamaño:</span>
                        <span>";
        // line 34
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "tamano")), "html", null, true);
        echo "</span>
                    </div>
                    <div class=\"clear\"></div>
                    <div><span class=\"title_span\">Color:</span>
                        <span class=\"color_span\" style=\"background:";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "color"), "html", null, true);
        echo "\">Color</span>
                    </div>
                    <div><span class=\"title_span\">Comportamiento:</span>
                        <span>";
        // line 41
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "comportamiento")), "html", null, true);
        echo "</span>
                    </div>
                    <div><span class=\"title_span\">Chip:</span>
                        ";
        // line 44
        if (($this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "chip") == 1)) {
            // line 45
            echo "                        <span>Si</span>
                        ";
        } else {
            // line 47
            echo "                        <span>No</span>
                        ";
        }
        // line 49
        echo "                    </div>
                    <div><span class=\"title_span\">Usuario:</span>
                        <span><a href=\"#\">";
        // line 51
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "idusuariomascperd")), "html", null, true);
        echo "</a></span>
                    </div>
                    <div class=\"clear\"></div>
                    <div><span class=\"title_span\">Mensaje:</span>
                        <span class=\"title_span_textarea\">";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lost"]) ? $context["lost"] : $this->getContext($context, "lost")), "mensaje"), "html", null, true);
        echo "</span>
                    </div>
                </div>
            </fieldset>
        </div>
    
        <div class=\"google_maps\" id=\"localization\">
            <div class=\"previous-comments\">
                <h3>Localización</h3>
                ";
        // line 64
        $this->env->loadTemplate("JMPCPetFriendsProtectorsBundle:Lost:localization.html.twig")->display($context);
        // line 65
        echo "            </div>
            
        </div>
        </article>
        <div class=\"adopte_content\">
            <h3>Formulario Mascota Encontrada</h3>
        
            ";
        // line 72
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo " 
                ";
            // line 73
            $this->env->loadTemplate("JMPCPetFriendsProtectorsBundle:Lost:form.html.twig")->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
            echo " 
            ";
        } else {
            // line 75
            echo "                <div><p>Registrate para poder rellenar el formulario</p></div>
            ";
        }
        // line 77
        echo "        </div>
    
    <div class=\"clear\"></div>
    <div class=\"button_back\">
        <a class=\"btn02\" href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_lost");
        echo "\">Volver</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Lost:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 81,  168 => 77,  164 => 75,  159 => 73,  155 => 72,  146 => 65,  144 => 64,  132 => 55,  125 => 51,  121 => 49,  117 => 47,  113 => 45,  111 => 44,  105 => 41,  99 => 38,  92 => 34,  86 => 31,  80 => 28,  76 => 27,  70 => 24,  62 => 21,  55 => 17,  49 => 16,  44 => 13,  41 => 12,  36 => 10,  30 => 8,);
    }
}
