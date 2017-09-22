<?php

/* node_modules/parsleyjs/dist/i18n/lt.js */
class __TwigTemplate_30b454a8dccc09a772b0397c8e70f4548a6069af1433017db23ad9189e09cfcf extends Twig_Template
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
        $__internal_f37a69fb4cf226ee9dc7dea944e4320c7d4a30df0c391d9d496afe974ef61124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37a69fb4cf226ee9dc7dea944e4320c7d4a30df0c391d9d496afe974ef61124->enter($__internal_f37a69fb4cf226ee9dc7dea944e4320c7d4a30df0c391d9d496afe974ef61124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/lt.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

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
        
        $__internal_f37a69fb4cf226ee9dc7dea944e4320c7d4a30df0c391d9d496afe974ef61124->leave($__internal_f37a69fb4cf226ee9dc7dea944e4320c7d4a30df0c391d9d496afe974ef61124_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/lt.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

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
", "node_modules/parsleyjs/dist/i18n/lt.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/lt.js");
    }
}
