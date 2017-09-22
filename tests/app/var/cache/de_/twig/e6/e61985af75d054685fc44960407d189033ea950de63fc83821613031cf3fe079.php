<?php

/* node_modules/parsleyjs/src/i18n/tr.js */
class __TwigTemplate_b42d6015d363ab3bff71d860ebec1694e0d4ef137783c6a417ca697fea53e19b extends Twig_Template
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
        $__internal_239e6e25eb066cf424c8770b2992718cf361cd609cd984c2f3cf7f9ee9906fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239e6e25eb066cf424c8770b2992718cf361cd609cd984c2f3cf7f9ee9906fba->enter($__internal_239e6e25eb066cf424c8770b2992718cf361cd609cd984c2f3cf7f9ee9906fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/tr.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('tr', {
  defaultMessage: \"Girdiğiniz değer geçerli değil.\",
  type: {
    email:        \"Geçerli bir e-mail adresi yazmanız gerekiyor.\",
    url:          \"Geçerli bir bağlantı adresi yazmanız gerekiyor.\",
    number:       \"Geçerli bir sayı yazmanız gerekiyor.\",
    integer:      \"Geçerli bir tamsayı yazmanız gerekiyor.\",
    digits:       \"Geçerli bir rakam yazmanız gerekiyor.\",
    alphanum:     \"Geçerli bir alfanümerik değer yazmanız gerekiyor.\"
  },
  notblank:       \"Bu alan boş bırakılamaz.\",
  required:       \"Bu alan boş bırakılamaz.\",
  pattern:        \"Girdiğiniz değer geçerli değil.\",
  min:            \"Bu alan %s değerinden büyük ya da bu değere eşit olmalı.\",
  max:            \"Bu alan %s değerinden küçük ya da bu değere eşit olmalı.\",
  range:          \"Bu alan %s ve %s değerleri arasında olmalı.\",
  minlength:      \"Bu alanın uzunluğu %s karakter veya daha fazla olmalı.\",
  maxlength:      \"Bu alanın uzunluğu %s karakter veya daha az olmalı.\",
  length:         \"Bu alanın uzunluğu %s ve %s karakter arasında olmalı.\",
  mincheck:       \"En az %s adet seçim yapmalısınız.\",
  maxcheck:       \"En fazla %s seçim yapabilirsiniz.\",
  check:          \"Bu alan için en az %s, en fazla %s seçim yapmalısınız.\",
  equalto:        \"Bu alanın değeri aynı olmalı.\"
});

Parsley.setLocale('tr');
";
        
        $__internal_239e6e25eb066cf424c8770b2992718cf361cd609cd984c2f3cf7f9ee9906fba->leave($__internal_239e6e25eb066cf424c8770b2992718cf361cd609cd984c2f3cf7f9ee9906fba_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/tr.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('tr', {
  defaultMessage: \"Girdiğiniz değer geçerli değil.\",
  type: {
    email:        \"Geçerli bir e-mail adresi yazmanız gerekiyor.\",
    url:          \"Geçerli bir bağlantı adresi yazmanız gerekiyor.\",
    number:       \"Geçerli bir sayı yazmanız gerekiyor.\",
    integer:      \"Geçerli bir tamsayı yazmanız gerekiyor.\",
    digits:       \"Geçerli bir rakam yazmanız gerekiyor.\",
    alphanum:     \"Geçerli bir alfanümerik değer yazmanız gerekiyor.\"
  },
  notblank:       \"Bu alan boş bırakılamaz.\",
  required:       \"Bu alan boş bırakılamaz.\",
  pattern:        \"Girdiğiniz değer geçerli değil.\",
  min:            \"Bu alan %s değerinden büyük ya da bu değere eşit olmalı.\",
  max:            \"Bu alan %s değerinden küçük ya da bu değere eşit olmalı.\",
  range:          \"Bu alan %s ve %s değerleri arasında olmalı.\",
  minlength:      \"Bu alanın uzunluğu %s karakter veya daha fazla olmalı.\",
  maxlength:      \"Bu alanın uzunluğu %s karakter veya daha az olmalı.\",
  length:         \"Bu alanın uzunluğu %s ve %s karakter arasında olmalı.\",
  mincheck:       \"En az %s adet seçim yapmalısınız.\",
  maxcheck:       \"En fazla %s seçim yapabilirsiniz.\",
  check:          \"Bu alan için en az %s, en fazla %s seçim yapmalısınız.\",
  equalto:        \"Bu alanın değeri aynı olmalı.\"
});

Parsley.setLocale('tr');
", "node_modules/parsleyjs/src/i18n/tr.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/tr.js");
    }
}
