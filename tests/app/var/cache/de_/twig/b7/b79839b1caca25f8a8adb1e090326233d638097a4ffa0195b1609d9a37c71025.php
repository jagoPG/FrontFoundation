<?php

/* node_modules/core-js/library/modules/_wks-define.js */
class __TwigTemplate_7d0249f74826d115ff82870825b5dc62adcdd7874f712cf3671032dc2dae76f7 extends Twig_Template
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
        $__internal_a70eca6a99ee5e5669ac779c4ff0c579c637b18b1a2b9bc92aeddfcaff88f0cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a70eca6a99ee5e5669ac779c4ff0c579c637b18b1a2b9bc92aeddfcaff88f0cd->enter($__internal_a70eca6a99ee5e5669ac779c4ff0c579c637b18b1a2b9bc92aeddfcaff88f0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_wks-define.js"));

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
        
        $__internal_a70eca6a99ee5e5669ac779c4ff0c579c637b18b1a2b9bc92aeddfcaff88f0cd->leave($__internal_a70eca6a99ee5e5669ac779c4ff0c579c637b18b1a2b9bc92aeddfcaff88f0cd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_wks-define.js";
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
", "node_modules/core-js/library/modules/_wks-define.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_wks-define.js");
    }
}
