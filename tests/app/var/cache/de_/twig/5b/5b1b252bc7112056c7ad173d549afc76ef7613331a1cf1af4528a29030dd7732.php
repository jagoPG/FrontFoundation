<?php

/* node_modules/ajv-keywords/keywords/if.js */
class __TwigTemplate_15acf2f82ca81f0f33747ce267b9ce13f94763d764223ea6fa8295da3bd1c5a8 extends Twig_Template
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
        $__internal_458187ac3219be66e422d6a99b32e907b38fd2ef14a67311a8ab72f0ca6fd258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_458187ac3219be66e422d6a99b32e907b38fd2ef14a67311a8ab72f0ca6fd258->enter($__internal_458187ac3219be66e422d6a99b32e907b38fd2ef14a67311a8ab72f0ca6fd258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv-keywords/keywords/if.js"));

        // line 1
        echo "'use strict';

module.exports = function defFunc(ajv) {
  if (!ajv.RULES.keywords.switch) require('./switch')(ajv);

  defFunc.definition = {
    macro: function (schema, parentSchema) {
      if (parentSchema.then === undefined)
        throw new Error('keyword \"then\" is absent');
      var cases = [ { 'if': schema, 'then': parentSchema.then } ];
      if (parentSchema.else !== undefined)
        cases[1] = { 'then': parentSchema.else };
      return { switch: cases };
    }
  };

  ajv.addKeyword('if', defFunc.definition);
  ajv.addKeyword('then');
  ajv.addKeyword('else');
  return ajv;
};
";
        
        $__internal_458187ac3219be66e422d6a99b32e907b38fd2ef14a67311a8ab72f0ca6fd258->leave($__internal_458187ac3219be66e422d6a99b32e907b38fd2ef14a67311a8ab72f0ca6fd258_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv-keywords/keywords/if.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function defFunc(ajv) {
  if (!ajv.RULES.keywords.switch) require('./switch')(ajv);

  defFunc.definition = {
    macro: function (schema, parentSchema) {
      if (parentSchema.then === undefined)
        throw new Error('keyword \"then\" is absent');
      var cases = [ { 'if': schema, 'then': parentSchema.then } ];
      if (parentSchema.else !== undefined)
        cases[1] = { 'then': parentSchema.else };
      return { switch: cases };
    }
  };

  ajv.addKeyword('if', defFunc.definition);
  ajv.addKeyword('then');
  ajv.addKeyword('else');
  return ajv;
};
", "node_modules/ajv-keywords/keywords/if.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv-keywords/keywords/if.js");
    }
}
