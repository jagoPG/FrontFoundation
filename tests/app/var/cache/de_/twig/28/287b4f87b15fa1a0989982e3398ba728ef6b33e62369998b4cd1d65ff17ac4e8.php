<?php

/* node_modules/parsleyjs/src/i18n/ro.extra.js */
class __TwigTemplate_065d87c03f5a6cff393c6dd43bd635a15aa3b5c16d71bff286508e96fcdac173 extends Twig_Template
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
        $__internal_d176dbd1ac9e1bc7a977c348e509d98cf273716c5c9a98ed987f6538e3517c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d176dbd1ac9e1bc7a977c348e509d98cf273716c5c9a98ed987f6538e3517c9e->enter($__internal_d176dbd1ac9e1bc7a977c348e509d98cf273716c5c9a98ed987f6538e3517c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/ro.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('ro', {
  dateiso:    \"Trebuie să fie o dată corectă (YYYY-MM-DD).\",
  minwords:   \"Textul e prea scurt. Trebuie să aibă cel puțin %s cuvinte.\",
  maxwords:   \"Textul e prea lung. Trebuie să aibă cel mult %s cuvinte.\",
  words:      \"Textul trebuie să aibă cel puțin %s și cel mult %s caractere.\",
  gt:         \"Valoarea ar trebui să fie mai mare.\",
  gte:        \"Valoarea ar trebui să fie mai mare sau egală.\",
  lt:         \"Valoarea ar trebui să fie mai mică.\",
  lte:        \"Valoarea ar trebui să fie mai mică sau egală.\",
  notequalto: \"Valoarea ar trebui să fie diferită.\"
});
";
        
        $__internal_d176dbd1ac9e1bc7a977c348e509d98cf273716c5c9a98ed987f6538e3517c9e->leave($__internal_d176dbd1ac9e1bc7a977c348e509d98cf273716c5c9a98ed987f6538e3517c9e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/ro.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('ro', {
  dateiso:    \"Trebuie să fie o dată corectă (YYYY-MM-DD).\",
  minwords:   \"Textul e prea scurt. Trebuie să aibă cel puțin %s cuvinte.\",
  maxwords:   \"Textul e prea lung. Trebuie să aibă cel mult %s cuvinte.\",
  words:      \"Textul trebuie să aibă cel puțin %s și cel mult %s caractere.\",
  gt:         \"Valoarea ar trebui să fie mai mare.\",
  gte:        \"Valoarea ar trebui să fie mai mare sau egală.\",
  lt:         \"Valoarea ar trebui să fie mai mică.\",
  lte:        \"Valoarea ar trebui să fie mai mică sau egală.\",
  notequalto: \"Valoarea ar trebui să fie diferită.\"
});
", "node_modules/parsleyjs/src/i18n/ro.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/ro.extra.js");
    }
}
