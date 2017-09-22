<?php

/* index.html.twig */
class __TwigTemplate_0a0d4a9bbf3932f6d8f4e8753b1b42d1e0a722c8e67c4bbd50fedcb5c0535aef extends Twig_Template
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
        $__internal_7cde29fdbcd7f824ea6509c0d2d8501ac452435d0f24b26d04f3a2c4a5385398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cde29fdbcd7f824ea6509c0d2d8501ac452435d0f24b26d04f3a2c4a5385398->enter($__internal_7cde29fdbcd7f824ea6509c0d2d8501ac452435d0f24b26d04f3a2c4a5385398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
</head>
<body>
    <script src=\"/dist/app.js\"></script>
    <style type=\"text/css\">
        .gmap__map {
            height: 400px;
        }
    </style>

    <h1>Lin3s Front Foundation</h1>
    <h2>Test App page</h2>
    <main>
        <section class=\"images\">
            <h3>This content will be used to test the <i>Dom.waitImagesLoadInDomNode</i> method.</h3>
            <div class=\"images__collection\">
                <img src=\"http://lorempixel.com/800/600/abstract\"/>
                <img src=\"http://lorempixel.com/800/600/nightlife\"/>
                <img src=\"http://lorempixel.com/800/600/city\"/>
                <img src=\"http://lorempixel.com/800/600/people\"/>
            </div>
        </section>

        <section class=\"gmap\">
            <h3>This is a basic <i>gmap component</i> usage example.</h3>
            ";
        // line 29
        $this->loadTemplate("@lin3s_front_foundation/components/gmap.html.twig", "index.html.twig", 29)->display(array_merge($context, array("gmap_api_key" => "AIzaSyDQaCE_7C5iAmpwr_y1C1DHbtZsqag74Sk", "gmap_center_lat" => "43.2631394", "gmap_center_lng" => "-2.9275847", "gmap_initial_zoom" => 12, "gmap_max_zoom" => 16, "gmap_marker_default_path" => "/images/gmap/marker-default", "gmap_marker_selected_path" => "/images/gmap/marker-default", "gmap_marker_group_path" => "/images/gmap/marker-default")));
        // line 39
        echo "        </section>
    </main>
</body>
</html>
";
        
        $__internal_7cde29fdbcd7f824ea6509c0d2d8501ac452435d0f24b26d04f3a2c4a5385398->leave($__internal_7cde29fdbcd7f824ea6509c0d2d8501ac452435d0f24b26d04f3a2c4a5385398_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 39,  52 => 29,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
</head>
<body>
    <script src=\"/dist/app.js\"></script>
    <style type=\"text/css\">
        .gmap__map {
            height: 400px;
        }
    </style>

    <h1>Lin3s Front Foundation</h1>
    <h2>Test App page</h2>
    <main>
        <section class=\"images\">
            <h3>This content will be used to test the <i>Dom.waitImagesLoadInDomNode</i> method.</h3>
            <div class=\"images__collection\">
                <img src=\"http://lorempixel.com/800/600/abstract\"/>
                <img src=\"http://lorempixel.com/800/600/nightlife\"/>
                <img src=\"http://lorempixel.com/800/600/city\"/>
                <img src=\"http://lorempixel.com/800/600/people\"/>
            </div>
        </section>

        <section class=\"gmap\">
            <h3>This is a basic <i>gmap component</i> usage example.</h3>
            {% include '@lin3s_front_foundation/components/gmap.html.twig' with {
                gmap_api_key: 'AIzaSyDQaCE_7C5iAmpwr_y1C1DHbtZsqag74Sk',
                gmap_center_lat: '43.2631394',
                gmap_center_lng: '-2.9275847',
                gmap_initial_zoom: 12,
                gmap_max_zoom: 16,
                gmap_marker_default_path: '/images/gmap/marker-default',
                gmap_marker_selected_path: '/images/gmap/marker-default',
                gmap_marker_group_path: '/images/gmap/marker-default'
            } %}
        </section>
    </main>
</body>
</html>
", "index.html.twig", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/index.html.twig");
    }
}
