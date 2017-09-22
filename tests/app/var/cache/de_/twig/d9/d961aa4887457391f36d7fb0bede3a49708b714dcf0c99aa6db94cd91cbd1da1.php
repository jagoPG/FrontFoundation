<?php

/* node_modules/core-js/library/modules/core.string.unescape-html.js */
class __TwigTemplate_dc52c459def36ef7eee8f21365e8ce149305a84f9bde0660ab01d2efb2c1a830 extends Twig_Template
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
        $__internal_f48bfcb8771c3cd086415074d5b4e2c0aa42560472878a848f89e7d667e9edfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48bfcb8771c3cd086415074d5b4e2c0aa42560472878a848f89e7d667e9edfd->enter($__internal_f48bfcb8771c3cd086415074d5b4e2c0aa42560472878a848f89e7d667e9edfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/core.string.unescape-html.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var \$re = require('./_replacer')(/&(?:amp|lt|gt|quot|apos);/g, {
  '&amp;': '&',
  '&lt;': '<',
  '&gt;': '>',
  '&quot;': '\"',
  '&apos;': \"'\"
});

\$export(\$export.P + \$export.F, 'String', { unescapeHTML: function unescapeHTML() { return \$re(this); } });
";
        
        $__internal_f48bfcb8771c3cd086415074d5b4e2c0aa42560472878a848f89e7d667e9edfd->leave($__internal_f48bfcb8771c3cd086415074d5b4e2c0aa42560472878a848f89e7d667e9edfd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/core.string.unescape-html.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var \$export = require('./_export');
var \$re = require('./_replacer')(/&(?:amp|lt|gt|quot|apos);/g, {
  '&amp;': '&',
  '&lt;': '<',
  '&gt;': '>',
  '&quot;': '\"',
  '&apos;': \"'\"
});

\$export(\$export.P + \$export.F, 'String', { unescapeHTML: function unescapeHTML() { return \$re(this); } });
", "node_modules/core-js/library/modules/core.string.unescape-html.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/core.string.unescape-html.js");
    }
}
