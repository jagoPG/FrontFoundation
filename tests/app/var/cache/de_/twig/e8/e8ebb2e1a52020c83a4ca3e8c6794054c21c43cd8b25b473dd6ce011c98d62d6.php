<?php

/* node_modules/lodash/fp/flip.js */
class __TwigTemplate_23d1d818ad6cc2388ce0652774941fb8fbeb915a57504fced93509f4fd495207 extends Twig_Template
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
        $__internal_17eb934b4f7aded9858dfc5cce093b5f9d5af0b6f3fc6d4ccd817b93e25e325f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17eb934b4f7aded9858dfc5cce093b5f9d5af0b6f3fc6d4ccd817b93e25e325f->enter($__internal_17eb934b4f7aded9858dfc5cce093b5f9d5af0b6f3fc6d4ccd817b93e25e325f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/flip.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('flip', require('../flip'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_17eb934b4f7aded9858dfc5cce093b5f9d5af0b6f3fc6d4ccd817b93e25e325f->leave($__internal_17eb934b4f7aded9858dfc5cce093b5f9d5af0b6f3fc6d4ccd817b93e25e325f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/flip.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('flip', require('../flip'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/flip.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/flip.js");
    }
}
