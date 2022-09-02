<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/image/upload-manual.html.twig */
class __TwigTemplate_83508e9eaae485a3d597ea4ccd4e887a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/image/upload-manual.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/image/upload-manual.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/image/upload-manual.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Manual Upload !";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
body
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:100%;
 font-family: \"Myriad Pro\",\"Helvetica Neue\",Helvetica,Arial,Sans-Serif;
 background-color:#34495E;
}
#wrapper
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:995px;
 min-height:200px;
}
#wrapper h1
{
 margin-top:50px;
 font-size:45px;
 color:#FDF2E9;
}
#wrapper h1 p
{
 font-size:18px;
}
#text_div input[type=\"text\"]
{
 width:300px;
 height:35px;
 padding:10px;
 border:1px solid #a5ccba;  
}
#text_div input[type=\"submit\"]
{
 width:100px;
 height:35px;
 margin-top:5px;
 background:none;
 border:1px solid #d5e7e7;
 color:grey;
 font-weight:bold;
}
#text_div img
{
 width:200px;
}
</style>

<div class=\"pricing-header p-3 pb-md-4 mx-auto text-center\">
      <h1 class=\"display-5 fw-normal\">Direct Image Upload </h1>
      <p class=\"fs-5 text-muted\">Upload image to make it available to the users. </p>
    </div>
 <div class=\"col-12\">
        <div class=\"card mb-4 rounded-3 shadow-sm\">
          <div class=\"card-header py-3\">
             <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
\t\t\t\t  <li class=\"nav-item\" role=\"presentation\">
\t\t\t\t    <a class=\"nav-link \" id=\"home-tab\"  href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("image_upload_url");
        echo "\">Upload By URL</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\" role=\"presentation\">
\t\t\t\t    <a class=\"nav-link active\" href=\"#\" >Upload File</a>
\t\t\t\t  </li>
\t\t\t\t 
\t\t\t\t</ul>
          </div>
          <div class=\"card-body\">
            <div class=\"tab-content\" id=\"myTabContent\">
\t\t\t\t\t  <div class=\"tab-pane fade show active\" id=\"home-tab-pane\" role=\"tabpanel\" aria-labelledby=\"home-tab\" tabindex=\"0\">
\t\t\t\t\t  \t\t<div id=\"wrapper\">
\t\t\t\t\t\t\t\t<div id=\"text_div\">
\t\t\t\t\t\t\t\t <form method=\"post\" action=\"upload_image.php\">
\t\t\t\t\t\t\t\t  <input type=\"text\" name=\"img_url\" placeholder=\"Enter Image URL\">
\t\t\t\t\t\t\t\t  <input type=\"submit\" name=\"get_image\" value=\"Submit\">
\t\t\t\t\t\t\t\t </form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"tab-pane fade\" id=\"profile-tab-pane\" role=\"tabpanel\" aria-labelledby=\"profile-tab\" tabindex=\"0\">...</div>
\t\t\t\t\t</div>
          </div>
        </div>
      </div>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/image/upload-manual.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 66,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Manual Upload !{% endblock %}

{% block body %}
<style>
body
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:100%;
 font-family: \"Myriad Pro\",\"Helvetica Neue\",Helvetica,Arial,Sans-Serif;
 background-color:#34495E;
}
#wrapper
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:995px;
 min-height:200px;
}
#wrapper h1
{
 margin-top:50px;
 font-size:45px;
 color:#FDF2E9;
}
#wrapper h1 p
{
 font-size:18px;
}
#text_div input[type=\"text\"]
{
 width:300px;
 height:35px;
 padding:10px;
 border:1px solid #a5ccba;  
}
#text_div input[type=\"submit\"]
{
 width:100px;
 height:35px;
 margin-top:5px;
 background:none;
 border:1px solid #d5e7e7;
 color:grey;
 font-weight:bold;
}
#text_div img
{
 width:200px;
}
</style>

<div class=\"pricing-header p-3 pb-md-4 mx-auto text-center\">
      <h1 class=\"display-5 fw-normal\">Direct Image Upload </h1>
      <p class=\"fs-5 text-muted\">Upload image to make it available to the users. </p>
    </div>
 <div class=\"col-12\">
        <div class=\"card mb-4 rounded-3 shadow-sm\">
          <div class=\"card-header py-3\">
             <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
\t\t\t\t  <li class=\"nav-item\" role=\"presentation\">
\t\t\t\t    <a class=\"nav-link \" id=\"home-tab\"  href=\"{{path('image_upload_url')}}\">Upload By URL</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\" role=\"presentation\">
\t\t\t\t    <a class=\"nav-link active\" href=\"#\" >Upload File</a>
\t\t\t\t  </li>
\t\t\t\t 
\t\t\t\t</ul>
          </div>
          <div class=\"card-body\">
            <div class=\"tab-content\" id=\"myTabContent\">
\t\t\t\t\t  <div class=\"tab-pane fade show active\" id=\"home-tab-pane\" role=\"tabpanel\" aria-labelledby=\"home-tab\" tabindex=\"0\">
\t\t\t\t\t  \t\t<div id=\"wrapper\">
\t\t\t\t\t\t\t\t<div id=\"text_div\">
\t\t\t\t\t\t\t\t <form method=\"post\" action=\"upload_image.php\">
\t\t\t\t\t\t\t\t  <input type=\"text\" name=\"img_url\" placeholder=\"Enter Image URL\">
\t\t\t\t\t\t\t\t  <input type=\"submit\" name=\"get_image\" value=\"Submit\">
\t\t\t\t\t\t\t\t </form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"tab-pane fade\" id=\"profile-tab-pane\" role=\"tabpanel\" aria-labelledby=\"profile-tab\" tabindex=\"0\">...</div>
\t\t\t\t\t</div>
          </div>
        </div>
      </div>



{% endblock %}
", "admin/image/upload-manual.html.twig", "/var/www/symfony/templates/admin/image/upload-manual.html.twig");
    }
}
