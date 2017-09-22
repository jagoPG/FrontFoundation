<?php

/* node_modules/core-js/library/modules/_object-gpo.js */
class __TwigTemplate_966c5d2df04315553530bb0564a6cafa08bdd9b1dd2778d4c50ac3c2632dc683 extends Twig_Template
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
        $__internal_2a1dd7b218b5213dad577ba334b5a4d9e2b92326cf057eb5e9122a57e0364cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1dd7b218b5213dad577ba334b5a4d9e2b92326cf057eb5e9122a57e0364cd5->enter($__internal_2a1dd7b218b5213dad577ba334b5a4d9e2b92326cf057eb5e9122a57e0364cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_object-gpo.js"));

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
        
        $__internal_2a1dd7b218b5213dad577ba334b5a4d9e2b92326cf057eb5e9122a57e0364cd5->leave($__internal_2a1dd7b218b5213dad577ba334b5a4d9e2b92326cf057eb5e9122a57e0364cd5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_object-gpo.js";
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
", "node_modules/core-js/library/modules/_object-gpo.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_object-gpo.js");
    }
}
