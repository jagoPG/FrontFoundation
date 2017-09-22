<?php

/* node_modules/fsevents/node_modules/debug/src/index.js */
class __TwigTemplate_efbf3411b5b837c9a0fb6f7499df1ea93451b11c700f82d29d51d685a0a65a10 extends Twig_Template
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
        $__internal_ec0c8241e9e9adedf6fcf1113d88f93ae3367e7568cc20725276471f2e0d0ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0c8241e9e9adedf6fcf1113d88f93ae3367e7568cc20725276471f2e0d0ddb->enter($__internal_ec0c8241e9e9adedf6fcf1113d88f93ae3367e7568cc20725276471f2e0d0ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/debug/src/index.js"));

        // line 1
        echo "/**
 * Detect Electron renderer process, which is node, but we should
 * treat as a browser.
 */

if (typeof process !== 'undefined' && process.type === 'renderer') {
  module.exports = require('./browser.js');
} else {
  module.exports = require('./node.js');
}
";
        
        $__internal_ec0c8241e9e9adedf6fcf1113d88f93ae3367e7568cc20725276471f2e0d0ddb->leave($__internal_ec0c8241e9e9adedf6fcf1113d88f93ae3367e7568cc20725276471f2e0d0ddb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/debug/src/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Detect Electron renderer process, which is node, but we should
 * treat as a browser.
 */

if (typeof process !== 'undefined' && process.type === 'renderer') {
  module.exports = require('./browser.js');
} else {
  module.exports = require('./node.js');
}
", "node_modules/fsevents/node_modules/debug/src/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/debug/src/index.js");
    }
}
