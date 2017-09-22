<?php

/* node_modules/core-js/library/modules/es6.string.raw.js */
class __TwigTemplate_27346a99b40665c7a450024b0832aafdc207f276438ddeb01d16a988dc94fcab extends Twig_Template
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
        $__internal_037a011a190bd392b86f8a53bc7d541eb97dc1ee95078dad45642b6cf49ca385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037a011a190bd392b86f8a53bc7d541eb97dc1ee95078dad45642b6cf49ca385->enter($__internal_037a011a190bd392b86f8a53bc7d541eb97dc1ee95078dad45642b6cf49ca385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.string.raw.js"));

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
        
        $__internal_037a011a190bd392b86f8a53bc7d541eb97dc1ee95078dad45642b6cf49ca385->leave($__internal_037a011a190bd392b86f8a53bc7d541eb97dc1ee95078dad45642b6cf49ca385_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.string.raw.js";
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
", "node_modules/core-js/library/modules/es6.string.raw.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.string.raw.js");
    }
}
