<?php

/* node_modules/core-js/modules/es7.object.lookup-setter.js */
class __TwigTemplate_82c360edb1d9dc9f6e2f33c83df8a835f587fe5d752b98dc07303b65c2371290 extends Twig_Template
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
        $__internal_50ca4d039f5a33d4f34342e6ce55ef800aaa799fabafa9efcfd129dfe4202d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ca4d039f5a33d4f34342e6ce55ef800aaa799fabafa9efcfd129dfe4202d43->enter($__internal_50ca4d039f5a33d4f34342e6ce55ef800aaa799fabafa9efcfd129dfe4202d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.object.lookup-setter.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var toObject = require('./_to-object');
var toPrimitive = require('./_to-primitive');
var getPrototypeOf = require('./_object-gpo');
var getOwnPropertyDescriptor = require('./_object-gopd').f;

// B.2.2.5 Object.prototype.__lookupSetter__(P)
require('./_descriptors') && \$export(\$export.P + require('./_object-forced-pam'), 'Object', {
  __lookupSetter__: function __lookupSetter__(P) {
    var O = toObject(this);
    var K = toPrimitive(P, true);
    var D;
    do {
      if (D = getOwnPropertyDescriptor(O, K)) return D.set;
    } while (O = getPrototypeOf(O));
  }
});
";
        
        $__internal_50ca4d039f5a33d4f34342e6ce55ef800aaa799fabafa9efcfd129dfe4202d43->leave($__internal_50ca4d039f5a33d4f34342e6ce55ef800aaa799fabafa9efcfd129dfe4202d43_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.object.lookup-setter.js";
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
var toPrimitive = require('./_to-primitive');
var getPrototypeOf = require('./_object-gpo');
var getOwnPropertyDescriptor = require('./_object-gopd').f;

// B.2.2.5 Object.prototype.__lookupSetter__(P)
require('./_descriptors') && \$export(\$export.P + require('./_object-forced-pam'), 'Object', {
  __lookupSetter__: function __lookupSetter__(P) {
    var O = toObject(this);
    var K = toPrimitive(P, true);
    var D;
    do {
      if (D = getOwnPropertyDescriptor(O, K)) return D.set;
    } while (O = getPrototypeOf(O));
  }
});
", "node_modules/core-js/modules/es7.object.lookup-setter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.object.lookup-setter.js");
    }
}
