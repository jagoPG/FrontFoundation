<?php

/* node_modules/core-js/modules/es6.string.code-point-at.js */
class __TwigTemplate_fb1a4c899352eaa68130802c426f649fc954205e75945c111a07b2aa64a8bf23 extends Twig_Template
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
        $__internal_3482948886495cf59d55fbfd24428bfb1e033486f1c28c253b05a12d9c238d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3482948886495cf59d55fbfd24428bfb1e033486f1c28c253b05a12d9c238d0a->enter($__internal_3482948886495cf59d55fbfd24428bfb1e033486f1c28c253b05a12d9c238d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.string.code-point-at.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var \$at = require('./_string-at')(false);
\$export(\$export.P, 'String', {
  // 21.1.3.3 String.prototype.codePointAt(pos)
  codePointAt: function codePointAt(pos) {
    return \$at(this, pos);
  }
});
";
        
        $__internal_3482948886495cf59d55fbfd24428bfb1e033486f1c28c253b05a12d9c238d0a->leave($__internal_3482948886495cf59d55fbfd24428bfb1e033486f1c28c253b05a12d9c238d0a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.string.code-point-at.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var \$export = require('./_export');
var \$at = require('./_string-at')(false);
\$export(\$export.P, 'String', {
  // 21.1.3.3 String.prototype.codePointAt(pos)
  codePointAt: function codePointAt(pos) {
    return \$at(this, pos);
  }
});
", "node_modules/core-js/modules/es6.string.code-point-at.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.string.code-point-at.js");
    }
}
