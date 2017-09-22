<?php

/* node_modules/parsleyjs/src/i18n/sv.js */
class __TwigTemplate_14c46dbfcd97296c8ac89eac81b5927e2ddae8d0181d8644d2c4e5a240f3d8d2 extends Twig_Template
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
        $__internal_79482691a9ea8e2a69b059f284cb227fd6b508ac48d86a6516e9510ca95c24f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79482691a9ea8e2a69b059f284cb227fd6b508ac48d86a6516e9510ca95c24f3->enter($__internal_79482691a9ea8e2a69b059f284cb227fd6b508ac48d86a6516e9510ca95c24f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/sv.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('sv', {
  defaultMessage: \"Ogiltigt värde.\",
  type: {
    email:        \"Ange en giltig e-postadress.\",
    url:          \"Ange en giltig URL.\",
    number:       \"Ange ett giltigt nummer.\",
    integer:      \"Ange ett heltal.\",
    digits:       \"Ange endast siffror.\",
    alphanum:     \"Ange endast bokstäver och siffror.\"
  },
  notblank:       \"Värdet får inte vara tomt.\",
  required:       \"Måste fyllas i.\",
  pattern:        \"Värdet är ej giltigt.\",
  min:            \"Värdet måste vara större än eller lika med %s.\",
  max:            \"Värdet måste vara mindre än eller lika med %s.\",
  range:          \"Värdet måste vara mellan %s och %s.\",
  minlength:      \"Värdet måste vara minst %s tecken.\",
  maxlength:      \"Värdet får maximalt innehålla %s tecken.\",
  length:         \"Värdet måste vara mellan %s och %s tecken.\",
  mincheck:       \"Minst %s val måste göras.\",
  maxcheck:       \"Maximalt %s val får göras.\",
  check:          \"Mellan %s och %s val måste göras.\",
  equalto:        \"Värdena måste vara lika.\"
});

Parsley.setLocale('sv');
";
        
        $__internal_79482691a9ea8e2a69b059f284cb227fd6b508ac48d86a6516e9510ca95c24f3->leave($__internal_79482691a9ea8e2a69b059f284cb227fd6b508ac48d86a6516e9510ca95c24f3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/sv.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('sv', {
  defaultMessage: \"Ogiltigt värde.\",
  type: {
    email:        \"Ange en giltig e-postadress.\",
    url:          \"Ange en giltig URL.\",
    number:       \"Ange ett giltigt nummer.\",
    integer:      \"Ange ett heltal.\",
    digits:       \"Ange endast siffror.\",
    alphanum:     \"Ange endast bokstäver och siffror.\"
  },
  notblank:       \"Värdet får inte vara tomt.\",
  required:       \"Måste fyllas i.\",
  pattern:        \"Värdet är ej giltigt.\",
  min:            \"Värdet måste vara större än eller lika med %s.\",
  max:            \"Värdet måste vara mindre än eller lika med %s.\",
  range:          \"Värdet måste vara mellan %s och %s.\",
  minlength:      \"Värdet måste vara minst %s tecken.\",
  maxlength:      \"Värdet får maximalt innehålla %s tecken.\",
  length:         \"Värdet måste vara mellan %s och %s tecken.\",
  mincheck:       \"Minst %s val måste göras.\",
  maxcheck:       \"Maximalt %s val får göras.\",
  check:          \"Mellan %s och %s val måste göras.\",
  equalto:        \"Värdena måste vara lika.\"
});

Parsley.setLocale('sv');
", "node_modules/parsleyjs/src/i18n/sv.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/sv.js");
    }
}
