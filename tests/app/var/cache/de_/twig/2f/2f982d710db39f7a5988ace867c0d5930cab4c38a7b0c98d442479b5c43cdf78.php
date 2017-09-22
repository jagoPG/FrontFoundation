<?php

/* node_modules/parsleyjs/dist/i18n/pt-pt.js */
class __TwigTemplate_20b27a0d87835e35faa0bd9439962c70c76dee3a15b6aa571659517b2ebc3583 extends Twig_Template
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
        $__internal_a42eb0e424023589b9f7b8b3905c870f34d845680997e59387070007b58122bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42eb0e424023589b9f7b8b3905c870f34d845680997e59387070007b58122bf->enter($__internal_a42eb0e424023589b9f7b8b3905c870f34d845680997e59387070007b58122bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/pt-pt.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('pt-pt', {
  defaultMessage: \"Este valor parece ser inválido.\",
  type: {
    email:        \"Este campo deve ser um email válido.\",
    url:          \"Este campo deve ser um URL válido.\",
    number:       \"Este campo deve ser um número válido.\",
    integer:      \"Este campo deve ser um número inteiro válido.\",
    digits:       \"Este campo deve conter apenas dígitos.\",
    alphanum:     \"Este campo deve ser alfanumérico.\"
  },
  notblank:       \"Este campo não pode ficar vazio.\",
  required:       \"Este campo é obrigatório.\",
  pattern:        \"Este campo parece estar inválido.\",
  min:            \"Este valor deve ser maior ou igual a %s.\",
  max:            \"Este valor deve ser menor ou igual a %s.\",
  range:          \"Este valor deve estar entre %s e %s.\",
  minlength:      \"Este campo é pequeno demais. Deve ter %s caracteres ou mais.\",
  maxlength:      \"Este campo é grande demais. Deve ter %s caracteres ou menos.\",
  length:         \"O tamanho deste campo é inválido. Ele deveria ter entre %s e %s caracteres.\",
  mincheck:       \"Escolha pelo menos %s opções.\",
  maxcheck:       \"Escolha %s opções ou mais\",
  check:          \"Escolha entre %s e %s opções.\",
  equalto:        \"Este valor deveria ser igual.\"
});

Parsley.setLocale('pt-pt');
";
        
        $__internal_a42eb0e424023589b9f7b8b3905c870f34d845680997e59387070007b58122bf->leave($__internal_a42eb0e424023589b9f7b8b3905c870f34d845680997e59387070007b58122bf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/pt-pt.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('pt-pt', {
  defaultMessage: \"Este valor parece ser inválido.\",
  type: {
    email:        \"Este campo deve ser um email válido.\",
    url:          \"Este campo deve ser um URL válido.\",
    number:       \"Este campo deve ser um número válido.\",
    integer:      \"Este campo deve ser um número inteiro válido.\",
    digits:       \"Este campo deve conter apenas dígitos.\",
    alphanum:     \"Este campo deve ser alfanumérico.\"
  },
  notblank:       \"Este campo não pode ficar vazio.\",
  required:       \"Este campo é obrigatório.\",
  pattern:        \"Este campo parece estar inválido.\",
  min:            \"Este valor deve ser maior ou igual a %s.\",
  max:            \"Este valor deve ser menor ou igual a %s.\",
  range:          \"Este valor deve estar entre %s e %s.\",
  minlength:      \"Este campo é pequeno demais. Deve ter %s caracteres ou mais.\",
  maxlength:      \"Este campo é grande demais. Deve ter %s caracteres ou menos.\",
  length:         \"O tamanho deste campo é inválido. Ele deveria ter entre %s e %s caracteres.\",
  mincheck:       \"Escolha pelo menos %s opções.\",
  maxcheck:       \"Escolha %s opções ou mais\",
  check:          \"Escolha entre %s e %s opções.\",
  equalto:        \"Este valor deveria ser igual.\"
});

Parsley.setLocale('pt-pt');
", "node_modules/parsleyjs/dist/i18n/pt-pt.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/pt-pt.js");
    }
}
