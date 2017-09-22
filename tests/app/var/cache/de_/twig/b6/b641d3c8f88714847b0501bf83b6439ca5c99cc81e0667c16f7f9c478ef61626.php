<?php

/* node_modules/lodash/fp/toPairs.js */
class __TwigTemplate_a6364552c698ff5cc82c6175f8853d5a985b25b9484a1d3352938a395a2142fd extends Twig_Template
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
        $__internal_ee409b7a46b2ebc6ebb4b871209da14100ec2aa89da6ac1763c9dd96ecef124a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee409b7a46b2ebc6ebb4b871209da14100ec2aa89da6ac1763c9dd96ecef124a->enter($__internal_ee409b7a46b2ebc6ebb4b871209da14100ec2aa89da6ac1763c9dd96ecef124a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/toPairs.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('toPairs', require('../toPairs'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_ee409b7a46b2ebc6ebb4b871209da14100ec2aa89da6ac1763c9dd96ecef124a->leave($__internal_ee409b7a46b2ebc6ebb4b871209da14100ec2aa89da6ac1763c9dd96ecef124a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/toPairs.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('toPairs', require('../toPairs'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/toPairs.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/toPairs.js");
    }
}
