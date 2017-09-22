<?php

/* node_modules/ajv-keywords/keywords/_util.js */
class __TwigTemplate_e7b748aaf8e7745b8258f1a940c8073209e54256a21ccbde8d95478a0f51c866 extends Twig_Template
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
        $__internal_d0c923c601c19d957c42c7230a6f8ce362b1d0421cc89397043c282654490cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c923c601c19d957c42c7230a6f8ce362b1d0421cc89397043c282654490cb7->enter($__internal_d0c923c601c19d957c42c7230a6f8ce362b1d0421cc89397043c282654490cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv-keywords/keywords/_util.js"));

        // line 1
        echo "'use strict';

module.exports = {
  metaSchemaRef: metaSchemaRef
};

var META_SCHEMA_ID = 'http://json-schema.org/draft-06/schema';

function metaSchemaRef(ajv) {
  var defaultMeta = ajv._opts.defaultMeta;
  if (typeof defaultMeta == 'string') return { \$ref: defaultMeta };
  if (ajv.getSchema(META_SCHEMA_ID)) return { \$ref: META_SCHEMA_ID };
  console.warn('meta schema not defined');
  return {};
}
";
        
        $__internal_d0c923c601c19d957c42c7230a6f8ce362b1d0421cc89397043c282654490cb7->leave($__internal_d0c923c601c19d957c42c7230a6f8ce362b1d0421cc89397043c282654490cb7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv-keywords/keywords/_util.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = {
  metaSchemaRef: metaSchemaRef
};

var META_SCHEMA_ID = 'http://json-schema.org/draft-06/schema';

function metaSchemaRef(ajv) {
  var defaultMeta = ajv._opts.defaultMeta;
  if (typeof defaultMeta == 'string') return { \$ref: defaultMeta };
  if (ajv.getSchema(META_SCHEMA_ID)) return { \$ref: META_SCHEMA_ID };
  console.warn('meta schema not defined');
  return {};
}
", "node_modules/ajv-keywords/keywords/_util.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv-keywords/keywords/_util.js");
    }
}
