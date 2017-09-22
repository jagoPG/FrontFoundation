<?php

/* node_modules/lodash/fp/has.js */
class __TwigTemplate_e442cdee05c392fba9a009c611c7b2b4be60851223b34da23c31f5d39fd3ddfc extends Twig_Template
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
        $__internal_cb5bb0f2baca13a5c2edab181a5833b1d973bc9d5b97a5e719bd2b242920349d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb5bb0f2baca13a5c2edab181a5833b1d973bc9d5b97a5e719bd2b242920349d->enter($__internal_cb5bb0f2baca13a5c2edab181a5833b1d973bc9d5b97a5e719bd2b242920349d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/has.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('has', require('../has'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_cb5bb0f2baca13a5c2edab181a5833b1d973bc9d5b97a5e719bd2b242920349d->leave($__internal_cb5bb0f2baca13a5c2edab181a5833b1d973bc9d5b97a5e719bd2b242920349d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/has.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('has', require('../has'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/has.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/has.js");
    }
}
