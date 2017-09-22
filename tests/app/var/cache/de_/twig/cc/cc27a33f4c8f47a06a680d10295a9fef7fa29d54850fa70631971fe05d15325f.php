<?php

/* node_modules/parsleyjs/src/i18n/pt-br.js */
class __TwigTemplate_a930752c9c5bfebb4af8f1fb5e76b03e3e0aa056559081e7bcfbb1ae4fe3c0d3 extends Twig_Template
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
        $__internal_0268fc7f3d918d573781f18ea7f380be74817ca5b768574dfbcdfe38628bd435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0268fc7f3d918d573781f18ea7f380be74817ca5b768574dfbcdfe38628bd435->enter($__internal_0268fc7f3d918d573781f18ea7f380be74817ca5b768574dfbcdfe38628bd435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/pt-br.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('pt-br', {
  defaultMessage: \"Este valor parece ser inválido.\",
  type: {
    email:        \"Este campo deve ser um email válido.\",
    url:          \"Este campo deve ser um URL válida.\",
    number:       \"Este campo deve ser um número válido.\",
    integer:      \"Este campo deve ser um inteiro válido.\",
    digits:       \"Este campo deve conter apenas dígitos.\",
    alphanum:     \"Este campo deve ser alfa numérico.\"
  },
  notblank:       \"Este campo não pode ficar vazio.\",
  required:       \"Este campo é obrigatório.\",
  pattern:        \"Este campo parece estar inválido.\",
  min:            \"Este campo deve ser maior ou igual a %s.\",
  max:            \"Este campo deve ser menor ou igual a %s.\",
  range:          \"Este campo deve estar entre %s e %s.\",
  minlength:      \"Este campo é pequeno demais. Ele deveria ter %s caracteres ou mais.\",
  maxlength:      \"Este campo é grande demais. Ele deveria ter %s caracteres ou menos.\",
  length:         \"O tamanho deste campo é inválido. Ele deveria ter entre %s e %s caracteres.\",
  mincheck:       \"Você deve escolher pelo menos %s opções.\",
  maxcheck:       \"Você deve escolher %s opções ou mais\",
  check:          \"Você deve escolher entre %s e %s opções.\",
  equalto:        \"Este valor deveria ser igual.\"
});

Parsley.setLocale('pt-br');
";
        
        $__internal_0268fc7f3d918d573781f18ea7f380be74817ca5b768574dfbcdfe38628bd435->leave($__internal_0268fc7f3d918d573781f18ea7f380be74817ca5b768574dfbcdfe38628bd435_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/pt-br.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('pt-br', {
  defaultMessage: \"Este valor parece ser inválido.\",
  type: {
    email:        \"Este campo deve ser um email válido.\",
    url:          \"Este campo deve ser um URL válida.\",
    number:       \"Este campo deve ser um número válido.\",
    integer:      \"Este campo deve ser um inteiro válido.\",
    digits:       \"Este campo deve conter apenas dígitos.\",
    alphanum:     \"Este campo deve ser alfa numérico.\"
  },
  notblank:       \"Este campo não pode ficar vazio.\",
  required:       \"Este campo é obrigatório.\",
  pattern:        \"Este campo parece estar inválido.\",
  min:            \"Este campo deve ser maior ou igual a %s.\",
  max:            \"Este campo deve ser menor ou igual a %s.\",
  range:          \"Este campo deve estar entre %s e %s.\",
  minlength:      \"Este campo é pequeno demais. Ele deveria ter %s caracteres ou mais.\",
  maxlength:      \"Este campo é grande demais. Ele deveria ter %s caracteres ou menos.\",
  length:         \"O tamanho deste campo é inválido. Ele deveria ter entre %s e %s caracteres.\",
  mincheck:       \"Você deve escolher pelo menos %s opções.\",
  maxcheck:       \"Você deve escolher %s opções ou mais\",
  check:          \"Você deve escolher entre %s e %s opções.\",
  equalto:        \"Este valor deveria ser igual.\"
});

Parsley.setLocale('pt-br');
", "node_modules/parsleyjs/src/i18n/pt-br.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/pt-br.js");
    }
}
