<?php

/* node_modules/es5-ext/test/optional-chaining.js */
class __TwigTemplate_d6edac017f862b288f35ff6feff7608127d25f9d5841340687069bd608fcb27f extends Twig_Template
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
        $__internal_d836a1deacaf5043fe2aa065d507c019b37ea522557e6d4ec8d9f63482ae23da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d836a1deacaf5043fe2aa065d507c019b37ea522557e6d4ec8d9f63482ae23da->enter($__internal_d836a1deacaf5043fe2aa065d507c019b37ea522557e6d4ec8d9f63482ae23da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/optional-chaining.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar obj = { foo: { bar: \"elo\", par: null } };
\ta(t(), undefined);
\ta(t(null), null);
\ta(t(obj), obj);
\ta(t(obj, \"foo\"), obj.foo);
\ta(t(obj, \"foo\", \"bar\"), \"elo\");
\ta(t(obj, \"foo\", \"bar\", \"slice\"), String.prototype.slice);
\ta(t(obj, \"foo\", \"par\"), null);
\ta(t(obj, \"foo\", \"par\", \"marko\"), undefined);
\ta(t(obj, \"marko\"), undefined);
\ta(t(\"\"), \"\");
\ta(t(\"\", \"foo\"), undefined);
\ta(t(\"\", \"slice\"), String.prototype.slice);
};
";
        
        $__internal_d836a1deacaf5043fe2aa065d507c019b37ea522557e6d4ec8d9f63482ae23da->leave($__internal_d836a1deacaf5043fe2aa065d507c019b37ea522557e6d4ec8d9f63482ae23da_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/optional-chaining.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar obj = { foo: { bar: \"elo\", par: null } };
\ta(t(), undefined);
\ta(t(null), null);
\ta(t(obj), obj);
\ta(t(obj, \"foo\"), obj.foo);
\ta(t(obj, \"foo\", \"bar\"), \"elo\");
\ta(t(obj, \"foo\", \"bar\", \"slice\"), String.prototype.slice);
\ta(t(obj, \"foo\", \"par\"), null);
\ta(t(obj, \"foo\", \"par\", \"marko\"), undefined);
\ta(t(obj, \"marko\"), undefined);
\ta(t(\"\"), \"\");
\ta(t(\"\", \"foo\"), undefined);
\ta(t(\"\", \"slice\"), String.prototype.slice);
};
", "node_modules/es5-ext/test/optional-chaining.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/optional-chaining.js");
    }
}
