<?php

/* node_modules/is-builtin-module/index.js */
class __TwigTemplate_59b49a50c1258e209b2bc3b0b09e5f35093fa64ecd2a7f0f33d0feaaebe62e84 extends Twig_Template
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
        $__internal_6e498a171e322a13107f5c39d0e8aa40ed5c7fe5651a09475813352946412d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e498a171e322a13107f5c39d0e8aa40ed5c7fe5651a09475813352946412d73->enter($__internal_6e498a171e322a13107f5c39d0e8aa40ed5c7fe5651a09475813352946412d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-builtin-module/index.js"));

        // line 1
        echo "'use strict';
var builtinModules = require('builtin-modules');

module.exports = function (str) {
\tif (typeof str !== 'string') {
\t\tthrow new TypeError('Expected a string');
\t}

\treturn builtinModules.indexOf(str) !== -1;
};
";
        
        $__internal_6e498a171e322a13107f5c39d0e8aa40ed5c7fe5651a09475813352946412d73->leave($__internal_6e498a171e322a13107f5c39d0e8aa40ed5c7fe5651a09475813352946412d73_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-builtin-module/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var builtinModules = require('builtin-modules');

module.exports = function (str) {
\tif (typeof str !== 'string') {
\t\tthrow new TypeError('Expected a string');
\t}

\treturn builtinModules.indexOf(str) !== -1;
};
", "node_modules/is-builtin-module/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-builtin-module/index.js");
    }
}
