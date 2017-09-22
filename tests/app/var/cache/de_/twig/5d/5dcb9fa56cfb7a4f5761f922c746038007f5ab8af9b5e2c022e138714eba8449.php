<?php

/* node_modules/enhanced-resolve/lib/FileKindPlugin.js */
class __TwigTemplate_27fa17d6204344d9496a77f10bd0673473381ff0f8bbdb3152499fd541dea6ea extends Twig_Template
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
        $__internal_679905774827d8f9f13a8c383268adf2c4d99e7453058aa43bdb4a53ed66755a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_679905774827d8f9f13a8c383268adf2c4d99e7453058aa43bdb4a53ed66755a->enter($__internal_679905774827d8f9f13a8c383268adf2c4d99e7453058aa43bdb4a53ed66755a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/FileKindPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
function FileKindPlugin(source, target) {
\tthis.source = source;
\tthis.target = target;
}
module.exports = FileKindPlugin;

FileKindPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tif(request.directory) return callback();
\t\tvar obj = Object.assign({}, request);
\t\tdelete obj.directory;
\t\tresolver.doResolve(target, obj, null, callback);
\t});
};
";
        
        $__internal_679905774827d8f9f13a8c383268adf2c4d99e7453058aa43bdb4a53ed66755a->leave($__internal_679905774827d8f9f13a8c383268adf2c4d99e7453058aa43bdb4a53ed66755a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/FileKindPlugin.js";
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
function FileKindPlugin(source, target) {
\tthis.source = source;
\tthis.target = target;
}
module.exports = FileKindPlugin;

FileKindPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tif(request.directory) return callback();
\t\tvar obj = Object.assign({}, request);
\t\tdelete obj.directory;
\t\tresolver.doResolve(target, obj, null, callback);
\t});
};
", "node_modules/enhanced-resolve/lib/FileKindPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/FileKindPlugin.js");
    }
}
