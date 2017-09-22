<?php

/* node_modules/es5-ext/test/array/#/remove.js */
class __TwigTemplate_3cf1620bb5e83ae0ef0f656c2b9ef3f7023a760e4985ba32ec65752afe58ec47 extends Twig_Template
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
        $__internal_e87bef02ba04b7f8be92829ccb36123d12354a10c2ecb1d4aa68b272c92b4432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87bef02ba04b7f8be92829ccb36123d12354a10c2ecb1d4aa68b272c92b4432->enter($__internal_e87bef02ba04b7f8be92829ccb36123d12354a10c2ecb1d4aa68b272c92b4432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/remove.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar y = {}, z = {}, x = [9, z, 5, y, \"foo\"];
\tt.call(x, y);
\ta.deep(x, [9, z, 5, \"foo\"]);
\tt.call(x, {});
\ta.deep(x, [9, z, 5, \"foo\"], \"Not existing\");
\tt.call(x, 5);
\ta.deep(x, [9, z, \"foo\"], \"Primitive\");
\tx = [9, z, 5, y, \"foo\"];
\tt.call(x, z, 5, \"foo\");
\ta.deep(x, [9, y], \"More than one argument\");
};
";
        
        $__internal_e87bef02ba04b7f8be92829ccb36123d12354a10c2ecb1d4aa68b272c92b4432->leave($__internal_e87bef02ba04b7f8be92829ccb36123d12354a10c2ecb1d4aa68b272c92b4432_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/remove.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar y = {}, z = {}, x = [9, z, 5, y, \"foo\"];
\tt.call(x, y);
\ta.deep(x, [9, z, 5, \"foo\"]);
\tt.call(x, {});
\ta.deep(x, [9, z, 5, \"foo\"], \"Not existing\");
\tt.call(x, 5);
\ta.deep(x, [9, z, \"foo\"], \"Primitive\");
\tx = [9, z, 5, y, \"foo\"];
\tt.call(x, z, 5, \"foo\");
\ta.deep(x, [9, y], \"More than one argument\");
};
", "node_modules/es5-ext/test/array/#/remove.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/remove.js");
    }
}
