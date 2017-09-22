<?php

/* node_modules/core-js/modules/es6.object.get-own-property-names.js */
class __TwigTemplate_445fb55d806782965b8691aee11f73e5ebdcd590ab240b29320311c5d20bdb08 extends Twig_Template
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
        $__internal_1d36bdd820a47b4f878fe22e2c97a25688632ceece47f50718f553bbf81f68c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d36bdd820a47b4f878fe22e2c97a25688632ceece47f50718f553bbf81f68c1->enter($__internal_1d36bdd820a47b4f878fe22e2c97a25688632ceece47f50718f553bbf81f68c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.object.get-own-property-names.js"));

        // line 1
        echo "// 19.1.2.7 Object.getOwnPropertyNames(O)
require('./_object-sap')('getOwnPropertyNames', function () {
  return require('./_object-gopn-ext').f;
});
";
        
        $__internal_1d36bdd820a47b4f878fe22e2c97a25688632ceece47f50718f553bbf81f68c1->leave($__internal_1d36bdd820a47b4f878fe22e2c97a25688632ceece47f50718f553bbf81f68c1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.object.get-own-property-names.js";
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
", "node_modules/core-js/modules/es6.object.get-own-property-names.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.object.get-own-property-names.js");
    }
}
