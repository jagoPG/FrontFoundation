<?php

/* node_modules/fsevents/node_modules/json-stable-stringify/example/nested.js */
class __TwigTemplate_46a093bf2941db03673e538720ad190b1b9840369a7ca0805df408a1b225bb2a extends Twig_Template
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
        $__internal_02ba7074edeabcccdea6afe1ea6901538fd511c198004e3d6dd456412e4f35cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ba7074edeabcccdea6afe1ea6901538fd511c198004e3d6dd456412e4f35cd->enter($__internal_02ba7074edeabcccdea6afe1ea6901538fd511c198004e3d6dd456412e4f35cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-stable-stringify/example/nested.js"));

        // line 1
        echo "var stringify = require('../');
var obj = { c: 8, b: [{z:6,y:5,x:4},7], a: 3 };
console.log(stringify(obj));
";
        
        $__internal_02ba7074edeabcccdea6afe1ea6901538fd511c198004e3d6dd456412e4f35cd->leave($__internal_02ba7074edeabcccdea6afe1ea6901538fd511c198004e3d6dd456412e4f35cd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-stable-stringify/example/nested.js";
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
", "node_modules/fsevents/node_modules/json-stable-stringify/example/nested.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-stable-stringify/example/nested.js");
    }
}
