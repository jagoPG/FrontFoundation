<?php

/* node_modules/es5-ext/object/keys/is-implemented.js */
class __TwigTemplate_4de22b2adffede7d944d3aac86bada2e11a827c6a248e86b06655fc9a682424d extends Twig_Template
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
        $__internal_38ccc5d7463aa564e609ad2dbaafcd0fbc8eb0e8737915bc421e622d40e8ae83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ccc5d7463aa564e609ad2dbaafcd0fbc8eb0e8737915bc421e622d40e8ae83->enter($__internal_38ccc5d7463aa564e609ad2dbaafcd0fbc8eb0e8737915bc421e622d40e8ae83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/keys/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\ttry {
\t\tObject.keys(\"primitive\");
\t\treturn true;
\t} catch (e) {
 return false;
}
};
";
        
        $__internal_38ccc5d7463aa564e609ad2dbaafcd0fbc8eb0e8737915bc421e622d40e8ae83->leave($__internal_38ccc5d7463aa564e609ad2dbaafcd0fbc8eb0e8737915bc421e622d40e8ae83_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/keys/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\ttry {
\t\tObject.keys(\"primitive\");
\t\treturn true;
\t} catch (e) {
 return false;
}
};
", "node_modules/es5-ext/object/keys/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/keys/is-implemented.js");
    }
}
