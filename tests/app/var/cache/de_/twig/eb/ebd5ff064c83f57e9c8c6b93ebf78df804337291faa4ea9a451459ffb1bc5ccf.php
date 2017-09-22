<?php

/* node_modules/core-js/modules/core.string.escape-html.js */
class __TwigTemplate_17e7d68b4c7166c61cdb55e3b43a417f997976852812e0e237e40b3709ced998 extends Twig_Template
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
        $__internal_be9423c508bb6bf316baf0e3ad24ba9b25e1da9488c089d2e4e91f9a2ad54692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9423c508bb6bf316baf0e3ad24ba9b25e1da9488c089d2e4e91f9a2ad54692->enter($__internal_be9423c508bb6bf316baf0e3ad24ba9b25e1da9488c089d2e4e91f9a2ad54692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/core.string.escape-html.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var \$re = require('./_replacer')(/[&<>\"']/g, {
  '&': '&amp;',
  '<': '&lt;',
  '>': '&gt;',
  '\"': '&quot;',
  \"'\": '&apos;'
});

\$export(\$export.P + \$export.F, 'String', { escapeHTML: function escapeHTML() { return \$re(this); } });
";
        
        $__internal_be9423c508bb6bf316baf0e3ad24ba9b25e1da9488c089d2e4e91f9a2ad54692->leave($__internal_be9423c508bb6bf316baf0e3ad24ba9b25e1da9488c089d2e4e91f9a2ad54692_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/core.string.escape-html.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var \$export = require('./_export');
var \$re = require('./_replacer')(/[&<>\"']/g, {
  '&': '&amp;',
  '<': '&lt;',
  '>': '&gt;',
  '\"': '&quot;',
  \"'\": '&apos;'
});

\$export(\$export.P + \$export.F, 'String', { escapeHTML: function escapeHTML() { return \$re(this); } });
", "node_modules/core-js/modules/core.string.escape-html.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/core.string.escape-html.js");
    }
}
