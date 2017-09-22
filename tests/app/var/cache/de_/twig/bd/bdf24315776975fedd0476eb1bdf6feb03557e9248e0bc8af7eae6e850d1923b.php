<?php

/* node_modules/es6-weak-map/test/is-implemented.js */
class __TwigTemplate_379bf5150c6cb15c5781f21a7d99117946513214b096f5da8c10dff00619a933 extends Twig_Template
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
        $__internal_2062f8e62c217bbd4c71403d0fa428c609e76bb28dc75d26c326e1abb400fc89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2062f8e62c217bbd4c71403d0fa428c609e76bb28dc75d26c326e1abb400fc89->enter($__internal_2062f8e62c217bbd4c71403d0fa428c609e76bb28dc75d26c326e1abb400fc89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-weak-map/test/is-implemented.js"));

        // line 1
        echo "'use strict';

var global   = require('es5-ext/global')
  , polyfill = require('../polyfill');

module.exports = function (t, a) {
\tvar cache;
\ta(typeof t(), 'boolean');
\tcache = global.WeakMap;
\tglobal.WeakMap = polyfill;
\ta(t(), true);
\tif (cache === undefined) delete global.WeakMap;
\telse global.WeakMap = cache;
};
";
        
        $__internal_2062f8e62c217bbd4c71403d0fa428c609e76bb28dc75d26c326e1abb400fc89->leave($__internal_2062f8e62c217bbd4c71403d0fa428c609e76bb28dc75d26c326e1abb400fc89_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-weak-map/test/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var global   = require('es5-ext/global')
  , polyfill = require('../polyfill');

module.exports = function (t, a) {
\tvar cache;
\ta(typeof t(), 'boolean');
\tcache = global.WeakMap;
\tglobal.WeakMap = polyfill;
\ta(t(), true);
\tif (cache === undefined) delete global.WeakMap;
\telse global.WeakMap = cache;
};
", "node_modules/es6-weak-map/test/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-weak-map/test/is-implemented.js");
    }
}
