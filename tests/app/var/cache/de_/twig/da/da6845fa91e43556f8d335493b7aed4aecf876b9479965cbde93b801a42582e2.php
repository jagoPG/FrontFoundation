<?php

/* node_modules/parsleyjs/src/i18n/nl.extra.js */
class __TwigTemplate_489f89da9fa28865dce29e53c35d468d40dba560b514b4785dc3661ff8d11324 extends Twig_Template
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
        $__internal_41612ce45ceb8043a842753ecd74733774eb41961319b2c76cfd10d05d7e6add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41612ce45ceb8043a842753ecd74733774eb41961319b2c76cfd10d05d7e6add->enter($__internal_41612ce45ceb8043a842753ecd74733774eb41961319b2c76cfd10d05d7e6add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/nl.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('nl', {
  dateiso:  \"Deze waarde moet een datum in het volgende formaat zijn: (YYYY-MM-DD).\",
  minwords: \"Deze waarde moet minstens %s woorden bevatten.\",
  maxwords: \"Deze waarde mag maximaal %s woorden bevatten.\",
  words:    \"Deze waarde moet tussen de %s en %s woorden bevatten.\",
  gt:       \"Deze waarde moet groter dan %s zijn.\",
  lt:       \"Deze waarde moet kleiner dan %s zijn.\"
});
";
        
        $__internal_41612ce45ceb8043a842753ecd74733774eb41961319b2c76cfd10d05d7e6add->leave($__internal_41612ce45ceb8043a842753ecd74733774eb41961319b2c76cfd10d05d7e6add_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/nl.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('nl', {
  dateiso:  \"Deze waarde moet een datum in het volgende formaat zijn: (YYYY-MM-DD).\",
  minwords: \"Deze waarde moet minstens %s woorden bevatten.\",
  maxwords: \"Deze waarde mag maximaal %s woorden bevatten.\",
  words:    \"Deze waarde moet tussen de %s en %s woorden bevatten.\",
  gt:       \"Deze waarde moet groter dan %s zijn.\",
  lt:       \"Deze waarde moet kleiner dan %s zijn.\"
});
", "node_modules/parsleyjs/src/i18n/nl.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/nl.extra.js");
    }
}
