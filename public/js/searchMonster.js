let monsters = document.querySelectorAll(".monstres");
let search2 = document.querySelector("#monsterSearch");

search2.addEventListener("change", () => {
    monsters.forEach((element) => {
        if (
            !element.innerText
                .toLowerCase()
                .includes(search2.value.toLowerCase())
        ) {
            console.log("HIDDEN ADDED");
            element.parentElement.parentElement.classList.add("hidden");
        } else {
            console.log("HIDDEN REMOVED");
            element.parentElement.parentElement.classList.remove("hidden");
        }
    });
});
