<?php

/* node_modules/core-js/library/modules/es7.object.define-getter.js */
class __TwigTemplate_d9ccc4d3cc965d6dae297e625da4b84b6ae6dd5bdbb8892f08a25759bd5d30f8 extends Twig_Template
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
        $__internal_8cd1bb5de91b76a61ef131c2ce4b4f3f92d137fd0bf85293f4d6dd39941cacb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd1bb5de91b76a61ef131c2ce4b4f3f92d137fd0bf85293f4d6dd39941cacb8->enter($__internal_8cd1bb5de91b76a61ef131c2ce4b4f3f92d137fd0bf85293f4d6dd39941cacb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.object.define-getter.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var toObject = require('./_to-object');
var aFunction = require('./_a-function');
var \$defineProperty = require('./_object-dp');

// B.2.2.2 Object.prototype.__defineGetter__(P, getter)
require('./_descriptors') && \$export(\$export.P + require('./_object-forced-pam'), 'Object', {
  __defineGetter__: function __defineGetter__(P, getter) {
    \$defineProperty.f(toObject(this), P, { get: aFunction(getter), enumerable: true, configurable: true });
  }
});
";
        
        $__internal_8cd1bb5de91b76a61ef131c2ce4b4f3f92d137fd0bf85293f4d6dd39941cacb8->leave($__internal_8cd1bb5de91b76a61ef131c2ce4b4f3f92d137fd0bf85293f4d6dd39941cacb8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.object.define-getter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var \$export = require('./_export');
var toObject = require('./_to-object');
var aFunction = require('./_a-function');
var \$defineProperty = require('./_object-dp');

// B.2.2.2 Object.prototype.__defineGetter__(P, getter)
require('./_descriptors') && \$export(\$export.P + require('./_object-forced-pam'), 'Object', {
  __defineGetter__: function __defineGetter__(P, getter) {
    \$defineProperty.f(toObject(this), P, { get: aFunction(getter), enumerable: true, configurable: true });
  }
});
", "node_modules/core-js/library/modules/es7.object.define-getter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.object.define-getter.js");
    }
}
