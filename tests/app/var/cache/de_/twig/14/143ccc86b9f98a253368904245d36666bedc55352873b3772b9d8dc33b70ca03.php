<?php

/* node_modules/parsleyjs/src/i18n/de.extra.js */
class __TwigTemplate_4acd39ca936f163ae3558df35e6b506c5c2275b74129af9f51bdfe2897e595f1 extends Twig_Template
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
        $__internal_9b89fd0b337e52826e8fd100ee93a8aab662fdaac64c65febe6560b23a60f11b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b89fd0b337e52826e8fd100ee93a8aab662fdaac64c65febe6560b23a60f11b->enter($__internal_9b89fd0b337e52826e8fd100ee93a8aab662fdaac64c65febe6560b23a60f11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/de.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('de', {
  dateiso:  \"Die Eingabe muss ein gültiges Datum sein (YYYY-MM-DD).\",
  minwords: \"Die Eingabe ist zu kurz. Sie muss aus %s oder mehr Wörtern bestehen.\",
  maxwords: \"Die Eingabe ist zu lang. Sie muss aus %s oder weniger Wörtern bestehen.\",
  words:    \"Die Länge der Eingabe ist ungültig. Sie muss zwischen %s und %s Wörter enthalten.\",
  gt:       \"Die Eingabe muss größer sein.\",
  gte:      \"Die Eingabe muss größer oder gleich sein.\",
  lt:       \"Die Eingabe muss kleiner sein.\",
  lte:      \"Die Eingabe muss kleiner oder gleich sein.\"
});
";
        
        $__internal_9b89fd0b337e52826e8fd100ee93a8aab662fdaac64c65febe6560b23a60f11b->leave($__internal_9b89fd0b337e52826e8fd100ee93a8aab662fdaac64c65febe6560b23a60f11b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/de.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('de', {
  dateiso:  \"Die Eingabe muss ein gültiges Datum sein (YYYY-MM-DD).\",
  minwords: \"Die Eingabe ist zu kurz. Sie muss aus %s oder mehr Wörtern bestehen.\",
  maxwords: \"Die Eingabe ist zu lang. Sie muss aus %s oder weniger Wörtern bestehen.\",
  words:    \"Die Länge der Eingabe ist ungültig. Sie muss zwischen %s und %s Wörter enthalten.\",
  gt:       \"Die Eingabe muss größer sein.\",
  gte:      \"Die Eingabe muss größer oder gleich sein.\",
  lt:       \"Die Eingabe muss kleiner sein.\",
  lte:      \"Die Eingabe muss kleiner oder gleich sein.\"
});
", "node_modules/parsleyjs/src/i18n/de.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/de.extra.js");
    }
}
