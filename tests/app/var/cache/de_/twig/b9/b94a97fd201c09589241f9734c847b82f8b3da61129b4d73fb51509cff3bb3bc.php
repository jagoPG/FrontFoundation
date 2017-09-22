<?php

/* node_modules/parsleyjs/src/i18n/fr.extra.js */
class __TwigTemplate_7d9575bffd312e1bfa20e791e032ef37373b1ff62fc5779607e9aa1910bb0ad4 extends Twig_Template
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
        $__internal_c9b219907bee1714006695a1914ac79c995ace4adeedd3a055bf5ad554d36184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9b219907bee1714006695a1914ac79c995ace4adeedd3a055bf5ad554d36184->enter($__internal_c9b219907bee1714006695a1914ac79c995ace4adeedd3a055bf5ad554d36184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/fr.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('fr', {
  dateiso:    \"Cette valeur n'est pas une date valide (YYYY-MM-DD).\",
  minwords:   \"Cette valeur est trop courte. Elle doit contenir au moins %s mots.\",
  maxwords:   \"Cette valeur est trop longue. Elle doit contenir tout au plus %s mots.\",
  words:      \"Cette valeur est invalide. Elle doit contenir entre %s et %s mots.\",
  gt:         \"Cette valeur doit être plus grande.\",
  gte:        \"Cette valeur doit être plus grande ou égale.\",
  lt:         \"Cette valeur doit être plus petite.\",
  lte:        \"Cette valeur doit être plus petite ou égale.\",
  notequalto: \"Cette valeur doit être différente.\"
});
";
        
        $__internal_c9b219907bee1714006695a1914ac79c995ace4adeedd3a055bf5ad554d36184->leave($__internal_c9b219907bee1714006695a1914ac79c995ace4adeedd3a055bf5ad554d36184_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/fr.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('fr', {
  dateiso:    \"Cette valeur n'est pas une date valide (YYYY-MM-DD).\",
  minwords:   \"Cette valeur est trop courte. Elle doit contenir au moins %s mots.\",
  maxwords:   \"Cette valeur est trop longue. Elle doit contenir tout au plus %s mots.\",
  words:      \"Cette valeur est invalide. Elle doit contenir entre %s et %s mots.\",
  gt:         \"Cette valeur doit être plus grande.\",
  gte:        \"Cette valeur doit être plus grande ou égale.\",
  lt:         \"Cette valeur doit être plus petite.\",
  lte:        \"Cette valeur doit être plus petite ou égale.\",
  notequalto: \"Cette valeur doit être différente.\"
});
", "node_modules/parsleyjs/src/i18n/fr.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/fr.extra.js");
    }
}
