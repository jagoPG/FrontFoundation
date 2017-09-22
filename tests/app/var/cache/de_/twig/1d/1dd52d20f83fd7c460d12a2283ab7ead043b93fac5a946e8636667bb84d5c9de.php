<?php

/* node_modules/fsevents/node_modules/ajv/lib/compile/rules.js */
class __TwigTemplate_cb40f4de3b4e0800185b7052fc4afdd669a6fea6e5fea5fb0e32c80db299f4cf extends Twig_Template
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
        $__internal_e4ca2ee74d6381a152793c6355a6e30c3fe8d9654d5b303bafc35da549681dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ca2ee74d6381a152793c6355a6e30c3fe8d9654d5b303bafc35da549681dc0->enter($__internal_e4ca2ee74d6381a152793c6355a6e30c3fe8d9654d5b303bafc35da549681dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ajv/lib/compile/rules.js"));

        // line 1
        echo "'use strict';

var ruleModules = require('./_rules')
  , toHash = require('./util').toHash;

module.exports = function rules() {
  var RULES = [
    { type: 'number',
      rules: [ 'maximum', 'minimum', 'multipleOf'] },
    { type: 'string',
      rules: [ 'maxLength', 'minLength', 'pattern', 'format' ] },
    { type: 'array',
      rules: [ 'maxItems', 'minItems', 'uniqueItems', 'items' ] },
    { type: 'object',
      rules: [ 'maxProperties', 'minProperties', 'required', 'dependencies', 'properties' ] },
    { rules: [ '\$ref', 'enum', 'not', 'anyOf', 'oneOf', 'allOf' ] }
  ];

  var ALL = [ 'type', 'additionalProperties', 'patternProperties' ];
  var KEYWORDS = [ 'additionalItems', '\$schema', 'id', 'title', 'description', 'default' ];
  var TYPES = [ 'number', 'integer', 'string', 'array', 'object', 'boolean', 'null' ];
  RULES.all = toHash(ALL);

  RULES.forEach(function (group) {
    group.rules = group.rules.map(function (keyword) {
      ALL.push(keyword);
      var rule = RULES.all[keyword] = {
        keyword: keyword,
        code: ruleModules[keyword]
      };
      return rule;
    });
  });

  RULES.keywords = toHash(ALL.concat(KEYWORDS));
  RULES.types = toHash(TYPES);
  RULES.custom = {};

  return RULES;
};
";
        
        $__internal_e4ca2ee74d6381a152793c6355a6e30c3fe8d9654d5b303bafc35da549681dc0->leave($__internal_e4ca2ee74d6381a152793c6355a6e30c3fe8d9654d5b303bafc35da549681dc0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ajv/lib/compile/rules.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var ruleModules = require('./_rules')
  , toHash = require('./util').toHash;

module.exports = function rules() {
  var RULES = [
    { type: 'number',
      rules: [ 'maximum', 'minimum', 'multipleOf'] },
    { type: 'string',
      rules: [ 'maxLength', 'minLength', 'pattern', 'format' ] },
    { type: 'array',
      rules: [ 'maxItems', 'minItems', 'uniqueItems', 'items' ] },
    { type: 'object',
      rules: [ 'maxProperties', 'minProperties', 'required', 'dependencies', 'properties' ] },
    { rules: [ '\$ref', 'enum', 'not', 'anyOf', 'oneOf', 'allOf' ] }
  ];

  var ALL = [ 'type', 'additionalProperties', 'patternProperties' ];
  var KEYWORDS = [ 'additionalItems', '\$schema', 'id', 'title', 'description', 'default' ];
  var TYPES = [ 'number', 'integer', 'string', 'array', 'object', 'boolean', 'null' ];
  RULES.all = toHash(ALL);

  RULES.forEach(function (group) {
    group.rules = group.rules.map(function (keyword) {
      ALL.push(keyword);
      var rule = RULES.all[keyword] = {
        keyword: keyword,
        code: ruleModules[keyword]
      };
      return rule;
    });
  });

  RULES.keywords = toHash(ALL.concat(KEYWORDS));
  RULES.types = toHash(TYPES);
  RULES.custom = {};

  return RULES;
};
", "node_modules/fsevents/node_modules/ajv/lib/compile/rules.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ajv/lib/compile/rules.js");
    }
}
