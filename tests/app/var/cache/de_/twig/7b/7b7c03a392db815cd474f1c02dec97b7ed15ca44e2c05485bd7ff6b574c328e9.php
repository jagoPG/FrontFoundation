<?php

/* node_modules/deep-equal/lib/keys.js */
class __TwigTemplate_8a9d29a9ded9c4d2d98ccbc51a1f3fe7dabb039f0eefc5ce64538f59fada07b7 extends Twig_Template
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
        $__internal_d9773203e8f48045b59fcc3e399a37650ea3dcf1658355faeba68b064630cea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9773203e8f48045b59fcc3e399a37650ea3dcf1658355faeba68b064630cea6->enter($__internal_d9773203e8f48045b59fcc3e399a37650ea3dcf1658355faeba68b064630cea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/deep-equal/lib/keys.js"));

        // line 1
        echo "exports = module.exports = typeof Object.keys === 'function'
  ? Object.keys : shim;

exports.shim = shim;
function shim (obj) {
  var keys = [];
  for (var key in obj) keys.push(key);
  return keys;
}
";
        
        $__internal_d9773203e8f48045b59fcc3e399a37650ea3dcf1658355faeba68b064630cea6->leave($__internal_d9773203e8f48045b59fcc3e399a37650ea3dcf1658355faeba68b064630cea6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/deep-equal/lib/keys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("exports = module.exports = typeof Object.keys === 'function'
  ? Object.keys : shim;

exports.shim = shim;
function shim (obj) {
  var keys = [];
  for (var key in obj) keys.push(key);
  return keys;
}
", "node_modules/deep-equal/lib/keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/deep-equal/lib/keys.js");
    }
}
