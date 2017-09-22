<?php

/* node_modules/core-js/modules/es6.regexp.replace.js */
class __TwigTemplate_989559c8bf95ad29aecbf9730fa049149ea16954fecb198dac9201c73927631f extends Twig_Template
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
        $__internal_7bc02720c499bf6369fc0e478dc4e89f5c3666e04c63956561cec1a6d4ac8941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc02720c499bf6369fc0e478dc4e89f5c3666e04c63956561cec1a6d4ac8941->enter($__internal_7bc02720c499bf6369fc0e478dc4e89f5c3666e04c63956561cec1a6d4ac8941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.regexp.replace.js"));

        // line 1
        echo "// @@replace logic
require('./_fix-re-wks')('replace', 2, function (defined, REPLACE, \$replace) {
  // 21.1.3.14 String.prototype.replace(searchValue, replaceValue)
  return [function replace(searchValue, replaceValue) {
    'use strict';
    var O = defined(this);
    var fn = searchValue == undefined ? undefined : searchValue[REPLACE];
    return fn !== undefined
      ? fn.call(searchValue, O, replaceValue)
      : \$replace.call(String(O), searchValue, replaceValue);
  }, \$replace];
});
";
        
        $__internal_7bc02720c499bf6369fc0e478dc4e89f5c3666e04c63956561cec1a6d4ac8941->leave($__internal_7bc02720c499bf6369fc0e478dc4e89f5c3666e04c63956561cec1a6d4ac8941_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.regexp.replace.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// @@replace logic
require('./_fix-re-wks')('replace', 2, function (defined, REPLACE, \$replace) {
  // 21.1.3.14 String.prototype.replace(searchValue, replaceValue)
  return [function replace(searchValue, replaceValue) {
    'use strict';
    var O = defined(this);
    var fn = searchValue == undefined ? undefined : searchValue[REPLACE];
    return fn !== undefined
      ? fn.call(searchValue, O, replaceValue)
      : \$replace.call(String(O), searchValue, replaceValue);
  }, \$replace];
});
", "node_modules/core-js/modules/es6.regexp.replace.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.regexp.replace.js");
    }
}
