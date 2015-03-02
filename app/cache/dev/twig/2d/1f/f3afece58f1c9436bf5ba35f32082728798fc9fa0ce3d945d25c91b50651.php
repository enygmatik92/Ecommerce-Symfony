<?php

/* EcommerceBundle:Default:index.html.twig */
class __TwigTemplate_2d1ff3afece58f1c9436bf5ba35f32082728798fc9fa0ce3d945d25c91b50651 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        // line 3
        echo "    <ul>
        <li><a href=\"#\">accueil</a></li>
        <li><a href=\"#\">lien</a></li>
        <li><a href=\"#\">lien1</a></li>
    </ul>
    ";
        // line 8
        $this->env->loadTemplate("EcommerceBundle:Default:include.html.twig")->display($context);
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    
    <br/>
        ____________________________________________________
    <br />

    ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-y"), "html", null, true);
        echo "


    <br />
    ______________________________________
    <br />

";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 17,  54 => 12,  51 => 11,  47 => 8,  40 => 3,  37 => 2,  11 => 1,);
    }
}
