<?php

/* node_modules/parsleyjs/src/i18n/hu.extra.js */
class __TwigTemplate_53670b80ba73e7ab022e3b96baf13386e46190baa9ae1a06ec98553c109357c2 extends Twig_Template
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
        $__internal_8fd87eee7e4a0e2997fdbc11dad9a851a9d29034374a8927f9c1c8820df080b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd87eee7e4a0e2997fdbc11dad9a851a9d29034374a8927f9c1c8820df080b0->enter($__internal_8fd87eee7e4a0e2997fdbc11dad9a851a9d29034374a8927f9c1c8820df080b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/hu.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('hu', {
  dateiso:  \"A mező értéke csak érvényes dátum lehet (YYYY-MM-DD).\",
  minwords: \"Minimum %s szó megadása szükséges.\",
  maxwords: \"Maximum %s szó megadása engedélyezett.\",
  words:    \"Minimum %s, maximum %s szó megadása szükséges.\",
  gt:       \"A mező értéke nagyobb kell legyen.\",
  gte:      \"A mező értéke nagyobb vagy egyenlő kell legyen.\",
  lt:       \"A mező értéke kevesebb kell legyen.\",
  lte:      \"A mező értéke kevesebb vagy egyenlő kell legyen.\",
  notequalto: \"Az érték különböző kell legyen.\"
});
";
        
        $__internal_8fd87eee7e4a0e2997fdbc11dad9a851a9d29034374a8927f9c1c8820df080b0->leave($__internal_8fd87eee7e4a0e2997fdbc11dad9a851a9d29034374a8927f9c1c8820df080b0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/hu.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('hu', {
  dateiso:  \"A mező értéke csak érvényes dátum lehet (YYYY-MM-DD).\",
  minwords: \"Minimum %s szó megadása szükséges.\",
  maxwords: \"Maximum %s szó megadása engedélyezett.\",
  words:    \"Minimum %s, maximum %s szó megadása szükséges.\",
  gt:       \"A mező értéke nagyobb kell legyen.\",
  gte:      \"A mező értéke nagyobb vagy egyenlő kell legyen.\",
  lt:       \"A mező értéke kevesebb kell legyen.\",
  lte:      \"A mező értéke kevesebb vagy egyenlő kell legyen.\",
  notequalto: \"Az érték különböző kell legyen.\"
});
", "node_modules/parsleyjs/src/i18n/hu.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/hu.extra.js");
    }
}
