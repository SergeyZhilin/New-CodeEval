<!DOCTYPE HTML>

<html>
  <head>
    <title>{% block title %}{% endblock %}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="../asset/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="../asset/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="../asset/css/ie8.css" /><![endif]-->
  </head>
  <body>

    <!-- Sidebar -->
	{%  include "sidebar.php" %} 

    <!-- Wrapper -->
      <div id="wrapper">


        <!-- Intro -->
	{%  include "intro.php" %} 

        <!-- One -->
	{%  include "check.php" %}

        <!-- Two -->
	{%  include "result.php" %}

        <!-- Three -->
    {%  include "contacts.php" %}

      </div>

    <!-- Footer -->
	{%  include "footer.php" %} 

    <!-- Scripts -->
      <script src="asset/js/jquery.min.js"></script>
      <script src="asset/js/jquery.scrollex.min.js"></script>
      <script src="asset/js/jquery.scrolly.min.js"></script>
      <script src="asset/js/skel.min.js"></script>
      <script src="asset/js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="asset/js/main.js"></script>

  </body>
</html>