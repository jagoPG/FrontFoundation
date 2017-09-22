<?php

/* node_modules/core-js/library/modules/es7.string.at.js */
class __TwigTemplate_51a8b04c6d82cd4d1f89d9cf71bda5995efb95b97a0eff34c3f378ecca6c1027 extends Twig_Template
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
        $__internal_614028ecde237bc96e3ff5c1a5574e82298b0c20c431bb804e9d781ae4ea20a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_614028ecde237bc96e3ff5c1a5574e82298b0c20c431bb804e9d781ae4ea20a7->enter($__internal_614028ecde237bc96e3ff5c1a5574e82298b0c20c431bb804e9d781ae4ea20a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.string.at.js"));

        // line 1
        echo "'use strict';
// https://github.com/mathiasbynens/String.prototype.at
var \$export = require('./_export');
var \$at = require('./_string-at')(true);

\$export(\$export.P, 'String', {
  at: function at(pos) {
    return \$at(this, pos);
  }
});
";
        
        $__internal_614028ecde237bc96e3ff5c1a5574e82298b0c20c431bb804e9d781ae4ea20a7->leave($__internal_614028ecde237bc96e3ff5c1a5574e82298b0c20c431bb804e9d781ae4ea20a7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.string.at.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// https://github.com/mathiasbynens/String.prototype.at
var \$export = require('./_export');
var \$at = require('./_string-at')(true);

\$export(\$export.P, 'String', {
  at: function at(pos) {
    return \$at(this, pos);
  }
});
", "node_modules/core-js/library/modules/es7.string.at.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.string.at.js");
    }
}
