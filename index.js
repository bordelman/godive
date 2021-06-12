const navigation = document.createElement('header')
navigation.id = 'header-nav'
navigation.innerHTML = `
<nav>
	<a href="index.html"><img id="logo" src="http://www.godive.cz/userFiles/system/logo.png" alt="GoDive logo"
		height="100px" width="auto"></a>
	<!--todo "Chci se přihlásit na kurz"-->
	<ul class="menu-item-container" id="navMenu">
		<li><a href="courses.html" title="Kurzy">Kurzy</a></li>
		<li><a href="trialDive.html" title="Ponor na zkoušku">Ponor&nbspna&nbspzkoušku</a></li>
		<li><a href="filling.html" title="Plnění lahví">Plnění&nbsplahví</a></li>
		<li><a href="rent.html" title="Půjčovna">Půjčovna</a></li>
		<li><a href="searching.html" title="Vyhledávání pod vodou">Vyhledávání&nbsppod&nbspvodou</a></li>
		<li><a href="aboutUs.html" title="O nás">O&nbspnás</a></li>
	</ul>
</nav>
<div id="transition"></div>
`
document.body.prepend(navigation)