<?php

/* node_modules/json-stable-stringify/example/nested.js */
class __TwigTemplate_e94a13d045a6113238f890018ad892fc486e2383afdca85185acac4c612b8062 extends Twig_Template
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
        $__internal_7ce9e08498472eac99adcd9499794f7c76af106d6c42bb96dc37a84f6c712be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce9e08498472eac99adcd9499794f7c76af106d6c42bb96dc37a84f6c712be9->enter($__internal_7ce9e08498472eac99adcd9499794f7c76af106d6c42bb96dc37a84f6c712be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-stable-stringify/example/nested.js"));

        // line 1
        echo "var stringify = require('../');
var obj = { c: 8, b: [{z:6,y:5,x:4},7], a: 3 };
console.log(stringify(obj));
";
        
        $__internal_7ce9e08498472eac99adcd9499794f7c76af106d6c42bb96dc37a84f6c712be9->leave($__internal_7ce9e08498472eac99adcd9499794f7c76af106d6c42bb96dc37a84f6c712be9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-stable-stringify/example/nested.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var stringify = require('../');
var obj = { c: 8, b: [{z:6,y:5,x:4},7], a: 3 };
console.log(stringify(obj));
", "node_modules/json-stable-stringify/example/nested.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-stable-stringify/example/nested.js");
    }
}
