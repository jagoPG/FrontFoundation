<?php

/* node_modules/es6-weak-map/test/is-native-implemented.js */
class __TwigTemplate_cc268a4e2dc7acc17015157c5418f678cdc3d2f301840e14a7b5d23ef9008877 extends Twig_Template
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
        $__internal_ccd65016b37dee9f0dda432297814069b2173aac5228143b77bf6f926b93a09c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd65016b37dee9f0dda432297814069b2173aac5228143b77bf6f926b93a09c->enter($__internal_ccd65016b37dee9f0dda432297814069b2173aac5228143b77bf6f926b93a09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-weak-map/test/is-native-implemented.js"));

        // line 1
        echo "'use strict';

module.exports = function (t, a) { a(typeof t, 'boolean'); };
";
        
        $__internal_ccd65016b37dee9f0dda432297814069b2173aac5228143b77bf6f926b93a09c->leave($__internal_ccd65016b37dee9f0dda432297814069b2173aac5228143b77bf6f926b93a09c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-weak-map/test/is-native-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function (t, a) { a(typeof t, 'boolean'); };
", "node_modules/es6-weak-map/test/is-native-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-weak-map/test/is-native-implemented.js");
    }
}
