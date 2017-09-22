<?php

/* node_modules/core-js/modules/es7.object.define-getter.js */
class __TwigTemplate_4ef5a41b783dcd393abab962f02a06d680a2e952aaa46ed65b38ee8f9278e701 extends Twig_Template
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
        $__internal_67e0c8358ea9d19e07ba7cc4bb75e7284d51444111eba9007deab9c8f452bd3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e0c8358ea9d19e07ba7cc4bb75e7284d51444111eba9007deab9c8f452bd3a->enter($__internal_67e0c8358ea9d19e07ba7cc4bb75e7284d51444111eba9007deab9c8f452bd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.object.define-getter.js"));

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
        
        $__internal_67e0c8358ea9d19e07ba7cc4bb75e7284d51444111eba9007deab9c8f452bd3a->leave($__internal_67e0c8358ea9d19e07ba7cc4bb75e7284d51444111eba9007deab9c8f452bd3a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.object.define-getter.js";
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
", "node_modules/core-js/modules/es7.object.define-getter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.object.define-getter.js");
    }
}
