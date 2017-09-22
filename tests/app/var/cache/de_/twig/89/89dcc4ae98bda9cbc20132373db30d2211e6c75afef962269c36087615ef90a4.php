<?php

/* node_modules/es6-symbol/index.js */
class __TwigTemplate_f9c66e7f8e4fb5cec7767aea10c5ef4ebd5f919a12cde1f6a4aab5d98e1be1e1 extends Twig_Template
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
        $__internal_110a68fd362d2085ad8c4c19abfef11a921115d61043decc6d2f2a99167c0494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110a68fd362d2085ad8c4c19abfef11a921115d61043decc6d2f2a99167c0494->enter($__internal_110a68fd362d2085ad8c4c19abfef11a921115d61043decc6d2f2a99167c0494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-symbol/index.js"));

        // line 1
        echo "'use strict';

module.exports = require('./is-implemented')() ? Symbol : require('./polyfill');
";
        
        $__internal_110a68fd362d2085ad8c4c19abfef11a921115d61043decc6d2f2a99167c0494->leave($__internal_110a68fd362d2085ad8c4c19abfef11a921115d61043decc6d2f2a99167c0494_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-symbol/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = require('./is-implemented')() ? Symbol : require('./polyfill');
", "node_modules/es6-symbol/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-symbol/index.js");
    }
}
