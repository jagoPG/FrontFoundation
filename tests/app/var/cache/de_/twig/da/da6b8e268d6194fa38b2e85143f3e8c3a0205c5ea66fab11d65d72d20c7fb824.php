<?php

/* node_modules/lodash/fp/isString.js */
class __TwigTemplate_1d96dcc36f439a2c9dc1672922ed69f34edc9af8d4fc58c68ea425456a72792e extends Twig_Template
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
        $__internal_24267bd722a41a1fe8465bc326dde76c9befcafb2db8a8e1bb62cdd6102245ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24267bd722a41a1fe8465bc326dde76c9befcafb2db8a8e1bb62cdd6102245ce->enter($__internal_24267bd722a41a1fe8465bc326dde76c9befcafb2db8a8e1bb62cdd6102245ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isString.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isString', require('../isString'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_24267bd722a41a1fe8465bc326dde76c9befcafb2db8a8e1bb62cdd6102245ce->leave($__internal_24267bd722a41a1fe8465bc326dde76c9befcafb2db8a8e1bb62cdd6102245ce_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isString.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isString', require('../isString'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isString.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isString.js");
    }
}
