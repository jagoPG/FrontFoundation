<?php

/* node_modules/isexe/package.json */
class __TwigTemplate_226ea271d61be1ce8800a8652631c036238b9370150214e029e078e172c44f1e extends Twig_Template
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
        $__internal_471f0142bbd704bb8ae130fa899381703fc10fff79a650ae13cb7be7692f95c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471f0142bbd704bb8ae130fa899381703fc10fff79a650ae13cb7be7692f95c3->enter($__internal_471f0142bbd704bb8ae130fa899381703fc10fff79a650ae13cb7be7692f95c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/isexe/package.json"));

        // line 1
        echo "{
  \"name\": \"isexe\",
  \"version\": \"2.0.0\",
  \"description\": \"Minimal module to check if a file is executable.\",
  \"main\": \"index.js\",
  \"directories\": {
    \"test\": \"test\"
  },
  \"devDependencies\": {
    \"mkdirp\": \"^0.5.1\",
    \"rimraf\": \"^2.5.0\",
    \"tap\": \"^10.3.0\"
  },
  \"scripts\": {
    \"test\": \"tap test/*.js --100\",
    \"preversion\": \"npm test\",
    \"postversion\": \"npm publish\",
    \"postpublish\": \"git push origin --all; git push origin --tags\"
  },
  \"author\": \"Isaac Z. Schlueter <i@izs.me> (http://blog.izs.me/)\",
  \"license\": \"ISC\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git+https://github.com/isaacs/isexe.git\"
  },
  \"keywords\": [],
  \"bugs\": {
    \"url\": \"https://github.com/isaacs/isexe/issues\"
  },
  \"homepage\": \"https://github.com/isaacs/isexe#readme\"
}
";
        
        $__internal_471f0142bbd704bb8ae130fa899381703fc10fff79a650ae13cb7be7692f95c3->leave($__internal_471f0142bbd704bb8ae130fa899381703fc10fff79a650ae13cb7be7692f95c3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/isexe/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"isexe\",
  \"version\": \"2.0.0\",
  \"description\": \"Minimal module to check if a file is executable.\",
  \"main\": \"index.js\",
  \"directories\": {
    \"test\": \"test\"
  },
  \"devDependencies\": {
    \"mkdirp\": \"^0.5.1\",
    \"rimraf\": \"^2.5.0\",
    \"tap\": \"^10.3.0\"
  },
  \"scripts\": {
    \"test\": \"tap test/*.js --100\",
    \"preversion\": \"npm test\",
    \"postversion\": \"npm publish\",
    \"postpublish\": \"git push origin --all; git push origin --tags\"
  },
  \"author\": \"Isaac Z. Schlueter <i@izs.me> (http://blog.izs.me/)\",
  \"license\": \"ISC\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git+https://github.com/isaacs/isexe.git\"
  },
  \"keywords\": [],
  \"bugs\": {
    \"url\": \"https://github.com/isaacs/isexe/issues\"
  },
  \"homepage\": \"https://github.com/isaacs/isexe#readme\"
}
", "node_modules/isexe/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/isexe/package.json");
    }
}
