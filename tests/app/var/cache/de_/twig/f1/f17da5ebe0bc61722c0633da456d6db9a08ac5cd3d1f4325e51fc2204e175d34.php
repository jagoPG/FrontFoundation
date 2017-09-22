<?php

/* node_modules/core-js/modules/es6.regexp.match.js */
class __TwigTemplate_b5c586f675f72d7c24473c2211d4b2c0c9e380a956adf23463f757e3bee48c46 extends Twig_Template
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
        $__internal_7a9cf6be2eacb7a8d6d057c153e46b0c1ee9c3ff9e574c46da7b427771b32564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9cf6be2eacb7a8d6d057c153e46b0c1ee9c3ff9e574c46da7b427771b32564->enter($__internal_7a9cf6be2eacb7a8d6d057c153e46b0c1ee9c3ff9e574c46da7b427771b32564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.regexp.match.js"));

        // line 1
        echo "// @@match logic
require('./_fix-re-wks')('match', 1, function (defined, MATCH, \$match) {
  // 21.1.3.11 String.prototype.match(regexp)
  return [function match(regexp) {
    'use strict';
    var O = defined(this);
    var fn = regexp == undefined ? undefined : regexp[MATCH];
    return fn !== undefined ? fn.call(regexp, O) : new RegExp(regexp)[MATCH](String(O));
  }, \$match];
});
";
        
        $__internal_7a9cf6be2eacb7a8d6d057c153e46b0c1ee9c3ff9e574c46da7b427771b32564->leave($__internal_7a9cf6be2eacb7a8d6d057c153e46b0c1ee9c3ff9e574c46da7b427771b32564_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.regexp.match.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// @@match logic
require('./_fix-re-wks')('match', 1, function (defined, MATCH, \$match) {
  // 21.1.3.11 String.prototype.match(regexp)
  return [function match(regexp) {
    'use strict';
    var O = defined(this);
    var fn = regexp == undefined ? undefined : regexp[MATCH];
    return fn !== undefined ? fn.call(regexp, O) : new RegExp(regexp)[MATCH](String(O));
  }, \$match];
});
", "node_modules/core-js/modules/es6.regexp.match.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.regexp.match.js");
    }
}
