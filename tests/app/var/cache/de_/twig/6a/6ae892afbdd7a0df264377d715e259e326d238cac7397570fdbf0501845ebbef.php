<?php

/* node_modules/abbrev/package.json */
class __TwigTemplate_e53a5857818b517a7ba0b7b1e73a0def7ad6c961d523a58c12735f3361f2e100 extends Twig_Template
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
        $__internal_201bb2df120bb6c82b91f98ffb05c46b2a59eb34fa98dc58378e1070e54ee938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201bb2df120bb6c82b91f98ffb05c46b2a59eb34fa98dc58378e1070e54ee938->enter($__internal_201bb2df120bb6c82b91f98ffb05c46b2a59eb34fa98dc58378e1070e54ee938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/abbrev/package.json"));

        // line 1
        echo "{
  \"name\": \"abbrev\",
  \"version\": \"1.1.0\",
  \"description\": \"Like ruby's abbrev module, but in js\",
  \"author\": \"Isaac Z. Schlueter <i@izs.me>\",
  \"main\": \"abbrev.js\",
  \"scripts\": {
    \"test\": \"tap test.js --100\",
    \"preversion\": \"npm test\",
    \"postversion\": \"npm publish\",
    \"postpublish\": \"git push origin --all; git push origin --tags\"
  },
  \"repository\": \"http://github.com/isaacs/abbrev-js\",
  \"license\": \"ISC\",
  \"devDependencies\": {
    \"tap\": \"^10.1\"
  },
  \"files\": [
    \"abbrev.js\"
  ]
}
";
        
        $__internal_201bb2df120bb6c82b91f98ffb05c46b2a59eb34fa98dc58378e1070e54ee938->leave($__internal_201bb2df120bb6c82b91f98ffb05c46b2a59eb34fa98dc58378e1070e54ee938_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/abbrev/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"abbrev\",
  \"version\": \"1.1.0\",
  \"description\": \"Like ruby's abbrev module, but in js\",
  \"author\": \"Isaac Z. Schlueter <i@izs.me>\",
  \"main\": \"abbrev.js\",
  \"scripts\": {
    \"test\": \"tap test.js --100\",
    \"preversion\": \"npm test\",
    \"postversion\": \"npm publish\",
    \"postpublish\": \"git push origin --all; git push origin --tags\"
  },
  \"repository\": \"http://github.com/isaacs/abbrev-js\",
  \"license\": \"ISC\",
  \"devDependencies\": {
    \"tap\": \"^10.1\"
  },
  \"files\": [
    \"abbrev.js\"
  ]
}
", "node_modules/abbrev/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/abbrev/package.json");
    }
}
