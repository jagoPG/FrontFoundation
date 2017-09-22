<?php

/* node_modules/parsleyjs/bower_components/jquery/src/manipulation/support.js */
class __TwigTemplate_85bbbe2bd42db812808b23c2ac7b210de0b05733ef44beda432b95c3ac5b555e extends Twig_Template
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
        $__internal_5b3674912af09ce18d5d112e78b0ffe3979d015319576755a0b1d1b097b1c63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3674912af09ce18d5d112e78b0ffe3979d015319576755a0b1d1b097b1c63b->enter($__internal_5b3674912af09ce18d5d112e78b0ffe3979d015319576755a0b1d1b097b1c63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/manipulation/support.js"));

        // line 1
        echo "define([
\t\"../var/support\"
], function( support ) {

(function() {
\tvar fragment = document.createDocumentFragment(),
\t\tdiv = fragment.appendChild( document.createElement( \"div\" ) ),
\t\tinput = document.createElement( \"input\" );

\t// Support: Safari<=5.1
\t// Check state lost if the name is set (#11217)
\t// Support: Windows Web Apps (WWA)
\t// `name` and `type` must use .setAttribute for WWA (#14901)
\tinput.setAttribute( \"type\", \"radio\" );
\tinput.setAttribute( \"checked\", \"checked\" );
\tinput.setAttribute( \"name\", \"t\" );

\tdiv.appendChild( input );

\t// Support: Safari<=5.1, Android<4.2
\t// Older WebKit doesn't clone checked state correctly in fragments
\tsupport.checkClone = div.cloneNode( true ).cloneNode( true ).lastChild.checked;

\t// Support: IE<=11+
\t// Make sure textarea (and checkbox) defaultValue is properly cloned
\tdiv.innerHTML = \"<textarea>x</textarea>\";
\tsupport.noCloneChecked = !!div.cloneNode( true ).lastChild.defaultValue;
})();

return support;

});
";
        
        $__internal_5b3674912af09ce18d5d112e78b0ffe3979d015319576755a0b1d1b097b1c63b->leave($__internal_5b3674912af09ce18d5d112e78b0ffe3979d015319576755a0b1d1b097b1c63b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/manipulation/support.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../var/support\"
], function( support ) {

(function() {
\tvar fragment = document.createDocumentFragment(),
\t\tdiv = fragment.appendChild( document.createElement( \"div\" ) ),
\t\tinput = document.createElement( \"input\" );

\t// Support: Safari<=5.1
\t// Check state lost if the name is set (#11217)
\t// Support: Windows Web Apps (WWA)
\t// `name` and `type` must use .setAttribute for WWA (#14901)
\tinput.setAttribute( \"type\", \"radio\" );
\tinput.setAttribute( \"checked\", \"checked\" );
\tinput.setAttribute( \"name\", \"t\" );

\tdiv.appendChild( input );

\t// Support: Safari<=5.1, Android<4.2
\t// Older WebKit doesn't clone checked state correctly in fragments
\tsupport.checkClone = div.cloneNode( true ).cloneNode( true ).lastChild.checked;

\t// Support: IE<=11+
\t// Make sure textarea (and checkbox) defaultValue is properly cloned
\tdiv.innerHTML = \"<textarea>x</textarea>\";
\tsupport.noCloneChecked = !!div.cloneNode( true ).lastChild.defaultValue;
})();

return support;

});
", "node_modules/parsleyjs/bower_components/jquery/src/manipulation/support.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/manipulation/support.js");
    }
}
