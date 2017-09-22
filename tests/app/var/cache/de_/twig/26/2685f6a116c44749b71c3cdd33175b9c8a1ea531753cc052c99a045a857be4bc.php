<?php

/* node_modules/ajv/lib/$data.js */
class __TwigTemplate_0dec125aec39b8a791b0eab16d357cd6314799ca1ab024cf09e5b2f25ee78b72 extends Twig_Template
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
        $__internal_fc68f64c09ad1cea2397978ab53bf547c2df4b198a4e87a2731e388ec3ed514e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc68f64c09ad1cea2397978ab53bf547c2df4b198a4e87a2731e388ec3ed514e->enter($__internal_fc68f64c09ad1cea2397978ab53bf547c2df4b198a4e87a2731e388ec3ed514e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/lib/\$data.js"));

        // line 1
        echo "'use strict';

var KEYWORDS = [
  'multipleOf',
  'maximum',
  'exclusiveMaximum',
  'minimum',
  'exclusiveMinimum',
  'maxLength',
  'minLength',
  'pattern',
  'additionalItems',
  'maxItems',
  'minItems',
  'uniqueItems',
  'maxProperties',
  'minProperties',
  'required',
  'additionalProperties',
  'enum',
  'format',
  'const'
];

module.exports = function (metaSchema, keywordsJsonPointers) {
  for (var i=0; i<keywordsJsonPointers.length; i++) {
    metaSchema = JSON.parse(JSON.stringify(metaSchema));
    var segments = keywordsJsonPointers[i].split('/');
    var keywords = metaSchema;
    var j;
    for (j=1; j<segments.length; j++)
      keywords = keywords[segments[j]];

    for (j=0; j<KEYWORDS.length; j++) {
      var key = KEYWORDS[j];
      var schema = keywords[key];
      if (schema) {
        keywords[key] = {
          anyOf: [
            schema,
            { \$ref: 'https://raw.githubusercontent.com/epoberezkin/ajv/master/lib/refs/\$data.json#' }
          ]
        };
      }
    }
  }

  return metaSchema;
};
";
        
        $__internal_fc68f64c09ad1cea2397978ab53bf547c2df4b198a4e87a2731e388ec3ed514e->leave($__internal_fc68f64c09ad1cea2397978ab53bf547c2df4b198a4e87a2731e388ec3ed514e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/lib/\$data.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var KEYWORDS = [
  'multipleOf',
  'maximum',
  'exclusiveMaximum',
  'minimum',
  'exclusiveMinimum',
  'maxLength',
  'minLength',
  'pattern',
  'additionalItems',
  'maxItems',
  'minItems',
  'uniqueItems',
  'maxProperties',
  'minProperties',
  'required',
  'additionalProperties',
  'enum',
  'format',
  'const'
];

module.exports = function (metaSchema, keywordsJsonPointers) {
  for (var i=0; i<keywordsJsonPointers.length; i++) {
    metaSchema = JSON.parse(JSON.stringify(metaSchema));
    var segments = keywordsJsonPointers[i].split('/');
    var keywords = metaSchema;
    var j;
    for (j=1; j<segments.length; j++)
      keywords = keywords[segments[j]];

    for (j=0; j<KEYWORDS.length; j++) {
      var key = KEYWORDS[j];
      var schema = keywords[key];
      if (schema) {
        keywords[key] = {
          anyOf: [
            schema,
            { \$ref: 'https://raw.githubusercontent.com/epoberezkin/ajv/master/lib/refs/\$data.json#' }
          ]
        };
      }
    }
  }

  return metaSchema;
};
", "node_modules/ajv/lib/\$data.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/lib/\$data.js");
    }
}
