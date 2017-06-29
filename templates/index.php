{% extends "base.php" %}
{% block title %}{{ title }}{% endblock %}

{% block content %}
	<h1>Привет из файла шаблонизатора</h1>

	<h3>Наши постоянные покупатели</h3>

<!--Проходим по масивам масива, и заносим данные из БД-->	
	<ul>
	{% for customer in customers %} 
	<li>{{ customer.fio }}</li>
	{% endfor %}
	</ul>
{% endblock %}