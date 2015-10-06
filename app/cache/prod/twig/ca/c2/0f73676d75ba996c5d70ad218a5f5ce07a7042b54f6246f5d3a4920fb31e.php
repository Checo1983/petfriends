<?php

/* JMPCPetFriendsProtectorsBundle:Comments:index.html.twig */
class __TwigTemplate_cac20f73676d75ba996c5d70ad218a5f5ce07a7042b54f6246f5d3a4920fb31e extends Twig_Template
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
<div>
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 6
            echo "        <article class=\"comment ";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0")), "html", null, true);
            echo "\" id=\"comment-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "html", null, true);
            echo "\">
            <header class=\"ici02\">
                <p><span class=\"highlight\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "usuario"), "html", null, true);
            echo "</span> ha comentado hace <time datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "creado"), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, strtr($this->env->getExtension('JMPC_PetFriends_Protectors_extension')->createdAgo($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "creado")), array("minutes ago" => "minutos")), "html", null, true);
            echo "</time></p>
            </header>
            <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "comentarios"), "html", null, true);
            echo "</p>
        </article>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 13
            echo "        <p>No hay comentarios en esta entrada, Escribe tu comentario...</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    <div class=\"paginacion\">
        ";
        // line 16
        echo $this->env->getExtension('knp_pagination')->render((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Comments:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  49 => 8,  41 => 6,  23 => 5,  19 => 3,  110 => 42,  108 => 41,  105 => 40,  97 => 34,  93 => 32,  89 => 30,  84 => 16,  80 => 27,  76 => 25,  74 => 13,  65 => 18,  58 => 10,  53 => 14,  47 => 13,  42 => 10,  39 => 9,  30 => 7,);
    }
}
