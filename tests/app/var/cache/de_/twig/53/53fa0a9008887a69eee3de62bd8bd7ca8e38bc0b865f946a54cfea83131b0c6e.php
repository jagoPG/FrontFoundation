<?php

/* node_modules/ajv-keywords/keywords/patternRequired.js */
class __TwigTemplate_7fdee5f3387073b933d1919e86e5ef9c5720c72dbbf37b79b241262eef4b3cc4 extends Twig_Template
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
        $__internal_5337c74d1b24ce69301de2b24858922f6778a4a93a9d65c09d09408592b318ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5337c74d1b24ce69301de2b24858922f6778a4a93a9d65c09d09408592b318ef->enter($__internal_5337c74d1b24ce69301de2b24858922f6778a4a93a9d65c09d09408592b318ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv-keywords/keywords/patternRequired.js"));

        // line 1
        echo "'use strict';

module.exports = function defFunc(ajv) {
  defFunc.definition = {
    type: 'object',
    inline: require('./dotjs/patternRequired'),
    statements: true,
    errors: 'full',
    metaSchema: {
      type: 'array',
      items: {
        type: 'string',
        format: 'regex'
      },
      uniqueItems: true
    }
  };

  ajv.addKeyword('patternRequired', defFunc.definition);
  return ajv;
};
";
        
        $__internal_5337c74d1b24ce69301de2b24858922f6778a4a93a9d65c09d09408592b318ef->leave($__internal_5337c74d1b24ce69301de2b24858922f6778a4a93a9d65c09d09408592b318ef_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv-keywords/keywords/patternRequired.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function defFunc(ajv) {
  defFunc.definition = {
    type: 'object',
    inline: require('./dotjs/patternRequired'),
    statements: true,
    errors: 'full',
    metaSchema: {
      type: 'array',
      items: {
        type: 'string',
        format: 'regex'
      },
      uniqueItems: true
    }
  };

  ajv.addKeyword('patternRequired', defFunc.definition);
  return ajv;
};
", "node_modules/ajv-keywords/keywords/patternRequired.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv-keywords/keywords/patternRequired.js");
    }
}
