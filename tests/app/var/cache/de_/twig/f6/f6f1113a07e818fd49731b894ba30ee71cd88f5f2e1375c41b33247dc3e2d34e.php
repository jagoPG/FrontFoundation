<?php

/* node_modules/es6-map/test/is-implemented.js */
class __TwigTemplate_57fcc1633f5fe043ccaf9cc18aba7eea83a63e5a892b1dbeef0dac2a0a4e2e47 extends Twig_Template
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
        $__internal_1e924de68ed8b49bb5549e2e3d17d1421e8c33c41fb1c38ccc1a255c8fec670e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e924de68ed8b49bb5549e2e3d17d1421e8c33c41fb1c38ccc1a255c8fec670e->enter($__internal_1e924de68ed8b49bb5549e2e3d17d1421e8c33c41fb1c38ccc1a255c8fec670e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-map/test/is-implemented.js"));

        // line 1
        echo "'use strict';

var global   = require('es5-ext/global')
  , polyfill = require('../polyfill');

module.exports = function (t, a) {
\tvar cache;
\ta(typeof t(), 'boolean');
\tcache = global.Map;
\tglobal.Map = polyfill;
\ta(t(), true);
\tif (cache === undefined) delete global.Map;
\telse global.Map = cache;
};
";
        
        $__internal_1e924de68ed8b49bb5549e2e3d17d1421e8c33c41fb1c38ccc1a255c8fec670e->leave($__internal_1e924de68ed8b49bb5549e2e3d17d1421e8c33c41fb1c38ccc1a255c8fec670e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-map/test/is-implemented.js";
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
\tcache = global.Map;
\tglobal.Map = polyfill;
\ta(t(), true);
\tif (cache === undefined) delete global.Map;
\telse global.Map = cache;
};
", "node_modules/es6-map/test/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-map/test/is-implemented.js");
    }
}
