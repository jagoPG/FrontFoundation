<?php

/* node_modules/ajv-keywords/keywords/switch.js */
class __TwigTemplate_4255f27bc6115df7fa07b10dffe730de94f8742e6aa0a5263bb780ab2be71efc extends Twig_Template
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
        $__internal_d48ed47e4d63a9c50bda45f7f430003cb4be852118f37d904f063174c7382e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48ed47e4d63a9c50bda45f7f430003cb4be852118f37d904f063174c7382e75->enter($__internal_d48ed47e4d63a9c50bda45f7f430003cb4be852118f37d904f063174c7382e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv-keywords/keywords/switch.js"));

        // line 1
        echo "'use strict';

var util = require('./_util');

module.exports = function defFunc(ajv) {
  if (ajv.RULES.keywords.switch && ajv.RULES.keywords.if) return;

  var metaSchemaRef = util.metaSchemaRef(ajv);

  defFunc.definition = {
    inline: require('./dotjs/switch'),
    statements: true,
    errors: 'full',
    metaSchema: {
      type: 'array',
      items: {
        required: [ 'then' ],
        properties: {
          'if': metaSchemaRef,
          'then': {
            anyOf: [
              { type: 'boolean' },
              metaSchemaRef
            ]
          },
          'continue': { type: 'boolean' }
        },
        additionalProperties: false,
        dependencies: {
          'continue': [ 'if' ]
        }
      }
    }
  };

  ajv.addKeyword('switch', defFunc.definition);
  return ajv;
};
";
        
        $__internal_d48ed47e4d63a9c50bda45f7f430003cb4be852118f37d904f063174c7382e75->leave($__internal_d48ed47e4d63a9c50bda45f7f430003cb4be852118f37d904f063174c7382e75_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv-keywords/keywords/switch.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var util = require('./_util');

module.exports = function defFunc(ajv) {
  if (ajv.RULES.keywords.switch && ajv.RULES.keywords.if) return;

  var metaSchemaRef = util.metaSchemaRef(ajv);

  defFunc.definition = {
    inline: require('./dotjs/switch'),
    statements: true,
    errors: 'full',
    metaSchema: {
      type: 'array',
      items: {
        required: [ 'then' ],
        properties: {
          'if': metaSchemaRef,
          'then': {
            anyOf: [
              { type: 'boolean' },
              metaSchemaRef
            ]
          },
          'continue': { type: 'boolean' }
        },
        additionalProperties: false,
        dependencies: {
          'continue': [ 'if' ]
        }
      }
    }
  };

  ajv.addKeyword('switch', defFunc.definition);
  return ajv;
};
", "node_modules/ajv-keywords/keywords/switch.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv-keywords/keywords/switch.js");
    }
}
