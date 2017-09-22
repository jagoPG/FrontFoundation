<?php

/* node_modules/jquery/src/data/var/acceptData.js */
class __TwigTemplate_bc7169d8cfc4422c8fcb7e9b1d82e41d1844ed804e19bc9ca37a300b99ac46f7 extends Twig_Template
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
        $__internal_56d454b44189dbc84a97fff8e6c01be0cebec4467bb245ff7a2eed87e20dc4a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d454b44189dbc84a97fff8e6c01be0cebec4467bb245ff7a2eed87e20dc4a2->enter($__internal_56d454b44189dbc84a97fff8e6c01be0cebec4467bb245ff7a2eed87e20dc4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/data/var/acceptData.js"));

        // line 1
        echo "define( function() {

\"use strict\";

/**
 * Determines whether an object can have data
 */
return function( owner ) {

\t// Accepts only:
\t//  - Node
\t//    - Node.ELEMENT_NODE
\t//    - Node.DOCUMENT_NODE
\t//  - Object
\t//    - Any
\treturn owner.nodeType === 1 || owner.nodeType === 9 || !( +owner.nodeType );
};

} );
";
        
        $__internal_56d454b44189dbc84a97fff8e6c01be0cebec4467bb245ff7a2eed87e20dc4a2->leave($__internal_56d454b44189dbc84a97fff8e6c01be0cebec4467bb245ff7a2eed87e20dc4a2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/data/var/acceptData.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( function() {

\"use strict\";

/**
 * Determines whether an object can have data
 */
return function( owner ) {

\t// Accepts only:
\t//  - Node
\t//    - Node.ELEMENT_NODE
\t//    - Node.DOCUMENT_NODE
\t//  - Object
\t//    - Any
\treturn owner.nodeType === 1 || owner.nodeType === 9 || !( +owner.nodeType );
};

} );
", "node_modules/jquery/src/data/var/acceptData.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/data/var/acceptData.js");
    }
}
