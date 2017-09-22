<?php

/* node_modules/es6-set/ext/some.js */
class __TwigTemplate_96876557b6c7ee710932e41d3e46e7abf9f607725b212aecdc9b588061ed32b0 extends Twig_Template
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
        $__internal_909dca4fdc80de749729a39f22a8cd9937c1dc66b1e16084198cee7925bbb6ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_909dca4fdc80de749729a39f22a8cd9937c1dc66b1e16084198cee7925bbb6ad->enter($__internal_909dca4fdc80de749729a39f22a8cd9937c1dc66b1e16084198cee7925bbb6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/ext/some.js"));

        // line 1
        echo "'use strict';

var callable = require('es5-ext/object/valid-callable')
  , forOf    = require('es6-iterator/for-of')

  , call = Function.prototype.call;

module.exports = function (cb/*, thisArg*/) {
\tvar thisArg = arguments[1], result = false;
\tcallable(cb);
\tforOf(this, function (value, doBreak) {
\t\tif (call.call(cb, thisArg, value)) {
\t\t\tresult = true;
\t\t\tdoBreak();
\t\t}
\t});
\treturn result;
};
";
        
        $__internal_909dca4fdc80de749729a39f22a8cd9937c1dc66b1e16084198cee7925bbb6ad->leave($__internal_909dca4fdc80de749729a39f22a8cd9937c1dc66b1e16084198cee7925bbb6ad_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/ext/some.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var callable = require('es5-ext/object/valid-callable')
  , forOf    = require('es6-iterator/for-of')

  , call = Function.prototype.call;

module.exports = function (cb/*, thisArg*/) {
\tvar thisArg = arguments[1], result = false;
\tcallable(cb);
\tforOf(this, function (value, doBreak) {
\t\tif (call.call(cb, thisArg, value)) {
\t\t\tresult = true;
\t\t\tdoBreak();
\t\t}
\t});
\treturn result;
};
", "node_modules/es6-set/ext/some.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/ext/some.js");
    }
}
