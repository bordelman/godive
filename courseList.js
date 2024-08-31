courses = [{
    "title": "OWD",
    "maxDepth": 18,
    "gas": "Vzduch",
    "price": "11 900",
    "img": "owd"
}, {
    "title": "AOWD",
    "maxDepth": 30,
    "gas": "Vzduch,<br>EAN do 40% O<sub>2</sub>",
    "price": "8 900",
    "img": "aowd"
}, {
    "title": "Nitrox Diver",
    "maxDepth": "",
    "gas": "Až 40% O<sub>2</sub>",
    "price": "4 900",
    "img": "nd"
}, {
    "title": "Deep Diver",
    "maxDepth": 40,
    "gas": "Vzduch,<br>EAN do 40% O<sub>2</sub>",
    "price": "8 900",
    "img": "dd"
}, {
    "title": "Advanced Nitrox Diver",
    "maxDepth": 40,
    "gas": "Až 100% O<sub>2</sub>",
    "price": "8 900",
    "img": "and"
}, {
    "title": "Technical Diver",
    "maxDepth": 54,
    "gas": "Až 100% O<sub>2</sub>",
    "price": "8 900",
    "img": "tecd"
}, {
    "title": "Advanced Recreational Trimix&nbsp;Diver",
    "maxDepth": 45,
    "gas": "Směs N<sub>2</sub>/O<sub>2</sub>/He",
    "price": "8 900",
    "img": "artd"
}, {
    "title": "Normoxic Trimix Diver",
    "maxDepth": 60,
    "gas": "Směs N<sub>2</sub>/O<sub>2</sub>/He",
    "price": "17 900",
    "img": "ntd"
}, {
    "title": "Trimix Diver",
    "maxDepth": 100,
    "gas": "Směs N<sub>2</sub>/O<sub>2</sub>/He",
    "price": "17 900",
    "img": "td"
}, {
    "title": "Rescue Diver",
    "maxDepth": 30,
    "gas": "Vzduch,<br>EAN do 40% O<sub>2</sub><br>použití pro první pomoc O<sub>2</sub>",
    "price": "8 900",
    "img": "rd"
}, {
    "title": "Divemaster",
    "maxDepth": 40,
    "gas": "Vzduch,<br>EANx až O<sub>2</sub>",
    "price": "17 900",
    "img": "dm"
}, {
    "title": "Ice Diver",
    "maxDepth": 30,
    "gas": "Vzduch,<br>EAN do 40% O<sub>2</sub>",
    "price": "7 900",
    "img": "id"
}, {
    "title": "Dry Suit Diver",
    "maxDepth": 30,
    "gas": "Vzduch,<br>EAN do 40% O<sub>2</sub>",
    "price": "4 900",
    "img": "dsd"
},{
    "title": "IANTD instruktor",
    "img": "instructor"
}, {
    "title": "Plně uzavřené okruhy",
    "img": "ccr"
}];
courses.forEach((course, index) => {
    let a = document.createElement("a");
    let link = course.img !== "ccr" ? `kurzy/${course.img}.html` : "http://www.ccr-meg.cz/"
    a.href = link;
    a.style.backgroundImage= `url('/sources/${course.img}.png')`
    a.className = "courseItemContainer"
    if (index < courses.length - 2) {
        a.innerHTML = `
    <table class="courseInfo">
        <thead>
            <th colspan="2">
                <h2>${course.title}</h2>
            </th>
        </thead>
        <tbody>
            <tr>
                <td>Maximální hloubka ponoru</td>
                <td>${course.maxDepth ? course.maxDepth + " m" : "Beze změny"}</td>
            </tr>
            <tr>
                <td>Dýchací plyn</td>
                <td>${course.gas ? course.gas : "Beze změny"}</td>
            </tr>
            <tr>
                <td>Cena</td>
                <td>${course.price} Kč</td>
            </tr>
        </tbody>
    </table>
`;
    } else {
        a.innerHTML = `
    <div class="courseInfo">
        <h2>${course.title}</h2>
    </div>
`;
    }
    document.getElementById(index ? "advanced" : "basic").appendChild(a);
});
