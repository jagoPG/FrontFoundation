<?php

/* node_modules/parsleyjs/dist/i18n/id.js */
class __TwigTemplate_778676c95f39c94c38d6ece8d40d16327ed00d37fcf33994737e532879d9acc7 extends Twig_Template
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
        $__internal_8db98a96a8c53e8bfb9787daa59b23aa654cfa1ae0adab0190dbe595499178b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8db98a96a8c53e8bfb9787daa59b23aa654cfa1ae0adab0190dbe595499178b8->enter($__internal_8db98a96a8c53e8bfb9787daa59b23aa654cfa1ae0adab0190dbe595499178b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/id.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

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
        
        $__internal_8db98a96a8c53e8bfb9787daa59b23aa654cfa1ae0adab0190dbe595499178b8->leave($__internal_8db98a96a8c53e8bfb9787daa59b23aa654cfa1ae0adab0190dbe595499178b8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/id.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

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
", "node_modules/parsleyjs/dist/i18n/id.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/id.js");
    }
}
