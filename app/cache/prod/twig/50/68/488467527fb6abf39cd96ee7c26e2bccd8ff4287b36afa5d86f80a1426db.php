<?php

/* JMPCPetFriendsProtectorsBundle:Admin:admin.html.twig */
class __TwigTemplate_5068488467527fb6abf39cd96ee7c26e2bccd8ff4287b36afa5d86f80a1426db extends Twig_Template
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

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/profile.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/transdmin.css"), "html", null, true);
        echo "\">
    <script type=\"text/javascript\" src=\"style/js/jNice.js\"></script>

";
    }

    // line 14
    public function block_top_block($context, array $blocks = array())
    {
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
    }

    // line 16
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 18
    public function block_section($context, array $blocks = array())
    {
        // line 19
        echo "\t<h4>Ultimos usuarios registrados</h4>
\t<ul>
\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 22
            echo "\t\t";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username") != "admin")) {
                // line 23
                echo "\t\t<li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombre"), "html", null, true);
                echo "</a><br><span><a href=\"#\">Borrar usuario </a></span><span><a href=\"#\"> Escribir Email</a></span></li>
\t\t";
            }
            // line 25
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t
\t</ul>
\t<a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_admin_users");
        echo "\">Ver todos los usuarios registrados</a><br>
\t<h4>Ultimos mensajes recibidos</h4>
\t<ul>
\t";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 31
            echo "\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "id"), "html", null, true);
            echo "</li>
\t\t<li>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "asunto"), "html", null, true);
            echo "</li>
\t\t<li>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "nombre"), "html", null, true);
            echo "</li>
\t\t<li>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "email"), "html", null, true);
            echo "</li>
\t\t<li>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "mensaje"), "html", null, true);
            echo "</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t
\t</ul>
    <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("jmpc_pet_friends_protectors_admin_messages");
        echo "\">Ver todos los mensajes de contacto</a><br>
    <h4>Ultimos comentarios recibidos</h4>
\t";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 41
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "usuario"), "html", null, true);
            echo "</p>
\t\t<p>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "comentarios"), "html", null, true);
            echo "</p>
\t\t<p>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "contenido"), "html", null, true);
            echo "</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Admin:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 44,  157 => 43,  153 => 42,  146 => 41,  142 => 40,  137 => 38,  133 => 36,  125 => 35,  121 => 34,  117 => 33,  113 => 32,  108 => 31,  104 => 30,  98 => 27,  89 => 25,  81 => 23,  78 => 22,  74 => 21,  70 => 19,  67 => 18,  62 => 16,  57 => 15,  52 => 14,  44 => 10,  40 => 9,  35 => 8,  32 => 7,);
    }
}
