<?php

/* node_modules/parsleyjs/src/i18n/lt.js */
class __TwigTemplate_0a2880aa274dfa5f9da97b4aee7c2f45a4e9bbd7cf74dd9d2031d5f06cc4efba extends Twig_Template
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
        $__internal_7fbdee11c79192c09642544048b822cab4935470efffa40b30343971a93271e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fbdee11c79192c09642544048b822cab4935470efffa40b30343971a93271e0->enter($__internal_7fbdee11c79192c09642544048b822cab4935470efffa40b30343971a93271e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/lt.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('lt', {
  defaultMessage: \"Šis įrašas neteisingas.\",
  type: {
    email:        \"Šis įrašas nėra teisingas el. paštas.\",
    url:          \"Šis įrašas nėra teisingas url.\",
    number:       \"Šis įrašas nėra skaičius.\",
    integer:      \"Šis įrašas nėra sveikasis skaičius.\",
    digits:       \"Šis įrašas turi būti skaičius.\",
    alphanum:     \"Šis įrašas turi būti iš skaičių ir raidžių.\"
  },
  notblank:       \"Šis įrašas negali būti tuščias.\",
  required:       \"Šis įrašas yra privalomas\",
  pattern:        \"Šis įrašas neteisingas.\",
  min:            \"Ši vertė turi būti didesnė arba lygi %s.\",
  max:            \"Ši vertė turi būti mažesnė arba lygi %s.\",
  range:          \"Ši vertė turi būti tarp %s ir %s.\",
  minlength:      \"Šis įrašas per trumpas. Jis turi turėti %s simbolius arba daugiau.\",
  maxlength:      \"Šis įrašas per ilgas. Jis turi turėti %s simbolius arba mažiau.\",
  length:         \"Šio įrašo ilgis neteisingas. Jis turėtų būti tarp %s ir %s simbolių.\",
  mincheck:       \"Jūs turite pasirinkti bent %s pasirinkimus.\",
  maxcheck:       \"Jūs turite pasirinkti ne daugiau %s pasirinkimų.\",
  check:          \"Jūs turite pasirinkti tarp %s ir %s pasirinkimų.\",
  equalto:        \"Ši reikšmė turėtų būti vienoda.\"
});

Parsley.setLocale('lt');
";
        
        $__internal_7fbdee11c79192c09642544048b822cab4935470efffa40b30343971a93271e0->leave($__internal_7fbdee11c79192c09642544048b822cab4935470efffa40b30343971a93271e0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/lt.js";
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
  defaultMessage: \"Šis įrašas neteisingas.\",
  type: {
    email:        \"Šis įrašas nėra teisingas el. paštas.\",
    url:          \"Šis įrašas nėra teisingas url.\",
    number:       \"Šis įrašas nėra skaičius.\",
    integer:      \"Šis įrašas nėra sveikasis skaičius.\",
    digits:       \"Šis įrašas turi būti skaičius.\",
    alphanum:     \"Šis įrašas turi būti iš skaičių ir raidžių.\"
  },
  notblank:       \"Šis įrašas negali būti tuščias.\",
  required:       \"Šis įrašas yra privalomas\",
  pattern:        \"Šis įrašas neteisingas.\",
  min:            \"Ši vertė turi būti didesnė arba lygi %s.\",
  max:            \"Ši vertė turi būti mažesnė arba lygi %s.\",
  range:          \"Ši vertė turi būti tarp %s ir %s.\",
  minlength:      \"Šis įrašas per trumpas. Jis turi turėti %s simbolius arba daugiau.\",
  maxlength:      \"Šis įrašas per ilgas. Jis turi turėti %s simbolius arba mažiau.\",
  length:         \"Šio įrašo ilgis neteisingas. Jis turėtų būti tarp %s ir %s simbolių.\",
  mincheck:       \"Jūs turite pasirinkti bent %s pasirinkimus.\",
  maxcheck:       \"Jūs turite pasirinkti ne daugiau %s pasirinkimų.\",
  check:          \"Jūs turite pasirinkti tarp %s ir %s pasirinkimų.\",
  equalto:        \"Ši reikšmė turėtų būti vienoda.\"
});

Parsley.setLocale('lt');
", "node_modules/parsleyjs/src/i18n/lt.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/lt.js");
    }
}
