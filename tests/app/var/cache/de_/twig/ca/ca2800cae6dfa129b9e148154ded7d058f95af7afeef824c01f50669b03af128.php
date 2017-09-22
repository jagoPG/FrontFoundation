<?php

/* node_modules/core-js/library/modules/es7.object.lookup-getter.js */
class __TwigTemplate_7afbd6b8c985324b53ef6d6954e691c57f000525f081962627808ef4a232834a extends Twig_Template
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
        $__internal_eed8b607e8bb01b75ac327ba24b9ec0e8fb20eeeba8c9e6a2b3f037a91499461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed8b607e8bb01b75ac327ba24b9ec0e8fb20eeeba8c9e6a2b3f037a91499461->enter($__internal_eed8b607e8bb01b75ac327ba24b9ec0e8fb20eeeba8c9e6a2b3f037a91499461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.object.lookup-getter.js"));

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
        
        $__internal_eed8b607e8bb01b75ac327ba24b9ec0e8fb20eeeba8c9e6a2b3f037a91499461->leave($__internal_eed8b607e8bb01b75ac327ba24b9ec0e8fb20eeeba8c9e6a2b3f037a91499461_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.object.lookup-getter.js";
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
", "node_modules/core-js/library/modules/es7.object.lookup-getter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.object.lookup-getter.js");
    }
}
