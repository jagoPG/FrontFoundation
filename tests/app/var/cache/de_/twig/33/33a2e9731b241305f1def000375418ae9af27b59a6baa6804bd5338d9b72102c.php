<?php

/* node_modules/core-js/library/modules/core.string.escape-html.js */
class __TwigTemplate_dfb3098887b3bb10ae227c7a29162630b12d589170e0a3f0824229e16faaecc7 extends Twig_Template
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
        $__internal_134cc8325f2b2e81b69631cccb0098c4ab54c85e6966cdb15adcf5b8ef5b8954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134cc8325f2b2e81b69631cccb0098c4ab54c85e6966cdb15adcf5b8ef5b8954->enter($__internal_134cc8325f2b2e81b69631cccb0098c4ab54c85e6966cdb15adcf5b8ef5b8954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/core.string.escape-html.js"));

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
        
        $__internal_134cc8325f2b2e81b69631cccb0098c4ab54c85e6966cdb15adcf5b8ef5b8954->leave($__internal_134cc8325f2b2e81b69631cccb0098c4ab54c85e6966cdb15adcf5b8ef5b8954_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/core.string.escape-html.js";
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
", "node_modules/core-js/library/modules/core.string.escape-html.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/core.string.escape-html.js");
    }
}
