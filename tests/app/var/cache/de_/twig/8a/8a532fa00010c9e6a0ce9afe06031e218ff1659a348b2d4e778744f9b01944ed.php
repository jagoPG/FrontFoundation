<?php

/* node_modules/es6-weak-map/test/index.js */
class __TwigTemplate_cce88092cf7f83bd8fc7205ae0aba73f0230519b2e4aa177c0bf3a645ec1ba55 extends Twig_Template
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
        $__internal_168657f2fe430c3744daa17b5f6fa14b79cbf8b6393f5acbd1aaf4383bc65ce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168657f2fe430c3744daa17b5f6fa14b79cbf8b6393f5acbd1aaf4383bc65ce9->enter($__internal_168657f2fe430c3744daa17b5f6fa14b79cbf8b6393f5acbd1aaf4383bc65ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-weak-map/test/index.js"));

        // line 1
        echo "'use strict';

module.exports = function (T, a) {
\tvar x = {};
\ta((new T([[x, 'foo']])).get(x), 'foo');
};
";
        
        $__internal_168657f2fe430c3744daa17b5f6fa14b79cbf8b6393f5acbd1aaf4383bc65ce9->leave($__internal_168657f2fe430c3744daa17b5f6fa14b79cbf8b6393f5acbd1aaf4383bc65ce9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-weak-map/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function (T, a) {
\tvar x = {};
\ta((new T([[x, 'foo']])).get(x), 'foo');
};
", "node_modules/es6-weak-map/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-weak-map/test/index.js");
    }
}
