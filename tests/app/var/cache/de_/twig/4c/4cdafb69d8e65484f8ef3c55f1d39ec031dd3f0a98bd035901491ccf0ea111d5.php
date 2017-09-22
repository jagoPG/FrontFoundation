<?php

/* node_modules/core-js/modules/_wks-define.js */
class __TwigTemplate_c274621b8bad4279ac4bc3b536b6a2415912e414f3366a548da05cb4b50ac173 extends Twig_Template
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
        $__internal_c8a17afa8f6fcf883f7f58c53b1a76cb9f8b0f07330ae20e63e9f38ff8a6952e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a17afa8f6fcf883f7f58c53b1a76cb9f8b0f07330ae20e63e9f38ff8a6952e->enter($__internal_c8a17afa8f6fcf883f7f58c53b1a76cb9f8b0f07330ae20e63e9f38ff8a6952e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_wks-define.js"));

        // line 1
        echo "var global = require('./_global');
var core = require('./_core');
var LIBRARY = require('./_library');
var wksExt = require('./_wks-ext');
var defineProperty = require('./_object-dp').f;
module.exports = function (name) {
  var \$Symbol = core.Symbol || (core.Symbol = LIBRARY ? {} : global.Symbol || {});
  if (name.charAt(0) != '_' && !(name in \$Symbol)) defineProperty(\$Symbol, name, { value: wksExt.f(name) });
};
";
        
        $__internal_c8a17afa8f6fcf883f7f58c53b1a76cb9f8b0f07330ae20e63e9f38ff8a6952e->leave($__internal_c8a17afa8f6fcf883f7f58c53b1a76cb9f8b0f07330ae20e63e9f38ff8a6952e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_wks-define.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var global = require('./_global');
var core = require('./_core');
var LIBRARY = require('./_library');
var wksExt = require('./_wks-ext');
var defineProperty = require('./_object-dp').f;
module.exports = function (name) {
  var \$Symbol = core.Symbol || (core.Symbol = LIBRARY ? {} : global.Symbol || {});
  if (name.charAt(0) != '_' && !(name in \$Symbol)) defineProperty(\$Symbol, name, { value: wksExt.f(name) });
};
", "node_modules/core-js/modules/_wks-define.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_wks-define.js");
    }
}
