<?php

/* node_modules/es5-ext/test/array/#/copy-within/shim.js */
class __TwigTemplate_cde22454560f9e17ecaf5ac37b1f5c2fa314a593b48957a8de4197e1f9de243a extends Twig_Template
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
        $__internal_362cc61b3104e33d49bc1a3fc65ed86865ec6980cff860436c5e673544d73e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_362cc61b3104e33d49bc1a3fc65ed86865ec6980cff860436c5e673544d73e8b->enter($__internal_362cc61b3104e33d49bc1a3fc65ed86865ec6980cff860436c5e673544d73e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/copy-within/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar args, x;

\ta.h1(\"2 args\");
\tx = [1, 2, 3, 4, 5];
\tt.call(x, 0, 3);
\ta.deep(x, [4, 5, 3, 4, 5]);
\ta.deep(t.call([1, 2, 3, 4, 5], 1, 3), [1, 4, 5, 4, 5]);
\ta.deep(t.call([1, 2, 3, 4, 5], 1, 2), [1, 3, 4, 5, 5]);
\ta.deep(t.call([1, 2, 3, 4, 5], 2, 2), [1, 2, 3, 4, 5]);

\ta.h1(\"3 args\");
\ta.deep(t.call([1, 2, 3, 4, 5], 0, 3, 4), [4, 2, 3, 4, 5]);
\ta.deep(t.call([1, 2, 3, 4, 5], 1, 3, 4), [1, 4, 3, 4, 5]);
\ta.deep(t.call([1, 2, 3, 4, 5], 1, 2, 4), [1, 3, 4, 4, 5]);

\ta.h1(\"Negative args\");
\ta.deep(t.call([1, 2, 3, 4, 5], 0, -2), [4, 5, 3, 4, 5]);
\ta.deep(t.call([1, 2, 3, 4, 5], 0, -2, -1), [4, 2, 3, 4, 5]);
\ta.deep(t.call([1, 2, 3, 4, 5], -4, -3, -2), [1, 3, 3, 4, 5]);
\ta.deep(t.call([1, 2, 3, 4, 5], -4, -3, -1), [1, 3, 4, 4, 5]);
\ta.deep(t.call([1, 2, 3, 4, 5], -4, -3), [1, 3, 4, 5, 5]);

\ta.h1(\"Array-likes\");
\targs = { 0: 1, 1: 2, 2: 3, length: 3 };
\ta.deep(t.call(args, -2, 0), { 0: 1, 1: 1, 2: 2, length: 3 });
};
";
        
        $__internal_362cc61b3104e33d49bc1a3fc65ed86865ec6980cff860436c5e673544d73e8b->leave($__internal_362cc61b3104e33d49bc1a3fc65ed86865ec6980cff860436c5e673544d73e8b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/copy-within/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar args, x;

\ta.h1(\"2 args\");
\tx = [1, 2, 3, 4, 5];
\tt.call(x, 0, 3);
\ta.deep(x, [4, 5, 3, 4, 5]);
\ta.deep(t.call([1, 2, 3, 4, 5], 1, 3), [1, 4, 5, 4, 5]);
\ta.deep(t.call([1, 2, 3, 4, 5], 1, 2), [1, 3, 4, 5, 5]);
\ta.deep(t.call([1, 2, 3, 4, 5], 2, 2), [1, 2, 3, 4, 5]);

\ta.h1(\"3 args\");
\ta.deep(t.call([1, 2, 3, 4, 5], 0, 3, 4), [4, 2, 3, 4, 5]);
\ta.deep(t.call([1, 2, 3, 4, 5], 1, 3, 4), [1, 4, 3, 4, 5]);
\ta.deep(t.call([1, 2, 3, 4, 5], 1, 2, 4), [1, 3, 4, 4, 5]);

\ta.h1(\"Negative args\");
\ta.deep(t.call([1, 2, 3, 4, 5], 0, -2), [4, 5, 3, 4, 5]);
\ta.deep(t.call([1, 2, 3, 4, 5], 0, -2, -1), [4, 2, 3, 4, 5]);
\ta.deep(t.call([1, 2, 3, 4, 5], -4, -3, -2), [1, 3, 3, 4, 5]);
\ta.deep(t.call([1, 2, 3, 4, 5], -4, -3, -1), [1, 3, 4, 4, 5]);
\ta.deep(t.call([1, 2, 3, 4, 5], -4, -3), [1, 3, 4, 5, 5]);

\ta.h1(\"Array-likes\");
\targs = { 0: 1, 1: 2, 2: 3, length: 3 };
\ta.deep(t.call(args, -2, 0), { 0: 1, 1: 1, 2: 2, length: 3 });
};
", "node_modules/es5-ext/test/array/#/copy-within/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/copy-within/shim.js");
    }
}
