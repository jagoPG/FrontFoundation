<?php

/* node_modules/parsleyjs/src/i18n/lv.js */
class __TwigTemplate_8587a85c6caf178506929dc4ed28c28d5fa53908b88da467d0b27b5a53e2138f extends Twig_Template
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
        $__internal_89a043c6d2265f44b9b0ba492af885d8ba80b0d943bbda20352c47481a2da32f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a043c6d2265f44b9b0ba492af885d8ba80b0d943bbda20352c47481a2da32f->enter($__internal_89a043c6d2265f44b9b0ba492af885d8ba80b0d943bbda20352c47481a2da32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/lv.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('lv', {
  defaultMessage: \"Šis ieraksts veikts nekorekti.\",
  type: {
    email:        \"Šeit jāieraksta derīgs e-pasts.\",
    url:          \"Šeit jāieraksta korekts url.\",
    number:       \"Šeit jāieraksta derīgs skaitlis.\",
    integer:      \"Šeit jāieraksta vesels skaitlis.\",
    digits:       \"Šeit jāieraksta cipari.\",
    alphanum:     \"Šeit derīgi tikai alfabēta burti vai cipari.\"
  },
  notblank:       \"Šis ieraksts nedrīkst būt tukšs.\",
  required:       \"Šis ieraksts ir obligāti jāaizpilda.\",
  pattern:        \"Šis ieraksts aizpildīts nekorekti.\",
  min:            \"Šai vērtībai jābūt lielākai vai vienādai ar %s.\",
  max:            \"Šai vērtībai jābūt mazākai vai vienādai ar %s.\",
  range:          \"Šai vērtībai jābūt starp %s un %s.\",
  minlength:      \"Vērtībai jābūt vismaz %s simbolu garai.\",
  maxlength:      \"Vērtībai jābūt %s simbolus garai vai īsākai.\",
  length:         \"Šīs vērtības garums ir neatbilstošs. Tai jābūt %s līdz %s simbolus garai.\",
  mincheck:       \"Jāizvēlas vismaz %s varianti.\",
  maxcheck:       \"Jāizvēlas %s varianti vai mazāk.\",
  check:          \"Jāizvēlas no %s līdz %s variantiem.\",
  equalto:        \"Šai vērtībai jāsakrīt.\"
});

Parsley.setLocale('lv');
";
        
        $__internal_89a043c6d2265f44b9b0ba492af885d8ba80b0d943bbda20352c47481a2da32f->leave($__internal_89a043c6d2265f44b9b0ba492af885d8ba80b0d943bbda20352c47481a2da32f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/lv.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('lv', {
  defaultMessage: \"Šis ieraksts veikts nekorekti.\",
  type: {
    email:        \"Šeit jāieraksta derīgs e-pasts.\",
    url:          \"Šeit jāieraksta korekts url.\",
    number:       \"Šeit jāieraksta derīgs skaitlis.\",
    integer:      \"Šeit jāieraksta vesels skaitlis.\",
    digits:       \"Šeit jāieraksta cipari.\",
    alphanum:     \"Šeit derīgi tikai alfabēta burti vai cipari.\"
  },
  notblank:       \"Šis ieraksts nedrīkst būt tukšs.\",
  required:       \"Šis ieraksts ir obligāti jāaizpilda.\",
  pattern:        \"Šis ieraksts aizpildīts nekorekti.\",
  min:            \"Šai vērtībai jābūt lielākai vai vienādai ar %s.\",
  max:            \"Šai vērtībai jābūt mazākai vai vienādai ar %s.\",
  range:          \"Šai vērtībai jābūt starp %s un %s.\",
  minlength:      \"Vērtībai jābūt vismaz %s simbolu garai.\",
  maxlength:      \"Vērtībai jābūt %s simbolus garai vai īsākai.\",
  length:         \"Šīs vērtības garums ir neatbilstošs. Tai jābūt %s līdz %s simbolus garai.\",
  mincheck:       \"Jāizvēlas vismaz %s varianti.\",
  maxcheck:       \"Jāizvēlas %s varianti vai mazāk.\",
  check:          \"Jāizvēlas no %s līdz %s variantiem.\",
  equalto:        \"Šai vērtībai jāsakrīt.\"
});

Parsley.setLocale('lv');
", "node_modules/parsleyjs/src/i18n/lv.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/lv.js");
    }
}
