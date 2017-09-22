<?php

/* node_modules/webpack/buildin/global.js */
class __TwigTemplate_7b64a977d7895a4323677ad05509caf8f70bc0f2ede10528f224fe1ae71b7183 extends Twig_Template
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
        $__internal_1347333d61f992a5439d203c332345cdac6fca50a89fc3c58c61231fca863076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1347333d61f992a5439d203c332345cdac6fca50a89fc3c58c61231fca863076->enter($__internal_1347333d61f992a5439d203c332345cdac6fca50a89fc3c58c61231fca863076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/buildin/global.js"));

        // line 1
        echo "var g;

// This works in non-strict mode
g = (function() {
\treturn this;
})();

try {
\t// This works if eval is allowed (see CSP)
\tg = g || Function(\"return this\")() || (1,eval)(\"this\");
} catch(e) {
\t// This works if the window reference is available
\tif(typeof window === \"object\")
\t\tg = window;
}

// g can still be undefined, but nothing to do about it...
// We return undefined, instead of nothing here, so it's
// easier to handle this case. if(!global) { ...}

module.exports = g;
";
        
        $__internal_1347333d61f992a5439d203c332345cdac6fca50a89fc3c58c61231fca863076->leave($__internal_1347333d61f992a5439d203c332345cdac6fca50a89fc3c58c61231fca863076_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/buildin/global.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var g;

// This works in non-strict mode
g = (function() {
\treturn this;
})();

try {
\t// This works if eval is allowed (see CSP)
\tg = g || Function(\"return this\")() || (1,eval)(\"this\");
} catch(e) {
\t// This works if the window reference is available
\tif(typeof window === \"object\")
\t\tg = window;
}

// g can still be undefined, but nothing to do about it...
// We return undefined, instead of nothing here, so it's
// easier to handle this case. if(!global) { ...}

module.exports = g;
", "node_modules/webpack/buildin/global.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/buildin/global.js");
    }
}
