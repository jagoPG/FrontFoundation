<?php

/* node_modules/core-js/modules/_object-gpo.js */
class __TwigTemplate_b2db3430a8d6b30ac3e9c820ebbd309d3c23c901fc8aa59ba725f34ef9136bd2 extends Twig_Template
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
        $__internal_8fdef9bf33049cd2068af8d02f93ef3c5ed7b6e275cfe082eb2cbb81472d9c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fdef9bf33049cd2068af8d02f93ef3c5ed7b6e275cfe082eb2cbb81472d9c61->enter($__internal_8fdef9bf33049cd2068af8d02f93ef3c5ed7b6e275cfe082eb2cbb81472d9c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_object-gpo.js"));

        // line 1
        echo "// 19.1.2.9 / 15.2.3.2 Object.getPrototypeOf(O)
var has = require('./_has');
var toObject = require('./_to-object');
var IE_PROTO = require('./_shared-key')('IE_PROTO');
var ObjectProto = Object.prototype;

module.exports = Object.getPrototypeOf || function (O) {
  O = toObject(O);
  if (has(O, IE_PROTO)) return O[IE_PROTO];
  if (typeof O.constructor == 'function' && O instanceof O.constructor) {
    return O.constructor.prototype;
  } return O instanceof Object ? ObjectProto : null;
};
";
        
        $__internal_8fdef9bf33049cd2068af8d02f93ef3c5ed7b6e275cfe082eb2cbb81472d9c61->leave($__internal_8fdef9bf33049cd2068af8d02f93ef3c5ed7b6e275cfe082eb2cbb81472d9c61_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_object-gpo.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 19.1.2.9 / 15.2.3.2 Object.getPrototypeOf(O)
var has = require('./_has');
var toObject = require('./_to-object');
var IE_PROTO = require('./_shared-key')('IE_PROTO');
var ObjectProto = Object.prototype;

module.exports = Object.getPrototypeOf || function (O) {
  O = toObject(O);
  if (has(O, IE_PROTO)) return O[IE_PROTO];
  if (typeof O.constructor == 'function' && O instanceof O.constructor) {
    return O.constructor.prototype;
  } return O instanceof Object ? ObjectProto : null;
};
", "node_modules/core-js/modules/_object-gpo.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_object-gpo.js");
    }
}