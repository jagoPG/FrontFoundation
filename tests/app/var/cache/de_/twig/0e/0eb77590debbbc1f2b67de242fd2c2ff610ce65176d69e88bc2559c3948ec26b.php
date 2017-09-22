<?php

/* node_modules/jquery/src/manipulation/_evalUrl.js */
class __TwigTemplate_f567ee0b86297625493a8fe4143a505aa495328fa3be8ea944f0de05e5970487 extends Twig_Template
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
        $__internal_4a8b613c8fc93167f80d77d01493a4a9721541c7e2bb5ca2379bdfdc4aa45f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8b613c8fc93167f80d77d01493a4a9721541c7e2bb5ca2379bdfdc4aa45f4c->enter($__internal_4a8b613c8fc93167f80d77d01493a4a9721541c7e2bb5ca2379bdfdc4aa45f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/manipulation/_evalUrl.js"));

        // line 1
        echo "define( [
\t\"../ajax\"
], function( jQuery ) {

\"use strict\";

jQuery._evalUrl = function( url ) {
\treturn jQuery.ajax( {
\t\turl: url,

\t\t// Make this explicit, since user can override this through ajaxSetup (#11264)
\t\ttype: \"GET\",
\t\tdataType: \"script\",
\t\tcache: true,
\t\tasync: false,
\t\tglobal: false,
\t\t\"throws\": true
\t} );
};

return jQuery._evalUrl;

} );
";
        
        $__internal_4a8b613c8fc93167f80d77d01493a4a9721541c7e2bb5ca2379bdfdc4aa45f4c->leave($__internal_4a8b613c8fc93167f80d77d01493a4a9721541c7e2bb5ca2379bdfdc4aa45f4c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/manipulation/_evalUrl.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../ajax\"
], function( jQuery ) {

\"use strict\";

jQuery._evalUrl = function( url ) {
\treturn jQuery.ajax( {
\t\turl: url,

\t\t// Make this explicit, since user can override this through ajaxSetup (#11264)
\t\ttype: \"GET\",
\t\tdataType: \"script\",
\t\tcache: true,
\t\tasync: false,
\t\tglobal: false,
\t\t\"throws\": true
\t} );
};

return jQuery._evalUrl;

} );
", "node_modules/jquery/src/manipulation/_evalUrl.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/manipulation/_evalUrl.js");
    }
}
