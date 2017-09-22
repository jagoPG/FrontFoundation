<?php

/* node_modules/ajv/lib/patternGroups.js */
class __TwigTemplate_9ae26616992d6e0d2f1d3716365ce8488419ab05cfc29de7a5c35b6dcd56948f extends Twig_Template
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
        $__internal_9fcc9ab14c12491b12e5bde52123e2344404fd4ebe8d8824c59d555a1b7c3496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fcc9ab14c12491b12e5bde52123e2344404fd4ebe8d8824c59d555a1b7c3496->enter($__internal_9fcc9ab14c12491b12e5bde52123e2344404fd4ebe8d8824c59d555a1b7c3496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/lib/patternGroups.js"));

        // line 1
        echo "'use strict';

var META_SCHEMA_ID = 'http://json-schema.org/draft-06/schema';

module.exports = function (ajv) {
  var defaultMeta = ajv._opts.defaultMeta;
  var metaSchemaRef = typeof defaultMeta == 'string'
                      ? { \$ref: defaultMeta }
                      : ajv.getSchema(META_SCHEMA_ID)
                        ? { \$ref: META_SCHEMA_ID }
                        : {};

  ajv.addKeyword('patternGroups', {
    // implemented in properties.jst
    metaSchema: {
      type: 'object',
      additionalProperties: {
        type: 'object',
        required: [ 'schema' ],
        properties: {
          maximum: {
            type: 'integer',
            minimum: 0
          },
          minimum: {
            type: 'integer',
            minimum: 0
          },
          schema: metaSchemaRef
        },
        additionalProperties: false
      }
    }
  });
  ajv.RULES.all.properties.implements.push('patternGroups');
};
";
        
        $__internal_9fcc9ab14c12491b12e5bde52123e2344404fd4ebe8d8824c59d555a1b7c3496->leave($__internal_9fcc9ab14c12491b12e5bde52123e2344404fd4ebe8d8824c59d555a1b7c3496_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/lib/patternGroups.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var META_SCHEMA_ID = 'http://json-schema.org/draft-06/schema';

module.exports = function (ajv) {
  var defaultMeta = ajv._opts.defaultMeta;
  var metaSchemaRef = typeof defaultMeta == 'string'
                      ? { \$ref: defaultMeta }
                      : ajv.getSchema(META_SCHEMA_ID)
                        ? { \$ref: META_SCHEMA_ID }
                        : {};

  ajv.addKeyword('patternGroups', {
    // implemented in properties.jst
    metaSchema: {
      type: 'object',
      additionalProperties: {
        type: 'object',
        required: [ 'schema' ],
        properties: {
          maximum: {
            type: 'integer',
            minimum: 0
          },
          minimum: {
            type: 'integer',
            minimum: 0
          },
          schema: metaSchemaRef
        },
        additionalProperties: false
      }
    }
  });
  ajv.RULES.all.properties.implements.push('patternGroups');
};
", "node_modules/ajv/lib/patternGroups.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/lib/patternGroups.js");
    }
}
