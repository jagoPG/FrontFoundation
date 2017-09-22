<?php

/* node_modules/core-js/library/modules/es7.object.lookup-setter.js */
class __TwigTemplate_602c4adf1042a0cedc8d84cc6fbc8a7cf4ae04942c11c2beb6ded58cacd0e8f2 extends Twig_Template
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
        $__internal_4b3c231cd906f946b02ef0c22bc65a6c05ad537237995f7aaa90cd90f23283f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b3c231cd906f946b02ef0c22bc65a6c05ad537237995f7aaa90cd90f23283f0->enter($__internal_4b3c231cd906f946b02ef0c22bc65a6c05ad537237995f7aaa90cd90f23283f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.object.lookup-setter.js"));

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
        
        $__internal_4b3c231cd906f946b02ef0c22bc65a6c05ad537237995f7aaa90cd90f23283f0->leave($__internal_4b3c231cd906f946b02ef0c22bc65a6c05ad537237995f7aaa90cd90f23283f0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.object.lookup-setter.js";
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
", "node_modules/core-js/library/modules/es7.object.lookup-setter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.object.lookup-setter.js");
    }
}
