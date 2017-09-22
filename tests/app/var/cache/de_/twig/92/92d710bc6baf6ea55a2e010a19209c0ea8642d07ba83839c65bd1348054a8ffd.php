<?php

/* node_modules/d/test/auto-bind.js */
class __TwigTemplate_ee41f34c3aeb34e6062f75fb075ba765c6693eec4c0b4867d9140d817a2d5a3f extends Twig_Template
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
        $__internal_50a567c2d4b78f0856829fe9a26b11392e537a59294ec4d6663f48f334c4b116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a567c2d4b78f0856829fe9a26b11392e537a59294ec4d6663f48f334c4b116->enter($__internal_50a567c2d4b78f0856829fe9a26b11392e537a59294ec4d6663f48f334c4b116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/d/test/auto-bind.js"));

        // line 1
        echo "'use strict';

var d = require('../');

module.exports = function (t, a) {
\tvar o = Object.defineProperties({}, t({
\t\tbar: d(function () { return this === o; }),
\t\tbar2: d(function () { return this; })
\t}));

\ta.deep([(o.bar)(), (o.bar2)()], [true, o]);
};
";
        
        $__internal_50a567c2d4b78f0856829fe9a26b11392e537a59294ec4d6663f48f334c4b116->leave($__internal_50a567c2d4b78f0856829fe9a26b11392e537a59294ec4d6663f48f334c4b116_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/d/test/auto-bind.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var d = require('../');

module.exports = function (t, a) {
\tvar o = Object.defineProperties({}, t({
\t\tbar: d(function () { return this === o; }),
\t\tbar2: d(function () { return this; })
\t}));

\ta.deep([(o.bar)(), (o.bar2)()], [true, o]);
};
", "node_modules/d/test/auto-bind.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/d/test/auto-bind.js");
    }
}
