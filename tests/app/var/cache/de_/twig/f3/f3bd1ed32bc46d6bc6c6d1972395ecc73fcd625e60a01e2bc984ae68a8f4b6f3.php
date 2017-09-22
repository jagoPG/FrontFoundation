<?php

/* node_modules/js-tokens/package.json */
class __TwigTemplate_4be48eb02d41ef78a9d11a79764387c75f0c48294bd2a2023a80f011c513b052 extends Twig_Template
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
        $__internal_8546f2303b9758585b00fc07e43e41bf460352f30a6c05fe32c0fb01b635da83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8546f2303b9758585b00fc07e43e41bf460352f30a6c05fe32c0fb01b635da83->enter($__internal_8546f2303b9758585b00fc07e43e41bf460352f30a6c05fe32c0fb01b635da83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/js-tokens/package.json"));

        // line 1
        echo "{
  \"name\": \"js-tokens\",
  \"version\": \"3.0.2\",
  \"author\": \"Simon Lydell\",
  \"license\": \"MIT\",
  \"description\": \"A regex that tokenizes JavaScript.\",
  \"keywords\": [
    \"JavaScript\",
    \"js\",
    \"token\",
    \"tokenize\",
    \"regex\"
  ],
  \"files\": [
    \"index.js\"
  ],
  \"repository\": \"lydell/js-tokens\",
  \"scripts\": {
    \"test\": \"mocha --ui tdd\",
    \"esprima-compare\": \"node esprima-compare ./index.js everything.js/es5.js\",
    \"build\": \"node generate-index.js\",
    \"dev\": \"npm run build && npm test\"
  },
  \"devDependencies\": {
    \"coffee-script\": \"~1.12.6\",
    \"esprima\": \"^4.0.0\",
    \"everything.js\": \"^1.0.3\",
    \"mocha\": \"^3.4.2\"
  }
}
";
        
        $__internal_8546f2303b9758585b00fc07e43e41bf460352f30a6c05fe32c0fb01b635da83->leave($__internal_8546f2303b9758585b00fc07e43e41bf460352f30a6c05fe32c0fb01b635da83_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/js-tokens/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"js-tokens\",
  \"version\": \"3.0.2\",
  \"author\": \"Simon Lydell\",
  \"license\": \"MIT\",
  \"description\": \"A regex that tokenizes JavaScript.\",
  \"keywords\": [
    \"JavaScript\",
    \"js\",
    \"token\",
    \"tokenize\",
    \"regex\"
  ],
  \"files\": [
    \"index.js\"
  ],
  \"repository\": \"lydell/js-tokens\",
  \"scripts\": {
    \"test\": \"mocha --ui tdd\",
    \"esprima-compare\": \"node esprima-compare ./index.js everything.js/es5.js\",
    \"build\": \"node generate-index.js\",
    \"dev\": \"npm run build && npm test\"
  },
  \"devDependencies\": {
    \"coffee-script\": \"~1.12.6\",
    \"esprima\": \"^4.0.0\",
    \"everything.js\": \"^1.0.3\",
    \"mocha\": \"^3.4.2\"
  }
}
", "node_modules/js-tokens/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/js-tokens/package.json");
    }
}
