<?php

/* node_modules/core-js/modules/_set-species.js */
class __TwigTemplate_ec2c6cbbe35c730660aa997316fcb76e537735b967c05eddfcafbe7e63e4c9de extends Twig_Template
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
        $__internal_ba7deac14e48e6a2e26b70355e82a08cf1b8d51e78d0ebc72bff2e4f990887c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7deac14e48e6a2e26b70355e82a08cf1b8d51e78d0ebc72bff2e4f990887c9->enter($__internal_ba7deac14e48e6a2e26b70355e82a08cf1b8d51e78d0ebc72bff2e4f990887c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_set-species.js"));

        // line 1
        echo "'use strict';
var global = require('./_global');
var dP = require('./_object-dp');
var DESCRIPTORS = require('./_descriptors');
var SPECIES = require('./_wks')('species');

module.exports = function (KEY) {
  var C = global[KEY];
  if (DESCRIPTORS && C && !C[SPECIES]) dP.f(C, SPECIES, {
    configurable: true,
    get: function () { return this; }
  });
};
";
        
        $__internal_ba7deac14e48e6a2e26b70355e82a08cf1b8d51e78d0ebc72bff2e4f990887c9->leave($__internal_ba7deac14e48e6a2e26b70355e82a08cf1b8d51e78d0ebc72bff2e4f990887c9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_set-species.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var global = require('./_global');
var dP = require('./_object-dp');
var DESCRIPTORS = require('./_descriptors');
var SPECIES = require('./_wks')('species');

module.exports = function (KEY) {
  var C = global[KEY];
  if (DESCRIPTORS && C && !C[SPECIES]) dP.f(C, SPECIES, {
    configurable: true,
    get: function () { return this; }
  });
};
", "node_modules/core-js/modules/_set-species.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_set-species.js");
    }
}
