<?php

/* node_modules/core-js/library/modules/es6.object.get-own-property-names.js */
class __TwigTemplate_c642a10017abce54dbf5df79c9a1ba087b4cdfed4f23e8bf59276596570c841f extends Twig_Template
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
        $__internal_d326e5b42f2802889552d95a656da302099862c33850358cc4350417f67647ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d326e5b42f2802889552d95a656da302099862c33850358cc4350417f67647ec->enter($__internal_d326e5b42f2802889552d95a656da302099862c33850358cc4350417f67647ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.object.get-own-property-names.js"));

        // line 1
        echo "// 19.1.2.7 Object.getOwnPropertyNames(O)
require('./_object-sap')('getOwnPropertyNames', function () {
  return require('./_object-gopn-ext').f;
});
";
        
        $__internal_d326e5b42f2802889552d95a656da302099862c33850358cc4350417f67647ec->leave($__internal_d326e5b42f2802889552d95a656da302099862c33850358cc4350417f67647ec_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.object.get-own-property-names.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 19.1.2.7 Object.getOwnPropertyNames(O)
require('./_object-sap')('getOwnPropertyNames', function () {
  return require('./_object-gopn-ext').f;
});
", "node_modules/core-js/library/modules/es6.object.get-own-property-names.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.object.get-own-property-names.js");
    }
}
