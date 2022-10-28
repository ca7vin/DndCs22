let monsters = document.querySelectorAll(".monstres");
let search2 = document.querySelector("#monsterSearch");

search2.addEventListener("change", () => {
    monsters.forEach((element) => {
        if (
            !element.innerText
                .toLowerCase()
                .includes(search2.value.toLowerCase())
        ) {
            element.parentElement.parentElement.classList.add("hidden");
        } else {
            element.parentElement.parentElement.classList.remove("hidden");
        }
    });
});
