<?php

/* node_modules/es6-set/test/lib/iterator.js */
class __TwigTemplate_ad1824aa7b942e1166cc55bd83e87155946263f5c2c5a46757e02e9c8596199c extends Twig_Template
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
        $__internal_42270b1b84c5ba60f5bcc5c72aa8874691b0c2f6091c15345945672f4f0733de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42270b1b84c5ba60f5bcc5c72aa8874691b0c2f6091c15345945672f4f0733de->enter($__internal_42270b1b84c5ba60f5bcc5c72aa8874691b0c2f6091c15345945672f4f0733de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/test/lib/iterator.js"));

        // line 1
        echo "'use strict';

var Set     = require('../../polyfill')
  , toArray = require('es5-ext/array/to-array');

module.exports = function (T, a) {
\tvar set = new Set(['raz', 'dwa']);

\ta.deep(toArray(new T(set)), ['raz', 'dwa'], \"Default\");
\ta.deep(toArray(new T(set, 'key+value')), [['raz', 'raz'], ['dwa', 'dwa']],
\t\t\"Key & Value\");
\ta.deep(toArray(new T(set, 'value')), ['raz', 'dwa'], \"Other\");
};
";
        
        $__internal_42270b1b84c5ba60f5bcc5c72aa8874691b0c2f6091c15345945672f4f0733de->leave($__internal_42270b1b84c5ba60f5bcc5c72aa8874691b0c2f6091c15345945672f4f0733de_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/test/lib/iterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var Set     = require('../../polyfill')
  , toArray = require('es5-ext/array/to-array');

module.exports = function (T, a) {
\tvar set = new Set(['raz', 'dwa']);

\ta.deep(toArray(new T(set)), ['raz', 'dwa'], \"Default\");
\ta.deep(toArray(new T(set, 'key+value')), [['raz', 'raz'], ['dwa', 'dwa']],
\t\t\"Key & Value\");
\ta.deep(toArray(new T(set, 'value')), ['raz', 'dwa'], \"Other\");
};
", "node_modules/es6-set/test/lib/iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/test/lib/iterator.js");
    }
}
