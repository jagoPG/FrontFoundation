<?php

/* node_modules/parsleyjs/src/i18n/sk.js */
class __TwigTemplate_6f52eb585f7bfe1190b5efe682e4d1ee5d41b8bbec569b3ec8ff76e7648af010 extends Twig_Template
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
        $__internal_a8f22a331616d9d316f5dcaf9ea99a0e10c4d678fba3f654de910dee6190be6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f22a331616d9d316f5dcaf9ea99a0e10c4d678fba3f654de910dee6190be6a->enter($__internal_a8f22a331616d9d316f5dcaf9ea99a0e10c4d678fba3f654de910dee6190be6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/sk.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('sk', {
  defaultMessage: \"Prosím zadajte správnu hodnotu.\",
  type: {
    email:        \"Prosím zadajte správnu emailovú adresu.\",
    url:          \"Prosím zadajte platnú URL adresu.\",
    number:       \"Toto pole môže obsahovať len čísla\",
    integer:      \"Toto pole môže obsahovať len celé čísla\",
    digits:       \"Toto pole môže obsahovať len kladné celé čísla.\",
    alphanum:     \"Toto pole môže obsahovať len alfanumerické znaky.\"
  },
  notblank:       \"Toto pole nesmie byť prázdne.\",
  required:       \"Toto pole je povinné.\",
  pattern:        \"Toto pole je je neplatné.\",
  min:            \"Prosím zadajte hodnotu väčšiu alebo rovnú %s.\",
  max:            \"Prosím zadajte hodnotu menšiu alebo rovnú %s.\",
  range:          \"Prosím zadajte hodnotu v rozmedzí %s a %s\",
  minlength:      \"Prosím zadajte hodnotu dlhú %s znakov a viacej.\",
  maxlength:      \"Prosím zadajte hodnotu kratšiu ako %s znakov.\",
  length:         \"Prosím zadajte hodnotu medzi %s a %s znakov.\",
  mincheck:       \"Je nutné vybrať minimálne %s z možností.\",
  maxcheck:       \"Je nutné vybrať maximálne %s z možností.\",
  check:          \"Je nutné vybrať od %s do %s z možností.\",
  equalto:        \"Prosím zadajte rovnakú hodnotu.\"
});

Parsley.setLocale('sk');
";
        
        $__internal_a8f22a331616d9d316f5dcaf9ea99a0e10c4d678fba3f654de910dee6190be6a->leave($__internal_a8f22a331616d9d316f5dcaf9ea99a0e10c4d678fba3f654de910dee6190be6a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/sk.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('sk', {
  defaultMessage: \"Prosím zadajte správnu hodnotu.\",
  type: {
    email:        \"Prosím zadajte správnu emailovú adresu.\",
    url:          \"Prosím zadajte platnú URL adresu.\",
    number:       \"Toto pole môže obsahovať len čísla\",
    integer:      \"Toto pole môže obsahovať len celé čísla\",
    digits:       \"Toto pole môže obsahovať len kladné celé čísla.\",
    alphanum:     \"Toto pole môže obsahovať len alfanumerické znaky.\"
  },
  notblank:       \"Toto pole nesmie byť prázdne.\",
  required:       \"Toto pole je povinné.\",
  pattern:        \"Toto pole je je neplatné.\",
  min:            \"Prosím zadajte hodnotu väčšiu alebo rovnú %s.\",
  max:            \"Prosím zadajte hodnotu menšiu alebo rovnú %s.\",
  range:          \"Prosím zadajte hodnotu v rozmedzí %s a %s\",
  minlength:      \"Prosím zadajte hodnotu dlhú %s znakov a viacej.\",
  maxlength:      \"Prosím zadajte hodnotu kratšiu ako %s znakov.\",
  length:         \"Prosím zadajte hodnotu medzi %s a %s znakov.\",
  mincheck:       \"Je nutné vybrať minimálne %s z možností.\",
  maxcheck:       \"Je nutné vybrať maximálne %s z možností.\",
  check:          \"Je nutné vybrať od %s do %s z možností.\",
  equalto:        \"Prosím zadajte rovnakú hodnotu.\"
});

Parsley.setLocale('sk');
", "node_modules/parsleyjs/src/i18n/sk.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/sk.js");
    }
}
