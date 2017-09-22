<?php

/* node_modules/es6-map/index.js */
class __TwigTemplate_8330e9999d12f94dcb1a9e075cceaaea58ce45455930a79fe7a0675f2fbab971 extends Twig_Template
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
        $__internal_73b58da6a1f224b8449b128ba7d8e8748946fcef41858490cbc62b3f1cbd6ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b58da6a1f224b8449b128ba7d8e8748946fcef41858490cbc62b3f1cbd6ee0->enter($__internal_73b58da6a1f224b8449b128ba7d8e8748946fcef41858490cbc62b3f1cbd6ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-map/index.js"));

        // line 1
        echo "'use strict';

module.exports = require('./is-implemented')() ? Map : require('./polyfill');
";
        
        $__internal_73b58da6a1f224b8449b128ba7d8e8748946fcef41858490cbc62b3f1cbd6ee0->leave($__internal_73b58da6a1f224b8449b128ba7d8e8748946fcef41858490cbc62b3f1cbd6ee0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-map/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = require('./is-implemented')() ? Map : require('./polyfill');
", "node_modules/es6-map/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-map/index.js");
    }
}
