<?php

/* node_modules/ajv-keywords/keywords/uniqueItemProperties.js */
class __TwigTemplate_d292a4f4fac5eb1b22df59cf3b229ffbd7e19c27cd98f7c7ffb984a02bb21009 extends Twig_Template
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
        $__internal_e64c88ae178a317377c3e5e1876c32e0f390895e7848c7dbf274a6135f4c6b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64c88ae178a317377c3e5e1876c32e0f390895e7848c7dbf274a6135f4c6b99->enter($__internal_e64c88ae178a317377c3e5e1876c32e0f390895e7848c7dbf274a6135f4c6b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv-keywords/keywords/uniqueItemProperties.js"));

        // line 1
        echo "'use strict';

module.exports = function defFunc(ajv) {
  defFunc.definition = {
    type: 'array',
    compile: function(keys, parentSchema, it) {
      var equal = it.util.equal;
      return function(data) {
        if (data.length > 1) {
          for (var k=0; k < keys.length; k++) {
            var key = keys[k];
            for (var i = data.length; i--;) {
              if (typeof data[i] != 'object') continue;
              for (var j = i; j--;) {
                if (typeof data[j] == 'object' && equal(data[i][key], data[j][key]))
                  return false;
              }
            }
          }
        }
        return true;
      };
    },
    metaSchema: {
      type: 'array',
      items: {type: 'string'}
    }
  };

  ajv.addKeyword('uniqueItemProperties', defFunc.definition);
  return ajv;
};
";
        
        $__internal_e64c88ae178a317377c3e5e1876c32e0f390895e7848c7dbf274a6135f4c6b99->leave($__internal_e64c88ae178a317377c3e5e1876c32e0f390895e7848c7dbf274a6135f4c6b99_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv-keywords/keywords/uniqueItemProperties.js";
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
    type: 'array',
    compile: function(keys, parentSchema, it) {
      var equal = it.util.equal;
      return function(data) {
        if (data.length > 1) {
          for (var k=0; k < keys.length; k++) {
            var key = keys[k];
            for (var i = data.length; i--;) {
              if (typeof data[i] != 'object') continue;
              for (var j = i; j--;) {
                if (typeof data[j] == 'object' && equal(data[i][key], data[j][key]))
                  return false;
              }
            }
          }
        }
        return true;
      };
    },
    metaSchema: {
      type: 'array',
      items: {type: 'string'}
    }
  };

  ajv.addKeyword('uniqueItemProperties', defFunc.definition);
  return ajv;
};
", "node_modules/ajv-keywords/keywords/uniqueItemProperties.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv-keywords/keywords/uniqueItemProperties.js");
    }
}
