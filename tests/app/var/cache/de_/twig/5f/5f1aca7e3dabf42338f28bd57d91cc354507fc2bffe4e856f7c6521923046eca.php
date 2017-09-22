<?php

/* bin/console */
class __TwigTemplate_1397b4ba23cd64f01505d6efc21b69efd29e5717730ea83ad59ea1770577ac51 extends Twig_Template
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
        $__internal_03a0c2b181f54701ca018e33b6e8107576f0fd4b62a01aeecdbf75803d81cbea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03a0c2b181f54701ca018e33b6e8107576f0fd4b62a01aeecdbf75803d81cbea->enter($__internal_03a0c2b181f54701ca018e33b6e8107576f0fd4b62a01aeecdbf75803d81cbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bin/console"));

        // line 1
        echo "#!/usr/bin/env php
<?php

/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Input\\ArgvInput;
use Symfony\\Component\\Debug\\Debug;

set_time_limit(0);

\$loader = require_once __DIR__ . '/../vendor/autoload.php';

\$input = new ArgvInput();
\$env = \$input->getParameterOption(['--env', '-e'], getenv('SYMFONY_ENV') ?: 'dev');
\$debug = getenv('SYMFONY_DEBUG') !== '0' && !\$input->hasParameterOption(['--no-debug', '']) && \$env !== 'prod';

if (\$debug) {
    Debug::enable();
}

\$kernel = new Symfony(\$env, \$debug);
\$application = new Application(\$kernel);
\$application->run(\$input);
";
        
        $__internal_03a0c2b181f54701ca018e33b6e8107576f0fd4b62a01aeecdbf75803d81cbea->leave($__internal_03a0c2b181f54701ca018e33b6e8107576f0fd4b62a01aeecdbf75803d81cbea_prof);

    }

    public function getTemplateName()
    {
        return "bin/console";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env php
<?php

/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Input\\ArgvInput;
use Symfony\\Component\\Debug\\Debug;

set_time_limit(0);

\$loader = require_once __DIR__ . '/../vendor/autoload.php';

\$input = new ArgvInput();
\$env = \$input->getParameterOption(['--env', '-e'], getenv('SYMFONY_ENV') ?: 'dev');
\$debug = getenv('SYMFONY_DEBUG') !== '0' && !\$input->hasParameterOption(['--no-debug', '']) && \$env !== 'prod';

if (\$debug) {
    Debug::enable();
}

\$kernel = new Symfony(\$env, \$debug);
\$application = new Application(\$kernel);
\$application->run(\$input);
", "bin/console", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/bin/console");
    }
}
