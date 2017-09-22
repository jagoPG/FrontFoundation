<?php

/* node_modules/es6-iterator/test/valid-iterable.js */
class __TwigTemplate_af9d64236475846a0248adb5359f6b87a4d58e42c900341a04286b59618397f6 extends Twig_Template
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
        $__internal_9a2f1c64625430520f639fe2a6e3d852db5d2e54079b0d975ed99f3ca92402cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2f1c64625430520f639fe2a6e3d852db5d2e54079b0d975ed99f3ca92402cd->enter($__internal_9a2f1c64625430520f639fe2a6e3d852db5d2e54079b0d975ed99f3ca92402cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-iterator/test/valid-iterable.js"));

        // line 1
        echo "'use strict';

var iteratorSymbol = require('es6-symbol').iterator
  , Iterator       = require('../');

module.exports = function (t, a) {
\tvar obj;
\ta.throws(function () { t(); }, TypeError, \"Undefined\");
\ta.throws(function () { t({}); }, TypeError, \"Plain object\");
\ta.throws(function () { t({ length: 0 }); }, TypeError, \"Array-like\");
\tobj = {};
\tobj[iteratorSymbol] = function () { return new Iterator([]); };
\ta(t(obj), obj, \"Iterator\");
\tobj = [];
\ta(t(obj), obj, 'Array');
\tobj = (function () { return arguments; }());
\ta(t(obj), obj, \"Arguments\");
};
";
        
        $__internal_9a2f1c64625430520f639fe2a6e3d852db5d2e54079b0d975ed99f3ca92402cd->leave($__internal_9a2f1c64625430520f639fe2a6e3d852db5d2e54079b0d975ed99f3ca92402cd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-iterator/test/valid-iterable.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var iteratorSymbol = require('es6-symbol').iterator
  , Iterator       = require('../');

module.exports = function (t, a) {
\tvar obj;
\ta.throws(function () { t(); }, TypeError, \"Undefined\");
\ta.throws(function () { t({}); }, TypeError, \"Plain object\");
\ta.throws(function () { t({ length: 0 }); }, TypeError, \"Array-like\");
\tobj = {};
\tobj[iteratorSymbol] = function () { return new Iterator([]); };
\ta(t(obj), obj, \"Iterator\");
\tobj = [];
\ta(t(obj), obj, 'Array');
\tobj = (function () { return arguments; }());
\ta(t(obj), obj, \"Arguments\");
};
", "node_modules/es6-iterator/test/valid-iterable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-iterator/test/valid-iterable.js");
    }
}
