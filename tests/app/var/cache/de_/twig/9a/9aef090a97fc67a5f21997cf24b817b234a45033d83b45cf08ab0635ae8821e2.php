<?php

/* node_modules/es6-symbol/is-symbol.js */
class __TwigTemplate_168b320a9def76a5da425675a871343339408e8109a1ab64f24e30f17512a222 extends Twig_Template
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
        $__internal_6fc87489d9af29c2936df49e109fb3d1effbe2f23d31640ab99262989959b74e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc87489d9af29c2936df49e109fb3d1effbe2f23d31640ab99262989959b74e->enter($__internal_6fc87489d9af29c2936df49e109fb3d1effbe2f23d31640ab99262989959b74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-symbol/is-symbol.js"));

        // line 1
        echo "'use strict';

module.exports = function (x) {
\tif (!x) return false;
\tif (typeof x === 'symbol') return true;
\tif (!x.constructor) return false;
\tif (x.constructor.name !== 'Symbol') return false;
\treturn (x[x.constructor.toStringTag] === 'Symbol');
};
";
        
        $__internal_6fc87489d9af29c2936df49e109fb3d1effbe2f23d31640ab99262989959b74e->leave($__internal_6fc87489d9af29c2936df49e109fb3d1effbe2f23d31640ab99262989959b74e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-symbol/is-symbol.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function (x) {
\tif (!x) return false;
\tif (typeof x === 'symbol') return true;
\tif (!x.constructor) return false;
\tif (x.constructor.name !== 'Symbol') return false;
\treturn (x[x.constructor.toStringTag] === 'Symbol');
};
", "node_modules/es6-symbol/is-symbol.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-symbol/is-symbol.js");
    }
}
