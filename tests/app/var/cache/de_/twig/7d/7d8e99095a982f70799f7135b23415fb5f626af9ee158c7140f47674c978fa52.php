<?php

/* node_modules/core-js/library/modules/_set-species.js */
class __TwigTemplate_693b3d6eb52eccf3f9ec4186ec0a5058e8df5476bc4d7ff5c655d103061f05f5 extends Twig_Template
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
        $__internal_96527c18b14bd0ad5a639ccae188dee4a53aa8384b11009247dda6e73ce9fdf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96527c18b14bd0ad5a639ccae188dee4a53aa8384b11009247dda6e73ce9fdf3->enter($__internal_96527c18b14bd0ad5a639ccae188dee4a53aa8384b11009247dda6e73ce9fdf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_set-species.js"));

        // line 1
        echo "'use strict';
var global = require('./_global');
var core = require('./_core');
var dP = require('./_object-dp');
var DESCRIPTORS = require('./_descriptors');
var SPECIES = require('./_wks')('species');

module.exports = function (KEY) {
  var C = typeof core[KEY] == 'function' ? core[KEY] : global[KEY];
  if (DESCRIPTORS && C && !C[SPECIES]) dP.f(C, SPECIES, {
    configurable: true,
    get: function () { return this; }
  });
};
";
        
        $__internal_96527c18b14bd0ad5a639ccae188dee4a53aa8384b11009247dda6e73ce9fdf3->leave($__internal_96527c18b14bd0ad5a639ccae188dee4a53aa8384b11009247dda6e73ce9fdf3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_set-species.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var global = require('./_global');
var core = require('./_core');
var dP = require('./_object-dp');
var DESCRIPTORS = require('./_descriptors');
var SPECIES = require('./_wks')('species');

module.exports = function (KEY) {
  var C = typeof core[KEY] == 'function' ? core[KEY] : global[KEY];
  if (DESCRIPTORS && C && !C[SPECIES]) dP.f(C, SPECIES, {
    configurable: true,
    get: function () { return this; }
  });
};
", "node_modules/core-js/library/modules/_set-species.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_set-species.js");
    }
}
