<?php

/* node_modules/parsleyjs/src/i18n/ms.js */
class __TwigTemplate_c08df427ebc8d1eef988e0f93929535e9f3e9379453519f09d8ca8c8a9d35c55 extends Twig_Template
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
        $__internal_561cb210c07efe94126b52953f734502acee8c4dfe4c12bfed8daa6451de454c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561cb210c07efe94126b52953f734502acee8c4dfe4c12bfed8daa6451de454c->enter($__internal_561cb210c07efe94126b52953f734502acee8c4dfe4c12bfed8daa6451de454c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/ms.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('ms', {
  defaultMessage: \"Nilai tidak sah.\",
  type: {
    email:        \"Nilai mestilah dalam format emel yang sah.\",
    url:          \"Nilai mestilah dalam bentuk url yang sah.\",
    number:       \"Hanya nombor dibenarkan.\",
    integer:      \"Hanya integer dibenarkan.\",
    digits:       \"Hanya angka dibenarkan.\",
    alphanum:     \"Hanya alfanumerik dibenarkan.\"
  },
  notblank:       \"Nilai ini tidak boleh kosong.\",
  required:       \"Nilai ini wajib diisi.\",
  pattern:        \"Bentuk nilai ini tidak sah.\",
  min:            \"Nilai perlu lebih besar atau sama dengan %s.\",
  max:            \"Nilai perlu lebih kecil atau sama dengan %s.\",
  range:          \"Nilai perlu berada antara %s hingga %s.\",
  minlength:      \"Nilai terlalu pendek. Ianya perlu sekurang-kurangnya %s huruf.\",
  maxlength:      \"Nilai terlalu panjang. Ianya tidak boleh melebihi %s huruf.\",
  length:         \"Panjang nilai tidak sah. Panjangnya perlu diantara %s hingga %s huruf.\",
  mincheck:       \"Anda mesti memilih sekurang-kurangnya %s pilihan.\",
  maxcheck:       \"Anda tidak boleh memilih lebih daripada %s pilihan.\",
  check:          \"Anda mesti memilih diantara %s hingga %s pilihan.\",
  equalto:        \"Nilai dimasukkan hendaklah sama.\"
});

Parsley.setLocale('ms');
";
        
        $__internal_561cb210c07efe94126b52953f734502acee8c4dfe4c12bfed8daa6451de454c->leave($__internal_561cb210c07efe94126b52953f734502acee8c4dfe4c12bfed8daa6451de454c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/ms.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('ms', {
  defaultMessage: \"Nilai tidak sah.\",
  type: {
    email:        \"Nilai mestilah dalam format emel yang sah.\",
    url:          \"Nilai mestilah dalam bentuk url yang sah.\",
    number:       \"Hanya nombor dibenarkan.\",
    integer:      \"Hanya integer dibenarkan.\",
    digits:       \"Hanya angka dibenarkan.\",
    alphanum:     \"Hanya alfanumerik dibenarkan.\"
  },
  notblank:       \"Nilai ini tidak boleh kosong.\",
  required:       \"Nilai ini wajib diisi.\",
  pattern:        \"Bentuk nilai ini tidak sah.\",
  min:            \"Nilai perlu lebih besar atau sama dengan %s.\",
  max:            \"Nilai perlu lebih kecil atau sama dengan %s.\",
  range:          \"Nilai perlu berada antara %s hingga %s.\",
  minlength:      \"Nilai terlalu pendek. Ianya perlu sekurang-kurangnya %s huruf.\",
  maxlength:      \"Nilai terlalu panjang. Ianya tidak boleh melebihi %s huruf.\",
  length:         \"Panjang nilai tidak sah. Panjangnya perlu diantara %s hingga %s huruf.\",
  mincheck:       \"Anda mesti memilih sekurang-kurangnya %s pilihan.\",
  maxcheck:       \"Anda tidak boleh memilih lebih daripada %s pilihan.\",
  check:          \"Anda mesti memilih diantara %s hingga %s pilihan.\",
  equalto:        \"Nilai dimasukkan hendaklah sama.\"
});

Parsley.setLocale('ms');
", "node_modules/parsleyjs/src/i18n/ms.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/ms.js");
    }
}
