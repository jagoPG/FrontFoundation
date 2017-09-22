<?php

/* node_modules/fsevents/src/locking.cc */
class __TwigTemplate_3f968aed7f16433fd58c67a518ab7aae7c02a663a875c64e6dc5b7fea91f1ef9 extends Twig_Template
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
        $__internal_7d3ce0154ea604153d02973657fe0e5cdde370f94b1dfe088f17a21dac55a7d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3ce0154ea604153d02973657fe0e5cdde370f94b1dfe088f17a21dac55a7d9->enter($__internal_7d3ce0154ea604153d02973657fe0e5cdde370f94b1dfe088f17a21dac55a7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/src/locking.cc"));

        // line 1
        echo "/*
** © 2014 by Philipp Dunkel <pip@pipobscure.com>
** Licensed under MIT License.
*/

void FSEvents::lockingStart() {
  if (lockStarted) return;
  lockStarted = true;
  pthread_mutex_init(&lockmutex, NULL);
}

void FSEvents::lock() {
  if (!lockStarted) return;
  pthread_mutex_lock(&lockmutex);
}

void FSEvents::unlock() {
  if (!lockStarted) return;
  pthread_mutex_unlock(&lockmutex);
}

void FSEvents::lockingStop() {
  if (!lockStarted) return;
  lockStarted = false;
  
  pthread_mutex_destroy(&lockmutex);
}
";
        
        $__internal_7d3ce0154ea604153d02973657fe0e5cdde370f94b1dfe088f17a21dac55a7d9->leave($__internal_7d3ce0154ea604153d02973657fe0e5cdde370f94b1dfe088f17a21dac55a7d9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/src/locking.cc";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
** © 2014 by Philipp Dunkel <pip@pipobscure.com>
** Licensed under MIT License.
*/

void FSEvents::lockingStart() {
  if (lockStarted) return;
  lockStarted = true;
  pthread_mutex_init(&lockmutex, NULL);
}

void FSEvents::lock() {
  if (!lockStarted) return;
  pthread_mutex_lock(&lockmutex);
}

void FSEvents::unlock() {
  if (!lockStarted) return;
  pthread_mutex_unlock(&lockmutex);
}

void FSEvents::lockingStop() {
  if (!lockStarted) return;
  lockStarted = false;
  
  pthread_mutex_destroy(&lockmutex);
}
", "node_modules/fsevents/src/locking.cc", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/src/locking.cc");
    }
}
