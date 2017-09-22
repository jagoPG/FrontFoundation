<?php

/* node_modules/lodash/fp/sumBy.js */
class __TwigTemplate_989f92b35d00eecb924ea4094c3da24ef44349d192650d86f4587ea500917c57 extends Twig_Template
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
        $__internal_492f77e32dc9b634af20200a33115bcf3b0f9d28353a98772db4dd0ad7bf0dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_492f77e32dc9b634af20200a33115bcf3b0f9d28353a98772db4dd0ad7bf0dd8->enter($__internal_492f77e32dc9b634af20200a33115bcf3b0f9d28353a98772db4dd0ad7bf0dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/sumBy.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('sumBy', require('../sumBy'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_492f77e32dc9b634af20200a33115bcf3b0f9d28353a98772db4dd0ad7bf0dd8->leave($__internal_492f77e32dc9b634af20200a33115bcf3b0f9d28353a98772db4dd0ad7bf0dd8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/sumBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('sumBy', require('../sumBy'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/sumBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/sumBy.js");
    }
}
