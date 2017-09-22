<?php

/* node_modules/lodash/fp/isArguments.js */
class __TwigTemplate_a47b5ac04711a3b3bd136b45e8a8659dca7109b91c918849894209f03ed77f41 extends Twig_Template
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
        $__internal_7ed038ba453945ae7295298b4a37f848aa394f291f323a57f99bc2b4d9880022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed038ba453945ae7295298b4a37f848aa394f291f323a57f99bc2b4d9880022->enter($__internal_7ed038ba453945ae7295298b4a37f848aa394f291f323a57f99bc2b4d9880022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isArguments.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isArguments', require('../isArguments'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_7ed038ba453945ae7295298b4a37f848aa394f291f323a57f99bc2b4d9880022->leave($__internal_7ed038ba453945ae7295298b4a37f848aa394f291f323a57f99bc2b4d9880022_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isArguments.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isArguments', require('../isArguments'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isArguments.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isArguments.js");
    }
}
