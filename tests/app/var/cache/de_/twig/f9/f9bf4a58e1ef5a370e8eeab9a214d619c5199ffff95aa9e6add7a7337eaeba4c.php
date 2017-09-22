<?php

/* index.php */
class __TwigTemplate_9cf8b028237412cca07b6a192545583dcc9075f65c85439b348a0be4b125bf80 extends Twig_Template
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
        $__internal_0d9e81d92d637716e715d3d64e88ae561acdb54c58549337b7b6744500aad394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9e81d92d637716e715d3d64e88ae561acdb54c58549337b7b6744500aad394->enter($__internal_0d9e81d92d637716e715d3d64e88ae561acdb54c58549337b7b6744500aad394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use Symfony\\Component\\HttpFoundation\\Request;

require_once __DIR__ . '/vendor/autoload.php';
\$kernel = new Symfony('dev', true);
\$request = Request::createFromGlobals();
\$response = \$kernel->handle(\$request);
\$response->send();
\$kernel->terminate(\$request, \$response);
";
        
        $__internal_0d9e81d92d637716e715d3d64e88ae561acdb54c58549337b7b6744500aad394->leave($__internal_0d9e81d92d637716e715d3d64e88ae561acdb54c58549337b7b6744500aad394_prof);

    }

    public function getTemplateName()
    {
        return "index.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php

/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use Symfony\\Component\\HttpFoundation\\Request;

require_once __DIR__ . '/vendor/autoload.php';
\$kernel = new Symfony('dev', true);
\$request = Request::createFromGlobals();
\$response = \$kernel->handle(\$request);
\$response->send();
\$kernel->terminate(\$request, \$response);
", "index.php", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/index.php");
    }
}
