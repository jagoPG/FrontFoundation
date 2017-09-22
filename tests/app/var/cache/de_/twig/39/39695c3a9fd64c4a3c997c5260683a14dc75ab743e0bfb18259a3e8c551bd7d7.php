<?php

/* node_modules/core-js/library/modules/_set-collection-of.js */
class __TwigTemplate_ead4fafea5859c89d8433bb302f2c979f4997626fe70b88ca2b7eb2f24891be0 extends Twig_Template
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
        $__internal_bcbb6c3ddae46817d23396a869f6e90223472f8e97f29af5eb0069528cac7e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcbb6c3ddae46817d23396a869f6e90223472f8e97f29af5eb0069528cac7e09->enter($__internal_bcbb6c3ddae46817d23396a869f6e90223472f8e97f29af5eb0069528cac7e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_set-collection-of.js"));

        // line 1
        echo "'use strict';
// https://tc39.github.io/proposal-setmap-offrom/
var \$export = require('./_export');

module.exports = function (COLLECTION) {
  \$export(\$export.S, COLLECTION, { of: function of() {
    var length = arguments.length;
    var A = Array(length);
    while (length--) A[length] = arguments[length];
    return new this(A);
  } });
};
";
        
        $__internal_bcbb6c3ddae46817d23396a869f6e90223472f8e97f29af5eb0069528cac7e09->leave($__internal_bcbb6c3ddae46817d23396a869f6e90223472f8e97f29af5eb0069528cac7e09_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_set-collection-of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// https://tc39.github.io/proposal-setmap-offrom/
var \$export = require('./_export');

module.exports = function (COLLECTION) {
  \$export(\$export.S, COLLECTION, { of: function of() {
    var length = arguments.length;
    var A = Array(length);
    while (length--) A[length] = arguments[length];
    return new this(A);
  } });
};
", "node_modules/core-js/library/modules/_set-collection-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_set-collection-of.js");
    }
}
