<?php

/* JMPCPetFriendsProtectorsBundle:Email:notification.html.twig */
class __TwigTemplate_ff6003f564ec939cc6dd77d214280aeed4086a88625c51b316bdcc04ffc4258c extends Twig_Template
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
<!DOCTYPE HTML>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\">
        <title>Nuevo mensaje</title>
    </head>
    <body>
        <table>
            <tbody>
            <tr>
                <td>
                    <p>Nuevo mensaje recibido:</p>
                </td>
            </tr>
            <tr>
                <td>
                    <ul>
                        <li><strong>Asunto</strong>:";
        // line 21
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "asunto")), "html", null, true);
        echo "</li>
                        <li><strong>Nombre</strong>:";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "nombre"), "html", null, true);
        echo "</li>
                        <li><strong>Email</strong>: ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email"), "html", null, true);
        echo "</li>
                        <li><strong>Message</strong>: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "mensaje"), "html", null, true);
        echo "</li>
                    </ul>
                </td>
            </tr>
            </tbody>
        </table>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "JMPCPetFriendsProtectorsBundle:Email:notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 24,  47 => 23,  43 => 22,  39 => 21,  19 => 3,);
    }
}
