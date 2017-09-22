<?php

/* node_modules/core-js/modules/core.string.unescape-html.js */
class __TwigTemplate_f7dc6f628eacb0834134aa235b21a734f15ba2b26baae629781ad3df5c874ded extends Twig_Template
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
        $__internal_0c5ceb4d8942be83b307fc92570211e4b169a8af3ee8aa0d9a23d43f29986317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c5ceb4d8942be83b307fc92570211e4b169a8af3ee8aa0d9a23d43f29986317->enter($__internal_0c5ceb4d8942be83b307fc92570211e4b169a8af3ee8aa0d9a23d43f29986317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/core.string.unescape-html.js"));

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
        
        $__internal_0c5ceb4d8942be83b307fc92570211e4b169a8af3ee8aa0d9a23d43f29986317->leave($__internal_0c5ceb4d8942be83b307fc92570211e4b169a8af3ee8aa0d9a23d43f29986317_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/core.string.unescape-html.js";
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
", "node_modules/core-js/modules/core.string.unescape-html.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/core.string.unescape-html.js");
    }
}
