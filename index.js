const navigation = document.createElement('header');
navigation.id = 'header-nav';
navigation.innerHTML = `
<nav>
	<a href="/index.html"><img id="logo" src="/sources/logo.png" alt="GoDive logo"
		height="100px" width="auto"></a>
    <a href="https://www.iantd.cz/" target="_blank"><img id="logoIantdSmall" src="/sources/logoIantd.png" alt="IANTD logo"
		height="100px" width="auto"></a>
	<ul class="menu-item-container" id="navMenu">
        <li><a href="/index.html#courses" title="Kurzy">Kurzy potápění</a></li>
        <li><a href="/ponor-na-zkousku.html" title="Ponor na zkoušku">Ponor&nbsp;na&nbsp;zkoušku</a></li>
		<li><a href="/plneni.html" title="Plnění lahví">Plnění&nbsp;lahví</a></li>
		<li><a href="/pujcovna.html" title="Půjčovna">Půjčovna</a></li>
		<li><a href="/vyhledavani.html" title="Vyhledávání pod vodou">Vyhledávání&nbsp;pod&nbsp;vodou</a></li>
		<li><a href="/kalendar-akci.html" title="Kalendář akcí">Kalendář akcí</a></li>
		<li><a href="/o-nas.html" title="O nás">O&nbsp;nás</a></li>
		<li><a href="https://www.instagram.com/godive.cz/" title="Fotogalerie" target="_blank">Fotogalerie</a></li>
	</ul>
    <a href="https://www.iantd.cz/" target="_blank"><img id="logoIantd" src="/sources/logoIantd.png" alt="GoDive logo"
		height="100px" width="auto"></a>
</nav>
<img src="https://toplist.cz/dot.asp?id=1796882&njs=1" border="0" alt="TOPlist" width="1" height="1" />
`;
document.body.prepend(navigation);

const footer = document.createElement('footer');
footer.innerHTML = `
<div class="footerContent">
    <section class="addressBlock">
        <h1>Škola potápění GoDive</h1>
        <p><a href="https://goo.gl/maps/V4KhPv95UTV492876" target="_blank">Koterovská 172, 326 00 Plzeň</a></p>
        <p>Mobil: <a href="tel:+420 602 148 026">+420 602 148 026</a></p>
        <p>Email: <a href="mailto:info@godive.cz">info@godive.cz</a></p>
        <p>IČ: 63541033</p>
        <p>DIČ: CZ6905012048</p>
        <p>Bankovní účet: 282610674/0300 ČSOB</p>
    </section>
    <section class="socialMedia">
        <a href="https://www.instagram.com/godive.cz/" target="_blank">
            <svg id="instagram" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="#BDBDBD">
                <path
                        d="M20,0 C8.9541,0 0,8.95435 0,20 C0,31.0457 8.9541,40 20,40 C31.0459,40 40,31.0457 40,20 C40,8.95435 31.0459,0 20,0 Z M15.603,9.39783 C16.7407,9.34607 17.104,9.33337 20.001,9.33337 C22.8955,9.33337 23.2578,9.34607 24.3955,9.39783 C25.5312,9.44983 26.3066,9.62964 26.9868,9.89343 C27.689,10.1656 28.2822,10.53 28.8755,11.1234 C29.4692,11.7163 29.8335,12.3114 30.1069,13.0129 C30.3691,13.6912 30.5488,14.4663 30.6025,15.6019 C30.6533,16.7396 30.667,17.1033 30.667,20.0001 C30.667,22.8971 30.6533,23.2598 30.6025,24.3976 C30.5488,25.5327 30.3691,26.308 30.1069,26.9865 C29.8335,27.6877 29.4692,28.283 28.8755,28.8759 C28.2832,29.4691 27.689,29.8345 26.9873,30.1069 C26.3086,30.3707 25.5327,30.5505 24.397,30.6025 C23.2593,30.6543 22.897,30.6669 20,30.6669 C17.103,30.6669 16.7397,30.6543 15.6021,30.6025 C14.4668,30.5505 13.6914,30.3707 13.0127,30.1069 C12.3115,29.8345 11.7163,29.4691 11.1235,28.8759 C10.5308,28.283 10.166,27.6877 9.89355,26.9862 C9.62988,26.308 9.4502,25.5328 9.39795,24.3973 C9.34619,23.2595 9.3335,22.8971 9.3335,20.0001 C9.3335,17.1033 9.34668,16.7395 9.39795,15.6017 C9.44873,14.4666 9.62891,13.6912 9.89307,13.0127 C10.1665,12.3114 10.5312,11.7163 11.1245,11.1234 C11.7173,10.5303 12.3125,10.1658 13.0142,9.89343 C13.6924,9.62964 14.4673,9.44983 15.603,9.39783 Z"
                        data-v-a015fb66=""></path>
                <path
                        d="M7.7876,1.2868e-05 L8.74463,1.2868e-05 C11.5928,1.2868e-05 11.9302,0.0102668 13.0547,0.0612922 C14.0947,0.1089 14.6592,0.282606 15.0352,0.428724 C15.5332,0.621961 15.8882,0.853162 16.2612,1.22645 C16.6343,1.59974 16.8657,1.95534 17.0591,2.45314 C17.2051,2.82875 17.3794,3.3932 17.4268,4.43312 C17.4775,5.55763 17.4888,5.8954 17.4888,8.74208 C17.4888,11.5888 17.4775,11.9265 17.4268,13.051 C17.3789,14.0911 17.2051,14.6555 17.0591,15.031 C16.8657,15.5288 16.6343,15.8833 16.2612,16.2564 C15.8877,16.6298 15.5332,16.8609 15.0352,17.0542 C14.6597,17.2008 14.0947,17.3742 13.0547,17.4218 C11.9302,17.4728 11.5928,17.4839 8.74463,17.4839 C5.89648,17.4839 5.55859,17.4728 4.43408,17.4218 C3.39404,17.3738 2.82959,17.2 2.45361,17.054 C1.95557,16.8606 1.6001,16.6295 1.22705,16.2561 C0.853516,15.8828 0.622559,15.5282 0.428711,15.0302 C0.282715,14.6546 0.108887,14.0901 0.0615234,13.0502 C0.0102539,11.9257 0,11.5879 0,8.73939 C0,5.891 0.0102539,5.55494 0.0615234,4.43043 C0.108887,3.39052 0.282715,2.82606 0.428711,2.44996 C0.62207,1.95228 0.853516,1.59669 1.22705,1.22328 C1.6001,0.849988 1.95557,0.618909 2.45361,0.425062 C2.82959,0.278455 3.39404,0.105115 4.43408,0.0573859 C5.41846,0.0128303 5.7998,-0.000475413 7.7876,1.2868e-05 Z M14.438,1.77113 C13.7314,1.77113 13.1582,2.34376 13.1582,3.05067 C13.1582,3.75734 13.7314,4.3307 14.438,4.3307 C15.145,4.3307 15.7183,3.75734 15.7183,3.05067 C15.7183,2.34401 15.145,1.77064 14.438,1.77113 Z M3.2666,8.74452 C3.2666,5.71937 5.71924,3.26674 8.74463,3.26674 C11.7695,3.26674 14.2212,5.71937 14.2212,8.74452 C14.2212,11.7697 11.7695,14.2213 8.74463,14.2213 C5.71924,14.2213 3.2666,11.7697 3.2666,8.74452 Z"
                        transform="translate(11.26 11.26)" data-v-a015fb66=""></path>
                <path stroke="#FFF" stroke-width="2"
                      d="M4.55499342,0 C7.07049549,0 9.10999966,2.03920952 9.10999966,4.55499342 C9.10999966,7.07049549 7.07049549,9.10999966 4.55499342,9.10999966 C2.03920952,9.10999966 0,7.07049549 0,4.55499342 C0,2.03920952 2.03920952,2.02282451e-15 4.55499342,2.02282451e-15 L4.55499342,0 Z"
                      transform="translate(15.45 15.44)" data-v-a015fb66=""></path>
            </svg>
        </a>
        <a href="https://www.youtube.com/channel/UCiHQsYn1ToM8lhL5KlKAkfA?view_as=subscriber&pbjreload=10"
           target="_blank">
           <svg id="youtube" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="#BDBDBD"
                class="youtube icon" data-v-a015fb66="">
               <path d="M20,0 C8.9541,0 0,8.95435 0,20 C0,31.0457 8.9541,40 20,40 C31.0459,40 40,31.0457 40,20 C40,8.95435 31.0459,0 20,0 Z M28.335,13.1244 C29.2529,13.3763 29.9756,14.1185 30.2212,15.061 C30.667,16.7692 30.667,20.3333 30.667,20.3333 C30.667,20.3333 30.667,23.8973 30.2212,25.6056 C29.9756,26.5481 29.2529,27.2903 28.335,27.5424 C26.6714,28 20,28 20,28 C20,28 13.3291,28 11.6655,27.5424 C10.7476,27.2903 10.0244,26.5481 9.7793,25.6056 C9.3335,23.8973 9.3335,20.3333 9.3335,20.3333 C9.3335,20.3333 9.3335,16.7692 9.7793,15.061 C10.0244,14.1185 10.7476,13.3763 11.6655,13.1244 C13.3291,12.6666 20,12.6666 20,12.6666 C20,12.6666 26.6714,12.6666 28.335,13.1244 Z"
                     data-v-a015fb66=""></path>
                <polygon points="0 6.667 0 0 5.333 3.333" transform="translate(18 17.33)"
                         data-v-a015fb66=""></polygon>
            </svg>
        </a>
    </section>
</div>
`;

document.body.appendChild(footer);


const script = document.createElement('script');
script.src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);

const meta = document.createElement("meta")
meta.name = "author"
meta.content = "Jakub Peca, pecaj.dev@gmail.com"
document.getElementsByTagName('head')[0].appendChild(meta);

const cookieBar = document.createElement("div")
cookieBar.className = "cookieBar"
cookieBar.innerHTML = `<p class="cookieNotification">Užíváním našich stránek vyjadřujete souhlas s používáním cookies pro analytické účely</p>
<button class="cookieClose" onclick="document.cookie='godiveCookie=true; SameSite=Strict'; $('.cookieBar').css('display','none')">X</button>`

if (!document.cookie.includes("godiveCookie=true"))
    document.body.appendChild(cookieBar)