<?php

/* node_modules/enhanced-resolve/lib/TryNextPlugin.js */
class __TwigTemplate_0c5b638594f477141e3eaeed672340b94fda7eca38e33265dfc75aac100211a3 extends Twig_Template
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
        $__internal_f3e146166adda6643d8d03e994814e89baa81cfba855e45c0ce6d5f7867ac168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e146166adda6643d8d03e994814e89baa81cfba855e45c0ce6d5f7867ac168->enter($__internal_f3e146166adda6643d8d03e994814e89baa81cfba855e45c0ce6d5f7867ac168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/TryNextPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
function TryNextPlugin(source, message, target) {
\tthis.source = source;
\tthis.message = message;
\tthis.target = target;
}
module.exports = TryNextPlugin;

TryNextPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tvar message = this.message;
\tresolver.plugin(this.source, function(request, callback) {
\t\tresolver.doResolve(target, request, message, callback);
\t});
};
";
        
        $__internal_f3e146166adda6643d8d03e994814e89baa81cfba855e45c0ce6d5f7867ac168->leave($__internal_f3e146166adda6643d8d03e994814e89baa81cfba855e45c0ce6d5f7867ac168_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/TryNextPlugin.js";
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
function TryNextPlugin(source, message, target) {
\tthis.source = source;
\tthis.message = message;
\tthis.target = target;
}
module.exports = TryNextPlugin;

TryNextPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tvar message = this.message;
\tresolver.plugin(this.source, function(request, callback) {
\t\tresolver.doResolve(target, request, message, callback);
\t});
};
", "node_modules/enhanced-resolve/lib/TryNextPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/TryNextPlugin.js");
    }
}
