<?php

/* node_modules/parsleyjs/src/i18n/id.js */
class __TwigTemplate_7c261bfb838ad6efb6b76503202f8d2d97c2cd06502ffe68587b86e3c1d3ec0f extends Twig_Template
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
        $__internal_d724d390f58491739519233559dc0aadc280ad62bd5222ae55ae2c07b4cee970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d724d390f58491739519233559dc0aadc280ad62bd5222ae55ae2c07b4cee970->enter($__internal_d724d390f58491739519233559dc0aadc280ad62bd5222ae55ae2c07b4cee970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/id.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('id', {
  defaultMessage: \"tidak valid\",
  type: {
    email:        \"email tidak valid\",
    url:          \"url tidak valid\",
    number:       \"nomor tidak valid\",
    integer:      \"integer tidak valid\",
    digits:       \"harus berupa digit\",
    alphanum:     \"harus berupa alphanumeric\"
  },
  notblank:       \"tidak boleh kosong\",
  required:       \"tidak boleh kosong\",
  pattern:        \"tidak valid\",
  min:            \"harus lebih besar atau sama dengan %s.\",
  max:            \"harus lebih kecil atau sama dengan %s.\",
  range:          \"harus dalam rentang %s dan %s.\",
  minlength:      \"terlalu pendek, minimal %s karakter atau lebih.\",
  maxlength:      \"terlalu panjang, maksimal %s karakter atau kurang.\",
  length:         \"panjang karakter harus dalam rentang %s dan %s\",
  mincheck:       \"pilih minimal %s pilihan\",
  maxcheck:       \"pilih maksimal %s pilihan\",
  check:          \"pilih antar %s dan %s pilihan\",
  equalto:        \"harus sama\"
});

Parsley.setLocale('id');
";
        
        $__internal_d724d390f58491739519233559dc0aadc280ad62bd5222ae55ae2c07b4cee970->leave($__internal_d724d390f58491739519233559dc0aadc280ad62bd5222ae55ae2c07b4cee970_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/id.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('id', {
  defaultMessage: \"tidak valid\",
  type: {
    email:        \"email tidak valid\",
    url:          \"url tidak valid\",
    number:       \"nomor tidak valid\",
    integer:      \"integer tidak valid\",
    digits:       \"harus berupa digit\",
    alphanum:     \"harus berupa alphanumeric\"
  },
  notblank:       \"tidak boleh kosong\",
  required:       \"tidak boleh kosong\",
  pattern:        \"tidak valid\",
  min:            \"harus lebih besar atau sama dengan %s.\",
  max:            \"harus lebih kecil atau sama dengan %s.\",
  range:          \"harus dalam rentang %s dan %s.\",
  minlength:      \"terlalu pendek, minimal %s karakter atau lebih.\",
  maxlength:      \"terlalu panjang, maksimal %s karakter atau kurang.\",
  length:         \"panjang karakter harus dalam rentang %s dan %s\",
  mincheck:       \"pilih minimal %s pilihan\",
  maxcheck:       \"pilih maksimal %s pilihan\",
  check:          \"pilih antar %s dan %s pilihan\",
  equalto:        \"harus sama\"
});

Parsley.setLocale('id');
", "node_modules/parsleyjs/src/i18n/id.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/id.js");
    }
}
