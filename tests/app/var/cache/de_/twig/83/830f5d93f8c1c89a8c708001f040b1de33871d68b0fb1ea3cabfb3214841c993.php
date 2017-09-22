<?php

/* node_modules/parsleyjs/src/i18n/he.extra.js */
class __TwigTemplate_5005cc84fe0ff53574a31a3f94bfc4463cc9f2e980640246ae6e47513293fc95 extends Twig_Template
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
        $__internal_fc4462110d96ba7de62bf7457db15fcb03c6cf74277db02459916d86c510f6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4462110d96ba7de62bf7457db15fcb03c6cf74277db02459916d86c510f6e5->enter($__internal_fc4462110d96ba7de62bf7457db15fcb03c6cf74277db02459916d86c510f6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/he.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('he', {
  dateiso: \"ערך זה צריך להיות תאריך בפורמט (YYYY-MM-DD).\"
});
";
        
        $__internal_fc4462110d96ba7de62bf7457db15fcb03c6cf74277db02459916d86c510f6e5->leave($__internal_fc4462110d96ba7de62bf7457db15fcb03c6cf74277db02459916d86c510f6e5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/he.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('he', {
  dateiso: \"ערך זה צריך להיות תאריך בפורמט (YYYY-MM-DD).\"
});
", "node_modules/parsleyjs/src/i18n/he.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/he.extra.js");
    }
}
