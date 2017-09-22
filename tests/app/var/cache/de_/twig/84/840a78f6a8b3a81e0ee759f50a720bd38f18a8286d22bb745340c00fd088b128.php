<?php

/* node_modules/core-js/modules/_object-gopd.js */
class __TwigTemplate_68350e35d0f20eb2b8bffc56286666faf028ba84cbd3e91dcae001dc63988aa5 extends Twig_Template
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
        $__internal_c26833367da5353c35ea5a8ba88ae8b6203fb34191017db50f8d55357f835ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c26833367da5353c35ea5a8ba88ae8b6203fb34191017db50f8d55357f835ed2->enter($__internal_c26833367da5353c35ea5a8ba88ae8b6203fb34191017db50f8d55357f835ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_object-gopd.js"));

        // line 1
        echo "var pIE = require('./_object-pie');
var createDesc = require('./_property-desc');
var toIObject = require('./_to-iobject');
var toPrimitive = require('./_to-primitive');
var has = require('./_has');
var IE8_DOM_DEFINE = require('./_ie8-dom-define');
var gOPD = Object.getOwnPropertyDescriptor;

exports.f = require('./_descriptors') ? gOPD : function getOwnPropertyDescriptor(O, P) {
  O = toIObject(O);
  P = toPrimitive(P, true);
  if (IE8_DOM_DEFINE) try {
    return gOPD(O, P);
  } catch (e) { /* empty */ }
  if (has(O, P)) return createDesc(!pIE.f.call(O, P), O[P]);
};
";
        
        $__internal_c26833367da5353c35ea5a8ba88ae8b6203fb34191017db50f8d55357f835ed2->leave($__internal_c26833367da5353c35ea5a8ba88ae8b6203fb34191017db50f8d55357f835ed2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_object-gopd.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var pIE = require('./_object-pie');
var createDesc = require('./_property-desc');
var toIObject = require('./_to-iobject');
var toPrimitive = require('./_to-primitive');
var has = require('./_has');
var IE8_DOM_DEFINE = require('./_ie8-dom-define');
var gOPD = Object.getOwnPropertyDescriptor;

exports.f = require('./_descriptors') ? gOPD : function getOwnPropertyDescriptor(O, P) {
  O = toIObject(O);
  P = toPrimitive(P, true);
  if (IE8_DOM_DEFINE) try {
    return gOPD(O, P);
  } catch (e) { /* empty */ }
  if (has(O, P)) return createDesc(!pIE.f.call(O, P), O[P]);
};
", "node_modules/core-js/modules/_object-gopd.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_object-gopd.js");
    }
}
