<?php

/* node_modules/parsleyjs/dist/i18n/sk.js */
class __TwigTemplate_1e1f52e3775284cc42b06012dc71c129014b26af555297cc733f7479f3169996 extends Twig_Template
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
        $__internal_f7b13a9fe84524e3aab0984f961775abeef25efcee26bc8612d595f7f0197c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b13a9fe84524e3aab0984f961775abeef25efcee26bc8612d595f7f0197c32->enter($__internal_f7b13a9fe84524e3aab0984f961775abeef25efcee26bc8612d595f7f0197c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/sk.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

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
        
        $__internal_f7b13a9fe84524e3aab0984f961775abeef25efcee26bc8612d595f7f0197c32->leave($__internal_f7b13a9fe84524e3aab0984f961775abeef25efcee26bc8612d595f7f0197c32_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/sk.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

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
", "node_modules/parsleyjs/dist/i18n/sk.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/sk.js");
    }
}
