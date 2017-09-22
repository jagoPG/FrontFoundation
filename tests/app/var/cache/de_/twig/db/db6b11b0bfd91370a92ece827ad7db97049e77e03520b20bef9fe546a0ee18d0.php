<?php

/* node_modules/core-js/modules/es7.object.lookup-getter.js */
class __TwigTemplate_9f0fc379b2e21ba20d7eb46cdcd548ddd6891714f3352a1bbd670f5317b458e8 extends Twig_Template
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
        $__internal_4bc617da9b8000fc755c81c8caaadf9b5d8c3cdab01b17ee454da9099eca0044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc617da9b8000fc755c81c8caaadf9b5d8c3cdab01b17ee454da9099eca0044->enter($__internal_4bc617da9b8000fc755c81c8caaadf9b5d8c3cdab01b17ee454da9099eca0044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.object.lookup-getter.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var toObject = require('./_to-object');
var toPrimitive = require('./_to-primitive');
var getPrototypeOf = require('./_object-gpo');
var getOwnPropertyDescriptor = require('./_object-gopd').f;

// B.2.2.4 Object.prototype.__lookupGetter__(P)
require('./_descriptors') && \$export(\$export.P + require('./_object-forced-pam'), 'Object', {
  __lookupGetter__: function __lookupGetter__(P) {
    var O = toObject(this);
    var K = toPrimitive(P, true);
    var D;
    do {
      if (D = getOwnPropertyDescriptor(O, K)) return D.get;
    } while (O = getPrototypeOf(O));
  }
});
";
        
        $__internal_4bc617da9b8000fc755c81c8caaadf9b5d8c3cdab01b17ee454da9099eca0044->leave($__internal_4bc617da9b8000fc755c81c8caaadf9b5d8c3cdab01b17ee454da9099eca0044_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.object.lookup-getter.js";
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

// B.2.2.4 Object.prototype.__lookupGetter__(P)
require('./_descriptors') && \$export(\$export.P + require('./_object-forced-pam'), 'Object', {
  __lookupGetter__: function __lookupGetter__(P) {
    var O = toObject(this);
    var K = toPrimitive(P, true);
    var D;
    do {
      if (D = getOwnPropertyDescriptor(O, K)) return D.get;
    } while (O = getPrototypeOf(O));
  }
});
", "node_modules/core-js/modules/es7.object.lookup-getter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.object.lookup-getter.js");
    }
}
