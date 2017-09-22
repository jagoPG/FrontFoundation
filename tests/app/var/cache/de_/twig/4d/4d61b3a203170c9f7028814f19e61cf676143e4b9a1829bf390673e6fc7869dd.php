<?php

/* node_modules/jquery/src/manipulation/support.js */
class __TwigTemplate_efc44e4e89488f4f7c2fc945f48e9cafd2aebf6c4c9367f34775edc72ab6405f extends Twig_Template
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
        $__internal_3c66833395fbb28e8bc24d5543908c0fa77ccb1d08a6005099d6b2329088366b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c66833395fbb28e8bc24d5543908c0fa77ccb1d08a6005099d6b2329088366b->enter($__internal_3c66833395fbb28e8bc24d5543908c0fa77ccb1d08a6005099d6b2329088366b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/manipulation/support.js"));

        // line 1
        echo "define( [
\t\"../var/document\",
\t\"../var/support\"
], function( document, support ) {

\"use strict\";

( function() {
\tvar fragment = document.createDocumentFragment(),
\t\tdiv = fragment.appendChild( document.createElement( \"div\" ) ),
\t\tinput = document.createElement( \"input\" );

\t// Support: Android 4.0 - 4.3 only
\t// Check state lost if the name is set (#11217)
\t// Support: Windows Web Apps (WWA)
\t// `name` and `type` must use .setAttribute for WWA (#14901)
\tinput.setAttribute( \"type\", \"radio\" );
\tinput.setAttribute( \"checked\", \"checked\" );
\tinput.setAttribute( \"name\", \"t\" );

\tdiv.appendChild( input );

\t// Support: Android <=4.1 only
\t// Older WebKit doesn't clone checked state correctly in fragments
\tsupport.checkClone = div.cloneNode( true ).cloneNode( true ).lastChild.checked;

\t// Support: IE <=11 only
\t// Make sure textarea (and checkbox) defaultValue is properly cloned
\tdiv.innerHTML = \"<textarea>x</textarea>\";
\tsupport.noCloneChecked = !!div.cloneNode( true ).lastChild.defaultValue;
} )();

return support;

} );
";
        
        $__internal_3c66833395fbb28e8bc24d5543908c0fa77ccb1d08a6005099d6b2329088366b->leave($__internal_3c66833395fbb28e8bc24d5543908c0fa77ccb1d08a6005099d6b2329088366b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/manipulation/support.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../var/document\",
\t\"../var/support\"
], function( document, support ) {

\"use strict\";

( function() {
\tvar fragment = document.createDocumentFragment(),
\t\tdiv = fragment.appendChild( document.createElement( \"div\" ) ),
\t\tinput = document.createElement( \"input\" );

\t// Support: Android 4.0 - 4.3 only
\t// Check state lost if the name is set (#11217)
\t// Support: Windows Web Apps (WWA)
\t// `name` and `type` must use .setAttribute for WWA (#14901)
\tinput.setAttribute( \"type\", \"radio\" );
\tinput.setAttribute( \"checked\", \"checked\" );
\tinput.setAttribute( \"name\", \"t\" );

\tdiv.appendChild( input );

\t// Support: Android <=4.1 only
\t// Older WebKit doesn't clone checked state correctly in fragments
\tsupport.checkClone = div.cloneNode( true ).cloneNode( true ).lastChild.checked;

\t// Support: IE <=11 only
\t// Make sure textarea (and checkbox) defaultValue is properly cloned
\tdiv.innerHTML = \"<textarea>x</textarea>\";
\tsupport.noCloneChecked = !!div.cloneNode( true ).lastChild.defaultValue;
} )();

return support;

} );
", "node_modules/jquery/src/manipulation/support.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/manipulation/support.js");
    }
}
