<?php

/* node_modules/parsleyjs/src/i18n/lt.extra.js */
class __TwigTemplate_84c1923926c5941d934f3aaa6918ecd53484821c13402bcd07a56993a2227f0b extends Twig_Template
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
        $__internal_4e0bdda285ae2fc14ef364745f1179898a6237047835e8e23f011d5173a67ca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0bdda285ae2fc14ef364745f1179898a6237047835e8e23f011d5173a67ca0->enter($__internal_4e0bdda285ae2fc14ef364745f1179898a6237047835e8e23f011d5173a67ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/lt.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('lt', {
  dateiso:  \"Šis įrašas turi būti teisingo formato data (YYYY-MM-DD).\",
  minwords: \"Šis įrašas turi turėti ne mažiau kaip %s žodžių.\",
  maxwords: \"Šis įrašas turi turėti ne daugiau kaip %s žodžių.\",
  words:    \"Šis įrašas turi turėti nuo %s iki %s žodžių.\",
  gt:       \"Ši vertė turi būti didesnė.\",
  gte:      \"Ši vertė turi būti didesnė arba lygi.\",
  lt:       \"Ši vertė turi būti mažesnė.\",
  lte:      \"Ši vertė turi būti mažesnė arba lygi.\",
  notequalto: \"Ši vertė turi būti skirtinga.\"
});
";
        
        $__internal_4e0bdda285ae2fc14ef364745f1179898a6237047835e8e23f011d5173a67ca0->leave($__internal_4e0bdda285ae2fc14ef364745f1179898a6237047835e8e23f011d5173a67ca0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/lt.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('lt', {
  dateiso:  \"Šis įrašas turi būti teisingo formato data (YYYY-MM-DD).\",
  minwords: \"Šis įrašas turi turėti ne mažiau kaip %s žodžių.\",
  maxwords: \"Šis įrašas turi turėti ne daugiau kaip %s žodžių.\",
  words:    \"Šis įrašas turi turėti nuo %s iki %s žodžių.\",
  gt:       \"Ši vertė turi būti didesnė.\",
  gte:      \"Ši vertė turi būti didesnė arba lygi.\",
  lt:       \"Ši vertė turi būti mažesnė.\",
  lte:      \"Ši vertė turi būti mažesnė arba lygi.\",
  notequalto: \"Ši vertė turi būti skirtinga.\"
});
", "node_modules/parsleyjs/src/i18n/lt.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/lt.extra.js");
    }
}
