<?php

/* node_modules/core-js/modules/_is-array.js */
class __TwigTemplate_8d9d4123242cedd2ce96bdb1369815df3621cb49887759f02a9d50ae3e25b33e extends Twig_Template
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
        $__internal_db9486f24d9188ed16897c74a18884964ea95bbc2e47df430fbb237cdd569ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db9486f24d9188ed16897c74a18884964ea95bbc2e47df430fbb237cdd569ba6->enter($__internal_db9486f24d9188ed16897c74a18884964ea95bbc2e47df430fbb237cdd569ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_is-array.js"));

        // line 1
        echo "// 7.2.2 IsArray(argument)
var cof = require('./_cof');
module.exports = Array.isArray || function isArray(arg) {
  return cof(arg) == 'Array';
};
";
        
        $__internal_db9486f24d9188ed16897c74a18884964ea95bbc2e47df430fbb237cdd569ba6->leave($__internal_db9486f24d9188ed16897c74a18884964ea95bbc2e47df430fbb237cdd569ba6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_is-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 7.2.2 IsArray(argument)
var cof = require('./_cof');
module.exports = Array.isArray || function isArray(arg) {
  return cof(arg) == 'Array';
};
", "node_modules/core-js/modules/_is-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_is-array.js");
    }
}
