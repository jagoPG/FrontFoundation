<?php

/* node_modules/enhanced-resolve/lib/UseFilePlugin.js */
class __TwigTemplate_3184d0c843adc8835b19dc267b1f16adcb851a0c68ab54cedbe9032f1921c6b9 extends Twig_Template
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
        $__internal_90030dea31d5ba43bba19f5208609fba371324d2866c8b462c6922f3c1dcd4e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90030dea31d5ba43bba19f5208609fba371324d2866c8b462c6922f3c1dcd4e2->enter($__internal_90030dea31d5ba43bba19f5208609fba371324d2866c8b462c6922f3c1dcd4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/UseFilePlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
function UseFilePlugin(source, filename, target) {
\tthis.source = source;
\tthis.filename = filename;
\tthis.target = target;
}
module.exports = UseFilePlugin;

UseFilePlugin.prototype.apply = function(resolver) {
\tvar filename = this.filename;
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar filePath = resolver.join(request.path, filename);
\t\tvar obj = Object.assign({}, request, {
\t\t\tpath: filePath,
\t\t\trelativePath: request.relativePath && resolver.join(request.relativePath, filename)
\t\t});
\t\tresolver.doResolve(target, obj, \"using path: \" + filePath, callback);
\t});
};
";
        
        $__internal_90030dea31d5ba43bba19f5208609fba371324d2866c8b462c6922f3c1dcd4e2->leave($__internal_90030dea31d5ba43bba19f5208609fba371324d2866c8b462c6922f3c1dcd4e2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/UseFilePlugin.js";
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
function UseFilePlugin(source, filename, target) {
\tthis.source = source;
\tthis.filename = filename;
\tthis.target = target;
}
module.exports = UseFilePlugin;

UseFilePlugin.prototype.apply = function(resolver) {
\tvar filename = this.filename;
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar filePath = resolver.join(request.path, filename);
\t\tvar obj = Object.assign({}, request, {
\t\t\tpath: filePath,
\t\t\trelativePath: request.relativePath && resolver.join(request.relativePath, filename)
\t\t});
\t\tresolver.doResolve(target, obj, \"using path: \" + filePath, callback);
\t});
};
", "node_modules/enhanced-resolve/lib/UseFilePlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/UseFilePlugin.js");
    }
}
