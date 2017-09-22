<?php

/* node_modules/es5-ext/test/array/#/compact.js */
class __TwigTemplate_256f93588dbfd194135427568b66898b5544169605c7fd97a99690f2350c6d0a extends Twig_Template
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
        $__internal_8fe895ac8455dd61e36ce1ad45b5c6cf691d1ca2515f3a86151b93abef7d4bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe895ac8455dd61e36ce1ad45b5c6cf691d1ca2515f3a86151b93abef7d4bd5->enter($__internal_8fe895ac8455dd61e36ce1ad45b5c6cf691d1ca2515f3a86151b93abef7d4bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/compact.js"));

        // line 1
        echo "\"use strict\";

module.exports = {
\t\"__generic\": function (t, a) {
\t\ta(t.call(this).length, 3);
\t},
\t\"\": function (t, a) {
\t\tvar o, x, y, z;
\t\to = {};
\t\tx = [0, 1, \"\", null, o, false, undefined, true];
\t\ty = x.slice(0);

\t\ta.not(z = t.call(x), x, \"Returns different object\");
\t\ta.deep(x, y, \"Origin not changed\");
\t\ta.deep(z, [0, 1, \"\", o, false, true], \"Result\");
\t}
};
";
        
        $__internal_8fe895ac8455dd61e36ce1ad45b5c6cf691d1ca2515f3a86151b93abef7d4bd5->leave($__internal_8fe895ac8455dd61e36ce1ad45b5c6cf691d1ca2515f3a86151b93abef7d4bd5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/compact.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = {
\t\"__generic\": function (t, a) {
\t\ta(t.call(this).length, 3);
\t},
\t\"\": function (t, a) {
\t\tvar o, x, y, z;
\t\to = {};
\t\tx = [0, 1, \"\", null, o, false, undefined, true];
\t\ty = x.slice(0);

\t\ta.not(z = t.call(x), x, \"Returns different object\");
\t\ta.deep(x, y, \"Origin not changed\");
\t\ta.deep(z, [0, 1, \"\", o, false, true], \"Result\");
\t}
};
", "node_modules/es5-ext/test/array/#/compact.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/compact.js");
    }
}
