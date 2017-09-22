<?php

/* node_modules/glob/package.json */
class __TwigTemplate_0cfce38cc356cabda33d49b43550c2c140ddb1ca869e6f47204d8cfef76e0be3 extends Twig_Template
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
        $__internal_651a535f2ca39e43d745f5f690d1cdc8358020b968e2257d0b5e948b2a800c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651a535f2ca39e43d745f5f690d1cdc8358020b968e2257d0b5e948b2a800c3d->enter($__internal_651a535f2ca39e43d745f5f690d1cdc8358020b968e2257d0b5e948b2a800c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/glob/package.json"));

        // line 1
        echo "{
  \"author\": \"Isaac Z. Schlueter <i@izs.me> (http://blog.izs.me/)\",
  \"name\": \"glob\",
  \"description\": \"a little globber\",
  \"version\": \"7.1.2\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/isaacs/node-glob.git\"
  },
  \"main\": \"glob.js\",
  \"files\": [
    \"glob.js\",
    \"sync.js\",
    \"common.js\"
  ],
  \"engines\": {
    \"node\": \"*\"
  },
  \"dependencies\": {
    \"fs.realpath\": \"^1.0.0\",
    \"inflight\": \"^1.0.4\",
    \"inherits\": \"2\",
    \"minimatch\": \"^3.0.4\",
    \"once\": \"^1.3.0\",
    \"path-is-absolute\": \"^1.0.0\"
  },
  \"devDependencies\": {
    \"mkdirp\": \"0\",
    \"rimraf\": \"^2.2.8\",
    \"tap\": \"^7.1.2\",
    \"tick\": \"0.0.6\"
  },
  \"scripts\": {
    \"prepublish\": \"npm run benchclean\",
    \"profclean\": \"rm -f v8.log profile.txt\",
    \"test\": \"tap test/*.js --cov\",
    \"test-regen\": \"npm run profclean && TEST_REGEN=1 node test/00-setup.js\",
    \"bench\": \"bash benchmark.sh\",
    \"prof\": \"bash prof.sh && cat profile.txt\",
    \"benchclean\": \"node benchclean.js\"
  },
  \"license\": \"ISC\"
}
";
        
        $__internal_651a535f2ca39e43d745f5f690d1cdc8358020b968e2257d0b5e948b2a800c3d->leave($__internal_651a535f2ca39e43d745f5f690d1cdc8358020b968e2257d0b5e948b2a800c3d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/glob/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"author\": \"Isaac Z. Schlueter <i@izs.me> (http://blog.izs.me/)\",
  \"name\": \"glob\",
  \"description\": \"a little globber\",
  \"version\": \"7.1.2\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/isaacs/node-glob.git\"
  },
  \"main\": \"glob.js\",
  \"files\": [
    \"glob.js\",
    \"sync.js\",
    \"common.js\"
  ],
  \"engines\": {
    \"node\": \"*\"
  },
  \"dependencies\": {
    \"fs.realpath\": \"^1.0.0\",
    \"inflight\": \"^1.0.4\",
    \"inherits\": \"2\",
    \"minimatch\": \"^3.0.4\",
    \"once\": \"^1.3.0\",
    \"path-is-absolute\": \"^1.0.0\"
  },
  \"devDependencies\": {
    \"mkdirp\": \"0\",
    \"rimraf\": \"^2.2.8\",
    \"tap\": \"^7.1.2\",
    \"tick\": \"0.0.6\"
  },
  \"scripts\": {
    \"prepublish\": \"npm run benchclean\",
    \"profclean\": \"rm -f v8.log profile.txt\",
    \"test\": \"tap test/*.js --cov\",
    \"test-regen\": \"npm run profclean && TEST_REGEN=1 node test/00-setup.js\",
    \"bench\": \"bash benchmark.sh\",
    \"prof\": \"bash prof.sh && cat profile.txt\",
    \"benchclean\": \"node benchclean.js\"
  },
  \"license\": \"ISC\"
}
", "node_modules/glob/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/glob/package.json");
    }
}
