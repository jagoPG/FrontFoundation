<?php

/* node_modules/enhanced-resolve/lib/NextPlugin.js */
class __TwigTemplate_e724f292cf9a40e4b51ad5bb3bb15fdcf11228503a288501c1669fd68c530dd9 extends Twig_Template
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
        $__internal_f3bbb590ccbe692e929f7ebdc0008e3dc4d3ee111718dceb5442e60f56397dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3bbb590ccbe692e929f7ebdc0008e3dc4d3ee111718dceb5442e60f56397dda->enter($__internal_f3bbb590ccbe692e929f7ebdc0008e3dc4d3ee111718dceb5442e60f56397dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/NextPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
function NextPlugin(source, target) {
\tthis.source = source;
\tthis.target = target;
}
module.exports = NextPlugin;

NextPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tresolver.doResolve(target, request, null, callback);
\t});
};
";
        
        $__internal_f3bbb590ccbe692e929f7ebdc0008e3dc4d3ee111718dceb5442e60f56397dda->leave($__internal_f3bbb590ccbe692e929f7ebdc0008e3dc4d3ee111718dceb5442e60f56397dda_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/NextPlugin.js";
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
function NextPlugin(source, target) {
\tthis.source = source;
\tthis.target = target;
}
module.exports = NextPlugin;

NextPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tresolver.doResolve(target, request, null, callback);
\t});
};
", "node_modules/enhanced-resolve/lib/NextPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/NextPlugin.js");
    }
}
