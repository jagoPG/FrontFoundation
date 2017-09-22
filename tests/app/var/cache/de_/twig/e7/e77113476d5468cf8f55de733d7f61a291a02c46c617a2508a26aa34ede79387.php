<?php

/* node_modules/core-js/library/modules/es7.object.define-setter.js */
class __TwigTemplate_dfe88f0f5f96f82f59ec7efcd2805feafff654b5ef5da50f2163aefd8f229d62 extends Twig_Template
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
        $__internal_06a5f2e88595aa8175f996050b33fb905748d800bc486c1be0f2fd2fb88c23f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a5f2e88595aa8175f996050b33fb905748d800bc486c1be0f2fd2fb88c23f3->enter($__internal_06a5f2e88595aa8175f996050b33fb905748d800bc486c1be0f2fd2fb88c23f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.object.define-setter.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var toObject = require('./_to-object');
var aFunction = require('./_a-function');
var \$defineProperty = require('./_object-dp');

// B.2.2.3 Object.prototype.__defineSetter__(P, setter)
require('./_descriptors') && \$export(\$export.P + require('./_object-forced-pam'), 'Object', {
  __defineSetter__: function __defineSetter__(P, setter) {
    \$defineProperty.f(toObject(this), P, { set: aFunction(setter), enumerable: true, configurable: true });
  }
});
";
        
        $__internal_06a5f2e88595aa8175f996050b33fb905748d800bc486c1be0f2fd2fb88c23f3->leave($__internal_06a5f2e88595aa8175f996050b33fb905748d800bc486c1be0f2fd2fb88c23f3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.object.define-setter.js";
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

// B.2.2.3 Object.prototype.__defineSetter__(P, setter)
require('./_descriptors') && \$export(\$export.P + require('./_object-forced-pam'), 'Object', {
  __defineSetter__: function __defineSetter__(P, setter) {
    \$defineProperty.f(toObject(this), P, { set: aFunction(setter), enumerable: true, configurable: true });
  }
});
", "node_modules/core-js/library/modules/es7.object.define-setter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.object.define-setter.js");
    }
}
