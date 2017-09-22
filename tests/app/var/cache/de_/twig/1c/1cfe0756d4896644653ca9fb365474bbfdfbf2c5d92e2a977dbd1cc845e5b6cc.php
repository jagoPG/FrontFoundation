<?php

/* node_modules/enhanced-resolve/lib/LogInfoPlugin.js */
class __TwigTemplate_9ee81e9aeacf4dc479b8b01ef235ccb3a6af7303cf04b4276fe81b64d41a568b extends Twig_Template
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
        $__internal_94b3cc9100475464152d54171e5218d2ac2db5c72518fd86c418db246a821c64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b3cc9100475464152d54171e5218d2ac2db5c72518fd86c418db246a821c64->enter($__internal_94b3cc9100475464152d54171e5218d2ac2db5c72518fd86c418db246a821c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/LogInfoPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
function LogInfoPlugin(source) {
\tthis.source = source;
}
module.exports = LogInfoPlugin;

LogInfoPlugin.prototype.apply = function(resolver) {
\tvar source = this.source;
\tresolver.plugin(this.source, function(request, callback) {
\t\tif(!callback.log) return callback();
\t\tvar log = callback.log;
\t\tvar prefix = \"[\" + source + \"] \";
\t\tif(request.path) log(prefix + \"Resolving in directory: \" + request.path);
\t\tif(request.request) log(prefix + \"Resolving request: \" + request.request);
\t\tif(request.module) log(prefix + \"Request is an module request.\");
\t\tif(request.directory) log(prefix + \"Request is a directory request.\");
\t\tif(request.query) log(prefix + \"Resolving request query: \" + request.query);
\t\tif(request.descriptionFilePath) log(prefix + \"Has description data from \" + request.descriptionFilePath);
\t\tif(request.relativePath) log(prefix + \"Relative path from description file is: \" + request.relativePath);
\t\tcallback();
\t});
};
";
        
        $__internal_94b3cc9100475464152d54171e5218d2ac2db5c72518fd86c418db246a821c64->leave($__internal_94b3cc9100475464152d54171e5218d2ac2db5c72518fd86c418db246a821c64_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/LogInfoPlugin.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
function LogInfoPlugin(source) {
\tthis.source = source;
}
module.exports = LogInfoPlugin;

LogInfoPlugin.prototype.apply = function(resolver) {
\tvar source = this.source;
\tresolver.plugin(this.source, function(request, callback) {
\t\tif(!callback.log) return callback();
\t\tvar log = callback.log;
\t\tvar prefix = \"[\" + source + \"] \";
\t\tif(request.path) log(prefix + \"Resolving in directory: \" + request.path);
\t\tif(request.request) log(prefix + \"Resolving request: \" + request.request);
\t\tif(request.module) log(prefix + \"Request is an module request.\");
\t\tif(request.directory) log(prefix + \"Request is a directory request.\");
\t\tif(request.query) log(prefix + \"Resolving request query: \" + request.query);
\t\tif(request.descriptionFilePath) log(prefix + \"Has description data from \" + request.descriptionFilePath);
\t\tif(request.relativePath) log(prefix + \"Relative path from description file is: \" + request.relativePath);
\t\tcallback();
\t});
};
", "node_modules/enhanced-resolve/lib/LogInfoPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/LogInfoPlugin.js");
    }
}
