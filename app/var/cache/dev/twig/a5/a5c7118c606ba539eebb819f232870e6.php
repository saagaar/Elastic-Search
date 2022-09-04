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

/* admin/admin/index.html.twig */
class __TwigTemplate_e4b644213690712e8023a29a71b1cd28 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin/index.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/admin/index.html.twig", 1);
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

        echo "Dashboard Admin!";
        
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
      <h1 class=\"display-4 fw-normal\">Dashboard</h1>
      ";
        // line 59
        echo "    </div>

    <div class=\"table-responsive\">
      <table class=\"table text-center\">
        <thead>
          <tr>
            <th style=\"width: 34%;\"></th>
            <th style=\"width: 22%;\">Free</th>
            <th style=\"width: 22%;\">Pro</th>
            <th style=\"width: 22%;\">Enterprise</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope=\"row\" class=\"text-start\">Public</th>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
          </tr>
          <tr>
            <th scope=\"row\" class=\"text-start\">Private</th>
            <td></td>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope=\"row\" class=\"text-start\">Permissions</th>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
          </tr>
          <tr>
            <th scope=\"row\" class=\"text-start\">Sharing</th>
            <td></td>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
          </tr>
          <tr>
            <th scope=\"row\" class=\"text-start\">Unlimited members</th>
            <td></td>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
          </tr>
          <tr>
            <th scope=\"row\" class=\"text-start\">Extra security</th>
            <td></td>
            <td></td>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
          </tr>
        </tbody>
      </table>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 59,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Dashboard Admin!{% endblock %}

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
      <h1 class=\"display-4 fw-normal\">Dashboard</h1>
      {# <p class=\"fs-5 text-muted\">Upload image to make it available to the users. </p>#}
    </div>

    <div class=\"table-responsive\">
      <table class=\"table text-center\">
        <thead>
          <tr>
            <th style=\"width: 34%;\"></th>
            <th style=\"width: 22%;\">Free</th>
            <th style=\"width: 22%;\">Pro</th>
            <th style=\"width: 22%;\">Enterprise</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope=\"row\" class=\"text-start\">Public</th>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
          </tr>
          <tr>
            <th scope=\"row\" class=\"text-start\">Private</th>
            <td></td>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope=\"row\" class=\"text-start\">Permissions</th>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
          </tr>
          <tr>
            <th scope=\"row\" class=\"text-start\">Sharing</th>
            <td></td>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
          </tr>
          <tr>
            <th scope=\"row\" class=\"text-start\">Unlimited members</th>
            <td></td>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
          </tr>
          <tr>
            <th scope=\"row\" class=\"text-start\">Extra security</th>
            <td></td>
            <td></td>
            <td><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#check\"/></svg></td>
          </tr>
        </tbody>
      </table>


{% endblock %}
", "admin/admin/index.html.twig", "/var/www/symfony/templates/admin/admin/index.html.twig");
    }
}
