<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_9e9964ccbadc001793c34547479d6ebb7179831c5a81f91a36380844a2ea91b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 9
        echo "    
<form id=\"loginForm\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <fieldset id=\"body\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        
        <fieldset>
        <label for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Usuario\" required=\"required\" />
        </fieldset>
        <fieldset>
        <label for=\"password\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Contraseña\" required=\"required\" />
        </fieldset>
        <label for=\"remember_me\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"checkbox\" id=\"checkbox\" name=\"_remember_me\" value=\"on\" />
        ";
        // line 24
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 25
            echo "            <div class=\"errors\">*";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
        ";
        }
        // line 27
        echo "        <input type=\"submit\" id=\"loginButton\" name=\"_submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        <span>Si no estas registrado <a class=\"register_button\" href=\"#\">haz click aquí</a></span>
    </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 25,  55 => 19,  45 => 15,  34 => 10,  31 => 9,  28 => 8,  200 => 48,  190 => 43,  185 => 40,  180 => 28,  175 => 20,  170 => 11,  165 => 9,  160 => 8,  155 => 7,  130 => 49,  118 => 43,  114 => 41,  93 => 35,  88 => 34,  84 => 33,  76 => 28,  69 => 24,  65 => 23,  59 => 20,  49 => 16,  47 => 11,  39 => 12,  35 => 7,  340 => 123,  337 => 122,  334 => 121,  328 => 124,  326 => 121,  317 => 114,  314 => 113,  310 => 110,  307 => 109,  302 => 107,  291 => 99,  287 => 98,  283 => 97,  279 => 96,  275 => 95,  271 => 94,  264 => 89,  261 => 88,  251 => 82,  247 => 81,  243 => 80,  239 => 79,  233 => 76,  229 => 75,  225 => 74,  221 => 73,  216 => 71,  212 => 70,  207 => 67,  204 => 66,  198 => 63,  195 => 44,  188 => 58,  182 => 54,  171 => 48,  167 => 47,  163 => 46,  159 => 44,  157 => 43,  144 => 37,  140 => 36,  136 => 35,  132 => 34,  128 => 48,  124 => 32,  120 => 44,  112 => 29,  108 => 28,  104 => 27,  96 => 36,  90 => 22,  86 => 21,  82 => 20,  78 => 29,  74 => 27,  70 => 17,  66 => 24,  62 => 15,  57 => 14,  54 => 13,  40 => 7,  37 => 6,  154 => 42,  151 => 41,  142 => 46,  137 => 43,  131 => 42,  125 => 39,  121 => 38,  116 => 30,  111 => 40,  105 => 39,  99 => 26,  91 => 27,  85 => 24,  79 => 21,  71 => 18,  64 => 16,  61 => 22,  56 => 14,  53 => 13,  48 => 10,  44 => 10,  41 => 9,  38 => 9,  29 => 3,);
    }
}
