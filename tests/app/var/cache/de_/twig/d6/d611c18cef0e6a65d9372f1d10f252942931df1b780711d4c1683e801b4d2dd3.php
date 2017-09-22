<?php

/* node_modules/parsleyjs/dist/i18n/cs.js */
class __TwigTemplate_b40cda485c959eef079039abe7bca01936cf9d6233f1125ad99705d072c3c071 extends Twig_Template
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
        $__internal_3943949f361ad9d96e363225add241df3da67ec13b5ad7563fb5296f87edbc0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3943949f361ad9d96e363225add241df3da67ec13b5ad7563fb5296f87edbc0f->enter($__internal_3943949f361ad9d96e363225add241df3da67ec13b5ad7563fb5296f87edbc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/cs.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('cs', {
  defaultMessage: \"Tato položka je neplatná.\",
  type: {
    email:        \"Tato položka musí být e-mailová adresa.\",
    url:          \"Tato položka musí být platná URL adresa.\",
    number:       \"Tato položka musí být číslo.\",
    integer:      \"Tato položka musí být celé číslo.\",
    digits:       \"Tato položka musí být kladné celé číslo.\",
    alphanum:     \"Tato položka musí být alfanumerická.\"
  },
  notblank:       \"Tato položka nesmí být prázdná.\",
  required:       \"Tato položka je povinná.\",
  pattern:        \"Tato položka je neplatná.\",
  min:            \"Tato položka musí být větší nebo rovna %s.\",
  max:            \"Tato položka musí být menší nebo rovna %s.\",
  range:          \"Tato položka musí být v rozsahu od %s do %s.\",
  minlength:      \"Tato položka musí mít nejméně %s znaků.\",
  maxlength:      \"Tato položka musí mít nejvíce %s znaků.\",
  length:         \"Tato položka musí mít délku od %s do %s znaků.\",
  mincheck:       \"Je nutné vybrat alespoň %s možností.\",
  maxcheck:       \"Je nutné vybrat nejvýše %s možností.\",
  check:          \"Je nutné vybrat od %s do %s možností.\",
  equalto:        \"Tato položka musí být stejná.\"
});

Parsley.setLocale('cs');
";
        
        $__internal_3943949f361ad9d96e363225add241df3da67ec13b5ad7563fb5296f87edbc0f->leave($__internal_3943949f361ad9d96e363225add241df3da67ec13b5ad7563fb5296f87edbc0f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/cs.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('cs', {
  defaultMessage: \"Tato položka je neplatná.\",
  type: {
    email:        \"Tato položka musí být e-mailová adresa.\",
    url:          \"Tato položka musí být platná URL adresa.\",
    number:       \"Tato položka musí být číslo.\",
    integer:      \"Tato položka musí být celé číslo.\",
    digits:       \"Tato položka musí být kladné celé číslo.\",
    alphanum:     \"Tato položka musí být alfanumerická.\"
  },
  notblank:       \"Tato položka nesmí být prázdná.\",
  required:       \"Tato položka je povinná.\",
  pattern:        \"Tato položka je neplatná.\",
  min:            \"Tato položka musí být větší nebo rovna %s.\",
  max:            \"Tato položka musí být menší nebo rovna %s.\",
  range:          \"Tato položka musí být v rozsahu od %s do %s.\",
  minlength:      \"Tato položka musí mít nejméně %s znaků.\",
  maxlength:      \"Tato položka musí mít nejvíce %s znaků.\",
  length:         \"Tato položka musí mít délku od %s do %s znaků.\",
  mincheck:       \"Je nutné vybrat alespoň %s možností.\",
  maxcheck:       \"Je nutné vybrat nejvýše %s možností.\",
  check:          \"Je nutné vybrat od %s do %s možností.\",
  equalto:        \"Tato položka musí být stejná.\"
});

Parsley.setLocale('cs');
", "node_modules/parsleyjs/dist/i18n/cs.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/cs.js");
    }
}
