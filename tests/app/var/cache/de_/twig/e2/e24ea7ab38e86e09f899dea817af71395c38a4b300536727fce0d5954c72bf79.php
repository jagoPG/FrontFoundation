<?php

/* node_modules/lodash/fp/fromPairs.js */
class __TwigTemplate_822f782b9edf395125c2f39e5329a1ac5d179b31618f9065b744e04f85b08958 extends Twig_Template
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
        $__internal_c0a93e171ec51b316cee992bce07d164e54912b7dc2621edbca0c1acfe8cbe0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a93e171ec51b316cee992bce07d164e54912b7dc2621edbca0c1acfe8cbe0e->enter($__internal_c0a93e171ec51b316cee992bce07d164e54912b7dc2621edbca0c1acfe8cbe0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/fromPairs.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('fromPairs', require('../fromPairs'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_c0a93e171ec51b316cee992bce07d164e54912b7dc2621edbca0c1acfe8cbe0e->leave($__internal_c0a93e171ec51b316cee992bce07d164e54912b7dc2621edbca0c1acfe8cbe0e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/fromPairs.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('fromPairs', require('../fromPairs'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/fromPairs.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/fromPairs.js");
    }
}
