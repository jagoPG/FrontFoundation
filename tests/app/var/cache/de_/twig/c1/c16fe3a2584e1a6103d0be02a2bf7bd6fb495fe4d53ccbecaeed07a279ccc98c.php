<?php

/* node_modules/string.prototype.trim/polyfill.js */
class __TwigTemplate_93e123e77ae8e30d0d66806f5c6e5c6f1ad867bffd7e359c57812fe5f2e8bc63 extends Twig_Template
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
        $__internal_74d4e8c685b269ae78bb6488eec5f122772f03acc02cf19d978d5c9a36c1fe76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d4e8c685b269ae78bb6488eec5f122772f03acc02cf19d978d5c9a36c1fe76->enter($__internal_74d4e8c685b269ae78bb6488eec5f122772f03acc02cf19d978d5c9a36c1fe76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/string.prototype.trim/polyfill.js"));

        // line 1
        echo "'use strict';

var implementation = require('./implementation');

var zeroWidthSpace = '\\u200b';

module.exports = function getPolyfill() {
\tif (String.prototype.trim && zeroWidthSpace.trim() === zeroWidthSpace) {
\t\treturn String.prototype.trim;
\t}
\treturn implementation;
};
";
        
        $__internal_74d4e8c685b269ae78bb6488eec5f122772f03acc02cf19d978d5c9a36c1fe76->leave($__internal_74d4e8c685b269ae78bb6488eec5f122772f03acc02cf19d978d5c9a36c1fe76_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/string.prototype.trim/polyfill.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var implementation = require('./implementation');

var zeroWidthSpace = '\\u200b';

module.exports = function getPolyfill() {
\tif (String.prototype.trim && zeroWidthSpace.trim() === zeroWidthSpace) {
\t\treturn String.prototype.trim;
\t}
\treturn implementation;
};
", "node_modules/string.prototype.trim/polyfill.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/string.prototype.trim/polyfill.js");
    }
}
