<?php

/* node_modules/es5-ext/test/string/#/count.js */
class __TwigTemplate_f9c0fbfe09e32c0069e78b239ce69be462f9c5b03c34e653c6be52853dd7a015 extends Twig_Template
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
        $__internal_ce19d04cd738d9c8a591fb5878f2b43b9ec507b7314a0cd914403e6ac7cdf17f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce19d04cd738d9c8a591fb5878f2b43b9ec507b7314a0cd914403e6ac7cdf17f->enter($__internal_ce19d04cd738d9c8a591fb5878f2b43b9ec507b7314a0cd914403e6ac7cdf17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/count.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta.throws(function () {
\t\tt.call(\"\", \"\");
\t});
\ta(t.call(\"x\", \"x\"), 1);
\ta(t.call(\"xx\", \"x\"), 2);
\ta(t.call(\"xxx\", \"xx\"), 1);
\ta(t.call(\"xxxx\", \"xx\"), 2);
\ta(t.call(\"xx\", \"xxx\"), 0);
\ta(t.call(\"\", \"elo\"), 0);
\ta(t.call(\"fooo\", \"foofooo\"), 0);
};
";
        
        $__internal_ce19d04cd738d9c8a591fb5878f2b43b9ec507b7314a0cd914403e6ac7cdf17f->leave($__internal_ce19d04cd738d9c8a591fb5878f2b43b9ec507b7314a0cd914403e6ac7cdf17f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/count.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta.throws(function () {
\t\tt.call(\"\", \"\");
\t});
\ta(t.call(\"x\", \"x\"), 1);
\ta(t.call(\"xx\", \"x\"), 2);
\ta(t.call(\"xxx\", \"xx\"), 1);
\ta(t.call(\"xxxx\", \"xx\"), 2);
\ta(t.call(\"xx\", \"xxx\"), 0);
\ta(t.call(\"\", \"elo\"), 0);
\ta(t.call(\"fooo\", \"foofooo\"), 0);
};
", "node_modules/es5-ext/test/string/#/count.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/count.js");
    }
}
