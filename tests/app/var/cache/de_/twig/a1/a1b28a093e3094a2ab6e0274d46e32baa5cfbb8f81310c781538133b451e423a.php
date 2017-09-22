<?php

/* node_modules/core-js/modules/_object-dp.js */
class __TwigTemplate_9422b4bb686f40ce14cf784ac4aec7dcf0fbc02013cf3fec8edbab64d7f4b93b extends Twig_Template
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
        $__internal_849c79e20eec58e41ad52e85eb02a9ee660889b9c2d08f5e223df88e40da7a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849c79e20eec58e41ad52e85eb02a9ee660889b9c2d08f5e223df88e40da7a2e->enter($__internal_849c79e20eec58e41ad52e85eb02a9ee660889b9c2d08f5e223df88e40da7a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_object-dp.js"));

        // line 1
        echo "var anObject = require('./_an-object');
var IE8_DOM_DEFINE = require('./_ie8-dom-define');
var toPrimitive = require('./_to-primitive');
var dP = Object.defineProperty;

exports.f = require('./_descriptors') ? Object.defineProperty : function defineProperty(O, P, Attributes) {
  anObject(O);
  P = toPrimitive(P, true);
  anObject(Attributes);
  if (IE8_DOM_DEFINE) try {
    return dP(O, P, Attributes);
  } catch (e) { /* empty */ }
  if ('get' in Attributes || 'set' in Attributes) throw TypeError('Accessors not supported!');
  if ('value' in Attributes) O[P] = Attributes.value;
  return O;
};
";
        
        $__internal_849c79e20eec58e41ad52e85eb02a9ee660889b9c2d08f5e223df88e40da7a2e->leave($__internal_849c79e20eec58e41ad52e85eb02a9ee660889b9c2d08f5e223df88e40da7a2e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_object-dp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var anObject = require('./_an-object');
var IE8_DOM_DEFINE = require('./_ie8-dom-define');
var toPrimitive = require('./_to-primitive');
var dP = Object.defineProperty;

exports.f = require('./_descriptors') ? Object.defineProperty : function defineProperty(O, P, Attributes) {
  anObject(O);
  P = toPrimitive(P, true);
  anObject(Attributes);
  if (IE8_DOM_DEFINE) try {
    return dP(O, P, Attributes);
  } catch (e) { /* empty */ }
  if ('get' in Attributes || 'set' in Attributes) throw TypeError('Accessors not supported!');
  if ('value' in Attributes) O[P] = Attributes.value;
  return O;
};
", "node_modules/core-js/modules/_object-dp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_object-dp.js");
    }
}
