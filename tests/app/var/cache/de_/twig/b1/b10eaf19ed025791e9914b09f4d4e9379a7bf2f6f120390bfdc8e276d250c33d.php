<?php

/* node_modules/sha.js/package.json */
class __TwigTemplate_a630378f6899cf4d23f1aa62fdfad4ad1d173e70d216dde9c8126fbcdcf3a515 extends Twig_Template
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
        $__internal_b0c2efd73f6d02c9524c1f80cfb1ac390599f4a35dccfae0e8427f824c061cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c2efd73f6d02c9524c1f80cfb1ac390599f4a35dccfae0e8427f824c061cc3->enter($__internal_b0c2efd73f6d02c9524c1f80cfb1ac390599f4a35dccfae0e8427f824c061cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sha.js/package.json"));

        // line 1
        echo "{
  \"name\": \"sha.js\",
  \"description\": \"Streamable SHA hashes in pure javascript\",
  \"version\": \"2.4.8\",
  \"homepage\": \"https://github.com/crypto-browserify/sha.js\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/crypto-browserify/sha.js.git\"
  },
  \"dependencies\": {
    \"inherits\": \"^2.0.1\"
  },
  \"devDependencies\": {
    \"buffer\": \"~2.3.2\",
    \"hash-test-vectors\": \"^1.3.1\",
    \"standard\": \"^4.0.0\",
    \"tape\": \"~2.3.2\",
    \"typedarray\": \"0.0.6\"
  },
  \"bin\": \"./bin.js\",
  \"scripts\": {
    \"prepublish\": \"npm ls && npm run unit\",
    \"lint\": \"standard\",
    \"test\": \"npm run lint && npm run unit\",
    \"unit\": \"set -e; for t in test/*.js; do node \$t; done;\"
  },
  \"author\": \"Dominic Tarr <dominic.tarr@gmail.com> (dominictarr.com)\",
  \"license\": \"MIT\"
}
";
        
        $__internal_b0c2efd73f6d02c9524c1f80cfb1ac390599f4a35dccfae0e8427f824c061cc3->leave($__internal_b0c2efd73f6d02c9524c1f80cfb1ac390599f4a35dccfae0e8427f824c061cc3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sha.js/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"sha.js\",
  \"description\": \"Streamable SHA hashes in pure javascript\",
  \"version\": \"2.4.8\",
  \"homepage\": \"https://github.com/crypto-browserify/sha.js\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/crypto-browserify/sha.js.git\"
  },
  \"dependencies\": {
    \"inherits\": \"^2.0.1\"
  },
  \"devDependencies\": {
    \"buffer\": \"~2.3.2\",
    \"hash-test-vectors\": \"^1.3.1\",
    \"standard\": \"^4.0.0\",
    \"tape\": \"~2.3.2\",
    \"typedarray\": \"0.0.6\"
  },
  \"bin\": \"./bin.js\",
  \"scripts\": {
    \"prepublish\": \"npm ls && npm run unit\",
    \"lint\": \"standard\",
    \"test\": \"npm run lint && npm run unit\",
    \"unit\": \"set -e; for t in test/*.js; do node \$t; done;\"
  },
  \"author\": \"Dominic Tarr <dominic.tarr@gmail.com> (dominictarr.com)\",
  \"license\": \"MIT\"
}
", "node_modules/sha.js/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sha.js/package.json");
    }
}
