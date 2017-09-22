<?php

/* node_modules/parsleyjs/src/i18n/en.js */
class __TwigTemplate_e765015b103d18bc3f2eb5edfcab467f3d1cba3c6ebc61a847bb1776fc7e647c extends Twig_Template
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
        $__internal_66b6a841fe128d9e9a5a11b5e21df30a1dcef8be209975228b033a94216c8428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b6a841fe128d9e9a5a11b5e21df30a1dcef8be209975228b033a94216c8428->enter($__internal_66b6a841fe128d9e9a5a11b5e21df30a1dcef8be209975228b033a94216c8428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/en.js"));

        // line 1
        echo "// This is included with the Parsley library itself,
// thus there is no use in adding it to your project.
import Parsley from '../parsley/main';

Parsley.addMessages('en', {
  defaultMessage: \"This value seems to be invalid.\",
  type: {
    email:        \"This value should be a valid email.\",
    url:          \"This value should be a valid url.\",
    number:       \"This value should be a valid number.\",
    integer:      \"This value should be a valid integer.\",
    digits:       \"This value should be digits.\",
    alphanum:     \"This value should be alphanumeric.\"
  },
  notblank:       \"This value should not be blank.\",
  required:       \"This value is required.\",
  pattern:        \"This value seems to be invalid.\",
  min:            \"This value should be greater than or equal to %s.\",
  max:            \"This value should be lower than or equal to %s.\",
  range:          \"This value should be between %s and %s.\",
  minlength:      \"This value is too short. It should have %s characters or more.\",
  maxlength:      \"This value is too long. It should have %s characters or fewer.\",
  length:         \"This value length is invalid. It should be between %s and %s characters long.\",
  mincheck:       \"You must select at least %s choices.\",
  maxcheck:       \"You must select %s choices or fewer.\",
  check:          \"You must select between %s and %s choices.\",
  equalto:        \"This value should be the same.\"
});

Parsley.setLocale('en');
";
        
        $__internal_66b6a841fe128d9e9a5a11b5e21df30a1dcef8be209975228b033a94216c8428->leave($__internal_66b6a841fe128d9e9a5a11b5e21df30a1dcef8be209975228b033a94216c8428_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/en.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// This is included with the Parsley library itself,
// thus there is no use in adding it to your project.
import Parsley from '../parsley/main';

Parsley.addMessages('en', {
  defaultMessage: \"This value seems to be invalid.\",
  type: {
    email:        \"This value should be a valid email.\",
    url:          \"This value should be a valid url.\",
    number:       \"This value should be a valid number.\",
    integer:      \"This value should be a valid integer.\",
    digits:       \"This value should be digits.\",
    alphanum:     \"This value should be alphanumeric.\"
  },
  notblank:       \"This value should not be blank.\",
  required:       \"This value is required.\",
  pattern:        \"This value seems to be invalid.\",
  min:            \"This value should be greater than or equal to %s.\",
  max:            \"This value should be lower than or equal to %s.\",
  range:          \"This value should be between %s and %s.\",
  minlength:      \"This value is too short. It should have %s characters or more.\",
  maxlength:      \"This value is too long. It should have %s characters or fewer.\",
  length:         \"This value length is invalid. It should be between %s and %s characters long.\",
  mincheck:       \"You must select at least %s choices.\",
  maxcheck:       \"You must select %s choices or fewer.\",
  check:          \"You must select between %s and %s choices.\",
  equalto:        \"This value should be the same.\"
});

Parsley.setLocale('en');
", "node_modules/parsleyjs/src/i18n/en.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/en.js");
    }
}
