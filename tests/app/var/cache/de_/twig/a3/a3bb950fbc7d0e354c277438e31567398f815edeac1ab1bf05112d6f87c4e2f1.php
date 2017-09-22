<?php

/* node_modules/lodash/fp/isWeakMap.js */
class __TwigTemplate_c874a073371d204c206d445861c7e7110b035ce1d82eb92723bc9329e654b908 extends Twig_Template
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
        $__internal_663afccff0038b87e63a59edf892c02ea64d412603494dd7da928789960fe030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663afccff0038b87e63a59edf892c02ea64d412603494dd7da928789960fe030->enter($__internal_663afccff0038b87e63a59edf892c02ea64d412603494dd7da928789960fe030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isWeakMap.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isWeakMap', require('../isWeakMap'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_663afccff0038b87e63a59edf892c02ea64d412603494dd7da928789960fe030->leave($__internal_663afccff0038b87e63a59edf892c02ea64d412603494dd7da928789960fe030_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isWeakMap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isWeakMap', require('../isWeakMap'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isWeakMap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isWeakMap.js");
    }
}
