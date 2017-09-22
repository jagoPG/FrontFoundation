<?php

/* node_modules/parsleyjs/src/i18n/cs.js */
class __TwigTemplate_98700a6792d7b88f6e7e1e077b14f9428bf489e6deb3760d6cae9f41067a2369 extends Twig_Template
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
        $__internal_df9f3d5a007f7191d2839d7e0832fb27b44f552358a4b5b4cb0f39f2e564c5b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9f3d5a007f7191d2839d7e0832fb27b44f552358a4b5b4cb0f39f2e564c5b3->enter($__internal_df9f3d5a007f7191d2839d7e0832fb27b44f552358a4b5b4cb0f39f2e564c5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/cs.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

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
        
        $__internal_df9f3d5a007f7191d2839d7e0832fb27b44f552358a4b5b4cb0f39f2e564c5b3->leave($__internal_df9f3d5a007f7191d2839d7e0832fb27b44f552358a4b5b4cb0f39f2e564c5b3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/cs.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

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
", "node_modules/parsleyjs/src/i18n/cs.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/cs.js");
    }
}
