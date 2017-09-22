<?php

/* node_modules/core-js/library/modules/_object-dp.js */
class __TwigTemplate_b678a403aac57728568e494dbafb98e768e796596d09f47e1bdbc2cbe8b95e7e extends Twig_Template
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
        $__internal_b0a03ca4b48a1f1f8b6206f527bbfb6b1292c4405fd6c2d4e9b8744da59c8b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a03ca4b48a1f1f8b6206f527bbfb6b1292c4405fd6c2d4e9b8744da59c8b36->enter($__internal_b0a03ca4b48a1f1f8b6206f527bbfb6b1292c4405fd6c2d4e9b8744da59c8b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_object-dp.js"));

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
        
        $__internal_b0a03ca4b48a1f1f8b6206f527bbfb6b1292c4405fd6c2d4e9b8744da59c8b36->leave($__internal_b0a03ca4b48a1f1f8b6206f527bbfb6b1292c4405fd6c2d4e9b8744da59c8b36_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_object-dp.js";
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
", "node_modules/core-js/library/modules/_object-dp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_object-dp.js");
    }
}
