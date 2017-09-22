<?php

/* node_modules/lodash/fp/isWeakSet.js */
class __TwigTemplate_8621d6957e53f3085ca3cdba3395020400485a62fbdb7305e3073cfedb10bcf3 extends Twig_Template
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
        $__internal_627768d595f3b3c2d8bb0cdffee092a8278cf1d692d2a0fe8ea6973979ec1f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627768d595f3b3c2d8bb0cdffee092a8278cf1d692d2a0fe8ea6973979ec1f53->enter($__internal_627768d595f3b3c2d8bb0cdffee092a8278cf1d692d2a0fe8ea6973979ec1f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isWeakSet.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isWeakSet', require('../isWeakSet'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_627768d595f3b3c2d8bb0cdffee092a8278cf1d692d2a0fe8ea6973979ec1f53->leave($__internal_627768d595f3b3c2d8bb0cdffee092a8278cf1d692d2a0fe8ea6973979ec1f53_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isWeakSet.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isWeakSet', require('../isWeakSet'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isWeakSet.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isWeakSet.js");
    }
}
