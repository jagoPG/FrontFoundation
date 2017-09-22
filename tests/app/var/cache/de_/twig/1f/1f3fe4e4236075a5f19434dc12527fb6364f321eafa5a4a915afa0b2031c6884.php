<?php

/* node_modules/core-js/modules/_string-html.js */
class __TwigTemplate_e947c359137170064e6b2e2bfeb1594dd6bd78a2e8e12cd5cd2feb328e402a14 extends Twig_Template
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
        $__internal_879ce74202f8da8c821075f51db80f08503a61bcda1ba1482181d5f9453a6173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_879ce74202f8da8c821075f51db80f08503a61bcda1ba1482181d5f9453a6173->enter($__internal_879ce74202f8da8c821075f51db80f08503a61bcda1ba1482181d5f9453a6173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_string-html.js"));

        // line 1
        echo "var \$export = require('./_export');
var fails = require('./_fails');
var defined = require('./_defined');
var quot = /\"/g;
// B.2.3.2.1 CreateHTML(string, tag, attribute, value)
var createHTML = function (string, tag, attribute, value) {
  var S = String(defined(string));
  var p1 = '<' + tag;
  if (attribute !== '') p1 += ' ' + attribute + '=\"' + String(value).replace(quot, '&quot;') + '\"';
  return p1 + '>' + S + '</' + tag + '>';
};
module.exports = function (NAME, exec) {
  var O = {};
  O[NAME] = exec(createHTML);
  \$export(\$export.P + \$export.F * fails(function () {
    var test = ''[NAME]('\"');
    return test !== test.toLowerCase() || test.split('\"').length > 3;
  }), 'String', O);
};
";
        
        $__internal_879ce74202f8da8c821075f51db80f08503a61bcda1ba1482181d5f9453a6173->leave($__internal_879ce74202f8da8c821075f51db80f08503a61bcda1ba1482181d5f9453a6173_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_string-html.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var \$export = require('./_export');
var fails = require('./_fails');
var defined = require('./_defined');
var quot = /\"/g;
// B.2.3.2.1 CreateHTML(string, tag, attribute, value)
var createHTML = function (string, tag, attribute, value) {
  var S = String(defined(string));
  var p1 = '<' + tag;
  if (attribute !== '') p1 += ' ' + attribute + '=\"' + String(value).replace(quot, '&quot;') + '\"';
  return p1 + '>' + S + '</' + tag + '>';
};
module.exports = function (NAME, exec) {
  var O = {};
  O[NAME] = exec(createHTML);
  \$export(\$export.P + \$export.F * fails(function () {
    var test = ''[NAME]('\"');
    return test !== test.toLowerCase() || test.split('\"').length > 3;
  }), 'String', O);
};
", "node_modules/core-js/modules/_string-html.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_string-html.js");
    }
}
