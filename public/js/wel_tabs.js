const ahTab = document.querySelectorAll(".ahTab");
const ahItem = document.querySelectorAll(".ahItem");
ahTab.forEach((e) => {
    onTabClick(ahTab, ahItem, e);
});

const mrTab = document.querySelectorAll(".mrTab");
const mrItem = document.querySelectorAll(".mrItem");
mrTab.forEach((e) => {
    onTabClick(mrTab, mrItem, e);
});

const lbTab = document.querySelectorAll(".lbTab");
const lbItem = document.querySelectorAll(".lbItem");
lbTab.forEach((e) => {
    onTabClick(lbTab, lbItem, e);
});

const dzTab = document.querySelectorAll(".dzTab");
const dzItem = document.querySelectorAll(".dzItem");
dzTab.forEach((e) => {
    onTabClick(dzTab, dzItem, e);
});

const bnTab = document.querySelectorAll(".bnTab");
const bnItem = document.querySelectorAll(".bnItem");
bnTab.forEach((e) => {
    onTabClick(bnTab, bnItem, e);
});


function onTabClick(formBtns, formItems, itemForm) {
    itemForm.addEventListener("click", function (e) {
        let currentformBtn = itemForm;
        let tabIdForm = currentformBtn.getAttribute("data-tab");
        let currentformItem = document.querySelector(tabIdForm);
        if (!currentformBtn.classList.contains("active")) {
            formBtns.forEach(function (itemForm) {
                itemForm.classList.remove("active");
            });
            formItems.forEach(function (itemForm) {
                itemForm.classList.remove("active");
            });
            currentformBtn.classList.add("active");
            currentformItem.classList.add("active");
        }
        $(".listingPage__slider").slick("setPosition");
    });
}
