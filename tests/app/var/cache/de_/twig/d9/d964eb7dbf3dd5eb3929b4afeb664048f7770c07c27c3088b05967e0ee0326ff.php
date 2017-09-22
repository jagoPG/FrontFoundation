<?php

/* node_modules/jquery/src/attributes/support.js */
class __TwigTemplate_a387ca35c3d84ead7645579f2e25b5aba5e235aa71b8df0bf5b00ba14f8567ca extends Twig_Template
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
        $__internal_a52426e0f4b576ab24b17c9a826129f82a710a2f7c684c872c445fc8ec6c884d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52426e0f4b576ab24b17c9a826129f82a710a2f7c684c872c445fc8ec6c884d->enter($__internal_a52426e0f4b576ab24b17c9a826129f82a710a2f7c684c872c445fc8ec6c884d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/attributes/support.js"));

        // line 1
        echo "define( [
\t\"../var/document\",
\t\"../var/support\"
], function( document, support ) {

\"use strict\";

( function() {
\tvar input = document.createElement( \"input\" ),
\t\tselect = document.createElement( \"select\" ),
\t\topt = select.appendChild( document.createElement( \"option\" ) );

\tinput.type = \"checkbox\";

\t// Support: Android <=4.3 only
\t// Default value for a checkbox should be \"on\"
\tsupport.checkOn = input.value !== \"\";

\t// Support: IE <=11 only
\t// Must access selectedIndex to make default options select
\tsupport.optSelected = opt.selected;

\t// Support: IE <=11 only
\t// An input loses its value after becoming a radio
\tinput = document.createElement( \"input\" );
\tinput.value = \"t\";
\tinput.type = \"radio\";
\tsupport.radioValue = input.value === \"t\";
} )();

return support;

} );
";
        
        $__internal_a52426e0f4b576ab24b17c9a826129f82a710a2f7c684c872c445fc8ec6c884d->leave($__internal_a52426e0f4b576ab24b17c9a826129f82a710a2f7c684c872c445fc8ec6c884d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/attributes/support.js";
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
\tvar input = document.createElement( \"input\" ),
\t\tselect = document.createElement( \"select\" ),
\t\topt = select.appendChild( document.createElement( \"option\" ) );

\tinput.type = \"checkbox\";

\t// Support: Android <=4.3 only
\t// Default value for a checkbox should be \"on\"
\tsupport.checkOn = input.value !== \"\";

\t// Support: IE <=11 only
\t// Must access selectedIndex to make default options select
\tsupport.optSelected = opt.selected;

\t// Support: IE <=11 only
\t// An input loses its value after becoming a radio
\tinput = document.createElement( \"input\" );
\tinput.value = \"t\";
\tinput.type = \"radio\";
\tsupport.radioValue = input.value === \"t\";
} )();

return support;

} );
", "node_modules/jquery/src/attributes/support.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/attributes/support.js");
    }
}
