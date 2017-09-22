<?php

/* node_modules/es6-set/test/ext/copy.js */
class __TwigTemplate_14759383ba9d00e09372b2190c628d6f5f189a064ffb96045ef5533836b45cf2 extends Twig_Template
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
        $__internal_a1f7d063cce3596f9bace512b3f1c83796d738f3bed0952b9ad1d226bab19189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f7d063cce3596f9bace512b3f1c83796d738f3bed0952b9ad1d226bab19189->enter($__internal_a1f7d063cce3596f9bace512b3f1c83796d738f3bed0952b9ad1d226bab19189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/test/ext/copy.js"));

        // line 1
        echo "'use strict';

var toArray = require('es5-ext/array/to-array')
  , Set     = require('../../');

module.exports = function (t, a) {
\tvar content = ['raz', 2, true], set = new Set(content), copy;

\tcopy = t.call(set);
\ta.not(copy, set, \"Copy\");
\ta.deep(toArray(copy), content, \"Content\");
};
";
        
        $__internal_a1f7d063cce3596f9bace512b3f1c83796d738f3bed0952b9ad1d226bab19189->leave($__internal_a1f7d063cce3596f9bace512b3f1c83796d738f3bed0952b9ad1d226bab19189_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/test/ext/copy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var toArray = require('es5-ext/array/to-array')
  , Set     = require('../../');

module.exports = function (t, a) {
\tvar content = ['raz', 2, true], set = new Set(content), copy;

\tcopy = t.call(set);
\ta.not(copy, set, \"Copy\");
\ta.deep(toArray(copy), content, \"Content\");
};
", "node_modules/es6-set/test/ext/copy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/test/ext/copy.js");
    }
}
