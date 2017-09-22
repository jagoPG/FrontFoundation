<?php

/* node_modules/es6-map/test/lib/iterator.js */
class __TwigTemplate_e5988c72b097fa47ff6c136c8da26710ae06d0c20cabb899f6c447e28e17ea92 extends Twig_Template
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
        $__internal_e37b8fa09bf9aa1843c728f944b5c009b2291e1126969df923ee3c1169dbbe8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37b8fa09bf9aa1843c728f944b5c009b2291e1126969df923ee3c1169dbbe8a->enter($__internal_e37b8fa09bf9aa1843c728f944b5c009b2291e1126969df923ee3c1169dbbe8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-map/test/lib/iterator.js"));

        // line 1
        echo "'use strict';

var Map     = require('../../polyfill')
  , toArray = require('es5-ext/array/to-array');

module.exports = function (T, a) {
\tvar arr = [['raz', 'one'], ['dwa', 'two']], map = new Map(arr);

\ta.deep(toArray(new T(map)), arr, \"Default\");
\ta.deep(toArray(new T(map, 'key+value')), arr, \"Key & Value\");
\ta.deep(toArray(new T(map, 'value')), ['one', 'two'], \"Value\");
\ta.deep(toArray(new T(map, 'key')), ['raz', 'dwa'], \"Value\");
};
";
        
        $__internal_e37b8fa09bf9aa1843c728f944b5c009b2291e1126969df923ee3c1169dbbe8a->leave($__internal_e37b8fa09bf9aa1843c728f944b5c009b2291e1126969df923ee3c1169dbbe8a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-map/test/lib/iterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var Map     = require('../../polyfill')
  , toArray = require('es5-ext/array/to-array');

module.exports = function (T, a) {
\tvar arr = [['raz', 'one'], ['dwa', 'two']], map = new Map(arr);

\ta.deep(toArray(new T(map)), arr, \"Default\");
\ta.deep(toArray(new T(map, 'key+value')), arr, \"Key & Value\");
\ta.deep(toArray(new T(map, 'value')), ['one', 'two'], \"Value\");
\ta.deep(toArray(new T(map, 'key')), ['raz', 'dwa'], \"Value\");
};
", "node_modules/es6-map/test/lib/iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-map/test/lib/iterator.js");
    }
}
