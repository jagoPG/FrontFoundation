<?php

/* node_modules/object-inspect/example/circular.js */
class __TwigTemplate_337fb21d421ddb61b2c50ea3d3b3d9efdad90dfa27c9f52a6fcf08d0f125dbe6 extends Twig_Template
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
        $__internal_d73745052470432f7838aa64958579d9bb5b60d81d667b85d488d8c52690a3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73745052470432f7838aa64958579d9bb5b60d81d667b85d488d8c52690a3e7->enter($__internal_d73745052470432f7838aa64958579d9bb5b60d81d667b85d488d8c52690a3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-inspect/example/circular.js"));

        // line 1
        echo "var inspect = require('../');
var obj = { a: 1, b: [3,4] };
obj.c = obj;
console.log(inspect(obj));
";
        
        $__internal_d73745052470432f7838aa64958579d9bb5b60d81d667b85d488d8c52690a3e7->leave($__internal_d73745052470432f7838aa64958579d9bb5b60d81d667b85d488d8c52690a3e7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-inspect/example/circular.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var inspect = require('../');
var obj = { a: 1, b: [3,4] };
obj.c = obj;
console.log(inspect(obj));
", "node_modules/object-inspect/example/circular.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-inspect/example/circular.js");
    }
}
