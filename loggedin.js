function toggleAccount() {
    var account = document.getElementById("account");
    account.classList.toggle("lg:block");
}

document.querySelector("#accountButton").addEventListener("click", toggleAccount);