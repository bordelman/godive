const products = {
	mask: {
		label: "Maska",
		price: 40,
		count: 0
	},
	fin: {
		label: "Ploutve",
		price: 40,
		count: 0
	},
	shoes: {
		label: "Neoprenové boty",
		price: 30,
		count: 0
	},
	neoprene: {
		label: "Neoprenový oblek",
		price: 50,
		count: 0
	},
	balaclavaHelmet: {
		label: "Kukla",
		price: 20,
		count: 0
	},
	gloves: {
		label: "Rukavice",
		price: 20,
		count: 0
	},
	drySuit: {
		label: "Suchý oblek",
		price: 100,
		count: 0
	},
	wing: {
		label: "Žaket/křídlo",
		price: 70,
		count: 0
	},
	weightBelt: {
		label: "Zátěžový opasek",
		price: 10,
		count: 0
	},
	diveWeight: {
		label: "Kostka závaží (1kg, 1,5kg, 2kg)",
		price: 5,
		count: 0
	},
	automatika: {
		label: "Plicní automatika včetně octopusu",
		price: 70,
		count: 0
	},
	tank10: {
		label: "Ocelová láhev, 10 litrů, plná/200 bar (vzduch)",
		price: 150,
		count: 0
	},
	tank12: {
		label: "Ocelová láhev, 12 litrů, plná/200 bar (vzduch)",
		price: 170,
		count: 0
	},
	tank15: {
		label: "Ocelová láhev, 15 litrů, plná/200 bar (vzduch)",
		price: 200,
		count: 0
	},
	computer: {
		label: "Dekompresní počítač",
		price: 70,
		count: 0
	},
	primaryLight: {
		label: "Potápěčské hlavní světlo",
		price: 150,
		count: 0
	},
	secundaryLight: {
		label: "Potápěčské světlo malé",
		price: 50,
		count: 0
	},
	knife: {
		label: "Potápěčský nůž",
		price: 20, count: 0
	},
	compass: {
		label: "Potápěčský kompas",
		price: 30,
		count: 0
	},
	buoy: {
		label: "Dekompresní bójka (včetně bubínku)",
		price: 20,
		count: 0
	}
}

function insertTBody() {
	let html = ""
	for (const id in products) {
		html += ` <tr>
		<td><input class="countInput" type="number" name="${id}" id="${id}" min=0 step=1 value=${products[id].count} oninput="changePrice('${id}', this.value)"></td>
			<td class="item"><label for="${id}">${products[id].label}</label></td>
			<td class="price">${products[id].price}</td>
		</tr>`
	}
	let tbody = document.createElement("tbody")
	tbody.innerHTML = html
	console.log(tbody)
	document.getElementsByTagName("thead")[0].after(tbody)
	return (html)
}

function showForm() {
	$('#hidden')[0].style = 'display:block'
	$('#birthDate')[0].max = new Date().toLocaleDateString('en-ca')
	$('#dateFrom')[0].min = new Date().toLocaleDateString('en-ca')
}

function changePrice(id, count) {
	let days = document.getElementById("days").value
	if (id)

		products[id].count = parseInt(count)
	document.getElementById("totalPrice").value = parseInt(getTotalPrice() * (days > 10 ? days * 0.8 : days > 2 ? days * 0.9 : days))
}

function getTotalPrice() {
	let tempPrice = 0
	for (const item in products) {
		tempPrice += products[item].count * products[item].price
	}
	return tempPrice
}