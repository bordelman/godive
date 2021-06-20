courses = [{
    "title": "OWD",
    "maxDepth": 18,
    "gas": "Vzduch",
    "price": "8 900",
    "img": "owd"
}, {
    "title": "AOWD",
    "maxDepth": 30,
    "gas": "Vzduch",
    "price": "7 900",
    "img": "aowd"
}, {
    "title": "Nitrox Diver",
    "maxDepth": "",
    "gas": "Až 40% 0<sub>2</sub>",
    "price": "4 400",
    "img": "nd"
}, {
    "title": "Deep Diver",
    "maxDepth": 40,
    "gas": "",
    "price": "13 900",
    "img": "dd"
}, {
    "title": "Advanced Nitrox Diver",
    "maxDepth": 40,
    "gas": "Až 100% O<sub>2</sub>",
    "price": "8 000",
    "img": "and"
}, {
    "title": "Advanced Recreational Trimix Diver",
    "maxDepth": 45,
    "gas": "Směs N/O<sub>2</sub>/He",
    "price": "7 900",
    "img": "artd"
}, {
    "title": "Normoxic Trimix Diver",
    "maxDepth": 60,
    "gas": "Směs N/O<sub>2</sub>/He",
    "price": "17 900",
    "img": "ntd"
}, {
    "title": "Trimix Diver",
    "maxDepth": 100,
    "gas": "Směs N/O<sub>2</sub>/He",
    "price": "17 900",
    "img": "td"
}, {
    "title": "Rescue Diver",
    "maxDepth": "",
    "gas": "",
    "price": "17 900",
    "img": "rd"
}, {
    "title": "Divemaster",
    "maxDepth": "",
    "gas": "",
    "price": "17 900",
    "img": "dm"
}, {
    "title": "Ice Diver",
    "maxDepth": "",
    "gas": "",
    "price": "5 500",
    "img": "id"
}, {
    "title": "Dry Suit Diver",
    "maxDepth": "",
    "gas": "",
    "price": "4 400",
    "img": "dsd"
}, {
    "title": "Plně uzavřené okruhy",
    "img": "ccr"
}]
courses.forEach((course, index) => {
    console.log(course.img)
    let a = document.createElement("a")
    a.href = `courses/${course.img}.html`
    if (index !== courses.length - 1) {
        console.log(course.title, index, courses.length - 1)
        a.innerHTML = `
<div class="courseItemContainer" style="background-image: url(/sources/${course.img}.png);">
    <table class="courseInfo">
        <thead>
            <th colspan="2">
                <h2>${course.title}</h2>
            </th>
        </thead>
        <tbody>
            <tr>
                <td>Maximální hloubka ponoru</td>
                <td>${course.maxDepth? course.maxDepth + " m" : "Beze změny"}</td>
            </tr>
            <tr>
                <td>Dýchací plyn</td>
                <td>${course.gas? course.gas: "Beze změny"}</td>
            </tr>
            <tr>
                <td>Cena</td>
                <td>${course.price} Kč</td>
            </tr>
        </tbody>
    </table>
</div>
`
    } else {
        console.log("Kuk")
        a.innerHTML = `
<div class="courseItemContainer" style="background-image: url(/sources/${course.img}.png);">
    <div class="courseInfo">
        <h2>${course.title}</h2>
    </div>
</div>
`
    }
    document.getElementById(index ? "advanced" : "basic").appendChild(a)
})