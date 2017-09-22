<?php

/* node_modules/core-js/modules/es6.string.raw.js */
class __TwigTemplate_f94cfbe580c5d62bb9b0fe43b37695b4d9803825d5e4065e0c18dc37746a1e78 extends Twig_Template
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
        $__internal_954450edaf9a96c46e754bb5163df3c1d85b13f5f76bb5880452648e6eae6202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_954450edaf9a96c46e754bb5163df3c1d85b13f5f76bb5880452648e6eae6202->enter($__internal_954450edaf9a96c46e754bb5163df3c1d85b13f5f76bb5880452648e6eae6202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.string.raw.js"));

        // line 1
        echo "var \$export = require('./_export');
var toIObject = require('./_to-iobject');
var toLength = require('./_to-length');

\$export(\$export.S, 'String', {
  // 21.1.2.4 String.raw(callSite, ...substitutions)
  raw: function raw(callSite) {
    var tpl = toIObject(callSite.raw);
    var len = toLength(tpl.length);
    var aLen = arguments.length;
    var res = [];
    var i = 0;
    while (len > i) {
      res.push(String(tpl[i++]));
      if (i < aLen) res.push(String(arguments[i]));
    } return res.join('');
  }
});
";
        
        $__internal_954450edaf9a96c46e754bb5163df3c1d85b13f5f76bb5880452648e6eae6202->leave($__internal_954450edaf9a96c46e754bb5163df3c1d85b13f5f76bb5880452648e6eae6202_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.string.raw.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var \$export = require('./_export');
var toIObject = require('./_to-iobject');
var toLength = require('./_to-length');

\$export(\$export.S, 'String', {
  // 21.1.2.4 String.raw(callSite, ...substitutions)
  raw: function raw(callSite) {
    var tpl = toIObject(callSite.raw);
    var len = toLength(tpl.length);
    var aLen = arguments.length;
    var res = [];
    var i = 0;
    while (len > i) {
      res.push(String(tpl[i++]));
      if (i < aLen) res.push(String(arguments[i]));
    } return res.join('');
  }
});
", "node_modules/core-js/modules/es6.string.raw.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.string.raw.js");
    }
}
