<?php

/* node_modules/lodash/fp/wrapperReverse.js */
class __TwigTemplate_cb967be227d04cf7cdbf3ee976b7865cdb8ebce5461b9f019a3bd82fc09411a0 extends Twig_Template
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
        $__internal_c3392ee87a10f5d1ce9fdf8aab6dedcad548d515ef4fa37263d95baf8a783633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3392ee87a10f5d1ce9fdf8aab6dedcad548d515ef4fa37263d95baf8a783633->enter($__internal_c3392ee87a10f5d1ce9fdf8aab6dedcad548d515ef4fa37263d95baf8a783633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/wrapperReverse.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('wrapperReverse', require('../wrapperReverse'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_c3392ee87a10f5d1ce9fdf8aab6dedcad548d515ef4fa37263d95baf8a783633->leave($__internal_c3392ee87a10f5d1ce9fdf8aab6dedcad548d515ef4fa37263d95baf8a783633_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/wrapperReverse.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('wrapperReverse', require('../wrapperReverse'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/wrapperReverse.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/wrapperReverse.js");
    }
}
