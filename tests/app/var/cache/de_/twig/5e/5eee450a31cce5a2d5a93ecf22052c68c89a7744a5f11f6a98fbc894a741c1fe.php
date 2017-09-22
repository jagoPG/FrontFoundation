<?php

/* node_modules/core-js/modules/es6.reflect.get.js */
class __TwigTemplate_29efbe09f3aa77b3313e22d13a1cfdeda5fcbec3ecffb8e877ee1bc6fd9b9fc3 extends Twig_Template
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
        $__internal_d4ae00abd607918a072b02ae76ce1b51eab7cd85fb4fb88e5eaf6de31a787ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ae00abd607918a072b02ae76ce1b51eab7cd85fb4fb88e5eaf6de31a787ee0->enter($__internal_d4ae00abd607918a072b02ae76ce1b51eab7cd85fb4fb88e5eaf6de31a787ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.reflect.get.js"));

        // line 1
        echo "// 26.1.6 Reflect.get(target, propertyKey [, receiver])
var gOPD = require('./_object-gopd');
var getPrototypeOf = require('./_object-gpo');
var has = require('./_has');
var \$export = require('./_export');
var isObject = require('./_is-object');
var anObject = require('./_an-object');

function get(target, propertyKey /* , receiver */) {
  var receiver = arguments.length < 3 ? target : arguments[2];
  var desc, proto;
  if (anObject(target) === receiver) return target[propertyKey];
  if (desc = gOPD.f(target, propertyKey)) return has(desc, 'value')
    ? desc.value
    : desc.get !== undefined
      ? desc.get.call(receiver)
      : undefined;
  if (isObject(proto = getPrototypeOf(target))) return get(proto, propertyKey, receiver);
}

\$export(\$export.S, 'Reflect', { get: get });
";
        
        $__internal_d4ae00abd607918a072b02ae76ce1b51eab7cd85fb4fb88e5eaf6de31a787ee0->leave($__internal_d4ae00abd607918a072b02ae76ce1b51eab7cd85fb4fb88e5eaf6de31a787ee0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.reflect.get.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 26.1.6 Reflect.get(target, propertyKey [, receiver])
var gOPD = require('./_object-gopd');
var getPrototypeOf = require('./_object-gpo');
var has = require('./_has');
var \$export = require('./_export');
var isObject = require('./_is-object');
var anObject = require('./_an-object');

function get(target, propertyKey /* , receiver */) {
  var receiver = arguments.length < 3 ? target : arguments[2];
  var desc, proto;
  if (anObject(target) === receiver) return target[propertyKey];
  if (desc = gOPD.f(target, propertyKey)) return has(desc, 'value')
    ? desc.value
    : desc.get !== undefined
      ? desc.get.call(receiver)
      : undefined;
  if (isObject(proto = getPrototypeOf(target))) return get(proto, propertyKey, receiver);
}

\$export(\$export.S, 'Reflect', { get: get });
", "node_modules/core-js/modules/es6.reflect.get.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.reflect.get.js");
    }
}
