<?php

/* node_modules/fsevents/node_modules/inherits/inherits.js */
class __TwigTemplate_61806ca249c2391bee9d2602ddaa251bd947e7e9516218cda54f15aaaa1e6e14 extends Twig_Template
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
        $__internal_fdae8497ffd65863755a39e8c46ebb3e499ad5a17c90b1ce47a2abdc38c23aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdae8497ffd65863755a39e8c46ebb3e499ad5a17c90b1ce47a2abdc38c23aae->enter($__internal_fdae8497ffd65863755a39e8c46ebb3e499ad5a17c90b1ce47a2abdc38c23aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/inherits/inherits.js"));

        // line 1
        echo "try {
  var util = require('util');
  if (typeof util.inherits !== 'function') throw '';
  module.exports = util.inherits;
} catch (e) {
  module.exports = require('./inherits_browser.js');
}
";
        
        $__internal_fdae8497ffd65863755a39e8c46ebb3e499ad5a17c90b1ce47a2abdc38c23aae->leave($__internal_fdae8497ffd65863755a39e8c46ebb3e499ad5a17c90b1ce47a2abdc38c23aae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/inherits/inherits.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("try {
  var util = require('util');
  if (typeof util.inherits !== 'function') throw '';
  module.exports = util.inherits;
} catch (e) {
  module.exports = require('./inherits_browser.js');
}
", "node_modules/fsevents/node_modules/inherits/inherits.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/inherits/inherits.js");
    }
}
