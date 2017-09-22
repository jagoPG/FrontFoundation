<?php

/* node_modules/core-js/library/modules/_string-html.js */
class __TwigTemplate_839fe5e12e8a758f57fdb4f0735c386eeb543d5aa162a35e24a729bd40ccfd67 extends Twig_Template
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
        $__internal_66af956ed42299dbed45bf79397059a066197d5059a0dddffe14ffacafa475d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66af956ed42299dbed45bf79397059a066197d5059a0dddffe14ffacafa475d7->enter($__internal_66af956ed42299dbed45bf79397059a066197d5059a0dddffe14ffacafa475d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_string-html.js"));

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
        
        $__internal_66af956ed42299dbed45bf79397059a066197d5059a0dddffe14ffacafa475d7->leave($__internal_66af956ed42299dbed45bf79397059a066197d5059a0dddffe14ffacafa475d7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_string-html.js";
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
", "node_modules/core-js/library/modules/_string-html.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_string-html.js");
    }
}
