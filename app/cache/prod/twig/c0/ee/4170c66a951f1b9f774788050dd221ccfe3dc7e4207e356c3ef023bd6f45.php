<?php

/* JMPCPetFriendsProtectorsBundle:Animals:view.html.twig */
class __TwigTemplate_c0ee4170c66a951f1b9f774788050dd221ccfe3dc7e4207e356c3ef023bd6f45 extends Twig_Template
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

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Nuestros amigos";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " - Administración";
        }
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 11
    public function block_section($context, array $blocks = array())
    {
        // line 12
        echo "<div class=\"grid_12 prefix_1\">
    <article class=\"blog\">
        <header class=\"ici02\">
            <div class=\"date\"><time datetime=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "fechaalta"), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_localized_date_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "fechaalta"), "l, F j, Y"), "full", "none", "es")), "html", null, true);
        echo "</time></div>
            <h2 class=\"ic1\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "nombre"), "html", null, true);
        echo "</h2>
        </header>
        
        
        <section class=\"adopt_content\">
            <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "img/", 1 => $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "fotografia")))), "html", null, true);
        echo "\" alt=\"Imagen de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "nombre"), "html", null, true);
        echo " no encontrada\" class=\"large\" />
         ";
        // line 22
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo " 
            <div class=\"btn_adopt\"><a class=\"btn\" href=\"#\">Adoptame</a></div>
         ";
        } else {
            // line 25
            echo "            <div class=\"btn_adopt\"><a class=\"btn\" href=\"#\" disabled=\"disabled\">Adoptame</a></div>
         ";
        }
        // line 27
        echo "        </section>
        
        <div id=\"fieldset_content\">
            <fieldset><legend>Ficha de ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "nombre"), "html", null, true);
        echo "</legend>
                <div id=\"animal_token\">
                    <div><span class=\"title_span\">Raza:</span>
                    <span>";
        // line 33
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "tipo")), "html", null, true);
        echo " 
                    ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "raza"), "html", null, true);
        echo "</span>
                    </div>
                    <div><span class=\"title_span\">Sexo:</span>
                        <span>";
        // line 37
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "sexo")), "html", null, true);
        echo "</span>
                    </div>
                    <div><span class=\"title_span\">Tamaño:</span>
                        <span>";
        // line 40
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "tamano")), "html", null, true);
        echo "</span>
                    </div>
                    <div class=\"clear\"></div>
                    <div><span class=\"title_span\">Color:</span>
                        <span class=\"color_span\" style=\"background:";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "color"), "html", null, true);
        echo "\">Color</span>
                    </div>
                    <div><span class=\"title_span\">Comportamiento:</span>
                        <span>";
        // line 47
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "comportamiento")), "html", null, true);
        echo "</span>
                    </div>
                    <div><span class=\"title_span\">Chip:</span>
                        ";
        // line 50
        if (($this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "chip") == 1)) {
            // line 51
            echo "                        <span>Si</span>
                        ";
        } else {
            // line 53
            echo "                        <span>No</span>
                        ";
        }
        // line 55
        echo "                    </div>
                    <div class=\"clear\"></div>
                    <div><span class=\"title_span\">Historia:</span>
                        <span class=\"title_span_textarea\">";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["animal"]) ? $context["animal"] : $this->getContext($context, "animal")), "historia"), "html", null, true);
        echo "</span>
                    </div>
                </div>
            </fieldset>
        </div>
        <section class=\"google_maps\" id=\"localization\">
            <section class=\"previous-comments\">
                <h3>Localización</h3>
                ";
        // line 66
        $this->env->loadTemplate("JMPCPetFriendsProtectorsBundle:Animals:localization.html.twig")->display($context);
        // line 67
        echo "            </section>
        </section>
    </article>
    <div class=\"clear\"></div>
    
    <div class=\"button_back\">
        <a class=\"btn02\" href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_animals_list");
        echo "\">Volver</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Animals:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 73,  156 => 67,  154 => 66,  143 => 58,  138 => 55,  134 => 53,  130 => 51,  128 => 50,  122 => 47,  116 => 44,  109 => 40,  103 => 37,  97 => 34,  93 => 33,  87 => 30,  82 => 27,  78 => 25,  72 => 22,  66 => 21,  58 => 16,  52 => 15,  47 => 12,  44 => 11,  39 => 9,  30 => 7,);
    }
}
