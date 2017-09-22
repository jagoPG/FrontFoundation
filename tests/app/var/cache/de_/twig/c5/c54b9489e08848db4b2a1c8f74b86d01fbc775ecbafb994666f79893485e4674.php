<?php

/* node_modules/es6-symbol/test/index.js */
class __TwigTemplate_ac0b3b1c4ed37f4d612f998e4ceb1f62815a1a14a262f8136859e7205e45f77e extends Twig_Template
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
        $__internal_f6515bf63ab92d857a210fc5c82b6bd13434f058ebe35b787e68a6c46ea60af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6515bf63ab92d857a210fc5c82b6bd13434f058ebe35b787e68a6c46ea60af1->enter($__internal_f6515bf63ab92d857a210fc5c82b6bd13434f058ebe35b787e68a6c46ea60af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-symbol/test/index.js"));

        // line 1
        echo "'use strict';

var d = require('d')

  , defineProperty = Object.defineProperty;

module.exports = function (T, a) {
\tvar symbol = T('test'), x = {};
\tdefineProperty(x, symbol, d('foo'));
\ta(x.test, undefined, \"Name\");
\ta(x[symbol], 'foo', \"Get\");
};
";
        
        $__internal_f6515bf63ab92d857a210fc5c82b6bd13434f058ebe35b787e68a6c46ea60af1->leave($__internal_f6515bf63ab92d857a210fc5c82b6bd13434f058ebe35b787e68a6c46ea60af1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-symbol/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var d = require('d')

  , defineProperty = Object.defineProperty;

module.exports = function (T, a) {
\tvar symbol = T('test'), x = {};
\tdefineProperty(x, symbol, d('foo'));
\ta(x.test, undefined, \"Name\");
\ta(x[symbol], 'foo', \"Get\");
};
", "node_modules/es6-symbol/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-symbol/test/index.js");
    }
}
