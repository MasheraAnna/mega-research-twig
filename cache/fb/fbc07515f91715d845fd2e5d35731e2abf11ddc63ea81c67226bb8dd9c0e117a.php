<?php

/* bb.html */
class __TwigTemplate_aeb9da2f38def94a3da4aa62cfe07bf1d008e123944ca76981652b94b513b3e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "bb.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div>
        Большое спасибо за участие! До свидания!
    </div>
";
    }

    public function getTemplateName()
    {
        return "bb.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html'%}*/
/* */
/* {% block content %}*/
/*     <div>*/
/*         Большое спасибо за участие! До свидания!*/
/*     </div>*/
/* {% endblock %}*/
