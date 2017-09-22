<?php

/* node_modules/es6-set/ext/filter.js */
class __TwigTemplate_86bbfeffa0877431ec7c9a06cf4b973f3fad467e5fdb8a169036a76bebe4aac7 extends Twig_Template
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
        $__internal_5faec8e5d7eb9caa4cad1f889b286f6cc11b5a4a473026bbc441bbaee16b689d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5faec8e5d7eb9caa4cad1f889b286f6cc11b5a4a473026bbc441bbaee16b689d->enter($__internal_5faec8e5d7eb9caa4cad1f889b286f6cc11b5a4a473026bbc441bbaee16b689d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/ext/filter.js"));

        // line 1
        echo "'use strict';

var callable = require('es5-ext/object/valid-callable')
  , forOf    = require('es6-iterator/for-of')
  , isSet    = require('../is-set')
  , Set      = require('../')

  , call = Function.prototype.call;

module.exports = function (cb/*, thisArg*/) {
\tvar thisArg = arguments[1], result;
\tcallable(cb);
\tresult = isSet(this) ? new this.constructor() : new Set();
\tforOf(this, function (value) {
\t\tif (call.call(cb, thisArg, value)) result.add(value);
\t});
\treturn result;
};
";
        
        $__internal_5faec8e5d7eb9caa4cad1f889b286f6cc11b5a4a473026bbc441bbaee16b689d->leave($__internal_5faec8e5d7eb9caa4cad1f889b286f6cc11b5a4a473026bbc441bbaee16b689d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/ext/filter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var callable = require('es5-ext/object/valid-callable')
  , forOf    = require('es6-iterator/for-of')
  , isSet    = require('../is-set')
  , Set      = require('../')

  , call = Function.prototype.call;

module.exports = function (cb/*, thisArg*/) {
\tvar thisArg = arguments[1], result;
\tcallable(cb);
\tresult = isSet(this) ? new this.constructor() : new Set();
\tforOf(this, function (value) {
\t\tif (call.call(cb, thisArg, value)) result.add(value);
\t});
\treturn result;
};
", "node_modules/es6-set/ext/filter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/ext/filter.js");
    }
}
