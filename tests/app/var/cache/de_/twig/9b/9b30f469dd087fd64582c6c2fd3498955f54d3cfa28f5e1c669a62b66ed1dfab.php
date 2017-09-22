<?php

/* node_modules/parsleyjs/src/i18n/cs.extra.js */
class __TwigTemplate_47330cffe99eab3dca8216efee6a557a9e468ff8697549da95c7c90c027cae92 extends Twig_Template
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
        $__internal_0b3c02c2c73467cd146b0dcd1103ebfad539bba106903b9e6ec8bbdbd6aa2a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3c02c2c73467cd146b0dcd1103ebfad539bba106903b9e6ec8bbdbd6aa2a66->enter($__internal_0b3c02c2c73467cd146b0dcd1103ebfad539bba106903b9e6ec8bbdbd6aa2a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/cs.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('cs', {
  dateiso:  \"Tato položka musí být datum ve formátu RRRR-MM-DD.\",
  minwords: \"Tato položka musí mít délku nejméně %s slov.\",
  maxwords: \"Tato položka musí mít délku nejvíce %s slov.\",
  words:    \"Tato položka musí být od %s do %s slov dlouhá.\",
  gt:       \"Tato hodnota musí být větší.\",
  gte:      \"Tato hodnota musí být větší nebo rovna.\",
  lt:       \"Tato hodnota musí být menší.\",
  lte:      \"Tato hodnota musí být menší nebo rovna.\"
});
";
        
        $__internal_0b3c02c2c73467cd146b0dcd1103ebfad539bba106903b9e6ec8bbdbd6aa2a66->leave($__internal_0b3c02c2c73467cd146b0dcd1103ebfad539bba106903b9e6ec8bbdbd6aa2a66_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/cs.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('cs', {
  dateiso:  \"Tato položka musí být datum ve formátu RRRR-MM-DD.\",
  minwords: \"Tato položka musí mít délku nejméně %s slov.\",
  maxwords: \"Tato položka musí mít délku nejvíce %s slov.\",
  words:    \"Tato položka musí být od %s do %s slov dlouhá.\",
  gt:       \"Tato hodnota musí být větší.\",
  gte:      \"Tato hodnota musí být větší nebo rovna.\",
  lt:       \"Tato hodnota musí být menší.\",
  lte:      \"Tato hodnota musí být menší nebo rovna.\"
});
", "node_modules/parsleyjs/src/i18n/cs.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/cs.extra.js");
    }
}
