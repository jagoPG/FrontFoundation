<?php

/* node_modules/fsevents/node_modules/json-stable-stringify/example/str.js */
class __TwigTemplate_dcd154e9af136ab51995a0e27ee1a00cc08ad7a898120e64f8e7bd6d605eeda5 extends Twig_Template
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
        $__internal_f259ede68b192f4c0d26d0ee2d51f79a4fe3f6dd1194c6c9ea3bb16001402bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f259ede68b192f4c0d26d0ee2d51f79a4fe3f6dd1194c6c9ea3bb16001402bec->enter($__internal_f259ede68b192f4c0d26d0ee2d51f79a4fe3f6dd1194c6c9ea3bb16001402bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-stable-stringify/example/str.js"));

        // line 1
        echo "var stringify = require('../');
var obj = { c: 6, b: [4,5], a: 3 };
console.log(stringify(obj));
";
        
        $__internal_f259ede68b192f4c0d26d0ee2d51f79a4fe3f6dd1194c6c9ea3bb16001402bec->leave($__internal_f259ede68b192f4c0d26d0ee2d51f79a4fe3f6dd1194c6c9ea3bb16001402bec_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-stable-stringify/example/str.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var stringify = require('../');
var obj = { c: 6, b: [4,5], a: 3 };
console.log(stringify(obj));
", "node_modules/fsevents/node_modules/json-stable-stringify/example/str.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-stable-stringify/example/str.js");
    }
}
