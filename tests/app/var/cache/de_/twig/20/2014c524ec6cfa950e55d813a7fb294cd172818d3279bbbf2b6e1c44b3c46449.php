<?php

/* node_modules/parsleyjs/src/i18n/es.js */
class __TwigTemplate_b54cbcba0639ff7c5b684a72978ec649ea06029560d480575d18fd0f42345aab extends Twig_Template
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
        $__internal_d2831c4d56139ef96829a4ee2af7729f5fe7a707c382c06071c468842b72c669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2831c4d56139ef96829a4ee2af7729f5fe7a707c382c06071c468842b72c669->enter($__internal_d2831c4d56139ef96829a4ee2af7729f5fe7a707c382c06071c468842b72c669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/es.js"));

        // line 1
        echo "// ParsleyConfig definition if not already set
// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('es', {
  defaultMessage: \"Este valor parece ser inválido.\",
  type: {
    email:        \"Este valor debe ser un correo válido.\",
    url:          \"Este valor debe ser una URL válida.\",
    number:       \"Este valor debe ser un número válido.\",
    integer:      \"Este valor debe ser un número válido.\",
    digits:       \"Este valor debe ser un dígito válido.\",
    alphanum:     \"Este valor debe ser alfanumérico.\"
  },
  notblank:       \"Este valor no debe estar en blanco.\",
  required:       \"Este valor es requerido.\",
  pattern:        \"Este valor es incorrecto.\",
  min:            \"Este valor no debe ser menor que %s.\",
  max:            \"Este valor no debe ser mayor que %s.\",
  range:          \"Este valor debe estar entre %s y %s.\",
  minlength:      \"Este valor es muy corto. La longitud mínima es de %s caracteres.\",
  maxlength:      \"Este valor es muy largo. La longitud máxima es de %s caracteres.\",
  length:         \"La longitud de este valor debe estar entre %s y %s caracteres.\",
  mincheck:       \"Debe seleccionar al menos %s opciones.\",
  maxcheck:       \"Debe seleccionar %s opciones o menos.\",
  check:          \"Debe seleccionar entre %s y %s opciones.\",
  equalto:        \"Este valor debe ser idéntico.\"
});

Parsley.setLocale('es');
";
        
        $__internal_d2831c4d56139ef96829a4ee2af7729f5fe7a707c382c06071c468842b72c669->leave($__internal_d2831c4d56139ef96829a4ee2af7729f5fe7a707c382c06071c468842b72c669_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/es.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// ParsleyConfig definition if not already set
// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('es', {
  defaultMessage: \"Este valor parece ser inválido.\",
  type: {
    email:        \"Este valor debe ser un correo válido.\",
    url:          \"Este valor debe ser una URL válida.\",
    number:       \"Este valor debe ser un número válido.\",
    integer:      \"Este valor debe ser un número válido.\",
    digits:       \"Este valor debe ser un dígito válido.\",
    alphanum:     \"Este valor debe ser alfanumérico.\"
  },
  notblank:       \"Este valor no debe estar en blanco.\",
  required:       \"Este valor es requerido.\",
  pattern:        \"Este valor es incorrecto.\",
  min:            \"Este valor no debe ser menor que %s.\",
  max:            \"Este valor no debe ser mayor que %s.\",
  range:          \"Este valor debe estar entre %s y %s.\",
  minlength:      \"Este valor es muy corto. La longitud mínima es de %s caracteres.\",
  maxlength:      \"Este valor es muy largo. La longitud máxima es de %s caracteres.\",
  length:         \"La longitud de este valor debe estar entre %s y %s caracteres.\",
  mincheck:       \"Debe seleccionar al menos %s opciones.\",
  maxcheck:       \"Debe seleccionar %s opciones o menos.\",
  check:          \"Debe seleccionar entre %s y %s opciones.\",
  equalto:        \"Este valor debe ser idéntico.\"
});

Parsley.setLocale('es');
", "node_modules/parsleyjs/src/i18n/es.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/es.js");
    }
}
