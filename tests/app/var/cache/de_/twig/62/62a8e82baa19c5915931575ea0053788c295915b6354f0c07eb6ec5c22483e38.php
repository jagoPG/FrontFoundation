<?php

/* node_modules/es5-ext/test/function/#/curry.js */
class __TwigTemplate_22cb0dbdfd8f0c083d0c46ba7308c4f297aef098dda0f8591a10600367154af8 extends Twig_Template
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
        $__internal_1e704609829ea2d7a8e2d7451cc056918ddea82ad350693a85d993e8fd0883a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e704609829ea2d7a8e2d7451cc056918ddea82ad350693a85d993e8fd0883a8->enter($__internal_1e704609829ea2d7a8e2d7451cc056918ddea82ad350693a85d993e8fd0883a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/function/#/curry.js"));

        // line 1
        echo "\"use strict\";

var toArray = require(\"../../../array/to-array\")

  , f = function () {
 return toArray(arguments);
};

module.exports = function (t, a) {
\tvar x, y = {}, z;
\ta.deep(t.call(f, 0, 1, 2)(3), [], \"0 arguments\");
\tx = t.call(f, 5, {});
\ta(x.length, 5, \"Length #1\");
\tz = x(1, 2);
\ta(z.length, 3, \"Length #2\");
\tz = z(3, 4);
\ta(z.length, 1, \"Length #1\");
\ta.deep(z(5, 6), [1, 2, 3, 4, 5], \"Many arguments\");
\ta.deep(x(8, 3)(y, 45)(\"raz\", 6), [8, 3, y, 45, \"raz\"], \"Many arguments #2\");
};
";
        
        $__internal_1e704609829ea2d7a8e2d7451cc056918ddea82ad350693a85d993e8fd0883a8->leave($__internal_1e704609829ea2d7a8e2d7451cc056918ddea82ad350693a85d993e8fd0883a8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/function/#/curry.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var toArray = require(\"../../../array/to-array\")

  , f = function () {
 return toArray(arguments);
};

module.exports = function (t, a) {
\tvar x, y = {}, z;
\ta.deep(t.call(f, 0, 1, 2)(3), [], \"0 arguments\");
\tx = t.call(f, 5, {});
\ta(x.length, 5, \"Length #1\");
\tz = x(1, 2);
\ta(z.length, 3, \"Length #2\");
\tz = z(3, 4);
\ta(z.length, 1, \"Length #1\");
\ta.deep(z(5, 6), [1, 2, 3, 4, 5], \"Many arguments\");
\ta.deep(x(8, 3)(y, 45)(\"raz\", 6), [8, 3, y, 45, \"raz\"], \"Many arguments #2\");
};
", "node_modules/es5-ext/test/function/#/curry.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/function/#/curry.js");
    }
}
