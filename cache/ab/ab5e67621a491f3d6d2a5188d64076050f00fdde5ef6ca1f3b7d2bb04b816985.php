<?php

/* start.html */
class __TwigTemplate_f5967f858a95974421b3bacbbae009a9f1a9d8151ba5fa1c725488823dcfefdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t";
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "
\t    <div class='hidiv'>
\t       <span class = 'hitext'>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "qText", array()), "html", null, true);
        echo "</span>
\t    </div>
\t    <div class = 'middleScreen'>
\t    \t<div class = 'startButton-container'>
\t\t        <form action='process.php?qIndex=";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "qIndex", array()), "html", null, true);
        echo "' method='post'>
\t\t        \t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["variantes"]) ? $context["variantes"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["variant"]) {
            // line 10
            echo "\t\t        \t\t<input type = 'hidden' name =\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" id =\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" value ='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["variant"], "answer_text", array(), "array"), "html", null, true);
            echo "'>
\t\t        \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['variant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t\t        \t<button name = \"next\" id = \"next\" type= \"submit\" value = \"next\" class = \"startButton\"> Начать </button>
\t\t        </form>
\t\t    </div>
\t        <div class = 'pressEnterDiv'>
\t            <span class = 'pressEnterText'> нажмите ENTER </span>
\t        </div>
\t    </div>
\t";
    }

    public function getTemplateName()
    {
        return "start.html";
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  46 => 10,  42 => 9,  38 => 8,  31 => 4,  27 => 2,  20 => 1,);
    }
}
/* 	{% block content %}*/
/* */
/* 	    <div class='hidiv'>*/
/* 	       <span class = 'hitext'>{{question.qText}}</span>*/
/* 	    </div>*/
/* 	    <div class = 'middleScreen'>*/
/* 	    	<div class = 'startButton-container'>*/
/* 		        <form action='process.php?qIndex={{question.qIndex}}' method='post'>*/
/* 		        	{% for key, variant in variantes %}*/
/* 		        		<input type = 'hidden' name ="{{key}}" id ="{{key}}" value ='{{variant["answer_text"]}}'>*/
/* 		        	{% endfor %}*/
/* 		        	<button name = "next" id = "next" type= "submit" value = "next" class = "startButton"> Начать </button>*/
/* 		        </form>*/
/* 		    </div>*/
/* 	        <div class = 'pressEnterDiv'>*/
/* 	            <span class = 'pressEnterText'> нажмите ENTER </span>*/
/* 	        </div>*/
/* 	    </div>*/
/* 	{% endblock %}*/
/* */
