<?php

/* node_modules/lodash/fp/unzip.js */
class __TwigTemplate_a0ab8d41a14c5e99481b9465c34dd524cfb8309b14f56c796a33f91bc3defdfe extends Twig_Template
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
        $__internal_13b3e0264bbeecb55cadaa04d4547408d3285ec90051db0214b53f0a4c9a8506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b3e0264bbeecb55cadaa04d4547408d3285ec90051db0214b53f0a4c9a8506->enter($__internal_13b3e0264bbeecb55cadaa04d4547408d3285ec90051db0214b53f0a4c9a8506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/unzip.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('unzip', require('../unzip'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_13b3e0264bbeecb55cadaa04d4547408d3285ec90051db0214b53f0a4c9a8506->leave($__internal_13b3e0264bbeecb55cadaa04d4547408d3285ec90051db0214b53f0a4c9a8506_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/unzip.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('unzip', require('../unzip'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/unzip.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/unzip.js");
    }
}
