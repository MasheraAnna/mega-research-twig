<?php

/* view6.html */
class __TwigTemplate_0abf0c933849fafbd473e48799fdcf05c1526777d49b8bef6284d87c21694c6a extends Twig_Template
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
        // line 1
        echo "<form action='process.php?qIndex=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "qIndex", array()), "html", null, true);
        echo "' method='post'>

    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["variantes"]) ? $context["variantes"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["variant"]) {
            // line 4
            echo "        <div>
            <div class='q1'>
                ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["variant"], "answer_text", array(), "array"), "html", null, true);
            echo "
            </div>
            <input name =\"";
            // line 8
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" id =\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" type='text'
                   ";
            // line 9
            if ($this->getAttribute((isset($context["qData"]) ? $context["qData"] : null), $context["key"], array(), "array")) {
                echo " value = '";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["qData"]) ? $context["qData"] : null), $context["key"], array(), "array"), "html", null, true);
                echo "' ";
            }
            echo ">
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['variant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    <br><br>
    Сумма:
    <br><br><br>

        <button name = \"prev\" id=\"prev\" type=\"submit\" value=\"back\"  class = 'arrow-btn'> 
            <i class = 'fa fa-chevron-left fa-2x move_left'></i>
        </button>
        <button name = \"next\" id=\"next\" type=\"submit\" value=\"next\" class = 'arrow-btn'>
            <i class = 'fa fa-chevron-right fa-2x move_right'></i>
        </button>
</form>
";
    }

    public function getTemplateName()
    {
        return "view6.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  44 => 9,  38 => 8,  33 => 6,  29 => 4,  25 => 3,  19 => 1,);
    }
}
/* <form action='process.php?qIndex={{question.qIndex}}' method='post'>*/
/* */
/*     {% for key, variant in variantes %}*/
/*         <div>*/
/*             <div class='q1'>*/
/*                 {{variant['answer_text']}}*/
/*             </div>*/
/*             <input name ="{{key}}" id ="{{key}}" type='text'*/
/*                    {% if qData[key]%} value = '{{qData[key]}}' {% endif %}>*/
/*         </div>*/
/*         {% endfor %}*/
/* */
/*     <br><br>*/
/*     Сумма:*/
/*     <br><br><br>*/
/* */
/*         <button name = "prev" id="prev" type="submit" value="back"  class = 'arrow-btn'> */
/*             <i class = 'fa fa-chevron-left fa-2x move_left'></i>*/
/*         </button>*/
/*         <button name = "next" id="next" type="submit" value="next" class = 'arrow-btn'>*/
/*             <i class = 'fa fa-chevron-right fa-2x move_right'></i>*/
/*         </button>*/
/* </form>*/
/* */
