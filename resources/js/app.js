import "./bootstrap";
import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();

const parents = document.querySelectorAll("#card-jobs");
const inputUser = document.querySelector("#inputFindJob");

const btnFilter = document.querySelectorAll("#category-filter");
const clear = document.querySelector("#clear");

inputUser.addEventListener("input", function (e) {
    const val = e.target.value;

    for (let i = 0; i < parents.length; i++) {
        const cardValue = parents[i].getElementsByTagName("h3")[0];

        if (cardValue.innerText.toLocaleLowerCase().indexOf(val) > -1) {
            parents[i].style.display = "";
        } else {
            parents[i].style.display = "none";
        }
    }
});

for (let i = 0; i < btnFilter.length; i++) {
    btnFilter[i].addEventListener("click", function () {
        for (let j = 0; j < btnFilter.length; j++) {
            if (btnFilter[j].classList.contains("bg-slate-700", "text-white")) {
                btnFilter[j].classList.remove("bg-slate-700", "text-white");
            }
        }

        for (let k = 0; k < parents.length; k++) {
            const label = parents[k].querySelector("#categoryCardJob");

            if (
                label.innerText
                    .toLocaleLowerCase()
                    .indexOf(btnFilter[i].innerText.toLowerCase()) > -1
            ) {
                parents[k].style.display = "";
            } else {
                parents[k].style.display = "none";
            }
        }

        btnFilter[i].classList.add("bg-slate-700", "text-white");
    });
}

clear.addEventListener("click", function () {
    for (let i = 0; i < btnFilter.length; i++) {
        btnFilter[i].classList.remove("bg-slate-700", "text-white");
    }

    for (let j = 0; j < parents.length; j++) {
        parents[j].style.display = "";
    }
});
