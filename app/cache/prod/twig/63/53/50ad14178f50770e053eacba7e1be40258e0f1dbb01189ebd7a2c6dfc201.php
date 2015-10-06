<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_635350ad14178f50770e053eacba7e1be40258e0f1dbb01189ebd7a2c6dfc201 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        echo "

";
        // line 6
        echo "<div id=\"dialogoFormulario\" title=\"Registro de Usuario\" style=\"display:none;\">
<form id=\"form_register\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" method=\"POST\"
class=\"fos_user_registration_register\" ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "<div class=\"check_email\"></div>
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "<div class=\"check_user\"></div>
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'row');
        echo "
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), 'row');
        echo "
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'row');
        echo "
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre_pais"), 'row');
        echo "
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre_ciudad"), 'row');
        echo "
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre_mascota"), 'row');
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "especie"), 'row');
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sobre_vosotros"), 'row');
        echo "
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'row');
        echo "

\t<input id=\"route_val_user\" type=\"hidden\" value=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_validate");
        echo "\"/>
\t<input id=\"route_val_email\" type=\"hidden\" value=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_validate_email");
        echo "\"/>
    <div>
        <input class=\"boton\" type=\"submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" 
        disabled=\"disabled\" />
    </div>
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  58 => 15,  50 => 13,  46 => 12,  42 => 11,  30 => 8,  23 => 6,  19 => 3,  26 => 7,  24 => 4,  21 => 3,  68 => 25,  55 => 19,  45 => 15,  34 => 9,  31 => 7,  28 => 6,  200 => 48,  190 => 43,  185 => 40,  180 => 28,  175 => 20,  170 => 11,  165 => 9,  160 => 8,  155 => 7,  130 => 49,  118 => 43,  114 => 41,  93 => 35,  88 => 24,  84 => 33,  76 => 28,  69 => 24,  65 => 23,  59 => 20,  49 => 16,  47 => 11,  39 => 12,  35 => 7,  340 => 123,  337 => 122,  334 => 121,  328 => 124,  326 => 121,  317 => 114,  314 => 113,  310 => 110,  307 => 109,  302 => 107,  291 => 99,  287 => 98,  283 => 97,  279 => 96,  275 => 95,  271 => 94,  264 => 89,  261 => 88,  251 => 82,  247 => 81,  243 => 80,  239 => 79,  233 => 76,  229 => 75,  225 => 74,  221 => 73,  216 => 71,  212 => 70,  207 => 67,  204 => 66,  198 => 63,  195 => 44,  188 => 58,  182 => 54,  171 => 48,  167 => 47,  163 => 46,  159 => 44,  157 => 43,  144 => 37,  140 => 36,  136 => 35,  132 => 34,  128 => 48,  124 => 32,  120 => 44,  112 => 29,  108 => 28,  104 => 27,  96 => 36,  90 => 22,  86 => 21,  82 => 20,  78 => 29,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  57 => 14,  54 => 14,  40 => 7,  37 => 6,  154 => 42,  151 => 41,  142 => 46,  137 => 43,  131 => 42,  125 => 39,  121 => 38,  116 => 30,  111 => 40,  105 => 39,  99 => 26,  91 => 27,  85 => 24,  79 => 21,  71 => 18,  64 => 16,  61 => 22,  56 => 14,  53 => 13,  48 => 10,  44 => 10,  41 => 9,  38 => 10,  29 => 3,);
    }
}
