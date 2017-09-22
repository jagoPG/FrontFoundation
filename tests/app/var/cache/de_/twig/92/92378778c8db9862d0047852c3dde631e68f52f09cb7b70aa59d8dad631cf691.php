<?php

/* node_modules/core-js/modules/library/_set-species.js */
class __TwigTemplate_f39bc14a63d487c332a6d858a332ffcdb888286a6a2a3a1675c5d08603104e3e extends Twig_Template
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
        $__internal_32b05c112092e6c7d1ff9cf404210513241199b8ef84a35481a2c9221216ff05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b05c112092e6c7d1ff9cf404210513241199b8ef84a35481a2c9221216ff05->enter($__internal_32b05c112092e6c7d1ff9cf404210513241199b8ef84a35481a2c9221216ff05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/library/_set-species.js"));

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
        
        $__internal_32b05c112092e6c7d1ff9cf404210513241199b8ef84a35481a2c9221216ff05->leave($__internal_32b05c112092e6c7d1ff9cf404210513241199b8ef84a35481a2c9221216ff05_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/library/_set-species.js";
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
", "node_modules/core-js/modules/library/_set-species.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/library/_set-species.js");
    }
}
