<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_717e398c936694aac233e03011907d5b7748a04bfccd5ee60c8db453126b134e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        echo "
";
        // line 5
        $this->displayBlock('subject', $context, $blocks);
        // line 10
        $this->displayBlock('body_text', $context, $blocks);
        // line 15
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 5
    public function block_subject($context, array $blocks = array())
    {
        // line 7
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 10
    public function block_body_text($context, array $blocks = array())
    {
        // line 12
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 15
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 15,  45 => 12,  42 => 10,  36 => 7,  33 => 5,  29 => 15,  27 => 10,  25 => 5,  22 => 3,);
    }
}
