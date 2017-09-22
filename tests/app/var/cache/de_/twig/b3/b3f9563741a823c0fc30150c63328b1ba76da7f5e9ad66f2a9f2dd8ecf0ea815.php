<?php

/* node_modules/parsleyjs/bower_components/jquery/src/attributes/support.js */
class __TwigTemplate_1c2434308ddab72a249873119d0eb0c5d316e7875060a909bb4f665800b5cb36 extends Twig_Template
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
        $__internal_2bf1531facb09d709217b49ae3797fc92647f77a765256cb19d659d4abe71690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf1531facb09d709217b49ae3797fc92647f77a765256cb19d659d4abe71690->enter($__internal_2bf1531facb09d709217b49ae3797fc92647f77a765256cb19d659d4abe71690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/attributes/support.js"));

        // line 1
        echo "define([
\t\"../var/support\"
], function( support ) {

(function() {
\tvar input = document.createElement( \"input\" ),
\t\tselect = document.createElement( \"select\" ),
\t\topt = select.appendChild( document.createElement( \"option\" ) );

\tinput.type = \"checkbox\";

\t// Support: iOS<=5.1, Android<=4.2+
\t// Default value for a checkbox should be \"on\"
\tsupport.checkOn = input.value !== \"\";

\t// Support: IE<=11+
\t// Must access selectedIndex to make default options select
\tsupport.optSelected = opt.selected;

\t// Support: Android<=2.3
\t// Options inside disabled selects are incorrectly marked as disabled
\tselect.disabled = true;
\tsupport.optDisabled = !opt.disabled;

\t// Support: IE<=11+
\t// An input loses its value after becoming a radio
\tinput = document.createElement( \"input\" );
\tinput.value = \"t\";
\tinput.type = \"radio\";
\tsupport.radioValue = input.value === \"t\";
})();

return support;

});
";
        
        $__internal_2bf1531facb09d709217b49ae3797fc92647f77a765256cb19d659d4abe71690->leave($__internal_2bf1531facb09d709217b49ae3797fc92647f77a765256cb19d659d4abe71690_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/attributes/support.js";
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
\tvar input = document.createElement( \"input\" ),
\t\tselect = document.createElement( \"select\" ),
\t\topt = select.appendChild( document.createElement( \"option\" ) );

\tinput.type = \"checkbox\";

\t// Support: iOS<=5.1, Android<=4.2+
\t// Default value for a checkbox should be \"on\"
\tsupport.checkOn = input.value !== \"\";

\t// Support: IE<=11+
\t// Must access selectedIndex to make default options select
\tsupport.optSelected = opt.selected;

\t// Support: Android<=2.3
\t// Options inside disabled selects are incorrectly marked as disabled
\tselect.disabled = true;
\tsupport.optDisabled = !opt.disabled;

\t// Support: IE<=11+
\t// An input loses its value after becoming a radio
\tinput = document.createElement( \"input\" );
\tinput.value = \"t\";
\tinput.type = \"radio\";
\tsupport.radioValue = input.value === \"t\";
})();

return support;

});
", "node_modules/parsleyjs/bower_components/jquery/src/attributes/support.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/attributes/support.js");
    }
}
