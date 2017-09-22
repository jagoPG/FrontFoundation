<?php

/* node_modules/path-key/index.js */
class __TwigTemplate_0f08d4d7aa52ccae7061d05a95706b17a72bd45b2322659a43e71bf91bf7988d extends Twig_Template
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
        $__internal_6b2c7330042b3166396a7142c02c21d97e2d2045de9f931d43a832d5d56c08a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b2c7330042b3166396a7142c02c21d97e2d2045de9f931d43a832d5d56c08a6->enter($__internal_6b2c7330042b3166396a7142c02c21d97e2d2045de9f931d43a832d5d56c08a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/path-key/index.js"));

        // line 1
        echo "'use strict';
module.exports = opts => {
\topts = opts || {};

\tconst env = opts.env || process.env;
\tconst platform = opts.platform || process.platform;

\tif (platform !== 'win32') {
\t\treturn 'PATH';
\t}

\treturn Object.keys(env).find(x => x.toUpperCase() === 'PATH') || 'Path';
};
";
        
        $__internal_6b2c7330042b3166396a7142c02c21d97e2d2045de9f931d43a832d5d56c08a6->leave($__internal_6b2c7330042b3166396a7142c02c21d97e2d2045de9f931d43a832d5d56c08a6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/path-key/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = opts => {
\topts = opts || {};

\tconst env = opts.env || process.env;
\tconst platform = opts.platform || process.platform;

\tif (platform !== 'win32') {
\t\treturn 'PATH';
\t}

\treturn Object.keys(env).find(x => x.toUpperCase() === 'PATH') || 'Path';
};
", "node_modules/path-key/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/path-key/index.js");
    }
}
