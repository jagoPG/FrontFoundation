<?php

/* node_modules/parsleyjs/src/i18n/pt-pt.js */
class __TwigTemplate_2f0e72269b733d387181117788592fd0eee1ae408eba6028e16362f896c19c6a extends Twig_Template
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
        $__internal_688f05fbb8ac3ba5d0538602829e43827ff538a7d2d0379cc8c2c2f8ced6b683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688f05fbb8ac3ba5d0538602829e43827ff538a7d2d0379cc8c2c2f8ced6b683->enter($__internal_688f05fbb8ac3ba5d0538602829e43827ff538a7d2d0379cc8c2c2f8ced6b683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/pt-pt.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

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
        
        $__internal_688f05fbb8ac3ba5d0538602829e43827ff538a7d2d0379cc8c2c2f8ced6b683->leave($__internal_688f05fbb8ac3ba5d0538602829e43827ff538a7d2d0379cc8c2c2f8ced6b683_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/pt-pt.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

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
", "node_modules/parsleyjs/src/i18n/pt-pt.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/pt-pt.js");
    }
}
